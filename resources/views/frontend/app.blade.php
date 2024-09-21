@php
    $setting = App\Models\SystemSetting::first();
@endphp

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- favicon link -->

    @if (!empty($setting->favicon))
        <link rel="icon" type="image/x-icon" href="{{ asset('storage/' . $setting->favicon) }}">
    @else
        <link rel="icon" type="image/x-icon" href="{{ asset('frontend/images/favicon.png') }}">
    @endif

    <title>
        @yield('title')
    </title>
    {{-- Style --}}
    @include('frontend.partials.style')

</head>

<body>
    <!-- header area starts -->
    @include('frontend.partials.navbar')
    <!-- header area ends -->

    <!-- main area starts -->

    @yield('content')

    <!-- main area ends -->

    <!-- footer area starts -->
    @include('frontend.partials.footer')
    <!-- footer area ends -->

    {{-- Scripts --}}
    @include('frontend.partials.scripts')

</body>

</html>
