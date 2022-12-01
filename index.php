<?php
require ("./config.php");
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="favicon.ico">
  <title>Dashboard Lingkar Cafe</title>
  <!-- Simple bar CSS -->
  <link rel="stylesheet" href="css/simplebar.css">
  <!-- Fonts CSS -->
  <link
    href="https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">
  <!-- Icons CSS -->
  <link rel="stylesheet" href="css/feather.css">
  <!-- Date Range Picker CSS -->
  <link rel="stylesheet" href="css/daterangepicker.css">
  <!-- App CSS -->
  <link rel="stylesheet" href="css/app-light.css" id="lightTheme">
  <link rel="stylesheet" href="css/app-dark.css" id="darkTheme">
</head>

<body class="vertical  dark  ">
  <div class="wrapper">
    <nav class="topnav navbar navbar-light">
      <button type="button" class="navbar-toggler text-muted mt-2 p-0 mr-3 collapseSidebar">
        <i class="fe fe-menu navbar-toggler-icon"></i>
      </button>
      <form class="form-inline mr-auto searchform text-muted">
        <input class="form-control mr-sm-2 bg-transparent border-0 pl-4 text-muted" type="search"
          placeholder="Type something..." aria-label="Search">
      </form>
      <ul class="nav">



        <li class="nav-item">
            <a class="nav-link text-muted my-2" href="./index.php" id="modeSwitcher" data-mode="dark">
              <i class="fe fe-sun fe-16"></i>
            </a>
          </li>



        <li class="nav-item">
          <a class="nav-link text-muted my-2" href="./#" data-toggle="modal" data-target=".modal-shortcut">
            <span class="fe fe-grid fe-16"></span>
          </a>
        </li>
        <li class="nav-item nav-notif">
          <a class="nav-link text-muted my-2" href="./#" data-toggle="modal" data-target=".modal-notif">
            <span class="fe fe-bell fe-16"></span>
            <span class="dot dot-md bg-success"></span>
          </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-muted pr-0" href="#" id="navbarDropdownMenuLink" role="button"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="avatar avatar-sm mt-2">
              <img src="./assets/avatars/face-1.jpg" alt="..." class="avatar-img rounded-circle">
            </span>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="#">Profile</a>
            <a class="dropdown-item" href="#">Settings</a>
            <a class="dropdown-item" href="#">Activities</a>
          </div>
        </li>
      </ul>
    </nav>
    <aside class="sidebar-left border-right bg-white shadow" id="leftSidebar" data-simplebar>
      <a href="#" class="btn collapseSidebar toggle-btn d-lg-none text-muted ml-2 mt-3" data-toggle="toggle">
        <i class="fe fe-x"><span class="sr-only"></span></i>
      </a>
      <nav class="vertnav navbar navbar-light">
        <!-- nav bar -->
        <div class="w-100 mb-4 d-flex">
          <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="./index.html">
            <svg version="1.1" id="logo" class="navbar-brand-img brand-sm" xmlns="http://www.w3.org/2000/svg"
              xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 120 120" xml:space="preserve">
              <g>
                <polygon class="st0" points="78,105 15,105 24,87 87,87 	" />
                <polygon class="st0" points="96,69 33,69 42,51 105,51 	" />
                <polygon class="st0" points="78,33 15,33 24,15 87,15 	" />
              </g>
            </svg>
          </a>
        </div>
        <!-- SIDEBAR -->
        <ul class="navbar-nav flex-fill w-100 mb-2">
          <li class="nav-item w-100">
            <a class="nav-link" href="index.php">
              <br>
              <i class="fe fe-home fe-16"></i>
              <span class="ml-3 item-text">Dashboard</span>
              <br>
              <br>
            </a>
          </li>
        </ul>
        <p class="text-muted nav-heading mt-4 mb-1">
          <span>CRUD</span>
        </p>
        <ul class="navbar-nav flex-fill w-100 mb-2">
          <li class="nav-item dropdown">
            <a href="#ui-elements" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
              <i class="fe fe-box fe-16"></i>
              <span class="ml-3 item-text">Tambah Data</span>
            </a>
            <ul class="collapse list-unstyled pl-4 w-100" id="ui-elements">
              <li class="nav-item">
                <a class="nav-link pl-3" href="./karyawan.php"><span class="ml-1 item-text">karyawan</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link pl-3" href="./user.php"><span class="ml-1 item-text">User</span>
                </a>
              </li>

            </ul>
          </li>
          <li class="nav-item dropdown">
            <a href="#forms" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
              <i class="fe fe-credit-card fe-16"></i>
              <span class="ml-3 item-text">Tambah Menu</span>
            </a>
            <ul class="collapse list-unstyled pl-4 w-100" id="forms">
              <li class="nav-item">
                <a class="nav-link pl-3" href="./makanan.php"><span class="ml-1 item-text">Makanan</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link pl-3" href="./minuman.php"><span class="ml-1 item-text">Minuman</span></a>
              </li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a href="#tables" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
              <i class="fe fe-grid fe-16"></i>
              <span class="ml-3 item-text">Barang</span>
            </a>
            <ul class="collapse list-unstyled pl-4 w-100" id="tables">
              <li class="nav-item">
                <a class="nav-link pl-3" href="./barang_in.php"><span class="ml-1 item-text">Barang Masuk</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link pl-3" href="./barang_out.php"><span class="ml-1 item-text">Barang Keluar</span></a>
              </li>
            </ul>
          </li>
          <li class="nav-item dropdown">
              <a href="#contact" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                <i class="fe fe-book fe-16"></i>
                <span class="ml-3 item-text">Income</span>
              </a>
              <ul class="collapse list-unstyled pl-4 w-100" id="contact">
                <a class="nav-link pl-3" href="./income_harian.php"><span class="ml-1">Penghasilan Perhari</span></a>
                <a class="nav-link pl-3" href="./income_bulanan.php"><span class="ml-1">Penghasilan Perbulan</span></a>
              </ul>
            </li>
          <li class="nav-item dropdown">
            <a href="#charts" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
              <i class="fe fe-pie-chart fe-16"></i>
              <span class="ml-3 item-text">Absen</span>
            </a>
            <ul class="collapse list-unstyled pl-4 w-100" id="charts">
              <li class="nav-item">
                <a class="nav-link pl-3" href="./absen.php"><span class="ml-1 item-text">Karyawan</span></a>
              </li>
              
            </ul>
            <p class="text-muted nav-heading mt-4 mb-1">
              <span> LANDING PAGE</span>
            </p>
          <li class="nav-item w-100">
            <a class="nav-link" href="https://www.instagram.com/lingkar.cafe_/">
              <br>
              <i class="fe fe-external-link"></i>
              <span class="ml-3 item-text">Lingkar Cafe</span>
            <br>
            <br>  
            </a>
            <p class="text-muted nav-heading mt-4 mb-1">
          <span> USER SETTINGS</span>
        </p>
          </li>
          </li>
        </ul>
        <ul class="navbar-nav flex-fill w-100 mb-2">
          <li class="nav-item dropdown">
            <a href="#user" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
              <i class="fe fe-user"></i>
              <span class="ml-3 item-text">User Setting</span><span class="sr-only">(current)</span>
            </a>
            <ul class="collapse list-unstyled pl-4 w-100" id="user">
              <li class="nav-item active">
                <a class="nav-link pl-3" href="./accountsetting.php"><span class="ml-1 item-text">Account</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link pl-3" href="./profil.php"><span
                    class="ml-1 item-text">Profile</span></a>
              </li>
            </ul>
          <li class="nav-item w-100">
            <a class="nav-link" href="login.php">
              <i class="fe fe-power"></i>
              <span class="ml-3 item-text">Log Out</span>
            </a>
          </li>
          </li>
        </ul>



    </aside>
    <!-- END DARI SIDEBAR -->
    <main role="main" class="main-content">
      <div class="container-fluid">
        <div class="row justify-content-center">
          <div class="col-12">
            <div class="row align-items-center mb-2">
              <div class="col">
                <h2 class="h5 page-title">Welcome!</h2>
              </div>
              <div class="col-auto">
                <form class="form-inline">
                  <div class="form-group d-none d-lg-inline">
                    <label for="reportrange" class="sr-only">Date Ranges</label>
                    <div id="reportrange" class="px-2 py-2 text-muted">
                      <span class="small"></span>
                    </div>
                  </div>
                  <div class="form-group">
                    <button type="button" class="btn btn-sm"><span
                        class="fe fe-refresh-ccw fe-16 text-muted"></span></button>
                    <button type="button" class="btn btn-sm mr-2"><span
                        class="fe fe-filter fe-16 text-muted"></span></button>
                  </div>
                </form>
              </div>
            </div>
            <!-- widgets -->
            <div class="row my-4">
              <div class="col-md-4">
                <div class="card shadow mb-4">
                  <div class="card-body">
                    <div class="row align-items-center">
                      <div class="col">
                        <small class="text-muted mb-1">Page Views</small>
                        <h3 class="card-title mb-0">1168</h3>
                        <p class="small text-muted mb-0"><span
                            class="fe fe-arrow-down fe-12 text-danger"></span><span>-18.9% Last week</span></p>
                      </div>
                      <div class="col-4 text-right">
                        <span class="sparkline inlineline"></span>
                      </div>
                    </div> <!-- /. row -->
                  </div> <!-- /. card-body -->
                </div> <!-- /. card -->
              </div> <!-- /. col -->
              <div class="col-md-4">
                <div class="card shadow mb-4">
                  <div class="card-body">
                    <div class="row align-items-center">
                      <div class="col">
                        <small class="text-muted mb-1">Conversion</small>
                        <h3 class="card-title mb-0">68</h3>
                        <p class="small text-muted mb-0"><span
                            class="fe fe-arrow-up fe-12 text-warning"></span><span>+1.9% Last week</span></p>
                      </div>
                      <div class="col-4 text-right">
                        <span class="sparkline inlinepie"></span>
                      </div>
                    </div> <!-- /. row -->
                  </div> <!-- /. card-body -->
                </div> <!-- /. card -->
              </div> <!-- /. col -->
              <div class="col-md-4">
                <div class="card shadow mb-4">
                  <div class="card-body">
                    <div class="row align-items-center">
                      <div class="col">
                        <small class="text-muted mb-1">Visitors</small>
                        <h3 class="card-title mb-0">108</h3>
                        <p class="small text-muted mb-0"><span
                            class="fe fe-arrow-up fe-12 text-success"></span><span>37.7% Last week</span></p>
                      </div>
                      <div class="col-4 text-right">
                        <span class="sparkline inlinebar"></span>
                      </div>
                    </div> <!-- /. row -->
                  </div> <!-- /. card-body -->
                </div> <!-- /. card -->
              </div> <!-- /. col -->
            </div> <!-- end section -->
            <!-- linechart -->
            <div class="my-4">
              <div id="lineChart"></div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="card shadow mb-4">
                  <div class="card-header">
                    <strong>Goal</strong>
                  </div>
                  <div class="card-body px-4">
                    <div class="row border-bottom">
                      <div class="col-4 text-center mb-3">
                        <p class="mb-1 small text-muted">Completions</p>
                        <span class="h3">26</span><br />
                        <span class="small text-muted">+20%</span>
                        <span class="fe fe-arrow-up text-success fe-12"></span>
                      </div>
                      <div class="col-4 text-center mb-3">
                        <p class="mb-1 small text-muted">Goal Value</p>
                        <span class="h3">$260</span><br />
                        <span class="small text-muted">+6%</span>
                        <span class="fe fe-arrow-up text-success fe-12"></span>
                      </div>
                      <div class="col-4 text-center mb-3">
                        <p class="mb-1 small text-muted">Conversion</p>
                        <span class="h3">6%</span><br />
                        <span class="small text-muted">-2%</span>
                        <span class="fe fe-arrow-down text-danger fe-12"></span>
                      </div>
                    </div>
                    <table class="table table-borderless mt-3 mb-1 mx-n1 table-sm">
                      <thead>
                        <tr>
                          <th class="w-50">Goal</th>
                          <th class="text-right">Conversion</th>
                          <th class="text-right">Completions</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Checkout</td>
                          <td class="text-right">5%</td>
                          <td class="text-right">260</td>
                        </tr>
                        <tr>
                          <td>Add to Cart</td>
                          <td class="text-right">55%</td>
                          <td class="text-right">1260</td>
                        </tr>
                        <tr>
                          <td>Contact</td>
                          <td class="text-right">18%</td>
                          <td class="text-right">460</td>
                        </tr>
                      </tbody>
                    </table>
                  </div> <!-- .card-body -->
                </div> <!-- .card -->
              </div> <!-- .col -->
              <div class="col-md-6">
                <div class="card shadow mb-4">
                  <div class="card-header">
                    <strong class="card-title">Top Selling</strong>
                    <a class="float-right small text-muted" href="#!">View all</a>
                  </div>
                  <div class="card-body">
                    <div class="list-group list-group-flush my-n3">
                      <div class="list-group-item">
                        <div class="row align-items-center">
                          <div class="col-3 col-md-2">
                            <img src="./assets/products/p1.jpg" alt="..." class="thumbnail-sm">
                          </div>
                          <div class="col">
                            <strong>Fusion Backpack</strong>
                            <div class="my-0 text-muted small">Gear, Bags</div>
                          </div>
                          <div class="col-auto">
                            <strong>+85%</strong>
                            <div class="progress mt-2" style="height: 4px;">
                              <div class="progress-bar" role="progressbar" style="width: 85%" aria-valuenow="85"
                                aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="list-group-item">
                        <div class="row align-items-center">
                          <div class="col-3 col-md-2">
                            <img src="./assets/products/p2.jpg" alt="..." class="thumbnail-sm">
                          </div>
                          <div class="col">
                            <strong>Luma hoodies</strong>
                            <div class="my-0 text-muted small">Jackets, Men</div>
                          </div>
                          <div class="col-auto">
                            <strong>+75%</strong>
                            <div class="progress mt-2" style="height: 4px;">
                              <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75"
                                aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="list-group-item">
                        <div class="row align-items-center">
                          <div class="col-3 col-md-2">
                            <img src="./assets/products/p3.jpg" alt="..." class="thumbnail-sm">
                          </div>
                          <div class="col">
                            <strong>Luma shorts</strong>
                            <div class="my-0 text-muted small">Shorts, Men</div>
                          </div>
                          <div class="col-auto">
                            <strong>+62%</strong>
                            <div class="progress mt-2" style="height: 4px;">
                              <div class="progress-bar" role="progressbar" style="width: 62%" aria-valuenow="62"
                                aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="list-group-item">
                        <div class="row align-items-center">
                          <div class="col-3 col-md-2">
                            <img src="./assets/products/p4.jpg" alt="..." class="thumbnail-sm">
                          </div>
                          <div class="col">
                            <strong>Brown Trousers</strong>
                            <div class="my-0 text-muted small">Trousers, Women</div>
                          </div>
                          <div class="col-auto">
                            <strong>+24%</strong>
                            <div class="progress mt-2" style="height: 4px;">
                              <div class="progress-bar" role="progressbar" style="width: 24%" aria-valuenow="24"
                                aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div> <!-- / .list-group -->
                  </div> <!-- / .card-body -->
                </div> <!-- .card -->
              </div> <!-- .col -->
            </div> <!-- .row -->
            <div class="row">
              <div class="col-md-4">
                <div class="card shadow eq-card  mb-4">
                  <div class="card-header">
                    <strong>Region</strong>
                  </div>
                  <div class="card-body">
                    <div class="map-box my-5"
                      style="position:relative; max-width: 320px; max-height: 200px; margin:0 auto;">
                      <div id="dataMapUSA"></div>
                    </div>
                    <div class="row align-items-bottom my-2">
                      <div class="col">
                        <p class="mb-0">France</p>
                        <span class="my-0 text-muted small">+10%</span>
                      </div>
                      <div class="col-auto text-right">
                        <p class="mb-0">118</p>
                        <div class="progress mt-2" style="height: 4px;">
                          <div class="progress-bar" role="progressbar" style="width: 85%" aria-valuenow="85"
                            aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </div>
                    </div>
                    <div class="row align-items-center my-2">
                      <div class="col">
                        <p class="mb-0">Netherlands</p>
                        <span class="my-0 text-muted small">+0.6%</span>
                      </div>
                      <div class="col-auto text-right">
                        <p class="mb-0">1008</p>
                        <div class="progress mt-2" style="height: 4px;">
                          <div class="progress-bar" role="progressbar" style="width: 85%" aria-valuenow="85"
                            aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </div>
                    </div>
                    <div class="row align-items-center my-2">
                      <div class="col">
                        <p class="mb-0">Italy</p>
                        <span class="my-0 text-muted small">+1.6%</span>
                      </div>
                      <div class="col-auto text-right">
                        <p class="mb-0">67</p>
                        <div class="progress mt-2" style="height: 4px;">
                          <div class="progress-bar" role="progressbar" style="width: 85%" aria-valuenow="85"
                            aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </div>
                    </div>
                    <div class="row align-items-center my-2">
                      <div class="col">
                        <p class="mb-0">Spain</p>
                        <span class="my-0 text-muted small">+118%</span>
                      </div>
                      <div class="col-auto text-right">
                        <p class="mb-0">186</p>
                        <div class="progress mt-2" style="height: 4px;">
                          <div class="progress-bar" role="progressbar" style="width: 85%" aria-valuenow="85"
                            aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div> <!-- .col -->
              <div class="col-md-4">
                <div class="card shadow eq-card mb-4">
                  <div class="card-header">
                    <strong class="card-title">Traffic</strong>
                    <a class="float-right small text-muted" href="#!">View all</a>
                  </div>
                  <div class="card-body">
                    <div class="chart-box mb-3" style="min-height:180px;">
                      <div id="customAngle"></div>
                    </div> <!-- .col -->
                    <div class="mx-auto">
                      <div class="row align-items-center mb-2">
                        <div class="col">
                          <p class="mb-0">Direct</p>
                          <span class="my-0 text-muted small">+10%</span>
                        </div>
                        <div class="col-auto text-right">
                          <p class="mb-0">218</p>
                          <span class="dot dot-md bg-success"></span>
                        </div>
                      </div>
                      <div class="row align-items-center mb-2">
                        <div class="col">
                          <p class="mb-0">Organic Search</p>
                          <span class="my-0 text-muted small">+0.6%</span>
                        </div>
                        <div class="col-auto text-right">
                          <p class="mb-0">1002</p>
                          <span class="dot dot-md bg-warning"></span>
                        </div>
                      </div>
                      <div class="row align-items-center mb-2">
                        <div class="col">
                          <p class="mb-0">Referral</p>
                          <span class="my-0 text-muted small">+1.6%</span>
                        </div>
                        <div class="col-auto text-right">
                          <p class="mb-0">67</p>
                          <span class="dot dot-md bg-primary"></span>
                        </div>
                      </div>
                      <div class="row align-items-center">
                        <div class="col">
                          <p class="mb-0">Social</p>
                          <span class="my-0 text-muted small">+118%</span>
                        </div>
                        <div class="col-auto text-right">
                          <p class="mb-0">386</p>
                          <span class="dot dot-md bg-secondary"></span>
                        </div>
                      </div>
                    </div>
                  </div> <!-- .card-body -->
                </div> <!-- .card -->
              </div> <!-- .col-md -->
              <div class="col-md-4">
                <div class="card shadow eq-card mb-4">
                  <div class="card-header">
                    <strong>Browsers</strong>
                  </div>
                  <div class="card-body">
                    <div class="chart-box mt-3 mb-5">
                      <div id="radarChartWidget"></div>
                    </div> <!-- .col -->
                    <div class="mx-auto">
                      <div class="row align-items-center my-2">
                        <div class="col-6 col-xl-3 my-3">
                          <span class="mb-0">Safari</span>
                          <div class="progress my-2" style="height: 4px;">
                            <div class="progress-bar" role="progressbar" style="width: 10%" aria-valuenow="10"
                              aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                        <div class="col-6 col-xl-3 my-3 text-right">
                          <span>118</span><br />
                          <span class="my-0 text-muted small">+10%</span>
                        </div>
                        <div class="col-6 col-xl-3 my-3">
                          <span class="mb-0">Chrome</span>
                          <div class="progress my-2" style="height: 4px;">
                            <div class="progress-bar" role="progressbar" style="width: 36%" aria-valuenow="36"
                              aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                        <div class="col-6 col-xl-3 my-3 text-right">
                          <span>1008</span><br />
                          <span class="my-0 text-muted small">+36%</span>
                        </div>
                        <div class="col-6 col-xl-3 my-3">
                          <span class="mb-0">Opera</span>
                          <div class="progress my-2" style="height: 4px;">
                            <div class="progress-bar" role="progressbar" style="width: 85%" aria-valuenow="85"
                              aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                        <div class="col-6 col-xl-3 my-3 text-right">
                          <span>67</span><br />
                          <span class="my-0 text-muted small">+1.6%</span>
                        </div>
                        <div class="col-6 col-xl-3 my-3">
                          <span class="mb-0">Edge</span>
                          <div class="progress my-2" style="height: 4px;">
                            <div class="progress-bar" role="progressbar" style="width: 85%" aria-valuenow="85"
                              aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                        <div class="col-6 col-xl-3 my-3 text-right">
                          <span>186</span><br />
                          <span class="my-0 text-muted small">+118%</span>
                        </div>
                      </div>
                    </div>
                  </div> <!-- .card-body -->
                </div> <!-- .card -->
              </div> <!-- .col -->
            </div>
          </div> <!-- /.col -->
        </div> <!-- .row -->
      </div> <!-- .container-fluid -->
      <div class="modal fade modal-notif modal-slide" tabindex="-1" role="dialog" aria-labelledby="defaultModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="defaultModalLabel">Notifications</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="list-group list-group-flush my-n3">
                <div class="list-group-item bg-transparent">
                  <div class="row align-items-center">
                    <div class="col-auto">
                      <span class="fe fe-box fe-24"></span>
                    </div>
                    <div class="col">
                      <small><strong>Package has uploaded successfull</strong></small>
                      <div class="my-0 text-muted small">Package is zipped and uploaded</div>
                      <small class="badge badge-pill badge-light text-muted">1m ago</small>
                    </div>
                  </div>
                </div>
                <div class="list-group-item bg-transparent">
                  <div class="row align-items-center">
                    <div class="col-auto">
                      <span class="fe fe-download fe-24"></span>
                    </div>
                    <div class="col">
                      <small><strong>Widgets are updated successfull</strong></small>
                      <div class="my-0 text-muted small">Just create new layout Index, form, table</div>
                      <small class="badge badge-pill badge-light text-muted">2m ago</small>
                    </div>
                  </div>
                </div>
                <div class="list-group-item bg-transparent">
                  <div class="row align-items-center">
                    <div class="col-auto">
                      <span class="fe fe-inbox fe-24"></span>
                    </div>
                    <div class="col">
                      <small><strong>Notifications have been sent</strong></small>
                      <div class="my-0 text-muted small">Fusce dapibus, tellus ac cursus commodo</div>
                      <small class="badge badge-pill badge-light text-muted">30m ago</small>
                    </div>
                  </div> <!-- / .row -->
                </div>
                <div class="list-group-item bg-transparent">
                  <div class="row align-items-center">
                    <div class="col-auto">
                      <span class="fe fe-link fe-24"></span>
                    </div>
                    <div class="col">
                      <small><strong>Link was attached to menu</strong></small>
                      <div class="my-0 text-muted small">New layout has been attached to the menu</div>
                      <small class="badge badge-pill badge-light text-muted">1h ago</small>
                    </div>
                  </div>
                </div> <!-- / .row -->
              </div> <!-- / .list-group -->
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary btn-block" data-dismiss="modal">Clear All</button>
            </div>
          </div>
        </div>
      </div>
      <div class="modal fade modal-shortcut modal-slide" tabindex="-1" role="dialog" aria-labelledby="defaultModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="defaultModalLabel">Shortcuts</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body px-5">
              <div class="row align-items-center">
                <div class="col-6 text-center">
                  <div class="squircle bg-success justify-content-center">
                    <i class="fe fe-cpu fe-32 align-self-center text-white"></i>
                  </div>
                  <p>Control area</p>
                </div>
                <div class="col-6 text-center">
                  <div class="squircle bg-primary justify-content-center">
                    <i class="fe fe-activity fe-32 align-self-center text-white"></i>
                  </div>
                  <p>Activity</p>
                </div>
              </div>
              <div class="row align-items-center">
                <div class="col-6 text-center">
                  <div class="squircle bg-primary justify-content-center">
                    <i class="fe fe-droplet fe-32 align-self-center text-white"></i>
                  </div>
                  <p>Droplet</p>
                </div>
                <div class="col-6 text-center">
                  <div class="squircle bg-primary justify-content-center">
                    <i class="fe fe-upload-cloud fe-32 align-self-center text-white"></i>
                  </div>
                  <p>Upload</p>
                </div>
              </div>
              <div class="row align-items-center">
                <div class="col-6 text-center">
                  <div class="squircle bg-primary justify-content-center">
                    <i class="fe fe-users fe-32 align-self-center text-white"></i>
                  </div>
                  <p>Users</p>
                </div>
                <div class="col-6 text-center">
                  <div class="squircle bg-primary justify-content-center">
                    <i class="fe fe-settings fe-32 align-self-center text-white"></i>
                  </div>
                  <p>Settings</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main> <!-- main -->
  </div> <!-- .wrapper -->
  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/moment.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/simplebar.min.js"></script>
  <script src='js/daterangepicker.js'></script>
  <script src='js/jquery.stickOnScroll.js'></script>
  <script src="js/tinycolor-min.js"></script>
  <script src="js/config.js"></script>
  <script src="js/d3.min.js"></script>
  <script src="js/topojson.min.js"></script>
  <script src="js/datamaps.all.min.js"></script>
  <script src="js/datamaps-zoomto.js"></script>
  <script src="js/datamaps.custom.js"></script>
  <script src="js/Chart.min.js"></script>
  <script>
    /* defind global options */
    Chart.defaults.global.defaultFontFamily = base.defaultFontFamily;
    Chart.defaults.global.defaultFontColor = colors.mutedColor;
  </script>
  <script src="js/gauge.min.js"></script>
  <script src="js/jquery.sparkline.min.js"></script>
  <script src="js/apexcharts.min.js"></script>
  <script src="js/apexcharts.custom.js"></script>
  <script src="js/apps.js"></script>
</body>

</html>