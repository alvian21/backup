<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
      <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="{{ asset('assets/modules/izitoast/css/iziToast.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/modules/datatables/datatables.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/modules/select2/dist/css/select2.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/modules/nestable/css/nestable.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/modules/summernote/summernote-bs4.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/modules/bootstrap-daterangepicker/daterangepicker.css') }}">
  <!-- Template CSS -->
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/components.css')}}">
  <link rel="stylesheet" href="{{ asset('css/layout-skin.css')}}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" integrity="sha512-mSYUmp1HYZDFaVKK//63EcZq4iFWFjxSL+Z3T/aCt4IO9Cejm03q3NKKYN6pFQzY0SBOr8h+eCIAZHPXcpZaNw==" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdn.datatables.net/datetime/1.0.3/css/dataTables.dateTime.min.css">
</head>
<body class="layout-skin skin-cyan">
    <div id="app">
      <div class="main-wrapper">
        <div class="navbar-bg"></div>
        <nav class="navbar navbar-expand-lg main-navbar">
          <form class="form-inline mr-auto">
            <ul class="navbar-nav mr-3">
              <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
              <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
            </ul>
            <div class="search-element">
              <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="250">
              <button class="btn" type="submit"><i class="fas fa-search"></i></button>
              <div class="search-backdrop"></div>
              <div class="search-result">
                <div class="search-header">
                  Histories
                </div>
                <div class="search-item">
                  <a href="#">How to hack NASA using CSS</a>
                  <a href="#" class="search-close"><i class="fas fa-times"></i></a>
                </div>
                <div class="search-item">
                  <a href="#">Kodinger.com</a>
                  <a href="#" class="search-close"><i class="fas fa-times"></i></a>
                </div>
                <div class="search-item">
                  <a href="#">#Stisla</a>
                  <a href="#" class="search-close"><i class="fas fa-times"></i></a>
                </div>
                <div class="search-header">
                  Result
                </div>
                <div class="search-item">
                  <a href="#">
                    <img class="mr-3 rounded" width="30" src="https://demo.getstisla.com/assets/img/products/product-3-50.png" alt="product">
                    oPhone S9 Limited Edition
                  </a>
                </div>
                <div class="search-item">
                  <a href="#">
                    <img class="mr-3 rounded" width="30" src="https://demo.getstisla.com/assets/img/products/product-2-50.png" alt="product">
                    Drone X2 New Gen-7
                  </a>
                </div>
                <div class="search-item">
                  <a href="#">
                    <img class="mr-3 rounded" width="30" src="https://demo.getstisla.com/assets/img/products/product-1-50.png" alt="product">
                    Headphone Blitz
                  </a>
                </div>
                <div class="search-header">
                  Projects
                </div>
                <div class="search-item">
                  <a href="#">
                    <div class="search-icon bg-danger text-white mr-3">
                      <i class="fas fa-code"></i>
                    </div>
                    Stisla Admin Template
                  </a>
                </div>
                <div class="search-item">
                  <a href="#">
                    <div class="search-icon bg-primary text-white mr-3">
                      <i class="fas fa-laptop"></i>
                    </div>
                    Create a new Homepage Design
                  </a>
                </div>
              </div>
            </div>
          </form>
          <ul class="navbar-nav navbar-right">
            <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" class="nav-link nav-link-lg message-toggle beep"><i class="far fa-envelope"></i></a>
              <div class="dropdown-menu dropdown-list dropdown-menu-right">
                <div class="dropdown-header">Messages
                  <div class="float-right">
                    <a href="#">Mark All As Read</a>
                  </div>
                </div>
                <div class="dropdown-list-content dropdown-list-message">
                  <a href="#" class="dropdown-item dropdown-item-unread">
                    <div class="dropdown-item-avatar">
                      <img alt="image" src="https://demo.getstisla.com/assets/img/avatar/avatar-1.png" class="rounded-circle">
                      <div class="is-online"></div>
                    </div>
                    <div class="dropdown-item-desc">
                      <b>Kusnaedi</b>
                      <p>Hello, Bro!</p>
                      <div class="time">10 Hours Ago</div>
                    </div>
                  </a>
                  <a href="#" class="dropdown-item dropdown-item-unread">
                    <div class="dropdown-item-avatar">
                      <img alt="image" src="https://demo.getstisla.com/assets/img/avatar/avatar-2.png" class="rounded-circle">
                    </div>
                    <div class="dropdown-item-desc">
                      <b>Dedik Sugiharto</b>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                      <div class="time">12 Hours Ago</div>
                    </div>
                  </a>
                  <a href="#" class="dropdown-item dropdown-item-unread">
                    <div class="dropdown-item-avatar">
                      <img alt="image" src="https://demo.getstisla.com/assets/img/avatar/avatar-3.png" class="rounded-circle">
                      <div class="is-online"></div>
                    </div>
                    <div class="dropdown-item-desc">
                      <b>Agung Ardiansyah</b>
                      <p>Sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                      <div class="time">12 Hours Ago</div>
                    </div>
                  </a>
                  <a href="#" class="dropdown-item">
                    <div class="dropdown-item-avatar">
                      <img alt="image" src="https://demo.getstisla.com/assets/img/avatar/avatar-4.png" class="rounded-circle">
                    </div>
                    <div class="dropdown-item-desc">
                      <b>Ardian Rahardiansyah</b>
                      <p>Duis aute irure dolor in reprehenderit in voluptate velit ess</p>
                      <div class="time">16 Hours Ago</div>
                    </div>
                  </a>
                  <a href="#" class="dropdown-item">
                    <div class="dropdown-item-avatar">
                      <img alt="image" src="https://demo.getstisla.com/assets/img/avatar/avatar-5.png" class="rounded-circle">
                    </div>
                    <div class="dropdown-item-desc">
                      <b>Alfa Zulkarnain</b>
                      <p>Exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
                      <div class="time">Yesterday</div>
                    </div>
                  </a>
                </div>
                <div class="dropdown-footer text-center">
                  <a href="#">View All <i class="fas fa-chevron-right"></i></a>
                </div>
              </div>
            </li>
            <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" class="nav-link notification-toggle nav-link-lg beep"><i class="far fa-bell"></i></a>
              <div class="dropdown-menu dropdown-list dropdown-menu-right">
                <div class="dropdown-header">Notifications
                  <div class="float-right">
                    <a href="#">Mark All As Read</a>
                  </div>
                </div>
                <div class="dropdown-list-content dropdown-list-icons">
                  <a href="#" class="dropdown-item dropdown-item-unread">
                    <div class="dropdown-item-icon bg-primary text-white">
                      <i class="fas fa-code"></i>
                    </div>
                    <div class="dropdown-item-desc">
                      Template update is available now!
                      <div class="time text-primary">2 Min Ago</div>
                    </div>
                  </a>
                  <a href="#" class="dropdown-item">
                    <div class="dropdown-item-icon bg-info text-white">
                      <i class="far fa-user"></i>
                    </div>
                    <div class="dropdown-item-desc">
                      <b>You</b> and <b>Dedik Sugiharto</b> are now friends
                      <div class="time">10 Hours Ago</div>
                    </div>
                  </a>
                  <a href="#" class="dropdown-item">
                    <div class="dropdown-item-icon bg-success text-white">
                      <i class="fas fa-check"></i>
                    </div>
                    <div class="dropdown-item-desc">
                      <b>Kusnaedi</b> has moved task <b>Fix bug header</b> to <b>Done</b>
                      <div class="time">12 Hours Ago</div>
                    </div>
                  </a>
                  <a href="#" class="dropdown-item">
                    <div class="dropdown-item-icon bg-danger text-white">
                      <i class="fas fa-exclamation-triangle"></i>
                    </div>
                    <div class="dropdown-item-desc">
                      Low disk space. Let's clean it!
                      <div class="time">17 Hours Ago</div>
                    </div>
                  </a>
                  <a href="#" class="dropdown-item">
                    <div class="dropdown-item-icon bg-info text-white">
                      <i class="fas fa-bell"></i>
                    </div>
                    <div class="dropdown-item-desc">
                      Welcome to Stisla template!
                      <div class="time">Yesterday</div>
                    </div>
                  </a>
                </div>
                <div class="dropdown-footer text-center">
                  <a href="#">View All <i class="fas fa-chevron-right"></i></a>
                </div>
              </div>
            </li>
            <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
              <img alt="image" src="https://demo.getstisla.com/assets/img/avatar/avatar-1.png" class="rounded-circle mr-1">
              <div class="d-sm-none d-lg-inline-block">Hi, Ujang Maman</div></a>
              <div class="dropdown-menu dropdown-menu-right">
                <div class="dropdown-title">Logged in 5 min ago</div>
                <a href="features-profile.html" class="dropdown-item has-icon">
                  <i class="far fa-user"></i> Profile
                </a>
                <a href="features-activities.html" class="dropdown-item has-icon">
                  <i class="fas fa-bolt"></i> Activities
                </a>
                <a href="features-settings.html" class="dropdown-item has-icon">
                  <i class="fas fa-cog"></i> Settings
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item has-icon text-danger">
                  <i class="fas fa-sign-out-alt"></i> Logout
                </a>
              </div>
            </li>
          </ul>
        </nav>
        <div class="main-sidebar">
          <aside id="sidebar-wrapper">
            <div class="sidebar-brand">
              <a href="index.html">Stisla</a>
            </div>
            <div class="sidebar-brand sidebar-brand-sm">
              <a href="index.html">St</a>
            </div>
            <ul class="sidebar-menu">
                <li class="menu-header">Dashboard</li>
                <li class="nav-item dropdown">
                  <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
                  <ul class="dropdown-menu">
                    <li><a class="nav-link" href="index-0.html">General Dashboard</a></li>
                    <li><a class="nav-link" href="index.html">Ecommerce Dashboard</a></li>
                  </ul>
                </li>
                <li class="menu-header">Starter</li>
                <li class="nav-item dropdown active">
                  <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Layout</span></a>
                  <ul class="dropdown-menu">
                    <li><a class="nav-link" href="layout-default.html">Default Layout</a></li>
                    <li><a class="nav-link" href="layout-transparent.html">Transparent Sidebar</a></li>
                    <li><a class="nav-link" href="layout-top-navigation.html">Top Navigation</a></li>
                  </ul>
                </li>
                <li><a class="nav-link" href="blank.html"><i class="far fa-square"></i> <span>Blank Page</span></a></li>
                <li class="nav-item dropdown">
                  <a href="#" class="nav-link has-dropdown"><i class="fas fa-th"></i> <span>Bootstrap</span></a>
                  <ul class="dropdown-menu">
                    <li><a class="nav-link" href="bootstrap-alert.html">Alert</a></li>
                    <li><a class="nav-link" href="bootstrap-badge.html">Badge</a></li>
                    <li><a class="nav-link" href="bootstrap-breadcrumb.html">Breadcrumb</a></li>
                    <li><a class="nav-link" href="bootstrap-buttons.html">Buttons</a></li>
                    <li><a class="nav-link" href="bootstrap-card.html">Card</a></li>
                    <li><a class="nav-link" href="bootstrap-carousel.html">Carousel</a></li>
                    <li><a class="nav-link" href="bootstrap-collapse.html">Collapse</a></li>
                    <li><a class="nav-link" href="bootstrap-dropdown.html">Dropdown</a></li>
                    <li><a class="nav-link" href="bootstrap-form.html">Form</a></li>
                    <li><a class="nav-link" href="bootstrap-list-group.html">List Group</a></li>
                    <li><a class="nav-link" href="bootstrap-media-object.html">Media Object</a></li>
                    <li><a class="nav-link" href="bootstrap-modal.html">Modal</a></li>
                    <li><a class="nav-link" href="bootstrap-nav.html">Nav</a></li>
                    <li><a class="nav-link" href="bootstrap-navbar.html">Navbar</a></li>
                    <li><a class="nav-link" href="bootstrap-pagination.html">Pagination</a></li>
                    <li><a class="nav-link" href="bootstrap-popover.html">Popover</a></li>
                    <li><a class="nav-link" href="bootstrap-progress.html">Progress</a></li>
                    <li><a class="nav-link" href="bootstrap-table.html">Table</a></li>
                    <li><a class="nav-link" href="bootstrap-tooltip.html">Tooltip</a></li>
                    <li><a class="nav-link" href="bootstrap-typography.html">Typography</a></li>
                  </ul>
                </li>
                <li class="menu-header">Stisla</li>
                <li class="nav-item dropdown">
                  <a href="#" class="nav-link has-dropdown"><i class="fas fa-th-large"></i> <span>Components</span></a>
                  <ul class="dropdown-menu">
                    <li><a class="nav-link" href="components-article.html">Article</a></li>
                    <li><a class="nav-link beep beep-sidebar" href="components-avatar.html">Avatar</a></li>
                    <li><a class="nav-link" href="components-chat-box.html">Chat Box</a></li>
                    <li><a class="nav-link beep beep-sidebar" href="components-empty-state.html">Empty State</a></li>
                    <li><a class="nav-link" href="components-gallery.html">Gallery</a></li>
                    <li><a class="nav-link beep beep-sidebar" href="components-hero.html">Hero</a></li>
                    <li><a class="nav-link" href="components-multiple-upload.html">Multiple Upload</a></li>
                    <li><a class="nav-link beep beep-sidebar" href="components-pricing.html">Pricing</a></li>
                    <li><a class="nav-link" href="components-statistic.html">Statistic</a></li>
                    <li><a class="nav-link" href="components-tab.html">Tab</a></li>
                    <li><a class="nav-link" href="components-table.html">Table</a></li>
                    <li><a class="nav-link" href="components-user.html">User</a></li>
                    <li><a class="nav-link beep beep-sidebar" href="components-wizard.html">Wizard</a></li>
                  </ul>
                </li>
                <li class="nav-item dropdown">
                  <a href="#" class="nav-link has-dropdown"><i class="far fa-file-alt"></i> <span>Forms</span></a>
                  <ul class="dropdown-menu">
                    <li><a class="nav-link" href="forms-advanced-form.html">Advanced Form</a></li>
                    <li><a class="nav-link" href="forms-editor.html">Editor</a></li>
                    <li><a class="nav-link" href="forms-validation.html">Validation</a></li>
                  </ul>
                </li>
                <li class="nav-item dropdown">
                  <a href="#" class="nav-link has-dropdown"><i class="fas fa-map-marker-alt"></i> <span>Google Maps</span></a>
                  <ul class="dropdown-menu">
                    <li><a href="gmaps-advanced-route.html">Advanced Route</a></li>
                    <li><a href="gmaps-draggable-marker.html">Draggable Marker</a></li>
                    <li><a href="gmaps-geocoding.html">Geocoding</a></li>
                    <li><a href="gmaps-geolocation.html">Geolocation</a></li>
                    <li><a href="gmaps-marker.html">Marker</a></li>
                    <li><a href="gmaps-multiple-marker.html">Multiple Marker</a></li>
                    <li><a href="gmaps-route.html">Route</a></li>
                    <li><a href="gmaps-simple.html">Simple</a></li>
                  </ul>
                </li>
                <li class="nav-item dropdown">
                  <a href="#" class="nav-link has-dropdown"><i class="fas fa-plug"></i> <span>Modules</span></a>
                  <ul class="dropdown-menu">
                    <li><a class="nav-link" href="modules-calendar.html">Calendar</a></li>
                    <li><a class="nav-link" href="modules-chartjs.html">ChartJS</a></li>
                    <li><a class="nav-link" href="modules-datatables.html">DataTables</a></li>
                    <li><a class="nav-link" href="modules-flag.html">Flag</a></li>
                    <li><a class="nav-link" href="modules-font-awesome.html">Font Awesome</a></li>
                    <li><a class="nav-link" href="modules-ion-icons.html">Ion Icons</a></li>
                    <li><a class="nav-link" href="modules-owl-carousel.html">Owl Carousel</a></li>
                    <li><a class="nav-link" href="modules-sparkline.html">Sparkline</a></li>
                    <li><a class="nav-link" href="modules-sweet-alert.html">Sweet Alert</a></li>
                    <li><a class="nav-link" href="modules-toastr.html">Toastr</a></li>
                    <li><a class="nav-link" href="modules-vector-map.html">Vector Map</a></li>
                    <li><a class="nav-link" href="modules-weather-icon.html">Weather Icon</a></li>
                  </ul>
                </li>
                <li class="menu-header">Pages</li>
                <li class="nav-item dropdown">
                  <a href="#" class="nav-link has-dropdown"><i class="far fa-user"></i> <span>Auth</span></a>
                  <ul class="dropdown-menu">
                    <li><a href="auth-forgot-password.html">Forgot Password</a></li>
                    <li><a href="auth-login.html">Login</a></li>
                    <li><a class="beep beep-sidebar" href="auth-login-2.html">Login 2</a></li>
                    <li><a href="auth-register.html">Register</a></li>
                    <li><a href="auth-reset-password.html">Reset Password</a></li>
                  </ul>
                </li>
                <li class="nav-item dropdown">
                  <a href="#" class="nav-link has-dropdown"><i class="fas fa-exclamation"></i> <span>Errors</span></a>
                  <ul class="dropdown-menu">
                    <li><a class="nav-link" href="errors-503.html">503</a></li>
                    <li><a class="nav-link" href="errors-403.html">403</a></li>
                    <li><a class="nav-link" href="errors-404.html">404</a></li>
                    <li><a class="nav-link" href="errors-500.html">500</a></li>
                  </ul>
                </li>
                <li class="nav-item dropdown">
                  <a href="#" class="nav-link has-dropdown"><i class="fas fa-bicycle"></i> <span>Features</span></a>
                  <ul class="dropdown-menu">
                    <li><a class="nav-link" href="features-activities.html">Activities</a></li>
                    <li><a class="nav-link" href="features-post-create.html">Post Create</a></li>
                    <li><a class="nav-link" href="features-posts.html">Posts</a></li>
                    <li><a class="nav-link" href="features-profile.html">Profile</a></li>
                    <li><a class="nav-link" href="features-settings.html">Settings</a></li>
                    <li><a class="nav-link" href="features-setting-detail.html">Setting Detail</a></li>
                    <li><a class="nav-link" href="features-tickets.html">Tickets</a></li>
                  </ul>
                </li>
                <li class="nav-item dropdown">
                  <a href="#" class="nav-link has-dropdown"><i class="fas fa-ellipsis-h"></i> <span>Utilities</span></a>
                  <ul class="dropdown-menu">
                    <li><a href="utilities-contact.html">Contact</a></li>
                    <li><a class="nav-link" href="utilities-invoice.html">Invoice</a></li>
                    <li><a href="utilities-subscribe.html">Subscribe</a></li>
                  </ul>
                </li>
                <li><a class="nav-link" href="credits.html"><i class="fas fa-pencil-ruler"></i> <span>Credits</span></a></li>
              </ul>

              <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
                <a href="https://getstisla.com/docs" class="btn btn-primary btn-lg btn-block btn-icon-split">
                  <i class="fas fa-rocket"></i> Documentation
                </a>
              </div>
          </aside>
        </div>

        <!-- Main Content -->
        <div class="main-content">
          <section class="section">
            <div class="section-header">
              <h1>Layout Skins</h1>
              <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="#">Layout</a></div>
                <div class="breadcrumb-item">Skins</div>
              </div>
            </div>

            <div class="section-body">
              <div class="row">
                <div class="col-12">
                  <div class="card card-large-icons custom-settings">
                      <div class="card-icon bg-primary text-white">
                          <i class="fas fa-fill-drip"></i>
                      </div>
                      <div class="card-body">
                          <h4>Skins</h4>
                          <p>Choose what skins that you wanna apply to the page.</p>

                          <div class="form-group mb-0" id="form-layout-skins">
                              <label class="form-label">Choose Skin</label>
                              <div class="row gutters-xs">
                                  <div class="col-auto">
                                      <label class="colorinput">
                                          <input name="layout-skin" type="radio" class="colorinput-input" checked />
                                          <span class="colorinput-color bg-default"></span>
                                      </label>
                                  </div>

                                  <div class="col-auto">
                                      <label class="colorinput">
                                          <input name="layout-skin" type="radio" data-value="cyan" class="colorinput-input" />
                                          <span class="colorinput-color bg-info"></span>
                                      </label>
                                  </div>

                                  <div class="col-auto">
                                      <label class="colorinput">
                                          <input name="layout-skin" type="radio" data-value="green" class="colorinput-input" />
                                          <span class="colorinput-color bg-success"></span>
                                      </label>
                                  </div>

                                  <div class="col-auto">
                                      <label class="colorinput">
                                          <input name="layout-skin" type="radio" data-value="orange" class="colorinput-input" />
                                          <span class="colorinput-color bg-warning"></span>
                                      </label>
                                  </div>

                                  <div class="col-auto">
                                      <label class="colorinput">
                                          <input name="layout-skin" type="radio" data-value="red" class="colorinput-input" />
                                          <span class="colorinput-color bg-danger"></span>
                                      </label>
                                  </div>

                                  <div class="col-auto">
                                      <label class="colorinput">
                                          <input name="layout-skin" type="radio" data-value="grey" class="colorinput-input" />
                                          <span class="colorinput-color bg-secondary"></span>
                                      </label>
                                  </div>

                                  <div class="col-auto">
                                      <label class="colorinput">
                                          <input name="layout-skin" type="radio" data-value="dark" class="colorinput-input" />
                                          <span class="colorinput-color bg-dark"></span>
                                      </label>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div>
                    <h2 class="section-title">Alerts</h2>
                    <p class="section-lead">
                      Provide contextual feedback messages for typical user actions with the handful of available and flexible alert messages.
                    </p>

                    <div class="row">
                      <div class="col-12">
                        <div class="card">
                          <div class="card-header">
                            <h4>Variation</h4>
                          </div>
                          <div class="card-body">
                            <div class="alert alert-primary">
                              This is a primary alert.
                            </div>

                            <div class="alert alert-primary alert-has-icon">
                              <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
                              <div class="alert-body">
                                <div class="alert-title">Primary</div>
                                This is a primary alert.
                              </div>
                            </div>

                            <div class="alert alert-primary">
                              <div class="alert-title">Primary</div>
                              This is a primary alert.
                            </div>

                            <div class="alert alert-primary alert-dismissible show fade">
                              <div class="alert-body">
                                <button class="close" data-dismiss="alert">
                                  <span>&times;</span>
                                </button>
                                This is a primary alert.
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div>
                    <h2 class="section-title">Breadcrumb</h2>
                    <p class="section-lead">
                      Indicate the current page’s location within a navigational hierarchy that automatically adds separators via CSS.
                    </p>

                    <div class="row">
                      <div class="col-12">
                        <div class="card">
                          <div class="card-header">
                            <h4>Variation</h4>
                          </div>
                          <div class="card-body">
                            <nav aria-label="breadcrumb">
                              <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Library</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Data</li>
                              </ol>

                              <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="fas fa-tachometer-alt"></i> Home</a></li>
                                <li class="breadcrumb-item"><a href="#"><i class="far fa-file"></i> Library</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><i class="fas fa-list"></i> Data</li>
                              </ol>

                              <ol class="breadcrumb bg-primary text-white-all">
                                <li class="breadcrumb-item"><a href="#"><i class="fas fa-tachometer-alt"></i> Home</a></li>
                                <li class="breadcrumb-item"><a href="#"><i class="far fa-file"></i> Library</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><i class="fas fa-list"></i> Data</li>
                              </ol>
                            </nav>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div>
                    <h2 class="section-title">Card Variants</h2>
                    <p class="section-lead">
                      Basically, the Bootstrap card can be given a color variant.
                    </p>

                    <div class="row">
                      <div class="col-12">
                        <div class="card card-primary">
                          <div class="card-header">
                            <h4>Card Header</h4>
                          </div>
                          <div class="card-body">
                            <p>Card <code>.card-primary</code></p>
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>

                  <div>
                    <h2 class="section-title">Form</h2>
                    <p class="section-lead">
                      Examples and usage guidelines for form control styles, layout options, and custom components for creating a wide variety of forms.
                    </p>

                    <div class="row">
                      <div class="col-12">
                        <div class="card">
                          <div class="card-header">
                            <h4>Variation</h4>
                          </div>
                          <div class="card-body">
                            <div class="section-title mt-0">Checkbox</div>
                            <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input" id="customCheck1">
                              <label class="custom-control-label" for="customCheck1">Check this custom checkbox</label>
                            </div>

                            <div class="section-title">Checkbox</div>
                            <div class="custom-control custom-radio">
                              <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                              <label class="custom-control-label" for="customRadio1">Toggle this custom radio</label>
                            </div>
                            <div class="custom-control custom-radio">
                              <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                              <label class="custom-control-label" for="customRadio2">Or toggle this other custom radio</label>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-6">
                  <div>
                    <h2 class="section-title">Badges</h2>
                    <p class="section-lead">
                      Examples for badges, our small count and labeling component.
                    </p>

                    <div class="row">
                      <div class="col-12">
                        <div class="card">
                          <div class="card-header">
                            <h4>Variation</h4>
                          </div>
                          <div class="card-body">
                            <div class="badges">
                              <span class="badge badge-primary">Primary</span>
                            </div>

                            <div class="badges">
                              <a href="#" class="badge badge-primary">Primary</a>
                            </div>

                            <div class="buttons">
                              <div class="section-title mt-0">Simple</div>
                              <button type="button" class="btn btn-primary">
                                Notifications <span class="badge badge-transparent">4</span>
                              </button>

                              <div class="section-title mt-0">Icons</div>
                              <button type="button" class="btn btn-primary btn-icon icon-left">
                                <i class="fas fa-plane"></i> Notifications <span class="badge badge-transparent">4</span>
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div>
                    <h2 class="section-title">Buttons</h2>
                    <p class="section-lead">
                      Use Bootstrap’s custom button styles for actions in forms, dialogs, and more with support for multiple sizes, states, and more.
                    </p>

                    <div class="row">
                      <div class="col-12">
                        <div class="card">
                          <div class="card-header">
                            <h4>Variation</h4>
                          </div>
                          <div class="card-body">
                            <div class="buttons">
                              <a href="#" class="btn btn-primary">Basic</a>
                              <a href="#" class="btn btn-info">Info</a>
                              <a href="#" class="btn btn-success">Success</a>
                              <a href="#" class="btn btn-warning">Warning</a>
                              <a href="#" class="btn btn-danger">Danger</a>
                              <a href="#" class="btn btn-dark">Dark</a>
                              <a href="#" class="btn btn-outline-primary">Outline</a>
                              <a href="#" class="btn btn-icon icon-left btn-primary"><i class="fas fa-palette"></i> Icon Button</a>
                              <a href="#" class="btn btn-icon btn-primary"><i class="fas fa-palette"></i></a>
                              <div>
                                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  Easy Dropdown
                                </button>
                                <div class="dropdown-menu">
                                  <a class="dropdown-item has-icon" href="#"><i class="far fa-heart"></i> Action</a>
                                  <a class="dropdown-item has-icon" href="#"><i class="far fa-file"></i> Another action</a>
                                  <a class="dropdown-item has-icon" href="#"><i class="far fa-clock"></i> Something else here</a>
                                  <a class="dropdown-item" href="#">Action</a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div>
                    <h2 class="section-title">Collapse</h2>
                    <p class="section-lead">
                      Toggle the visibility of content across your project with a few classes and our JavaScript plugins.
                    </p>

                    <div class="row">
                      <div class="col-12">
                        <div class="card">
                          <div class="card-header">
                            <h4>Variation</h4>
                          </div>
                          <div class="card-body">
                            <div class="section-title mt-0">Simple</div>
                            <div>
                              <p>
                                <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                                  Link with href
                                </a>
                                <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                  Button with data-target
                                </button>
                              </p>
                              <div class="collapse" id="collapseExample">
                                <p>
                                  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                                </p>
                              </div>
                            </div>

                            <div class="section-title mt-0">Accordion</div>
                            <div id="accordion">
                              <div class="accordion">
                                <div class="accordion-header" role="button" data-toggle="collapse" data-target="#panel-body-1" aria-expanded="true">
                                  <h4>Panel 1</h4>
                                </div>
                                <div class="accordion-body collapse show" id="panel-body-1" data-parent="#accordion">
                                  <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                </div>
                              </div>
                              <div class="accordion">
                                <div class="accordion-header" role="button" data-toggle="collapse" data-target="#panel-body-2">
                                  <h4>Panel 2</h4>
                                </div>
                                <div class="accordion-body collapse" id="panel-body-2" data-parent="#accordion">
                                  <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                </div>
                              </div>
                              <div class="accordion">
                                <div class="accordion-header" role="button" data-toggle="collapse" data-target="#panel-body-3">
                                  <h4>Panel 3</h4>
                                </div>
                                <div class="accordion-body collapse" id="panel-body-3" data-parent="#accordion">
                                  <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
        <footer class="main-footer">
          <div class="footer-left">
            Copyright &copy; 2018 <div class="bullet"></div> Design By <a href="https://nauval.in/">Muhamad Nauval Azhar</a>
          </div>
          <div class="footer-right">
            2.3.0
          </div>
        </footer>

        <div id="layout-skins-changer">
          <div class="skin-btn bg-primary" data-toggle="tooltip" data-placement="left" data-original-title="Choose layout skins">
            <i class="fas fa-palette animated"></i>
          </div>

          <a href="#" class="skin-btn bg-default" data-toggle="tooltip" data-placement="left" data-original-title="Default" data-value="default">
            <i class="fas fa-check ml-0"></i>
          </a>
          <a href="#" class="skin-btn skin-cyan" data-toggle="tooltip" data-placement="left" data-original-title="Layout Cyan" data-value="cyan">
            <i class="ml-0"></i>
          </a>
          <a href="#" class="skin-btn skin-green" data-toggle="tooltip" data-placement="left" data-original-title="Layout Green" data-value="green">
            <i class="ml-0"></i>
          </a>
          <a href="#" class="skin-btn skin-orange" data-toggle="tooltip" data-placement="left" data-original-title="Layout Orange" data-value="orange">
            <i class="ml-0"></i>
          </a>
          <a href="#" class="skin-btn skin-red" data-toggle="tooltip" data-placement="left" data-original-title="Layout Red" data-value="red">
            <i class="ml-0"></i>
          </a>
          <a href="#" class="skin-btn skin-grey" data-toggle="tooltip" data-placement="left" data-original-title="Layout Grey" data-value="grey">
            <i class="ml-0"></i>
          </a>
          <a href="#" class="skin-btn skin-dark" data-toggle="tooltip" data-placement="left" data-original-title="Layout Dark" data-value="dark">
            <i class="ml-0"></i>
          </a>
        </div>
      </div>
    </div>

    <script src="{{ asset('js/app.js') }}?{{ uniqid() }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="{{ asset('assets/js/stisla.js') }}"></script>
    <script src="{{ asset('assets/js/scripts.js') }}"></script>
    <script src="{{ asset('js/layout-skin.js') }}"></script>
    <script src="{{ asset('assets/modules/datatables/datatables.min.js') }}"></script>
    <script src="{{ asset('assets/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/modules/izitoast/js/iziToast.min.js') }}"></script>
    <script src="{{ asset('assets/modules/select2/dist/js/select2.min.js') }}"></script>
    <script src="{{ asset('assets/modules/nestable/js/jquery.nestable.js') }}"></script>
    <script src="{{ asset('assets/modules/summernote/summernote-bs4.js') }}"></script>
    <script src="{{ asset('assets/modules/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous"></script>
</body>
</html>
