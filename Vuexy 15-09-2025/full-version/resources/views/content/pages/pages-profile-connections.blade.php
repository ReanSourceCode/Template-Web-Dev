@extends('layouts/layoutMaster')

@section('title', 'User Profile - Connections')

<!-- Page -->
@section('page-style')
@vite(['resources/assets/vendor/scss/pages/page-profile.scss'])
@endsection

@section('content')
<!-- Header -->
<div class="row">
  <div class="col-12">
    <div class="card mb-6">
      <div class="user-profile-header-banner">
        <img src="{{ asset('assets/img/pages/profile-banner.png') }}" alt="Banner image" class="rounded-top" />
      </div>
      <div class="user-profile-header d-flex flex-column flex-lg-row text-sm-start text-center mb-5">
        <div class="flex-shrink-0 mt-n2 mx-sm-0 mx-auto">
          <img src="{{ asset('assets/img/avatars/1.png') }}" alt="user image" class="d-block h-auto ms-0 ms-sm-6 rounded user-profile-img" />
        </div>
        <div class="flex-grow-1 mt-3 mt-lg-5">
          <div class="d-flex align-items-md-end align-items-sm-start align-items-center justify-content-md-between justify-content-start mx-5 flex-md-row flex-column gap-4">
            <div class="user-profile-info">
              <h4 class="mb-2 mt-lg-6">John Doe</h4>
              <ul class="list-inline mb-0 d-flex align-items-center flex-wrap justify-content-sm-start justify-content-center gap-4">
                <li class="list-inline-item"><i class="icon-base ti tabler-palette icon-lg me-2"></i> UX Designer</li>
                <li class="list-inline-item"><i class="icon-base ti tabler-map-pin icon-lg me-2"></i> Vatican City</li>
                <li class="list-inline-item"><i class="icon-base ti tabler-calendar icon-lg me-2"></i> Joined April 2021</li>
              </ul>
            </div>
            <a href="javascript:void(0)" class="btn btn-primary mb-1"> <i class="icon-base ti tabler-user-check icon-xs me-2"></i>Connected </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--/ Header -->

<!-- Navbar pills -->
<div class="row">
  <div class="col-md-12">
    <div class="nav-align-top">
      <ul class="nav nav-pills flex-column flex-sm-row mb-6 gap-sm-0 gap-2">
        <li class="nav-item">
          <a class="nav-link" href="{{ url('pages/profile-user') }}"><i class="icon-base ti tabler-user icon-sm me-1_5"></i> Profile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('pages/profile-teams') }}"><i class="icon-base ti tabler-users icon-sm me-1_5"></i> Teams</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('pages/profile-projects') }}"><i class="icon-base ti tabler-layout-grid icon-sm me-1_5"></i> Projects</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="javascript:void(0);"><i class="icon-base ti tabler-link icon-sm me-1_5"></i> Connections</a>
        </li>
      </ul>
    </div>
  </div>
</div>
<!--/ Navbar pills -->

