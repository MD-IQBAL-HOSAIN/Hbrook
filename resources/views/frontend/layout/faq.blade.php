@extends('frontend.app')

@section('title')
    FAQ
@endsection

@push('style')


<style>
    #google_translate_element .goog-te-combo {
            display: none;
        }
</style>

@endpush

@section('content')
<main>
    <!-- general faq section strat -->
    <section class="general-faq-section">
      <div class="container">
        <h3 class="text-center">General FAQ</h3>
        <div class="row general-faq-wrapper">
          <div class="col-md-4 general-faq-col-one">
            <ul class="nav nav-pills">
              <li class="nav-item">
                <a class="nav-link active" data-bs-toggle="pill" href="#General">General Faqs</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="pill" href="#About">About Service</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="pill" href="#Packages">Packages</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="pill" href="#Billing">Billing And Refunds</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="pill" href="#Safety">Safety And hazards</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="pill" href="#Website">Website features</a>
              </li>
            </ul>
          </div>
          <div class="col-md-8 general-faq-col-two">
            <div class="tab-content">
              <!-- tab content one -->
              <div id="General" class="tab-pane fade show active">
                <div class="accordion" id="accordionExample1">
                  <!-- accordion-item one -->
                  <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseOne1" aria-expanded="true" aria-controls="collapseOne1">
                        How do I avail of your services?
                      </button>
                    </h2>
                    <div id="collapseOne1" class="accordion-collapse collapse show" data-bs-parent="#accordionExample1">
                      <div class="accordion-body">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur et velit nunc. Donec enim
                        nisl, pretium sit amet elit ut, congue ornare augue. Cras fringilla porta risus in finibus.
                        Interdum et malesuada fames.
                      </div>
                    </div>
                  </div>
                  <!-- accordion-item two -->
                  <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseTwo1" aria-expanded="false" aria-controls="collapseTwo1">
                        What are the services you offer?
                      </button>
                    </h2>
                    <div id="collapseTwo1" class="accordion-collapse collapse" data-bs-parent="#accordionExample1">
                      <div class="accordion-body">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur et velit nunc. Donec enim
                        nisl, pretium sit amet elit ut, congue ornare augue. Cras fringilla porta risus in finibus.
                        Interdum et malesuada fames.
                      </div>
                    </div>
                  </div>
                  <!-- accordion-item three -->
                  <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseThree1" aria-expanded="false" aria-controls="collapseThree1">
                        What areas do you cater to?
                      </button>
                    </h2>
                    <div id="collapseThree1" class="accordion-collapse collapse" data-bs-parent="#accordionExample1">
                      <div class="accordion-body">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur et velit nunc. Donec enim
                        nisl, pretium sit amet elit ut, congue ornare augue. Cras fringilla porta risus in finibus.
                        Interdum et malesuada fames.
                      </div>
                    </div>
                  </div>
                  <!-- accordion-item four -->
                  <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseFour1" aria-expanded="false" aria-controls="collapseFour1">
                        Do you provide graphic design services?
                      </button>
                    </h2>
                    <div id="collapseFour1" class="accordion-collapse collapse" data-bs-parent="#accordionExample1">
                      <div class="accordion-body">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur et velit nunc. Donec enim
                        nisl, pretium sit amet elit ut, congue ornare augue. Cras fringilla porta risus in finibus.
                        Interdum et malesuada fames.
                      </div>
                    </div>
                  </div>
                  <!-- accordion-item five -->
                  <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseFive1" aria-expanded="false" aria-controls="collapseFive1">
                        Do you provide graphic design services?
                      </button>
                    </h2>
                    <div id="collapseFive1" class="accordion-collapse collapse" data-bs-parent="#accordionExample1">
                      <div class="accordion-body">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur et velit nunc. Donec enim
                        nisl, pretium sit amet elit ut, congue ornare augue. Cras fringilla porta risus in finibus.
                        Interdum et malesuada fames.
                      </div>
                    </div>
                  </div>
                  <!-- accordion-item six -->
                  <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseSix1" aria-expanded="false" aria-controls="collapseSix1">
                        Do you provide graphic design services?
                      </button>
                    </h2>
                    <div id="collapseSix1" class="accordion-collapse collapse" data-bs-parent="#accordionExample1">
                      <div class="accordion-body">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur et velit nunc. Donec enim
                        nisl, pretium sit amet elit ut, congue ornare augue. Cras fringilla porta risus in finibus.
                        Interdum et malesuada fames.
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- tab content two -->
              <div id="About" class="tab-pane fade">
                <div class="accordion" id="accordionExample2">
                  <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseOne2" aria-expanded="true" aria-controls="collapseOne2">
                        What areas do you cater to?
                      </button>
                    </h2>
                    <div id="collapseOne2" class="accordion-collapse collapse show" data-bs-parent="#accordionExample2">
                      <div class="accordion-body">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur et velit nunc. Donec enim
                        nisl, pretium sit amet elit ut, congue ornare augue. Cras fringilla porta risus in finibus.
                        Interdum et malesuada fames.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseTwo2" aria-expanded="false" aria-controls="collapseTwo2">
                        What are the services you offer?
                      </button>
                    </h2>
                    <div id="collapseTwo2" class="accordion-collapse collapse" data-bs-parent="#accordionExample2">
                      <div class="accordion-body">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur et velit nunc. Donec enim
                        nisl, pretium sit amet elit ut, congue ornare augue. Cras fringilla porta risus in finibus.
                        Interdum et malesuada fames.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseThree2" aria-expanded="false" aria-controls="collapseThree2">
                        What areas do you cater to?
                      </button>
                    </h2>
                    <div id="collapseThree2" class="accordion-collapse collapse" data-bs-parent="#accordionExample2">
                      <div class="accordion-body">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur et velit nunc. Donec enim
                        nisl, pretium sit amet elit ut, congue ornare augue. Cras fringilla porta risus in finibus.
                        Interdum et malesuada fames.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseFour2" aria-expanded="false" aria-controls="collapseFour2">
                        Do you provide graphic design services?
                      </button>
                    </h2>
                    <div id="collapseFour2" class="accordion-collapse collapse" data-bs-parent="#accordionExample2">
                      <div class="accordion-body">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur et velit nunc. Donec enim
                        nisl, pretium sit amet elit ut, congue ornare augue. Cras fringilla porta risus in finibus.
                        Interdum et malesuada fames.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseFive2" aria-expanded="false" aria-controls="collapseFive2">
                        How do I avail of your services?
                      </button>
                    </h2>
                    <div id="collapseFive2" class="accordion-collapse collapse" data-bs-parent="#accordionExample2">
                      <div class="accordion-body">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur et velit nunc. Donec enim
                        nisl, pretium sit amet elit ut, congue ornare augue. Cras fringilla porta risus in finibus.
                        Interdum et malesuada fames.
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- tab content three -->
              <div id="Packages" class="tab-pane fade">
                <div class="accordion" id="accordionExample3">
                  <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseOne3" aria-expanded="true" aria-controls="collapseOne3">
                        Do you provide graphic design services?
                      </button>
                    </h2>
                    <div id="collapseOne3" class="accordion-collapse collapse show" data-bs-parent="#accordionExample3">
                      <div class="accordion-body">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur et velit nunc. Donec enim
                        nisl, pretium sit amet elit ut, congue ornare augue. Cras fringilla porta risus in finibus.
                        Interdum et malesuada fames.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseTwo3" aria-expanded="false" aria-controls="collapseTwo3">
                        What are the services you offer?
                      </button>
                    </h2>
                    <div id="collapseTwo3" class="accordion-collapse collapse" data-bs-parent="#accordionExample3">
                      <div class="accordion-body">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur et velit nunc. Donec enim
                        nisl, pretium sit amet elit ut, congue ornare augue. Cras fringilla porta risus in finibus.
                        Interdum et malesuada fames.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseThree3" aria-expanded="false" aria-controls="collapseThree3">
                        What areas do you cater to?
                      </button>
                    </h2>
                    <div id="collapseThree3" class="accordion-collapse collapse" data-bs-parent="#accordionExample3">
                      <div class="accordion-body">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur et velit nunc. Donec enim
                        nisl, pretium sit amet elit ut, congue ornare augue. Cras fringilla porta risus in finibus.
                        Interdum et malesuada fames.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseFour3" aria-expanded="false" aria-controls="collapseFour3">
                        Do you provide graphic design services?
                      </button>
                    </h2>
                    <div id="collapseFour3" class="accordion-collapse collapse" data-bs-parent="#accordionExample3">
                      <div class="accordion-body">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur et velit nunc. Donec enim
                        nisl, pretium sit amet elit ut, congue ornare augue. Cras fringilla porta risus in finibus.
                        Interdum et malesuada fames.
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- tab content Four -->
              <div id="Billing" class="tab-pane fade">
                <div class="accordion" id="accordionExample4">
                  <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseOne4" aria-expanded="true" aria-controls="collapseOne4">
                        How do I avail of your services?
                      </button>
                    </h2>
                    <div id="collapseOne4" class="accordion-collapse collapse show" data-bs-parent="#accordionExample4">
                      <div class="accordion-body">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur et velit nunc. Donec enim
                        nisl, pretium sit amet elit ut, congue ornare augue. Cras fringilla porta risus in finibus.
                        Interdum et malesuada fames.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseTwo4" aria-expanded="false" aria-controls="collapseTwo4">
                        What are the services you offer?
                      </button>
                    </h2>
                    <div id="collapseTwo4" class="accordion-collapse collapse" data-bs-parent="#accordionExample4">
                      <div class="accordion-body">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur et velit nunc. Donec enim
                        nisl, pretium sit amet elit ut, congue ornare augue. Cras fringilla porta risus in finibus.
                        Interdum et malesuada fames.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseThree4" aria-expanded="false" aria-controls="collapseThree4">
                        What areas do you cater to?
                      </button>
                    </h2>
                    <div id="collapseThree4" class="accordion-collapse collapse" data-bs-parent="#accordionExample4">
                      <div class="accordion-body">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur et velit nunc. Donec enim
                        nisl, pretium sit amet elit ut, congue ornare augue. Cras fringilla porta risus in finibus.
                        Interdum et malesuada fames.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseFour4" aria-expanded="false" aria-controls="collapseFour4">
                        Do you provide graphic design services?
                      </button>
                    </h2>
                    <div id="collapseFour4" class="accordion-collapse collapse" data-bs-parent="#accordionExample4">
                      <div class="accordion-body">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur et velit nunc. Donec enim
                        nisl, pretium sit amet elit ut, congue ornare augue. Cras fringilla porta risus in finibus.
                        Interdum et malesuada fames.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseFive4" aria-expanded="false" aria-controls="collapseFive4">
                        Do you provide graphic design services?
                      </button>
                    </h2>
                    <div id="collapseFive4" class="accordion-collapse collapse" data-bs-parent="#accordionExample4">
                      <div class="accordion-body">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur et velit nunc. Donec enim
                        nisl, pretium sit amet elit ut, congue ornare augue. Cras fringilla porta risus in finibus.
                        Interdum et malesuada fames.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseSix4" aria-expanded="false" aria-controls="collapseSix4">
                        Do you provide graphic design services?
                      </button>
                    </h2>
                    <div id="collapseSix4" class="accordion-collapse collapse" data-bs-parent="#accordionExample4">
                      <div class="accordion-body">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur et velit nunc. Donec enim
                        nisl, pretium sit amet elit ut, congue ornare augue. Cras fringilla porta risus in finibus.
                        Interdum et malesuada fames.
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- tab content five -->
              <div id="Safety" class="tab-pane fade">
                <div class="accordion" id="accordionExample5">
                  <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseTwo5" aria-expanded="false" aria-controls="collapseTwo5">
                        What are the services you offer?
                      </button>
                    </h2>
                    <div id="collapseTwo5" class="accordion-collapse collapse" data-bs-parent="#accordionExample5">
                      <div class="accordion-body">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur et velit nunc. Donec enim
                        nisl, pretium sit amet elit ut, congue ornare augue. Cras fringilla porta risus in finibus.
                        Interdum et malesuada fames.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseThree5" aria-expanded="false" aria-controls="collapseThree5">
                        What areas do you cater to?
                      </button>
                    </h2>
                    <div id="collapseThree5" class="accordion-collapse collapse" data-bs-parent="#accordionExample5">
                      <div class="accordion-body">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur et velit nunc. Donec enim
                        nisl, pretium sit amet elit ut, congue ornare augue. Cras fringilla porta risus in finibus.
                        Interdum et malesuada fames.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseSix5" aria-expanded="false" aria-controls="collapseSix5">
                        Do you provide graphic design services?
                      </button>
                    </h2>
                    <div id="collapseSix5" class="accordion-collapse collapse" data-bs-parent="#accordionExample5">
                      <div class="accordion-body">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur et velit nunc. Donec enim
                        nisl, pretium sit amet elit ut, congue ornare augue. Cras fringilla porta risus in finibus.
                        Interdum et malesuada fames.
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- tab content six -->
              <div id="Website" class="tab-pane fade">
                <div class="accordion" id="accordionExample6">
                  <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseOne6" aria-expanded="true" aria-controls="collapseOne6">
                        How do I avail of your services?
                      </button>
                    </h2>
                    <div id="collapseOne6" class="accordion-collapse collapse show" data-bs-parent="#accordionExample6">
                      <div class="accordion-body">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur et velit nunc. Donec enim
                        nisl, pretium sit amet elit ut, congue ornare augue. Cras fringilla porta risus in finibus.
                        Interdum et malesuada fames.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseTwo6" aria-expanded="false" aria-controls="collapseTwo6">
                        What are the services you offer?
                      </button>
                    </h2>
                    <div id="collapseTwo6" class="accordion-collapse collapse" data-bs-parent="#accordionExample6">
                      <div class="accordion-body">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur et velit nunc. Donec enim
                        nisl, pretium sit amet elit ut, congue ornare augue. Cras fringilla porta risus in finibus.
                        Interdum et malesuada fames.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseThree6" aria-expanded="false" aria-controls="collapseThree6">
                        What areas do you cater to?
                      </button>
                    </h2>
                    <div id="collapseThree6" class="accordion-collapse collapse" data-bs-parent="#accordionExample6">
                      <div class="accordion-body">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur et velit nunc. Donec enim
                        nisl, pretium sit amet elit ut, congue ornare augue. Cras fringilla porta risus in finibus.
                        Interdum et malesuada fames.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseFour6" aria-expanded="false" aria-controls="collapseFour6">
                        Do you provide graphic design services?
                      </button>
                    </h2>
                    <div id="collapseFour6" class="accordion-collapse collapse" data-bs-parent="#accordionExample6">
                      <div class="accordion-body">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur et velit nunc. Donec enim
                        nisl, pretium sit amet elit ut, congue ornare augue. Cras fringilla porta risus in finibus.
                        Interdum et malesuada fames.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseFive6" aria-expanded="false" aria-controls="collapseFive6">
                        Do you provide graphic design services?
                      </button>
                    </h2>
                    <div id="collapseFive6" class="accordion-collapse collapse" data-bs-parent="#accordionExample6">
                      <div class="accordion-body">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur et velit nunc. Donec enim
                        nisl, pretium sit amet elit ut, congue ornare augue. Cras fringilla porta risus in finibus.
                        Interdum et malesuada fames.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseSix6" aria-expanded="false" aria-controls="collapseSix6">
                        Do you provide graphic design services?
                      </button>
                    </h2>
                    <div id="collapseSix6" class="accordion-collapse collapse" data-bs-parent="#accordionExample6">
                      <div class="accordion-body">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur et velit nunc. Donec enim
                        nisl, pretium sit amet elit ut, congue ornare augue. Cras fringilla porta risus in finibus.
                        Interdum et malesuada fames.
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- general faq section End -->

    <!-- send notes section starts -->
