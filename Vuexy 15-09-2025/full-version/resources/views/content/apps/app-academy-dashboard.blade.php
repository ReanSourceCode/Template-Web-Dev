@extends('layouts/layoutMaster')

@section('title', 'Academy Dashboard - Apps')

@section('vendor-style')
@vite(['resources/assets/vendor/libs/datatables-bs5/datatables.bootstrap5.scss',
'resources/assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.scss',
'resources/assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.scss',
'resources/assets/vendor/libs/apex-charts/apex-charts.scss'])
@endsection

@section('vendor-script')
@vite(['resources/assets/vendor/libs/moment/moment.js',
'resources/assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js',
'resources/assets/vendor/libs/apex-charts/apexcharts.js'])
@endsection

@section('page-script')
@vite('resources/assets/js/app-academy-dashboard.js')
@endsection

@section('content')
<!-- Hour chart  -->
<div class="card bg-transparent shadow-none my-6 border-0">
  <div class="card-body row p-0 pb-6 g-6">
    <div class="col-12 col-lg-8 card-separator">
      <h5 class="mb-2">Welcome back,<span class="h4"> Felecia 👋🏻</span></h5>
      <div class="col-12 col-lg-5">
        <p>Your progress this week is Awesome. let's keep it up and get a lot of points reward !</p>
      </div>
      <div class="d-flex justify-content-between flex-wrap gap-4 me-12">
        <div class="d-flex align-items-center gap-4 me-6 me-sm-0">
          <div class="avatar avatar-lg">
            <div class="avatar-initial bg-label-primary rounded">
              <div class="text-primary">
                <svg width="38" height="38" viewBox="0 0 38 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g id="Laptop">
                    <path id="Vector" opacity="0.2"
                      d="M5.9375 26.125V10.6875C5.9375 10.0576 6.18772 9.45352 6.63312 9.00812C7.07852 8.56272 7.68261 8.3125 8.3125 8.3125H29.6875C30.3174 8.3125 30.9215 8.56272 31.3669 9.00812C31.8123 9.45352 32.0625 10.0576 32.0625 10.6875V26.125H5.9375Z"
                      fill="currentColor" />
                    <path id="Vector_2"
                      d="M5.9375 26.125V10.6875C5.9375 10.0576 6.18772 9.45352 6.63312 9.00812C7.07852 8.56272 7.68261 8.3125 8.3125 8.3125H29.6875C30.3174 8.3125 30.9215 8.56272 31.3669 9.00812C31.8123 9.45352 32.0625 10.0576 32.0625 10.6875V26.125M21.375 13.0625H16.625M3.5625 26.125H34.4375V28.5C34.4375 29.1299 34.1873 29.734 33.7419 30.1794C33.2965 30.6248 32.6924 30.875 32.0625 30.875H5.9375C5.30761 30.875 4.70352 30.6248 4.25812 30.1794C3.81272 29.734 3.5625 29.1299 3.5625 28.5V26.125Z"
                      stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                  </g>
                </svg>
              </div>
            </div>
          </div>
          <div class="content-right">
            <p class="mb-0 fw-medium">Hours Spent</p>
            <h4 class="text-primary mb-0">34h</h4>
          </div>
        </div>
        <div class="d-flex align-items-center gap-4">
          <div class="avatar avatar-lg">
            <div class="avatar-initial bg-label-info rounded">
              <div class="text-info">
                <svg width="38" height="38" viewBox="0 0 38 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g id="Lightbulb">
                    <path id="Vector" opacity="0.2"
                      d="M11.6822 24.7891C10.2684 23.6898 9.12342 22.2832 8.33388 20.6759C7.54435 19.0685 7.13099 17.3025 7.12513 15.5117C7.09544 9.06954 12.2759 3.71095 18.7181 3.56251C21.2113 3.50341 23.6599 4.23078 25.7166 5.64147C27.7732 7.05217 29.3335 9.07457 30.1761 11.4219C31.0188 13.7691 31.101 16.3221 30.4112 18.7188C29.7214 21.1154 28.2945 23.2341 26.3329 24.7742C25.8996 25.1092 25.5486 25.5388 25.3068 26.0301C25.065 26.5215 24.9387 27.0617 24.9376 27.6094V28.5C24.9376 28.815 24.8125 29.117 24.5898 29.3397C24.3671 29.5624 24.0651 29.6875 23.7501 29.6875H14.2501C13.9352 29.6875 13.6331 29.5624 13.4104 29.3397C13.1877 29.117 13.0626 28.815 13.0626 28.5V27.6094C13.0589 27.0658 12.9329 26.5301 12.6939 26.0418C12.4549 25.5536 12.1091 25.1255 11.6822 24.7891Z"
                      fill="currentColor" />
                    <path id="Union" fill-rule="evenodd" clip-rule="evenodd"
                      d="M25.1509 6.46609C23.2675 5.17419 21.0251 4.50807 18.7418 4.5622L18.7411 4.56221C18.4983 4.56781 18.2574 4.58151 18.0187 4.60305L18.6951 2.56275C21.398 2.49881 24.0526 3.28743 26.2822 4.8168C28.512 6.34629 30.2037 8.53899 31.1173 11.0839C32.031 13.6289 32.1201 16.3969 31.3722 18.9954C30.6243 21.5938 29.0772 23.8909 26.9505 25.5607L26.9445 25.5654L26.9445 25.5654C26.6318 25.8071 26.3785 26.1171 26.204 26.4717C26.0295 26.8263 25.9384 27.2161 25.9376 27.6113V28.5C25.9376 29.0801 25.7072 29.6365 25.2969 30.0468C24.8867 30.457 24.3303 30.6875 23.7501 30.6875H14.2501C13.67 30.6875 13.1136 30.457 12.7033 30.0468C12.2931 29.6365 12.0626 29.0801 12.0626 28.5V27.6131C12.0595 27.2206 11.9683 26.8339 11.7957 26.4815C11.6232 26.1289 11.3737 25.8196 11.0656 25.5764L11.7414 23.5378C11.9208 23.6976 12.1057 23.8517 12.296 23.9996L11.6821 24.7891L12.301 24.0035C12.8459 24.4328 13.2871 24.9792 13.5921 25.6022C13.8971 26.2252 14.0579 26.9089 14.0626 27.6025L14.0627 27.6094L14.0626 28.5C14.0626 28.5497 14.0824 28.5974 14.1175 28.6326C14.1527 28.6677 14.2004 28.6875 14.2501 28.6875H23.7501C23.7999 28.6875 23.8475 28.6677 23.8827 28.6326C23.9179 28.5974 23.9376 28.5497 23.9376 28.5V27.6094L23.9376 27.6074C23.939 26.9073 24.1004 26.2167 24.4096 25.5885C24.7181 24.9616 25.1657 24.4133 25.7181 23.9855C27.5131 22.5752 28.8188 20.6359 29.4502 18.4422C30.082 16.2473 30.0067 13.9093 29.235 11.7597C28.4633 9.61009 27.0344 7.75799 25.1509 6.46609ZM11.7414 23.5378L11.7414 23.5378L18.0187 4.60305L18.018 4.6031L18.6944 2.56276C11.7043 2.72418 6.09331 8.53234 6.12513 15.5156C6.13159 17.458 6.57998 19.3733 7.43632 21.1167C8.29225 22.8593 9.53332 24.3843 11.0656 25.5764L11.7414 23.5378ZM11.7414 23.5378C10.7009 22.6109 9.84781 21.4898 9.23145 20.235C8.50882 18.7638 8.13049 17.1475 8.12512 15.5084L8.12512 15.5071C8.09905 9.84987 12.4637 5.10456 18.018 4.6031L11.7414 23.5378ZM12.0627 34.4375C12.0627 33.8852 12.5104 33.4375 13.0627 33.4375H24.9377C25.49 33.4375 25.9377 33.8852 25.9377 34.4375C25.9377 34.9898 25.49 35.4375 24.9377 35.4375H13.0627C12.5104 35.4375 12.0627 34.9898 12.0627 34.4375ZM20.3697 7.44532C19.8252 7.35302 19.3089 7.71961 19.2166 8.26412C19.1243 8.80864 19.4909 9.32489 20.0354 9.41719C21.2827 9.62862 22.4336 10.222 23.3292 11.1154C24.2249 12.0087 24.8212 13.1581 25.0358 14.4048C25.1295 14.9491 25.6467 15.3144 26.191 15.2207C26.7353 15.127 27.1005 14.6098 27.0068 14.0655C26.722 12.4107 25.9305 10.8851 24.7417 9.69934C23.5528 8.51353 22.0252 7.72596 20.3697 7.44532Z"
                      fill="currentColor" />
                  </g>
                </svg>
              </div>
            </div>
          </div>
          <div class="content-right">
            <p class="mb-0 fw-medium">Test Results</p>
            <h4 class="text-info mb-0">82%</h4>
          </div>
        </div>
        <div class="d-flex align-items-center gap-4">
          <div class="avatar avatar-lg">
            <div class="avatar-initial bg-label-warning rounded">
              <div class="text-warning">
                <svg width="38" height="38" viewBox="0 0 38 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g id="Check">
                    <path id="Vector" opacity="0.2"
                      d="M8.08984 29.9102C6.72422 28.5445 7.62969 25.6797 6.93203 24.0023C6.23438 22.325 3.5625 20.8555 3.5625 19C3.5625 17.1445 6.20469 15.7344 6.93203 13.9977C7.65938 12.2609 6.72422 9.45547 8.08984 8.08984C9.45547 6.72422 12.3203 7.62969 13.9977 6.93203C15.675 6.23438 17.1445 3.5625 19 3.5625C20.8555 3.5625 22.2656 6.20469 24.0023 6.93203C25.7391 7.65938 28.5445 6.72422 29.9102 8.08984C31.2758 9.45547 30.3703 12.3203 31.068 13.9977C31.7656 15.675 34.4375 17.1445 34.4375 19C34.4375 20.8555 31.7953 22.2656 31.068 24.0023C30.3406 25.7391 31.2758 28.5445 29.9102 29.9102C28.5445 31.2758 25.6797 30.3703 24.0023 31.068C22.325 31.7656 20.8555 34.4375 19 34.4375C17.1445 34.4375 15.7344 31.7953 13.9977 31.068C12.2609 30.3406 9.45547 31.2758 8.08984 29.9102Z"
                      fill="currentColor" />
                    <path id="Vector_2"
                      d="M25.5312 15.4375L16.818 23.75L12.4687 19.5937M8.08984 29.9102C6.72422 28.5445 7.62969 25.6797 6.93203 24.0023C6.23437 22.325 3.5625 20.8555 3.5625 19C3.5625 17.1445 6.20469 15.7344 6.93203 13.9977C7.65937 12.2609 6.72422 9.45547 8.08984 8.08984C9.45547 6.72422 12.3203 7.62969 13.9977 6.93203C15.675 6.23437 17.1445 3.5625 19 3.5625C20.8555 3.5625 22.2656 6.20469 24.0023 6.93203C25.7391 7.65937 28.5445 6.72422 29.9102 8.08984C31.2758 9.45547 30.3703 12.3203 31.068 13.9977C31.7656 15.675 34.4375 17.1445 34.4375 19C34.4375 20.8555 31.7953 22.2656 31.068 24.0023C30.3406 25.7391 31.2758 28.5445 29.9102 29.9102C28.5445 31.2758 25.6797 30.3703 24.0023 31.068C22.325 31.7656 20.8555 34.4375 19 34.4375C17.1445 34.4375 15.7344 31.7953 13.9977 31.068C12.2609 30.3406 9.45547 31.2758 8.08984 29.9102Z"
                      stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                  </g>
                </svg>
              </div>
            </div>
          </div>
          <div class="content-right">
            <p class="mb-0 fw-medium">Course Completed</p>
            <h4 class="text-warning mb-0">14</h4>
          </div>
        </div>
      </div>
    </div>
    <div class="col-12 col-lg-4 ps-md-4 ps-lg-6">
      <div class="d-flex justify-content-between align-items-center">
        <div>
          <div>
            <h5 class="mb-1">Time Spendings</h5>
            <p class="mb-9">Weekly report</p>
          </div>
          <div class="time-spending-chart">
            <h4 class="mb-2">231<span class="text-body">h</span> 14<span class="text-body">m</span></h4>
            <span class="badge bg-label-success">+18.4%</span>
          </div>
        </div>
        <div id="leadsReportChart"></div>
      </div>
    </div>
  </div>