<!-- Connection Cards -->
<div class="row g-6">
  <div class="col-xl-4 col-lg-6 col-md-6">
    <div class="card">
      <div class="card-body text-center">
        <div class="dropdown btn-pinned">
          <button type="button" class="btn btn-icon btn-text-secondary rounded-pill dropdown-toggle hide-arrow" data-bs-toggle="dropdown" aria-expanded="false"><i class="icon-base ti tabler-dots-vertical icon-22px text-body-secondary"></i></button>
          <ul class="dropdown-menu dropdown-menu-end">
            <li><a class="dropdown-item" href="javascript:void(0);">Share connection</a></li>
            <li><a class="dropdown-item" href="javascript:void(0);">Block connection</a></li>
            <li>
              <hr class="dropdown-divider" />
            </li>
            <li><a class="dropdown-item text-danger" href="javascript:void(0);">Delete</a></li>
          </ul>
        </div>
        <div class="mx-auto my-6">
          <img src="{{ asset('assets/img/avatars/3.png') }}" alt="Avatar Image" class="rounded-circle w-px-100 h-px-100" />
        </div>
        <h5 class="mb-0 card-title">Mark Gilbert</h5>
        <span>UI Designer</span>
        <div class="d-flex align-items-center justify-content-center my-6 gap-2">
          <a href="javascript:;" class="me-2"><span class="badge bg-label-secondary">Figma</span></a>
          <a href="javascript:;"><span class="badge bg-label-warning">Sketch</span></a>
        </div>

        <div class="d-flex align-items-center justify-content-around mb-6">
          <div>
            <h5 class="mb-0">18</h5>
            <span>Projects</span>
          </div>
          <div>
            <h5 class="mb-0">834</h5>
            <span>Tasks</span>
          </div>
          <div>
            <h5 class="mb-0">129</h5>
            <span>Connections</span>
          </div>
        </div>
        <div class="d-flex align-items-center justify-content-center">
          <a href="javascript:;" class="btn btn-primary d-flex align-items-center me-4"><i class="icon-base ti tabler-user-check icon-xs me-2"></i>Connected</a>
          <a href="javascript:;" class="btn btn-label-secondary btn-icon"><i class="icon-base ti tabler-mail icon-22px"></i></a>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-4 col-lg-6 col-md-6">
    <div class="card">
      <div class="card-body text-center">
        <div class="dropdown btn-pinned">
          <button type="button" class="btn btn-icon btn-text-secondary rounded-pill dropdown-toggle hide-arrow" data-bs-toggle="dropdown" aria-expanded="false"><i class="icon-base ti tabler-dots-vertical icon-22px text-body-secondary"></i></button>
          <ul class="dropdown-menu dropdown-menu-end">
            <li><a class="dropdown-item" href="javascript:void(0);">Share connection</a></li>
            <li><a class="dropdown-item" href="javascript:void(0);">Block connection</a></li>
            <li>
              <hr class="dropdown-divider" />
            </li>
            <li><a class="dropdown-item text-danger" href="javascript:void(0);">Delete</a></li>
          </ul>
        </div>
        <div class="mx-auto my-6">
          <img src="{{ asset('assets/img/avatars/12.png') }}" alt="Avatar Image" class="rounded-circle w-px-100 h-px-100" />
        </div>
        <h5 class="mb-0 card-title">Eugenia Parsons</h5>
        <span>Developer</span>
        <div class="d-flex align-items-center justify-content-center my-6 gap-2">
          <a href="javascript:;" class="me-2"><span class="badge bg-label-danger">Angular</span></a>
          <a href="javascript:;"><span class="badge bg-label-info">React</span></a>
        </div>

        <div class="d-flex align-items-center justify-content-around mb-6">
          <div>
            <h5 class="mb-0">112</h5>
            <span>Projects</span>
          </div>
          <div>
            <h5 class="mb-0">23.1k</h5>
            <span>Tasks</span>
          </div>
          <div>
            <h5 class="mb-0">1.28k</h5>
            <span>Connections</span>
          </div>
        </div>
        <div class="d-flex align-items-center justify-content-center">
          <a href="javascript:;" class="btn btn-label-primary d-flex align-items-center me-4"><i class="icon-base ti tabler-user-plus icon-xs me-2"></i>Connect</a>
          <a href="javascript:;" class="btn btn-label-secondary btn-icon"><i class="icon-base ti tabler-mail icon-22px"></i></a>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-4 col-lg-6 col-md-6">
    <div class="card">
      <div class="card-body text-center">
        <div class="dropdown btn-pinned">
          <button type="button" class="btn btn-icon btn-text-secondary rounded-pill dropdown-toggle hide-arrow" data-bs-toggle="dropdown" aria-expanded="false"><i class="icon-base ti tabler-dots-vertical icon-22px text-body-secondary"></i></button>
          <ul class="dropdown-menu dropdown-menu-end">
            <li><a class="dropdown-item" href="javascript:void(0);">Share connection</a></li>
            <li><a class="dropdown-item" href="javascript:void(0);">Block connection</a></li>
            <li>
              <hr class="dropdown-divider" />
            </li>
            <li><a class="dropdown-item text-danger" href="javascript:void(0);">Delete</a></li>
          </ul>
        </div>
        <div class="mx-auto my-6">
          <img src="{{ asset('assets/img/avatars/5.png') }}" alt="Avatar Image" class="rounded-circle w-px-100 h-px-100" />
        </div>
        <h5 class="mb-0 card-title">Francis Byrd</h5>
        <span>Developer</span>
        <div class="d-flex align-items-center justify-content-center my-6 gap-2">
          <a href="javascript:;" class="me-2"><span class="badge bg-label-primary">React</span></a>
          <a href="javascript:;"><span class="badge bg-label-info">HTML</span></a>
        </div>

        <div class="d-flex align-items-center justify-content-around mb-6">
          <div>
            <h5 class="mb-0">32</h5>
            <span>Projects</span>
          </div>
          <div>
            <h5 class="mb-0">1.25k</h5>
            <span>Tasks</span>
          </div>
          <div>
            <h5 class="mb-0">890</h5>
            <span>Connections</span>
          </div>
        </div>
        <div class="d-flex align-items-center justify-content-center">
          <a href="javascript:;" class="btn btn-label-primary d-flex align-items-center me-4"><i class="icon-base ti tabler-user-plus icon-xs me-2"></i>Connect</a>
          <a href="javascript:;" class="btn btn-label-secondary btn-icon"><i class="icon-base ti tabler-mail icon-22px"></i></a>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-4 col-lg-6 col-md-6">
    <div class="card">
      <div class="card-body text-center">
        <div class="dropdown btn-pinned">
          <button type="button" class="btn btn-icon btn-text-secondary rounded-pill dropdown-toggle hide-arrow" data-bs-toggle="dropdown" aria-expanded="false"><i class="icon-base ti tabler-dots-vertical icon-22px text-body-secondary"></i></button>
          <ul class="dropdown-menu dropdown-menu-end">
            <li><a class="dropdown-item" href="javascript:void(0);">Share connection</a></li>
            <li><a class="dropdown-item" href="javascript:void(0);">Block connection</a></li>
            <li>
              <hr class="dropdown-divider" />
            </li>
            <li><a class="dropdown-item text-danger" href="javascript:void(0);">Delete</a></li>
          </ul>
        </div>
        <div class="mx-auto my-6">
          <img src="{{ asset('assets/img/avatars/8.png') }}" alt="Avatar Image" class="rounded-circle w-px-100 h-px-100" />
        </div>
        <h5 class="mb-0 card-title">Leon Lucas</h5>
        <span>UI/UX Designer</span>
        <div class="d-flex align-items-center justify-content-center my-6 gap-2">
          <a href="javascript:;" class="me-2"><span class="badge bg-label-secondary">Figma</span></a>
          <a href="javascript:;" class="me-2"><span class="badge bg-label-warning">Sketch</span></a>
          <a href="javascript:;"><span class="badge bg-label-primary">Photoshop</span></a>
        </div>

        <div class="d-flex align-items-center justify-content-around mb-6">
          <div>
            <h5 class="mb-0">86</h5>
            <span>Projects</span>
          </div>
          <div>
            <h5 class="mb-0">12.4k</h5>
            <span>Tasks</span>
          </div>
          <div>
            <h5 class="mb-0">890</h5>
            <span>Connections</span>
          </div>
        </div>
        <div class="d-flex align-items-center justify-content-center">
          <a href="javascript:;" class="btn btn-label-primary d-flex align-items-center me-4"><i class="icon-base ti tabler-user-plus icon-xs me-2"></i>Connect</a>
          <a href="javascript:;" class="btn btn-label-secondary btn-icon"><i class="icon-base ti tabler-mail icon-22px"></i></a>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-4 col-lg-6 col-md-6">
    <div class="card">
      <div class="card-body text-center">
        <div class="dropdown btn-pinned">
          <button type="button" class="btn btn-icon btn-text-secondary rounded-pill dropdown-toggle hide-arrow" data-bs-toggle="dropdown" aria-expanded="false"><i class="icon-base ti tabler-dots-vertical icon-22px text-body-secondary"></i></button>
          <ul class="dropdown-menu dropdown-menu-end">
            <li><a class="dropdown-item" href="javascript:void(0);">Share connection</a></li>
            <li><a class="dropdown-item" href="javascript:void(0);">Block connection</a></li>
            <li>
              <hr class="dropdown-divider" />
            </li>
            <li><a class="dropdown-item text-danger" href="javascript:void(0);">Delete</a></li>
          </ul>
        </div>
        <div class="mx-auto my-6">
          <img src="{{ asset('assets/img/avatars/9.png') }}" alt="Avatar Image" class="rounded-circle w-px-100 h-px-100" />
        </div>
        <h5 class="mb-0 card-title">Jayden Rogers</h5>
        <span>Full Stack Developer</span>
        <div class="d-flex align-items-center justify-content-center my-6 gap-2">
          <a href="javascript:;" class="me-2"><span class="badge bg-label-info">React</span></a>
          <a href="javascript:;" class="me-2"><span class="badge bg-label-warning">Angular</span></a>
          <a href="javascript:;"><span class="badge bg-label-success">Node.js</span></a>
        </div>

        <div class="d-flex align-items-center justify-content-around mb-6">
          <div>
            <h5 class="mb-0">244</h5>
            <span>Projects</span>
          </div>
          <div>
            <h5 class="mb-0">23.8k</h5>
            <span>Tasks</span>
          </div>
          <div>
            <h5 class="mb-0">2.14k</h5>
            <span>Connections</span>
          </div>
        </div>
        <div class="d-flex align-items-center justify-content-center">
          <a href="javascript:;" class="btn btn-primary d-flex align-items-center me-4"><i class="icon-base ti tabler-user-check icon-xs me-2"></i>Connected</a>
          <a href="javascript:;" class="btn btn-label-secondary btn-icon"><i class="icon-base ti tabler-mail icon-22px"></i></a>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-4 col-lg-6 col-md-6">
    <div class="card">
      <div class="card-body text-center">
        <div class="dropdown btn-pinned">
          <button type="button" class="btn btn-icon btn-text-secondary rounded-pill dropdown-toggle hide-arrow" data-bs-toggle="dropdown" aria-expanded="false"><i class="icon-base ti tabler-dots-vertical icon-22px text-body-secondary"></i></button>
          <ul class="dropdown-menu dropdown-menu-end">
            <li><a class="dropdown-item" href="javascript:void(0);">Share connection</a></li>
            <li><a class="dropdown-item" href="javascript:void(0);">Block connection</a></li>
            <li>
              <hr class="dropdown-divider" />
            </li>
            <li><a class="dropdown-item text-danger" href="javascript:void(0);">Delete</a></li>
          </ul>
        </div>
        <div class="mx-auto my-6">
          <img src="{{ asset('assets/img/avatars/10.png') }}" alt="Avatar Image" class="rounded-circle w-px-100 h-px-100" />
        </div>
        <h5 class="mb-0 card-title">Jeanette Powell</h5>
        <span>SEO</span>
        <div class="d-flex align-items-center justify-content-center my-6 gap-2">
          <a href="javascript:;" class="me-2"><span class="badge bg-label-secondary">Analysis</span></a>
          <a href="javascript:;"><span class="badge bg-label-success">Node.js</span></a>
        </div>

        <div class="d-flex align-items-center justify-content-around mb-6">
          <div>
            <h5 class="mb-0">32</h5>
            <span>Projects</span>
          </div>
          <div>
            <h5 class="mb-0">1.28k</h5>
            <span>Tasks</span>
          </div>
          <div>
            <h5 class="mb-0">1.27k</h5>
            <span>Connections</span>
          </div>
        </div>
        <div class="d-flex align-items-center justify-content-center">
          <a href="javascript:;" class="btn btn-label-primary d-flex align-items-center me-4"><i class="icon-base ti tabler-user-plus icon-xs me-2"></i>Connect</a>
          <a href="javascript:;" class="btn btn-label-secondary btn-icon"><i class="icon-base ti tabler-mail icon-22px"></i></a>
        </div>
      </div>
    </div>
  </div>
</div>
<!--/ Connection Cards -->
@endsection