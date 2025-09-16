@extends('layouts/layoutMaster')

@section('title', 'Spinners - UI elements')

<!-- Vendor Styles -->
@section('vendor-style')
  @vite(['resources/assets/vendor/libs/spinkit/spinkit.scss'])
@endsection

@section('content')
  <div class="row gy-6">
    <!-- Style -->
    <div class="col-lg-12">
      <div class="card">
        <h5 class="card-header pb-0">Style</h5>
        <div class="row row-bordered g-0">
          <div class="col-md p-6">
            <div class="small fw-medium">Border</div>

            <div class="demo-inline-spacing">
              <div class="spinner-border" role="status">
                <span class="visually-hidden">Loading...</span>
              </div>
              <div class="spinner-border text-primary" role="status">
                <span class="visually-hidden">Loading...</span>
              </div>
              <div class="spinner-border text-secondary" role="status">
                <span class="visually-hidden">Loading...</span>
              </div>
              <div class="spinner-border text-success" role="status">
                <span class="visually-hidden">Loading...</span>
              </div>
              <div class="spinner-border text-danger" role="status">
                <span class="visually-hidden">Loading...</span>
              </div>
              <div class="spinner-border text-warning" role="status">
                <span class="visually-hidden">Loading...</span>
              </div>
              <div class="spinner-border text-info" role="status">
                <span class="visually-hidden">Loading...</span>
              </div>
              <div class="spinner-border text-light" role="status">
                <span class="visually-hidden">Loading...</span>
              </div>
              <div class="spinner-border text-dark" role="status">
                <span class="visually-hidden">Loading...</span>
              </div>
            </div>
          </div>
          <div class="col-md p-6">
            <div class="small fw-medium">Growing</div>

            <div class="demo-inline-spacing">
              <div class="spinner-grow" role="status">
                <span class="visually-hidden">Loading...</span>
              </div>
              <div class="spinner-grow text-primary" role="status">
                <span class="visually-hidden">Loading...</span>
              </div>
              <div class="spinner-grow text-secondary" role="status">
                <span class="visually-hidden">Loading...</span>
              </div>
              <div class="spinner-grow text-success" role="status">
                <span class="visually-hidden">Loading...</span>
              </div>
              <div class="spinner-grow text-danger" role="status">
                <span class="visually-hidden">Loading...</span>
              </div>
              <div class="spinner-grow text-warning" role="status">
                <span class="visually-hidden">Loading...</span>
              </div>
              <div class="spinner-grow text-info" role="status">
                <span class="visually-hidden">Loading...</span>
              </div>
              <div class="spinner-grow" role="status">
                <span class="visually-hidden">Loading...</span>
              </div>
              <div class="spinner-grow text-dark" role="status">
                <span class="visually-hidden">Loading...</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--/ Style -->

    <!-- Size -->
    <div class="col-lg-12">
      <div class="card">
        <h5 class="card-header pb-0">Size</h5>
        <div class="row row-bordered g-0">
          <!-- Large -->
          <div class="col-md p-6">
            <div class="small fw-medium">Large</div>
            <div class="demo-inline-spacing">
              <div class="spinner-border spinner-border-lg text-primary" role="status">
                <span class="visually-hidden">Loading...</span>
              </div>
              <div class="spinner-border spinner-border-lg text-secondary" role="status">
                <span class="visually-hidden">Loading...</span>
              </div>
            </div>
          </div>

          <!-- Medium -->
          <div class="col-md p-6">
            <div class="small fw-medium">Medium</div>
            <div class="demo-inline-spacing">
              <div class="spinner-border text-primary" role="status">
                <span class="visually-hidden">Loading...</span>
              </div>
              <div class="spinner-border text-secondary" role="status">
                <span class="visually-hidden">Loading...</span>
              </div>
            </div>
          </div>

          <!-- Small -->
          <div class="col-md p-6">
            <div class="small fw-medium">Small</div>
            <div class="demo-inline-spacing">
              <div class="spinner-border spinner-border-sm text-primary" role="status">
                <span class="visually-hidden">Loading...</span>
              </div>
              <div class="spinner-border spinner-border-sm text-secondary" role="status">
                <span class="visually-hidden">Loading...</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--/ Size -->

    <!-- With Buttons -->
    <div class="col-lg-12">
      <div class="card">
        <h5 class="card-header">With Buttons</h5>
        <div class="card-body">
          <div class="demo-inline-spacing">
            <button class="btn btn-icon btn-primary" type="button" disabled>
              <span class="spinner-border" role="status" aria-hidden="true"></span>
              <span class="visually-hidden">Loading...</span>
            </button>
            <button class="btn btn-primary" type="button" disabled>
              <span class="spinner-border me-1" role="status" aria-hidden="true"></span>
              Loading...
            </button>
            <button class="btn btn-icon btn-primary" type="button" disabled>
              <span class="spinner-grow" role="status" aria-hidden="true"></span>
              <span class="visually-hidden">Loading...</span>
            </button>
            <button class="btn btn-primary" type="button" disabled>
              <span class="spinner-grow me-1" role="status" aria-hidden="true"></span>
              Loading...
            </button>
          </div>
        </div>
      </div>
    </div>
    <!--/ With Buttons -->

    <!-- SpinKit -->
    <div class="col-lg-12">
      <div class="card">
        <h5 class="card-header pb-0">SpinKit</h5>
        <div class="card-body demo-vertical-spacing-lg demo-only-element px-12">
          <div class="row py-sm-6 gy-3 gy-sm-0">
            <div class="col">
              <!-- Plane -->
              <div class="sk-plane"></div>
            </div>
            <div class="col">
              <!-- Chase -->
              <div class="sk-chase">
                <div class="sk-chase-dot"></div>
                <div class="sk-chase-dot"></div>
                <div class="sk-chase-dot"></div>
                <div class="sk-chase-dot"></div>
                <div class="sk-chase-dot"></div>
                <div class="sk-chase-dot"></div>
              </div>
            </div>
            <div class="col">
              <!-- Bounce -->
              <div class="sk-bounce">
                <div class="sk-bounce-dot"></div>
                <div class="sk-bounce-dot"></div>
              </div>
            </div>
            <div class="col">
              <!-- Wave -->
              <div class="sk-wave">
                <div class="sk-wave-rect"></div>
                <div class="sk-wave-rect"></div>
                <div class="sk-wave-rect"></div>
                <div class="sk-wave-rect"></div>
                <div class="sk-wave-rect"></div>
              </div>
            </div>
          </div>

          <div class="row py-sm-6 gy-3 gy-sm-0">
            <div class="col">
              <!-- Pluse -->
              <div class="sk-pulse"></div>
            </div>
            <div class="col">
              <!-- Swing -->
              <div class="sk-swing">
                <div class="sk-swing-dot"></div>
                <div class="sk-swing-dot"></div>
              </div>
            </div>
            <div class="col">
              <!-- Circle -->
              <div class="sk-circle">
                <div class="sk-circle-dot"></div>
                <div class="sk-circle-dot"></div>
                <div class="sk-circle-dot"></div>
                <div class="sk-circle-dot"></div>
                <div class="sk-circle-dot"></div>
                <div class="sk-circle-dot"></div>
                <div class="sk-circle-dot"></div>
                <div class="sk-circle-dot"></div>
                <div class="sk-circle-dot"></div>
                <div class="sk-circle-dot"></div>
                <div class="sk-circle-dot"></div>
                <div class="sk-circle-dot"></div>
              </div>
            </div>
            <div class="col">
              <!-- Circle Fade -->
              <div class="sk-circle-fade">
                <div class="sk-circle-fade-dot"></div>
                <div class="sk-circle-fade-dot"></div>
                <div class="sk-circle-fade-dot"></div>
                <div class="sk-circle-fade-dot"></div>
                <div class="sk-circle-fade-dot"></div>
                <div class="sk-circle-fade-dot"></div>
                <div class="sk-circle-fade-dot"></div>
                <div class="sk-circle-fade-dot"></div>
                <div class="sk-circle-fade-dot"></div>
                <div class="sk-circle-fade-dot"></div>
                <div class="sk-circle-fade-dot"></div>
                <div class="sk-circle-fade-dot"></div>
              </div>
            </div>
          </div>

          <div class="row py-sm-6 gy-3 gy-sm-0">
            <div class="col-3">
              <!-- Grid -->
              <div class="sk-grid">
                <div class="sk-grid-cube"></div>
                <div class="sk-grid-cube"></div>
                <div class="sk-grid-cube"></div>
                <div class="sk-grid-cube"></div>
                <div class="sk-grid-cube"></div>
                <div class="sk-grid-cube"></div>
                <div class="sk-grid-cube"></div>
                <div class="sk-grid-cube"></div>
                <div class="sk-grid-cube"></div>
              </div>
            </div>
            <div class="col-3">
              <!-- Fold -->
              <div class="sk-fold">
                <div class="sk-fold-cube"></div>
                <div class="sk-fold-cube"></div>
                <div class="sk-fold-cube"></div>
                <div class="sk-fold-cube"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- SpinKit -->
  </div>
@endsection