</div>
<!-- Hour chart End  -->

<!-- Topic and Instructors -->
<div class="row mb-6 g-6">
  <div class="col-12 col-xl-8">
    <div class="card h-100">
      <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="card-title m-0 me-2">Topic you are interested in</h5>
        <div class="dropdown">
          <button class="btn p-0" type="button" id="topic" data-bs-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            <i class="icon-base ti tabler-dots-vertical icon-22px text-body-secondary"></i>
          </button>
          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="topic">
            <a class="dropdown-item" href="javascript:void(0);">Highest Views</a>
            <a class="dropdown-item" href="javascript:void(0);">See All</a>
          </div>
        </div>
      </div>
      <div class="card-body row g-3">
        <div class="col-md-8">
          <div id="horizontalBarChart"></div>
        </div>
        <div class="col-md-4 d-flex justify-content-around align-items-center">
          <div>
            <div class="d-flex align-items-baseline">
              <span class="text-primary me-2"><i class="icon-base ti tabler-circle-filled icon-12px"></i></span>
              <div>
                <p class="mb-0">UI Design</p>
                <h5>35%</h5>
              </div>
            </div>
            <div class="d-flex align-items-baseline my-12">
              <span class="text-success me-2"><i class="icon-base ti tabler-circle-filled icon-12px"></i></span>
              <div>
                <p class="mb-0">Music</p>
                <h5>14%</h5>
              </div>
            </div>
            <div class="d-flex align-items-baseline">
              <span class="text-danger me-2"><i class="icon-base ti tabler-circle-filled icon-12px"></i></span>
              <div>
                <p class="mb-0">React</p>
                <h5>10%</h5>
              </div>
            </div>
          </div>

          <div>
            <div class="d-flex align-items-baseline">
              <span class="text-info me-2"><i class="icon-base ti tabler-circle-filled icon-12px"></i></span>
              <div>
                <p class="mb-0">UX Design</p>
                <h5>20%</h5>
              </div>
            </div>
            <div class="d-flex align-items-baseline my-12">
              <span class="text-secondary me-2"><i class="icon-base ti tabler-circle-filled icon-12px"></i></span>
              <div>
                <p class="mb-0">Animation</p>
                <h5>12%</h5>
              </div>
            </div>
            <div class="d-flex align-items-baseline">
              <span class="text-warning me-2"><i class="icon-base ti tabler-circle-filled icon-12px"></i></span>
              <div>
                <p class="mb-0">SEO</p>
                <h5>9%</h5>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="col-12 col-xl-4 col-md-6">
    <div class="card h-100">
      <div class="card-header d-flex align-items-center justify-content-between">
        <div class="card-title mb-0">
          <h5 class="m-0 me-2">Popular Instructors</h5>
        </div>
        <div class="dropdown">
          <button class="btn text-body-secondary p-0" type="button" id="popularInstructors" data-bs-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            <i class="icon-base ti tabler-dots-vertical icon-22px"></i>
          </button>
          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="popularInstructors">
            <a class="dropdown-item" href="javascript:void(0);">Select All</a>
            <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
            <a class="dropdown-item" href="javascript:void(0);">Share</a>
          </div>
        </div>
      </div>
      <div class="px-5 py-4 border border-start-0 border-end-0">
        <div class="d-flex justify-content-between align-items-center">
          <p class="mb-0 text-uppercase">Instructors</p>
          <p class="mb-0 text-uppercase">courses</p>
        </div>
      </div>
      <div class="card-body">
        <div class="d-flex justify-content-between align-items-center mb-6">
          <div class="d-flex align-items-center">
            <div class="avatar avatar me-4">
              <img src="{{ asset('assets/img/avatars/1.png') }}" alt="Avatar" class="rounded-circle" />
            </div>
            <div>
              <div>
                <h6 class="mb-0 text-truncate">Maven Analytics</h6>
                <small class="text-truncate text-body">Business Intelligence</small>
              </div>
            </div>
          </div>
          <div class="text-end">
            <h6 class="mb-0">33</h6>
          </div>
        </div>
        <div class="d-flex justify-content-between align-items-center mb-6">
          <div class="d-flex align-items-center">
            <div class="avatar avatar me-4">
              <img src="{{ asset('assets/img/avatars/2.png') }}" alt="Avatar" class="rounded-circle" />
            </div>
            <div>
              <div>
                <h6 class="mb-0 text-truncate">Bentlee Emblin</h6>
                <small class="text-truncate text-body">Digital Marketing</small>
              </div>
            </div>
          </div>
          <div class="text-end">
            <h6 class="mb-0">52</h6>
          </div>
        </div>
        <div class="d-flex justify-content-between align-items-center mb-6">
          <div class="d-flex align-items-center">
            <div class="avatar avatar me-4">
              <img src="{{ asset('assets/img/avatars/3.png') }}" alt="Avatar" class="rounded-circle" />
            </div>
            <div>
              <div>
                <h6 class="mb-0 text-truncate">Benedetto Rossiter</h6>
                <small class="text-truncate text-body">UI/UX Design</small>
              </div>
            </div>
          </div>
          <div class="text-end">
            <h6 class="mb-0">12</h6>
          </div>
        </div>
        <div class="d-flex justify-content-between align-items-center">
          <div class="d-flex align-items-center">
            <div class="avatar avatar me-4">
              <img src="{{ asset('assets/img/avatars/4.png') }}" alt="Avatar" class="rounded-circle" />
            </div>
            <div>
              <div>
                <h6 class="mb-0 text-truncate">Beverlie Krabbe</h6>
                <small class="text-truncate text-body">React Native</small>
              </div>
            </div>
          </div>
          <div class="text-end">
            <h6 class="mb-0">8</h6>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="col-12 col-xl-4 col-md-6">
    <div class="card h-100">
      <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="card-title m-0 me-2">Top Courses</h5>
        <div class="dropdown">
          <button class="btn text-body-secondary p-0" type="button" id="topCourses" data-bs-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            <i class="icon-base ti tabler-dots-vertical icon-lg"></i>
          </button>
          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="topCourses">
            <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
            <a class="dropdown-item" href="javascript:void(0);">Download</a>
            <a class="dropdown-item" href="javascript:void(0);">View All</a>
          </div>
        </div>
      </div>
      <div class="card-body">
        <ul class="list-unstyled mb-0">
          <li class="d-flex mb-6 align-items-center">
            <div class="avatar flex-shrink-0 me-4">
              <span class="avatar-initial rounded bg-label-primary"><i
                  class="icon-base ti tabler-video icon-lg"></i></span>
            </div>
            <div class="row w-100 align-items-center">
              <div class="col-sm-8 col-md-12 col-xxl-8 mb-1 mb-sm-0 mb-md-1 mb-xxl-0">
                <h6 class="mb-0">Videography Basic Design Course</h6>
              </div>
              <div class="col-sm-4 col-md-12 col-xxl-4 d-flex justify-content-xxl-end">
                <div class="badge bg-label-secondary">1.2k Views</div>
              </div>
            </div>
          </li>
          <li class="d-flex mb-6 align-items-center">
            <div class="avatar flex-shrink-0 me-4">
              <span class="avatar-initial rounded bg-label-info"><i class="icon-base ti tabler-code icon-lg"></i></span>
            </div>
            <div class="row w-100 align-items-center">
              <div class="col-sm-8 col-md-12 col-xxl-8 mb-1 mb-sm-0 mb-md-1 mb-xxl-0">
                <h6 class="mb-0">Basic Front-end Development Course</h6>
              </div>
              <div class="col-sm-4 col-md-12 col-xxl-4 d-flex justify-content-xxl-end">
                <div class="badge bg-label-secondary">834 Views</div>
              </div>
            </div>
          </li>
          <li class="d-flex mb-6 align-items-center">
            <div class="avatar flex-shrink-0 me-4">
              <span class="avatar-initial rounded bg-label-success"><i
                  class="icon-base ti tabler-camera icon-lg"></i></span>
            </div>
            <div class="row w-100 align-items-center">
              <div class="col-sm-8 col-md-12 col-xxl-8 mb-1 mb-sm-0 mb-md-1 mb-xxl-0">
                <h6 class="mb-0">Basic Fundamentals of Photography</h6>
              </div>
              <div class="col-sm-4 col-md-12 col-xxl-4 d-flex justify-content-xxl-end">
                <div class="badge bg-label-secondary">3.7k Views</div>
              </div>
            </div>
          </li>
          <li class="d-flex mb-6 align-items-center">
            <div class="avatar flex-shrink-0 me-4">
              <span class="avatar-initial rounded bg-label-warning"><i
                  class="icon-base ti tabler-brand-dribbble icon-lg"></i></span>
            </div>
            <div class="row w-100 align-items-center">
              <div class="col-sm-8 col-md-12 col-xxl-8 mb-1 mb-sm-0 mb-md-1 mb-xxl-0">
                <h6 class="mb-0">Advance Dribble Base Visual Design</h6>
              </div>
              <div class="col-sm-4 col-md-12 col-xxl-4 d-flex justify-content-xxl-end">
                <div class="badge bg-label-secondary">2.5k Views</div>
              </div>
            </div>
          </li>
          <li class="d-flex align-items-center">
            <div class="avatar flex-shrink-0 me-4">
              <span class="avatar-initial rounded bg-label-danger"><i
                  class="icon-base ti tabler-microphone-2 icon-lg"></i></span>
            </div>
            <div class="row w-100 align-items-center">
              <div class="col-sm-8 col-md-12 col-xxl-8 mb-1 mb-sm-0 mb-md-1 mb-xxl-0">
                <h6 class="mb-0">Your First Singing Lesson</h6>
              </div>
              <div class="col-sm-4 col-md-12 col-xxl-4 d-flex justify-content-xxl-end">
                <div class="badge bg-label-secondary">948 Views</div>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>

  <div class="col-12 col-xl-4 col-md-6">
    <div class="card h-100">
      <div class="card-body">
        <div class="bg-label-primary rounded-3 text-center mb-4 pt-6">
          <img class="img-fluid" src="{{ asset('assets/img/illustrations/girl-with-laptop.png') }}"
            alt="Card girl image" width="140" />
        </div>
        <h5 class="mb-2">Upcoming Webinar</h5>
        <p class="small">Next Generation Frontend Architecture Using Layout Engine And React Native Web.</p>
        <div class="row mb-4 g-3">
          <div class="col-6">
            <div class="d-flex align-items-center">
              <div class="avatar flex-shrink-0 me-3">
                <span class="avatar-initial rounded bg-label-primary"><i
                    class="icon-base ti tabler-calendar-event icon-28px"></i></span>
              </div>
              <div>
                <h6 class="mb-0 text-nowrap">17 Nov 23</h6>
                <small>Date</small>
              </div>
            </div>
          </div>
          <div class="col-6">
            <div class="d-flex align-items-center">
              <div class="avatar flex-shrink-0 me-3">
                <span class="avatar-initial rounded bg-label-primary"><i
                    class="icon-base ti tabler-clock icon-28px"></i></span>
              </div>
              <div>
                <h6 class="mb-0 text-nowrap">32 minutes</h6>
                <small>Duration</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 text-center">
          <a href="javascript:void(0);" class="btn btn-primary w-100 d-grid">Join the event</a>
        </div>
      </div>
    </div>
  </div>

  <div class="col-12 col-xl-4 col-md-6">
    <div class="card h-100">
      <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="card-title m-0 me-2">Assignment Progress</h5>
        <div class="dropdown">
          <button class="btn text-body-secondary p-0" type="button" id="assignmentProgress" data-bs-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            <i class="icon-base ti tabler-dots-vertical icon-lg"></i>
          </button>
          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="assignmentProgress">
            <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
            <a class="dropdown-item" href="javascript:void(0);">Download</a>
            <a class="dropdown-item" href="javascript:void(0);">View All</a>
          </div>
        </div>
      </div>
      <div class="card-body">
        <ul class="p-0 m-0">
          <li class="d-flex mb-4 pb-1">
            <div class="chart-progress me-4" data-color="primary" data-series="72" data-progress_variant="true"></div>
            <div class="row w-100 align-items-center">
              <div class="col-9">
                <div class="me-2">
                  <h6 class="mb-1">User experience Design</h6>
                  <p class="mb-0 small">120 Tasks</p>
                </div>
              </div>
              <div class="col-3 text-end">
                <button type="button" class="btn btn-sm btn-icon btn-label-secondary">
                  <i class="icon-base ti tabler-chevron-right icon-20px scaleX-n1-rtl"></i>
                </button>
              </div>
            </div>
          </li>
          <li class="d-flex mb-4 pb-1">
            <div class="chart-progress me-4" data-color="success" data-series="48" data-progress_variant="true"></div>
            <div class="row w-100 align-items-center">
              <div class="col-9">
                <div class="me-2">
                  <h6 class="mb-1">Basic fundamentals</h6>
                  <p class="mb-0 small">32 Tasks</p>
                </div>
              </div>
              <div class="col-3 text-end">
                <button type="button" class="btn btn-sm btn-icon btn-label-secondary">
                  <i class="icon-base ti tabler-chevron-right icon-20px scaleX-n1-rtl"></i>
                </button>
              </div>
            </div>
          </li>
          <li class="d-flex mb-4 pb-1">
            <div class="chart-progress me-4" data-color="danger" data-series="15" data-progress_variant="true"></div>
            <div class="row w-100 align-items-center">
              <div class="col-9">
                <div class="me-2">
                  <h6 class="mb-1">React native components</h6>
                  <p class="mb-0 small">182 Tasks</p>
                </div>
              </div>
              <div class="col-3 text-end">
                <button type="button" class="btn btn-sm btn-icon btn-label-secondary">
                  <i class="icon-base ti tabler-chevron-right icon-20px scaleX-n1-rtl"></i>
                </button>
              </div>
            </div>
          </li>
          <li class="d-flex">
            <div class="chart-progress me-4" data-color="info" data-series="24" data-progress_variant="true"></div>
            <div class="row w-100 align-items-center">
              <div class="col-9">
                <div class="me-2">
                  <h6 class="mb-1">Basic of music theory</h6>
                  <p class="mb-0 small">56 Tasks</p>
                </div>
              </div>
              <div class="col-3 text-end">
                <button type="button" class="btn btn-sm btn-icon btn-label-secondary">
                  <i class="icon-base ti tabler-chevron-right icon-20px scaleX-n1-rtl"></i>
                </button>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>
<!--  Topic and Instructors  End-->

<!-- Course datatable -->
<div class="card mb-6">
  <div class="mb-4">
    <table class="table datatables-academy-course">
      <thead>
        <tr>
          <th></th>
          <th></th>
          <th>Course Name</th>
          <th>Time</th>
          <th class="w-25">Progress</th>
          <th class="w-25">Status</th>
        </tr>
      </thead>
    </table>
  </div>
</div>
<!-- Course datatable End -->

@endsection