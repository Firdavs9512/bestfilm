@include('layauts.adminnavbar')

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo">
            <a href="index.html" class="app-brand-link">
              <span class="app-brand-logo demo">
                <svg
                  width="25"
                  viewBox="0 0 25 42"
                  version="1.1"
                  xmlns="http://www.w3.org/2000/svg"
                  xmlns:xlink="http://www.w3.org/1999/xlink"
                >
                  <defs>
                    <path
                      d="M13.7918663,0.358365126 L3.39788168,7.44174259 C0.566865006,9.69408886 -0.379795268,12.4788597 0.557900856,15.7960551 C0.68998853,16.2305145 1.09562888,17.7872135 3.12357076,19.2293357 C3.8146334,19.7207684 5.32369333,20.3834223 7.65075054,21.2172976 L7.59773219,21.2525164 L2.63468769,24.5493413 C0.445452254,26.3002124 0.0884951797,28.5083815 1.56381646,31.1738486 C2.83770406,32.8170431 5.20850219,33.2640127 7.09180128,32.5391577 C8.347334,32.0559211 11.4559176,30.0011079 16.4175519,26.3747182 C18.0338572,24.4997857 18.6973423,22.4544883 18.4080071,20.2388261 C17.963753,17.5346866 16.1776345,15.5799961 13.0496516,14.3747546 L10.9194936,13.4715819 L18.6192054,7.984237 L13.7918663,0.358365126 Z"
                      id="path-1"
                    ></path>
                    <path
                      d="M5.47320593,6.00457225 C4.05321814,8.216144 4.36334763,10.0722806 6.40359441,11.5729822 C8.61520715,12.571656 10.0999176,13.2171421 10.8577257,13.5094407 L15.5088241,14.433041 L18.6192054,7.984237 C15.5364148,3.11535317 13.9273018,0.573395879 13.7918663,0.358365126 C13.5790555,0.511491653 10.8061687,2.3935607 5.47320593,6.00457225 Z"
                      id="path-3"
                    ></path>
                    <path
                      d="M7.50063644,21.2294429 L12.3234468,23.3159332 C14.1688022,24.7579751 14.397098,26.4880487 13.008334,28.506154 C11.6195701,30.5242593 10.3099883,31.790241 9.07958868,32.3040991 C5.78142938,33.4346997 4.13234973,34 4.13234973,34 C4.13234973,34 2.75489982,33.0538207 2.37032616e-14,31.1614621 C-0.55822714,27.8186216 -0.55822714,26.0572515 -4.05231404e-15,25.8773518 C0.83734071,25.6075023 2.77988457,22.8248993 3.3049379,22.52991 C3.65497346,22.3332504 5.05353963,21.8997614 7.50063644,21.2294429 Z"
                      id="path-4"
                    ></path>
                    <path
                      d="M20.6,7.13333333 L25.6,13.8 C26.2627417,14.6836556 26.0836556,15.9372583 25.2,16.6 C24.8538077,16.8596443 24.4327404,17 24,17 L14,17 C12.8954305,17 12,16.1045695 12,15 C12,14.5672596 12.1403557,14.1461923 12.4,13.8 L17.4,7.13333333 C18.0627417,6.24967773 19.3163444,6.07059163 20.2,6.73333333 C20.3516113,6.84704183 20.4862915,6.981722 20.6,7.13333333 Z"
                      id="path-5"
                    ></path>
                  </defs>
                  <g id="g-app-brand" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g id="Brand-Logo" transform="translate(-27.000000, -15.000000)">
                      <g id="Icon" transform="translate(27.000000, 15.000000)">
                        <g id="Mask" transform="translate(0.000000, 8.000000)">
                          <mask id="mask-2" fill="white">
                            <use xlink:href="#path-1"></use>
                          </mask>
                          <use fill="#696cff" xlink:href="#path-1"></use>
                          <g id="Path-3" mask="url(#mask-2)">
                            <use fill="#696cff" xlink:href="#path-3"></use>
                            <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-3"></use>
                          </g>
                          <g id="Path-4" mask="url(#mask-2)">
                            <use fill="#696cff" xlink:href="#path-4"></use>
                            <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-4"></use>
                          </g>
                        </g>
                        <g
                          id="Triangle"
                          transform="translate(19.000000, 11.000000) rotate(-300.000000) translate(-19.000000, -11.000000) "
                        >
                          <use fill="#696cff" xlink:href="#path-5"></use>
                          <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-5"></use>
                        </g>
                      </g>
                    </g>
                  </g>
                </svg>
              </span>
              <span class="app-brand-text demo menu-text fw-bolder ms-2">BestFiml</span>
            </a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
              <i class="bx bx-chevron-left bx-sm align-middle"></i>
            </a>
          </div>

          <div class="menu-inner-shadow"></div>

          <ul class="menu-inner py-1">
            <!-- Dashboard -->
            <li class="menu-item">
              <a href="{{ route('adminindex') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
              </a>
            </li>

            <!-- Components -->
            <li class="menu-header small text-uppercase"><span class="menu-header-text">Category</span></li>
            <!-- Cards -->
            <li class="menu-item" >
              <a href="{{ route('categoryindex') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-collection"></i>
                <div data-i18n="Basic">Index</div>
              </a>
            </li>


            <li class="menu-item">
              <a href="{{ route('categorycreate') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-crown"></i>
                <div data-i18n="Boxicons">Create</div>
              </a>
            </li>

            <!-- Forms & Tables -->
            <li class="menu-header small text-uppercase"><span class="menu-header-text">Tags &amp; Actiors</span></li>
            <!-- Forms -->
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-detail"></i>
                <div data-i18n="Form Elements">Tag</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="{{ route('tagindex') }}" class="menu-link">
                    <div data-i18n="Basic Inputs">Tag index</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="{{ route('tagcreate') }}" class="menu-link">
                    <div data-i18n="Input groups">Tag create</div>
                  </a>
                </li>
              </ul>
            </li>
            <li class="menu-item active ">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-detail"></i>
                <div data-i18n="Form Layouts">Actior</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="{{ route('actiorindex') }}" class="menu-link">
                    <div data-i18n="Vertical Form">Actior index</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="{{ route('actiorcreate') }}" class="menu-link">
                    <div data-i18n="Boxicons">Actior create</div>
                  </a>
                </li>
              </ul>
            </li>
            <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                  <i class="menu-icon tf-icons bx bx-detail"></i>
                  <div data-i18n="Form Layouts">Users</div>
                </a>
                <ul class="menu-sub">
                  <li class="menu-item">
                    <a href="{{ route('userindex') }}" class="menu-link">
                      <div data-i18n="Vertical Form">User list</div>
                    </a>
                  </li>
                  <li class="menu-item ">
                    <a href="{{ route('usercrete') }}" class="menu-link">
                      <div data-i18n="Boxicons">User create</div>
                    </a>
                  </li>
                </ul>
              </li>
            <!-- Misc -->
            <li class="menu-header small text-uppercase"><span class="menu-header-text">Movies</span></li>
            <li class="menu-item">
              <a
                href="{{ route('movieindex') }}"
                class="menu-link"
              >
                <i class="menu-icon tf-icons bx bx-file"></i>
                <div data-i18n="Support">Movie index</div>
              </a>
            </li>
            <li class="menu-item">
              <a
                href="{{ route('moviecreate') }}"
                class="menu-link"
              >
                <i class="menu-icon tf-icons bx bx-crown"></i>
                <div data-i18n="Boxicons">Movie create</div>
              </a>
            </li>
          </ul>
        </aside>
        <!-- / Menu -->




        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

          <nav
            class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
            id="layout-navbar"
          >
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
              <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="bx bx-menu bx-sm"></i>
              </a>
            </div>

            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
              <!-- Search -->
              <div class="navbar-nav align-items-center">
                <div class="nav-item d-flex align-items-center">
                  <i class="bx bx-search fs-4 lh-0"></i>
                  <input
                    type="text"
                    class="form-control border-0 shadow-none"
                    placeholder="Search..."
                    aria-label="Search..."
                  />
                </div>
              </div>
              <!-- /Search -->
            </div>
          </nav>

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Actior /</span> Show</h4>

              <!-- Basic Layout & Basic with Icons -->
              <div class="row">
                <!-- Basic Layout -->
                <div class="col-xxl">
                  <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <h5 class="mb-0">Actior - {{ $actior->id }}</h5>
                    </div>
                    <div class="card-body">
                      <form method="POST" action="" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Name</label>
                          <div class="col-sm-10">
                            <input disabled value="{{ $actior->name }}" type="text" class="form-control" id="basic-default-name" placeholder="Actior name" />

                        </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" >Day of Bird</label>
                            <div class="col-sm-10">
                              <input value="{{ $actior->birdday }}" type="date" class="form-control" disabled/>

                            </div>
                          </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-email">Country</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <input
                                value="{{ $actior->country }}"
                                disabled
                                type="text"
                                id="basic-default-email"
                                class="form-control"
                                placeholder="Country"
                                aria-describedby="basic-default-email2"
                              />
                            </div>

                          </div>
                        </div>
                        <div class="row mb-3">
                            <img src="{{ url('storage/'.$actior->photo) }}" alt="">
                        </div>


                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-message">Overview</label>
                          <div class="col-sm-10">
                            <textarea

                                disabled
                              id="basic-default-message"
                              class="form-control"
                              placeholder="Overview"
                              aria-label="Overview"
                              aria-describedby="basic-icon-default-message2"
                            >{{ $actior->overview }}</textarea>

                          </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="biographi">Biographi</label>
                            <div class="col-sm-10">
                              <textarea
                                disabled
                                id="biographi"
                                class="form-control"
                                placeholder="Biographi"
                                aria-label="Biographi"
                                aria-describedby="basic-icon-default-message2"
                              >{{ $actior->biographi }}</textarea>

                            </div>
                          </div>
                          <div class="mt-3 row">
                            <div class="col-sm-10">
                              <a style="color: white" href="{{ route('actioredit',$actior->id) }}" class="btn btn-primary">Edit</a>
                            </div>
                          </div>
                      </form>
                    </div>
                  </div>
                </div>
                <!-- Basic with Icons -->
                <div class="row row-cols-1 row-cols-md-3 g-4 mb-5">

                    @foreach ($actior->actiorPhotos as $image)

                    <div class="col">
                        <div class="card">
                            <img style="height: 200px" class="card-img-top" src="{{ url('storage/'.$image->name) }}" alt="Card image cap">
                        </div>
                    </div>

                    @endforeach


                  </div>

              </div>
            </div>
            <!-- / Content -->

@include('layauts.adminfooter')
