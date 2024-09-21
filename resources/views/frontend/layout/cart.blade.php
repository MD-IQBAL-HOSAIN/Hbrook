@extends('frontend.app')

@section('title')
    Cart
@endsection

@push('style')
    <link rel="stylesheet" href="{{ asset('frontend/css/plugins/magnific-popup.min.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="{{asset('frontend/css/responsive2.css')}}" />
@endpush

@section('content')

<main class="container bi-cart-page">
    <!-- navigation -->
    <div class="bi-navigation-container">
      <ul>
        <li class="active"><a href="{{ route('cart') }}">Cart</a></li>
        <li><a href="{{ route('payment-info') }}">information</a></li>
        <li><a href="{{ route('payment') }}">Payment</a></li>
      </ul>
    </div>
    <!-- Cart box -->
    <div class="bi-cart-container">
      <h1>Cart</h1>
      <svg xmlns="http://www.w3.org/2000/svg" width="650" height="2" viewBox="0 0 650 2" fill="none">
        <path d="M0 1L650 0.999943" stroke="#222222" />
      </svg>
      <!-- carts for mobile -->
      <div class="bi-cart-page-table-container-mobile">
        <!-- product 1 -->
        <div class="bi-cart-product">
          <div class="bi-cart-product-image">
            <img src="{{ asset('frontend/images/CartProduct.png') }}" alt="" srcset="" />
          </div>
          <div class="bi-cart-product-info">
            <div class="bi-delete-cart">
              <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                <path d="M8 8.3999L24 24.3999M24 8.3999L8 24.3999" stroke="#222222" stroke-width="2"
                  stroke-linecap="round" />
              </svg>
            </div>
            <div class="bi-cart-product-name">
              Product Name : Lorem ipsum dolor sit amet, consectetur.
            </div>
            <div class="bi-cart-product-price">$60.00</div>
            <div class="bi-cart-product-quantity">
              <svg class="bi-mobile-cart-val-inc" xmlns="http://www.w3.org/2000/svg" width="10" height="10"
                viewBox="0 0 10 10" fill="none">
                <path d="M5 2L10 7.33333H0L5 2Z" fill="#222222" />
              </svg>
              <input type="number" value="1" min="1" disabled />
              <svg class="bi-mobile-cart-val-dec" xmlns="http://www.w3.org/2000/svg" width="10" height="10"
                viewBox="0 0 10 10" fill="none">
                <path d="M5 8.00008L0 2.66675H10L5 8.00008Z" fill="#222222" />
              </svg>
            </div>
          </div>
        </div>
        <!-- product 2 -->

      </div>
      <!-- cart for laptop and desktop -->
      <div class="bi-cart-page-table-container">
        <table>
          <tbody>
              <tr>
                  <td>
                      <svg class="bi-cart-remove" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                          <path d="M8 8.3999L24 24.3999M24 8.3999L8 24.3999" stroke="#222222" stroke-width="2" stroke-linecap="round" />
                      </svg>
                  </td>
                  <td class="product-image">
                      <img src="{{ asset('frontend/images/CartProduct.png') }}" alt="" srcset="" />
                  </td>
                  <td class="name">
                      Product Name : Lorem ipsum dolor sit amet, consectetur.
                  </td>
                  <td class="quantity">
                      <svg class="bi-cart-inc" xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10" fill="none">
                          <path d="M5 2L10 7.33333H0L5 2Z" fill="#222222" />
                      </svg>
                      <input type="number" value="1" pattern="[0-9]" min="1" disabled />
                      <svg class="bi-cart-dec" xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10" fill="none">
                          <path d="M5 8.00008L0 2.66675H10L5 8.00008Z" fill="#222222" />
                      </svg>
                  </td>
                  <td class="price">$60.00</td>
              </tr>
              <tr>
                  <td>
                      <svg class="bi-cart-remove" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                          <path d="M8 8.3999L24 24.3999M24 8.3999L8 24.3999" stroke="#222222" stroke-width="2" stroke-linecap="round" />
                      </svg>
                  </td>
                  <td class="product-image">
                      <img src="{{ asset('frontend/images/CartProduct.png') }}" alt="" srcset="" />
                  </td>
                  <td class="name">
                      Product Name : Lorem ipsum dolor sit amet, consectetur.
                  </td>
                  <td class="quantity">
                      <svg class="bi-cart-inc" xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10" fill="none">
                          <path d="M5 2L10 7.33333H0L5 2Z" fill="#222222" />
                      </svg>
                      <input type="number" value="1" pattern="[0-9]" min="1" disabled />
                      <svg class="bi-cart-dec" xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10" fill="none">
                          <path d="M5 8.00008L0 2.66675H10L5 8.00008Z" fill="#222222" />
                      </svg>
                  </td>
                  <td class="price">$60.00</td>
              </tr>
              <tr>
                  <td>
                      <svg class="bi-cart-remove" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                          <path d="M8 8.3999L24 24.3999M24 8.3999L8 24.3999" stroke="#222222" stroke-width="2" stroke-linecap="round" />
                      </svg>
                  </td>
                  <td class="product-image">
                      <img src="{{ asset('frontend/images/CartProduct.png') }} " alt="" srcset="" />
                  </td>
                  <td class="name">
                      Product Name : Lorem ipsum dolor sit amet, consectetur.
                  </td>
                  <td class="quantity">
                      <svg class="bi-cart-inc" xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10" fill="none">
                          <path d="M5 2L10 7.33333H0L5 2Z" fill="#222222" />
                      </svg>
                      <input type="number" value="1" pattern="[0-9]" min="1" disabled />
                      <svg class="bi-cart-dec" xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10" fill="none">
                          <path d="M5 8.00008L0 2.66675H10L5 8.00008Z" fill="#222222" />
                      </svg>
                  </td>
                  <td class="price">$60.00</td>
              </tr>
              <tr>
                  <td>
                      <svg class="bi-cart-remove" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                          <path d="M8 8.3999L24 24.3999M24 8.3999L8 24.3999" stroke="#222222" stroke-width="2" stroke-linecap="round" />
                      </svg>
                  </td>
                  <td class="product-image">
                      <img src="{{ asset('frontend/images/CartProduct.png') }} " alt="" srcset="" />
                  </td>
                  <td class="name">
                      Product Name : Lorem ipsum dolor sit amet, consectetur.
                  </td>
                  <td class="quantity">
                      <svg class="bi-cart-inc" xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10" fill="none">
                          <path d="M5 2L10 7.33333H0L5 2Z" fill="#222222" />
                      </svg>
                      <input type="number" value="1" pattern="[0-9]" min="1" disabled />
                      <svg class="bi-cart-dec" xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10" fill="none">
                          <path d="M5 8.00008L0 2.66675H10L5 8.00008Z" fill="#222222" />
                      </svg>
                  </td>
                  <td class="price">$60.00</td>
              </tr>
              <tr>
                  <td>
                      <svg class="bi-cart-remove" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                          <path d="M8 8.3999L24 24.3999M24 8.3999L8 24.3999" stroke="#222222" stroke-width="2" stroke-linecap="round" />
                      </svg>
                  </td>
                  <td class="product-image">
                      <img src="{{ asset('frontend/images/CartProduct.png') }} " alt="" srcset="" />
                  </td>
                  <td class="name">
                      Product Name : Lorem ipsum dolor sit amet, consectetur.
                  </td>
                  <td class="quantity">
                      <svg class="bi-cart-inc" xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10" fill="none">
                          <path d="M5 2L10 7.33333H0L5 2Z" fill="#222222" />
                      </svg>
                      <input type="number" value="1" pattern="[0-9]" min="1" disabled />
                      <svg class="bi-cart-dec" xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10" fill="none">
                          <path d="M5 8.00008L0 2.66675H10L5 8.00008Z" fill="#222222" />
                      </svg>
                  </td>
                  <td class="price">$60.00</td>
              </tr>
              <tr>
                  <td>
                      <svg class="bi-cart-remove" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                          <path d="M8 8.3999L24 24.3999M24 8.3999L8 24.3999" stroke="#222222" stroke-width="2" stroke-linecap="round" />
                      </svg>
                  </td>
                  <td class="product-image">
                      <img src="{{ asset('frontend/') }} assets/images/CartProduct.png" alt="" srcset="" />
                  </td>
                  <td class="name">
                      Product Name : Lorem ipsum dolor sit amet, consectetur.
                  </td>
                  <td class="quantity">
                      <svg class="bi-cart-inc" xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10" fill="none">
                          <path d="M5 2L10 7.33333H0L5 2Z" fill="#222222" />
                      </svg>
                      <input type="number" value="1" pattern="[0-9]" min="1" disabled />
                      <svg class="bi-cart-dec" xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10" fill="none">
                          <path d="M5 8.00008L0 2.66675H10L5 8.00008Z" fill="#222222" />
                      </svg>
                  </td>
                  <td class="price">$60.00</td>
              </tr>

          </tbody>
      </table>
      </div>
      <div class="bi-button-container">
        <a class="bi-proceed-button" href="{{ route('payment-info') }}">
          <span>Total $7.45 USD - Proceed</span>
          <svg xmlns="http://www.w3.org/2000/svg" width="111" height="16" viewBox="0 0 111 16" fill="none">
            <path
              d="M110.707 8.70711C111.098 8.31658 111.098 7.68342 110.707 7.29289L104.343 0.928932C103.953 0.538408 103.319 0.538408 102.929 0.928932C102.538 1.31946 102.538 1.95262 102.929 2.34315L108.586 8L102.929 13.6569C102.538 14.0474 102.538 14.6805 102.929 15.0711C103.319 15.4616 103.953 15.4616 104.343 15.0711L110.707 8.70711ZM0 9H110V7H0V9Z"
              fill="white" />
          </svg>
        </a>
        <a href="{{ route('shop') }}" class="bi-redirect-back">Go back to store</a>
      </div>
    </div>
  </main>

@endsection

@push('script')
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
@endpush
