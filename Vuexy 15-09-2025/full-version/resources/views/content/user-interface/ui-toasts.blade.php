@extends('layouts/layoutMaster')

@section('title', 'Toasts - UI elements')

<!-- Vendor Styles -->
@section('vendor-style')
  @vite(['resources/assets/vendor/libs/notyf/notyf.scss', 'resources/assets/vendor/libs/animate-css/animate.scss'])
@endsection

<!-- Vendor Script -->
@section('vendor-script')
  @vite(['resources/assets/vendor/libs/notyf/notyf.js'])
@endsection

<!-- Page Script -->
@section('page-script')
  @vite(['resources/assets/js/ui-toasts.js'])
@endsection

@section('content')
  <!-- Toast with Animation -->
  <div class="bs-toast toast toast-ex animate__animated my-2" role="alert" aria-live="assertive" aria-atomic="true"
    data-bs-delay="2000">
    <div class="toast-header">
      <i class="icon-base ti tabler-bell icon-xs me-2"></i>
      <div class="me-auto fw-medium">Bootstrap</div>
      <small>11 mins ago</small>
      <button type="button" class="btn-close btn-close-white" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
    <div class="toast-body">Hello, world! This is a toast message.</div>
  </div>
  <!--/ Toast with Animation -->

  <!-- Toast with Placements -->
  <div class="bs-toast toast toast-placement-ex m-2" role="alert" aria-live="assertive" aria-atomic="true"
    data-bs-delay="2000">
    <div class="toast-header">
      <i class="icon-base ti tabler-bell icon-xs me-2"></i>
      <div class="me-auto fw-medium">Bootstrap</div>
      <small>11 mins ago</small>
      <button type="button" class="btn-close btn-close-white" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
    <div class="toast-body">Hello, world! This is a toast message.</div>
  </div>
  <!-- Toast with Placements -->

  <!-- Bootstrap Toasts with Animation -->
  <div class="card mb-6">
    <h5 class="card-header">Bootstrap Toasts Example with Animation</h5>

    <div class="card-body">
      <div class="row gx-3 gy-2 align-items-center">
        <div class="col-md-3">
          <label class="form-label" for="selectType">Type</label>
          <select id="selectType" class="form-select color-dropdown">
            <option value="bg-primary" selected>Primary</option>
            <option value="bg-secondary">Secondary</option>
            <option value="bg-success">Success</option>
            <option value="bg-danger">Danger</option>
            <option value="bg-warning">Warning</option>
            <option value="bg-info">Info</option>
            <option value="bg-dark">Dark</option>
          </select>
        </div>
        <div class="col-md-3">
          <label class="form-label" for="selectAnimation">Animation</label>
          <select id="selectAnimation" class="form-select animation-dropdown">
            <optgroup label="Attention Seekers">
              <option value="animate__fade">fade</option>
              <option value="animate__bounce">bounce</option>
              <option value="animate__flash">flash</option>
              <option value="animate__pulse">pulse</option>
              <option value="animate__rubberBand">rubberBand</option>
              <option value="animate__shakeX">shake</option>
              <option value="animate__swing">swing</option>
              <option value="animate__tada" selected>tada</option>
              <option value="animate__wobble">wobble</option>
              <option value="animate__jello">jello</option>
              <option value="animate__heartBeat">heartBeat</option>
            </optgroup>

            <optgroup label="Bouncing Entrances">
              <option value="animate__bounceIn">bounceIn</option>
              <option value="animate__bounceInDown">bounceInDown</option>
              <option value="animate__bounceInLeft">bounceInLeft</option>
              <option value="animate__bounceInRight">bounceInRight</option>
              <option value="animate__bounceInUp">bounceInUp</option>
            </optgroup>

            <optgroup label="Fading Entrances">
              <option value="animate__fadeIn">fadeIn</option>
              <option value="animate__fadeInDown">fadeInDown</option>
              <option value="animate__fadeInDownBig">fadeInDownBig</option>
              <option value="animate__fadeInLeft">fadeInLeft</option>
              <option value="animate__fadeInLeftBig">fadeInLeftBig</option>
              <option value="animate__fadeInRight">fadeInRight</option>
              <option value="animate__fadeInRightBig">fadeInRightBig</option>
              <option value="animate__fadeInUp">fadeInUp</option>
              <option value="animate__fadeInUpBig">fadeInUpBig</option>
            </optgroup>

            <optgroup label="Flippers">
              <option value="animate__flip">flip</option>
              <option value="animate__flipInX">flipInX</option>
              <option value="animate__flipInY">flipInY</option>
            </optgroup>

            <optgroup label="Lightspeed">
              <option value="animate__lightSpeedInRight">lightSpeedIn</option>
            </optgroup>

            <optgroup label="Rotating Entrances">
              <option value="animate__rotateIn">rotateIn</option>
              <option value="animate__rotateInDownLeft">rotateInDownLeft</option>
              <option value="animate__rotateInDownRight">rotateInDownRight</option>
              <option value="animate__rotateInUpLeft">rotateInUpLeft</option>
              <option value="animate__rotateInUpRight">rotateInUpRight</option>
            </optgroup>

            <optgroup label="Sliding Entrances">
              <option value="animate__slideInUp">slideInUp</option>
              <option value="animate__slideInDown">slideInDown</option>
              <option value="animate__slideInLeft">slideInLeft</option>
              <option value="animate__slideInRight">slideInRight</option>
            </optgroup>

            <optgroup label="Zoom Entrances">
              <option value="animate__zoomIn">zoomIn</option>
              <option value="animate__zoomInDown">zoomInDown</option>
              <option value="animate__zoomInLeft">zoomInLeft</option>
              <option value="animate__zoomInRight">zoomInRight</option>
              <option value="animate__zoomInUp">zoomInUp</option>
            </optgroup>

            <optgroup label="Specials">
              <option value="animate__jackInTheBox">jackInTheBox</option>
              <option value="animate__rollIn">rollIn</option>
            </optgroup>
          </select>
        </div>
        <div class="col-md-3">
          <label class="form-label" for="showToastPlacement">&nbsp;</label>
          <button id="showToastAnimation" class="btn btn-primary d-block">Show Toast</button>
        </div>
      </div>
    </div>
  </div>
  <!--/ Bootstrap Toasts with Animation -->

  <!-- Bootstrap Toasts with Placement -->
  <div class="card mb-6">
    <h5 class="card-header">Bootstrap Toasts Example With Placement</h5>
    <div class="card-body">
      <div class="row gx-3 gy-2 align-items-center">
        <div class="col-md-3">
          <label class="form-label" for="selectTypeOpt">Type</label>
          <select id="selectTypeOpt" class="form-select color-dropdown">
            <option value="bg-primary" selected>Primary</option>
            <option value="bg-secondary">Secondary</option>
            <option value="bg-success">Success</option>
            <option value="bg-danger">Danger</option>
            <option value="bg-warning">Warning</option>
            <option value="bg-info">Info</option>
            <option value="bg-dark">Dark</option>
          </select>
        </div>
        <div class="col-md-3">
          <label class="form-label" for="selectPlacement">Placement</label>
          <select class="form-select placement-dropdown" id="selectPlacement">
            <option value="top-0 start-0">Top left</option>
            <option value="top-0 start-50 translate-middle-x">Top center</option>
            <option value="top-0 end-0">Top right</option>
            <option value="top-50 start-0 translate-middle-y">Middle left</option>
            <option value="top-50 start-50 translate-middle">Middle center</option>
            <option value="top-50 end-0 translate-middle-y">Middle right</option>
            <option value="bottom-0 start-0">Bottom left</option>
            <option value="bottom-0 start-50 translate-middle-x">Bottom center</option>
            <option value="bottom-0 end-0">Bottom right</option>
          </select>
        </div>
        <div class="col-md-3">
          <label class="form-label" for="showToastPlacement">&nbsp;</label>
          <button id="showToastPlacement" class="btn btn-primary d-block">Show Toast</button>
        </div>
      </div>
    </div>
  </div>
  <!--/ Bootstrap Toasts with Placement -->

  <!-- Bootstrap Toasts Styles -->
  <div class="card mb-6">
    <h5 class="card-header">Bootstrap Toasts Styles</h5>
    <div class="row g-0">
      <div class="col-md-6 p-6">
        <div class="small fw-medium mb-4">Default</div>
        <div class="toast-container position-relative">
          <div class="bs-toast toast fade show" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
              <i class="icon-base ti tabler-bell icon-xs me-2"></i>
              <div class="me-auto fw-medium">Bootstrap</div>
              <small class="text-body-secondary">11 mins ago</small>
              <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">Hello, world! This is a toast message.</div>
          </div>

          <div class="bs-toast toast fade show" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
              <i class="icon-base ti tabler-bell icon-xs me-2 text-primary"></i>
              <div class="me-auto fw-medium">Bootstrap</div>
              <small class="text-body-secondary">11 mins ago</small>
              <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">Hello, world! This is a toast message.</div>
          </div>

          <div class="bs-toast toast fade show" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
              <i class="icon-base ti tabler-bell icon-xs me-2 text-secondary"></i>
              <div class="me-auto fw-medium">Bootstrap</div>
              <small class="text-body-secondary">11 mins ago</small>
              <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">Hello, world! This is a toast message.</div>
          </div>

          <div class="bs-toast toast fade show" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
              <i class="icon-base ti tabler-bell icon-xs me-2 text-success"></i>
              <div class="me-auto fw-medium">Bootstrap</div>
              <small class="text-body-secondary">11 mins ago</small>
              <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">Hello, world! This is a toast message.</div>
          </div>

          <div class="bs-toast toast fade show" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
              <i class="icon-base ti tabler-bell icon-xs me-2 text-danger"></i>
              <div class="me-auto fw-medium">Bootstrap</div>
              <small class="text-body-secondary">11 mins ago</small>
              <button type="button" class="btn-close " data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">Hello, world! This is a toast message.</div>
          </div>

          <div class="bs-toast toast fade show" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
              <i class="icon-base ti tabler-bell icon-xs me-2 text-warning"></i>
              <div class="me-auto fw-medium">Bootstrap</div>
              <small class="text-body-secondary">11 mins ago</small>
              <button type="button" class="btn-close " data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">Hello, world! This is a toast message.</div>
          </div>

          <div class="bs-toast toast fade show" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
              <i class="icon-base ti tabler-bell icon-xs me-2 text-info"></i>
              <div class="me-auto fw-medium">Bootstrap</div>
              <small class="text-body-secondary">11 mins ago</small>
              <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">Hello, world! This is a toast message.</div>
          </div>

          <div class="bs-toast toast fade show" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
              <i class="icon-base ti tabler-bell icon-xs me-2 text-dark"></i>
              <div class="me-auto fw-medium">Bootstrap</div>
              <small class="text-body-secondary">11 mins ago</small>
              <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">Hello, world! This is a toast message.</div>
          </div>
        </div>
      </div>
      <div class="col-md-6 ui-bg-overlay-container p-6">
        <div class="ui-bg-overlay bg-dark rounded-end-bottom"></div>
        <div class="text-white small fw-medium mb-4">Translucent</div>

        <div class="toast-container position-relative">
          <div class="bs-toast toast fade show" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
              <i class="icon-base ti tabler-bell icon-xs me-2"></i>
              <div class="me-auto fw-medium">Bootstrap</div>
              <small>11 mins ago</small>
              <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">Hello, world! This is a toast message.</div>
          </div>

          <div class="bs-toast toast fade show" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
              <i class="icon-base ti tabler-bell icon-xs me-2 text-primary"></i>
              <div class="me-auto fw-medium">Bootstrap</div>
              <small>11 mins ago</small>
              <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">Hello, world! This is a toast message.</div>
          </div>

          <div class="bs-toast toast fade show" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
              <i class="icon-base ti tabler-bell icon-xs me-2 text-secondary"></i>
              <div class="me-auto fw-medium">Bootstrap</div>
              <small>11 mins ago</small>
              <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">Hello, world! This is a toast message.</div>
          </div>

          <div class="bs-toast toast fade show" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
              <i class="icon-base ti tabler-bell icon-xs me-2 text-success"></i>
              <div class="me-auto fw-medium">Bootstrap</div>
              <small>11 mins ago</small>
              <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">Hello, world! This is a toast message.</div>
          </div>

          <div class="bs-toast toast fade show" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
              <i class="icon-base ti tabler-bell icon-xs me-2 text-danger"></i>
              <div class="me-auto fw-medium">Bootstrap</div>
              <small>11 mins ago</small>
              <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">Hello, world! This is a toast message.</div>
          </div>

          <div class="bs-toast toast fade show" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
              <i class="icon-base ti tabler-bell icon-xs me-2 text-warning"></i>
              <div class="me-auto fw-medium">Bootstrap</div>
              <small>11 mins ago</small>
              <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">Hello, world! This is a toast message.</div>
          </div>

          <div class="bs-toast toast fade show" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
              <i class="icon-base ti tabler-bell icon-xs me-2 text-info"></i>
              <div class="me-auto fw-medium">Bootstrap</div>
              <small>11 mins ago</small>
              <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">Hello, world! This is a toast message.</div>
          </div>

          <div class="bs-toast toast fade show" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
              <i class="icon-base ti tabler-bell icon-xs me-2 text-dark"></i>
              <div class="me-auto fw-medium">Bootstrap</div>
              <small>11 mins ago</small>
              <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">Hello, world! This is a toast message.</div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ Bootstrap Toasts Styles -->

  <!-- Notyf Demo -->
  <div class="card">
    <h5 class="card-header">Notyf Notifications</h5>
    <div class="card-body">
      <div class="row">
        <!-- Message Input -->
        <div class="col-lg-6 col-xl-3">
          <div class="mb-4">
            <label class="form-label" for="message">Message</label>
            <textarea class="form-control" id="message" rows="3" placeholder="Enter a message..."></textarea>
          </div>
          <!-- Options -->
          <div class="mb-4">
            <div class="form-check">
              <input id="dismissible" class="form-check-input" type="checkbox" />
              <label class="form-check-label" for="dismissible">Dismissible</label>
            </div>
            <div class="form-check">
              <input id="ripple" class="form-check-input" type="checkbox" checked />
              <label class="form-check-label" for="ripple">Ripple Effect</label>
            </div>
          </div>
        </div>
        <!-- Type Selection -->
        <div class="col-lg-6 col-xl-3">
          <div class="mb-4" id="notificationTypeGroup">
            <label class="form-label">Notification Type</label>
            <div class="form-check">
              <input type="radio" id="successRadio" name="notificationType" class="form-check-input"
                value="success" checked />
              <label class="form-check-label" for="successRadio">Success</label>
            </div>
            <div class="form-check">
              <input type="radio" id="errorRadio" name="notificationType" class="form-check-input"
                value="error" />
              <label class="form-check-label" for="errorRadio">Error</label>
            </div>
            <div class="form-check">
              <input type="radio" id="infoRadio" name="notificationType" class="form-check-input" value="info" />
              <label class="form-check-label" for="infoRadio">Info</label>
            </div>
            <div class="form-check">
              <input type="radio" id="warningRadio" name="notificationType" class="form-check-input"
                value="warning" />
              <label class="form-check-label" for="warningRadio">Warning</label>
            </div>
            <div class="mb-4">
              <label class="form-label" for="duration">Duration (ms)</label>
              <input id="duration" type="number" class="form-control" placeholder="Enter duration in milliseconds"
                value="3000" />
            </div>
          </div>
        </div>
        <!-- Duration Input -->
        <div class="col">
          <label class="form-label">Position Type</label>
          <div class="row">
            <div class="col-6">
              <div class="form-check">
                <input id="positionleft" class="form-check-input" type="radio" name="positionx" value="left" />
                <label class="form-check-label" for="positionleft">left Position</label>
              </div>
              <div class="form-check">
                <input id="positioncenter" class="form-check-input" type="radio" name="positionx" value="center" />
                <label class="form-check-label" for="positioncenter">center Position</label>
              </div>
              <div class="form-check">
                <input id="positionright" class="form-check-input" type="radio" name="positionx" value="right"
                  checked />
                <label class="form-check-label" for="positionright">right Position</label>
              </div>
            </div>
            <div class="col-6">
              <div class="form-check">
                <input id="positionTop" class="form-check-input" type="radio" name="positiony" value="top"
                  checked />
                <label class="form-check-label" for="positionTop">Top Position</label>
              </div>
              <div class="form-check">
                <input id="positionBottom" class="form-check-input" type="radio" name="positiony" value="bottom" />
                <label class="form-check-label" for="positionBottom">Bottom Position</label>
              </div>
            </div>
          </div>
        </div>
      </div>
      <hr />
      <div class="d-flex gap-3 flex-wrap">
        <button class="btn btn-primary" id="showNotification">Show Notification</button>
        <button class="btn btn-danger" id="clearNotifications">Clear Notifications</button>
      </div>
    </div>
  </div>

  <!--/ Notyf Demo -->
@endsection
