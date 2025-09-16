@extends('layouts/layoutMaster')

@section('title', 'Badges - UI elements')

@section('content')
<div class="row g-6">
  <!-- Basic Badges -->
  <div class="col-lg-6">
    <div class="card">
      <h5 class="card-header">Basic Badges</h5>
      <div class="card-body">
        <div class="small fw-medium">Default</div>
        <div class="demo-inline-spacing">
          <span class="badge text-bg-primary">Primary</span>
          <span class="badge text-bg-secondary">Secondary</span>
          <span class="badge text-bg-success">Success</span>
          <span class="badge text-bg-danger">Danger</span>
          <span class="badge text-bg-warning">Warning</span>
          <span class="badge text-bg-info">Info</span>
          <span class="badge text-bg-dark">Dark</span>
        </div>
      </div>
      <hr class="m-0" />
      <div class="card-body">
        <div class="small fw-medium">Pills</div>

        <div class="demo-inline-spacing">
          <span class="badge rounded-pill text-bg-primary">Primary</span>
          <span class="badge rounded-pill text-bg-secondary">Secondary</span>
          <span class="badge rounded-pill text-bg-success">Success</span>
          <span class="badge rounded-pill text-bg-danger">Danger</span>
          <span class="badge rounded-pill text-bg-warning">Warning</span>
          <span class="badge rounded-pill text-bg-info">Info</span>
          <span class="badge rounded-pill text-bg-dark">Dark</span>
        </div>
      </div>
    </div>
  </div>

  <!-- Label Badges -->
  <div class="col-lg-6">
    <div class="card">
      <h5 class="card-header">Label Badges</h5>
      <div class="card-body">
        <div class="small fw-medium">Label Default</div>

        <div class="demo-inline-spacing">
          <span class="badge bg-label-primary">Primary</span>
          <span class="badge bg-label-secondary">Secondary</span>
          <span class="badge bg-label-success">Success</span>
          <span class="badge bg-label-danger">Danger</span>
          <span class="badge bg-label-warning">Warning</span>
          <span class="badge bg-label-info">Info</span>
          <span class="badge bg-label-dark">Dark</span>
        </div>
      </div>
      <hr class="m-0" />
      <div class="card-body">
        <div class="small fw-medium">Label Pills</div>

        <div class="demo-inline-spacing">
          <span class="badge rounded-pill bg-label-primary">Primary</span>
          <span class="badge rounded-pill bg-label-secondary">Secondary</span>
          <span class="badge rounded-pill bg-label-success">Success</span>
          <span class="badge rounded-pill bg-label-danger">Danger</span>
          <span class="badge rounded-pill bg-label-warning">Warning</span>
          <span class="badge rounded-pill bg-label-info">Info</span>
          <span class="badge rounded-pill bg-label-dark">Dark</span>
        </div>
      </div>
    </div>
  </div>

  <!-- Outline Badges -->
  <div class="col-lg-6">
    <div class="card">
      <h5 class="card-header">Outline Badges</h5>
      <div class="card-body">
        <div class="small fw-medium">Outline Default</div>

        <div class="demo-inline-spacing">
          <span class="badge badge-outline-primary">Primary</span>
          <span class="badge badge-outline-secondary">Secondary</span>
          <span class="badge badge-outline-success">Success</span>
          <span class="badge badge-outline-danger">Danger</span>
          <span class="badge badge-outline-warning">Warning</span>
          <span class="badge badge-outline-info">Info</span>
          <span class="badge badge-outline-dark">Dark</span>
        </div>
      </div>
      <hr class="m-0" />
      <div class="card-body">
        <div class="small fw-medium">Outline Pills</div>

        <div class="demo-inline-spacing">
          <span class="badge rounded-pill badge-outline-primary">Primary</span>
          <span class="badge rounded-pill badge-outline-secondary">Secondary</span>
          <span class="badge rounded-pill badge-outline-success">Success</span>
          <span class="badge rounded-pill badge-outline-danger">Danger</span>
          <span class="badge rounded-pill badge-outline-warning">Warning</span>
          <span class="badge rounded-pill badge-outline-info">Info</span>
          <span class="badge rounded-pill badge-outline-dark">Dark</span>
        </div>
      </div>
    </div>
  </div>

  <!-- Glow Badges -->
  <div class="col-lg-6">
    <div class="card">
      <h5 class="card-header">Glow Badges</h5>
      <div class="card-body">
        <div class="text-light small fw-medium">Glow Default</div>

        <div class="demo-inline-spacing">
          <span class="badge bg-primary bg-glow">Primary</span>
          <span class="badge bg-secondary bg-glow">Secondary</span>
          <span class="badge bg-success bg-glow">Success</span>
          <span class="badge bg-danger bg-glow">Danger</span>
          <span class="badge bg-warning bg-glow">Warning</span>
          <span class="badge bg-info bg-glow">Info</span>
          <span class="badge bg-dark bg-glow">Dark</span>
        </div>
      </div>
      <hr class="m-0" />
      <div class="card-body">
        <div class="text-light small fw-medium">Glow Pills</div>

        <div class="demo-inline-spacing">
          <span class="badge rounded-pill bg-primary bg-glow">Primary</span>
          <span class="badge rounded-pill bg-secondary bg-glow">Secondary</span>
          <span class="badge rounded-pill bg-success bg-glow">Success</span>
          <span class="badge rounded-pill bg-danger bg-glow">Danger</span>
          <span class="badge rounded-pill bg-warning bg-glow">Warning</span>
          <span class="badge rounded-pill bg-info bg-glow">Info</span>
          <span class="badge rounded-pill bg-dark bg-glow">Dark</span>
        </div>
      </div>
    </div>
  </div>

  <!-- Badge Circle -->
  <div class="col-12">
    <div class="card">
      <h5 class="card-header">Badge Circle & Square Style</h5>
      <div class="row row-bordered g-0">
        <div class="col-md-6 col-xxl-3 p-6">
          <h6>Basic</h6>
          <div class="small fw-medium mb-2">Default</div>
          <div class="demo-inline-spacing">
            <p>
              <span class="badge badge-center rounded-pill text-bg-primary">1</span>
              <span class="badge badge-center rounded-pill text-bg-secondary">2</span>
              <span class="badge badge-center rounded-pill text-bg-success">3</span>
              <span class="badge badge-center rounded-pill text-bg-danger">4</span>
              <span class="badge badge-center rounded-pill text-bg-warning">5</span>
              <span class="badge badge-center rounded-pill text-bg-info">6</span>
            </p>
            <p>
              <span class="badge badge-center text-bg-primary">1</span>
              <span class="badge badge-center text-bg-secondary">2</span>
              <span class="badge badge-center text-bg-success">3</span>
              <span class="badge badge-center text-bg-danger">4</span>
              <span class="badge badge-center text-bg-warning">5</span>
              <span class="badge badge-center text-bg-info">6</span>
            </p>
          </div>
        </div>
        <div class="col-md-6 col-xxl-3 p-6">
          <h6>Label</h6>
          <div class="small fw-medium mb-2">Default</div>
          <div class="demo-inline-spacing">
            <p>
              <span class="badge badge-center rounded-pill bg-label-primary">1</span>
              <span class="badge badge-center rounded-pill bg-label-secondary">2</span>
              <span class="badge badge-center rounded-pill bg-label-success">3</span>
              <span class="badge badge-center rounded-pill bg-label-danger">4</span>
              <span class="badge badge-center rounded-pill bg-label-warning">5</span>
              <span class="badge badge-center rounded-pill bg-label-info">6</span>
            </p>
            <p>
              <span class="badge badge-center bg-label-primary">1</span>
              <span class="badge badge-center bg-label-secondary">2</span>
              <span class="badge badge-center bg-label-success">3</span>
              <span class="badge badge-center bg-label-danger">4</span>
              <span class="badge badge-center bg-label-warning">5</span>
              <span class="badge badge-center bg-label-info">6</span>
            </p>
          </div>
        </div>
        <div class="col-md-6 col-xxl-3 p-6">
          <h6>Outline</h6>
          <div class="small fw-medium mb-2">Default</div>
          <div class="demo-inline-spacing">
            <p>
              <span class="badge badge-center rounded-pill badge-outline-primary">1</span>
              <span class="badge badge-center rounded-pill badge-outline-secondary">2</span>
              <span class="badge badge-center rounded-pill badge-outline-success">3</span>
              <span class="badge badge-center rounded-pill badge-outline-danger">4</span>
              <span class="badge badge-center rounded-pill badge-outline-warning">5</span>
              <span class="badge badge-center rounded-pill badge-outline-info">6</span>
            </p>
            <p>
              <span class="badge badge-center badge-outline-primary">1</span>
              <span class="badge badge-center badge-outline-secondary">2</span>
              <span class="badge badge-center badge-outline-success">3</span>
              <span class="badge badge-center badge-outline-danger">4</span>
              <span class="badge badge-center badge-outline-warning">5</span>
              <span class="badge badge-center badge-outline-info">6</span>
            </p>
          </div>
        </div>
        <div class="col-md-6 col-xxl-3 p-6">
          <h6>Glow</h6>
          <div class="text-light small fw-medium mb-2">Default</div>
          <div class="demo-inline-spacing">
            <p>
              <span class="badge badge-center rounded-pill bg-primary bg-glow">1</span>
              <span class="badge badge-center rounded-pill bg-secondary bg-glow">2</span>
              <span class="badge badge-center rounded-pill bg-success bg-glow">3</span>
              <span class="badge badge-center rounded-pill bg-danger bg-glow">4</span>
              <span class="badge badge-center rounded-pill bg-warning bg-glow">5</span>
              <span class="badge badge-center rounded-pill bg-info bg-glow">6</span>
            </p>
            <p>
              <span class="badge badge-center bg-primary bg-glow">1</span>
              <span class="badge badge-center bg-secondary bg-glow">2</span>
              <span class="badge badge-center bg-success bg-glow">3</span>
              <span class="badge badge-center bg-danger bg-glow">4</span>
              <span class="badge badge-center bg-warning bg-glow">5</span>
              <span class="badge badge-center bg-info bg-glow">6</span>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Badge Circle with Icons -->
  <div class="col-12">
    <div class="card">
      <h5 class="card-header">Badge Circle & Square With Icon</h5>
      <div class="row row-bordered g-0">
        <div class="col-md-6 col-xxl-3 p-6">
          <h6>Basic</h6>
          <div class="small fw-medium mb-2">Default</div>
          <div class="demo-inline-spacing">
            <p>
              <span class="badge badge-center rounded-pill text-bg-primary"><i
                  class="icon-base ti tabler-star"></i></span>
              <span class="badge badge-center rounded-pill text-bg-secondary"><i
                  class="icon-base ti tabler-sun"></i></span>
              <span class="badge badge-center rounded-pill text-bg-success"><i
                  class="icon-base ti tabler-check"></i></span>
              <span class="badge badge-center rounded-pill text-bg-danger"><i
                  class="icon-base ti tabler-clock"></i></span>
              <span class="badge badge-center rounded-pill text-bg-warning"><i
                  class="icon-base ti tabler-cloud"></i></span>
              <span class="badge badge-center rounded-pill text-bg-info"><i
                  class="icon-base ti tabler-folder"></i></span>
              <span class="badge badge-center rounded-pill text-bg-dark"><i
                  class="icon-base ti tabler-headphones"></i></span>
            </p>
            <p>
              <span class="badge badge-center text-bg-primary"><i class="icon-base ti tabler-star"></i></span>
              <span class="badge badge-center text-bg-secondary"><i class="icon-base ti tabler-sun"></i></span>
              <span class="badge badge-center text-bg-success"><i class="icon-base ti tabler-check"></i></span>
              <span class="badge badge-center text-bg-danger"><i class="icon-base ti tabler-clock"></i></span>
              <span class="badge badge-center text-bg-warning"><i class="icon-base ti tabler-cloud"></i></span>
              <span class="badge badge-center text-bg-info"><i class="icon-base ti tabler-folder"></i></span>
              <span class="badge badge-center text-bg-dark"><i class="icon-base ti tabler-headphones"></i></span>
            </p>
          </div>
        </div>
        <div class="col-md-6 col-xxl-3 p-6">
          <h6>Label</h6>
          <div class="small fw-medium mb-2">Default</div>
          <div class="demo-inline-spacing">
            <p>
              <span class="badge badge-center rounded-pill bg-label-primary"><i
                  class="icon-base ti tabler-star"></i></span>
              <span class="badge badge-center rounded-pill bg-label-secondary"><i
                  class="icon-base ti tabler-sun"></i></span>
              <span class="badge badge-center rounded-pill bg-label-success"><i
                  class="icon-base ti tabler-check"></i></span>
              <span class="badge badge-center rounded-pill bg-label-danger"><i
                  class="icon-base ti tabler-clock"></i></span>
              <span class="badge badge-center rounded-pill bg-label-warning"><i
                  class="icon-base ti tabler-cloud"></i></span>
              <span class="badge badge-center rounded-pill bg-label-info"><i
                  class="icon-base ti tabler-folder"></i></span>
              <span class="badge badge-center rounded-pill bg-label-dark"><i
                  class="icon-base ti tabler-headphones"></i></span>
            </p>
            <p>
              <span class="badge badge-center bg-label-primary"><i class="icon-base ti tabler-star"></i></span>
              <span class="badge badge-center bg-label-secondary"><i class="icon-base ti tabler-sun"></i></span>
              <span class="badge badge-center bg-label-success"><i class="icon-base ti tabler-check"></i></span>
              <span class="badge badge-center bg-label-danger"><i class="icon-base ti tabler-clock"></i></span>
              <span class="badge badge-center bg-label-warning"><i class="icon-base ti tabler-cloud"></i></span>
              <span class="badge badge-center bg-label-info"><i class="icon-base ti tabler-folder"></i></span>
              <span class="badge badge-center bg-label-dark"><i class="icon-base ti tabler-headphones"></i></span>
            </p>
          </div>
        </div>
        <div class="col-md-6 col-xxl-3 p-6">
          <h6>Outline</h6>
          <div class="small fw-medium mb-2">Default</div>
          <div class="demo-inline-spacing">
            <p>
              <span class="badge badge-center rounded-pill badge-outline-primary"><i
                  class="icon-base ti tabler-star"></i></span>
              <span class="badge badge-center rounded-pill badge-outline-secondary"><i
                  class="icon-base ti tabler-sun"></i></span>
              <span class="badge badge-center rounded-pill badge-outline-success"><i
                  class="icon-base ti tabler-check"></i></span>
              <span class="badge badge-center rounded-pill badge-outline-danger"><i
                  class="icon-base ti tabler-clock"></i></span>
              <span class="badge badge-center rounded-pill badge-outline-warning"><i
                  class="icon-base ti tabler-cloud"></i></span>
              <span class="badge badge-center rounded-pill badge-outline-info"><i
                  class="icon-base ti tabler-folder"></i></span>
              <span class="badge badge-center rounded-pill badge-outline-dark"><i
                  class="icon-base ti tabler-headphones"></i></span>
            </p>
            <p>
              <span class="badge badge-center badge-outline-primary"><i class="icon-base ti tabler-star"></i></span>
              <span class="badge badge-center badge-outline-secondary"><i class="icon-base ti tabler-sun"></i></span>
              <span class="badge badge-center badge-outline-success"><i class="icon-base ti tabler-check"></i></span>
              <span class="badge badge-center badge-outline-danger"><i class="icon-base ti tabler-clock"></i></span>
              <span class="badge badge-center badge-outline-warning"><i class="icon-base ti tabler-cloud"></i></span>
              <span class="badge badge-center badge-outline-info"><i class="icon-base ti tabler-folder"></i></span>
              <span class="badge badge-center badge-outline-dark"><i
                  class="icon-base ti tabler-headphones"></i></span>
            </p>
          </div>
        </div>
        <div class="col-md-6 col-xxl-3 p-6">
          <h6>Outline</h6>
          <div class="text-light small fw-medium mb-2">Default</div>
          <div class="demo-inline-spacing">
            <p>
              <span class="badge badge-center rounded-pill bg-primary bg-glow"><i
                  class="icon-base ti tabler-star"></i></span>
              <span class="badge badge-center rounded-pill bg-secondary bg-glow"><i
                  class="icon-base ti tabler-sun"></i></span>
              <span class="badge badge-center rounded-pill bg-success bg-glow"><i
                  class="icon-base ti tabler-check"></i></span>
              <span class="badge badge-center rounded-pill bg-danger bg-glow"><i
                  class="icon-base ti tabler-clock"></i></span>
              <span class="badge badge-center rounded-pill bg-warning bg-glow"><i
                  class="icon-base ti tabler-cloud"></i></span>
              <span class="badge badge-center rounded-pill bg-info bg-glow"><i
                  class="icon-base ti tabler-folder"></i></span>
              <span class="badge badge-center rounded-pill bg-dark bg-glow"><i
                  class="icon-base ti tabler-headphones"></i></span>
            </p>
            <p>
              <span class="badge badge-center bg-primary bg-glow"><i class="icon-base ti tabler-star"></i></span>
              <span class="badge badge-center bg-secondary bg-glow"><i class="icon-base ti tabler-sun"></i></span>
              <span class="badge badge-center bg-success bg-glow"><i class="icon-base ti tabler-check"></i></span>
              <span class="badge badge-center bg-danger bg-glow"><i class="icon-base ti tabler-clock"></i></span>
              <span class="badge badge-center bg-warning bg-glow"><i class="icon-base ti tabler-cloud"></i></span>
              <span class="badge badge-center bg-info bg-glow"><i class="icon-base ti tabler-folder"></i></span>
              <span class="badge badge-center bg-dark bg-glow"><i class="icon-base ti tabler-headphones"></i></span>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Notifications -->
  <div class="col-12">
    <div class="card">
      <h5 class="card-header">Notifications</h5>
      <div class="card-body d-flex flex-wrap gap-4">
        <button type="button" class="btn btn-label-primary text-nowrap d-inline-flex position-relative me-4">
          Badge
          <span
            class="position-absolute top-0 start-100 translate-middle badge badge-center rounded-pill bg-primary text-white">12</span>
        </button>
        <button type="button" class="btn btn-label-warning text-nowrap d-inline-flex position-relative me-4">
          Label Badge
          <span
            class="position-absolute top-0 start-100 translate-middle badge badge-center rounded-pill bg-warning text-white">12</span>
        </button>
        <button type="button" class="btn btn-label-info text-nowrap d-inline-flex position-relative me-4">
          Pill
          <span
            class="position-absolute top-0 start-100 translate-middle badge badge-center rounded-pill bg-info text-white">12</span>
        </button>
        <button type="button" class="btn btn-label-danger text-nowrap d-inline-flex position-relative">
          Dot
          <span
            class="position-absolute top-0 start-100 translate-middle badge badge-dot border border-2 p-2 bg-danger"></span>
        </button>
        <button type="button" class="btn text-nowrap d-inline-block">
          <span class="icon-base ti tabler-mail icon-sm"></span>
          <span class="badge text-bg-primary badge-notifications">6</span>
        </button>
        <button type="button" class="btn text-nowrap d-inline-block">
          <span class="icon-base ti tabler-clock icon-sm"></span>
          <span class="badge rounded-pill bg-label-danger badge-notifications">5</span>
        </button>
        <button type="button" class="btn text-nowrap d-inline-block">
          <span class="icon-base ti tabler-bell icon-sm"></span>
          <span class="badge rounded-pill text-bg-danger badge-notifications">10</span>
        </button>
        <button type="button" class="btn text-nowrap d-inline-block">
          <span class="icon-base ti tabler-brand-facebook icon-sm"></span>
          <span class="badge rounded-pill bg-danger badge-dot badge-notifications"></span>
        </button>
      </div>
    </div>
  </div>
  <!-- Dots -->
  <div class="col-12">
    <div class="card">
      <h5 class="card-header">Dots Style</h5>
      <div class="card-body d-sm-flex d-block">
        <div class="d-flex align-items-center lh-1 me-4 mb-4 mb-sm-0"><span
            class="badge badge-dot text-bg-primary me-1"></span> Primary</div>
        <div class="d-flex align-items-center lh-1 me-4 mb-4 mb-sm-0"><span
            class="badge badge-dot text-bg-secondary me-1"></span> Secondary</div>
        <div class="d-flex align-items-center lh-1 me-4 mb-4 mb-sm-0"><span
            class="badge badge-dot text-bg-success me-1"></span> Success</div>
        <div class="d-flex align-items-center lh-1 me-4 mb-4 mb-sm-0"><span
            class="badge badge-dot text-bg-danger me-1"></span> Danger</div>
        <div class="d-flex align-items-center lh-1 me-4 mb-4 mb-sm-0"><span
            class="badge badge-dot text-bg-warning me-1"></span> Warning</div>
        <div class="d-flex align-items-center lh-1 me-4 mb-4 mb-sm-0"><span
            class="badge badge-dot text-bg-info me-1"></span> Info</div>
      </div>
    </div>
  </div>

  <!-- Button with Badges -->
  <div class="col-12">
    <div class="card">
      <h5 class="card-header">Button with Badges</h5>
      <div class="row row-bordered g-0">
        <div class="col-xl-4 p-6">
          <small class="fw-medium">Default</small>
          <div class="d-flex gap-4 flex-wrap mt-4">
            <button type="button" class="btn btn-primary me-2 me-xl-0">
              Text
              <span class="badge bg-white text-primary badge-center ms-1">4</span>
            </button>
            <button type="button" class="btn btn-secondary">
              Text
              <span class="badge bg-white text-secondary rounded-pill badge-center ms-1">4</span>
            </button>
          </div>
        </div>
        <div class="col-xl-4 p-6">
          <small class="text-light fw-medium">Label</small>
          <div class="d-flex gap-4 flex-wrap mt-4">
            <button type="button" class="btn btn-label-primary">
              Text
              <span class="badge bg-primary text-white badge-center ms-1">4</span>
            </button>
            <button type="button" class="btn btn-label-secondary">
              Text
              <span class="badge bg-secondary rounded-pill badge-center ms-1">4</span>
            </button>
          </div>
        </div>

        <div class="col-xl-4 p-6">
          <small class="text-light fw-medium">Outline</small>
          <div class="d-flex gap-4 flex-wrap mt-4">
            <button type="button" class="btn btn-outline-primary">
              Text
              <span class="badge badge-center ms-1">4</span>
            </button>
            <button type="button" class="btn btn-outline-secondary">
              Text
              <span class="badge rounded-pill badge-center ms-1">4</span>
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