<section>
    <div class="send-notes-wrapper">
        <svg class="" xmlns="http://www.w3.org/2000/svg" width="254" height="59" viewBox="0 0 254 59"
            fill="none">
            <path
                d="M34.1263 18.5357C33.721 20.0413 31.7521 25.7741 31.3468 26.5848C31.0572 27.106 31.1151 27.1639 31.8679 26.7585C32.3312 26.5848 32.6207 26.5848 33.1998 26.9322C34.4158 27.5113 34.1842 27.9746 31.81 29.3643L29.6675 30.6383L28.4514 33.1283C26.193 37.5871 23.1819 42.2776 19.997 46.2153C17.9123 48.8211 11.0793 55.5383 9.51584 56.5806C7.02584 58.202 5.40444 58.5494 3.89886 57.7967C2.21956 56.9281 1.98793 55.8857 2.91444 53.3957C4.65165 48.6474 9.86328 42.625 16.6384 37.4134C19.3021 35.3867 23.9347 31.9122 25.0928 31.1015C26.3668 30.175 26.4247 30.0592 28.3356 25.0213C30.9414 18.1883 32.2733 11.8185 31.9258 8.05456C31.6363 4.40643 30.8835 3.59572 28.1619 3.59572C25.614 3.59572 23.0661 4.58014 19.36 7.01224C16.6963 8.80735 15.7119 9.61805 12.527 12.8029C8.29979 16.9722 5.80979 20.215 3.84095 24.0948C2.79863 26.1794 2.62491 27.0481 3.20398 27.5113C3.84095 28.0325 3.60932 28.322 2.567 28.1483C1.40886 28.0325 0.308627 27.0481 0.0769992 26.0636C-0.212536 24.7897 1.17723 21.5469 3.49351 17.9567C10.037 7.99666 19.9391 0.46875 26.4247 0.46875C29.8991 0.46875 33.0261 3.01665 34.5317 7.07014C35.4003 9.38642 35.2265 14.1348 34.1263 18.5357ZM19.7654 41.8722C20.9814 40.1929 23.9926 35.2129 23.8768 35.0971C23.6451 34.8655 16.6963 40.772 13.5114 43.9569C8.53142 48.879 5.69398 52.8167 5.11491 55.712C4.99909 56.4069 4.99909 56.4648 5.40444 56.349C5.63607 56.2332 6.56258 55.712 7.37328 55.075C10.3265 53.0483 16.291 46.6785 19.7654 41.8722Z"
                fill="#FBB582" />
            <path
                d="M52.4249 34.576C51.8458 35.0392 50.9772 35.7341 50.514 36.1394C49.3558 37.1239 49.1242 37.2976 46.2289 39.4401C41.7121 42.8567 39.4537 43.4936 36.9058 41.9301C34.7633 40.6562 33.8947 38.4557 34.4737 35.6183C35.0528 32.7808 38.0061 29.0748 39.917 28.6694C41.6542 28.3799 43.5651 30.0013 43.5651 31.7964C43.5651 34.5181 41.0751 37.1818 38.4693 37.1818H37.6007L37.7165 40.6562H38.8747C40.2644 40.5983 42.0596 39.7297 44.897 37.7029C46.113 36.8922 47.0975 36.0815 47.1554 36.0236C47.2712 35.9657 48.3714 35.0392 49.6454 33.9969C51.9617 32.1439 52.0775 32.086 52.6565 32.4334C53.6409 33.0125 53.583 33.7074 52.4249 34.576ZM40.4961 31.8543C39.8012 32.4334 38.5851 34.3443 38.5851 34.6918C38.5851 34.9234 38.9326 34.8076 39.4537 34.4022C40.2065 33.8232 41.191 32.2018 41.191 31.6227C41.191 31.1594 41.133 31.2174 40.4961 31.8543Z"
                fill="#FBB582" />
            <path
                d="M59.4018 30.7541C57.6646 31.5648 53.7848 35.6183 52.2213 38.1662C51.7002 39.0927 51.7002 39.0927 52.1634 38.8611C52.453 38.6874 53.4953 37.7608 54.5376 36.7764C57.1434 34.2285 58.012 33.7074 59.0543 33.8811C59.5176 33.939 60.3862 34.4022 60.9653 34.8655C61.776 35.5025 62.0076 35.9078 62.1813 36.7185C62.2392 37.2397 62.4709 37.9925 62.6446 38.3978L62.9341 39.0927L64.7871 37.645C65.8295 36.8922 67.7404 35.3287 69.0723 34.2285C70.6357 32.8387 71.5623 32.2018 71.8518 32.2597C72.373 32.4334 73.2995 33.2441 73.2995 33.5336C73.2995 33.6494 71.9097 34.9234 70.2304 36.429C68.5511 37.9346 66.9876 39.3822 66.6981 39.6718C64.903 41.3511 63.9185 41.6406 62.413 41.0036C61.139 40.4246 59.9809 39.2664 59.4597 38.0504C59.1702 37.2397 58.7069 36.8343 58.7069 37.2976C58.7069 37.4134 58.3595 37.7029 58.012 37.9346C57.6646 38.1083 57.0276 38.6294 56.6223 38.9769C54.7113 40.772 51.8739 42.6829 51.179 42.625C51.0053 42.625 50.4841 42.4513 49.963 42.2776C49.4418 42.1039 48.7469 41.6985 48.3995 41.3511C47.1255 40.0192 47.8204 37.2976 50.3683 33.5915C53.3795 29.1906 57.4909 26.3532 59.6913 27.0481C60.8495 27.4534 62.355 29.0169 62.2392 29.7697C62.1813 30.2329 62.0076 30.2908 61.1969 30.3487C60.6757 30.3487 59.865 30.5225 59.4018 30.7541Z"
                fill="#FBB582" />
            <path
                d="M71.3754 41.2353C69.9856 40.3667 69.754 39.9034 69.8119 37.9925C69.8698 34.4601 72.3019 29.4801 73.9812 29.4801C74.6182 29.4801 76.008 30.2908 76.2396 30.812C76.3554 31.2174 76.2975 31.449 75.0236 33.7074C74.155 35.2129 73.0547 38.282 73.2863 38.5136C73.4022 38.5715 75.1973 36.8922 77.3398 34.8076C79.6561 32.4913 81.5091 30.8699 81.8566 30.7541C82.8989 30.5225 83.7096 30.8699 84.7519 31.8543C85.5047 32.665 85.6205 32.8967 85.6205 33.939C85.6784 35.5025 86.0838 38.3978 86.3733 38.6294C86.8366 39.1506 87.9368 38.5136 92.801 34.6918C95.4068 32.6071 95.9859 32.4334 96.8545 33.4178L97.4336 33.939L95.1752 35.8499C93.9012 36.8922 92.5694 37.9925 92.1061 38.3399C91.7008 38.6294 90.948 39.2085 90.4847 39.556C90.0215 39.9034 89.2108 40.4246 88.5738 40.6562L87.4736 41.0615L86.1996 40.3667C83.8254 39.1506 82.7831 37.2397 82.7831 34.3443V33.2441L81.5091 34.3443C80.8143 34.9234 79.0191 36.6606 77.5136 38.2241C75.9501 39.7297 74.4445 41.1774 74.097 41.3511C73.2284 41.8143 72.244 41.7564 71.3754 41.2353Z"
                fill="#FBB582" />
            <path
                d="M152.225 57.9125C150.082 57.3913 147.766 56.4069 139.254 52.2955C134.447 49.9213 131.263 48.4736 131.147 48.4736C131.089 48.4736 130.336 48.1262 129.525 47.7208C128.715 47.3155 127.962 47.026 127.788 47.026C127.614 47.026 127.267 47.7788 126.977 48.7632C126.225 51.2532 125.298 53.222 124.835 53.2799C124.198 53.4536 122.403 52.7588 122.171 52.2955C121.997 51.9481 122.403 50.5004 123.85 45.752C124.024 45.1729 123.908 45.0571 122.519 44.1306C120.029 42.5671 119.681 41.6406 121.013 40.4246C121.824 39.6718 122.634 39.0927 124.024 38.3399C126.456 37.0081 126.63 36.8343 127.151 35.0971C127.788 33.0704 127.788 32.7808 127.209 31.5648C126.514 30.0013 125.588 29.4801 121.94 28.7274C120.955 28.4957 119.565 28.2062 118.928 28.0325C113.601 26.8743 112.095 25.9478 112.095 23.6315C112.095 20.2729 118.755 13.4978 126.804 8.80735C132.536 5.39084 141.049 2.14805 146.608 1.16363C147.071 1.10573 147.708 0.989913 147.998 0.932007C148.345 0.816191 149.851 0.758285 151.356 0.758285C155.294 0.758285 157.494 1.39526 159.753 3.19038C162.127 5.10131 163.111 7.35968 162.59 9.73386C161.722 13.8453 158.884 17.725 152.514 23.2841C147.708 27.5113 141.686 31.6806 133.058 36.7185L130.394 38.2241L129.294 41.5827L128.193 44.9992L133.521 47.605C136.416 49.0527 140.991 51.4269 143.713 52.8167C149.33 55.6541 151.009 56.4069 152.341 56.4648C153.788 56.5806 154.889 57.7967 153.846 58.0862C153.615 58.1441 152.862 58.0862 152.225 57.9125ZM124.777 42.5671C125.124 41.6985 124.893 41.5827 124.198 42.2197C123.735 42.625 123.677 42.8567 123.908 42.9725C124.372 43.3199 124.545 43.2041 124.777 42.5671ZM127.499 29.1906L128.888 30.0013L129.062 29.4801C129.178 29.1906 129.699 27.8008 130.162 26.4111C133.058 18.4199 135.548 13.2083 137.285 11.8764C137.806 11.4711 139.138 11.9922 139.833 12.8608L140.354 13.5557L139.717 14.5401C138.269 16.9143 135.2 24.1527 132.768 31.1594L131.784 33.8232L132.652 33.302C133.116 33.0125 133.81 32.6071 134.158 32.3755C134.505 32.1439 134.853 31.9122 134.911 31.9122C135.432 31.9122 145.044 24.9634 147.998 22.3576C155.699 15.8141 160.737 7.82293 158.884 5.15921C158.305 4.29061 155.526 3.82735 151.993 4.00107C147.592 4.1748 143.886 5.10131 136.185 8.05456C134.563 8.63363 129.178 11.4132 127.325 12.5713C120.839 16.7406 115.454 22.1839 115.454 24.6739V25.4267L118.291 26.0636C122.519 26.9901 125.993 28.2062 127.499 29.1906Z"
                fill="#FBB582" />
            <path
                d="M168.522 34.576C167.943 35.0392 167.074 35.7341 166.611 36.1394C165.453 37.1239 165.221 37.2976 162.326 39.4401C157.809 42.8567 155.55 43.4936 153.003 41.9301C150.86 40.6562 149.991 38.4557 150.57 35.6183C151.15 32.7808 154.103 29.0748 156.014 28.6694C157.751 28.3799 159.662 30.0013 159.662 31.7964C159.662 34.5181 157.172 37.1818 154.566 37.1818H153.697L153.813 40.6562H154.971C156.361 40.5983 158.156 39.7297 160.994 37.7029C162.21 36.8922 163.194 36.0815 163.252 36.0236C163.368 35.9657 164.468 35.0392 165.742 33.9969C168.058 32.1439 168.174 32.086 168.753 32.4334C169.738 33.0125 169.68 33.7074 168.522 34.576ZM156.593 31.8543C155.898 32.4334 154.682 34.3443 154.682 34.6918C154.682 34.9234 155.029 34.8076 155.55 34.4022C156.303 33.8232 157.288 32.2018 157.288 31.6227C157.288 31.1594 157.23 31.2174 156.593 31.8543Z"
                fill="#FBB582" />
            <path
                d="M167.623 41.2353C166.233 40.3667 166.002 39.9034 166.06 37.9925C166.118 34.4601 168.55 29.4801 170.229 29.4801C170.866 29.4801 172.256 30.2908 172.487 30.812C172.603 31.2174 172.545 31.449 171.271 33.7074C170.403 35.2129 169.302 38.282 169.534 38.5136C169.65 38.5715 171.445 36.8922 173.588 34.8076C175.904 32.4913 177.757 30.8699 178.104 30.7541C179.147 30.5225 179.957 30.8699 181 31.8543C181.752 32.665 181.868 32.8967 181.868 33.939C181.926 35.5025 182.332 38.3978 182.621 38.6294C183.084 39.1506 184.185 38.5136 189.049 34.6918C191.655 32.6071 192.234 32.4334 193.102 33.4178L193.681 33.939L191.423 35.8499C190.149 36.8922 188.817 37.9925 188.354 38.3399C187.948 38.6294 187.196 39.2085 186.732 39.556C186.269 39.9034 185.458 40.4246 184.822 40.6562L183.721 41.0615L182.447 40.3667C180.073 39.1506 179.031 37.2397 179.031 34.3443V33.2441L177.757 34.3443C177.062 34.9234 175.267 36.6606 173.761 38.2241C172.198 39.7297 170.692 41.1774 170.345 41.3511C169.476 41.8143 168.492 41.7564 167.623 41.2353Z"
                fill="#FBB582" />
            <path
                d="M199.815 30.7541C198.078 31.5648 194.198 35.6183 192.634 38.1662C192.113 39.0927 192.113 39.0927 192.577 38.8611C192.866 38.6874 193.908 37.7608 194.951 36.7764C197.557 34.2285 198.425 33.7074 199.467 33.8811C199.931 33.939 200.799 34.4022 201.378 34.8655C202.189 35.5025 202.421 35.9078 202.594 36.7185C202.652 37.2397 202.884 37.9925 203.058 38.3978L203.347 39.0927L205.2 37.645C206.243 36.8922 208.154 35.3287 209.485 34.2285C211.049 32.8387 211.975 32.2018 212.265 32.2597C212.786 32.4334 213.713 33.2441 213.713 33.5336C213.713 33.6494 212.323 34.9234 210.644 36.429C208.964 37.9346 207.401 39.3822 207.111 39.6718C205.316 41.3511 204.332 41.6406 202.826 41.0036C201.552 40.4246 200.394 39.2664 199.873 38.0504C199.583 37.2397 199.12 36.8343 199.12 37.2976C199.12 37.4134 198.773 37.7029 198.425 37.9346C198.078 38.1083 197.441 38.6294 197.035 38.9769C195.124 40.772 192.287 42.6829 191.592 42.625C191.418 42.625 190.897 42.4513 190.376 42.2776C189.855 42.1039 189.16 41.6985 188.813 41.3511C187.539 40.0192 188.233 37.2976 190.781 33.5915C193.793 29.1906 197.904 26.3532 200.104 27.0481C201.263 27.4534 202.768 29.0169 202.652 29.7697C202.594 30.2329 202.421 30.2908 201.61 30.3487C201.089 30.3487 200.278 30.5225 199.815 30.7541Z"
                fill="#FBB582" />
            <path
                d="M229.045 28.959C228.524 29.7697 226.439 30.7541 224.991 30.9278C224.412 30.9857 223.312 30.9278 222.617 30.6962C221.227 30.3487 221.285 30.3487 220.011 31.5648C218.042 33.3599 214.568 39.0927 213.757 41.8722C213.526 42.6829 213.41 42.7987 212.715 42.7987C212.31 42.7987 211.789 42.6829 211.499 42.5671C210.515 42.1618 210.341 41.6985 210.515 39.6139C210.746 37.2397 211.557 33.8811 212.889 30.0013C214.047 26.469 214.915 24.8476 215.495 24.8476C216.884 24.8476 218.564 26.2953 218.216 27.1639C218.158 27.3955 217.811 28.322 217.463 29.1327L216.884 30.6962L217.927 29.6539C219.143 28.5536 218.969 28.5536 222.675 29.0748C224.007 29.2485 225.281 28.9011 226.439 28.0325C227.308 27.3376 228.176 27.3376 228.929 27.9167C229.45 28.3799 229.45 28.3799 229.045 28.959Z"
                fill="#FBB582" />
            <path
                d="M253.327 5.56456C254.254 6.43317 254.37 5.96991 252.227 11.2394C248.347 20.7362 246.263 26.2953 244.699 30.9857C244.12 32.665 243.657 34.1706 243.599 34.3443C243.541 34.576 243.194 35.6183 242.904 36.7764C241.92 39.9034 240.935 43.899 240.24 47.1418C239.545 50.6741 239.314 55.7699 239.835 56.1174C240.067 56.2332 240.124 56.5227 240.009 56.8122C239.835 57.3913 238.851 57.5071 237.808 57.1018C237.055 56.8122 236.766 55.9436 236.534 53.2799C236.303 51.2532 236.534 47.3155 236.882 45.2308C237.287 43.3199 238.04 40.0192 238.561 38.0504C238.908 36.8343 239.198 35.792 239.198 35.6762C239.198 35.5604 238.735 36.1394 238.214 36.8922C236.361 39.4981 234.623 41.4669 233.813 41.8722C232.075 42.6829 229.47 42.1039 228.543 40.6562C227.79 39.6139 227.906 36.8922 228.775 34.9234C229.528 33.0704 231.149 30.4646 232.539 28.7853C234.739 26.1794 237.461 24.9634 239.545 25.6583C240.124 25.8899 240.704 25.9478 240.819 25.8899C240.877 25.7741 243.251 21.0257 246.089 15.3508C250.837 5.8541 251.301 5.0434 251.88 4.92758C252.343 4.92758 252.806 5.10131 253.327 5.56456ZM233.465 38.1662C235.434 35.7341 239.893 28.322 239.603 27.9746C239.372 27.7429 237.403 29.2485 236.129 30.5804C234.16 32.7229 232.249 36.429 231.844 38.6294C231.728 39.6139 231.728 39.6718 232.191 39.4401C232.423 39.2664 233.002 38.6874 233.465 38.1662Z"
                fill="#FBB582" />
        </svg>
        <h3>{{ $cms[5]->title ?? 'Send Love Notes' }}</h3>
        {!! $cms[5]->description ?? '<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim </p>' !!}
        <a href="{{ route('contact') }}"><button>Send</button></a>
    </div>
