@extends('frontend.app')

@section('title')
    Payment Info
@endsection

@push('style')
    <link rel="stylesheet" href="{{ asset('frontend/css/plugins/magnific-popup.min.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    {{-- <link rel="stylesheet" href="{{ asset('frontend/css/responsive2.css') }}" /> --}}
    <link rel="stylesheet" href="{{ asset('frontend/css/plugins/nice-select.min.css') }}" />
@endpush

@section('content')
    <!-- Order sidebar -->
    <aside id="order-summary-sidebar" class="bi-order-summary-sidebar">
        <div class="bi-sidebar-container">
            <!-- Hearder -->
            <div class="header">
                <span>Order Summary</span>
                <svg class="cursor-pointer" id="bi-close-button" xmlns="http://www.w3.org/2000/svg" width="58"
                    height="59" viewBox="0 0 58 59" fill="none">
                    <path d="M14.5 15.7251L43.5 44.7251M43.5 15.7251L14.5 44.7251" stroke="#222222" stroke-width="2"
                        stroke-linecap="round" />
                </svg>
            </div>
            <!-- order summary table -->
            <div class=" bi-order-table-container">
                <div class="bi-table-container">
                    <table>
                        <tbody>
                            <tr>
                                <td class="product-image"><img src="{{ asset('frontend/images/CartProduct.png') }} "
                                        alt="" srcset=""></td>
                                <td class="name">Product Name : Lorem ipsum dolor sit amet, consectetur .</td>
                                <td class="quantity-price">
                                    <span>Qty: 2</span>
                                    <p>$60.00 USD</p>
                                </td>
                            </tr>
                            <tr>
                                <td class="product-image"><img src="{{ asset('frontend/images/CartProduct.png') }}"
                                        alt="" srcset=""></td>
                                <td class="name">Product Name : Lorem ipsum dolor sit amet, consectetur .</td>
                                <td class="quantity-price">
                                    <span>Qty: 2</span>
                                    <p>$60.00 USD</p>
                                </td>
                            </tr>
                            <tr>
                                <td class="product-image"><img src="{{ asset('frontend/images/CartProduct.png') }}"
                                        alt="" srcset=""></td>
                                <td class="name">Product Name : Lorem ipsum dolor sit amet, consectetur .</td>
                                <td class="quantity-price">
                                    <span>Qty: 2</span>
                                    <p>$60.00 USD</p>
                                </td>
                            </tr>
                            <tr>
                                <td class="product-image"><img src="{{ asset('frontend/images/CartProduct.png') }}"
                                        alt="" srcset=""></td>
                                <td class="name">Product Name : Lorem ipsum dolor sit amet, consectetur .</td>
                                <td class="quantity-price">
                                    <span>Qty: 2</span>
                                    <p>$60.00 USD</p>
                                </td>
                            </tr>
                            <tr>
                                <td class="product-image"><img src="{{ asset('frontend/images/CartProduct.png') }}"
                                        alt="" srcset=""></td>
                                <td class="name">Product Name : Lorem ipsum dolor sit amet, consectetur .</td>
                                <td class="quantity-price">
                                    <span>Qty: 2</span>
                                    <p>$60.00 USD</p>
                                </td>
                            </tr>
                            <tr>
                                <td class="product-image"><img src="{{ asset('frontend/images/CartProduct.png') }}"
                                        alt="" srcset=""></td>
                                <td class="name">Product Name : Lorem ipsum dolor sit amet, consectetur .</td>
                                <td class="quantity-price">
                                    <span>Qty: 2</span>
                                    <p>$60.00 USD</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="bi-order-summary-calculation">
                    <div class="subtotal-container">
                        <p>
                            <span>Subtotal</span>
                            <span>$60.00 USD</span>
                        </p>
                        <p>
                            <span>Tax</span>
                            <span>$60.00 USD</span>
                        </p>
                        <p>
                            <span>Shipping</span>
                            <span>$60.00 USD</span>
                        </p>
                    </div>
                    <div class="total-container">
                        <span>Total</span>
                        <span>$7.24</span>
                    </div>
                </div>
            </div>
        </div>
    </aside>

    <!-- Main Page -->
    <main class="container bi-shopping-info-page">
        <!-- navigation -->
        <div class="bi-navigation-container">
            <ul>
                <li class="active"><a href="{{ route('cart') }}">Cart</a></li>
                <li class="active"><a href="{{ route('payment-info') }}">Information</a></li>
                <li><a href="{{ route('payment') }}">Payment</a></li>
            </ul>
        </div>
        <!-- Cart box -->
        <div class="bi-info-container">
            <h1>Information</h1>
            <svg xmlns="http://www.w3.org/2000/svg" width="650" height="2" viewBox="0 0 650 2" fill="none">
                <path d="M0 1L650 0.999943" stroke="#222222" />
            </svg>
            <form action="{{ route('payment') }}">
                <!-- payment options -->
                <div class="payment-option-container">
                    <h3 class="heading">Pay With:</h3>
                    <div class="radios-options">
                        <div class="radio-option">
                            <input type="radio" name="payment-option" id="method-1" value="card" />
                            <label for="method-1"> Card </label>
                        </div>
                        <div class="radio-option">
                            <input type="radio" name="payment-option" id="method-2" value="bank" />
                            <label for="method-2"> Bank </label>
                        </div>
                        <div class="radio-option">
                            <input type="radio" name="payment-option" id="method-3" value="transfer" />
                            <label for="method-3"> Transfer </label>
                        </div>
                    </div>
                </div>
                <!-- contact email -->
                <div class="contact-email-container">
                    <h3 class="heading">Contact</h3>
                    <input type="email" placeholder="Email Address" required />
                    <div class="checkbox">
                        <input type="checkbox" class="cursor-pointer" name="terms" id="terms" />
                        <label for="terms"> Email me with news and offers </label>
                    </div>
                </div>
                <!-- Shopping address container -->
                <div class="shopping-address-container">
                    <h3 class="heading">Shopping Address</h3>
                    <div class="shopping-address-input-wrapper">
                        <select name="region" id="region" required>
                            <option disabled selected class="selected" value="AF">Country/Region</option>
                            <option value="AF">Afganistan</option>
                            <option value="AL">Albania</option>
                            <option value="AF">Afganistan</option>
                            <option value="AL">Albania</option>
                            <option value="AF">Afganistan</option>
                            <option value="AL">Albania</option>
                        </select>

                    </div>
                    <div class="shopping-address-input-wrapper">
                        <input type="text" placeholder="First Name" required />
                        <input type="text" placeholder="Last Name" required />
                    </div>
                    <div class="shopping-address-input-wrapper">
                        <input type="text" placeholder="Address" required />
                    </div>
                    <div class="shopping-address-input-wrapper">
                        <input type="text" placeholder="Apartment, Suite, etc, (optional)" />
                    </div>
                    <div class="shopping-address-input-wrapper">
                        <input type="text" placeholder="City" />
                        <input type="text" placeholder="Postal Code" required />
                    </div>
                    <div class="shopping-address-input-wrapper">
                        <input type="tel" placeholder="Phone Number" required />
                    </div>
                    <div class="shopping-address-input-wrapper">
                        <input class="cursor-pointer" type="checkbox" name="save" id="save" />
                        <label for="save"> Save this address for next time </label>
                    </div>
                </div>
        </div>
        <div class="bi-total-button-container">
                <button type="submit" class="bi-total-button">
                    <span>Continue to Shopping</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="111" height="16" viewBox="0 0 111 16"
                        fill="none">
                        <path
                            d="M110.707 8.70711C111.098 8.31658 111.098 7.68342 110.707 7.29289L104.343 0.928932C103.953 0.538408 103.319 0.538408 102.929 0.928932C102.538 1.31946 102.538 1.95262 102.929 2.34315L108.586 8L102.929 13.6569C102.538 14.0474 102.538 14.6805 102.929 15.0711C103.319 15.4616 103.953 15.4616 104.343 15.0711L110.707 8.70711ZM0 9H110V7H0V9Z"
                            fill="white" />
                    </svg>
                </button>
            <span id="view-cart" class="view-cart"> View Cart </span>
        </div>
        </form>
        </div>
    </main>
@endsection

@push('script')
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
@endpush
