<?php
include('userDetails.php') ;


 if (!isset($_SESSION['userID'])) 
 {
    header('Location:login.php');
 }

 ?>






















<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>RBAP</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">

    <script src="https://www.jqueryscript.net/demo/Dialog-Modal-Dialogify/dist/dialogify.min.js"></script>
</head>

<body id="page-top" onload="allData()">
    <div id="wrapper">
        <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0" style="background-color: #122762;
    background-image: linear-gradient( 
180deg,#223f91 10%,#2e2a2a);
    background-size: cover;">
            <div class="container-fluid d-flex flex-column p-0">
                <a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
                    <div class="sidebar-brand-icon rotate-n-15"><i class="fas fa-laugh-wink"></i></div>
                    <div class="sidebar-brand-text mx-3"><span>RBAP</span></div>
                </a>
                <hr class="sidebar-divider my-0">
                <ul class="nav navbar-nav text-light" id="accordionSidebar">
                    <li class="nav-item" role="presentation"><a id="dashboard" class="nav-link nav-link-side active"><i class="fas fa-tachometer-alt"></i><span>Dashboard</span></a></li>
                    <li class="nav-item" role="presentation"><a id="profile" class="nav-link nav-link-side" ><i class="fas fa-user"></i><span>Profile</span></a></li>
                    <li class="nav-item" role="presentation"><a id="myads" class="nav-link nav-link-side" ><i class="fas fa-table"></i><span>My Ads</span></a></li>
                    <li class="nav-item" role="presentation"><a id="payment" class="nav-link nav-link-side" ><i class="far fa-user-circle"></i><span>My Payment</span></a></li>
                    <li class="nav-item" role="presentation"><a id="changePassword" class="nav-link nav-link-side" ><i class="fas fa-user-circle"></i><span>Change Password</span></a></li>
                </ul>
                <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
            </div>
        </nav>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
                    <div class="container-fluid">


                        <ul class="nav navbar-nav flex-nowrap ml-auto">
                           
                            <div class="d-none d-sm-block topbar-divider"></div>
                            <li class="nav-item dropdown no-arrow" role="presentation">
                                <div class="nav-item dropdown no-arrow">
                                    <a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#">
                                        <span class="d-none d-lg-inline mr-2 text-gray-600 small">

                                            <!--Full name  -->
                                            <span id="alldataFullName"></span>

                                        <img class="border rounded-circle img-profile" id="pro_pic_img2" src="assets/img/avatars/avater1.png"></a>
                                    

                                    <div class="dropdown-menu shadow dropdown-menu-right animated--grow-in" role="menu">
                                       
                                            <a class="dropdown-item" role="presentation"  href="logout.php"; return false ><i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Logout</a></div>
                    </div>
                    </li>
                    </ul>
            </div>
            </nav>

            

  


            <main>
                







<section id="dashboard" class="main_work dashboard remove_class">
            <div class="container-fluid">
                <div class="d-sm-flex justify-content-between align-items-center mb-4">
                    <h3 class="text-dark mb-0">Dashboard</h3><a class="btn btn-primary btn-sm d-none d-sm-inline-block" role="button" href="#"><i class="fas fa-download fa-sm text-white-50"></i>&nbsp;Generate Report</a></div>
                <div class="row">
                    <div class="col-md-6 col-xl-3 mb-4">
                        <div class="card shadow border-left-primary py-2">
                            <div class="card-body">
                                <div class="row align-items-center no-gutters">
                                    <div class="col mr-2">
                                        <div class="text-uppercase text-primary font-weight-bold text-xs mb-1"><span>Earnings (monthly)</span></div>
                                        <div class="text-dark font-weight-bold h5 mb-0"><span>$40,000</span></div>
                                    </div>
                                    <div class="col-auto"><i class="fas fa-calendar fa-2x text-gray-300"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3 mb-4">
                        <div class="card shadow border-left-success py-2">
                            <div class="card-body">
                                <div class="row align-items-center no-gutters">
                                    <div class="col mr-2">
                                        <div class="text-uppercase text-success font-weight-bold text-xs mb-1"><span>Total Earnings</span></div>
                                        <div class="text-dark font-weight-bold h5 mb-0"><span>$215,000</span></div>
                                    </div>
                                    <div class="col-auto"><i class="fas fa-dollar-sign fa-2x text-gray-300"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3 mb-4">
                        <div class="card shadow border-left-info py-2">
                            <div class="card-body">
                                <div class="row align-items-center no-gutters">
                                    <div class="col mr-2">
                                        <div class="text-uppercase text-success font-weight-bold text-xs mb-1"><span>Total withdraw</span></div>
                                        <div class="text-dark font-weight-bold h5 mb-0"><span>$215,000</span></div>
                                    </div>
                                    <div class="col-auto"><i class="fas fa-dollar-sign fa-2x text-gray-300"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3 mb-4">
                        <div class="card shadow border-left-warning py-2">
                            <div class="card-body">
                                <div class="row align-items-center no-gutters">
                                    <div class="col mr-2">
                                        <div class="text-uppercase text-warning font-weight-bold text-xs mb-1"><span>Pending withdraw</span></div>
                                        <div class="text-dark font-weight-bold h5 mb-0"><span>$215,000</span></div>
                                    </div>
                                    <div class="col-auto"><i class="fas fa-dollar-sign fa-2x text-gray-300"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-lg-7 col-xl-8">
                        <div class="card shadow mb-4">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h6 class="text-primary font-weight-bold m-0">Earnings Overview</h6>
                                <div class="dropdown no-arrow"><button class="btn btn-link btn-sm dropdown-toggle" data-toggle="dropdown" aria-expanded="false" type="button"><i class="fas fa-ellipsis-v text-gray-400"></i></button>
                                    <div class="dropdown-menu shadow dropdown-menu-right animated--fade-in"
                                        role="menu">
                                        <p class="text-center dropdown-header">dropdown header:</p><a class="dropdown-item" role="presentation" href="#">&nbsp;Action</a><a class="dropdown-item" role="presentation" href="#">&nbsp;Another action</a>
                                        <div class="dropdown-divider"></div><a class="dropdown-item" role="presentation" href="#">&nbsp;Something else here</a></div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="chart-area"><canvas data-bs-chart="{&quot;type&quot;:&quot;line&quot;,&quot;data&quot;:{&quot;labels&quot;:[&quot;Jan&quot;,&quot;Feb&quot;,&quot;Mar&quot;,&quot;Apr&quot;,&quot;May&quot;,&quot;Jun&quot;,&quot;Jul&quot;,&quot;Aug&quot;],&quot;datasets&quot;:[{&quot;label&quot;:&quot;Earnings&quot;,&quot;fill&quot;:true,&quot;data&quot;:[&quot;0&quot;,&quot;10000&quot;,&quot;5000&quot;,&quot;15000&quot;,&quot;10000&quot;,&quot;20000&quot;,&quot;15000&quot;,&quot;25000&quot;],&quot;backgroundColor&quot;:&quot;rgba(78, 115, 223, 0.05)&quot;,&quot;borderColor&quot;:&quot;rgba(78, 115, 223, 1)&quot;}]},&quot;options&quot;:{&quot;maintainAspectRatio&quot;:false,&quot;legend&quot;:{&quot;display&quot;:false},&quot;title&quot;:{},&quot;scales&quot;:{&quot;xAxes&quot;:[{&quot;gridLines&quot;:{&quot;color&quot;:&quot;rgb(234, 236, 244)&quot;,&quot;zeroLineColor&quot;:&quot;rgb(234, 236, 244)&quot;,&quot;drawBorder&quot;:false,&quot;drawTicks&quot;:false,&quot;borderDash&quot;:[&quot;2&quot;],&quot;zeroLineBorderDash&quot;:[&quot;2&quot;],&quot;drawOnChartArea&quot;:false},&quot;ticks&quot;:{&quot;fontColor&quot;:&quot;#858796&quot;,&quot;padding&quot;:20}}],&quot;yAxes&quot;:[{&quot;gridLines&quot;:{&quot;color&quot;:&quot;rgb(234, 236, 244)&quot;,&quot;zeroLineColor&quot;:&quot;rgb(234, 236, 244)&quot;,&quot;drawBorder&quot;:false,&quot;drawTicks&quot;:false,&quot;borderDash&quot;:[&quot;2&quot;],&quot;zeroLineBorderDash&quot;:[&quot;2&quot;]},&quot;ticks&quot;:{&quot;fontColor&quot;:&quot;#858796&quot;,&quot;padding&quot;:20}}]}}}"></canvas></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-xl-4">
                        <div class="card shadow mb-4">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h6 class="text-primary font-weight-bold m-0">Revenue Sources</h6>
                                <div class="dropdown no-arrow"><button class="btn btn-link btn-sm dropdown-toggle" data-toggle="dropdown" aria-expanded="false" type="button"><i class="fas fa-ellipsis-v text-gray-400"></i></button>
                                    <div class="dropdown-menu shadow dropdown-menu-right animated--fade-in"
                                        role="menu">
                                        <p class="text-center dropdown-header">dropdown header:</p><a class="dropdown-item" role="presentation" href="#">&nbsp;Action</a><a class="dropdown-item" role="presentation" href="#">&nbsp;Another action</a>
                                        <div class="dropdown-divider"></div><a class="dropdown-item" role="presentation" href="#">&nbsp;Something else here</a></div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="chart-area"><canvas data-bs-chart="{&quot;type&quot;:&quot;doughnut&quot;,&quot;data&quot;:{&quot;labels&quot;:[&quot;Direct&quot;,&quot;Social&quot;,&quot;Referral&quot;],&quot;datasets&quot;:[{&quot;label&quot;:&quot;&quot;,&quot;backgroundColor&quot;:[&quot;#4e73df&quot;,&quot;#1cc88a&quot;,&quot;#36b9cc&quot;],&quot;borderColor&quot;:[&quot;#ffffff&quot;,&quot;#ffffff&quot;,&quot;#ffffff&quot;],&quot;data&quot;:[&quot;50&quot;,&quot;30&quot;,&quot;15&quot;]}]},&quot;options&quot;:{&quot;maintainAspectRatio&quot;:false,&quot;legend&quot;:{&quot;display&quot;:false},&quot;title&quot;:{}}}"></canvas></div>
                                <div
                                    class="text-center small mt-4"><span class="mr-2"><i class="fas fa-circle text-primary"></i>&nbsp;Direct</span><span class="mr-2"><i class="fas fa-circle text-success"></i>&nbsp;Social</span><span class="mr-2"><i class="fas fa-circle text-info"></i>&nbsp;Refferal</span></div>
                        </div>
                    </div>
                    </div>
                </div>

                <div class="row" >
                    <!-- ////////////////////////////////////////////////////////////////////////// -->
                    <div class="col-lg-6 mb-4"style="display: none">
                        <div class="card shadow mb-4" >
                            <div class="card-header py-3">
                                <h6 class="text-primary font-weight-bold m-0">Projects</h6>
                            </div>
                            <div class="card-body">
                                <h4 class="small font-weight-bold">Server migration<span class="float-right">20%</span></h4>
                                <div class="progress mb-4">
                                    <div class="progress-bar bg-danger" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%;"><span class="sr-only">20%</span></div>
                                </div>
                                <h4 class="small font-weight-bold">Sales tracking<span class="float-right">40%</span></h4>
                                <div class="progress mb-4">
                                    <div class="progress-bar bg-warning" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;"><span class="sr-only">40%</span></div>
                                </div>
                                <h4 class="small font-weight-bold">Customer Database<span class="float-right">60%</span></h4>
                                <div class="progress mb-4">
                                    <div class="progress-bar bg-primary" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"><span class="sr-only">60%</span></div>
                                </div>
                                <h4 class="small font-weight-bold">Payout Details<span class="float-right">80%</span></h4>
                                <div class="progress mb-4">
                                    <div class="progress-bar bg-info" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"><span class="sr-only">80%</span></div>
                                </div>
                                <h4 class="small font-weight-bold">Account setup<span class="float-right">Complete!</span></h4>
                                <div class="progress mb-4">
                                    <div class="progress-bar bg-success" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"><span class="sr-only">100%</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="text-primary font-weight-bold m-0">Todo List</h6>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col mr-2">
                                            <h6 class="mb-0"><strong>Lunch meeting</strong></h6><span class="text-xs">10:30 AM</span></div>
                                        <div class="col-auto">
                                            <div class="custom-control custom-checkbox"><input class="custom-control-input" type="checkbox" id="formCheck-1"><label class="custom-control-label" for="formCheck-1"></label></div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col mr-2">
                                            <h6 class="mb-0"><strong>Lunch meeting</strong></h6><span class="text-xs">11:30 AM</span></div>
                                        <div class="col-auto">
                                            <div class="custom-control custom-checkbox"><input class="custom-control-input" type="checkbox" id="formCheck-2"><label class="custom-control-label" for="formCheck-2"></label></div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col mr-2">
                                            <h6 class="mb-0"><strong>Lunch meeting</strong></h6><span class="text-xs">12:30 AM</span></div>
                                        <div class="col-auto">
                                            <div class="custom-control custom-checkbox"><input class="custom-control-input" type="checkbox" id="formCheck-3"><label class="custom-control-label" for="formCheck-3"></label></div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col" style="display: none">
                        <div class="row">
                            <div class="col-lg-6 mb-4">
                                <div class="card text-white bg-primary shadow">
                                    <div class="card-body">
                                        <p class="m-0">Primary</p>
                                        <p class="text-white-50 small m-0">#4e73df</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-4">
                                <div class="card text-white bg-success shadow">
                                    <div class="card-body">
                                        <p class="m-0">Success</p>
                                        <p class="text-white-50 small m-0">#1cc88a</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-4">
                                <div class="card text-white bg-info shadow">
                                    <div class="card-body">
                                        <p class="m-0">Info</p>
                                        <p class="text-white-50 small m-0">#36b9cc</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-4">
                                <div class="card text-white bg-warning shadow">
                                    <div class="card-body">
                                        <p class="m-0">Warning</p>
                                        <p class="text-white-50 small m-0">#f6c23e</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-4">
                                <div class="card text-white bg-danger shadow">
                                    <div class="card-body">
                                        <p class="m-0">Danger</p>
                                        <p class="text-white-50 small m-0">#e74a3b</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-4">
                                <div class="card text-white bg-secondary shadow">
                                    <div class="card-body">
                                        <p class="m-0">Secondary</p>
                                        <p class="text-white-50 small m-0">#858796</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- ///////////////////////////////////////////////////////////// -->
                </div>
            </div>
</section>








<section id="profile"  class="main_work profile remove_class">
            <div class="container-fluid">
                <h3 class="text-dark mb-4">Profile</h3>
                <div class="row mb-3">
                    <div class="col-lg-4">
                        <div class="card mb-3">


                            <form id="pro_ppic_upload_form" method="post" enctype="multipart/form-data">
                                <div class="card-body text-center shadow">

                                    <img class="rounded-circle mb-3 mt-4" src="" width="160" height="160" id="pro_pic_img" src="assets/img/avatars/avater1.png">

                                    <div class="mb-3">
                                        <?php $hiddenProfileUserID = $_SESSION['userID']; ?>
                                            <input type="hidden" id="userID2" name="userID2" value= "<?php echo $hiddenProfileUserID ?>" >
                                        
                                        <input class="form-control" type="file" id="pro_picbut_upload" name="pro_picbut_upload" style="    border: none; color: white;width: 125px;margin: 0 auto; margin-bottom: 10px;" />
                                        <button class="btn btn-primary btn-sm" type="button" id="pro_picbut_upload_btn" >Change Photo</button>



                                                <div class="loading remove_class" id="lording2"><img src="assets/img/loading.gif" width="100px" alt="Loading" style="margin-left: 50%;"></div>

                                                <div class="lording_true remove_class" id="true2"><img src="assets/img/true.png" width="30px" alt="lording_true" ></div>

                                                <div class="lording_wrong remove_class" id="wrong2"><img src="assets/img/wrong.png" width="30px" alt="lording_wrong"></div>
                                    </div>
                                </div>
                            </form>





                        </div>



                        <!-- \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ -->
                        <div class="card shadow mb-4" style="display: none;">
                            <div class="card-header py-3">
                                <h6 class="text-primary font-weight-bold m-0">Projects</h6>
                            </div>
                            <div class="card-body">
                                <h4 class="small font-weight-bold">Server migration<span class="float-right">20%</span></h4>
                                <div class="progress progress-sm mb-3">
                                    <div class="progress-bar bg-danger" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%;"><span class="sr-only">20%</span></div>
                                </div>
                                <h4 class="small font-weight-bold">Sales tracking<span class="float-right">40%</span></h4>
                                <div class="progress progress-sm mb-3">
                                    <div class="progress-bar bg-warning" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;"><span class="sr-only">40%</span></div>
                                </div>
                                <h4 class="small font-weight-bold">Customer Database<span class="float-right">60%</span></h4>
                                <div class="progress progress-sm mb-3">
                                    <div class="progress-bar bg-primary" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"><span class="sr-only">60%</span></div>
                                </div>
                                <h4 class="small font-weight-bold">Payout Details<span class="float-right">80%</span></h4>
                                <div class="progress progress-sm mb-3">
                                    <div class="progress-bar bg-info" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"><span class="sr-only">80%</span></div>
                                </div>
                                <h4 class="small font-weight-bold">Account setup<span class="float-right">Complete!</span></h4>
                                <div class="progress progress-sm mb-3">
                                    <div class="progress-bar bg-success" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"><span class="sr-only">100%</span></div>
                                </div>
                            </div>
                        </div>






                    </div>
                    <div class="col-lg-8">
                        <div class="row mb-3 d-none">
                            <div class="col">
                                <div class="card text-white bg-primary shadow">
                                    <div class="card-body">
                                        <div class="row mb-2">
                                            <div class="col">
                                                <p class="m-0">Peformance</p>
                                                <p class="m-0"><strong>65.2%</strong></p>
                                            </div>
                                            <div class="col-auto"><i class="fas fa-rocket fa-2x"></i></div>
                                        </div>
                                        <p class="text-white-50 small m-0"><i class="fas fa-arrow-up"></i>&nbsp;5% since last month</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card text-white bg-success shadow">
                                    <div class="card-body">
                                        <div class="row mb-2">
                                            <div class="col">
                                                <p class="m-0">Peformance</p>
                                                <p class="m-0"><strong>65.2%</strong></p>
                                            </div>
                                            <div class="col-auto"><i class="fas fa-rocket fa-2x"></i></div>
                                        </div>
                                        <p class="text-white-50 small m-0"><i class="fas fa-arrow-up"></i>&nbsp;5% since last month</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="card shadow mb-3">
                                    <div class="card-header py-3">
                                        <p class="text-primary m-0 font-weight-bold">User Settings</p>
                                    </div>
                                    <div class="card-body">


                                        <!-- #################################################### -->

                                        <form  id="user_settings_from" autocomplete="off">
                                            <div class="form-row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="username">
                                                            <strong>Username </strong>
                                                        </label>

                                                        <input class="form-control" type="text"  id="username" name="username">

                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group"><label for="email"><strong>Email Address</strong></label>

                                                        <input class="form-control" type="email"  id="email"    name="email">

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col">
                                                    <div class="form-group"><label for="first_name"><strong>First Name</strong></label>

                                                        <input class="form-control" type="text"  id="first_name" name="first_name">

                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group"><label for="last_name"><strong>Last Name</strong></label>

                                                        <input class="form-control" type="text"  name="last_name" id="last_name">
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <?php $hiddenProfileUserID = $_SESSION['userID']; ?>
                                            <input type="hidden" id="userID" name="userID" value= "<?php echo $hiddenProfileUserID ?>" >

                                            <div class="form-group">
                                                <button class="btn btn-primary btn-sm" type="submit" id="user_settings" name="user_settings">Save Settings</button>

                                                <div class="loading remove_class" id="lording1"><img src="assets/img/loading.gif" width="100px" alt="Loading"></div>

                                                <div class="lording_true remove_class" id="true1"><img src="assets/img/true.png" width="30px" alt="lording_true"></div>

                                                <div class="lording_wrong remove_class" id="wrong1"><img src="assets/img/wrong.png" width="30px" alt="lording_wrong"></div>

                                            </div>

                                            
                                            
                                        </form>




                                    </div>
                                </div>
                                <div class="card shadow">
                                    <div class="card-header py-3">
                                        <p class="text-primary m-0 font-weight-bold">Contact Settings</p>
                                    </div>
                                    <div class="card-body">
                                        


                                        <form id="contact_settings_from" autocomplete="off">
                                            <div class="form-group">
                                                <label for="address"><strong>Address</strong></label>
                                                <input class="form-control" type="text" placeholder="Ex-314/A,colombo" name="address" id="address">
                                            </div>

                                            <div class="form-row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="city"><strong>City</strong></label>
                                                        <input class="form-control" type="text" placeholder="Ex-Colombo" name="city" id="city">
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="country"><strong>Country</strong></label>

                                                        <?php 
                                                            $querys = "SELECT `Dial` , `Country_Name` FROM `countries` WHERE 1";
                                                            $resultss = mysqli_query($con, $querys);
                                                            $country_list="";
                                                            while($row=mysqli_fetch_array($resultss))
                                                              {
                                                                 $country_list.= "<option value=\"{$row['Country_Name']}\">{$row['Country_Name']}</option>";                                                            
                                                              }
                                                              ?>
                                                        
                                                        <select class="form-control" name="country" id="country">
                                                            <?php echo $country_list; ?>
                                                            
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="postal"><strong>Postal Code</strong></label>
                                                        <input class="form-control" type="text"  name="postal" id="postal">
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="country"><strong>Contact No</strong></label>
                                                        <input class="form-control" type="text" placeholder="+94710000000" name="contact" id="contact">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="country"><strong>Bank Name</strong></label>
                                                        <input class="form-control" type="text" id="bank" name="bank">
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="city"><strong>Bank Account No</strong></label>
                                                        <input class="form-control" type="text"  name="accountno" id="accountno">
                                                    </div>
                                                </div>
                                            </div>

                                            <?php $hiddenProfileUserID = $_SESSION['userID']; ?>
                                            <input type="hidden" id="userID3" name="userID3" value= "<?php echo $hiddenProfileUserID ?>" >


                                            <div class="form-group">
                                                <button class="btn btn-primary btn-sm" type="submit" name="contact_setting" id="contact_setting">Save&nbsp;Settings</button>

                                                <div class="loading remove_class" id="lording3"><img src="assets/img/loading.gif" width="100px" alt="Loading"></div>

                                                <div class="lording_true remove_class" id="true3"><img src="assets/img/true.png" width="30px" alt="lording_true"></div>

                                                <div class="lording_wrong remove_class" id="wrong3"><img src="assets/img/wrong.png" width="30px" alt="lording_wrong"></div>

                                            </div>
                                        </form>




                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card shadow mb-5">
                    <div class="card-header py-3">
                        <p class="text-primary m-0 font-weight-bold">Forum Settings</p>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <form>
                                    <div class="form-group"><label for="signature"><strong>Signature</strong><br></label><textarea class="form-control" rows="4" name="signature"></textarea></div>
                                    <div class="form-group">
                                        <div class="custom-control custom-switch"><input class="custom-control-input" type="checkbox" id="formCheck-1"><label class="custom-control-label" for="formCheck-1"><strong>Notify me about new replies</strong></label></div>
                                    </div>
                                    <div class="form-group"><button class="btn btn-primary btn-sm" type="submit">Save Settings</button></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

</section>









<section id="myads"  class="main_work myads remove_class">
         <div class="container-fluid">
            <h3 class="text-dark mb-4">My Advertisement</h3>
            
            <div class="card shadow mb-3">
                <div class="card-header py-3">
                    <p class="text-primary m-0 font-weight-bold">Post New Advertisement</p>
                </div>



                <div class="card-body">






                    <form  id="add_new_post_form" method="post" enctype="multipart/form-data" autocomplete="off">
                        <div class="form-row">
                            <div class="col">
                                <div class="form-group"><label for=""><strong>Heading</strong></label><input type="text" class="form-control" placeholder="Heading" name="post_heading" id="post_heading" /></div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <div class="form-group"><label for=""><strong>Description</strong></label><textarea  type="text" class="form-control" placeholder="description" name="description" id="description" /></textarea ></div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <div class="form-group"><label for="first_name"><strong>Package</strong></label>
                                    <select class="form-control" name="post_pakage" id="post_pakage">
                                          <option value="A" selected>A</option>
                                          <option value="B">B</option>
                                          <option value="C">C</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col">
                                <!-- <div class="form-group"><label for="last_name"><strong>Last Name</strong></label><input type="text" class="form-control" placeholder="Doe" name="last_name" /></div> -->
                            </div>

                        </div>


                        <div class="form-row">
                            <div class="col">
                                <div class="form-group"><label for="first_name"><strong>Image</strong></label>
                                    <input class="form-control" type="file" id="post_image" name="post_image"  />
                                </div>
                            </div>

                            <div class="col">
                               
                            </div>

                        </div>

                         <?php $hiddenProfileUserID = $_SESSION['userID'];  ?>
                                            <input type="hidden" id="userID4" name="userID4" value= "<?php echo $hiddenProfileUserID ?>" >
                        <div class="form-group">
                            <button class="btn btn-primary btn-sm" id="add_new_post_btn" type="submit">Post Advertisement</button>

                                                <div class="loading remove_class" id="lording4"><img src="assets/img/loading.gif" width="100px" alt="Loading" ></div>

                                                <div class="lording_true remove_class" id="true4"><img src="assets/img/true.png" width="30px" alt="lording_true" ></div>

                                                <div class="lording_wrong remove_class" id="wrong4"><img src="assets/img/wrong.png" width="30px" alt="lording_wrong"></div>
                        </div>
                    </form>







                </div>
            </div>

            <div class="card shadow">
                <div class="card-header py-3">
                    <p class="text-primary m-0 font-weight-bold">Pending  Advertisement</p>
                </div>
                <div class="card-body">
                  
                    <div class="table-responsive table mt-2"  role="grid" aria-describedby="dataTable_info">
                        <table class="table dataTable my-0" id="peding_post_table">
                            <thead>
                                <tr>
                                    <th>Post ID</th>
                                    <th>Publish Date</th>
                                    <th>Paakage</th>
                                    <th>Price(LKR)</th>
                                    <th>States</th>
                                    <th>Payment</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $query = "SELECT * FROM `postadds` WHERE `userID`='".$_SESSION['userID']."' AND ( `paymentStatus`='waiting' OR `paymentStatus` = 'No-paid')
                                     ORDER BY `Date` DESC, `postID` DESC ";
                                    $results = mysqli_query($con, $query);
                                    while($row=mysqli_fetch_array($results))
                                      {
                                        $postID = $row['postID'];
                                        $Date = $row['Date'];
                                        $postHeading = $row['postHeading'];
                                        $postPackage = $row['postPackage'];
                                        $postPrice = $row['postPrice'];
                                        $postStatus = $row['postStatus'];
                                        $paymentStatus = $row['paymentStatus'];


                                         echo "   <tr>
                                                <td> {$postID}     </td>
                                                <td> {$Date}       </td>
                                                <td> {$postPackage}</td>
                                                <td> {$postPrice}  </td>
                                                <td> {$paymentStatus}  </td>
                                                <td>
                                                    <button onclick=\"EditPendingAdds(this.id);\" class=\"btn btn-primary\" type=\"submit\" id=\"pending_post_Edit_btn{$postID}\" value=\"{$postID}\"> Edit</button>
                                                    ";

                                            if ($paymentStatus != "waiting") {
                                                # code...
                                                echo "
                                                    <button onclick=\"PaymentPendingAdds(this.id);\" class=\"btn btn-warning\" type=\"submit\" id=\"payment_prnding_btn{$postID}\" value=\"{$postID}\">Pay</button>
                                                ";

                                         echo "

                                                    <button onclick=\"deletePendingAdds(this.id);\" class=\"btn btn-danger\" type=\"submit\" id=\"pending_post_delete_btn{$postID}\"  value=\"{$postID}\">Delete</button>
                                                </td>
                                                ";
                                            }

                                        echo "
                                            </tr> ";
                                      }
                                 ?>
                                
                            </tbody>
                        </table>
                    </div>

                   
                </div>
            </div>

            <div style="margin: 5px;"></div>

            <div class="card shadow">
                <div class="card-header py-3">
                    <p class="text-primary m-0 font-weight-bold">My  Advertisement</p>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 text-nowrap">
                            <div id="dataTable_length" class="dataTables_length" aria-controls="dataTable"><label>Show <select class="form-control form-control-sm custom-select custom-select-sm"><option value="10" selected>10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select></label></div>
                        </div>
                        <div class="col-md-6">
                            <div class="text-md-right dataTables_filter" id="dataTable_filter"><label><input type="search" class="form-control form-control-sm" aria-controls="dataTable" placeholder="Search" /></label></div>
                        </div>
                    </div>
                    <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                        <table class="table dataTable my-0" id="dataTable">
                            <thead>
                                <tr>
                                    <th>Post ID</th>
                                    <th>Publish Date</th>
                                    <th>Expiry Date</th>
                                    <th>Total Views</th>
                                    <th>Package</th>
                                    <th>States</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $query = "SELECT * FROM `postadds` WHERE 
                                                                                `userID`='".$_SESSION['userID']."' AND 
                                                                                 ( `paymentStatus` = 'paid')
                                                                                    ORDER BY `Date` DESC, `postID` DESC ";

                                    $results = mysqli_query($con, $query);
                                    while($row=mysqli_fetch_array($results))
                                      {
                                        $postID = $row['postID'];
                                        $paymentDate = $row['paymentDate'];
                                        $exDate = $row['exDate'];
                                        $postViews = $row['postViews'];
                                        $postPackage = $row['postPackage'];
                                        $postStatus = $row['postStatus'];


                                         echo "   <tr>
                                                <td> {$postID}     </td>
                                                <td> {$paymentDate}       </td>
                                                <td> {$exDate}</td>
                                                <td> {$postViews}  </td>
                                                <td> {$postPackage}  </td>
                                                <td> {$postStatus}  </td>
                                                <td>
                                                    <button onclick=\"ViewPostAdds(this.id);\" class=\"btn btn-primary\" type=\"submit\" id=\"pending_post_Edit_btn{$postID}\" value=\"{$postID}\"> View</button>
                                                    ";
                                      

                                        echo "
                                            </tr> ";
                                      }
                                 ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td><strong>Post</strong></td>
                                    <td><strong>Publish Date</strong></td>
                                    <td><strong>Expiry Date</strong></td>
                                    <td><strong>Total Views</strong></td>
                                    <td><strong>Package</strong></td>
                                    <td><strong>States</strong></td>
                                    <td><strong></strong></td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-md-6 align-self-center">
                            <p id="dataTable_info" class="dataTables_info" role="status" aria-live="polite">Showing 1 to 10 of 27</p>
                        </div>
                        <div class="col-md-6">
                            <nav class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers">
                                <ul class="pagination">
                                    <li class="page-item disabled"><a class="page-link" href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

         </div>
</section>













<section id="payment"  class="main_work payment remove_class">
         <div class="container-fluid">
            <h3 class="text-dark mb-4">My Payment</h3>
            

            <div class="card shadow">
                <div class="card-header py-3">
                    <p class="text-primary m-0 font-weight-bold">My Payment</p>
                </div>
                <div class="card-body">
                  
                    <div class="table-responsive table mt-2"  role="grid" aria-describedby="dataTable_info">
                        <table class="table dataTable my-0" id="my_payment_table">
                            <thead>
                                <tr>
                                    <th>Payment ID</th>
                                    <th>Post ID</th>
                                    <th>Payment Date</th>
                                    <th>Payment(LKR)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $myPaidAmmount = 0;
                                    $query = "SELECT * FROM `adpaymentslips` WHERE `userID`='".$_SESSION['userID']."' ;";
                                    $results = mysqli_query($con, $query);
                                    while($row=mysqli_fetch_array($results))
                                      {
                                        // $postID = $row['postID'];
                                        // $Date = $row['Date'];
                                        // $postHeading = $row['postHeading'];
                                        // $postPackage = $row['postPackage'];
                                        // $postPrice = $row['postPrice'];
                                        // $postStatus = $row['postStatus'];
                                        // $paymentStatus = $row['paymentStatus'];

                                        $paymentID = $row['paymentID'];
                                        $postID = $row['postID'];
                                        $payment_ammount = $row['payment_ammount'];
                                        $paymentDate = $row['paymentDate'];

                                        $myPaidAmmount = $myPaidAmmount + $payment_ammount;

                                         echo "   <tr>
                                                <td> {$paymentID}     </td>
                                                <td> {$postID}     </td>
                                                <td> {$paymentDate}     </td>
                                                <td> {$payment_ammount}LKR     </td>
                                            </tr> ";
                                      }
                                 ?>
                                 <tr>
                                     <td><strong></strong></td>
                                     <td><strong></strong></td>
                                     <td style="float: right;"><strong>Total :</strong></td>
                                     <td><strong><?php  echo $myPaidAmmount; ?>LKR</strong></td>
                                 </tr>
                                
                            </tbody>
                        </table>
                    </div>

                   
                </div>
            </div>

            <div style="margin: 5px;"></div>

            
         </div>
</section>








<section id="changePassword"  class="main_work changePassword remove_class">
            <div class="container-fluid">
                <h3 class="text-dark mb-4">Change Password</h3>
                <div class="row mb-3">
                    
                    <div class="col-lg-8">
                        <div class="row mb-3 d-none">
                            <div class="col">
                                <div class="card text-white bg-primary shadow">
                                    <div class="card-body">
                                        <div class="row mb-2">
                                            <div class="col">
                                                <p class="m-0">Peformance</p>
                                                <p class="m-0"><strong>65.2%</strong></p>
                                            </div>
                                            <div class="col-auto"><i class="fas fa-rocket fa-2x"></i></div>
                                        </div>
                                        <p class="text-white-50 small m-0"><i class="fas fa-arrow-up"></i>&nbsp;5% since last month</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card text-white bg-success shadow">
                                    <div class="card-body">
                                        <div class="row mb-2">
                                            <div class="col">
                                                <p class="m-0">Peformance</p>
                                                <p class="m-0"><strong>65.2%</strong></p>
                                            </div>
                                            <div class="col-auto"><i class="fas fa-rocket fa-2x"></i></div>
                                        </div>
                                        <p class="text-white-50 small m-0"><i class="fas fa-arrow-up"></i>&nbsp;5% since last month</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="card shadow mb-3">
                                    <div class="card-header py-3">
                                        <p class="text-primary m-0 font-weight-bold">Password Settings</p>
                                    </div>
                                    <div class="card-body">


                                        <!-- #################################################### -->

                                        <form  id="password_settings_from" autocomplete="off">
                                            <div class="form-row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="username">
                                                            <strong>New Username </strong>
                                                        </label>

                                                        <input class="form-control" type="text"  id="ch_username" name="ch_username"  placeholder="Username"required >

                                                    </div>
                                                </div>
                                               
                                            </div>
                                            <div class="form-row">
                                                <div class="col">
                                                    <div class="form-group"><label for="first_name"><strong>New Password</strong></label>

                                                        <input class="form-control" type="password" id="ch_password" placeholder="Password" name="ch_password" required>

                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <div class="form-row">
                                                <div class="col">
                                                    <div class="form-group"><label for="first_name"><strong>New Re-Password</strong></label>

                                                        <input class="form-control" type="password" id="ch_password1" placeholder="Re-Password" name="ch_password1" required>

                                                    </div>
                                                </div>
                                                
                                            </div>
                                            
                                            <?php $hiddenProfileUserID = $_SESSION['userID']; ?>
                                            <input type="hidden" id="userID" name="userID" value= "<?php echo $hiddenProfileUserID ?>" >

                                            <div class="form-group">
                                                <button class="btn btn-primary btn-sm" type="submit" id="password_settings" name="password_settings">Save Settings</button>

                                                <div class="loading remove_class" id="lording24"><img src="assets/img/loading.gif" width="100px" alt="Loading"></div>

                                                <div class="lording_true remove_class" id="true24"><img src="assets/img/true.png" width="30px" alt="lording_true"></div>

                                                <div class="lording_wrong remove_class" id="wrong24"><img src="assets/img/wrong.png" width="30px" alt="lording_wrong"></div>

                                            </div>

                                            
                                            
                                        </form>




                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>

</section>










            </main>

            <p id="refesh_tag"> </p>














            
        
    </div>
    <footer class="bg-white sticky-footer">
        <div class="container my-auto">
            <div class="text-center my-auto copyright"><span>Copyright © Brand 2021</span></div>
        </div>
    </footer>
    </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a></div>
    































































    


<section>
    
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/chart.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="assets/js/theme.js"></script>
    <script src="assets/js/adminfuntion.js"></script>
    <script src="assets/js/my.js"></script>


           <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
           <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>      
           <script src="https://www.jqueryscript.net/demo/Dialog-Modal-Dialogify/dist/dialogify.min.js"></script>      
      </head>  





    
<style type="text/css">
    .loading{
        width: 100px;
    }
    .remove_class{
        display: none;
    }
    .lording_true, .lording_wrong{
        margin-top: 5px;
    }

</style>            




<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>



</section>

</body>

</html>