</section>
<!-- send notes section ends -->
  </main>

@endsection

@push('script')

   {{-- Google Translate  --}}
   <script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({
            pageLanguage: 'en',
            includedLanguages: 'en,fr',
        }, 'google_translate_element');
        setTimeout(checkInitialLanguage, 1000);;
    }

    function translateLanguage(lang) {
        var translateElement = document.querySelector('.goog-te-combo');
        if (translateElement) {
            translateElement.value = lang;
            translateElement.dispatchEvent(new Event('change'));
        }
        updateFlag(lang);
    }

    function updateFlag(lang) {
        var flagEn = document.getElementById('flag-en');
        var flagFr = document.getElementById('flag-fr');
        if (lang === 'en') {
            flagEn.style.display = 'none';
            flagFr.style.display = 'inline-block';
        } else {
            flagEn.style.display = 'inline-block';
            flagFr.style.display = 'none';
        }
    }

    function checkInitialLanguage() {
        var translateElement = document.querySelector('.goog-te-combo');
        if (translateElement) {
            var currentLang = translateElement.value || 'en';
            updateFlag(currentLang);
        } else {
            // If the translate element is not found, try again after a short delay
            setTimeout(checkInitialLanguage, 500);
        }
    }

    // Listen for changes to the Google Translate select element
    function observeTranslateCombo() {
        var translateElement = document.querySelector('.goog-te-combo');
        if (translateElement) {
            translateElement.addEventListener('change', function() {
                var selectedLang = translateElement.value;
                updateFlag(selectedLang);
            });
        }
    }

    document.addEventListener("DOMContentLoaded", function() {
        setTimeout(observeTranslateCombo, 1000); // Delay to ensure Google Translate is initialized
        checkInitialLanguage(); // Check initial language on page load
    });
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
</script>

@endpush
