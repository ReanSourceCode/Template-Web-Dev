@extends('layouts/layoutMaster')

@section('title', 'eCommerce Referrals - Apps')

@section('vendor-style')
@vite(['resources/assets/vendor/libs/datatables-bs5/datatables.bootstrap5.scss',
'resources/assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.scss',
'resources/assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.scss'])
@endsection

@section('vendor-script')
@vite(['resources/assets/vendor/libs/moment/moment.js',
'resources/assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js'])
@endsection

@section('page-script')
@vite(['resources/assets/js/app-ecommerce-referral.js'])
@endsection

@section('content')
<div class="row mb-6 g-6">
  <div class="col-sm-6 col-xl-3">
    <div class="card">
      <div class="card-body">
        <div class="d-flex align-items-center justify-content-between">
          <div class="content-left">
            <h5 class="mb-1">$24,983</h5>
            <small>Total Earning</small>
          </div>
          <span class="badge bg-label-primary rounded-circle p-2">
            <i class="icon-base ti tabler-currency-dollar icon-lg"></i>
          </span>
        </div>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-xl-3">
    <div class="card">
      <div class="card-body">
        <div class="d-flex align-items-center justify-content-between">
          <div class="content-left">
            <h5 class="mb-1">$8,647</h5>
            <small>Unpaid Earning</small>
          </div>
          <span class="badge bg-label-success rounded-circle p-2">
            <i class="icon-base ti tabler-gift icon-lg"></i>
          </span>
        </div>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-xl-3">
    <div class="card">
      <div class="card-body">
        <div class="d-flex align-items-center justify-content-between">
          <div class="content-left">
            <h5 class="mb-1">2,367</h5>
            <small>Signups</small>
          </div>
          <span class="badge bg-label-danger rounded-circle p-2">
            <i class="icon-base ti tabler-users icon-lg"></i>
          </span>
        </div>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-xl-3">
    <div class="card">
      <div class="card-body">
        <div class="d-flex align-items-center justify-content-between">
          <div class="content-left">
            <h5 class="mb-1">4.5%</h5>
            <small>Conversion Rate</small>
          </div>
          <span class="badge bg-label-info rounded-circle p-2">
            <i class="icon-base ti tabler-infinity icon-lg"></i>
          </span>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="row mb-6 g-6">
  <div class="col-lg-7">
    <div class="card h-100">
      <div class="card-body">
        <h5 class="mb-1">How to use</h5>
        <p class="mb-6 card-subtitle mt-0">Integrate your referral code in 3 easy steps.</p>
        <div class="d-flex flex-column flex-sm-row justify-content-between text-center gap-6">
          <div class="d-flex flex-column align-items-center">
            <span class="p-4 border-1 border-primary rounded-circle border-dashed mb-0 w-px-75 h-px-75">
              <div class="text-primary">
                <svg width="43" height="42" viewBox="0 0 43 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path opacity="0.2" fill-rule="evenodd" clip-rule="evenodd"
                    d="M35.2623 24.3473L30.1107 18.1621C30.3076 21.952 29.3724 26.3652 26.4849 31.4019L31.4068 35.3394C31.5818 35.4784 31.7894 35.5704 32.01 35.6067C32.2305 35.643 32.4566 35.6224 32.6669 35.5468C32.8773 35.4712 33.0648 35.3432 33.2118 35.1748C33.3588 35.0065 33.4603 34.8034 33.5068 34.5848L35.5248 25.4629C35.5734 25.2695 35.575 25.0672 35.5293 24.8731C35.4836 24.679 35.3921 24.4987 35.2623 24.3473ZM7.30603 24.4457L12.4576 18.277C12.2607 22.0668 13.1959 26.4801 16.0834 31.5004L11.1615 35.4379C10.9876 35.5769 10.7812 35.6693 10.5617 35.7065C10.3422 35.7437 10.1169 35.7245 9.9069 35.6507C9.6969 35.5769 9.50912 35.4509 9.36123 35.2845C9.21334 35.1181 9.11019 34.9168 9.0615 34.6996L7.04353 25.5613C6.99488 25.3679 6.99333 25.1657 7.039 24.9716C7.08468 24.7775 7.17625 24.5971 7.30603 24.4457Z"
                    fill="currentColor" />
                  <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M19.8811 2.47353C20.2896 2.13596 20.8031 1.95117 21.3333 1.95117C21.8651 1.95117 22.38 2.13707 22.7891 2.47657C24.3981 3.7867 27.8808 7.0357 29.8053 12.0381C30.4659 13.7554 30.9381 15.6673 31.0933 17.7625L36.1251 23.8008C36.3563 24.0724 36.5195 24.3951 36.6012 24.7424C36.6822 25.0868 36.6808 25.4453 36.597 25.7889L34.5817 34.9151L34.581 34.9182C34.4952 35.3009 34.3135 35.6555 34.0529 35.9487C33.7924 36.2418 33.4615 36.4639 33.0915 36.5939C32.7215 36.724 32.3245 36.7579 31.9378 36.6923C31.5511 36.6267 31.1875 36.4638 30.881 36.219L30.8806 36.2186L26.2326 32.5002H16.4341L11.7862 36.2186L11.7857 36.219C11.4793 36.4638 11.1156 36.6267 10.729 36.6923C10.3423 36.7579 9.94525 36.724 9.57524 36.5939C9.20523 36.4639 8.87438 36.2418 8.61381 35.9487C8.35324 35.6555 8.17151 35.3009 8.08572 34.9182L8.08502 34.9151L6.06973 25.7889C5.98601 25.4453 5.98455 25.0868 6.06559 24.7424C6.14733 24.395 6.31065 24.072 6.54198 23.8004L11.4767 17.8912C11.6193 15.7424 12.1008 13.7842 12.7825 12.029C14.726 7.02537 18.2534 3.77698 19.8811 2.47353ZM29.1238 18.3076C29.1125 18.2387 29.1086 18.169 29.1118 18.0996C28.9861 16.1202 28.5469 14.3374 27.9387 12.7563C26.1899 8.21065 22.9998 5.22661 21.5224 4.02428L21.5125 4.01626L21.5126 4.01619C21.4623 3.97418 21.3988 3.95117 21.3333 3.95117C21.2678 3.95117 21.2043 3.97418 21.154 4.01619L21.1377 4.02954C19.645 5.22365 16.4124 8.20744 14.6468 12.7531C14.0147 14.3804 13.5649 16.2219 13.4576 18.2718C13.4578 18.3084 13.456 18.345 13.4522 18.3815C13.2924 21.8411 14.1096 25.8898 16.6664 30.5002H25.9943C28.5166 25.8569 29.3045 21.7836 29.1238 18.3076ZM34.5925 25.0857L31.0856 20.8775C30.8435 24.0045 29.8822 27.4702 27.8649 31.2448L32.1295 34.6565C32.1709 34.6896 32.22 34.7116 32.2723 34.7204C32.3245 34.7293 32.3782 34.7247 32.4282 34.7071C32.4782 34.6896 32.5229 34.6596 32.5581 34.6199C32.5931 34.5806 32.6176 34.533 32.6293 34.4817L32.6295 34.4807L34.6468 25.3455C34.6488 25.3361 34.6511 25.3266 34.6534 25.3172C34.6631 25.2789 34.6634 25.2389 34.6543 25.2004C34.6453 25.162 34.6272 25.1263 34.6015 25.0963L34.5924 25.0858L34.5925 25.0857ZM11.5084 20.9734L8.07358 25.0865L8.06535 25.0964L8.06529 25.0963C8.0396 25.1263 8.02147 25.162 8.01242 25.2004C8.00338 25.2389 8.00369 25.2789 8.01332 25.3172C8.01568 25.3266 8.01791 25.3361 8.02001 25.3455L10.0373 34.4807L10.0375 34.4817C10.0492 34.533 10.0737 34.5806 10.1086 34.6199C10.1439 34.6596 10.1886 34.6896 10.2386 34.7071C10.2886 34.7247 10.3422 34.7293 10.3945 34.7204C10.4467 34.7116 10.4959 34.6896 10.5373 34.6565L14.796 31.2495C12.7589 27.5131 11.7736 24.0779 11.5084 20.9734ZM17.7084 36.7502C17.7084 36.1979 18.1561 35.7502 18.7084 35.7502H23.9584C24.5107 35.7502 24.9584 36.1979 24.9584 36.7502C24.9584 37.3025 24.5107 37.7502 23.9584 37.7502H18.7084C18.1561 37.7502 17.7084 37.3025 17.7084 36.7502ZM23.3021 15.7502C23.3021 16.8375 22.4207 17.719 21.3334 17.719C20.2461 17.719 19.3646 16.8375 19.3646 15.7502C19.3646 14.6629 20.2461 13.7815 21.3334 13.7815C22.4207 13.7815 23.3021 14.6629 23.3021 15.7502Z"
                    fill="currentColor" />
                </svg>
              </div>
            </span>
            <p class="my-2 w-75">Create & validate your referral link and get</p>
            <h6 class="text-primary mb-0">$50</h6>
          </div>
          <div class="d-flex flex-column align-items-center">
            <span class="p-4 border-1 border-primary rounded-circle border-dashed mb-0 w-px-75 h-px-75">
              <div class="text-primary">
                <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path opacity="0.2"
                    d="M9.1875 6.25H32.8125C32.8954 6.25 32.9749 6.28292 33.0335 6.34153L33.739 5.63603L33.0335 6.34153C33.0921 6.40013 33.125 6.47962 33.125 6.5625V35.4375C33.125 35.5204 33.0921 35.5999 33.0335 35.6585L33.7406 36.3656L33.0335 35.6585C32.9749 35.7171 32.8954 35.75 32.8125 35.75H9.1875C9.10462 35.75 9.02513 35.7171 8.96653 35.6585L8.25942 36.3656L8.96653 35.6585C8.90792 35.5999 8.875 35.5204 8.875 35.4375V6.5625C8.875 6.47962 8.90792 6.40014 8.96653 6.34153C9.02514 6.28292 9.10462 6.25 9.1875 6.25ZM17.5277 27.5092C18.5555 28.1959 19.7639 28.5625 21 28.5625C22.6576 28.5625 24.2473 27.904 25.4194 26.7319C26.5915 25.5598 27.25 23.9701 27.25 22.3125C27.25 21.0764 26.8834 19.868 26.1967 18.8402C25.5099 17.8124 24.5338 17.0113 23.3918 16.5383C22.2497 16.0652 20.9931 15.9414 19.7807 16.1826C18.5683 16.4237 17.4547 17.019 16.5806 17.8931C15.7065 18.7672 15.1112 19.8808 14.8701 21.0932C14.6289 22.3056 14.7527 23.5622 15.2258 24.7043C15.6988 25.8463 16.4999 26.8224 17.5277 27.5092Z"
                    fill="currentColor" stroke="currentColor" stroke-width="2" />
                  <path
                    d="M21 27.5625C23.8995 27.5625 26.25 25.212 26.25 22.3125C26.25 19.413 23.8995 17.0625 21 17.0625C18.1005 17.0625 15.75 19.413 15.75 22.3125C15.75 25.212 18.1005 27.5625 21 27.5625ZM21 27.5625C19.4718 27.5625 17.9646 27.9183 16.5977 28.6017C15.2309 29.2852 14.0419 30.2774 13.125 31.5M21 27.5625C22.5282 27.5625 24.0354 27.9183 25.4023 28.6017C26.7691 29.2852 27.9581 30.2774 28.875 31.5M15.75 10.5H26.25M34.125 6.5625V35.4375C34.125 36.1624 33.5374 36.75 32.8125 36.75H9.1875C8.46263 36.75 7.875 36.1624 7.875 35.4375V6.5625C7.875 5.83763 8.46263 5.25 9.1875 5.25H32.8125C33.5374 5.25 34.125 5.83763 34.125 6.5625Z"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
              </div>
            </span>
            <p class="my-2 w-75">For every new signup you get</p>
            <h6 class="text-primary mb-0">10%</h6>
          </div>
          <div class="d-flex flex-column align-items-center">
            <span class="p-4 border-1 border-primary rounded-circle border-dashed mb-0 w-px-75 h-px-75">
              <div class="text-primary">
                <svg width="43" height="42" viewBox="0 0 43 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path opacity="0.2"
                    d="M35.1707 5.89001L4.58941 14.5033C4.32909 14.5745 4.09703 14.7242 3.92485 14.932C3.75268 15.1398 3.64875 15.3956 3.62723 15.6647C3.60571 15.9337 3.66764 16.2028 3.80458 16.4353C3.94153 16.6679 4.14684 16.8526 4.39253 16.9642L18.4363 23.6088C18.7114 23.7362 18.9323 23.9571 19.0597 24.2322L25.7043 38.2759C25.8159 38.5216 26.0006 38.7269 26.2331 38.8639C26.4657 39.0008 26.7348 39.0628 27.0038 39.0412C27.2728 39.0197 27.5287 38.9158 27.7365 38.7436C27.9443 38.5714 28.094 38.3394 28.1652 38.0791L36.7785 7.49782C36.8437 7.27466 36.8478 7.03804 36.7902 6.81279C36.7325 6.58753 36.6154 6.38192 36.451 6.21751C36.2866 6.0531 36.081 5.93594 35.8557 5.87832C35.6304 5.8207 35.3938 5.82474 35.1707 5.89001Z"
                    fill="currentColor" />
                  <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M36.1035 4.90951C35.7063 4.80791 35.2892 4.81452 34.8954 4.92862L4.32569 13.5387L4.32147 13.5398C3.86452 13.6657 3.45723 13.929 3.1548 14.294C2.85144 14.6602 2.66833 15.1109 2.63041 15.5849C2.59249 16.0589 2.70161 16.533 2.9429 16.9428C3.1827 17.35 3.54147 17.6739 3.97083 17.871L18.0086 24.5127L18.0086 24.5127L18.0161 24.5162C18.0762 24.544 18.1245 24.5923 18.1523 24.6524L18.1523 24.6524L18.1558 24.6599L24.7975 38.6978C24.9946 39.1271 25.3185 39.4858 25.7257 39.7256C26.1354 39.9669 26.6096 40.076 27.0836 40.0381C27.5576 40.0001 28.0083 39.817 28.3745 39.5137C28.7395 39.2113 29.0028 38.804 29.1286 38.347L29.1298 38.3428L37.7383 7.77853L37.7398 7.77315C37.854 7.37938 37.8606 6.96221 37.759 6.56497C37.6569 6.16591 37.4493 5.80166 37.1581 5.5104C36.8668 5.21914 36.5026 5.01159 36.1035 4.90951ZM35.4418 6.85256L35.1707 5.89001L35.4514 6.8498C35.5024 6.83489 35.5564 6.83396 35.6079 6.84713C35.6593 6.86029 35.7063 6.88705 35.7439 6.92461C35.7814 6.96218 35.8082 7.00915 35.8214 7.06061C35.8345 7.11207 35.8336 7.16612 35.8187 7.2171L35.8186 7.21709L35.8159 7.22671L27.2026 37.808L27.2026 37.808L27.2006 37.8153C27.1836 37.8773 27.148 37.9326 27.0985 37.9736C27.049 38.0146 26.9881 38.0393 26.9241 38.0444C26.86 38.0496 26.7959 38.0348 26.7406 38.0022C26.6852 37.9696 26.6412 37.9207 26.6147 37.8622L26.6082 37.8483L20.0646 24.0181L26.9856 17.0971C27.3761 16.7066 27.3761 16.0734 26.9856 15.6829C26.5951 15.2924 25.9619 15.2924 25.5714 15.6829L18.6505 22.6038L4.82021 16.0603L4.80626 16.0538C4.74776 16.0272 4.69888 15.9833 4.66627 15.9279C4.63366 15.8725 4.61892 15.8085 4.62404 15.7444C4.62917 15.6803 4.65391 15.6194 4.69491 15.57C4.7359 15.5205 4.79115 15.4848 4.85313 15.4679L4.85314 15.4679L4.86051 15.4658L35.4418 6.85256Z"
                    fill="currentColor" />
                </svg>
              </div>
            </span>
            <p class="my-2 w-75">Get other friends to generate link and get</p>
            <h6 class="text-primary mb-0">$100</h6>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="col-lg-5">
    <div class="card h-100">
      <div class="card-body">
        <form class="referral-form" onsubmit="return false">
          <div class="mb-6 mt-1">
            <h5 class="mb-5">Invite your friends</h5>
            <div class="d-flex gap-4 align-items-end">
              <div class="w-100">
                <label class="form-label mb-1" for="referralEmail">Enter friend’s email address and invite them</label>
                <input type="email" id="referralEmail" name="referralEmail" class="form-control w-100"
                  placeholder="Email address" />
              </div>
              <div>
                <button type="submit" class="btn btn-primary"><i
                    class="icon-base ti tabler-check icon-xs me-2"></i>Submit</button>
              </div>
            </div>
          </div>
          <div>
            <h5 class="mb-5">Share the referral link</h5>
            <div class="d-flex gap-4 align-items-end">
              <div class="w-100">
                <label class="form-label mb-1" for="referralLink">Share referral link in social media</label>
                <input type="text" id="referralLink" name="referralLink" class="form-control w-100 h-px-40"
                  placeholder="pixinvent.com/?ref=6479" />
              </div>
              <div class="d-flex">
                <button type="button" class="btn btn-facebook btn-icon me-2"><i
                    class="icon-base ti tabler-brand-facebook text-white icon-22px"></i></button>
                <button type="button" class="btn btn-twitter btn-icon"><i
                    class="icon-base ti tabler-brand-twitter text-white icon-22px"></i></button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Referral List Table -->
<div class="card">
  <div class="card-datatable">
    <table class="datatables-referral table border-top">
      <thead>
        <tr>
          <th></th>
          <th></th>
          <th>Users</th>
          <th class="text-nowrap">Referred ID</th>
          <th>Status</th>
          <th>Value</th>
          <th class="text-nowrap">Earnings</th>
        </tr>
      </thead>
    </table>
  </div>
</div>

@endsection
