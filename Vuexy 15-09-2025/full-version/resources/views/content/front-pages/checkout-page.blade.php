@extends('layouts/layoutMaster')

@section('title', 'Checkout - Front Pages')

<!-- Vendor Styles -->
@section('vendor-style')
@vite([
'resources/assets/vendor/libs/select2/select2.scss',
'resources/assets/vendor/libs/bs-stepper/bs-stepper.scss',
'resources/assets/vendor/libs/raty-js/raty-js.scss',
'resources/assets/vendor/libs/@form-validation/form-validation.scss'
])
@endsection

<!-- Page Styles -->
@section('page-style')
@vite(['resources/assets/vendor/scss/pages/wizard-ex-checkout.scss'])
@endsection

<!-- Vendor Scripts -->
@section('vendor-script')
@vite([
'resources/assets/vendor/libs/jquery/jquery.js',
'resources/assets/vendor/libs/select2/select2.js',
'resources/assets/vendor/libs/bs-stepper/bs-stepper.js',
'resources/assets/vendor/libs/raty-js/raty-js.js',
'resources/assets/vendor/libs/cleave-zen/cleave-zen.js',
'resources/assets/vendor/libs/@form-validation/popular.js',
'resources/assets/vendor/libs/@form-validation/bootstrap5.js',
'resources/assets/vendor/libs/@form-validation/auto-focus.js'
])
@endsection

<!-- Page Scripts -->
@section('page-script')
@vite([
'resources/assets/js/modal-add-new-address.js',
'resources/assets/js/wizard-ex-checkout.js'
])
@endsection


@section('content')
<section class="section-py bg-body first-section-pt">
  <div class="container">
    <!--/ Checkout Wizard -->
    @include('_partials/wizard-ex-checkout')

    <!-- Add new address modal -->
    @include('_partials/_modals/modal-add-new-address')
  </div>
</section>
@endsection