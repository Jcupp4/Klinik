<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from polygons.space/neo/theme/templates/admin/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 17 Jul 2025 07:44:26 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive Admin Dashboard Template">
    <meta name="keywords" content="admin,dashboard">
    <meta name="author" content="stacks">
    <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Neo - Responsive Admin Dashboard Template</title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,700,800&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/font-awesome/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/perfectscroll/perfect-scrollbar.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/pace/pace.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/apexcharts/apexcharts.css') }}" rel="stylesheet">


    <!-- Theme Styles -->
    <link href="{{ asset('assets/css/main.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    <!-- jQuery (required by DataTables) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- DataTables core CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css" />

    <!-- (Optional) If you want Bootstrap-styled tables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css" />

    <!-- Neo-theme overrides (if you have them locally, point to your build) -->
    <link rel="stylesheet" href="path/to/neo-admin/assets/vendor/datatables/css/dataTables.bootstrap5.css" />

</head>
<body class="page-sidebar-collapsed">
    <div class="page-container">
        <div class="page-sidebar">
            <a class="logo" href="#">Klinik</a>
            <ul class="list-unstyled accordion-menu">
                <li>
                    <a href="/dashboard"><i data-feather="bar-chart-2"></i>Dashboard</a>
                </li>
                <li>
                    <a href="#"><i data-feather="users"></i>Pasien</a>
                    <ul class="">
                        <li><a href="{{ route ('pasien.form')}}" class="active">- Registration Pasien</a></li>
                        <li><a href="{{ route ('pasien.table')}}">- Table Pasien</a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{route ('icd.form')}}"><i data-feather="code"></i>Daftar Code</a>
                </li>
                <li>
                    <a href="{{route ('sesi.create')}}"><i data-feather="code"></i>Sesi Berobat</a>
                </li>
                <li>
                    <a href=""><i data-feather="activity"></i>Diagnosa</a>
                </li>
            </ul>
            <a href="#" id="sidebar-collapsed-toggle"><i data-feather="arrow-right"></i></a>
        </div>
        <div class="page-content">
            <div class="page-header">
                <nav class="navbar navbar-expand-lg d-flex justify-content-between">
                    <div class="header-title flex-fill">
                        <a href="#" id="sidebar-toggle"><i data-feather="arrow-left"></i></a>
                        <h5>Dashboard</h5>
                    </div>
                    <div class="header-search">
                        <form>
                            <input class="form-control" type="text" placeholder="Type something.." aria-label="Search">
                            <a href="#" class="close-search"><i data-feather="x"></i></a>
                        </form>
                    </div>
                    <div class="flex-fill" id="headerNav">
                        <ul class="navbar-nav">
                            <li class="nav-item d-md-block d-lg-none">
                                <a class="nav-link" href="#" id="toggle-search"><i data-feather="search"></i></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link activity-trigger" href="#" id="activity-sidebar-toggle"><i data-feather="grid"></i></a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link notifications-dropdown" href="#" id="notificationsDropDown" role="button" data-bs-toggle="dropdown" aria-expanded="false">3<div class="spinner-grow text-danger" role="status">
                                        <span class="visually-hidden">Loading...</span>
                                    </div></a>
                                <div class="dropdown-menu dropdown-menu-end notif-drop-menu" aria-labelledby="notificationsDropDown">
                                    <h6 class="dropdown-header">Notifications</h6>
                                    <a href="#">
                                        <div class="header-notif">
                                            <div class="notif-image">
                                                <span class="notification-badge bg-info text-white">
                                                    <i class="fas fa-bullhorn"></i>
                                                </span>
                                            </div>
                                            <div class="notif-text">
                                                <p class="bold-notif-text">faucibus dolor in commodo lectus mattis</p>
                                                <small>19:00</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div class="header-notif">
                                            <div class="notif-image">
                                                <span class="notification-badge bg-primary text-white">
                                                    <i class="fas fa-bolt"></i>
                                                </span>
                                            </div>
                                            <div class="notif-text">
                                                <p class="bold-notif-text">faucibus dolor in commodo lectus mattis</p>
                                                <small>18:00</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div class="header-notif">
                                            <div class="notif-image">
                                                <span class="notification-badge bg-success text-white">
                                                    <i class="fas fa-at"></i>
                                                </span>
                                            </div>
                                            <div class="notif-text">
                                                <p>faucibus dolor in commodo lectus mattis</p>
                                                <small>yesterday</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div class="header-notif">
                                            <div class="notif-image">
                                                <span class="notification-badge">
                                                    <img src="{{ asset('assets/images/avatars/avatar2.jpg') }}" alt="">
                                                </span>
                                            </div>
                                            <div class="notif-text">
                                                <p>faucibus dolor in commodo lectus mattis</p>
                                                <small>yesterday</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div class="header-notif">
                                            <div class="notif-image">
                                                <span class="notification-badge">
                                                    <img src="{{ asset('assets/images/avatars/avatar5.jpg') }}" alt="">
                                                </span>
                                            </div>
                                            <div class="notif-text">
                                                <p>faucibus dolor in commodo lectus mattis</p>
                                                <small>yesterday</small>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link profile-dropdown" href="#" id="profileDropDown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><img src="{{ asset('assets/images/avatars/avatar1.jpg') }}" alt=""></a>
                                <div class="dropdown-menu dropdown-menu-end profile-drop-menu" aria-labelledby="profileDropDown">
                                    <a class="dropdown-item" href="#"><i data-feather="user"></i>Profile</a>
                                    <a class="dropdown-item" href="#"><i data-feather="inbox"></i>Messages</a>
                                    <a class="dropdown-item" href="#"><i data-feather="edit"></i>Activities<span class="badge rounded-pill bg-success">12</span></a>
                                    <a class="dropdown-item" href="#"><i data-feather="check-circle"></i>Tasks</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#"><i data-feather="settings"></i>Settings</a>
                                    <a class="dropdown-item" href="#"><i data-feather="unlock"></i>Lock</a>
                                    <a class="dropdown-item" href="/logout"><i data-feather="log-out"></i>Logout</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="main-wrapper">

                @yield('content')
            </div>
            <div class="page-footer">

                <a href="crypto.html" class="page-footer-item page-footer-item-right">Crypto<i data-feather="arrow-right" class="footer-right"></i></a>
            </div>
        </div>
    </div>

    <div class="activity-sidebar-overlay"></div>
    <div class="activity-sidebar">
        <a href="#" id="activity-sidebar-close"><i class="material-icons">close</i></a>
        <div class="activity-header">
            <h5>Activity Logs</h5>
        </div>
        <div class="activity-body">
            <ul class="activity-list list-unstyled">
                <li class="activity-item">
                    <div class="activity-icon"><i class="material-icons">add</i></div>
                    <div class="activity-text">Ann Green uploaded new item
                        <span>This item has to be reviewed, moderators will check it soon.</span>
                    </div>
                    <div class="activity-helper">45min ago</div>
                </li>
                <li class="activity-item activity-info">
                    <div class="activity-icon"><i class="material-icons">code</i></div>
                    <div class="activity-text">John Doe made changes to create-invoice.js
                        <span>57 lines of code added, 0 removals, 0 errors, 6 warnings</span>
                    </div>
                    <div class="activity-helper">3h ago</div>
                </li>
                <li class="activity-item activity-danger">
                    <div class="activity-icon"><i class="material-icons">error_outline</i></div>
                    <div class="activity-text">Can't retrieve data from server
                        <span>Server is not responding, please contact provider</span>
                    </div>
                    <div class="activity-helper">6h ago</div>
                </li>
                <li class="activity-item">
                    <div class="activity-icon"><i class="material-icons">done</i></div>
                    <div class="activity-text">Files Uploaded
                        <span>2 new files uploaded</span>
                        <div class="mail-attachment-files">
                            <div class="card">
                                <img src="{{ asset('assets/images/card2.jpg') }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">image.jpg</h5>
                                    <p class="card-text text-secondary">305 KB</p>
                                </div>
                            </div>
                            <div class="card">
                                <img src="{{ asset('assets/images/card1.jpg') }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">image2.jpg</h5>
                                    <p class="card-text text-secondary">400 KB</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="activity-helper">8h ago</div>
                </li>
            </ul>
        </div>
    </div>

    <div class="search-results">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="search-results-header">
                        <h5>Search Results</h5>
                        <a href="#" id="closeSearch"><i class="material-icons">close</i></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <ul class="search-result-list user-search">
                        <li>
                            <img src="{{ asset('assets/images/avatars/avatar2.jpg') }}" alt="">
                            <p>John Doe<br>(Works at <span class="search-input-value">hj</span>)</p>
                        </li>
                        <li>
                            <img src="{{ asset('assets/images/avatars/avatar3.jpg') }}" alt="">
                            <p>Anna doe<br>(Lives in <span class="search-input-value">hj</span>)</p>
                        </li>
                        <li>
                            <img src="{{ asset('assets/images/avatars/avatar4.jpg') }}" alt="">
                            <p>People near:<br><span class="search-input-value">hj</span></p>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="search-result-list social-search">
                        <li>
                            <div class="social-search-icon facebook-icon-bg">
                                <i class="fab fa-facebook-f"></i>
                            </div>
                            <div class="social-search-text">
                                <p><span class="search-input-value">hj</span> on Facebook</p>
                            </div>
                        </li>
                        <li>
                            <div class="social-search-icon twitter-icon-bg">
                                <i class="fab fa-twitter"></i>
                            </div>
                            <div class="social-search-text">
                                <p><span class="search-input-value">hj</span> on Twitter</p>
                            </div>
                        </li>
                        <li>
                            <div class="social-search-icon google-icon-bg">
                                <i class="fab fa-google"></i>
                            </div>
                            <div class="social-search-text">
                                <p><span class="search-input-value">hj</span> on Google</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="search-result-list article-search">
                        <li>
                            <p>Lorem ipsum dolor sit amet, consectetur <span class="search-input-value">hj</span> adipiscing elit, sunt in culpa quifdaasd quis.</p>
                            <span class="search-article-date">06 Jul, 2021</span>
                        </li>
                        <li>
                            <p>Duis non semper sapien. Morbi imperdiet velit in <span class="search-input-value">hj</span> bibendum lobortis. Integer arcu urna, elementum in pellentesque nec, finibus at nisi.</p>
                            <span class="search-article-date">19 Mar, 2017</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Javascripts -->
    <script src="{{ asset('assets/plugins/jquery/jquery-3.4.1.min.js') }}"></script>
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="https://unpkg.com/feather-icons"></script>
    <script src="{{ asset('assets/plugins/perfectscroll/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/pace/pace.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/sparkline/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.min.js') }}"></script>
    <script src="{{ asset('assets/js/pages/dashboard.js') }}"></script>
</body>
<!-- DataTables core JS -->
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>

<!-- (Optional) Bootstrap integration JS -->
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>

<!-- Your initialization script -->

<!-- Mirrored from polygons.space/neo/theme/templates/admin/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 17 Jul 2025 07:45:06 GMT -->
</html>
