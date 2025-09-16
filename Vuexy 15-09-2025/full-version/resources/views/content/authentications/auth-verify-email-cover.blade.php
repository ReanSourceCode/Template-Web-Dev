@php
$customizerHidden = 'customizer-hide';
$configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Verify Email Cover - Pages')

@section('page-style')
<!-- Page -->
@vite('resources/assets/vendor/scss/pages/page-auth.scss')
@endsection

@section('content')
<div class="authentication-wrapper authentication-cover">
  <!-- Logo -->
  <a href="{{ url('/') }}" class="app-brand auth-cover-brand">
    <span class="app-brand-logo demo">@include('_partials.macros')</span>
    <span class="app-brand-text demo text-heading fw-bold">{{ config('variables.templateName') }}</span>
  </a>
  <!-- /Logo -->
  <div class="authentication-inner row m-0">
    <!-- /Left Text -->
    <div class="d-none d-xl-flex col-xl-8 p-0">
      <div class="auth-cover-bg d-flex justify-content-center align-items-center">
        <img
          src="{{ asset('assets/img/illustrations/auth-verify-email-illustration-' . $configData['theme'] . '.png') }}"
          alt="auth-verify-email-cover" class="my-5 auth-illustration"
          data-app-light-img="illustrations/auth-verify-email-illustration-light.png"
          data-app-dark-img="illustrations/auth-verify-email-illustration-dark.png" />
        <img src="{{ asset('assets/img/illustrations/bg-shape-image-' . $configData['theme'] . '.png') }}"
          alt="auth-verify-email-cover" class="platform-bg" data-app-light-img="illustrations/bg-shape-image-light.png"
          data-app-dark-img="illustrations/bg-shape-image-dark.png" />
      </div>
    </div>
    <!-- /Left Text -->

    <!--  Verify email -->
    <div class="d-flex col-12 col-xl-4 align-items-center authentication-bg p-6 p-sm-12">
      <div class="w-px-400 mx-auto mt-12 mt-5">
        <h4 class="mb-1">Verify your email ✉️</h4>
        <p class="text-start mb-0">Account activation link sent to your email address: <span
            class="fw-medium">hello@example.com</span> Please follow the link inside to continue.</p>
        <a class="btn btn-primary w-100 my-6" href="{{ url('/') }}"> Skip for now </a>
        <p class="text-center mb-0">
          Didn't get the mail?
          <a href="javascript:void(0);"> Resend </a>
        </p>
      </div>
    </div>
    <!-- / Verify email -->
  </div>
</div>
@endsection