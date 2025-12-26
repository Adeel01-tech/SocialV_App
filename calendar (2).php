<?php

include('includes/head.php');
include('includes/header.php');
include('includes/right-sidebar.php');
include("connection_db.php");

?>


             <div class="right-sidebar-mini right-sidebar">
           <div class="right-sidebar-panel p-0">
              <div class="card shadow-none">
                 <div class="card-body p-0">
                    <div class="media-height p-3" data-scrollbar="init">
                       <div class="d-flex align-items-center mb-4">
                          <div class="iq-profile-avatar status-online">
                             <img class="rounded-circle avatar-50" src="../assets/images/user/01.jpg" alt="">
                          </div>
                          <div class="ms-3">
                             <h6 class="mb-0">Anna Sthesia</h6>
                             <p class="mb-0">Just Now</p>
                          </div>
                       </div>
                       <div class="d-flex align-items-center mb-4">
                          <div class="iq-profile-avatar status-online">
                             <img class="rounded-circle avatar-50" src="../assets/images/user/02.jpg" alt="">
                          </div>
                          <div class="ms-3">
                             <h6 class="mb-0">Paul Molive</h6>
                             <p class="mb-0">Admin</p>
                          </div>
                       </div>
                       <div class="d-flex align-items-center mb-4">
                          <div class="iq-profile-avatar status-online">
                             <img class="rounded-circle avatar-50" src="../assets/images/user/03.jpg" alt="">
                          </div>
                          <div class="ms-3">
                             <h6 class="mb-0">Anna Mull</h6>
                             <p class="mb-0">Admin</p>
                          </div>
                       </div>
                       <div class="d-flex align-items-center mb-4">
                          <div class="iq-profile-avatar status-online">
                             <img class="rounded-circle avatar-50" src="../assets/images/user/04.jpg" alt="">
                          </div>
                          <div class="ms-3">
                             <h6 class="mb-0">Paige Turner</h6>
                             <p class="mb-0">Admin</p>
                          </div>
                       </div>
                       <div class="d-flex align-items-center mb-4">
                          <div class="iq-profile-avatar status-online">
                             <img class="rounded-circle avatar-50" src="../assets/images/user/11.jpg" alt="">
                          </div>
                          <div class="ms-3">
                             <h6 class="mb-0">Bob Frapples</h6>
                             <p class="mb-0">Admin</p>
                          </div>
                       </div>
                       <div class="d-flex align-items-center mb-4">
                          <div class="iq-profile-avatar status-online">
                             <img class="rounded-circle avatar-50" src="../assets/images/user/02.jpg" alt="">
                          </div>
                          <div class="ms-3">
                             <h6 class="mb-0">Barb Ackue</h6>
                             <p class="mb-0">Admin</p>
                          </div>
                       </div>
                       <div class="d-flex align-items-center mb-4">
                          <div class="iq-profile-avatar status-online">
                             <img class="rounded-circle avatar-50" src="../assets/images/user/03.jpg" alt="">
                          </div>
                          <div class="ms-3">
                             <h6 class="mb-0">Greta Life</h6>
                             <p class="mb-0">Admin</p>
                          </div>
                       </div>
                       <div class="d-flex align-items-center mb-4">
                          <div class="iq-profile-avatar status-away">
                             <img class="rounded-circle avatar-50" src="../assets/images/user/12.jpg" alt="">
                          </div>
                          <div class="ms-3">
                             <h6 class="mb-0">Ira Membrit</h6>
                             <p class="mb-0">Admin</p>
                          </div>
                       </div>
                       <div class="d-flex align-items-center mb-4">
                          <div class="iq-profile-avatar status-away">
                             <img class="rounded-circle avatar-50" src="../assets/images/user/01.jpg" alt="">
                          </div>
                          <div class="ms-3">
                             <h6 class="mb-0">Pete Sariya</h6>
                             <p class="mb-0">Admin</p>
                          </div>
                       </div>
                       <div class="d-flex align-items-center">
                          <div class="iq-profile-avatar">
                             <img class="rounded-circle avatar-50" src="../assets/images/user/02.jpg" alt="">
                          </div>
                          <div class="ms-3">
                             <h6 class="mb-0">Monty Carlo</h6>
                             <p class="mb-0">Admin</p>
                          </div>
                       </div>
                    </div>
                    <div class="right-sidebar-toggle bg-primary text-white mt-3">
                       <i class="ri-arrow-left-line side-left-icon"></i>
                       <i class="ri-arrow-right-line side-right-icon"><span class="ms-3 d-inline-block">Close Menu</span></i>
                    </div>
                 </div>
              </div>
           </div>
        </div>    <!-- Page Content  -->
    <div class="header-for-bg">
        <div class="background-header position-relative">
            <img src="../assets/images/page-img/profile-bg6.jpg" class="img-fluid w-100" alt="header-bg">
            <div class="title-on-header">
                <div class="data-block">
                    <h2>Calender and Events</h2>
                </div>
            </div>
        </div>
        </div>
        <!-- Page Content  -->       <div id="content-page" class="content-page">
     <div class="container">
        <div class="row row-eq-height">
            <div class="col-md-4 col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <div class="input-group">
                            <div class="vanila-datepicker"></div>
                        </div>
                    </div>
                </div>
                <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title ">Classification</h4>
                    </div>
                    <div class="card-header-toolbar d-flex align-items-center">
                        <a href="#"><i class="fa fa-plus  mr-0" aria-hidden="true"></i></a>
                    </div>
                </div>
                <div class="card-body">
                    <ul class="m-0 p-0 job-classification list-inline">
                        <li class=""><i class="ri-check-line bg-danger"></i>Meeting</li>
                        <li class=""><i class="ri-check-line bg-success"></i>Business travel</li>
                        <li class=""><i class="ri-check-line bg-warning"></i>Personal Work</li>
                        <li class=""><i class="ri-check-line bg-info"></i>Team Project</li>
                    </ul>
                </div>
                </div>
                <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title">Today's Schedule</h4>
                    </div>
                </div>
                <div class="card-body">
                    <ul class="m-0 p-0 today-schedule">
                        <li class="d-flex">
                            <div class="schedule-icon"><i class="ri-checkbox-blank-circle-fill text-primary"></i></div>
                            <div class="schedule-text"> <span>Web Design</span>
                            <span>09:00 to 12:00</span>
                            </div>
                        </li>
                        <li class="d-flex">
                            <div class="schedule-icon"><i class="ri-checkbox-blank-circle-fill text-success"></i></div>
                            <div class="schedule-text"> <span>Participate in Design</span>
                            <span>09:00 to 12:00</span>
                            </div>
                        </li>
                    </ul>
                </div>
                </div>
            </div>
            <div class="col-md-8 col-lg-9">
                <div class="card">
                <div class="card-header d-flex justify-content-between flex-wrap">
                    <div class="header-title">
                        <h4 class="card-title">Book Appointment</h4>
                    </div>
                    <div class="card-header-toolbar d-flex align-items-center mt-1 mt-md-0">
                        <a href="#" class="btn btn-primary"><i class="ri-add-line mr-2"></i>Book Appointment</a>
                    </div>
                </div>
                <div class="card-body">
                    <div id="calendar1" class="calendar-s"></div>
                </div>
                </div>
            </div>
        </div>
    </div>
      </div>
    </div>
    <!-- Wrapper End-->
    <?php
    
    include('includes/footer.php');
   include('includes/scripts.php');

    ?>