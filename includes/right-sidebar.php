<?php



include_once 'includes/layout.php';

?>


<body class="  ">
    <!-- loader Start -->
    <div id="loading">
          <div id="loading-center">
          </div>
    </div>
    <!-- loader END -->
    <!-- Wrapper Start -->
    <div class="wrapper">
      <div class="iq-sidebar  sidebar-default ">
          <div id="sidebar-scrollbar">
              <nav class="iq-sidebar-menu">
                  <ul id="iq-sidebar-toggle" class="iq-menu">
                      <li class="active">
                          <a href="index.php" class=" "> 
                              <i class="las la-newspaper"></i><span>Newsfeed</span>
                          </a>
                      </li>
                      <li class="">
                         <a href="profile.php" class=" ">
                             <i class="las la-user"></i><span>Profile</span>
                          </a>
                      </li>
                      <li class="">
                         <a href="group.php" class=" ">
                             <i class="las la-users"></i><span>Group</span>
                          </a>
                      </li>
                      <li class=" ">
                          <a href="todo.php" class=" ">
                              <i class="las la-check-circle"></i><span>Todo</span>
                          </a>
                      </li>
                      <li class=" ">
                         <a href="calendar.php" class=" ">
                             <i class="las la-calendar"></i><span>Calendar</span>
                          </a>
                      </li>
                      <li class=" ">
                          <a href="#mailbox" data-bs-toggle="collapse" class="  collapsed" aria-expanded="false">
                              <i class="ri-mail-line"></i><span>Email</span><i
                                  class="ri-arrow-right-s-line iq-arrow-right"></i>
                          </a>
                          <ul id="mailbox" class="iq-submenu collapse" data-bs-parent="#iq-sidebar-toggle">
                              <li class="">
                                  <a href="email.php"><i class="  ri-inbox-line"></i>Inbox</a>
                              </li>
                              <li class="">
                                  <a href="email-compose.php"><i class="ri-edit-line"></i>Email Compose</a>
                              </li>
                          </ul>
                      </li>
                       <li class="">
                          <a href="#ui-elements" data-bs-toggle="collapse" class="  collapsed" 
                              aria-expanded="false"><i class="ri-focus-2-line"></i><span>Ui-Elements</span><i
                                  class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                          <ul id="ui-elements" class="iq-submenu collapse"
                          data-bs-parent="#iq-sidebar-toggle">
                              <li class="">
                                  <a href="#ui-kit"  data-bs-toggle="collapse" class="  collapsed"
                                      aria-expanded="false"><i class="ri-pencil-ruler-line"></i><span>UI Kit</span><i
                                          class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                                  <ul id="ui-kit" class="iq-submenu collapse" data-bs-parent="#ui-elements">
                                      <li class="">
                                          <a href="ui-color.php"><i class="ri-font-color"></i>Colors</a>
                                      </li>
                                      <li class=" ">
                                          <a href="ui-typography.php"><i class="ri-text"></i>Typography</a>
                                      </li>
                                      <li class="">
                                          <a href="ui-alerts.php"><i class="ri-alert-line"></i>Alerts</a>
                                      </li>
                                      <li class="">
                                          <a href="ui-badges.php"><i class="ri-building-3-line"></i>Badges</a>
                                      </li>
                                      <li class="">
                                          <a href="ui-breadcrumb.php"><i class="ri-menu-2-line"></i>Breadcrumb</a>
                                      </li>
                                      <li class="">
                                          <a href="ui-buttons.php"><i class="ri-checkbox-blank-line"></i>Buttons</a>
                                      </li>
                                      <li class="">
                                          <a href="ui-cards.php"><i class="ri-bank-card-line"></i>Cards</a>
                                      </li>
                                      <li class="">
                                          <a href="ui-carousel.php"><i class="ri-slideshow-line"></i>Carousel</a>
                                      </li>
                                      <li class="">
                                          <a href="ui-embed-video.php"><i class="ri-slideshow-2-line"></i>Video</a>
                                      </li>
                                      <li class="">
                                          <a href="ui-grid.php"><i class="ri-grid-line"></i>Grid</a>
                                      </li>
                                      <li class="">
                                          <a href="ui-images.php"><i class="ri-image-line"></i>Images</a>
                                      </li>
                                      <li class="">
                                          <a href="ui-list-group.php"><i class="ri-file-list-3-line"></i>list
                                              Group</a>
                                      </li>
                                      <li class="">
                                          <a href="ui-modal.php"><i class="ri-stop-mini-line"></i>Modal</a>
                                      </li>
                                      <li class="">
                                          <a href="ui-notifications.php"><i class="ri-notification-line"></i>Notifications</a>
                                      </li>
                                      <li class="">
                                          <a href="ui-pagination.php"><i class="ri-pages-line"></i>Pagination</a>
                                      </li>
                                      <li class="">
                                          <a href="ui-popovers.php"><i class="ri-folder-shield-2-line"></i>Popovers</a>
                                      </li>
                                      <li class="">
                                          <a href="ui-progressbars.php"><i class="ri-battery-low-line"></i>Progressbars</a>
                                      </li>
                                      <li class="">
                                          <a href="ui-tabs.php"><i class="ri-database-line"></i>Tabs</a>
                                      </li>
                                      <li class="">
                                          <a href="ui-tooltips.php"><i class="ri-record-mail-line"></i>Tooltips</a>
                                      </li>
                                  </ul>
                              </li>
                              <li class="">
                                  <a href="#forms" class="  collapsed" data-bs-toggle="collapse"
                                      aria-expanded="false"><i class="ri-profile-line"></i><span>Forms</span><i
                                          class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                                  <ul id="forms" class="iq-submenu collapse" data-bs-parent="#ui-elements">
                                      <li class="">
                                          <a href="form-layout.php"><i class="ri-tablet-line"></i>Form Elements</a>
                                      </li>
                                      <li class="">
                                          <a href="form-validation.php"><i class="ri-device-line"></i>Form
                                              Validation</a></li>
                                      <li class="">
                                          <a href="form-switch.php"><i class="ri-toggle-line"></i>Form Switch</a>
                                      </li>
                                      <li class="">
                                          <a href="form-chechbox.php"><i class="ri-checkbox-line"></i>Form
                                              Checkbox</a></li>
                                      <li class="">
                                          <a href="form-radio.php"><i class="ri-radio-button-line"></i>Form Radio</a>
                                      </li>
                                  </ul>
                              </li>
                              <li class="">
                                  <a href="#wizard-form" class="  collapsed" data-bs-toggle="collapse"
                                      aria-expanded="false"><i class="ri-archive-drawer-line"></i><span>Forms
                                          Wizard</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                                  <ul id="wizard-form" class="iq-submenu collapse" data-bs-parent="#ui-elements">
                                      <li class="">
                                          <a href="form-wizard.php"><i class="ri-clockwise-line"></i>Simple Wizard</a>
                                      </li>
                                      <li class="">
                                          <a href="form-wizard-validate.php"><i class="ri-clockwise-2-line"></i>Validate Wizard</a>
                                      </li>
                                      <li class="">
                                          <a href="form-wizard-vertical.php"><i class="ri-anticlockwise-line"></i>Vertical Wizard</a>
                                      </li>
                                  </ul>
                              </li>
                              <li class="">
                                  <a href="#tables" class="  collapsed" data-bs-toggle="collapse"
                                      aria-expanded="false"><i class="ri-table-line"></i><span>Table</span><i
                                          class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                                  <ul id="tables" class="iq-submenu collapse" data-bs-parent="#ui-elements">
                                      <li class="">
                                          <a href="tables-basic.php"><i class="ri-table-line"></i>Basic Tables</a>
                                      </li>
                                      <li class="">
                                          <a href="data-table.php"><i class="ri-database-line"></i>Data Table</a>
                                      </li>
                                      <li class="">
                                          <a href="table-editable.php"><i class="ri-refund-line"></i>Editable Table</a></li>
                                  </ul>
                              </li>
                              <li class="">
                                  <a href="#icons" class="  collapsed" data-bs-toggle="collapse"
                                      aria-expanded="false"><i class="ri-list-check"></i><span>Icons</span><i
                                          class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                                  <ul id="icons" class="iq-submenu collapse" data-bs-parent="#ui-elements">
                                      <li class="">
                                          <a href="icon-fontawesome-5.php"><i class="ri-facebook-fill"></i>Font Awesome 5</a>
                                      </li>
                                      <li class="">
                                          <a href="icon-lineawesome.php"><i class="ri-keynote-line"></i>line Awesome</a>
                                      </li>
                                      <li class="">
                                          <a href="icon-remixicon.php"><i class="ri-remixicon-line"></i>Remixicon</a>
                                      </li>
                                  </ul>
                              </li>
                          </ul>
                      </li>
                      <li class="">
                          <a href="#pages" class="  collapsed" data-bs-toggle="collapse"
                              aria-expanded="false"><i class="ri-pages-line"></i><span>Pages</span><i
                                  class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                          <ul id="pages" class="iq-submenu collapse" data-bs-parent="#iq-sidebar-toggle">
                              <li class="">
                                  <a href="#authentication" class="  collapsed" data-bs-toggle="collapse"
                                      aria-expanded="false"><i class="ri-pages-line"></i><span>Authentication</span><i
                                          class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                                  <ul id="authentication" class="iq-submenu collapse" data-bs-parent="#pages">
                                      <li class="">
                                          <a href="sign-in.php"><i class="ri-login-box-line"></i>Login</a>
                                      </li>
                                      <li class="">
                                          <a href="sign-up.php"><i class="ri-login-circle-line"></i>Register</a>
                                      </li>
                                      <li class="">
                                          <a href="pages-recoverpw.php"><i class="ri-record-mail-line"></i>Recover Password</a>
                                      </li>
                                      <li class="">
                                          <a href="pages-confirm-mail.php"><i class="ri-file-code-line"></i>Confirm Mail</a>
                                      </li>
                                      <li class="">
                                          <a href="pages-lock-screen.php"><i class="ri-lock-line"></i>Lock Screen</a>
                                      </li>
                                  </ul>
                              </li>
                              <li class="">
                                  <a href="#extra-pages" class="  collapsed" data-bs-toggle="collapse"
                                      aria-expanded="false"><i class="ri-pantone-line"></i><span>Extra Pages</span><i
                                          class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                                  <ul id="extra-pages" class="iq-submenu collapse" data-bs-parent="#pages">
                                      <li class="">
                                          <a href="pages-timeline.php"><i class="ri-map-pin-time-line"></i>Timeline</a>
                                      </li>
                                      <li class="">
                                          <a href="pages-invoice.php"><i class="ri-question-answer-line"></i>Invoice</a>
                                      </li>
                                      <li class="">
                                          <a href="blank-page.php"><i class="ri-invision-line"></i>Blank Page</a>
                                      </li>
                                      <li class="">
                                          <a href="pages-error.php"><i class="ri-error-warning-line"></i>Error 404</a>
                                      </li>
                                      <li class="">
                                          <a href="pages-error-500.php"><i class="ri-error-warning-line"></i>Error 500</a>
                                      </li>
                                      <li class="">
                                          <a href="pages-pricing.php"><i class="ri-price-tag-line"></i>Pricing</a>
                                      </li>
                                      <li class="">
                                          <a href="pages-pricing-one.php"><i class="ri-price-tag-2-line"></i>Pricing 1</a>
                                      </li>
                                      <li class="">
                                          <a href="pages-maintenance.php"><i class="ri-archive-line"></i>Maintenance</a>
                                      </li>
                                      <li class="">
                                          <a href="pages-comingsoon.php"><i class="ri-mastercard-line"></i>Coming Soon</a>
                                      </li>
                                      <li class="">
                                          <a href="pages-faq.php"><i class="ri-compasses-line"></i>Faq</a>
                                      </li>
                                  </ul>
                              </li>
                          </ul>
                      </li>
                  </ul>
                  </nav>
                  <div class="p-5"></div>
              </div>
          </div>
