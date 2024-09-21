<?php
//
namespace App\Http\Controllers\Web\Backend;

use App\Http\Controllers\Controller;
use App\Models\SystemSetting;
use App\Models\User;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;


class SystemSettingController extends Controller
{

    public function index()
    {
        $setting = SystemSetting::latest('id')->first();
        return view('backend.layout.system_setting.index', compact('setting'));
    }

    public function profileindex()
    {
        return view('backend.layout.system_setting.profile_setting');
    }

    public function stripeindex()
    {
        return view('backend.layout.system_setting.stripe');
    }
    /**
     * Update the system settings.
     *
     * @param  Request  $request
     * @return RedirectResponse
     */
    // public function update(Request $request)
    // {
    //     $validator = Validator::make($request->all(), [
    //         'system_name' => 'nullable',
    //         'description' => 'nullable',
    //         'logo' => 'nullable',
    //         'favicon' => 'nullable',
    //         'copyright' => 'nullable',
    //     ]);

    //     if ($validator->fails()) {
    //         return redirect()->back()->withErrors($validator)->withInput();
    //     }
    //     try {

    //         $setting = SystemSetting::firstOrNew();
    //         $setting->system_name = $request->system_name;
    //         $setting->description = $request->description;
    //         $setting->copyright = $request->copyright;

    //         if (!empty($request->file('logo'))) {
    //             if (empty($setting->logo)) {
    //                 $logo = fileUpload($request->file('logo'), 'setting', 'logo');
    //             } else {

    //                 @unlink(public_path('/') . $setting->logo);

    //                 $logo = fileUpload($request->file('logo'), 'setting', 'logo');
    //             }
    //             $setting->logo = $logo;
    //         }

    //         if (!empty($request->file('favicon'))) {
    //             if (empty($setting->favicon)) {
    //                 $favicon = fileUpload($request->file('favicon'), 'setting', 'favicon');
    //             } else {
    //                 @unlink(public_path('/') . $setting->favicon);

    //                 $favicon = fileUpload($request->file('favicon'), 'setting', 'favicon');
    //             }
    //             $setting->favicon = $favicon;
    //         }

    //         $setting->save();
    //         return back()->with('t-success', 'Updated successfully');
    //     } catch (Exception $e) {
    //         return back()->with('t-error', 'Failed to update');
    //     }
    // }
    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'system_name' => 'nullable',
            'description' => 'nullable',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',  // Adding image validation
            'favicon' => 'nullable|mimes:jpeg,png,jpg,gif,svg,ico|max:2048',  // Adding image validation
            'copyright' => 'nullable',
        ]);


        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        try {
            $setting = SystemSetting::firstOrNew();
            $setting->system_name = $request->system_name;
            $setting->description = $request->description;
            $setting->copyright = $request->copyright;

            if ($request->hasFile('logo')) {
                if (!empty($setting->logo)) {
                    @unlink(public_path('/') . $setting->logo);
                }
                $logo = uploadImage($request->file('logo'), 'setting/logo');
                $setting->logo = $logo;
            }

            if ($request->hasFile('favicon')) {
                if (!empty($setting->favicon)) {
                    @unlink(public_path('/') . $setting->favicon);
                }
                $favicon = uploadImage($request->file('favicon'), 'setting/favicon');
                $setting->favicon = $favicon;
            }

            $setting->save();
            return back()->with('t-success', 'Updated successfully');
        } catch (Exception $e) {
            return back()->with('t-error', 'Failed to update');
        }
    }

    public function mailSetting()
    {
        return view('backend.layout.system_setting.mailsetting');

        return redirect()->back();
    }

    public function mailSettingUpdate(Request $request)
    {
            $request->validate([
                'mail_mailer' => 'required|string',
                'mail_host' => 'required|string',
                'mail_port' => 'required|string',
                'mail_username' => 'nullable|string',
                'mail_password' => 'nullable|string',
                'mail_encryption' => 'nullable|string',
                'mail_from_address' => 'required|string',
            ]);
            try {
                $envContent = File::get(base_path('.env'));
                $lineBreak = "\n";
                $envContent = preg_replace([
                    '/MAIL_MAILER=(.*)\s/',
                    '/MAIL_HOST=(.*)\s/',
                    '/MAIL_PORT=(.*)\s/',
                    '/MAIL_USERNAME=(.*)\s/',
                    '/MAIL_PASSWORD=(.*)\s/',
                    '/MAIL_ENCRYPTION=(.*)\s/',
                    '/MAIL_FROM_ADDRESS=(.*)\s/',
                ], [
                    'MAIL_MAILER=' . $request->mail_mailer . $lineBreak,
                    'MAIL_HOST=' . $request->mail_host . $lineBreak,
                    'MAIL_PORT=' . $request->mail_port . $lineBreak,
                    'MAIL_USERNAME=' . $request->mail_username . $lineBreak,
                    'MAIL_PASSWORD=' . $request->mail_password . $lineBreak,
                    'MAIL_ENCRYPTION=' . $request->mail_encryption . $lineBreak,
                    'MAIL_FROM_ADDRESS=' . '"' . $request->mail_from_address . '"' . $lineBreak,
                ], $envContent);

                if ($envContent !== null) {
                    File::put(base_path('.env'), $envContent);
                }
                return back()->with('t-success', 'Updated successfully');
            } catch (Exception $e) {
                return back()->with('t-error', 'Failed to update');
            }

        return redirect()->back();
    }

    public function stripestore(Request $request)
    {
        if (User::find(auth()->user()->id)->hasPermissionTo('profile setting')) {
            $request->validate([
                'stripe_key'    => 'required|string',
                'stripe_secret' => 'required|string',
            ]);
            try {
                $envContent = File::get(base_path('.env'));
                $lineBreak = "\n";
                $envContent = preg_replace([
                    '/STRIPE_KEY=(.*)\s/',
                    '/STRIPE_SECRET=(.*)\s/',
                ], [
                    'STRIPE_KEY=' . $request->stripe_key . $lineBreak,
                    'STRIPE_SECRET=' . $request->stripe_secret . $lineBreak,
                ], $envContent);

                if ($envContent !== null) {
                    File::put(base_path('.env'), $envContent);
                }
                return redirect()->back()->with('t-success', 'Stripe Setting Update successfully.');
            } catch (\Throwable $th) {
                return redirect()->back()->with('t-error', 'Stripe Setting Update Failed');
            }
        }
        return redirect()->back();
    }
}
