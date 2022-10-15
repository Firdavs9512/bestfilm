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
            <li class="menu-item">
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
            <li class="menu-item active open">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                  <i class="menu-icon tf-icons bx bx-detail"></i>
                  <div data-i18n="Form Layouts">User</div>
                </a>
                <ul class="menu-sub">
                  <li class="menu-item active">
                    <a href="{{ route('userindex') }}" class="menu-link">
                      <div data-i18n="Vertical Form">User index</div>
                    </a>
                  </li>
                  <li class="menu-item">
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
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">User /</span> Index</h4>

              <!-- Basic Layout & Basic with Icons -->
              <div class="row">
                <!-- Basic Layout -->
                <div class="col-xxl">
                    <div class="card">
                        <h5 class="card-header">Users list</h5>
                        <div class="table-responsive text-nowrap">
                          <table class="table">
                            <thead class="table-light">
                              <tr>
                                <th>Name F/L</th>
                                <th>UserName</th>
                                <th>Email</th>
                                <th>Photo</th>
                                <th>Country</th>
                                <th>Options</th>
                              </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">


                                @foreach ($users as $user)
                                <tr>
                                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>
                                        @if (isset($user->lastname) or isset($user->firsname))
                                            {{ $user->firsname }} {{ $user->lastname }}
                                        @else
                                            F/L is null
                                        @endif
                                    </strong></td>
                                    <td><i class="fab fa-angular fa-lg text-danger me-1"></i> <strong>{{ $user->username }}</strong></td>
                                    <td><i class="fab fa-angular fa-lg text-danger me-1"></i> <strong>{{ $user->email }}</strong></td>
                                    <td>
                                        <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="" data-bs-original-title="null">
                                              <img src="{{ url('storage/'.$user->photo) }}" alt="no image" class="rounded-circle">
                                            </li>
                                          </ul>
                                        </td>
                                    <td><span class="badge bg-label-primary me-1">
                                        @if (isset($user->country))
                                            {{ $user->country }}
                                        @else
                                            null
                                        @endif
                                    </span></td>
                                    <td>
                                        <div class="dropdown">
                                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                                <i class="bx bx-dots-vertical-rounded"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="{{ route('useredit',$user->id) }}"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                                <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach


                            </tbody>
                          </table>

                          <div class="row mx-2 mt-2">
                            <div class="col-sm-12 col-md-6">
                                <div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">Showing {{ $users->firstItem() }} to {{ $users->lastItem() }} of {{ $users->total() }}
                                    entries</div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div class="dataTables_paginate
                                    paging_simple_numbers" id="DataTables_Table_0_paginate">
                                    <ul class="pagination">
                                        {{-- //shu yerdan boshlanadi --}}
                                        {{ $users->links() }}
                                        {{-- //bu yerda tugaydi --}}
                                    </ul>
                                </div>
                            </div>
                        </div>

                        </div>
                      </div>
                </div>
                <!-- Basic with Icons -->
              </div>
            </div>
            <!-- / Content -->

            @if ($message = Session::get('success'))

            <!-- Toast with Placements -->
            <div
            class="bs-toast toast toast-placement-ex m-2"
            role="alert"
            aria-live="assertive"
            aria-atomic="true"
            data-delay="2000"
            >
            <div class="toast-header">
              <i class="bx bx-bell me-2"></i>
              <div class="me-auto fw-semibold">BestFilm</div>
              <small>Now</small>
              <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">{{ $message }}</div>
            </div>
            <!-- Toast with Placements -->
            <div style="display: none">
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
              <div style="display: none">
                <label class="form-label" for="selectPlacement">Placement</label>
                <select class="form-select placement-dropdown" id="selectPlacement">
                  <option value="top-0 end-0">Top right</option>
                </select>
            </div>
            <div style="display:none">
                <label class="form-label" for="showToastPlacement">&nbsp;</label>
                <button id="showToastPlacement" class="btn btn-primary d-block">Show Toast</button>
              </div>

            <script>
            /**
             * UI Toasts
             */

             'use strict';

            (function () {
              // Bootstrap toasts example
              // --------------------------------------------------------------------
              const toastPlacementExample = document.querySelector('.toast-placement-ex'),
                toastPlacementBtn = document.querySelector('#showToastPlacement');
              let selectedType, selectedPlacement, toastPlacement;

              // Dispose toast when open another
              function toastDispose(toast) {
                if (toast && toast._element !== null) {
                    if (toastPlacementExample) {
                        toastPlacementExample.classList.remove(selectedType);
                        DOMTokenList.prototype.remove.apply(toastPlacementExample.classList, selectedPlacement);
                  }
                  toast.dispose();
                }
              }
              window.onload = function(){
              document.getElementById('showToastPlacement').click();
            }

              // Placement Button click
              if (toastPlacementBtn) {
                  toastPlacementBtn.onclick = function () {
                  if (toastPlacement) {
                    toastDispose(toastPlacement);
                  }
                  selectedType = "bg-primary";
                  selectedPlacement = document.querySelector('#selectPlacement').value.split(' ');

                  toastPlacementExample.classList.add(selectedType);
                  DOMTokenList.prototype.add.apply(toastPlacementExample.classList, selectedPlacement);
                  toastPlacement = new bootstrap.Toast(toastPlacementExample);
                  toastPlacement.show();
                };
              }



            })();



            </script>

            @endif

@include('layauts.adminfooter')
