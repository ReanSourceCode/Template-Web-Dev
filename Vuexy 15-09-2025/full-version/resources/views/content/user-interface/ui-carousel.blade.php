@extends('layouts/layoutMaster')

@section('title', 'Carousel - UI elements')

<!-- Vendor Styles -->
@section('vendor-style')
  @vite(['resources/assets/vendor/libs/swiper/swiper.scss'])
@endsection

<!-- Page Styles -->
@section('page-style')
  @vite(['resources/assets/vendor/scss/pages/ui-carousel.scss'])
@endsection

<!-- Vendor Scripts -->
@section('vendor-script')
  @vite(['resources/assets/vendor/libs/swiper/swiper.js'])
@endsection

<!-- Page Scripts -->
@section('page-script')
  @vite(['resources/assets/js/ui-carousel.js'])
@endsection

@section('content')
  <div class="row g-6">
    <!-- Bootstrap carousel -->
    <div class="col-md">
      <h5 class="mb-6">Bootstrap carousel</h5>

      <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="0" class="active" aria-current="true"
            aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="{{ asset('assets/img/elements/3.png') }}" alt="First slide" />
            <div class="carousel-caption d-none d-md-block">
              <h4>First slide</h4>
              <p>Eos mutat malis maluisset et, agam ancillae quo te, in vim congue pertinacia.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="{{ asset('assets/img/elements/4.png') }}" alt="Second slide" />
            <div class="carousel-caption d-none d-md-block">
              <h4>Second slide</h4>
              <p>In numquam omittam sea.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="{{ asset('assets/img/elements/5.png') }}" alt="Third slide" />
            <div class="carousel-caption d-none d-md-block">
              <h4>Third slide</h4>
              <p>Lorem ipsum dolor sit amet, virtute consequat ea qui, minim graeco mel no.</p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExample" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExample" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </a>
      </div>
    </div>
    <!-- Bootstrap crossfade carousel -->
    <div class="col-md">
      <h5 class="mb-6">Bootstrap crossfade carousel (dark)</h5>

      <div id="carouselExampleDark" class="carousel carousel-dark slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="{{ asset('assets/img/elements/7.png') }}" alt="First slide" />
            <div class="carousel-caption d-none d-md-block">
              <h4>First slide</h4>
              <p>Eos mutat malis maluisset et, agam ancillae quo te, in vim congue pertinacia.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="{{ asset('assets/img/elements/8.png') }}" alt="Second slide" />
            <div class="carousel-caption d-none d-md-block">
              <h4>Second slide</h4>
              <p>In numquam omittam sea.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="{{ asset('assets/img/elements/10.png') }}" alt="Third slide" />
            <div class="carousel-caption d-none d-md-block">
              <h4>Third slide</h4>
              <p>Lorem ipsum dolor sit amet, virtute consequat ea qui, minim graeco mel no.</p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleDark" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleDark" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </a>
      </div>
    </div>

    <hr class="container-p-nx mt-12 mb-1" />

    <h5 class="my-6">Swiper</h5>
    <!-- Default -->
    <div class="col-md-6">
      <h6 class="text-body-secondary mt-4">Default</h6>
      <div class="swiper" id="swiper-default">
        <div class="swiper-wrapper">
          <div class="swiper-slide" style="background-image:url({{ asset('assets/img/elements/11.png') }})">
            Slide 1</div>
          <div class="swiper-slide" style="background-image:url({{ asset('assets/img/elements/12.png') }})">
            Slide 2</div>
          <div class="swiper-slide" style="background-image:url({{ asset('assets/img/elements/13.png') }})">
            Slide 3</div>
          <div class="swiper-slide" style="background-image:url({{ asset('assets/img/elements/14.png') }})">
            Slide 4</div>
          <div class="swiper-slide" style="background-image:url({{ asset('assets/img/elements/15.png') }})">
            Slide 5</div>
        </div>
      </div>
    </div>
    <!-- With arrows -->
    <div class="col-md-6">
      <h6 class="text-body-secondary mt-4">With arrows</h6>
      <div class="swiper" id="swiper-with-arrows">
        <div class="swiper-wrapper">
          <div class="swiper-slide" style="background-image:url({{ asset('assets/img/elements/16.png') }})">
            Slide 1</div>
          <div class="swiper-slide" style="background-image:url({{ asset('assets/img/elements/17.png') }})">
            Slide 2</div>
          <div class="swiper-slide" style="background-image:url({{ asset('assets/img/elements/18.png') }})">
            Slide 3</div>
          <div class="swiper-slide" style="background-image:url({{ asset('assets/img/elements/19.png') }})">
            Slide 4</div>
          <div class="swiper-slide" style="background-image:url({{ asset('assets/img/elements/20.png') }})">
            Slide 5</div>
        </div>
        <div class="swiper-button-next swiper-button-white custom-icon"></div>
        <div class="swiper-button-prev swiper-button-white custom-icon"></div>
      </div>
    </div>
    <!-- With pagination -->
    <div class="col-md-6">
      <h6 class="text-body-secondary mt-4">With pagination</h6>
      <div class="swiper" id="swiper-with-pagination">
        <div class="swiper-wrapper">
          <div class="swiper-slide" style="background-image:url({{ asset('assets/img/elements/21.png') }})">
            Slide 1</div>
          <div class="swiper-slide" style="background-image:url({{ asset('assets/img/elements/22.png') }})">
            Slide 2</div>
          <div class="swiper-slide" style="background-image:url({{ asset('assets/img/elements/23.png') }})">
            Slide 3</div>
          <div class="swiper-slide" style="background-image:url({{ asset('assets/img/elements/24.png') }})">
            Slide 4</div>
          <div class="swiper-slide" style="background-image:url({{ asset('assets/img/elements/25.png') }})">
            Slide 5</div>
        </div>
        <div class="swiper-pagination"></div>
      </div>
    </div>

    <!-- With progress -->
    <div class="col-md-6">
      <h6 class="text-body-secondary mt-4">With progress</h6>
      <div class="swiper" id="swiper-with-progress">
        <div class="swiper-wrapper">
          <div class="swiper-slide" style="background-image:url({{ asset('assets/img/elements/26.png') }})">
            Slide 1</div>
          <div class="swiper-slide" style="background-image:url({{ asset('assets/img/elements/27.png') }})">
            Slide 2</div>
          <div class="swiper-slide" style="background-image:url({{ asset('assets/img/elements/28.png') }})">
            Slide 3</div>
          <div class="swiper-slide" style="background-image:url({{ asset('assets/img/elements/29.png') }})">
            Slide 4</div>
          <div class="swiper-slide" style="background-image:url({{ asset('assets/img/elements/30.png') }})">
            Slide 5</div>
        </div>
        <div class="swiper-pagination"></div>
        <div class="swiper-button-next swiper-button-white custom-icon"></div>
        <div class="swiper-button-prev swiper-button-white custom-icon"></div>
      </div>
    </div>

    <!-- With scrollbar -->
    <div class="col-md-6">
      <h6 class="text-body-secondary mt-4">With scrollbar</h6>
      <div class="swiper" id="swiper-with-scrollbar">
        <div class="swiper-wrapper">
          <div class="swiper-slide" style="background-image:url({{ asset('assets/img/elements/31.png') }})">
            Slide 1</div>
          <div class="swiper-slide" style="background-image:url({{ asset('assets/img/elements/32.png') }})">
            Slide 2</div>
          <div class="swiper-slide" style="background-image:url({{ asset('assets/img/elements/33.png') }})">
            Slide 3</div>
          <div class="swiper-slide" style="background-image:url({{ asset('assets/img/elements/34.png') }})">
            Slide 4</div>
          <div class="swiper-slide" style="background-image:url({{ asset('assets/img/elements/35.png') }})">
            Slide 5</div>
        </div>
        <div class="swiper-scrollbar"></div>
      </div>
    </div>

    <!-- Vertical -->
    <div class="col-md-6">
      <h6 class="text-body-secondary mt-4">Vertical</h6>
      <div class="swiper" id="swiper-vertical">
        <div class="swiper-wrapper">
          <div class="swiper-slide" style="background-image:url({{ asset('assets/img/elements/36.png') }})">
            Slide 1</div>
          <div class="swiper-slide" style="background-image:url({{ asset('assets/img/elements/37.png') }})">
            Slide 2</div>
          <div class="swiper-slide" style="background-image:url({{ asset('assets/img/elements/38.png') }})">
            Slide 3</div>
          <div class="swiper-slide" style="background-image:url({{ asset('assets/img/elements/39.png') }})">
            Slide 4</div>
          <div class="swiper-slide" style="background-image:url({{ asset('assets/img/elements/40.png') }})">
            Slide 5</div>
        </div>
        <div class="swiper-pagination"></div>
      </div>
    </div>

    <!-- Multiple slides -->
    <div class="col-12">
      <h6 class="text-body-secondary mt-4">Multiple slides</h6>
      <div class="swiper" id="swiper-multiple-slides">
        <div class="swiper-wrapper">
          <div class="swiper-slide" style="background-image:url({{ asset('assets/img/elements/41.png') }})">
            Slide 1</div>
          <div class="swiper-slide" style="background-image:url({{ asset('assets/img/elements/42.png') }})">
            Slide 2</div>
          <div class="swiper-slide" style="background-image:url({{ asset('assets/img/elements/43.png') }})">
            Slide 3</div>
          <div class="swiper-slide" style="background-image:url({{ asset('assets/img/elements/44.png') }})">
            Slide 4</div>
          <div class="swiper-slide" style="background-image:url({{ asset('assets/img/elements/45.png') }})">
            Slide 5</div>
        </div>
        <div class="swiper-pagination"></div>
      </div>
    </div>

    <!-- 3D coverflow effect -->
    <div class="col-12">
      <h6 class="text-body-secondary mt-4">3D coverflow effect</h6>
      <div class="swiper" id="swiper-3d-coverflow-effect">
        <div class="swiper-wrapper">
          <div class="swiper-slide" style="background-image:url({{ asset('assets/img/elements/46.png') }})">
            Slide 1</div>
          <div class="swiper-slide" style="background-image:url({{ asset('assets/img/elements/47.png') }})">
            Slide 2</div>
          <div class="swiper-slide" style="background-image:url({{ asset('assets/img/elements/48.png') }})">
            Slide 3</div>
          <div class="swiper-slide" style="background-image:url({{ asset('assets/img/elements/49.png') }})">
            Slide 4</div>
          <div class="swiper-slide" style="background-image:url({{ asset('assets/img/elements/50.png') }})">
            Slide 5</div>
        </div>
        <div class="swiper-pagination"></div>
      </div>
    </div>

    <!-- 3D cube effect -->
    <div class="col-md-6">
      <h6 class="text-body-secondary mt-4">3D cube effect</h6>
      <div class="swiper" id="swiper-3d-cube-effect">
        <div class="swiper-wrapper">
          <div class="swiper-slide" style="background-image:url({{ asset('assets/img/elements/46.png') }})">
            Slide 1</div>
          <div class="swiper-slide" style="background-image:url({{ asset('assets/img/elements/47.png') }})">
            Slide 2</div>
          <div class="swiper-slide" style="background-image:url({{ asset('assets/img/elements/48.png') }})">
            Slide 3</div>
          <div class="swiper-slide" style="background-image:url({{ asset('assets/img/elements/51.png') }})">
            Slide 4</div>
          <div class="swiper-slide" style="background-image:url({{ asset('assets/img/elements/50.png') }})">
            Slide 5</div>
        </div>
        <div class="swiper-pagination"></div>
      </div>
    </div>

    <!-- 3D flip effect -->
    <div class="col-md-6">
      <h6 class="text-body-secondary mt-4">3D flip effect</h6>
      <div class="swiper" id="swiper-3d-flip-effect">
        <div class="swiper-wrapper">
          <div class="swiper-slide" style="background-image:url({{ asset('assets/img/elements/41.png') }})">
            Slide 1</div>
          <div class="swiper-slide" style="background-image:url({{ asset('assets/img/elements/42.png') }})">
            Slide 2</div>
          <div class="swiper-slide" style="background-image:url({{ asset('assets/img/elements/43.png') }})">
            Slide 3</div>
          <div class="swiper-slide" style="background-image:url({{ asset('assets/img/elements/44.png') }})">
            Slide 4</div>
          <div class="swiper-slide" style="background-image:url({{ asset('assets/img/elements/45.png') }})">
            Slide 5</div>
        </div>
        <div class="swiper-pagination"></div>
        <div class="swiper-button-next swiper-button-black custom-icon"></div>
        <div class="swiper-button-prev swiper-button-black custom-icon"></div>
      </div>
    </div>

    <!-- Gallery effect-->
    <div class="col-12">
      <h6 class="text-body-secondary mt-4">Thumbs Gallery</h6>
      <div id="swiper-gallery">
        <div class="swiper gallery-top">
          <div class="swiper-wrapper">
            <div class="swiper-slide" style="background-image:url({{ asset('assets/img/elements/51.png') }})"> Slide 1
            </div>
            <div class="swiper-slide" style="background-image:url({{ asset('assets/img/elements/52.png') }})"> Slide 2
            </div>
            <div class="swiper-slide" style="background-image:url({{ asset('assets/img/elements/53.png') }})"> Slide 3
            </div>
            <div class="swiper-slide" style="background-image:url({{ asset('assets/img/elements/54.png') }})"> Slide 4
            </div>
            <div class="swiper-slide" style="background-image:url({{ asset('assets/img/elements/55.png') }})"> Slide 5
            </div>
          </div>
          <!-- Add Arrows -->
          <div class="swiper-button-next swiper-button-white"></div>
          <div class="swiper-button-prev swiper-button-white"></div>
        </div>
        <div class="swiper gallery-thumbs">
          <div class="swiper-wrapper">
            <div class="swiper-slide" style="background-image:url({{ asset('assets/img/elements/51.png') }})"> Slide 1
            </div>
            <div class="swiper-slide" style="background-image:url({{ asset('assets/img/elements/52.png') }})"> Slide 2
            </div>
            <div class="swiper-slide" style="background-image:url({{ asset('assets/img/elements/53.png') }})"> Slide 3
            </div>
            <div class="swiper-slide" style="background-image:url({{ asset('assets/img/elements/54.png') }})"> Slide 4
            </div>
            <div class="swiper-slide" style="background-image:url({{ asset('assets/img/elements/55.png') }})"> Slide 5
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
@endsection
