<?php



include('includes/head.php');
require_once('includes/header.php');
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
        </div>       <div id="content-page" class="content-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Privacy Setting</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="acc-privacy">
                            <div class="data-privacy">
                                <h4 class="mb-2">Account Privacy</h4>
                                <div class="form-check form-check-inline">
                                <input type="checkbox" class="form-check-input" id="acc-private">
                                <label class="form-check-label privacy-status mb-2" for="acc-private">Private Account</label>
                                </div>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
                            </div>
                            <hr>
                            <div class="data-privacy">
                                <h4 class="mb-2">Activity Status</h4>
                                <div class="form-check form-check-inline">
                                <input type="checkbox" class="form-check-input" id="activety" checked="">
                                <label class="form-check-label privacy-status mb-2" for="activety">Show Activity Status</label>
                                </div>
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                            </div>
                            <hr>
                            <div class="data-privacy">
                                <h4 class="mb-2"> Story Sharing </h4>
                                <div class="form-check form-check-inline">
                                <input type="checkbox" class="form-check-input" id="story" checked="">
                                <label class="form-check-label privacy-status mb-2" for="story">Allow Sharing</label>
                                </div>
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                            </div>
                            <hr>
                            <div class="data-privacy">
                                <h4 class="mb-2"> Photo Of You </h4>
                                <div class="custom-control custom-radio">
                                <input type="radio" id="automatically" name="customRadio0" class="form-check-input" checked="" >
                                <label class="form-check-label" for="automatically"> Add Automatically</label>
                                </div>
                                <div class="custom-control custom-radio mb-2">
                                <input type="radio" id="manualy" name="customRadio0" class="form-check-input">
                                <label class="form-check-label" for="manualy"> Add Manualy</label>
                                </div>
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                            </div>
                            <hr>
                            <div class="data-privacy">
                                <h4 class="mb-2"> Your Profile </h4>
                                <div class="custom-control custom-radio">
                                <input type="radio" id="public" name="customRadio1" class="form-check-input" checked="">
                                <label class="form-check-label" for="public"> Public </label>
                                </div>
                                <div class="custom-control custom-radio">
                                <input type="radio" id="friend" name="customRadio1" class="form-check-input">
                                <label class="form-check-label" for="friend"> Friend </label>
                                </div>
                                <div class="custom-control custom-radio">
                                <input type="radio" id="spfriend" name="customRadio1" class="form-check-input">
                                <label class="form-check-label" for="spfriend"> Specific Friend </label>
                                </div>
                                <div class="custom-control custom-radio mb-2">
                                <input type="radio" id="onlyme" name="customRadio1" class="form-check-input">
                                <label class="form-check-label" for="onlyme"> Only Me </label>
                                </div>
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                            </div>
                            <hr>
                            <div class="data-privacy">
                                <h4 class="mb-2"> Login Notification </h4>
                                <div class="custom-control custom-radio">
                                <input type="radio" id="enable" name="customRadio2" class="form-check-input">
                                <label class="form-check-label" for="enable"> Enable </label>
                                </div>
                                <div class="custom-control custom-radio mb-2">
                                <input type="radio" id="disable" name="customRadio2" class="form-check-input" checked="">
                                <label class="form-check-label" for="disable"> Disable </label>
                                </div>
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                            </div>
                            <hr>
                            <div class="data-privacy">
                                <h4 class="mb-2">Privacy Help</h4>
                                <a href="#"><i class="ri-customer-service-2-line me-2"></i>Support</a>
                            </div>
                        </div>
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