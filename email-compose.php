<?php

include('includes/head.php');
include('includes/header.php');
include('includes/right-sidebar.php');


?>

      
      
      <div class="right-sidebar-mini right-sidebar">
           <div class="right-sidebar-panel p-0">
              <div class="card shadow-none">
                 <div class="card-body p-0">
                    <div class="media-height p-3" data-scrollbar="init">
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
        <div class="row row-eq-height">
            <div class="col-md-12">
                <div class="row">
                <div class="col-md-12">
                    <div class="card iq-border-radius-20">
                        <div class="card-body">
                            <div class="row">
                            <div class="col-md-12 mb-3">
                                <h5 class="text-primary card-title"><i class="ri-pencil-fill"></i> Compose Message</h5>
                            </div>
                            </div>
                            <form class="email-form">
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">To:</label>
                                <div class="col-sm-10">
                                    <select  id="inputEmail3" class="select2jsMultiSelect form-control" multiple="multiple">
                                        <option value="Petey Cruiser">Petey Cruiser</option>
                                        <option value="Bob Frapples">Bob Frapples</option>
                                        <option value="Barb Ackue">Barb Ackue</option>
                                        <option value="Greta Life">Greta Life</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="cc" class="col-sm-2 col-form-label">Cc:</label>
                                <div class="col-sm-10">
                                    <select  id="cc" class="select2jsMultiSelect form-control" multiple="multiple">
                                        <option value="Brock Lee">Brock Lee</option>
                                        <option value="Rick O'Shea">Rick O'Shea</option>
                                        <option value="Cliff Hanger">Cliff Hanger</option>
                                        <option value="Barb Dwyer">Barb Dwyer</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="subject" class="col-sm-2 col-form-label">Subject:</label>
                                <div class="col-sm-10">
                                    <input type="text"  id="subject" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="subject" class="col-sm-2 col-form-label">Your Message:</label>
                                <div class="col-md-10">
                                    <textarea class="textarea form-control" rows="5">Next, use our Get Started docs to setup Tiny!</textarea>
                                </div>
                            </div>
                            <div class="form-group d-flex flex-wrap align-items-center justify-content-between mb-0">
                                <div class="d-flex flex-wrap flex-grow-1 align-items-center">
                                    <div class="send-btn pl-3 mb-2">
                                        <button type="submit" class="btn btn-primary">Send</button>
                                    </div>
                                    <div class="send-panel mb-2">
                                        <label class="ms-2 mb-0 bg-soft-primary rounded" for="file"> <input type="file" id="file" style="display: none"> <a><i class="ri-attachment-line text-primary"></i> </a> </label>
                                        <label class="ms-2 mb-0 bg-soft-primary rounded"> <a href="#"> <i class="ri-map-pin-user-line text-primary"></i></a>  </label>
                                        <label class="ms-2 mb-0 bg-soft-primary rounded"> <a href="#"> <i class="ri-drive-line text-primary"></i></a>  </label>
                                        <label class="ms-2 mb-0 bg-soft-primary rounded"> <a href="#"> <i class="ri-camera-line text-primary"></i></a>  </label>
                                        <label class="ms-2 mb-0 bg-soft-primary rounded"> <a href="#"> <i class="ri-user-smile-line text-primary"></i></a>  </label>
                                    </div>
                                </div>
                                <div class="d-flex mr-3 align-items-center">
                                    <div class="send-panel float-right">
                                        <label class="ms-2 mb-0 bg-soft-primary rounded" ><a href="#"><i class="ri-settings-2-line text-primary"></i></a></label>
                                        <label class="ms-2 mb-0 bg-soft-primary rounded"><a href="#">  <i class="ri-delete-bin-line text-primary"></i></a>  </label>
                                    </div>
                                </div>
                            </div>
                            </form>
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