﻿<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="viho admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, viho admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="../assets/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="../assets/images/favicon.png" type="image/x-icon">
    <title>viho - Premium Admin Template</title>
    <!-- Google font-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="../../css2.css?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <link href="../../css2-1.css?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap" rel="stylesheet">
    <link href="../../css2-2.css?family=Rubik:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css" href="../assets/css/fontawesome.css">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="../assets/css/icofont.css">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="../assets/css/themify.css">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="../assets/css/flag-icon.css">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="../assets/css/feather-icon.css">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="../assets/css/whether-icon.css">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <link id="color" rel="stylesheet" href="../assets/css/color-1.css" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/responsive.css">
  </head>
  <body>
    <!-- Loader starts-->
    <div class="loader-wrapper">
      <div class="theme-loader">    
        <div class="loader-p"></div>
      </div>
    </div>
    <!-- Loader ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper" id="pageWrapper">
      <!-- Page Header Start-->
      <div class="page-main-header">
        <div class="main-header-right row m-0">
          <div class="main-header-left">
            <div class="logo-wrapper"><a href="index.html"><img class="img-fluid" src="../assets/images/logo/logo.png" alt=""></a></div>
            <div class="dark-logo-wrapper"><a href="index.html"><img class="img-fluid" src="../assets/images/logo/dark-logo.png" alt=""></a></div>
            <div class="toggle-sidebar"><i class="status_toggle middle" data-feather="align-center" id="sidebar-toggle"></i></div>
          </div>
          <div class="left-menu-header col">
            <ul>
              <li>
                <form class="form-inline search-form">
                  <div class="search-bg"><i class="fa fa-search"></i>
                    <input class="form-control-plaintext" placeholder="Search here.....">
                  </div>
                </form><span class="d-sm-none mobile-search search-bg"><i class="fa fa-search"></i></span>
              </li>
            </ul>
          </div>
          <div class="nav-right col pull-right right-menu p-0">
            <ul class="nav-menus">
              <li><a class="text-dark" href="#!" onclick="javascript:toggleFullScreen()"><i data-feather="maximize"></i></a></li>
              <li class="onhover-dropdown">
                <div class="bookmark-box"><i data-feather="star"></i></div>
                <div class="bookmark-dropdown onhover-show-div">
                  <div class="form-group mb-0">
                    <div class="input-group">
                      <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-search"></i></span></div>
                      <input class="form-control" type="text" placeholder="Search for bookmark...">
                    </div>
                  </div>
                  <ul class="m-t-5">
                    <li class="add-to-bookmark"><i class="bookmark-icon" data-feather="inbox"></i>Email<span class="pull-right"><i data-feather="star"></i></span></li>
                    <li class="add-to-bookmark"><i class="bookmark-icon" data-feather="message-square"></i>Chat<span class="pull-right"><i data-feather="star"></i></span></li>
                    <li class="add-to-bookmark"><i class="bookmark-icon" data-feather="command"></i>Feather Icon<span class="pull-right"><i data-feather="star"></i></span></li>
                    <li class="add-to-bookmark"><i class="bookmark-icon" data-feather="airplay"></i>Widgets<span class="pull-right"><i data-feather="star">   </i></span></li>
                  </ul>
                </div>
              </li>
              <li class="onhover-dropdown">
                <div class="notification-box"><i data-feather="bell"></i><span class="dot-animated"></span></div>
                <ul class="notification-dropdown onhover-show-div">
                  <li>
                    <p class="f-w-700 mb-0">You have 3 Notifications<span class="pull-right badge badge-primary badge-pill">4</span></p>
                  </li>
                  <li class="noti-primary">
                    <div class="media"><span class="notification-bg bg-light-primary"><i data-feather="activity"> </i></span>
                      <div class="media-body">
                        <p>Delivery processing </p><span>10 minutes ago</span>
                      </div>
                    </div>
                  </li>
                  <li class="noti-secondary">
                    <div class="media"><span class="notification-bg bg-light-secondary"><i data-feather="check-circle"> </i></span>
                      <div class="media-body">
                        <p>Order Complete</p><span>1 hour ago</span>
                      </div>
                    </div>
                  </li>
                  <li class="noti-success">
                    <div class="media"><span class="notification-bg bg-light-success"><i data-feather="file-text"> </i></span>
                      <div class="media-body">
                        <p>Tickets Generated</p><span>3 hour ago</span>
                      </div>
                    </div>
                  </li>
                  <li class="noti-danger">
                    <div class="media"><span class="notification-bg bg-light-danger"><i data-feather="user-check"> </i></span>
                      <div class="media-body">
                        <p>Delivery Complete</p><span>6 hour ago</span>
                      </div>
                    </div>
                  </li>
                </ul>
              </li>
              <li>
                <div class="mode"><i class="fa fa-moon-o"></i></div>
              </li>
              <li class="onhover-dropdown"><i data-feather="message-square"></i>
                <ul class="chat-dropdown onhover-show-div">
                  <li>
                    <div class="media"><img class="img-fluid rounded-circle me-3" src="../assets/images/user/4.jpg" alt="">
                      <div class="media-body"><span>Ain Chavez</span>
                        <p class="f-12 light-font">Lorem Ipsum is simply dummy...</p>
                      </div>
                      <p class="f-12">32 mins ago</p>
                    </div>
                  </li>
                  <li>
                    <div class="media"><img class="img-fluid rounded-circle me-3" src="../assets/images/user/1.jpg" alt="">
                      <div class="media-body"><span>Erica Hughes</span>
                        <p class="f-12 light-font">Lorem Ipsum is simply dummy...</p>
                      </div>
                      <p class="f-12">58 mins ago</p>
                    </div>
                  </li>
                  <li>
                    <div class="media"><img class="img-fluid rounded-circle me-3" src="../assets/images/user/2.jpg" alt="">
                      <div class="media-body"><span>Kori Thomas</span>
                        <p class="f-12 light-font">Lorem Ipsum is simply dummy...</p>
                      </div>
                      <p class="f-12">1 hr ago</p>
                    </div>
                  </li>
                  <li class="text-center"> <a class="f-w-700" href="javascript:void(0)">See All     </a></li>
                </ul>
              </li>
              <li class="onhover-dropdown p-0">
                <button class="btn btn-primary-light" type="button"><a href="login_two.html"><i data-feather="log-out"></i>Log out</a></button>
              </li>
            </ul>
          </div>
          <div class="d-lg-none mobile-toggle pull-right w-auto"><i data-feather="more-horizontal"></i></div>
        </div>
      </div>
      <!-- Page Header Ends                              -->
      <!-- Page Body Start-->
      <div class="page-body-wrapper horizontal-menu">
        <!-- Page Sidebar Start-->
        <header class="main-nav">
          <div class="sidebar-user text-center"><a class="setting-primary" href="javascript:void(0)"><i data-feather="settings"></i></a><img class="img-90 rounded-circle" src="../assets/images/dashboard/1.png" alt="">
            <div class="badge-bottom"><span class="badge badge-primary">New</span></div><a href="user-profile.html">
              <h6 class="mt-3 f-14 f-w-600">Emay Walter</h6></a>
            <p class="mb-0 font-roboto">Human Resources Department</p>
            <ul>
              <li><span><span class="counter">19.8</span>k</span>
                <p>Follow</p>
              </li>
              <li><span>2 year</span>
                <p>Experince</p>
              </li>
              <li><span><span class="counter">95.2</span>k</span>
                <p>Follower </p>
              </li>
            </ul>
          </div>
          <nav>
            <div class="main-navbar">
              <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
              <div id="mainnav">           
                <ul class="nav-menu custom-scrollbar">
                  <li class="back-btn">
                    <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                  </li>
                  <li class="sidebar-main-title">
                    <div>
                      <h6>General             </h6>
                    </div>
                  </li>
                  <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="home"></i><span>Dashboard</span></a>
                    <ul class="nav-submenu menu-content">
                      <li><a href="index.html">Default</a></li>
                      <li><a href="dashboard-02.html">Ecommerce</a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="airplay"></i><span>Widgets</span></a>
                    <ul class="nav-submenu menu-content">
                      <li><a href="general-widget.html">General</a></li>
                      <li><a href="chart-widget.html">Chart</a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="layout"></i><span>Page layout</span></a>
                    <ul class="nav-submenu menu-content">
                      <li><a href="box-layout.html">Boxed</a></li>
                      <li><a href="layout-rtl.html">RTL</a></li>
                      <li><a href="layout-dark.html">Dark</a></li>
                      <li><a href="footer-light.html">Footer Light</a></li>
                      <li><a href="footer-dark.html">Footer Dark</a></li>
                      <li><a href="footer-fixed.html">Footer Fixed</a></li>
                    </ul>
                  </li>
                  <li class="sidebar-main-title">
                    <div>
                      <h6>Components             </h6>
                    </div>
                  </li>
                  <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="box"></i><span>Ui Kits</span></a>
                    <ul class="nav-submenu menu-content">
                      <li><a href="state-color.html">State color</a></li>
                      <li><a href="typography.html">Typography</a></li>
                      <li><a href="avatars.html">Avatars</a></li>
                      <li><a href="helper-classes.html">helper classes</a></li>
                      <li><a href="grid.html">Grid</a></li>
                      <li><a href="tag-pills.html">Tag & pills</a></li>
                      <li><a href="progress-bar.html">Progress</a></li>
                      <li><a href="modal.html">Modal</a></li>
                      <li><a href="alert.html">Alert</a></li>
                      <li><a href="popover.html">Popover</a></li>
                      <li><a href="tooltip.html">Tooltip</a></li>
                      <li><a href="loader.html">Spinners</a></li>
                      <li><a href="dropdown.html">Dropdown</a></li>
                      <li><a href="according.html">Accordion</a></li>
                      <li><a class="submenu-title" href="javascript:void(0)">Tabs<span class="sub-arrow"><i class="fa fa-chevron-right"></i></span></a>
                        <ul class="nav-sub-childmenu submenu-content">
                          <li><a href="tab-bootstrap.html">Bootstrap Tabs</a></li>
                          <li><a href="tab-material.html">Line Tabs</a></li>
                        </ul>
                      </li>
                      <li><a href="navs.html">Navs</a></li>
                      <li><a href="box-shadow.html">Shadow</a></li>
                      <li><a href="list.html">Lists</a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="folder-plus"></i><span>Bonus Ui</span></a>
                    <ul class="nav-submenu menu-content">
                      <li><a href="scrollable.html">Scrollable</a></li>
                      <li><a href="tree.html">Tree view</a></li>
                      <li><a href="bootstrap-notify.html">Bootstrap Notify</a></li>
                      <li><a href="rating.html">Rating</a></li>
                      <li><a href="dropzone.html">dropzone</a></li>
                      <li><a href="tour.html">Tour</a></li>
                      <li><a href="sweet-alert2.html">SweetAlert2</a></li>
                      <li><a href="modal-animated.html">Animated Modal</a></li>
                      <li><a href="owl-carousel.html">Owl Carousel</a></li>
                      <li><a href="ribbons.html">Ribbons</a></li>
                      <li><a href="pagination.html">Pagination</a></li>
                      <li><a href="steps.html">Steps</a></li>
                      <li><a href="breadcrumb.html">Breadcrumb</a></li>
                      <li><a href="range-slider.html">Range Slider</a></li>
                      <li><a href="image-cropper.html">Image cropper</a></li>
                      <li><a href="sticky.html">Sticky         </a></li>
                      <li><a href="basic-card.html">Basic Card</a></li>
                      <li><a href="creative-card.html">Creative Card</a></li>
                      <li><a href="tabbed-card.html">Tabbed Card</a></li>
                      <li><a href="dragable-card.html">Draggable Card</a></li>
                      <li><a class="submenu-title" href="javascript:void(0)">Timeline<span class="sub-arrow"><i class="fa fa-chevron-right"></i></span></a>
                        <ul class="nav-sub-childmenu submenu-content">
                          <li><a href="timeline-v-1.html">Timeline 1</a></li>
                          <li><a href="timeline-v-2.html">Timeline 2</a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="edit-3"></i><span>Builders</span></a>
                    <ul class="nav-submenu menu-content">
                      <li><a href="form-builder-1.html">Form Builder 1</a></li>
                      <li><a href="form-builder-2.html">Form Builder 2</a></li>
                      <li><a href="pagebuild.html">Page Builder</a></li>
                      <li> <a href="button-builder.html">Button Builder</a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="cloud-drizzle"></i><span>Animation</span></a>
                    <ul class="nav-submenu menu-content">
                      <li><a href="animate.html">Animate</a></li>
                      <li><a href="scroll-reval.html">Scroll Reveal</a></li>
                      <li><a href="AOS.html">AOS animation</a></li>
                      <li><a href="tilt.html">Tilt Animation</a></li>
                      <li><a href="wow.html">Wow Animation</a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="command"></i><span>Icons</span></a>
                    <ul class="nav-submenu menu-content">
                      <li><a href="flag-icon.html">Flag icon</a></li>
                      <li><a href="font-awesome.html">Fontawesome Icon</a></li>
                      <li><a href="ico-icon.html">Ico Icon</a></li>
                      <li><a href="themify-icon.html">Thimify Icon</a></li>
                      <li><a href="feather-icon.html">Feather icon</a></li>
                      <li><a href="whether-icon.html">Whether Icon             </a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="cloud"></i><span>Buttons</span></a>
                    <ul class="nav-submenu menu-content">
                      <li><a href="buttons.html">Default Style</a></li>
                      <li><a href="buttons-flat.html">Flat Style</a></li>
                      <li><a href="buttons-edge.html">Edge Style</a></li>
                      <li><a href="raised-button.html">Raised Style</a></li>
                      <li><a href="button-group.html">Button Group</a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="bar-chart"></i><span>Charts</span></a>
                    <ul class="nav-submenu menu-content">
                      <li><a href="chart-apex.html">Apex Chart</a></li>
                      <li><a href="chart-google.html">Google Chart</a></li>
                      <li><a href="chart-sparkline.html">Sparkline chart</a></li>
                      <li><a href="chart-flot.html">Flot Chart</a></li>
                      <li><a href="chart-knob.html">Knob Chart</a></li>
                      <li><a href="chart-morris.html">Morris Chart</a></li>
                      <li><a href="chartjs.html">Chatjs Chart</a></li>
                      <li><a href="chartist.html">Chartist Chart</a></li>
                      <li><a href="chart-peity.html">Peity Chart</a></li>
                    </ul>
                  </li>
                  <li class="sidebar-main-title">
                    <div>
                      <h6>Forms</h6>
                    </div>
                  </li>
                  <li class="dropdown">          <a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="sliders"></i><span>Form Controls                </span></a>
                    <ul class="nav-submenu menu-content">
                      <li><a href="form-validation.html">Form Validation</a></li>
                      <li><a href="base-input.html">Base Inputs</a></li>
                      <li><a href="radio-checkbox-control.html">Checkbox & Radio</a></li>
                      <li><a href="input-group.html">Input Groups</a></li>
                      <li><a href="megaoptions.html">Mega Options </a></li>
                    </ul>
                  </li>
                  <li class="dropdown">          <a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="package"></i><span>Form Widgets</span></a>
                    <ul class="nav-submenu menu-content">
                      <li><a href="datepicker.html">Datepicker</a></li>
                      <li><a href="time-picker.html">Timepicker</a></li>
                      <li><a href="datetimepicker.html">Datetimepicker</a></li>
                      <li><a href="daterangepicker.html">Daterangepicker</a></li>
                      <li><a href="touchspin.html">Touchspin</a></li>
                      <li><a href="select2.html">Select2</a></li>
                      <li><a href="switch.html">Switch</a></li>
                      <li><a href="typeahead.html">Typeahead</a></li>
                      <li><a href="clipboard.html">Clipboard </a></li>
                    </ul>
                  </li>
                  <li class="dropdown">          <a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="layout"></i><span>Form layout</span></a>
                    <ul class="nav-submenu menu-content">
                      <li><a href="default-form.html">Default Forms</a></li>
                      <li><a href="form-wizard.html">Form Wizard 1</a></li>
                      <li><a href="form-wizard-two.html">Form Wizard 2</a></li>
                      <li><a href="form-wizard-three.html">Form Wizard 3</a></li>
                    </ul>
                  </li>
                  <li class="sidebar-main-title">
                    <div>
                      <h6>Table</h6>
                    </div>
                  </li>
                  <li class="dropdown">          <a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="server"></i><span>Bootstrap Tables             </span></a>
                    <ul class="nav-submenu menu-content">
                      <li><a href="bootstrap-basic-table.html">Basic Tables</a></li>
                      <li><a href="bootstrap-sizing-table.html">Sizing Tables</a></li>
                      <li><a href="bootstrap-border-table.html">Border Tables</a></li>
                      <li><a href="bootstrap-styling-table.html">Styling Tables</a></li>
                      <li><a href="table-components.html">Table components</a></li>
                    </ul>
                  </li>
                  <li class="dropdown">          <a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="database"></i><span>Data Tables   </span></a>
                    <ul class="nav-submenu menu-content">
                      <li><a href="datatable-basic-init.html">Basic Init</a></li>
                      <li><a href="datatable-advance.html">Advance Init</a></li>
                      <li><a href="datatable-styling.html">Styling</a></li>
                      <li><a href="datatable-AJAX.html">AJAX</a></li>
                      <li><a href="datatable-server-side.html">Server Side</a></li>
                      <li><a href="datatable-plugin.html">Plug-in</a></li>
                      <li><a href="datatable-API.html">API</a></li>
                      <li><a href="datatable-data-source.html">Data Sources</a></li>
                    </ul>
                  </li>
                  <li class="dropdown">          <a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="hard-drive"></i><span>Ex. Data Tables  </span></a>
                    <ul class="nav-submenu menu-content">
                      <li><a href="datatable-ext-autofill.html">Auto Fill</a></li>
                      <li><a href="datatable-ext-basic-button.html">Basic Button</a></li>
                      <li><a href="datatable-ext-col-reorder.html">Column Reorder</a></li>
                      <li><a href="datatable-ext-fixed-header.html">Fixed Header</a></li>
                      <li><a href="datatable-ext-key-table.html">Key Table</a></li>
                      <li><a href="datatable-ext-responsive.html">Responsive</a></li>
                      <li><a href="datatable-ext-row-reorder.html">Row Reorder</a></li>
                      <li><a href="datatable-ext-scroller.html">Scroller                      </a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a class="nav-link menu-title link-nav" href="jsgrid-table.html"><i data-feather="file-text"></i><span>Js Grid Table</span></a></li>
                  <li class="sidebar-main-title">
                    <div>
                      <h6>Applications             </h6>
                    </div>
                  </li>
                  <li class="dropdown">          <a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="box"></i><span>Project                </span></a>
                    <ul class="nav-submenu menu-content">
                      <li><a href="projects.html">Project List</a></li>
                      <li><a href="projectcreate.html">Create new             </a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a class="nav-link menu-title link-nav" href="file-manager.html"><i data-feather="git-pull-request"></i><span>File manager</span></a></li>
                  <li class="dropdown"><a class="nav-link menu-title link-nav" href="kanban.html"><i data-feather="monitor"></i><span>kanban Board</span></a></li>
                  <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="shopping-bag"></i><span>Ecommerce</span></a>
                    <ul class="nav-submenu menu-content">
                      <li><a href="product.html">Product</a></li>
                      <li><a href="product-page.html">Product page</a></li>
                      <li><a href="list-products.html">Product list</a></li>
                      <li><a href="payment-details.html">Payment Details</a></li>
                      <li><a href="order-history.html">Order History</a></li>
                      <li><a href="invoice-template.html">Invoice</a></li>
                      <li><a href="cart.html">Cart</a></li>
                      <li><a href="list-wish.html">Wishlist</a></li>
                      <li><a href="checkout.html">Checkout</a></li>
                      <li><a href="pricing.html">Pricing</a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="mail"></i><span>Email</span></a>
                    <ul class="nav-submenu menu-content">
                      <li><a href="email_inbox.html">Mail Inbox</a></li>
                      <li><a href="email_read.html">Read mail</a></li>
                      <li><a href="email_compose.html">Compose</a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="message-circle"></i><span>Chat</span></a>
                    <ul class="nav-submenu menu-content">
                      <li><a href="chat.html">Chat App</a></li>
                      <li><a href="chat-video.html">Video chat</a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="users"></i><span>Users</span></a>
                    <ul class="nav-submenu menu-content">
                      <li><a href="user-profile.html">Users Profile</a></li>
                      <li><a href="edit-profile.html">Users Edit</a></li>
                      <li><a href="user-cards.html">Users Cards</a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a class="nav-link menu-title link-nav" href="bookmark.html"><i data-feather="heart"></i><span>Bookmarks</span></a></li>
                  <li class="dropdown"><a class="nav-link menu-title link-nav" href="contacts.html"><i data-feather="list"></i><span>Contacts</span></a></li>
                  <li class="dropdown"><a class="nav-link menu-title link-nav" href="task.html"><i data-feather="check-square"></i><span>Tasks</span></a></li>
                  <li class="dropdown"><a class="nav-link menu-title link-nav" href="calendar-basic.html"><i data-feather="calendar"></i><span>Calender        </span></a></li>
                  <li class="dropdown"><a class="nav-link menu-title link-nav" href="social-app.html"><i data-feather="zap"></i><span>Social App</span></a></li>
                  <li class="dropdown"><a class="nav-link menu-title link-nav" href="to-do.html"><i data-feather="clock"></i><span>To-Do</span></a></li>
                  <li class="dropdown"><a class="nav-link menu-title link-nav" href="search.html"><i data-feather="search"></i><span>Search Result</span></a></li>
                  <li class="sidebar-main-title">
                    <div>
                      <h6>Pages             </h6>
                    </div>
                  </li>
                  <li><a class="nav-link menu-title link-nav" href="landing-page.html"><i data-feather="navigation-2"></i><span>Landing page</span></a></li>
                  <li><a class="nav-link menu-title link-nav" href="sample-page.html"><i data-feather="file"></i><span>Sample page</span></a></li>
                  <li class="dropdown"><a class="nav-link menu-title link-nav" href="internationalization.html"><i data-feather="aperture"></i><span>Internationalization</span></a></li>
                  <li class="dropdown"><a class="nav-link menu-title link-nav" href="../starter-kit/index.html"><i data-feather="anchor"></i><span>Starter kit   </span></a></li>
                  <li class="mega-menu"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="layers"></i><span>Others</span></a>
                    <div class="mega-menu-container menu-content">
                      <div class="container">
                        <div class="row">
                          <div class="col mega-box">
                            <div class="link-section">
                              <div class="submenu-title">
                                <h5>Error Page</h5>
                              </div>
                              <div class="submenu-content opensubmegamenu">
                                <ul>
                                  <li><a href="error-page1.html" target="_blank">Error page 1</a></li>
                                  <li><a href="error-page2.html" target="_blank">Error page 2</a></li>
                                  <li><a href="error-page3.html" target="_blank">Error page 3</a></li>
                                  <li><a href="error-page4.html" target="_blank">Error page 4                         </a></li>
                                </ul>
                              </div>
                            </div>
                          </div>
                          <div class="col mega-box">
                            <div class="link-section">
                              <div class="submenu-title">
                                <h5> Authentication</h5>
                              </div>
                              <div class="submenu-content opensubmegamenu">
                                <ul>
                                  <li><a href="login.html" target="_blank">Login Simple</a></li>
                                  <li><a href="login_one.html" target="_blank">Login with bg image</a></li>
                                  <li><a href="login_two.html" target="_blank">Login with image two                      </a></li>
                                  <li><a href="login-bs-validation.html" target="_blank">Login With validation</a></li>
                                  <li><a href="login-bs-tt-validation.html" target="_blank">Login with tooltip</a></li>
                                  <li><a href="login-sa-validation.html" target="_blank">Login with sweetalert</a></li>
                                  <li><a href="sign-up.html" target="_blank">Register Simple</a></li>
                                  <li><a href="sign-up-one.html" target="_blank">Register with Bg Image                              </a></li>
                                  <li><a href="sign-up-two.html" target="_blank">Register with Bg video                          </a></li>
                                  <li><a href="unlock.html">Unlock User</a></li>
                                  <li><a href="forget-password.html">Forget Password</a></li>
                                  <li><a href="creat-password.html">Creat Password</a></li>
                                  <li><a href="maintenance.html">Maintenance</a></li>
                                </ul>
                              </div>
                            </div>
                          </div>
                          <div class="col mega-box">
                            <div class="link-section">
                              <div class="submenu-title">
                                <h5>Coming Soon</h5>
                              </div>
                              <div class="submenu-content opensubmegamenu">
                                <ul>
                                  <li><a href="comingsoon.html">Coming Simple</a></li>
                                  <li><a href="comingsoon-bg-video.html">Coming with Bg video</a></li>
                                  <li><a href="comingsoon-bg-img.html">Coming with Bg Image</a></li>
                                </ul>
                              </div>
                            </div>
                          </div>
                          <div class="col mega-box">
                            <div class="link-section">
                              <div class="submenu-title">
                                <h5>Email templates</h5>
                              </div>
                              <div class="submenu-content opensubmegamenu">
                                <ul>
                                  <li><a href="basic-template.html">Basic Email</a></li>
                                  <li><a href="email-header.html">Basic With Header</a></li>
                                  <li><a href="template-email.html">Ecomerce Template</a></li>
                                  <li><a href="template-email-2.html">Email Template 2</a></li>
                                  <li><a href="ecommerce-templates.html">Ecommerce Email</a></li>
                                  <li><a href="email-order-success.html">Order Success      </a></li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="sidebar-main-title">
                    <div>
                      <h6>Miscellaneous             </h6>
                    </div>
                  </li>
                  <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="image"></i><span>Gallery</span></a>
                    <ul class="nav-submenu menu-content">
                      <li><a href="gallery.html">Gallery Grid</a></li>
                      <li><a href="gallery-with-description.html">Gallery Grid Desc</a></li>
                      <li><a href="gallery-masonry.html">Masonry Gallery</a></li>
                      <li><a href="masonry-gallery-with-disc.html">Masonry with Desc</a></li>
                      <li><a href="gallery-hover.html">Hover Effects</a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="edit"></i><span>Blog</span></a>
                    <ul class="nav-submenu menu-content">
                      <li><a href="blog.html">Blog Details</a></li>
                      <li><a href="blog-single.html">Blog Single</a></li>
                      <li><a href="add-post.html">Add Post</a></li>
                    </ul>
                  </li>
                  <li><a class="nav-link menu-title link-nav" href="faq.html"><i data-feather="help-circle"></i><span>FAQ</span></a></li>
                  <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="user-check"></i><span>Job Search</span></a>
                    <ul class="nav-submenu menu-content">
                      <li><a href="job-cards-view.html">Cards view</a></li>
                      <li><a href="job-list-view.html">List View</a></li>
                      <li><a href="job-details.html">Job Details</a></li>
                      <li><a href="job-apply.html">Apply</a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="layers"></i><span>Learning</span></a>
                    <ul class="nav-submenu menu-content">
                      <li><a href="learning-list-view.html">Learning List</a></li>
                      <li><a href="learning-detailed.html">Detailed Course</a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="map"></i><span>Maps</span></a>
                    <ul class="nav-submenu menu-content">
                      <li><a href="map-js.html">Maps JS</a></li>
                      <li><a href="vector-map.html">Vector Maps</a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="git-pull-request"></i><span>Editors</span></a>
                    <ul class="nav-submenu menu-content">
                      <li><a href="summernote.html">Summer Note</a></li>
                      <li><a href="ckeditor.html">CK editor</a></li>
                      <li><a href="simple-MDE.html">MDE editor</a></li>
                      <li><a href="ace-code-editor.html">ACE code editor</a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="database"></i><span>Knowledgebase</span></a>
                    <ul class="nav-submenu menu-content">
                      <li><a href="knowledgebase.html">Knowledgebase</a></li>
                      <li><a href="knowledge-category.html">Knowledge category</a></li>
                      <li><a href="knowledge-detail.html">Knowledge detail</a></li>
                    </ul>
                  </li>
                  <li><a class="nav-link menu-title link-nav" href="support-ticket.html"><i data-feather="headphones"></i><span>Support Ticket</span></a></li>
                </ul>
              </div>
              <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
            </div>
          </nav>
        </header>
        <!-- Page Sidebar Ends-->
        <div class="page-body">
          <div class="container-fluid">
            <div class="page-header">
              <div class="row">
                <div class="col-sm-6">
                  <h3>Whether Icon</h3>
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">Icons</li>
                    <li class="breadcrumb-item active">Whether Icon</li>
                  </ol>
                </div>
                <div class="col-sm-6">
                  <!-- Bookmark Start-->
                  <div class="bookmark">
                    <ul>
                      <li><a href="javascript:void(0)" data-container="body" data-bs-toggle="popover" data-placement="top" title="" data-original-title="Tables"><i data-feather="inbox"></i></a></li>
                      <li><a href="javascript:void(0)" data-container="body" data-bs-toggle="popover" data-placement="top" title="" data-original-title="Chat"><i data-feather="message-square"></i></a></li>
                      <li><a href="javascript:void(0)" data-container="body" data-bs-toggle="popover" data-placement="top" title="" data-original-title="Icons"><i data-feather="command"></i></a></li>
                      <li><a href="javascript:void(0)" data-container="body" data-bs-toggle="popover" data-placement="top" title="" data-original-title="Learning"><i data-feather="layers"></i></a></li>
                      <li><a href="javascript:void(0)"><i class="bookmark-search" data-feather="star"></i></a>
                        <form class="form-inline search-form">
                          <div class="form-group form-control-search">
                            <input type="text" placeholder="Search..">
                          </div>
                        </form>
                      </li>
                    </ul>
                  </div>
                  <!-- Bookmark Ends-->
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid starts-->
          <div class="container-fluid">
            <div class="row">
              <div class="col-sm-12">
                <div class="card">
                  <div class="card-header pb-0">
                    <h5 class="m-b-0">Whether Icons With Animations</h5>
                  </div>
                  <div class="card-body">
                    <div class="row icon-lists whether-icon">
                      <div class="col-lg-2 col-3">
                        <svg class="climacon climacon_sun" id="sun" version="1.1" viewbox="15 15 70 70">
                          <clippath id="sunFillClip">
                            <path d="M0,0v100h100V0H0z M50.001,57.999c-4.417,0-8-3.582-8-7.999c0-4.418,3.582-7.999,8-7.999s7.998,3.581,7.998,7.999C57.999,54.417,54.418,57.999,50.001,57.999z"></path>
                          </clippath>
                          <g class="climacon_iconWrap climacon_iconWrap-sun">
                            <g class="climacon_componentWrap climacon_componentWrap-sun">
                              <g class="climacon_componentWrap climacon_componentWrap-sunSpoke">
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-east" d="M72.03,51.999h-3.998c-1.105,0-2-0.896-2-1.999s0.895-2,2-2h3.998c1.104,0,2,0.896,2,2S73.136,51.999,72.03,51.999z"></path>
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-northEast" d="M64.175,38.688c-0.781,0.781-2.049,0.781-2.828,0c-0.781-0.781-0.781-2.047,0-2.828l2.828-2.828c0.779-0.781,2.047-0.781,2.828,0c0.779,0.781,0.779,2.047,0,2.828L64.175,38.688z"></path>
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M50.034,34.002c-1.105,0-2-0.896-2-2v-3.999c0-1.104,0.895-2,2-2c1.104,0,2,0.896,2,2v3.999C52.034,33.106,51.136,34.002,50.034,34.002z"></path>
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-northWest" d="M35.893,38.688l-2.827-2.828c-0.781-0.781-0.781-2.047,0-2.828c0.78-0.781,2.047-0.781,2.827,0l2.827,2.828c0.781,0.781,0.781,2.047,0,2.828C37.94,39.469,36.674,39.469,35.893,38.688z"></path>
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-west" d="M34.034,50c0,1.104-0.896,1.999-2,1.999h-4c-1.104,0-1.998-0.896-1.998-1.999s0.896-2,1.998-2h4C33.14,48,34.034,48.896,34.034,50z"></path>
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-southWest" d="M35.893,61.312c0.781-0.78,2.048-0.78,2.827,0c0.781,0.78,0.781,2.047,0,2.828l-2.827,2.827c-0.78,0.781-2.047,0.781-2.827,0c-0.781-0.78-0.781-2.047,0-2.827L35.893,61.312z"></path>
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-south" d="M50.034,65.998c1.104,0,2,0.895,2,1.999v4c0,1.104-0.896,2-2,2c-1.105,0-2-0.896-2-2v-4C48.034,66.893,48.929,65.998,50.034,65.998z"></path>
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-southEast" d="M64.175,61.312l2.828,2.828c0.779,0.78,0.779,2.047,0,2.827c-0.781,0.781-2.049,0.781-2.828,0l-2.828-2.827c-0.781-0.781-0.781-2.048,0-2.828C62.126,60.531,63.392,60.531,64.175,61.312z"></path>
                              </g>
                              <g class="climacon_componentWrap climacon_componentWrap_sunBody" clip-path="url(#sunFillClip)">
                                <circle class="climacon_component climacon_component-stroke climacon_component-stroke_sunBody" cx="50.034" cy="50" r="11.999"></circle>
                              </g>
                            </g>
                          </g>
                        </svg>
                      </div>
                      <!-- sun-->
                      <div class="col-lg-2 col-3">
                        <svg class="climacon climacon_sunFill" id="sunFill" version="1.1" viewbox="15 15 70 70">
                          <g class="climacon_iconWrap climacon_iconWrap-sunFill">
                            <g class="climacon_componentWrap climacon_componentWrap-sun">
                              <g class="climacon_componentWrap climacon_componentWrap-sunSpoke">
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-east" d="M72.03,51.999h-3.998c-1.105,0-2-0.896-2-1.999s0.895-2,2-2h3.998c1.104,0,2,0.896,2,2S73.136,51.999,72.03,51.999z"></path>
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-northEast" d="M64.175,38.688c-0.781,0.781-2.049,0.781-2.828,0c-0.781-0.781-0.781-2.047,0-2.828l2.828-2.828c0.779-0.781,2.047-0.781,2.828,0c0.779,0.781,0.779,2.047,0,2.828L64.175,38.688z"></path>
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M50.034,34.002c-1.105,0-2-0.896-2-2v-3.999c0-1.104,0.895-2,2-2c1.104,0,2,0.896,2,2v3.999C52.034,33.106,51.136,34.002,50.034,34.002z"></path>
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-northWest" d="M35.893,38.688l-2.827-2.828c-0.781-0.781-0.781-2.047,0-2.828c0.78-0.781,2.047-0.781,2.827,0l2.827,2.828c0.781,0.781,0.781,2.047,0,2.828C37.94,39.469,36.674,39.469,35.893,38.688z"></path>
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-west" d="M34.034,50c0,1.104-0.896,1.999-2,1.999h-4c-1.104,0-1.998-0.896-1.998-1.999s0.896-2,1.998-2h4C33.14,48,34.034,48.896,34.034,50z"></path>
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-southWest" d="M35.893,61.312c0.781-0.78,2.048-0.78,2.827,0c0.781,0.78,0.781,2.047,0,2.828l-2.827,2.827c-0.78,0.781-2.047,0.781-2.827,0c-0.781-0.78-0.781-2.047,0-2.827L35.893,61.312z"></path>
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-south" d="M50.034,65.998c1.104,0,2,0.895,2,1.999v4c0,1.104-0.896,2-2,2c-1.105,0-2-0.896-2-2v-4C48.034,66.893,48.929,65.998,50.034,65.998z"></path>
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-southEast" d="M64.175,61.312l2.828,2.828c0.779,0.78,0.779,2.047,0,2.827c-0.781,0.781-2.049,0.781-2.828,0l-2.828-2.827c-0.781-0.781-0.781-2.048,0-2.828C62.126,60.531,63.392,60.531,64.175,61.312z"></path>
                              </g>
                              <g class="climacon_componentWrap climacon_componentWrap_sunBody">
                                <circle class="climacon_component climacon_component-stroke climacon_component-stroke_sunBody" cx="50.034" cy="50" r="11.999"></circle>
                                <circle class="climacon_component climacon_component-fill climacon_component-fill_sunBody" fill="#FFFFFF" cx="50.034" cy="50" r="7.999"></circle>
                              </g>
                            </g>
                          </g>
                        </svg>
                        <!-- sunFill-->
                      </div>
                      <div class="col-lg-2 col-3">
                        <svg class="climacon climacon_moon" id="moon" version="1.1" viewbox="15 15 70 70">
                          <clippath id="moonFillClip">
                            <path d="M15,15v70h70V15H15z M50,57.999c-4.418,0-7.999-3.582-7.999-7.999c0-3.803,2.655-6.979,6.211-7.792c0.903,4.854,4.726,8.676,9.579,9.58C56.979,55.344,53.802,57.999,50,57.999z"></path>
                          </clippath>
                          <g class="climacon_iconWrap climacon_iconWrap-moon">
                            <g class="climacon_componentWrap climacon_componentWrap-moon" clip-path="url(#moonFillClip)">
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_moon" d="M50,61.998c-6.627,0-11.999-5.372-11.999-11.998c0-6.627,5.372-11.999,11.999-11.999c0.755,0,1.491,0.078,2.207,0.212c-0.132,0.576-0.208,1.173-0.208,1.788c0,4.418,3.582,7.999,8,7.999c0.614,0,1.212-0.076,1.788-0.208c0.133,0.717,0.211,1.452,0.211,2.208C61.998,56.626,56.626,61.998,50,61.998z"></path>
                            </g>
                          </g>
                        </svg>
                        <!-- moon-->
                      </div>
                      <div class="col-lg-2 col-3">
                        <svg class="climacon climacon_moonFill" id="moonfill" version="1.1" viewbox="15 15 70 70">
                          <g class="climacon_iconWrap climacon_iconWrap-moonFill">
                            <g class="climacon_componentWrap climacon_componentWrap-moon">
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_moon" d="M50,61.998c-6.627,0-11.999-5.372-11.999-11.998c0-6.627,5.372-11.999,11.999-11.999c0.755,0,1.491,0.078,2.207,0.212c-0.132,0.576-0.208,1.173-0.208,1.788c0,4.418,3.582,7.999,8,7.999c0.614,0,1.212-0.076,1.788-0.208c0.133,0.717,0.211,1.452,0.211,2.208C61.998,56.626,56.626,61.998,50,61.998z"></path>
                              <path class="climacon_component climacon_component-fill climacon_component-fill_moon" fill="#FFFFFF" d="M48.212,42.208c-3.556,0.813-6.211,3.989-6.211,7.792c0,4.417,3.581,7.999,7.999,7.999c3.802,0,6.979-2.655,7.791-6.211C52.938,50.884,49.115,47.062,48.212,42.208z"></path>
                            </g>
                          </g>
                        </svg>
                        <!-- moonFill-->
                      </div>
                      <div class="col-lg-2 col-3">
                        <svg class="climacon climacon_snowflake" id="sunsetAlt" version="1.1" viewbox="15 15 70 70">
                          <clippath id="snowflakeFillClip">
                            <path d="M15,15v70h70V15H15z M50,54c-2.209,0-4-1.791-4-4c0-2.208,1.791-3.999,4-3.999s3.999,1.791,3.999,3.999C53.999,52.209,52.209,54,50,54z"></path>
                          </clippath>
                          <g class="climacon_iconWrap climacon_iconWrap-snowflake">
                            <g class="climacon_componentWrap climacon_componentWrap-snowflake" clip-path="url(#snowflakeFillClip)">
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_snowflake" d="M59.659,46.733l-1.958,1.13c0.188,0.682,0.298,1.396,0.298,2.137c0,0.742-0.108,1.456-0.298,2.139l1.958,1.129c0.956,0.553,1.284,1.775,0.731,2.732c-0.553,0.956-1.774,1.284-2.731,0.73l-1.954-1.127c-1.003,1.02-2.277,1.766-3.705,2.133v2.263c0,1.104-0.896,2-2,2c-1.104,0-2-0.896-2-2v-2.263c-1.428-0.367-2.703-1.113-3.705-2.133l-1.954,1.127c-0.957,0.554-2.18,0.226-2.731-0.73c-0.553-0.957-0.225-2.18,0.731-2.732l1.958-1.129c-0.189-0.683-0.298-1.396-0.298-2.139c0-0.741,0.108-1.455,0.298-2.137l-1.958-1.13c-0.956-0.553-1.284-1.775-0.731-2.732c0.552-0.956,1.774-1.284,2.731-0.731l1.954,1.128c1.002-1.02,2.277-1.766,3.705-2.134v-2.262c0-1.104,0.896-2,2-2c1.104,0,2,0.896,2,2v2.262c1.428,0.368,2.702,1.114,3.705,2.134l1.954-1.128c0.957-0.553,2.18-0.225,2.731,0.731C60.943,44.958,60.615,46.181,59.659,46.733z"></path>
                            </g>
                          </g>
                        </svg>
                        <!-- snowflake-->
                      </div>
                      <div class="col-lg-2 col-3">
                        <svg class="climacon climacon_snowflakeFill" id="snowflakeFill" version="1.1" viewbox="15 15 70 70">
                          <g class="climacon_iconWrap climacon_iconWrap-snowflakeFill">
                            <g class="climacon_componentWrap climacon_componentWrap-snowflake">
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_snowflake" d="M59.659,46.733l-1.958,1.13c0.188,0.682,0.298,1.396,0.298,2.137c0,0.742-0.108,1.456-0.298,2.139l1.958,1.129c0.956,0.553,1.284,1.775,0.731,2.732c-0.553,0.956-1.774,1.284-2.731,0.73l-1.954-1.127c-1.003,1.02-2.277,1.766-3.705,2.133v2.263c0,1.104-0.896,2-2,2c-1.104,0-2-0.896-2-2v-2.263c-1.428-0.367-2.703-1.113-3.705-2.133l-1.954,1.127c-0.957,0.554-2.18,0.226-2.731-0.73c-0.553-0.957-0.225-2.18,0.731-2.732l1.958-1.129c-0.189-0.683-0.298-1.396-0.298-2.139c0-0.741,0.108-1.455,0.298-2.137l-1.958-1.13c-0.956-0.553-1.284-1.775-0.731-2.732c0.552-0.956,1.774-1.284,2.731-0.731l1.954,1.128c1.002-1.02,2.277-1.766,3.705-2.134v-2.262c0-1.104,0.896-2,2-2c1.104,0,2,0.896,2,2v2.262c1.428,0.368,2.702,1.114,3.705,2.134l1.954-1.128c0.957-0.553,2.18-0.225,2.731,0.731C60.943,44.958,60.615,46.181,59.659,46.733z"></path>
                              <circle class="climacon_component climacon_component-fill climacon_component-fill_snowflake" fill="#FFFFFF" cx="50" cy="50" r="4"></circle>
                            </g>
                          </g>
                        </svg>
                        <!-- snowflakeFill-->
                      </div>
                      <div class="col-lg-2 col-3">
                        <svg class="climacon climacon_wind" id="wind" version="1.1" viewbox="15 15 70 70">
                          <g class="climacon_iconWrap climacon_iconWrap-wind">
                            <g class="climacon_wrapperComponent climacon_componentWrap-wind">
                              <path class="climacon_component climacon_component-stroke climacon_component-wind climacon_component-wind_curl" d="M65.999,52L65.999,52h-3c-1.104,0-2-0.895-2-1.999c0-1.104,0.896-2,2-2h3c1.104,0,2-0.896,2-1.999c0-1.105-0.896-2-2-2s-2-0.896-2-2s0.896-2,2-2c0.138,0,0.271,0.014,0.401,0.041c3.121,0.211,5.597,2.783,5.597,5.959C71.997,49.314,69.312,52,65.999,52z"></path>
                              <path class="climacon_component climacon_component-stroke climacon_component-wind" d="M55.999,48.001h-2h-6.998H34.002c-1.104,0-1.999,0.896-1.999,2c0,1.104,0.895,1.999,1.999,1.999h2h3.999h3h4h3h3.998h2c3.313,0,6,2.688,6,6c0,3.176-2.476,5.748-5.597,5.959C56.271,63.986,56.139,64,55.999,64c-1.104,0-2-0.896-2-2c0-1.105,0.896-2,2-2s2-0.896,2-2s-0.896-2-2-2h-2h-3.998h-3h-4h-3h-3.999h-2c-3.313,0-5.999-2.686-5.999-5.999c0-3.175,2.475-5.747,5.596-5.959c0.131-0.026,0.266-0.04,0.403-0.04l0,0h12.999h6.998h2c1.104,0,2-0.896,2-2s-0.896-2-2-2s-2-0.895-2-2c0-1.104,0.896-2,2-2c0.14,0,0.272,0.015,0.403,0.041c3.121,0.211,5.597,2.783,5.597,5.959C61.999,45.314,59.312,48.001,55.999,48.001z"></path>
                            </g>
                          </g>
                        </svg>
                        <!-- wind-->
                      </div>
                      <div class="col-lg-2 col-3">
                        <svg class="climacon climacon_tornado" id="tornado" version="1.1" viewbox="15 15 70 70">
                          <g class="climacon_iconWrap climacon_iconWrap-tornado">
                            <g class="climacon_componentWrap climacon_componentWrap-tornado">
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_tornadoLine" d="M68.997,36.459H31.002c-1.104,0-2-0.896-2-1.999c0-1.104,0.896-2,2-2h37.995c1.104,0,2,0.896,2,2C70.997,35.563,70.102,36.459,68.997,36.459z"></path>
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_tornadoLine" d="M35.002,40.459h29.996c1.104,0,2,0.896,2,2s-0.896,1.999-2,1.999H35.002c-1.104,0-2-0.896-2-1.999C33.002,41.354,33.898,40.459,35.002,40.459z"></path>
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_tornadoLine" d="M39.001,48.458h21.998c1.104,0,1.999,0.896,1.999,1.999c0,1.104-0.896,2-1.999,2H39.001c-1.104,0-1.999-0.896-1.999-2C37.002,49.354,37.897,48.458,39.001,48.458z"></path>
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_tornadoLine" d="M47,64.456h5.999c1.104,0,2,0.896,2,1.999s-0.896,2-2,2H47c-1.104,0-2-0.896-2-2S45.896,64.456,47,64.456z"></path>
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_tornadoLine" d="M40.869,58.456c0-1.104,0.896-1.999,2-1.999h13.998c1.104,0,2,0.896,2,1.999c0,1.104-0.896,2-2,2H42.869C41.765,60.456,40.869,59.561,40.869,58.456z"></path>
                            </g>
                          </g>
                        </svg>
                        <!-- tornado-->
                      </div>
                      <div class="col-lg-2 col-3">
                        <svg class="climacon climacon_cloud" id="cloud" version="1.1" viewbox="15 15 70 70">
                          <clippath id="cloudFillClip">
                            <path d="M15,15v70h70V15H15z M59.943,61.639c-3.02,0-12.381,0-15.999,0c-6.626,0-11.998-5.371-11.998-11.998c0-6.627,5.372-11.999,11.998-11.999c5.691,0,10.434,3.974,11.665,9.29c1.252-0.81,2.733-1.291,4.334-1.291c4.418,0,8,3.582,8,8C67.943,58.057,64.361,61.639,59.943,61.639z"></path>
                          </clippath>
                          <g class="climacon_iconWrap climacon_iconWrap-cloud">
                            <g class="climacon_componentWrap climacon_componentWrap_cloud" clip-path="url(#cloudFillClip)">
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_cloud" d="M43.945,65.639c-8.835,0-15.998-7.162-15.998-15.998c0-8.836,7.163-15.998,15.998-15.998c6.004,0,11.229,3.312,13.965,8.203c0.664-0.113,1.338-0.205,2.033-0.205c6.627,0,11.998,5.373,11.998,12c0,6.625-5.371,11.998-11.998,11.998C57.168,65.639,47.143,65.639,43.945,65.639z"></path>
                            </g>
                          </g>
                        </svg>
                        <!-- cloud-->
                      </div>
                      <div class="col-lg-2 col-3">
                        <svg class="climacon climacon_cloudFill" id="cloudFill" version="1.1" viewbox="15 15 70 70">
                          <g class="climacon_iconWrap climacon_iconWrap-cloud">
                            <g class="climacon_componentWrap climacon_componentWrap_cloud">
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_cloud" d="M43.945,65.639c-8.835,0-15.998-7.162-15.998-15.998c0-8.836,7.163-15.998,15.998-15.998c6.004,0,11.229,3.312,13.965,8.203c0.664-0.113,1.338-0.205,2.033-0.205c6.627,0,11.998,5.373,11.998,12c0,6.625-5.371,11.998-11.998,11.998C57.168,65.639,47.143,65.639,43.945,65.639z"></path>
                              <path class="climacon_component climacon_component-fill climacon_component-fill_cloud" fill="#FFFFFF" d="M59.943,61.639c4.418,0,8-3.582,8-7.998c0-4.417-3.582-8-8-8c-1.601,0-3.082,0.481-4.334,1.291c-1.23-5.316-5.973-9.29-11.665-9.29c-6.626,0-11.998,5.372-11.998,11.999c0,6.626,5.372,11.998,11.998,11.998C47.562,61.639,56.924,61.639,59.943,61.639z"></path>
                            </g>
                          </g>
                        </svg>
                        <!-- cloudFill-->
                      </div>
                      <div class="col-lg-2 col-3">
                        <svg class="climacon climacon_cloudSun" id="cloudSun" version="1.1" viewbox="15 15 70 70">
                          <clippath id="cloudFillClipfill">
                            <path d="M15,15v70h70V15H15z M59.943,61.639c-3.02,0-12.381,0-15.999,0c-6.626,0-11.998-5.371-11.998-11.998c0-6.627,5.372-11.999,11.998-11.999c5.691,0,10.434,3.974,11.665,9.29c1.252-0.81,2.733-1.291,4.334-1.291c4.418,0,8,3.582,8,8C67.943,58.057,64.361,61.639,59.943,61.639z"></path>
                          </clippath>
                          <clippath id="sunCloudFillClip">
                            <path d="M15,15v70h70V15H15z M57.945,49.641c-4.417,0-8-3.582-8-7.999c0-4.418,3.582-7.999,8-7.999s7.998,3.581,7.998,7.999C65.943,46.059,62.362,49.641,57.945,49.641z"></path>
                          </clippath>
                          <g class="climacon_iconWrap climacon_cloudSun-iconWrap">
                            <g clip-path="url(#cloudFillClip)">
                              <g class="climacon_componentWrap climacon_componentWrap-sun climacon_componentWrap-sun_cloud">
                                <g class="climacon_componentWrap climacon_componentWrap_sunSpoke">
                                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-orth" d="M80.029,43.611h-3.998c-1.105,0-2-0.896-2-1.999s0.895-2,2-2h3.998c1.104,0,2,0.896,2,2S81.135,43.611,80.029,43.611z"></path>
                                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M72.174,30.3c-0.781,0.781-2.049,0.781-2.828,0c-0.781-0.781-0.781-2.047,0-2.828l2.828-2.828c0.779-0.781,2.047-0.781,2.828,0c0.779,0.781,0.779,2.047,0,2.828L72.174,30.3z"></path>
                                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M58.033,25.614c-1.105,0-2-0.896-2-2v-3.999c0-1.104,0.895-2,2-2c1.104,0,2,0.896,2,2v3.999C60.033,24.718,59.135,25.614,58.033,25.614z"></path>
                                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M43.892,30.3l-2.827-2.828c-0.781-0.781-0.781-2.047,0-2.828c0.78-0.781,2.047-0.781,2.827,0l2.827,2.828c0.781,0.781,0.781,2.047,0,2.828C45.939,31.081,44.673,31.081,43.892,30.3z"></path>
                                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M42.033,41.612c0,1.104-0.896,1.999-2,1.999h-4c-1.104,0-1.998-0.896-1.998-1.999s0.896-2,1.998-2h4C41.139,39.612,42.033,40.509,42.033,41.612z"></path>
                                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M43.892,52.925c0.781-0.78,2.048-0.78,2.827,0c0.781,0.78,0.781,2.047,0,2.828l-2.827,2.827c-0.78,0.781-2.047,0.781-2.827,0c-0.781-0.78-0.781-2.047,0-2.827L43.892,52.925z"></path>
                                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M58.033,57.61c1.104,0,2,0.895,2,1.999v4c0,1.104-0.896,2-2,2c-1.105,0-2-0.896-2-2v-4C56.033,58.505,56.928,57.61,58.033,57.61z"></path>
                                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M72.174,52.925l2.828,2.828c0.779,0.78,0.779,2.047,0,2.827c-0.781,0.781-2.049,0.781-2.828,0l-2.828-2.827c-0.781-0.781-0.781-2.048,0-2.828C70.125,52.144,71.391,52.144,72.174,52.925z"></path>
                                </g>
                                <g class="climacon_wrapperComponent climacon_wrapperComponent-sunBody" clip-path="url(#sunCloudFillClip)">
                                  <circle class="climacon_component climacon_component-stroke climacon_component-stroke_sunBody" cx="58.033" cy="41.612" r="11.999"></circle>
                                </g>
                              </g>
                            </g>
                            <g class="climacon_wrapperComponent climacon_wrapperComponent-cloud" clip-path="url(#cloudFillClip)">
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_cloud" d="M44.033,65.641c-8.836,0-15.999-7.162-15.999-15.998c0-8.835,7.163-15.998,15.999-15.998c6.006,0,11.233,3.312,13.969,8.203c0.664-0.113,1.338-0.205,2.033-0.205c6.627,0,11.998,5.373,11.998,12c0,6.625-5.371,11.998-11.998,11.998C57.26,65.641,47.23,65.641,44.033,65.641z"></path>
                            </g>
                          </g>
                        </svg>
                        <!-- cloudSun-->
                      </div>
                      <div class="col-lg-2 col-3">
                        <svg class="climacon climacon_cloudSunFill" id="cloudSunFill" version="1.1" viewbox="15 15 70 70">
                          <g class="climacon_iconWrap climacon_cloudSunFill-iconWrap">
                            <g class="climacon_componentWrap climacon_componentWrap-sun climacon_componentWrap-sun_cloud">
                              <g class="climacon_componentWrap climacon_componentWrap_sunSpoke">
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M80.029,43.611h-3.998c-1.105,0-2-0.896-2-1.999s0.895-2,2-2h3.998c1.104,0,2,0.896,2,2S81.135,43.611,80.029,43.611z"></path>
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M72.174,30.3c-0.781,0.781-2.049,0.781-2.828,0c-0.781-0.781-0.781-2.047,0-2.828l2.828-2.828c0.779-0.781,2.047-0.781,2.828,0c0.779,0.781,0.779,2.047,0,2.828L72.174,30.3z"></path>
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M58.033,25.614c-1.105,0-2-0.896-2-2v-3.999c0-1.104,0.895-2,2-2c1.104,0,2,0.896,2,2v3.999C60.033,24.718,59.135,25.614,58.033,25.614z"></path>
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M43.892,30.3l-2.827-2.828c-0.781-0.781-0.781-2.047,0-2.828c0.78-0.781,2.047-0.781,2.827,0l2.827,2.828c0.781,0.781,0.781,2.047,0,2.828C45.939,31.081,44.673,31.081,43.892,30.3z"></path>
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M42.033,41.612c0,1.104-0.896,1.999-2,1.999h-4c-1.104,0-1.998-0.896-1.998-1.999s0.896-2,1.998-2h4C41.139,39.612,42.033,40.509,42.033,41.612z"></path>
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M43.892,52.925c0.781-0.78,2.048-0.78,2.827,0c0.781,0.78,0.781,2.047,0,2.828l-2.827,2.827c-0.78,0.781-2.047,0.781-2.827,0c-0.781-0.78-0.781-2.047,0-2.827L43.892,52.925z"></path>
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M58.033,57.61c1.104,0,2,0.895,2,1.999v4c0,1.104-0.896,2-2,2c-1.105,0-2-0.896-2-2v-4C56.033,58.505,56.928,57.61,58.033,57.61z"></path>
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M72.174,52.925l2.828,2.828c0.779,0.78,0.779,2.047,0,2.827c-0.781,0.781-2.049,0.781-2.828,0l-2.828-2.827c-0.781-0.781-0.781-2.048,0-2.828C70.125,52.144,71.391,52.144,72.174,52.925z"></path>
                              </g>
                              <g class="climacon_wrapperComponent climacon_wrapperComponent-sunBody">
                                <circle class="climacon_component climacon_component-stroke climacon_component-stroke_sunBody" cx="58.033" cy="41.612" r="11.999"></circle>
                                <circle class="climacon_component climacon_component-fill climacon_component-fill_sunBody" fill="#FFFFFF" cx="58.033" cy="41.612" r="7.999"></circle>
                              </g>
                            </g>
                            <g class="climacon_wrapperComponent climacon_wrapperComponent-cloud">
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_cloud" d="M44.033,65.641c-8.836,0-15.999-7.162-15.999-15.998c0-8.835,7.163-15.998,15.999-15.998c6.006,0,11.233,3.312,13.969,8.203c0.664-0.113,1.338-0.205,2.033-0.205c6.627,0,11.998,5.373,11.998,12c0,6.625-5.371,11.998-11.998,11.998C57.26,65.641,47.23,65.641,44.033,65.641z"></path>
                              <path class="climacon_component climacon_component-fill climacon_component-fill_cloud" fill="#FFFFFF" d="M60.035,61.641c4.418,0,8-3.582,8-7.998c0-4.418-3.582-8-8-8c-1.6,0-3.082,0.481-4.334,1.291c-1.23-5.316-5.976-9.29-11.668-9.29c-6.627,0-11.999,5.372-11.999,11.999c0,6.627,5.372,11.998,11.999,11.998C47.65,61.641,57.016,61.641,60.035,61.641z"></path>
                            </g>
                          </g>
                        </svg>
                        <!-- cloudSunFill-->
                      </div>
                      <div class="col-lg-2 col-3">
                        <svg class="climacon climacon_cloudMoon" id="cloudMoon" version="1.1" viewbox="15 15 70 70">
                          <clippath id="cloudFillClipfill1">
                            <path d="M15,15v70h70V15H15z M59.943,61.639c-3.02,0-12.381,0-15.999,0c-6.626,0-11.998-5.371-11.998-11.998c0-6.627,5.372-11.999,11.998-11.999c5.691,0,10.434,3.974,11.665,9.29c1.252-0.81,2.733-1.291,4.334-1.291c4.418,0,8,3.582,8,8C67.943,58.057,64.361,61.639,59.943,61.639z"></path>
                          </clippath>
                          <clippath id="moonCloudFillClipfill">
                            <path d="M0,0v100h100V0H0z M60.943,46.641c-4.418,0-7.999-3.582-7.999-7.999c0-3.803,2.655-6.979,6.211-7.792c0.903,4.854,4.726,8.676,9.579,9.58C67.922,43.986,64.745,46.641,60.943,46.641z"></path>
                          </clippath>
                          <g class="climacon_iconWrap climacon_iconWrap-cloudMoon">
                            <g clip-path="url(#cloudFillClip)">
                              <g class="climacon_wrapperComponent climacon_wrapperComponent-moon climacon_componentWrap-moon_cloud" clip-path="url(#moonCloudFillClip)">
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_moon" d="M61.023,50.641c-6.627,0-11.999-5.372-11.999-11.998c0-6.627,5.372-11.999,11.999-11.999c0.755,0,1.491,0.078,2.207,0.212c-0.132,0.576-0.208,1.173-0.208,1.788c0,4.418,3.582,7.999,8,7.999c0.614,0,1.212-0.076,1.788-0.208c0.133,0.717,0.211,1.452,0.211,2.208C73.021,45.269,67.649,50.641,61.023,50.641z"></path>
                              </g>
                            </g>
                            <g class="climacon_wrapperComponent climacon_wrapperComponent-cloud" clip-path="url(#cloudFillClip)">
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_cloud" d="M44.033,65.641c-8.836,0-15.999-7.162-15.999-15.998c0-8.835,7.163-15.998,15.999-15.998c6.006,0,11.233,3.312,13.969,8.203c0.664-0.113,1.338-0.205,2.033-0.205c6.627,0,11.998,5.373,11.998,12c0,6.625-5.371,11.998-11.998,11.998C57.26,65.641,47.23,65.641,44.033,65.641z"></path>
                            </g>
                          </g>
                        </svg>
                        <!-- cloudMoon-->
                      </div>
                      <div class="col-lg-2 col-3">
                        <svg class="climacon climacon_cloudMoonFill" id="cloudMoonFill" version="1.1" viewbox="15 15 70 70">
                          <g class="climacon_iconWrap climacon_iconWrap-cloudMoonFill">
                            <g class="climacon_wrapperComponent climacon_wrapperComponent-moon climacon_componentWrap-moon_cloud">
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_moon" d="M61.023,50.641c-6.627,0-11.999-5.372-11.999-11.998c0-6.627,5.372-11.999,11.999-11.999c0.755,0,1.491,0.078,2.207,0.212c-0.132,0.576-0.208,1.173-0.208,1.788c0,4.418,3.582,7.999,8,7.999c0.614,0,1.212-0.076,1.788-0.208c0.133,0.717,0.211,1.452,0.211,2.208C73.021,45.269,67.649,50.641,61.023,50.641z"></path>
                              <path class="climacon_component climacon_component-fill climacon_component-fill_moon" fill="#FFFFFF" d="M59.235,30.851c-3.556,0.813-6.211,3.989-6.211,7.792c0,4.417,3.581,7.999,7.999,7.999c3.802,0,6.979-2.655,7.791-6.211C63.961,39.527,60.139,35.705,59.235,30.851z"></path>
                            </g>
                            <g class="climacon_wrapperComponent climacon_wrapperComponent-cloud">
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_cloud" d="M44.033,65.641c-8.836,0-15.999-7.162-15.999-15.998c0-8.835,7.163-15.998,15.999-15.998c6.006,0,11.233,3.312,13.969,8.203c0.664-0.113,1.338-0.205,2.033-0.205c6.627,0,11.998,5.373,11.998,12c0,6.625-5.371,11.998-11.998,11.998C57.26,65.641,47.23,65.641,44.033,65.641z"></path>
                              <path class="climacon_component climacon_component-fill climacon_component-fill_cloud" fill="#FFFFFF" d="M60.035,61.641c4.418,0,8-3.582,8-7.998c0-4.418-3.582-8-8-8c-1.6,0-3.082,0.481-4.334,1.291c-1.23-5.316-5.976-9.29-11.668-9.29c-6.627,0-11.999,5.372-11.999,11.999c0,6.627,5.372,11.998,11.999,11.998C47.65,61.641,57.016,61.641,60.035,61.641z"></path>
                            </g>
                          </g>
                        </svg>
                        <!-- cloudMoonFill-->
                      </div>
                      <div class="col-lg-2 col-3">
                        <svg class="climacon climacon_cloudDrizzle" id="cloudDrizzle" version="1.1" viewbox="15 15 70 70">
                          <g class="climacon_iconWrap climacon_iconWrap-cloudDrizzle">
                            <g class="climacon_wrapperComponent climacon_wrapperComponent-drizzle">
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_drizzle climacon_component-stroke_drizzle-left" d="M42.001,53.644c1.104,0,2,0.896,2,2v3.998c0,1.105-0.896,2-2,2c-1.105,0-2.001-0.895-2.001-2v-3.998C40,54.538,40.896,53.644,42.001,53.644z"></path>
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_drizzle climacon_component-stroke_drizzle-middle" d="M49.999,53.644c1.104,0,2,0.896,2,2v4c0,1.104-0.896,2-2,2s-1.998-0.896-1.998-2v-4C48.001,54.54,48.896,53.644,49.999,53.644z"></path>
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_drizzle climacon_component-stroke_drizzle-right" d="M57.999,53.644c1.104,0,2,0.896,2,2v3.998c0,1.105-0.896,2-2,2c-1.105,0-2-0.895-2-2v-3.998C55.999,54.538,56.894,53.644,57.999,53.644z"></path>
                            </g>
                            <g class="climacon_wrapperComponent climacon_wrapperComponent-cloud">
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_cloud" d="M63.999,64.944v-4.381c2.387-1.386,3.998-3.961,3.998-6.92c0-4.418-3.58-8-7.998-8c-1.603,0-3.084,0.481-4.334,1.291c-1.232-5.316-5.973-9.29-11.664-9.29c-6.628,0-11.999,5.372-11.999,12c0,3.549,1.55,6.729,3.998,8.926v4.914c-4.776-2.769-7.998-7.922-7.998-13.84c0-8.836,7.162-15.999,15.999-15.999c6.004,0,11.229,3.312,13.965,8.203c0.664-0.113,1.336-0.205,2.033-0.205c6.627,0,11.998,5.373,11.998,12C71.997,58.864,68.655,63.296,63.999,64.944z"></path>
                            </g>
                          </g>
                        </svg>
                        <!-- cloudDrizzle-->
                      </div>
                      <div class="col-lg-2 col-3">
                        <svg class="climacon climacon_cloudDrizzleFill" id="cloudDrizzleFill" version="1.1" viewbox="15 15 70 70">
                          <g class="climacon_iconWrap climacon_iconWrap-cloudDrizzleFill">
                            <g class="climacon_wrapperComponent climacon_wrapperComponent-drizzle">
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_drizzle climacon_component-stroke_drizzle-left" d="M42.001,53.644c1.104,0,2,0.896,2,2v3.998c0,1.105-0.896,2-2,2c-1.105,0-2.001-0.895-2.001-2v-3.998C40,54.538,40.896,53.644,42.001,53.644z"></path>
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_drizzle climacon_component-stroke_drizzle-middle" d="M49.999,53.644c1.104,0,2,0.896,2,2v4c0,1.104-0.896,2-2,2s-1.998-0.896-1.998-2v-4C48.001,54.54,48.896,53.644,49.999,53.644z"></path>
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_drizzle climacon_component-stroke_drizzle-right" d="M57.999,53.644c1.104,0,2,0.896,2,2v3.998c0,1.105-0.896,2-2,2c-1.105,0-2-0.895-2-2v-3.998C55.999,54.538,56.894,53.644,57.999,53.644z"></path>
                            </g>
                            <g class="climacon_componentWrap climacon_componentWrap_cloud">
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_cloud" d="M43.945,65.639c-8.835,0-15.998-7.162-15.998-15.998c0-8.836,7.163-15.998,15.998-15.998c6.004,0,11.229,3.312,13.965,8.203c0.664-0.113,1.338-0.205,2.033-0.205c6.627,0,11.998,5.373,11.998,12c0,6.625-5.371,11.998-11.998,11.998C57.168,65.639,47.143,65.639,43.945,65.639z"></path>
                              <path class="climacon_component climacon_component-fill climacon_component-fill_cloud" fill="#FFFFFF" d="M59.943,61.639c4.418,0,8-3.582,8-7.998c0-4.417-3.582-8-8-8c-1.601,0-3.082,0.481-4.334,1.291c-1.23-5.316-5.973-9.29-11.665-9.29c-6.626,0-11.998,5.372-11.998,11.999c0,6.626,5.372,11.998,11.998,11.998C47.562,61.639,56.924,61.639,59.943,61.639z"></path>
                            </g>
                          </g>
                        </svg>
                        <!-- cloudDrizzleFill-->
                      </div>
                      <div class="col-lg-2 col-3">
                        <svg class="climacon climacon_cloudDrizzleSun" id="cloudDrizzleSun" version="1.1" viewbox="15 15 70 70">
                          <clippath id="cloudFillClipfill2_2">
                            <path d="M15,15v70h70V15H15z M59.943,61.639c-3.02,0-12.381,0-15.999,0c-6.626,0-11.998-5.371-11.998-11.998c0-6.627,5.372-11.999,11.998-11.999c5.691,0,10.434,3.974,11.665,9.29c1.252-0.81,2.733-1.291,4.334-1.291c4.418,0,8,3.582,8,8C67.943,58.057,64.361,61.639,59.943,61.639z"></path>
                          </clippath>
                          <clippath id="sunCloudFillClipfill4">
                            <path d="M15,15v70h70V15H15z M57.945,49.641c-4.417,0-8-3.582-8-7.999c0-4.418,3.582-7.999,8-7.999s7.998,3.581,7.998,7.999C65.943,46.059,62.362,49.641,57.945,49.641z"></path>
                          </clippath>
                          <clippath id="cloudSunFillClip">
                            <path d="M15,15v70h20.947V63.481c-4.778-2.767-8-7.922-8-13.84c0-8.836,7.163-15.998,15.998-15.998c6.004,0,11.229,3.312,13.965,8.203c0.664-0.113,1.338-0.205,2.033-0.205c6.627,0,11.998,5.373,11.998,12c0,5.262-3.394,9.723-8.107,11.341V85H85V15H15z"></path>
                          </clippath>
                          <g class="climacon_iconWrap climacon_iconWrap-cloudDrizzleSun">
                            <g clip-path="url(#cloudSunFillClip)">
                              <g class="climacon_componentWrap climacon_componentWrap-sun climacon_componentWrap-sun_cloud">
                                <g class="climacon_componentWrap climacon_componentWrap_sunSpoke">
                                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M80.029,43.611h-3.998c-1.105,0-2-0.896-2-1.999s0.895-2,2-2h3.998c1.104,0,2,0.896,2,2S81.135,43.611,80.029,43.611z"></path>
                                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M72.174,30.3c-0.781,0.781-2.049,0.781-2.828,0c-0.781-0.781-0.781-2.047,0-2.828l2.828-2.828c0.779-0.781,2.047-0.781,2.828,0c0.779,0.781,0.779,2.047,0,2.828L72.174,30.3z"></path>
                                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M58.033,25.614c-1.105,0-2-0.896-2-2v-3.999c0-1.104,0.895-2,2-2c1.104,0,2,0.896,2,2v3.999C60.033,24.718,59.135,25.614,58.033,25.614z"></path>
                                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M43.892,30.3l-2.827-2.828c-0.781-0.781-0.781-2.047,0-2.828c0.78-0.781,2.047-0.781,2.827,0l2.827,2.828c0.781,0.781,0.781,2.047,0,2.828C45.939,31.081,44.673,31.081,43.892,30.3z"></path>
                                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M42.033,41.612c0,1.104-0.896,1.999-2,1.999h-4c-1.104,0-1.998-0.896-1.998-1.999s0.896-2,1.998-2h4C41.139,39.612,42.033,40.509,42.033,41.612z"></path>
                                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M43.892,52.925c0.781-0.78,2.048-0.78,2.827,0c0.781,0.78,0.781,2.047,0,2.828l-2.827,2.827c-0.78,0.781-2.047,0.781-2.827,0c-0.781-0.78-0.781-2.047,0-2.827L43.892,52.925z"></path>
                                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M58.033,57.61c1.104,0,2,0.895,2,1.999v4c0,1.104-0.896,2-2,2c-1.105,0-2-0.896-2-2v-4C56.033,58.505,56.928,57.61,58.033,57.61z"></path>
                                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M72.174,52.925l2.828,2.828c0.779,0.78,0.779,2.047,0,2.827c-0.781,0.781-2.049,0.781-2.828,0l-2.828-2.827c-0.781-0.781-0.781-2.048,0-2.828C70.125,52.144,71.391,52.144,72.174,52.925z"></path>
                                </g>
                                <g class="climacon_wrapperComponent climacon_wrapperComponent-sunBody" clip-path="url(#sunCloudFillClip)">
                                  <circle class="climacon_component climacon_component-stroke climacon_component-stroke_sunBody" cx="58.033" cy="41.612" r="11.999"></circle>
                                </g>
                              </g>
                            </g>
                            <g class="climacon_wrapperComponent climacon_wrapperComponent-drizzle">
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_drizzle climacon_component-stroke_drizzle-left" d="M42.001,53.644c1.104,0,2,0.896,2,2v3.998c0,1.105-0.896,2-2,2c-1.105,0-2.001-0.895-2.001-2v-3.998C40,54.538,40.896,53.644,42.001,53.644z"></path>
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_drizzle climacon_component-stroke_drizzle-middle" d="M49.999,53.644c1.104,0,2,0.896,2,2v4c0,1.104-0.896,2-2,2s-1.998-0.896-1.998-2v-4C48.001,54.54,48.896,53.644,49.999,53.644z"></path>
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_drizzle climacon_component-stroke_drizzle-right" d="M57.999,53.644c1.104,0,2,0.896,2,2v3.998c0,1.105-0.896,2-2,2c-1.105,0-2-0.895-2-2v-3.998C55.999,54.538,56.894,53.644,57.999,53.644z"></path>
                            </g>
                            <g class="climacon_wrapperComponent climacon_wrapperComponent-cloud" clip-path="url(#cloudFillClip)">
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_cloud" d="M63.999,64.944v-4.381c2.387-1.386,3.998-3.961,3.998-6.92c0-4.418-3.58-8-7.998-8c-1.603,0-3.084,0.481-4.334,1.291c-1.232-5.316-5.973-9.29-11.664-9.29c-6.628,0-11.999,5.372-11.999,12c0,3.549,1.55,6.729,3.998,8.926v4.914c-4.776-2.769-7.998-7.922-7.998-13.84c0-8.836,7.162-15.999,15.999-15.999c6.004,0,11.229,3.312,13.965,8.203c0.664-0.113,1.336-0.205,2.033-0.205c6.627,0,11.998,5.373,11.998,12C71.997,58.864,68.655,63.296,63.999,64.944z"></path>
                            </g>
                          </g>
                        </svg>
                        <!-- cloudDrizzleSun-->
                      </div>
                      <div class="col-lg-2 col-3">
                        <svg class="climacon climacon_cloudDrizzleSunFill" id="cloudDrizzleSunFill" version="1.1" viewbox="15 15 70 70">
                          <g class="climacon_iconWrap climacon_iconWrap-cloudDrizzleSunFill">
                            <g class="climacon_componentWrap climacon_componentWrap-sun climacon_componentWrap-sun_cloud">
                              <g class="climacon_componentWrap climacon_componentWrap_sunSpoke">
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M80.029,43.611h-3.998c-1.105,0-2-0.896-2-1.999s0.895-2,2-2h3.998c1.104,0,2,0.896,2,2S81.135,43.611,80.029,43.611z"></path>
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M72.174,30.3c-0.781,0.781-2.049,0.781-2.828,0c-0.781-0.781-0.781-2.047,0-2.828l2.828-2.828c0.779-0.781,2.047-0.781,2.828,0c0.779,0.781,0.779,2.047,0,2.828L72.174,30.3z"></path>
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M58.033,25.614c-1.105,0-2-0.896-2-2v-3.999c0-1.104,0.895-2,2-2c1.104,0,2,0.896,2,2v3.999C60.033,24.718,59.135,25.614,58.033,25.614z"></path>
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M43.892,30.3l-2.827-2.828c-0.781-0.781-0.781-2.047,0-2.828c0.78-0.781,2.047-0.781,2.827,0l2.827,2.828c0.781,0.781,0.781,2.047,0,2.828C45.939,31.081,44.673,31.081,43.892,30.3z"></path>
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M42.033,41.612c0,1.104-0.896,1.999-2,1.999h-4c-1.104,0-1.998-0.896-1.998-1.999s0.896-2,1.998-2h4C41.139,39.612,42.033,40.509,42.033,41.612z"></path>
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M43.892,52.925c0.781-0.78,2.048-0.78,2.827,0c0.781,0.78,0.781,2.047,0,2.828l-2.827,2.827c-0.78,0.781-2.047,0.781-2.827,0c-0.781-0.78-0.781-2.047,0-2.827L43.892,52.925z"></path>
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M58.033,57.61c1.104,0,2,0.895,2,1.999v4c0,1.104-0.896,2-2,2c-1.105,0-2-0.896-2-2v-4C56.033,58.505,56.928,57.61,58.033,57.61z"></path>
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M72.174,52.925l2.828,2.828c0.779,0.78,0.779,2.047,0,2.827c-0.781,0.781-2.049,0.781-2.828,0l-2.828-2.827c-0.781-0.781-0.781-2.048,0-2.828C70.125,52.144,71.391,52.144,72.174,52.925z"></path>
                              </g>
                              <g class="climacon_wrapperComponent climacon_wrapperComponent-sunBody">
                                <circle class="climacon_component climacon_component-stroke climacon_component-stroke_sunBody" cx="58.033" cy="41.612" r="11.999"></circle>
                                <circle class="climacon_component climacon_component-fill climacon_component-fill_sunBody" fill="#FFFFFF" cx="58.033" cy="41.612" r="7.999"></circle>
                              </g>
                            </g>
                            <g class="climacon_wrapperComponent climacon_wrapperComponent-drizzle">
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_drizzle climacon_component-stroke_drizzle-left" d="M42.001,53.644c1.104,0,2,0.896,2,2v3.998c0,1.105-0.896,2-2,2c-1.105,0-2.001-0.895-2.001-2v-3.998C40,54.538,40.896,53.644,42.001,53.644z"></path>
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_drizzle climacon_component-stroke_drizzle-middle" d="M49.999,53.644c1.104,0,2,0.896,2,2v4c0,1.104-0.896,2-2,2s-1.998-0.896-1.998-2v-4C48.001,54.54,48.896,53.644,49.999,53.644z"></path>
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_drizzle climacon_component-stroke_drizzle-right" d="M57.999,53.644c1.104,0,2,0.896,2,2v3.998c0,1.105-0.896,2-2,2c-1.105,0-2-0.895-2-2v-3.998C55.999,54.538,56.894,53.644,57.999,53.644z"></path>
                            </g>
                            <g class="climacon_componentWrap climacon_componentWrap_cloud">
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_cloud" d="M43.945,65.639c-8.835,0-15.998-7.162-15.998-15.998c0-8.836,7.163-15.998,15.998-15.998c6.004,0,11.229,3.312,13.965,8.203c0.664-0.113,1.338-0.205,2.033-0.205c6.627,0,11.998,5.373,11.998,12c0,6.625-5.371,11.998-11.998,11.998C57.168,65.639,47.143,65.639,43.945,65.639z"></path>
                              <path class="climacon_component climacon_component-fill climacon_component-fill_cloud" fill="#FFFFFF" d="M59.943,61.639c4.418,0,8-3.582,8-7.998c0-4.417-3.582-8-8-8c-1.601,0-3.082,0.481-4.334,1.291c-1.23-5.316-5.973-9.29-11.665-9.29c-6.626,0-11.998,5.372-11.998,11.999c0,6.626,5.372,11.998,11.998,11.998C47.562,61.639,56.924,61.639,59.943,61.639z"></path>
                            </g>
                          </g>
                        </svg>
                        <!-- cloudDrizzleSunFill-->
                      </div>
                      <div class="col-lg-2 col-3">
                        <svg class="climacon climacon_cloudDrizzleMoon" id="cloudDrizzleMoon" version="1.1" viewbox="15 15 70 70">
                          <clippath id="moonCloudFillClipfill1">
                            <path d="M0,0v100h100V0H0z M60.943,46.641c-4.418,0-7.999-3.582-7.999-7.999c0-3.803,2.655-6.979,6.211-7.792c0.903,4.854,4.726,8.676,9.579,9.58C67.922,43.986,64.745,46.641,60.943,46.641z"></path>
                          </clippath>
                          <clippath id="cloudFillClipfill11">
                            <path d="M15,15v70h70V15H15z M59.943,61.639c-3.02,0-12.381,0-15.999,0c-6.626,0-11.998-5.371-11.998-11.998c0-6.627,5.372-11.999,11.998-11.999c5.691,0,10.434,3.974,11.665,9.29c1.252-0.81,2.733-1.291,4.334-1.291c4.418,0,8,3.582,8,8C67.943,58.057,64.361,61.639,59.943,61.639z"></path>
                          </clippath>
                          <g class="climacon_iconWrap climacon_iconWrap-cloudDrizzleMoon">
                            <g clip-path="url(#cloudFillClip)">
                              <g class="climacon_wrapperComponent climacon_wrapperComponent-moon climacon_componentWrap-moon_cloud" clip-path="url(#moonCloudFillClip)">
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_moon" d="M61.023,50.641c-6.627,0-11.999-5.372-11.999-11.998c0-6.627,5.372-11.999,11.999-11.999c0.755,0,1.491,0.078,2.207,0.212c-0.132,0.576-0.208,1.173-0.208,1.788c0,4.418,3.582,7.999,8,7.999c0.614,0,1.212-0.076,1.788-0.208c0.133,0.717,0.211,1.452,0.211,2.208C73.021,45.269,67.649,50.641,61.023,50.641z"></path>
                              </g>
                            </g>
                            <g class="climacon_wrapperComponent climacon_wrapperComponent-drizzle">
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_drizzle climacon_component-stroke_drizzle-left" d="M42.001,53.644c1.104,0,2,0.896,2,2v3.998c0,1.105-0.896,2-2,2c-1.105,0-2.001-0.895-2.001-2v-3.998C40,54.538,40.896,53.644,42.001,53.644z"></path>
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_drizzle climacon_component-stroke_drizzle-middle" d="M49.999,53.644c1.104,0,2,0.896,2,2v4c0,1.104-0.896,2-2,2s-1.998-0.896-1.998-2v-4C48.001,54.54,48.896,53.644,49.999,53.644z"></path>
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_drizzle climacon_component-stroke_drizzle-right" d="M57.999,53.644c1.104,0,2,0.896,2,2v3.998c0,1.105-0.896,2-2,2c-1.105,0-2-0.895-2-2v-3.998C55.999,54.538,56.894,53.644,57.999,53.644z"></path>
                            </g>
                            <g class="climacon_wrapperComponent climacon_wrapperComponent-cloud" clip-path="url(#cloudFillClip)">
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_cloud" d="M63.999,64.944v-4.381c2.387-1.386,3.998-3.961,3.998-6.92c0-4.418-3.58-8-7.998-8c-1.603,0-3.084,0.481-4.334,1.291c-1.232-5.316-5.973-9.29-11.664-9.29c-6.628,0-11.999,5.372-11.999,12c0,3.549,1.55,6.729,3.998,8.926v4.914c-4.776-2.769-7.998-7.922-7.998-13.84c0-8.836,7.162-15.999,15.999-15.999c6.004,0,11.229,3.312,13.965,8.203c0.664-0.113,1.336-0.205,2.033-0.205c6.627,0,11.998,5.373,11.998,12C71.997,58.864,68.655,63.296,63.999,64.944z"></path>
                            </g>
                          </g>
                        </svg>
                        <!-- cloudDrizzleMoon-->
                      </div>
                      <div class="col-lg-2 col-3">
                        <svg class="climacon climacon_cloudDrizzleMoonFill" id="cloudDrizzleMoonFill" version="1.1" viewbox="15 15 70 70">
                          <g class="climacon_iconWrap climacon_iconWrap-cloudDrizzleMoonFill">
                            <g class="climacon_wrapperComponent climacon_wrapperComponent-moon climacon_componentWrap-moon_cloud">
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_moon" d="M61.023,50.641c-6.627,0-11.999-5.372-11.999-11.998c0-6.627,5.372-11.999,11.999-11.999c0.755,0,1.491,0.078,2.207,0.212c-0.132,0.576-0.208,1.173-0.208,1.788c0,4.418,3.582,7.999,8,7.999c0.614,0,1.212-0.076,1.788-0.208c0.133,0.717,0.211,1.452,0.211,2.208C73.021,45.269,67.649,50.641,61.023,50.641z"></path>
                              <path class="climacon_component climacon_component-fill climacon_component-fill_moon" fill="#FFFFFF" d="M59.235,30.851c-3.556,0.813-6.211,3.989-6.211,7.792c0,4.417,3.581,7.999,7.999,7.999c3.802,0,6.979-2.655,7.791-6.211C63.961,39.527,60.139,35.705,59.235,30.851z"></path>
                            </g>
                            <g class="climacon_wrapperComponent climacon_wrapperComponent-drizzle">
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_drizzle climacon_component-stroke_drizzle-left" d="M42.001,53.644c1.104,0,2,0.896,2,2v3.998c0,1.105-0.896,2-2,2c-1.105,0-2.001-0.895-2.001-2v-3.998C40,54.538,40.896,53.644,42.001,53.644z"></path>
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_drizzle climacon_component-stroke_drizzle-middle" d="M49.999,53.644c1.104,0,2,0.896,2,2v4c0,1.104-0.896,2-2,2s-1.998-0.896-1.998-2v-4C48.001,54.54,48.896,53.644,49.999,53.644z"></path>
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_drizzle climacon_component-stroke_drizzle-right" d="M57.999,53.644c1.104,0,2,0.896,2,2v3.998c0,1.105-0.896,2-2,2c-1.105,0-2-0.895-2-2v-3.998C55.999,54.538,56.894,53.644,57.999,53.644z"></path>
                            </g>
                            <g class="climacon_componentWrap climacon_componentWrap_cloud">
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_cloud" d="M43.945,65.639c-8.835,0-15.998-7.162-15.998-15.998c0-8.836,7.163-15.998,15.998-15.998c6.004,0,11.229,3.312,13.965,8.203c0.664-0.113,1.338-0.205,2.033-0.205c6.627,0,11.998,5.373,11.998,12c0,6.625-5.371,11.998-11.998,11.998C57.168,65.639,47.143,65.639,43.945,65.639z"></path>
                              <path class="climacon_component climacon_component-fill climacon_component-fill_cloud" fill="#FFFFFF" d="M59.943,61.639c4.418,0,8-3.582,8-7.998c0-4.417-3.582-8-8-8c-1.601,0-3.082,0.481-4.334,1.291c-1.23-5.316-5.973-9.29-11.665-9.29c-6.626,0-11.998,5.372-11.998,11.999c0,6.626,5.372,11.998,11.998,11.998C47.562,61.639,56.924,61.639,59.943,61.639z"></path>
                            </g>
                          </g>
                        </svg>
                      </div>
                      <!-- cloudDrizzleMoonFill-->
                      <div class="col-lg-2 col-3">
                        <svg class="climacon climacon_cloudDrizzleAlt" id="cloudDrizzleAlt" version="1.1" viewbox="15 15 70 70">
                          <g class="climacon_iconWrap climacon_iconWrap-cloudDrizzleAlt">
                            <g class="climacon_wrapperComponent climacon_wrapperComponent-drizzle">
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_drizzle climacon_component-stroke_drizzle-left" id="Drizzle-Left_1_" d="M56.969,57.672l-2.121,2.121c-1.172,1.172-1.172,3.072,0,4.242c1.17,1.172,3.07,1.172,4.24,0c1.172-1.17,1.172-3.07,0-4.242L56.969,57.672z"></path>
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_drizzle climacon_component-stroke_drizzle-middle" d="M50.088,57.672l-2.119,2.121c-1.174,1.172-1.174,3.07,0,4.242c1.17,1.172,3.068,1.172,4.24,0s1.172-3.07,0-4.242L50.088,57.672z"></path>
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_drizzle climacon_component-stroke_drizzle-right" d="M43.033,57.672l-2.121,2.121c-1.172,1.172-1.172,3.07,0,4.242s3.07,1.172,4.244,0c1.172-1.172,1.172-3.07,0-4.242L43.033,57.672z"></path>
                            </g>
                            <g class="climacon_wrapperComponent climacon_wrapperComponent-cloud">
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_cloud" d="M59.943,41.642c-0.696,0-1.369,0.092-2.033,0.205c-2.736-4.892-7.961-8.203-13.965-8.203c-8.835,0-15.998,7.162-15.998,15.997c0,5.992,3.3,11.207,8.177,13.947c0.276-1.262,0.892-2.465,1.873-3.445l0.057-0.057c-3.644-2.061-6.106-5.963-6.106-10.445c0-6.626,5.372-11.998,11.998-11.998c5.691,0,10.433,3.974,11.666,9.29c1.25-0.81,2.732-1.291,4.332-1.291c4.418,0,8,3.581,8,7.999c0,3.443-2.182,6.371-5.235,7.498c0.788,1.146,1.194,2.471,1.222,3.807c4.666-1.645,8.014-6.077,8.014-11.305C71.941,47.014,66.57,41.642,59.943,41.642z"></path>
                            </g>
                          </g>
                        </svg>
                      </div>
                      <!-- cloudDrizzleAlt-->
                      <div class="col-lg-2 col-3">
                        <svg class="climacon climacon_cloudDrizzleFillAlt" id="cloudDrizzleAltfill1" version="1.1" viewbox="15 15 70 70">
                          <g class="climacon_iconWrap climacon_iconWrap-cloudDrizzleFillAlt">
                            <g class="climacon_wrapperComponent climacon_wrapperComponent-drizzle">
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_drizzle climacon_component-stroke_drizzle-left" id="Drizzle-Left_1_1" d="M56.969,57.672l-2.121,2.121c-1.172,1.172-1.172,3.072,0,4.242c1.17,1.172,3.07,1.172,4.24,0c1.172-1.17,1.172-3.07,0-4.242L56.969,57.672z"></path>
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_drizzle climacon_component-stroke_drizzle-middle" d="M50.088,57.672l-2.119,2.121c-1.174,1.172-1.174,3.07,0,4.242c1.17,1.172,3.068,1.172,4.24,0s1.172-3.07,0-4.242L50.088,57.672z"></path>
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_drizzle climacon_component-stroke_drizzle-right" d="M43.033,57.672l-2.121,2.121c-1.172,1.172-1.172,3.07,0,4.242s3.07,1.172,4.244,0c1.172-1.172,1.172-3.07,0-4.242L43.033,57.672z"></path>
                            </g>
                            <g class="climacon_componentWrap climacon_componentWrap_cloud">
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_cloud" d="M43.945,65.639c-8.835,0-15.998-7.162-15.998-15.998c0-8.836,7.163-15.998,15.998-15.998c6.004,0,11.229,3.312,13.965,8.203c0.664-0.113,1.338-0.205,2.033-0.205c6.627,0,11.998,5.373,11.998,12c0,6.625-5.371,11.998-11.998,11.998C57.168,65.639,47.143,65.639,43.945,65.639z"></path>
                              <path class="climacon_component climacon_component-fill climacon_component-fill_cloud" fill="#FFFFFF" d="M59.943,61.639c4.418,0,8-3.582,8-7.998c0-4.417-3.582-8-8-8c-1.601,0-3.082,0.481-4.334,1.291c-1.23-5.316-5.973-9.29-11.665-9.29c-6.626,0-11.998,5.372-11.998,11.999c0,6.626,5.372,11.998,11.998,11.998C47.562,61.639,56.924,61.639,59.943,61.639z"></path>
                            </g>
                          </g>
                        </svg>
                      </div>
                      <!-- cloudDrizzleFillAlt-->
                      <div class="col-lg-2 col-3">
                        <svg class="climacon climacon_cloudDrizzleSunAlt" id="cloudDrizzleSunAlt" version="1.1" viewbox="15 15 70 70">
                          <clippath id="sunCloudFillClipfill1">
                            <path d="M15,15v70h70V15H15z M57.945,49.641c-4.417,0-8-3.582-8-7.999c0-4.418,3.582-7.999,8-7.999s7.998,3.581,7.998,7.999C65.943,46.059,62.362,49.641,57.945,49.641z"></path>
                          </clippath>
                          <clippath id="cloudSunFillClipfill">
                            <path d="M15,15v70h20.947V63.481c-4.778-2.767-8-7.922-8-13.84c0-8.836,7.163-15.998,15.998-15.998c6.004,0,11.229,3.312,13.965,8.203c0.664-0.113,1.338-0.205,2.033-0.205c6.627,0,11.998,5.373,11.998,12c0,5.262-3.394,9.723-8.107,11.341V85H85V15H15z"></path>
                          </clippath>
                          <g class="climacon_iconWrap climacon_iconWrap-cloudDrizzleSunAlt">
                            <g clip-path="url(#cloudSunFillClip)">
                              <g class="climacon_componentWrap climacon_componentWrap-sun climacon_componentWrap-sun_cloud">
                                <g class="climacon_componentWrap climacon_componentWrap_sunSpoke">
                                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M80.029,43.611h-3.998c-1.105,0-2-0.896-2-1.999s0.895-2,2-2h3.998c1.104,0,2,0.896,2,2S81.135,43.611,80.029,43.611z"></path>
                                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M72.174,30.3c-0.781,0.781-2.049,0.781-2.828,0c-0.781-0.781-0.781-2.047,0-2.828l2.828-2.828c0.779-0.781,2.047-0.781,2.828,0c0.779,0.781,0.779,2.047,0,2.828L72.174,30.3z"></path>
                                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M58.033,25.614c-1.105,0-2-0.896-2-2v-3.999c0-1.104,0.895-2,2-2c1.104,0,2,0.896,2,2v3.999C60.033,24.718,59.135,25.614,58.033,25.614z"></path>
                                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M43.892,30.3l-2.827-2.828c-0.781-0.781-0.781-2.047,0-2.828c0.78-0.781,2.047-0.781,2.827,0l2.827,2.828c0.781,0.781,0.781,2.047,0,2.828C45.939,31.081,44.673,31.081,43.892,30.3z"></path>
                                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M42.033,41.612c0,1.104-0.896,1.999-2,1.999h-4c-1.104,0-1.998-0.896-1.998-1.999s0.896-2,1.998-2h4C41.139,39.612,42.033,40.509,42.033,41.612z"></path>
                                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M43.892,52.925c0.781-0.78,2.048-0.78,2.827,0c0.781,0.78,0.781,2.047,0,2.828l-2.827,2.827c-0.78,0.781-2.047,0.781-2.827,0c-0.781-0.78-0.781-2.047,0-2.827L43.892,52.925z"></path>
                                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M58.033,57.61c1.104,0,2,0.895,2,1.999v4c0,1.104-0.896,2-2,2c-1.105,0-2-0.896-2-2v-4C56.033,58.505,56.928,57.61,58.033,57.61z"></path>
                                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M72.174,52.925l2.828,2.828c0.779,0.78,0.779,2.047,0,2.827c-0.781,0.781-2.049,0.781-2.828,0l-2.828-2.827c-0.781-0.781-0.781-2.048,0-2.828C70.125,52.144,71.391,52.144,72.174,52.925z"></path>
                                </g>
                                <g class="climacon_wrapperComponent climacon_wrapperComponent-sunBody" clip-path="url(#sunCloudFillClip)">
                                  <circle class="climacon_component climacon_component-stroke climacon_component-stroke_sunBody" cx="58.033" cy="41.612" r="11.999"></circle>
                                </g>
                              </g>
                            </g>
                            <g class="climacon_wrapperComponent climacon_wrapperComponent-drizzle">
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_drizzle climacon_component-stroke_drizzle-left" id="Drizzle-Left_1_2" d="M56.969,57.672l-2.121,2.121c-1.172,1.172-1.172,3.072,0,4.242c1.17,1.172,3.07,1.172,4.24,0c1.172-1.17,1.172-3.07,0-4.242L56.969,57.672z"></path>
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_drizzle climacon_component-stroke_drizzle-middle" d="M50.088,57.672l-2.119,2.121c-1.174,1.172-1.174,3.07,0,4.242c1.17,1.172,3.068,1.172,4.24,0s1.172-3.07,0-4.242L50.088,57.672z"></path>
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_drizzle climacon_component-stroke_drizzle-right" d="M43.033,57.672l-2.121,2.121c-1.172,1.172-1.172,3.07,0,4.242s3.07,1.172,4.244,0c1.172-1.172,1.172-3.07,0-4.242L43.033,57.672z"></path>
                            </g>
                            <g class="climacon_wrapperComponent climacon_wrapperComponent-cloud" clip-path="url(#cloudFillClip)">
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_cloud" d="M63.999,64.944v-4.381c2.387-1.386,3.998-3.961,3.998-6.92c0-4.418-3.58-8-7.998-8c-1.603,0-3.084,0.481-4.334,1.291c-1.232-5.316-5.973-9.29-11.664-9.29c-6.628,0-11.999,5.372-11.999,12c0,3.549,1.55,6.729,3.998,8.926v4.914c-4.776-2.769-7.998-7.922-7.998-13.84c0-8.836,7.162-15.999,15.999-15.999c6.004,0,11.229,3.312,13.965,8.203c0.664-0.113,1.336-0.205,2.033-0.205c6.627,0,11.998,5.373,11.998,12C71.997,58.864,68.655,63.296,63.999,64.944z"></path>
                            </g>
                          </g>
                        </svg>
                      </div>
                      <!-- cloudDrizzleSunAlt-->
                      <div class="col-lg-2 col-3">
                        <svg class="climacon climacon_cloudDrizzleSunFillAlt" id="cloudDrizzleSunFillAlt" version="1.1" viewbox="15 15 70 70">
                          <g class="climacon_iconWrap climacon_iconWrap-cloudDrizzleSunFillAlt">
                            <g class="climacon_componentWrap climacon_componentWrap-sun climacon_componentWrap-sun_cloud">
                              <g class="climacon_componentWrap climacon_componentWrap_sunSpoke">
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M80.029,43.611h-3.998c-1.105,0-2-0.896-2-1.999s0.895-2,2-2h3.998c1.104,0,2,0.896,2,2S81.135,43.611,80.029,43.611z"></path>
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M72.174,30.3c-0.781,0.781-2.049,0.781-2.828,0c-0.781-0.781-0.781-2.047,0-2.828l2.828-2.828c0.779-0.781,2.047-0.781,2.828,0c0.779,0.781,0.779,2.047,0,2.828L72.174,30.3z"></path>
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M58.033,25.614c-1.105,0-2-0.896-2-2v-3.999c0-1.104,0.895-2,2-2c1.104,0,2,0.896,2,2v3.999C60.033,24.718,59.135,25.614,58.033,25.614z"></path>
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M43.892,30.3l-2.827-2.828c-0.781-0.781-0.781-2.047,0-2.828c0.78-0.781,2.047-0.781,2.827,0l2.827,2.828c0.781,0.781,0.781,2.047,0,2.828C45.939,31.081,44.673,31.081,43.892,30.3z"></path>
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M42.033,41.612c0,1.104-0.896,1.999-2,1.999h-4c-1.104,0-1.998-0.896-1.998-1.999s0.896-2,1.998-2h4C41.139,39.612,42.033,40.509,42.033,41.612z"></path>
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M43.892,52.925c0.781-0.78,2.048-0.78,2.827,0c0.781,0.78,0.781,2.047,0,2.828l-2.827,2.827c-0.78,0.781-2.047,0.781-2.827,0c-0.781-0.78-0.781-2.047,0-2.827L43.892,52.925z"></path>
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M58.033,57.61c1.104,0,2,0.895,2,1.999v4c0,1.104-0.896,2-2,2c-1.105,0-2-0.896-2-2v-4C56.033,58.505,56.928,57.61,58.033,57.61z"></path>
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M72.174,52.925l2.828,2.828c0.779,0.78,0.779,2.047,0,2.827c-0.781,0.781-2.049,0.781-2.828,0l-2.828-2.827c-0.781-0.781-0.781-2.048,0-2.828C70.125,52.144,71.391,52.144,72.174,52.925z"></path>
                              </g>
                              <g class="climacon_wrapperComponent climacon_wrapperComponent-sunBody">
                                <circle class="climacon_component climacon_component-stroke climacon_component-stroke_sunBody" cx="58.033" cy="41.612" r="11.999"></circle>
                                <circle class="climacon_component climacon_component-fill climacon_component-fill_sunBody" fill="#FFFFFF" cx="58.033" cy="41.612" r="7.999"></circle>
                              </g>
                            </g>
                            <g class="climacon_wrapperComponent climacon_wrapperComponent-drizzle">
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_drizzle climacon_component-stroke_drizzle-left" id="Drizzle-Left_1_3" d="M56.969,57.672l-2.121,2.121c-1.172,1.172-1.172,3.072,0,4.242c1.17,1.172,3.07,1.172,4.24,0c1.172-1.17,1.172-3.07,0-4.242L56.969,57.672z"></path>
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_drizzle climacon_component-stroke_drizzle-middle" d="M50.088,57.672l-2.119,2.121c-1.174,1.172-1.174,3.07,0,4.242c1.17,1.172,3.068,1.172,4.24,0s1.172-3.07,0-4.242L50.088,57.672z"></path>
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_drizzle climacon_component-stroke_drizzle-right" d="M43.033,57.672l-2.121,2.121c-1.172,1.172-1.172,3.07,0,4.242s3.07,1.172,4.244,0c1.172-1.172,1.172-3.07,0-4.242L43.033,57.672z"></path>
                            </g>
                            <g class="climacon_componentWrap climacon_componentWrap_cloud">
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_cloud" d="M43.945,65.639c-8.835,0-15.998-7.162-15.998-15.998c0-8.836,7.163-15.998,15.998-15.998c6.004,0,11.229,3.312,13.965,8.203c0.664-0.113,1.338-0.205,2.033-0.205c6.627,0,11.998,5.373,11.998,12c0,6.625-5.371,11.998-11.998,11.998C57.168,65.639,47.143,65.639,43.945,65.639z"></path>
                              <path class="climacon_component climacon_component-fill climacon_component-fill_cloud" fill="#FFFFFF" d="M59.943,61.639c4.418,0,8-3.582,8-7.998c0-4.417-3.582-8-8-8c-1.601,0-3.082,0.481-4.334,1.291c-1.23-5.316-5.973-9.29-11.665-9.29c-6.626,0-11.998,5.372-11.998,11.999c0,6.626,5.372,11.998,11.998,11.998C47.562,61.639,56.924,61.639,59.943,61.639z"></path>
                            </g>
                          </g>
                        </svg>
                      </div>
                      <!-- cloudDrizzleSunFillAlt-->
                      <div class="col-lg-2 col-3">
                        <svg class="climacon climacon_cloudDrizzleMoonAlt" id="cloudDrizzleMoonAlt" version="1.1" viewbox="15 15 70 70">
                          <clippath id="cloudFillClipfill22">
                            <path d="M15,15v70h70V15H15z M59.943,61.639c-3.02,0-12.381,0-15.999,0c-6.626,0-11.998-5.371-11.998-11.998c0-6.627,5.372-11.999,11.998-11.999c5.691,0,10.434,3.974,11.665,9.29c1.252-0.81,2.733-1.291,4.334-1.291c4.418,0,8,3.582,8,8C67.943,58.057,64.361,61.639,59.943,61.639z"></path>
                          </clippath>
                          <clippath id="moonCloudFillClipfill2">
                            <path d="M0,0v100h100V0H0z M60.943,46.641c-4.418,0-7.999-3.582-7.999-7.999c0-3.803,2.655-6.979,6.211-7.792c0.903,4.854,4.726,8.676,9.579,9.58C67.922,43.986,64.745,46.641,60.943,46.641z"></path>
                          </clippath>
                          <g class="climacon_iconWrap climacon_iconWrap-cloudDrizzleMoonAlt">
                            <g clip-path="url(#cloudFillClip)">
                              <g class="climacon_wrapperComponent climacon_wrapperComponent-moon climacon_componentWrap-moon_cloud" clip-path="url(#moonCloudFillClip)">
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunBody" d="M61.023,50.641c-6.627,0-11.999-5.372-11.999-11.998c0-6.627,5.372-11.999,11.999-11.999c0.755,0,1.491,0.078,2.207,0.212c-0.132,0.576-0.208,1.173-0.208,1.788c0,4.418,3.582,7.999,8,7.999c0.614,0,1.212-0.076,1.788-0.208c0.133,0.717,0.211,1.452,0.211,2.208C73.021,45.269,67.649,50.641,61.023,50.641z"></path>
                              </g>
                            </g>
                            <g class="climacon_wrapperComponent climacon_wrapperComponent-drizzle">
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_drizzle climacon_component-stroke_drizzle-left" id="Drizzle-Left_1_4" d="M56.969,57.672l-2.121,2.121c-1.172,1.172-1.172,3.072,0,4.242c1.17,1.172,3.07,1.172,4.24,0c1.172-1.17,1.172-3.07,0-4.242L56.969,57.672z"></path>
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_drizzle climacon_component-stroke_drizzle-middle" d="M50.088,57.672l-2.119,2.121c-1.174,1.172-1.174,3.07,0,4.242c1.17,1.172,3.068,1.172,4.24,0s1.172-3.07,0-4.242L50.088,57.672z"></path>
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_drizzle climacon_component-stroke_drizzle-right" d="M43.033,57.672l-2.121,2.121c-1.172,1.172-1.172,3.07,0,4.242s3.07,1.172,4.244,0c1.172-1.172,1.172-3.07,0-4.242L43.033,57.672z"></path>
                            </g>
                            <g class="climacon_wrapperComponent climacon_wrapperComponent-cloud" clip-path="url(#cloudFillClip)">
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_cloud" d="M59.943,41.642c-0.696,0-1.369,0.092-2.033,0.205c-2.736-4.892-7.961-8.203-13.965-8.203c-8.835,0-15.998,7.162-15.998,15.997c0,5.992,3.3,11.207,8.177,13.947c0.276-1.262,0.892-2.465,1.873-3.445l0.057-0.057c-3.644-2.061-6.106-5.963-6.106-10.445c0-6.626,5.372-11.998,11.998-11.998c5.691,0,10.433,3.974,11.666,9.29c1.25-0.81,2.732-1.291,4.332-1.291c4.418,0,8,3.581,8,7.999c0,3.443-2.182,6.371-5.235,7.498c0.788,1.146,1.194,2.471,1.222,3.807c4.666-1.645,8.014-6.077,8.014-11.305C71.941,47.014,66.57,41.642,59.943,41.642z"></path>
                            </g>
                          </g>
                        </svg>
                      </div>
                      <!-- cloudDrizzleMoonAlt-->
                      <div class="col-lg-2 col-3">
                        <svg class="climacon climacon_cloudDrizzleMoonFillAlt" id="cloudDrizzleMoonFillAlt" version="1.1" viewbox="15 15 70 70">
                          <g class="climacon_iconWrap climacon_iconWrap-cloudDrizzleMoonFillAlt">
                            <g class="climacon_wrapperComponent climacon_wrapperComponent-moon climacon_componentWrap-moon_cloud">
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunBody" d="M61.023,50.641c-6.627,0-11.999-5.372-11.999-11.998c0-6.627,5.372-11.999,11.999-11.999c0.755,0,1.491,0.078,2.207,0.212c-0.132,0.576-0.208,1.173-0.208,1.788c0,4.418,3.582,7.999,8,7.999c0.614,0,1.212-0.076,1.788-0.208c0.133,0.717,0.211,1.452,0.211,2.208C73.021,45.269,67.649,50.641,61.023,50.641z"></path>
                              <path class="climacon_component climacon_component-fill climacon_component-fill_moon" fill="#FFFFFF" d="M59.235,30.851c-3.556,0.813-6.211,3.989-6.211,7.792c0,4.417,3.581,7.999,7.999,7.999c3.802,0,6.979-2.655,7.791-6.211C63.961,39.527,60.139,35.705,59.235,30.851z"></path>
                            </g>
                            <g class="climacon_wrapperComponent climacon_wrapperComponent-drizzle">
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_drizzle climacon_component-stroke_drizzle-left" id="Drizzle-Left_1_6" d="M56.969,57.672l-2.121,2.121c-1.172,1.172-1.172,3.072,0,4.242c1.17,1.172,3.07,1.172,4.24,0c1.172-1.17,1.172-3.07,0-4.242L56.969,57.672z"></path>
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_drizzle climacon_component-stroke_drizzle-middle" d="M50.088,57.672l-2.119,2.121c-1.174,1.172-1.174,3.07,0,4.242c1.17,1.172,3.068,1.172,4.24,0s1.172-3.07,0-4.242L50.088,57.672z"></path>
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_drizzle climacon_component-stroke_drizzle-right" d="M43.033,57.672l-2.121,2.121c-1.172,1.172-1.172,3.07,0,4.242s3.07,1.172,4.244,0c1.172-1.172,1.172-3.07,0-4.242L43.033,57.672z"></path>
                            </g>
                            <g class="climacon_componentWrap climacon_componentWrap_cloud">
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_cloud" d="M43.945,65.639c-8.835,0-15.998-7.162-15.998-15.998c0-8.836,7.163-15.998,15.998-15.998c6.004,0,11.229,3.312,13.965,8.203c0.664-0.113,1.338-0.205,2.033-0.205c6.627,0,11.998,5.373,11.998,12c0,6.625-5.371,11.998-11.998,11.998C57.168,65.639,47.143,65.639,43.945,65.639z"></path>
                              <path class="climacon_component climacon_component-fill climacon_component-fill_cloud" fill="#FFFFFF" d="M59.943,61.639c4.418,0,8-3.582,8-7.998c0-4.417-3.582-8-8-8c-1.601,0-3.082,0.481-4.334,1.291c-1.23-5.316-5.973-9.29-11.665-9.29c-6.626,0-11.998,5.372-11.998,11.999c0,6.626,5.372,11.998,11.998,11.998C47.562,61.639,56.924,61.639,59.943,61.639z"></path>
                            </g>
                          </g>
                        </svg>
                      </div>
                      <!-- cloudDrizzleMoonFillAlt-->
                      <div class="col-lg-2 col-3">
                        <svg class="climacon climacon_cloudRain" id="cloudRain" version="1.1" viewbox="15 15 70 70">
                          <clippath id="cloudFillClipfill3">
                            <path d="M15,15v70h70V15H15z M59.943,61.639c-3.02,0-12.381,0-15.999,0c-6.626,0-11.998-5.371-11.998-11.998c0-6.627,5.372-11.999,11.998-11.999c5.691,0,10.434,3.974,11.665,9.29c1.252-0.81,2.733-1.291,4.334-1.291c4.418,0,8,3.582,8,8C67.943,58.057,64.361,61.639,59.943,61.639z"></path>
                          </clippath>
                          <g class="climacon_iconWrap climacon_iconWrap-cloudRain">
                            <g class="climacon_wrapperComponent climacon_wrapperComponent-rain">
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_rain climacon_component-stroke_rain- left" d="M41.946,53.641c1.104,0,1.999,0.896,1.999,2v15.998c0,1.105-0.895,2-1.999,2s-2-0.895-2-2V55.641C39.946,54.537,40.842,53.641,41.946,53.641z"></path>
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_rain climacon_component-stroke_rain- middle" d="M49.945,57.641c1.104,0,2,0.896,2,2v15.998c0,1.104-0.896,2-2,2s-2-0.896-2-2V59.641C47.945,58.535,48.841,57.641,49.945,57.641z"></path>
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_rain climacon_component-stroke_rain- right" d="M57.943,53.641c1.104,0,2,0.896,2,2v15.998c0,1.105-0.896,2-2,2c-1.104,0-2-0.895-2-2V55.641C55.943,54.537,56.84,53.641,57.943,53.641z"></path>
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_rain climacon_component-stroke_rain- left" d="M41.946,53.641c1.104,0,1.999,0.896,1.999,2v15.998c0,1.105-0.895,2-1.999,2s-2-0.895-2-2V55.641C39.946,54.537,40.842,53.641,41.946,53.641z"></path>
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_rain climacon_component-stroke_rain- middle" d="M49.945,57.641c1.104,0,2,0.896,2,2v15.998c0,1.104-0.896,2-2,2s-2-0.896-2-2V59.641C47.945,58.535,48.841,57.641,49.945,57.641z"></path>
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_rain climacon_component-stroke_rain- right" d="M57.943,53.641c1.104,0,2,0.896,2,2v15.998c0,1.105-0.896,2-2,2c-1.104,0-2-0.895-2-2V55.641C55.943,54.537,56.84,53.641,57.943,53.641z"></path>
                            </g>
                            <g class="climacon_wrapperComponent climacon_wrapperComponent_cloud" clip-path="url(#cloudFillClip)">
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_cloud" d="M63.943,64.941v-4.381c2.389-1.384,4-3.961,4-6.92c0-4.417-3.582-8-8-8c-1.601,0-3.082,0.48-4.334,1.291c-1.23-5.317-5.973-9.29-11.665-9.29c-6.626,0-11.998,5.372-11.998,11.998c0,3.549,1.551,6.728,4,8.924v4.916c-4.777-2.768-8-7.922-8-13.84c0-8.835,7.163-15.997,15.998-15.997c6.004,0,11.229,3.311,13.965,8.203c0.664-0.113,1.338-0.205,2.033-0.205c6.627,0,11.998,5.372,11.998,12C71.941,58.863,68.602,63.293,63.943,64.941z"></path>
                            </g>
                          </g>
                        </svg>
                      </div>
                      <!-- cloudRain-->
                      <div class="col-lg-2 col-3">
                        <svg class="climacon climacon_cloudRainFill" id="cloudRainFill" version="1.1" viewbox="15 15 70 70">
                          <g class="climacon_iconWrap climacon_iconWrap-cloudRainFill">
                            <g class="climacon_wrapperComponent climacon_wrapperComponent-rain">
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_rain climacon_component-stroke_rain- left" d="M41.946,53.641c1.104,0,1.999,0.896,1.999,2v15.998c0,1.105-0.895,2-1.999,2s-2-0.895-2-2V55.641C39.946,54.537,40.842,53.641,41.946,53.641z"></path>
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_rain climacon_component-stroke_rain- middle" d="M49.945,57.641c1.104,0,2,0.896,2,2v15.998c0,1.104-0.896,2-2,2s-2-0.896-2-2V59.641C47.945,58.535,48.841,57.641,49.945,57.641z"></path>
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_rain climacon_component-stroke_rain- right" d="M57.943,53.641c1.104,0,2,0.896,2,2v15.998c0,1.105-0.896,2-2,2c-1.104,0-2-0.895-2-2V55.641C55.943,54.537,56.84,53.641,57.943,53.641z"></path>
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_rain climacon_component-stroke_rain- left" d="M41.946,53.641c1.104,0,1.999,0.896,1.999,2v15.998c0,1.105-0.895,2-1.999,2s-2-0.895-2-2V55.641C39.946,54.537,40.842,53.641,41.946,53.641z"></path>
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_rain climacon_component-stroke_rain- middle" d="M49.945,57.641c1.104,0,2,0.896,2,2v15.998c0,1.104-0.896,2-2,2s-2-0.896-2-2V59.641C47.945,58.535,48.841,57.641,49.945,57.641z"></path>
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_rain climacon_component-stroke_rain- right" d="M57.943,53.641c1.104,0,2,0.896,2,2v15.998c0,1.105-0.896,2-2,2c-1.104,0-2-0.895-2-2V55.641C55.943,54.537,56.84,53.641,57.943,53.641z"></path>
                            </g>
                            <g class="climacon_componentWrap climacon_componentWrap_cloud">
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_cloud" d="M43.945,65.639c-8.835,0-15.998-7.162-15.998-15.998c0-8.836,7.163-15.998,15.998-15.998c6.004,0,11.229,3.312,13.965,8.203c0.664-0.113,1.338-0.205,2.033-0.205c6.627,0,11.998,5.373,11.998,12c0,6.625-5.371,11.998-11.998,11.998C57.168,65.639,47.143,65.639,43.945,65.639z"></path>
                              <path class="climacon_component climacon_component-fill climacon_component-fill_cloud" fill="#FFFFFF" d="M59.943,61.639c4.418,0,8-3.582,8-7.998c0-4.417-3.582-8-8-8c-1.601,0-3.082,0.481-4.334,1.291c-1.23-5.316-5.973-9.29-11.665-9.29c-6.626,0-11.998,5.372-11.998,11.999c0,6.626,5.372,11.998,11.998,11.998C47.562,61.639,56.924,61.639,59.943,61.639z"></path>
                            </g>
                          </g>
                        </svg>
                      </div>
                      <!-- cloudRainFill-->
                      <div class="col-lg-2 col-3">
                        <svg class="climacon climacon_cloudRainSun" id="cloudRainSun" version="1.1" viewbox="15 15 70 70">
                          <clippath id="cloudFillClipfill2">
                            <path d="M15,15v70h70V15H15z M59.943,61.639c-3.02,0-12.381,0-15.999,0c-6.626,0-11.998-5.371-11.998-11.998c0-6.627,5.372-11.999,11.998-11.999c5.691,0,10.434,3.974,11.665,9.29c1.252-0.81,2.733-1.291,4.334-1.291c4.418,0,8,3.582,8,8C67.943,58.057,64.361,61.639,59.943,61.639z"></path>
                          </clippath>
                          <clippath id="sunCloudFillClipfill6">
                            <path d="M15,15v70h70V15H15z M57.945,49.641c-4.417,0-8-3.582-8-7.999c0-4.418,3.582-7.999,8-7.999s7.998,3.581,7.998,7.999C65.943,46.059,62.362,49.641,57.945,49.641z"></path>
                          </clippath>
                          <clippath id="cloudSunFillClipfill2">
                            <path d="M15,15v70h20.947V63.481c-4.778-2.767-8-7.922-8-13.84c0-8.836,7.163-15.998,15.998-15.998c6.004,0,11.229,3.312,13.965,8.203c0.664-0.113,1.338-0.205,2.033-0.205c6.627,0,11.998,5.373,11.998,12c0,5.262-3.394,9.723-8.107,11.341V85H85V15H15z"></path>
                          </clippath>
                          <g class="climacon_iconWrap climacon_iconWrap-cloudRainSun">
                            <g clip-path="url(#cloudSunFillClip)">
                              <g class="climacon_componentWrap climacon_componentWrap-sun climacon_componentWrap-sun_cloud">
                                <g class="climacon_componentWrap climacon_componentWrap_sunSpoke">
                                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M80.029,43.611h-3.998c-1.105,0-2-0.896-2-1.999s0.895-2,2-2h3.998c1.104,0,2,0.896,2,2S81.135,43.611,80.029,43.611z"></path>
                                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M72.174,30.3c-0.781,0.781-2.049,0.781-2.828,0c-0.781-0.781-0.781-2.047,0-2.828l2.828-2.828c0.779-0.781,2.047-0.781,2.828,0c0.779,0.781,0.779,2.047,0,2.828L72.174,30.3z"></path>
                                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M58.033,25.614c-1.105,0-2-0.896-2-2v-3.999c0-1.104,0.895-2,2-2c1.104,0,2,0.896,2,2v3.999C60.033,24.718,59.135,25.614,58.033,25.614z"></path>
                                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M43.892,30.3l-2.827-2.828c-0.781-0.781-0.781-2.047,0-2.828c0.78-0.781,2.047-0.781,2.827,0l2.827,2.828c0.781,0.781,0.781,2.047,0,2.828C45.939,31.081,44.673,31.081,43.892,30.3z"></path>
                                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M42.033,41.612c0,1.104-0.896,1.999-2,1.999h-4c-1.104,0-1.998-0.896-1.998-1.999s0.896-2,1.998-2h4C41.139,39.612,42.033,40.509,42.033,41.612z"></path>
                                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M43.892,52.925c0.781-0.78,2.048-0.78,2.827,0c0.781,0.78,0.781,2.047,0,2.828l-2.827,2.827c-0.78,0.781-2.047,0.781-2.827,0c-0.781-0.78-0.781-2.047,0-2.827L43.892,52.925z"></path>
                                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M58.033,57.61c1.104,0,2,0.895,2,1.999v4c0,1.104-0.896,2-2,2c-1.105,0-2-0.896-2-2v-4C56.033,58.505,56.928,57.61,58.033,57.61z"></path>
                                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M72.174,52.925l2.828,2.828c0.779,0.78,0.779,2.047,0,2.827c-0.781,0.781-2.049,0.781-2.828,0l-2.828-2.827c-0.781-0.781-0.781-2.048,0-2.828C70.125,52.144,71.391,52.144,72.174,52.925z"></path>
                                </g>
                                <g class="climacon_wrapperComponent climacon_wrapperComponent-sunBody" clip-path="url(#sunCloudFillClip)">
                                  <circle class="climacon_component climacon_component-stroke climacon_component-stroke_sunBody" cx="58.033" cy="41.612" r="11.999"></circle>
                                </g>
                              </g>
                            </g>
                            <g class="climacon_wrapperComponent climacon_wrapperComponent-rain">
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_rain climacon_component-stroke_rain- left" d="M41.946,53.641c1.104,0,1.999,0.896,1.999,2v15.998c0,1.105-0.895,2-1.999,2s-2-0.895-2-2V55.641C39.946,54.537,40.842,53.641,41.946,53.641z"></path>
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_rain climacon_component-stroke_rain- middle" d="M49.945,57.641c1.104,0,2,0.896,2,2v15.998c0,1.104-0.896,2-2,2s-2-0.896-2-2V59.641C47.945,58.535,48.841,57.641,49.945,57.641z"></path>
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_rain climacon_component-stroke_rain- right" d="M57.943,53.641c1.104,0,2,0.896,2,2v15.998c0,1.105-0.896,2-2,2c-1.104,0-2-0.895-2-2V55.641C55.943,54.537,56.84,53.641,57.943,53.641z"></path>
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_rain climacon_component-stroke_rain- left" d="M41.946,53.641c1.104,0,1.999,0.896,1.999,2v15.998c0,1.105-0.895,2-1.999,2s-2-0.895-2-2V55.641C39.946,54.537,40.842,53.641,41.946,53.641z"></path>
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_rain climacon_component-stroke_rain- middle" d="M49.945,57.641c1.104,0,2,0.896,2,2v15.998c0,1.104-0.896,2-2,2s-2-0.896-2-2V59.641C47.945,58.535,48.841,57.641,49.945,57.641z"></path>
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_rain climacon_component-stroke_rain- right" d="M57.943,53.641c1.104,0,2,0.896,2,2v15.998c0,1.105-0.896,2-2,2c-1.104,0-2-0.895-2-2V55.641C55.943,54.537,56.84,53.641,57.943,53.641z"></path>
                            </g>
                            <g class="climacon_wrapperComponent climacon_wrapperComponent-cloud">
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_cloud" d="M63.943,64.941v-4.381c2.389-1.384,4-3.961,4-6.92c0-4.417-3.582-8-8-8c-1.601,0-3.082,0.48-4.334,1.291c-1.23-5.317-5.973-9.29-11.665-9.29c-6.626,0-11.998,5.372-11.998,11.998c0,3.549,1.551,6.728,4,8.924v4.916c-4.777-2.768-8-7.922-8-13.84c0-8.835,7.163-15.997,15.998-15.997c6.004,0,11.229,3.311,13.965,8.203c0.664-0.113,1.338-0.205,2.033-0.205c6.627,0,11.998,5.372,11.998,12C71.941,58.863,68.602,63.293,63.943,64.941z"></path>
                            </g>
                          </g>
                        </svg>
                      </div>
                      <!-- cloudRainSun-->
                      <div class="col-lg-2 col-3">
                        <svg class="climacon climacon_cloudRainSunFill" id="cloudRainSunFill" version="1.1" viewbox="15 15 70 70">
                          <g class="climacon_iconWrap climacon_iconWrap-cloudRainSunFill">
                            <g class="climacon_componentWrap climacon_componentWrap-sun climacon_componentWrap-sun_cloud">
                              <g class="climacon_componentWrap climacon_componentWrap_sunSpoke">
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M80.029,43.611h-3.998c-1.105,0-2-0.896-2-1.999s0.895-2,2-2h3.998c1.104,0,2,0.896,2,2S81.135,43.611,80.029,43.611z"></path>
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M72.174,30.3c-0.781,0.781-2.049,0.781-2.828,0c-0.781-0.781-0.781-2.047,0-2.828l2.828-2.828c0.779-0.781,2.047-0.781,2.828,0c0.779,0.781,0.779,2.047,0,2.828L72.174,30.3z"></path>
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M58.033,25.614c-1.105,0-2-0.896-2-2v-3.999c0-1.104,0.895-2,2-2c1.104,0,2,0.896,2,2v3.999C60.033,24.718,59.135,25.614,58.033,25.614z"></path>
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M43.892,30.3l-2.827-2.828c-0.781-0.781-0.781-2.047,0-2.828c0.78-0.781,2.047-0.781,2.827,0l2.827,2.828c0.781,0.781,0.781,2.047,0,2.828C45.939,31.081,44.673,31.081,43.892,30.3z"></path>
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M42.033,41.612c0,1.104-0.896,1.999-2,1.999h-4c-1.104,0-1.998-0.896-1.998-1.999s0.896-2,1.998-2h4C41.139,39.612,42.033,40.509,42.033,41.612z"></path>
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M43.892,52.925c0.781-0.78,2.048-0.78,2.827,0c0.781,0.78,0.781,2.047,0,2.828l-2.827,2.827c-0.78,0.781-2.047,0.781-2.827,0c-0.781-0.78-0.781-2.047,0-2.827L43.892,52.925z"></path>
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M58.033,57.61c1.104,0,2,0.895,2,1.999v4c0,1.104-0.896,2-2,2c-1.105,0-2-0.896-2-2v-4C56.033,58.505,56.928,57.61,58.033,57.61z"></path>
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M72.174,52.925l2.828,2.828c0.779,0.78,0.779,2.047,0,2.827c-0.781,0.781-2.049,0.781-2.828,0l-2.828-2.827c-0.781-0.781-0.781-2.048,0-2.828C70.125,52.144,71.391,52.144,72.174,52.925z"></path>
                              </g>
                              <g class="climacon_wrapperComponent climacon_wrapperComponent-sunBody">
                                <circle class="climacon_component climacon_component-stroke climacon_component-stroke_sunBody" cx="58.033" cy="41.612" r="11.999"></circle>
                                <circle class="climacon_component climacon_component-fill climacon_component-fill_sunBody" fill="#FFFFFF" cx="58.033" cy="41.612" r="7.999"></circle>
                              </g>
                            </g>
                            <g class="climacon_wrapperComponent climacon_wrapperComponent-rain">
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_rain climacon_component-stroke_rain- left" d="M41.946,53.641c1.104,0,1.999,0.896,1.999,2v15.998c0,1.105-0.895,2-1.999,2s-2-0.895-2-2V55.641C39.946,54.537,40.842,53.641,41.946,53.641z"></path>
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_rain climacon_component-stroke_rain- middle" d="M49.945,57.641c1.104,0,2,0.896,2,2v15.998c0,1.104-0.896,2-2,2s-2-0.896-2-2V59.641C47.945,58.535,48.841,57.641,49.945,57.641z"></path>
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_rain climacon_component-stroke_rain- right" d="M57.943,53.641c1.104,0,2,0.896,2,2v15.998c0,1.105-0.896,2-2,2c-1.104,0-2-0.895-2-2V55.641C55.943,54.537,56.84,53.641,57.943,53.641z"></path>
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_rain climacon_component-stroke_rain- left" d="M41.946,53.641c1.104,0,1.999,0.896,1.999,2v15.998c0,1.105-0.895,2-1.999,2s-2-0.895-2-2V55.641C39.946,54.537,40.842,53.641,41.946,53.641z"></path>
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_rain climacon_component-stroke_rain- middle" d="M49.945,57.641c1.104,0,2,0.896,2,2v15.998c0,1.104-0.896,2-2,2s-2-0.896-2-2V59.641C47.945,58.535,48.841,57.641,49.945,57.641z"></path>
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_rain climacon_component-stroke_rain- right" d="M57.943,53.641c1.104,0,2,0.896,2,2v15.998c0,1.105-0.896,2-2,2c-1.104,0-2-0.895-2-2V55.641C55.943,54.537,56.84,53.641,57.943,53.641z"></path>
                            </g>
                            <g class="climacon_componentWrap climacon_componentWrap_cloud">
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_cloud" d="M43.945,65.639c-8.835,0-15.998-7.162-15.998-15.998c0-8.836,7.163-15.998,15.998-15.998c6.004,0,11.229,3.312,13.965,8.203c0.664-0.113,1.338-0.205,2.033-0.205c6.627,0,11.998,5.373,11.998,12c0,6.625-5.371,11.998-11.998,11.998C57.168,65.639,47.143,65.639,43.945,65.639z"></path>
                              <path class="climacon_component climacon_component-fill climacon_component-fill_cloud" fill="#FFFFFF" d="M59.943,61.639c4.418,0,8-3.582,8-7.998c0-4.417-3.582-8-8-8c-1.601,0-3.082,0.481-4.334,1.291c-1.23-5.316-5.973-9.29-11.665-9.29c-6.626,0-11.998,5.372-11.998,11.999c0,6.626,5.372,11.998,11.998,11.998C47.562,61.639,56.924,61.639,59.943,61.639z"></path>
                            </g>
                          </g>
                        </svg>
                      </div>
                      <!-- cloudRainSunFill-->
                      <div class="col-lg-2 col-3">
                        <svg class="climacon climacon_cloudRainMoon" id="cloudRainMoon" version="1.1" viewbox="15 15 70 70">
                          <clippath id="cloudFillClipfill4">
                            <path d="M15,15v70h70V15H15z M59.943,61.639c-3.02,0-12.381,0-15.999,0c-6.626,0-11.998-5.371-11.998-11.998c0-6.627,5.372-11.999,11.998-11.999c5.691,0,10.434,3.974,11.665,9.29c1.252-0.81,2.733-1.291,4.334-1.291c4.418,0,8,3.582,8,8C67.943,58.057,64.361,61.639,59.943,61.639z"></path>
                          </clippath>
                          <clippath id="moonCloudFillClipfill3">
                            <path d="M0,0v100h100V0H0z M60.943,46.641c-4.418,0-7.999-3.582-7.999-7.999c0-3.803,2.655-6.979,6.211-7.792c0.903,4.854,4.726,8.676,9.579,9.58C67.922,43.986,64.745,46.641,60.943,46.641z"></path>
                          </clippath>
                          <g class="climacon_iconWrap climacon_iconWrap-cloudRainMoon">
                            <g clip-path="url(#cloudFillClip)">
                              <g class="climacon_wrapperComponent climacon_wrapperComponent-moon climacon_componentWrap-moon_cloud" clip-path="url(#moonCloudFillClip)">
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunBody" d="M61.023,50.641c-6.627,0-11.999-5.372-11.999-11.998c0-6.627,5.372-11.999,11.999-11.999c0.755,0,1.491,0.078,2.207,0.212c-0.132,0.576-0.208,1.173-0.208,1.788c0,4.418,3.582,7.999,8,7.999c0.614,0,1.212-0.076,1.788-0.208c0.133,0.717,0.211,1.452,0.211,2.208C73.021,45.269,67.649,50.641,61.023,50.641z"></path>
                              </g>
                            </g>
                            <g class="climacon_wrapperComponent climacon_wrapperComponent-rain">
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_rain climacon_component-stroke_rain- left" d="M41.946,53.641c1.104,0,1.999,0.896,1.999,2v15.998c0,1.105-0.895,2-1.999,2s-2-0.895-2-2V55.641C39.946,54.537,40.842,53.641,41.946,53.641z"></path>
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_rain climacon_component-stroke_rain- middle" d="M49.945,57.641c1.104,0,2,0.896,2,2v15.998c0,1.104-0.896,2-2,2s-2-0.896-2-2V59.641C47.945,58.535,48.841,57.641,49.945,57.641z"></path>
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_rain climacon_component-stroke_rain- right" d="M57.943,53.641c1.104,0,2,0.896,2,2v15.998c0,1.105-0.896,2-2,2c-1.104,0-2-0.895-2-2V55.641C55.943,54.537,56.84,53.641,57.943,53.641z"></path>
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_rain climacon_component-stroke_rain- left" d="M41.946,53.641c1.104,0,1.999,0.896,1.999,2v15.998c0,1.105-0.895,2-1.999,2s-2-0.895-2-2V55.641C39.946,54.537,40.842,53.641,41.946,53.641z"></path>
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_rain climacon_component-stroke_rain- middle" d="M49.945,57.641c1.104,0,2,0.896,2,2v15.998c0,1.104-0.896,2-2,2s-2-0.896-2-2V59.641C47.945,58.535,48.841,57.641,49.945,57.641z"></path>
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_rain climacon_component-stroke_rain- right" d="M57.943,53.641c1.104,0,2,0.896,2,2v15.998c0,1.105-0.896,2-2,2c-1.104,0-2-0.895-2-2V55.641C55.943,54.537,56.84,53.641,57.943,53.641z"></path>
                            </g>
                            <g class="climacon_wrapperComponent climacon_wrapperComponent-cloud" clip-path="url(#cloudFillClip)">
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_cloud" d="M59.943,41.642c-0.696,0-1.369,0.092-2.033,0.205c-2.736-4.892-7.961-8.203-13.965-8.203c-8.835,0-15.998,7.162-15.998,15.997c0,5.992,3.3,11.207,8.177,13.947c0.276-1.262,0.892-2.465,1.873-3.445l0.057-0.057c-3.644-2.061-6.106-5.963-6.106-10.445c0-6.626,5.372-11.998,11.998-11.998c5.691,0,10.433,3.974,11.666,9.29c1.25-0.81,2.732-1.291,4.332-1.291c4.418,0,8,3.581,8,7.999c0,3.443-2.182,6.371-5.235,7.498c0.788,1.146,1.194,2.471,1.222,3.807c4.666-1.645,8.014-6.077,8.014-11.305C71.941,47.014,66.57,41.642,59.943,41.642z"></path>
                            </g>
                          </g>
                        </svg>
                      </div>
                      <!-- cloudRainMoon-->
                      <div class="col-lg-2 col-3">
                        <svg class="climacon climacon_cloudRainMoonFill" id="cloudRainMoonFill" version="1.1" viewbox="15 15 70 70">
                          <g class="climacon_iconWrap climacon_iconWrap-cloudRainMoonFill">
                            <g class="climacon_wrapperComponent climacon_wrapperComponent-moon climacon_componentWrap-moon_cloud">
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunBody" d="M61.023,50.641c-6.627,0-11.999-5.372-11.999-11.998c0-6.627,5.372-11.999,11.999-11.999c0.755,0,1.491,0.078,2.207,0.212c-0.132,0.576-0.208,1.173-0.208,1.788c0,4.418,3.582,7.999,8,7.999c0.614,0,1.212-0.076,1.788-0.208c0.133,0.717,0.211,1.452,0.211,2.208C73.021,45.269,67.649,50.641,61.023,50.641z"></path>
                              <path class="climacon_component climacon_component-fill climacon_component-fill_moon" fill="#FFFFFF" d="M59.235,30.851c-3.556,0.813-6.211,3.989-6.211,7.792c0,4.417,3.581,7.999,7.999,7.999c3.802,0,6.979-2.655,7.791-6.211C63.961,39.527,60.139,35.705,59.235,30.851z"></path>
                            </g>
                            <g class="climacon_wrapperComponent climacon_wrapperComponent-rain">
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_rain climacon_component-stroke_rain- left" d="M41.946,53.641c1.104,0,1.999,0.896,1.999,2v15.998c0,1.105-0.895,2-1.999,2s-2-0.895-2-2V55.641C39.946,54.537,40.842,53.641,41.946,53.641z"></path>
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_rain climacon_component-stroke_rain- middle" d="M49.945,57.641c1.104,0,2,0.896,2,2v15.998c0,1.104-0.896,2-2,2s-2-0.896-2-2V59.641C47.945,58.535,48.841,57.641,49.945,57.641z"></path>
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_rain climacon_component-stroke_rain- right" d="M57.943,53.641c1.104,0,2,0.896,2,2v15.998c0,1.105-0.896,2-2,2c-1.104,0-2-0.895-2-2V55.641C55.943,54.537,56.84,53.641,57.943,53.641z"></path>
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_rain climacon_component-stroke_rain- left" d="M41.946,53.641c1.104,0,1.999,0.896,1.999,2v15.998c0,1.105-0.895,2-1.999,2s-2-0.895-2-2V55.641C39.946,54.537,40.842,53.641,41.946,53.641z"></path>
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_rain climacon_component-stroke_rain- middle" d="M49.945,57.641c1.104,0,2,0.896,2,2v15.998c0,1.104-0.896,2-2,2s-2-0.896-2-2V59.641C47.945,58.535,48.841,57.641,49.945,57.641z"></path>
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_rain climacon_component-stroke_rain- right" d="M57.943,53.641c1.104,0,2,0.896,2,2v15.998c0,1.105-0.896,2-2,2c-1.104,0-2-0.895-2-2V55.641C55.943,54.537,56.84,53.641,57.943,53.641z"></path>
                            </g>
                            <g class="climacon_componentWrap climacon_componentWrap_cloud">
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_cloud" d="M43.945,65.639c-8.835,0-15.998-7.162-15.998-15.998c0-8.836,7.163-15.998,15.998-15.998c6.004,0,11.229,3.312,13.965,8.203c0.664-0.113,1.338-0.205,2.033-0.205c6.627,0,11.998,5.373,11.998,12c0,6.625-5.371,11.998-11.998,11.998C57.168,65.639,47.143,65.639,43.945,65.639z"></path>
                              <path class="climacon_component climacon_component-fill climacon_component-fill_cloud" fill="#FFFFFF" d="M59.943,61.639c4.418,0,8-3.582,8-7.998c0-4.417-3.582-8-8-8c-1.601,0-3.082,0.481-4.334,1.291c-1.23-5.316-5.973-9.29-11.665-9.29c-6.626,0-11.998,5.372-11.998,11.999c0,6.626,5.372,11.998,11.998,11.998C47.562,61.639,56.924,61.639,59.943,61.639z"></path>
                            </g>
                          </g>
                        </svg>
                      </div>
                      <!-- cloudRainMoonFill-->
                      <div class="col-lg-2 col-3">
                        <svg class="climacon climacon_cloudRainAlt" id="cloudRainAlt" version="1.1" viewbox="15 15 70 70">
                          <clippath id="cloudFillClipfill5">
                            <path d="M15,15v70h70V15H15z M59.943,61.639c-3.02,0-12.381,0-15.999,0c-6.626,0-11.998-5.371-11.998-11.998c0-6.627,5.372-11.999,11.998-11.999c5.691,0,10.434,3.974,11.665,9.29c1.252-0.81,2.733-1.291,4.334-1.291c4.418,0,8,3.582,8,8C67.943,58.057,64.361,61.639,59.943,61.639z"></path>
                          </clippath>
                          <g class="climacon_iconWrap climacon_iconWrap-cloudRainAlt">
                            <g class="climacon_wrapperComponent climacon_wrapperComponent-rain climacon_wrapperComponent-rain_alt">
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_rain climacon_component-stroke_rain- alt" d="M50.001,58.568l3.535,3.535c1.95,1.953,1.95,5.119,0,7.07c-1.953,1.953-5.119,1.953-7.07,0c-1.953-1.951-1.953-5.117,0-7.07L50.001,58.568z"></path>
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_rain climacon_component-stroke_rain- alt" d="M50.001,58.568l3.535,3.535c1.95,1.953,1.95,5.119,0,7.07c-1.953,1.953-5.119,1.953-7.07,0c-1.953-1.951-1.953-5.117,0-7.07L50.001,58.568z"></path>
                            </g>
                            <g class="climacon_wrapperComponent climacon_wrapperComponent_cloud" clip-path="url(#cloudFillClip)">
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_cloud" d="M59.999,65.641c-0.267,0-0.614,0-1,0c0-1.373-0.319-2.742-0.942-4c0.776,0,1.45,0,1.942,0c4.418,0,7.999-3.58,7.999-7.998c0-4.418-3.581-8-7.999-8c-1.601,0-3.083,0.481-4.334,1.29c-1.231-5.316-5.973-9.289-11.664-9.289c-6.627,0-11.998,5.372-11.998,11.998c0,5.953,4.339,10.879,10.023,11.822c-0.637,1.218-0.969,2.55-1.012,3.888c-7.406-1.399-13.012-7.896-13.012-15.709c0-8.835,7.162-15.998,15.998-15.998c6.004,0,11.229,3.312,13.965,8.204c0.664-0.114,1.337-0.205,2.033-0.205c6.627,0,11.998,5.372,11.998,12C71.996,60.27,66.626,65.641,59.999,65.641z"></path>
                            </g>
                          </g>
                        </svg>
                      </div>
                      <!-- cloudRainAlt-->
                      <div class="col-lg-2 col-3">
                        <svg class="climacon climacon_cloudRainAltFill" id="cloudRainAltFill" version="1.1" viewbox="15 15 70 70">
                          <g class="climacon_iconWrap climacon_iconWrap-cloudRainAltFill">
                            <g class="climacon_wrapperComponent climacon_wrapperComponent-rain climacon_wrapperComponent-rain_alt">
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_rain climacon_component-stroke_rain- alt" d="M50.001,58.568l3.535,3.535c1.95,1.953,1.95,5.119,0,7.07c-1.953,1.953-5.119,1.953-7.07,0c-1.953-1.951-1.953-5.117,0-7.07L50.001,58.568z"></path>
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_rain climacon_component-stroke_rain- alt" d="M50.001,58.568l3.535,3.535c1.95,1.953,1.95,5.119,0,7.07c-1.953,1.953-5.119,1.953-7.07,0c-1.953-1.951-1.953-5.117,0-7.07L50.001,58.568z"></path>
                            </g>
                            <g class="climacon_componentWrap climacon_componentWrap_cloud">
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_cloud" d="M43.945,65.639c-8.835,0-15.998-7.162-15.998-15.998c0-8.836,7.163-15.998,15.998-15.998c6.004,0,11.229,3.312,13.965,8.203c0.664-0.113,1.338-0.205,2.033-0.205c6.627,0,11.998,5.373,11.998,12c0,6.625-5.371,11.998-11.998,11.998C57.168,65.639,47.143,65.639,43.945,65.639z"></path>
                              <path class="climacon_component climacon_component-fill climacon_component-fill_cloud" fill="#FFFFFF" d="M59.943,61.639c4.418,0,8-3.582,8-7.998c0-4.417-3.582-8-8-8c-1.601,0-3.082,0.481-4.334,1.291c-1.23-5.316-5.973-9.29-11.665-9.29c-6.626,0-11.998,5.372-11.998,11.999c0,6.626,5.372,11.998,11.998,11.998C47.562,61.639,56.924,61.639,59.943,61.639z"></path>
                            </g>
                          </g>
                        </svg>
                      </div>
                      <!-- cloudRainAlt-->
                      <div class="col-lg-2 col-3">
                        <svg class="climacon climacon_cloudSunRainAlt" id="cloudRainSunAlt" version="1.1" viewbox="15 15 70 70">
                          <clippath id="cloudFillClipfill6">
                            <path d="M15,15v70h70V15H15z M59.943,61.639c-3.02,0-12.381,0-15.999,0c-6.626,0-11.998-5.371-11.998-11.998c0-6.627,5.372-11.999,11.998-11.999c5.691,0,10.434,3.974,11.665,9.29c1.252-0.81,2.733-1.291,4.334-1.291c4.418,0,8,3.582,8,8C67.943,58.057,64.361,61.639,59.943,61.639z"></path>
                          </clippath>
                          <clippath id="sunCloudFillClipfill5">
                            <path d="M15,15v70h70V15H15z M57.945,49.641c-4.417,0-8-3.582-8-7.999c0-4.418,3.582-7.999,8-7.999s7.998,3.581,7.998,7.999C65.943,46.059,62.362,49.641,57.945,49.641z"></path>
                          </clippath>
                          <clippath id="cloudSunFillClipfill3">
                            <path d="M15,15v70h20.947V63.481c-4.778-2.767-8-7.922-8-13.84c0-8.836,7.163-15.998,15.998-15.998c6.004,0,11.229,3.312,13.965,8.203c0.664-0.113,1.338-0.205,2.033-0.205c6.627,0,11.998,5.373,11.998,12c0,5.262-3.394,9.723-8.107,11.341V85H85V15H15z"></path>
                          </clippath>
                          <g class="climacon_iconWrap climacon_iconWrap-cloudRainSunAlt">
                            <g clip-path="url(#cloudSunFillClip)">
                              <g class="climacon_componentWrap climacon_componentWrap-sun climacon_componentWrap-sun_cloud">
                                <g class="climacon_componentWrap climacon_componentWrap_sunSpoke">
                                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M80.029,43.611h-3.998c-1.105,0-2-0.896-2-1.999s0.895-2,2-2h3.998c1.104,0,2,0.896,2,2S81.135,43.611,80.029,43.611z"></path>
                                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M72.174,30.3c-0.781,0.781-2.049,0.781-2.828,0c-0.781-0.781-0.781-2.047,0-2.828l2.828-2.828c0.779-0.781,2.047-0.781,2.828,0c0.779,0.781,0.779,2.047,0,2.828L72.174,30.3z"></path>
                                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M58.033,25.614c-1.105,0-2-0.896-2-2v-3.999c0-1.104,0.895-2,2-2c1.104,0,2,0.896,2,2v3.999C60.033,24.718,59.135,25.614,58.033,25.614z"></path>
                                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M43.892,30.3l-2.827-2.828c-0.781-0.781-0.781-2.047,0-2.828c0.78-0.781,2.047-0.781,2.827,0l2.827,2.828c0.781,0.781,0.781,2.047,0,2.828C45.939,31.081,44.673,31.081,43.892,30.3z"></path>
                                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M42.033,41.612c0,1.104-0.896,1.999-2,1.999h-4c-1.104,0-1.998-0.896-1.998-1.999s0.896-2,1.998-2h4C41.139,39.612,42.033,40.509,42.033,41.612z"></path>
                                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M43.892,52.925c0.781-0.78,2.048-0.78,2.827,0c0.781,0.78,0.781,2.047,0,2.828l-2.827,2.827c-0.78,0.781-2.047,0.781-2.827,0c-0.781-0.78-0.781-2.047,0-2.827L43.892,52.925z"></path>
                                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M58.033,57.61c1.104,0,2,0.895,2,1.999v4c0,1.104-0.896,2-2,2c-1.105,0-2-0.896-2-2v-4C56.033,58.505,56.928,57.61,58.033,57.61z"></path>
                                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M72.174,52.925l2.828,2.828c0.779,0.78,0.779,2.047,0,2.827c-0.781,0.781-2.049,0.781-2.828,0l-2.828-2.827c-0.781-0.781-0.781-2.048,0-2.828C70.125,52.144,71.391,52.144,72.174,52.925z"></path>
                                </g>
                                <g class="climacon_wrapperComponent climacon_wrapperComponent-sunBody" clip-path="url(#sunCloudFillClip)">
                                  <circle class="climacon_component climacon_component-stroke climacon_component-stroke_sunBody" cx="58.033" cy="41.612" r="11.999"></circle>
                                </g>
                              </g>
                            </g>
                            <g class="climacon_wrapperComponent climacon_wrapperComponent-rain climacon_wrapperComponent-rain_alt">
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_rain climacon_component-stroke_rain- alt" d="M50.001,58.568l3.535,3.535c1.95,1.953,1.95,5.119,0,7.07c-1.953,1.953-5.119,1.953-7.07,0c-1.953-1.951-1.953-5.117,0-7.07L50.001,58.568z"></path>
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_rain climacon_component-stroke_rain- alt" d="M50.001,58.568l3.535,3.535c1.95,1.953,1.95,5.119,0,7.07c-1.953,1.953-5.119,1.953-7.07,0c-1.953-1.951-1.953-5.117,0-7.07L50.001,58.568z"></path>
                            </g>
                            <g class="climacon_wrapperComponent climacon_wrapperComponent-cloud">
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_cloud" d="M59.999,65.641c-0.267,0-0.614,0-1,0c0-1.373-0.319-2.742-0.942-4c0.776,0,1.45,0,1.942,0c4.418,0,7.999-3.58,7.999-7.998c0-4.418-3.581-8-7.999-8c-1.601,0-3.083,0.481-4.334,1.29c-1.231-5.316-5.973-9.289-11.664-9.289c-6.627,0-11.998,5.372-11.998,11.998c0,5.953,4.339,10.879,10.023,11.822c-0.637,1.218-0.969,2.55-1.012,3.888c-7.406-1.399-13.012-7.896-13.012-15.709c0-8.835,7.162-15.998,15.998-15.998c6.004,0,11.229,3.312,13.965,8.204c0.664-0.114,1.337-0.205,2.033-0.205c6.627,0,11.998,5.372,11.998,12C71.996,60.27,66.626,65.641,59.999,65.641z"></path>
                            </g>
                          </g>
                        </svg>
                      </div>
                      <!-- cloudRainSunAlt-->
                      <div class="col-lg-2 col-3">
                        <svg class="climacon climacon_cloudSunRainAltFill" id="cloudRainSunAltFill" version="1.1" viewbox="15 15 70 70">
                          <g class="climacon_iconWrap climacon_iconWrap-cloudRainSunAltFill">
                            <g class="climacon_componentWrap climacon_componentWrap-sun climacon_componentWrap-sun_cloud">
                              <g class="climacon_componentWrap climacon_componentWrap_sunSpoke">
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M80.029,43.611h-3.998c-1.105,0-2-0.896-2-1.999s0.895-2,2-2h3.998c1.104,0,2,0.896,2,2S81.135,43.611,80.029,43.611z"></path>
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M72.174,30.3c-0.781,0.781-2.049,0.781-2.828,0c-0.781-0.781-0.781-2.047,0-2.828l2.828-2.828c0.779-0.781,2.047-0.781,2.828,0c0.779,0.781,0.779,2.047,0,2.828L72.174,30.3z"></path>
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M58.033,25.614c-1.105,0-2-0.896-2-2v-3.999c0-1.104,0.895-2,2-2c1.104,0,2,0.896,2,2v3.999C60.033,24.718,59.135,25.614,58.033,25.614z"></path>
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M43.892,30.3l-2.827-2.828c-0.781-0.781-0.781-2.047,0-2.828c0.78-0.781,2.047-0.781,2.827,0l2.827,2.828c0.781,0.781,0.781,2.047,0,2.828C45.939,31.081,44.673,31.081,43.892,30.3z"></path>
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M42.033,41.612c0,1.104-0.896,1.999-2,1.999h-4c-1.104,0-1.998-0.896-1.998-1.999s0.896-2,1.998-2h4C41.139,39.612,42.033,40.509,42.033,41.612z"></path>
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M43.892,52.925c0.781-0.78,2.048-0.78,2.827,0c0.781,0.78,0.781,2.047,0,2.828l-2.827,2.827c-0.78,0.781-2.047,0.781-2.827,0c-0.781-0.78-0.781-2.047,0-2.827L43.892,52.925z"></path>
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M58.033,57.61c1.104,0,2,0.895,2,1.999v4c0,1.104-0.896,2-2,2c-1.105,0-2-0.896-2-2v-4C56.033,58.505,56.928,57.61,58.033,57.61z"></path>
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M72.174,52.925l2.828,2.828c0.779,0.78,0.779,2.047,0,2.827c-0.781,0.781-2.049,0.781-2.828,0l-2.828-2.827c-0.781-0.781-0.781-2.048,0-2.828C70.125,52.144,71.391,52.144,72.174,52.925z"></path>
                              </g>
                              <g class="climacon_wrapperComponent climacon_wrapperComponent-sunBody">
                                <circle class="climacon_component climacon_component-stroke climacon_component-stroke_sunBody" cx="58.033" cy="41.612" r="11.999"></circle>
                                <circle class="climacon_component climacon_component-fill climacon_component-fill_sunBody" fill="#FFFFFF" cx="58.033" cy="41.612" r="7.999"></circle>
                              </g>
                            </g>
                            <g class="climacon_wrapperComponent climacon_wrapperComponent-rain climacon_wrapperComponent-rain_alt">
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_rain climacon_component-stroke_rain- alt" d="M50.001,58.568l3.535,3.535c1.95,1.953,1.95,5.119,0,7.07c-1.953,1.953-5.119,1.953-7.07,0c-1.953-1.951-1.953-5.117,0-7.07L50.001,58.568z"></path>
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_rain climacon_component-stroke_rain- alt" d="M50.001,58.568l3.535,3.535c1.95,1.953,1.95,5.119,0,7.07c-1.953,1.953-5.119,1.953-7.07,0c-1.953-1.951-1.953-5.117,0-7.07L50.001,58.568z"></path>
                            </g>
                            <g class="climacon_componentWrap climacon_componentWrap_cloud">
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_cloud" d="M43.945,65.639c-8.835,0-15.998-7.162-15.998-15.998c0-8.836,7.163-15.998,15.998-15.998c6.004,0,11.229,3.312,13.965,8.203c0.664-0.113,1.338-0.205,2.033-0.205c6.627,0,11.998,5.373,11.998,12c0,6.625-5.371,11.998-11.998,11.998C57.168,65.639,47.143,65.639,43.945,65.639z"></path>
                              <path class="climacon_component climacon_component-fill climacon_component-fill_cloud" fill="#FFFFFF" d="M59.943,61.639c4.418,0,8-3.582,8-7.998c0-4.417-3.582-8-8-8c-1.601,0-3.082,0.481-4.334,1.291c-1.23-5.316-5.973-9.29-11.665-9.29c-6.626,0-11.998,5.372-11.998,11.999c0,6.626,5.372,11.998,11.998,11.998C47.562,61.639,56.924,61.639,59.943,61.639z"></path>
                            </g>
                          </g>
                        </svg>
                      </div>
                      <!-- cloudRainSunAltFill-->
                      <div class="col-lg-2 col-3">
                        <svg class="climacon climacon_cloudMoonRainAlt" id="cloudRainMoonAlt" version="1.1" viewbox="15 15 70 70">
                          <clippath id="cloudFillClipfill7">
                            <path d="M15,15v70h70V15H15z M59.943,61.639c-3.02,0-12.381,0-15.999,0c-6.626,0-11.998-5.371-11.998-11.998c0-6.627,5.372-11.999,11.998-11.999c5.691,0,10.434,3.974,11.665,9.29c1.252-0.81,2.733-1.291,4.334-1.291c4.418,0,8,3.582,8,8C67.943,58.057,64.361,61.639,59.943,61.639z"></path>
                          </clippath>
                          <clippath id="moonCloudFillClipfill4">
                            <path d="M0,0v100h100V0H0z M60.943,46.641c-4.418,0-7.999-3.582-7.999-7.999c0-3.803,2.655-6.979,6.211-7.792c0.903,4.854,4.726,8.676,9.579,9.58C67.922,43.986,64.745,46.641,60.943,46.641z"></path>
                          </clippath>
                          <g class="climacon_iconWrap climacon_iconWrap-cloudRainMoonAlt">
                            <g clip-path="url(#cloudFillClip)">
                              <g class="climacon_wrapperComponent climacon_wrapperComponent-moon climacon_componentWrap-moon_cloud" clip-path="url(#moonCloudFillClip)">
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunBody" d="M61.023,50.641c-6.627,0-11.999-5.372-11.999-11.998c0-6.627,5.372-11.999,11.999-11.999c0.755,0,1.491,0.078,2.207,0.212c-0.132,0.576-0.208,1.173-0.208,1.788c0,4.418,3.582,7.999,8,7.999c0.614,0,1.212-0.076,1.788-0.208c0.133,0.717,0.211,1.452,0.211,2.208C73.021,45.269,67.649,50.641,61.023,50.641z"></path>
                              </g>
                            </g>
                            <g class="climacon_wrapperComponent climacon_wrapperComponent-rain climacon_wrapperComponent-rain_alt">
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_rain climacon_component-stroke_rain- alt" d="M50.001,58.568l3.535,3.535c1.95,1.953,1.95,5.119,0,7.07c-1.953,1.953-5.119,1.953-7.07,0c-1.953-1.951-1.953-5.117,0-7.07L50.001,58.568z"></path>
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_rain climacon_component-stroke_rain- alt" d="M50.001,58.568l3.535,3.535c1.95,1.953,1.95,5.119,0,7.07c-1.953,1.953-5.119,1.953-7.07,0c-1.953-1.951-1.953-5.117,0-7.07L50.001,58.568z"></path>
                            </g>
                            <g class="climacon_wrapperComponent climacon_wrapperComponent_cloud" clip-path="url(#cloudFillClip)">
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_cloud" d="M59.999,65.641c-0.267,0-0.614,0-1,0c0-1.373-0.319-2.742-0.942-4c0.776,0,1.45,0,1.942,0c4.418,0,7.999-3.58,7.999-7.998c0-4.418-3.581-8-7.999-8c-1.601,0-3.083,0.481-4.334,1.29c-1.231-5.316-5.973-9.289-11.664-9.289c-6.627,0-11.998,5.372-11.998,11.998c0,5.953,4.339,10.879,10.023,11.822c-0.637,1.218-0.969,2.55-1.012,3.888c-7.406-1.399-13.012-7.896-13.012-15.709c0-8.835,7.162-15.998,15.998-15.998c6.004,0,11.229,3.312,13.965,8.204c0.664-0.114,1.337-0.205,2.033-0.205c6.627,0,11.998,5.372,11.998,12C71.996,60.27,66.626,65.641,59.999,65.641z"></path>
                            </g>
                          </g>
                        </svg>
                      </div>
                      <!-- cloudRainMoonAlt-->
                      <div class="col-lg-2 col-3">
                        <svg class="climacon climacon_cloudMoonRainAltFill" id="cloudRainMoonAltFill" version="1.1" viewbox="15 15 70 70">
                          <g class="climacon_iconWrap climacon_iconWrap-cloudRainSunAlt">
                            <g class="climacon_wrapperComponent climacon_wrapperComponent-moon climacon_componentWrap-moon_cloud">
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunBody" d="M61.023,50.641c-6.627,0-11.999-5.372-11.999-11.998c0-6.627,5.372-11.999,11.999-11.999c0.755,0,1.491,0.078,2.207,0.212c-0.132,0.576-0.208,1.173-0.208,1.788c0,4.418,3.582,7.999,8,7.999c0.614,0,1.212-0.076,1.788-0.208c0.133,0.717,0.211,1.452,0.211,2.208C73.021,45.269,67.649,50.641,61.023,50.641z"></path>
                              <path class="climacon_component climacon_component-fill climacon_component-fill_moon" fill="#FFFFFF" d="M59.235,30.851c-3.556,0.813-6.211,3.989-6.211,7.792c0,4.417,3.581,7.999,7.999,7.999c3.802,0,6.979-2.655,7.791-6.211C63.961,39.527,60.139,35.705,59.235,30.851z"></path>
                            </g>
                            <g class="climacon_wrapperComponent climacon_wrapperComponent-rain climacon_wrapperComponent-rain_alt">
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_rain climacon_component-stroke_rain- alt" d="M50.001,58.568l3.535,3.535c1.95,1.953,1.95,5.119,0,7.07c-1.953,1.953-5.119,1.953-7.07,0c-1.953-1.951-1.953-5.117,0-7.07L50.001,58.568z"></path>
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_rain climacon_component-stroke_rain- alt" d="M50.001,58.568l3.535,3.535c1.95,1.953,1.95,5.119,0,7.07c-1.953,1.953-5.119,1.953-7.07,0c-1.953-1.951-1.953-5.117,0-7.07L50.001,58.568z"></path>
                            </g>
                            <g class="climacon_componentWrap climacon_componentWrap_cloud">
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_cloud" d="M43.945,65.639c-8.835,0-15.998-7.162-15.998-15.998c0-8.836,7.163-15.998,15.998-15.998c6.004,0,11.229,3.312,13.965,8.203c0.664-0.113,1.338-0.205,2.033-0.205c6.627,0,11.998,5.373,11.998,12c0,6.625-5.371,11.998-11.998,11.998C57.168,65.639,47.143,65.639,43.945,65.639z"></path>
                              <path class="climacon_component climacon_component-fill climacon_component-fill_cloud" fill="#FFFFFF" d="M59.943,61.639c4.418,0,8-3.582,8-7.998c0-4.417-3.582-8-8-8c-1.601,0-3.082,0.481-4.334,1.291c-1.23-5.316-5.973-9.29-11.665-9.29c-6.626,0-11.998,5.372-11.998,11.999c0,6.626,5.372,11.998,11.998,11.998C47.562,61.639,56.924,61.639,59.943,61.639z"></path>
                            </g>
                          </g>
                        </svg>
                      </div>
                      <!-- cloudRainMoonAltFill-->
                      <div class="col-lg-2 col-3">
                        <svg class="climacon climacon_cloudHailAlt" id="cloudHailAlt" version="1.1" viewbox="15 15 70 70">
                          <g class="climacon_iconWrap climacon_iconWrap-cloudHailAlt">
                            <g class="climacon_wrapperComponent climacon_wrapperComponent-hailAlt">
                              <g class="climacon_component climacon_component-stroke climacon_component-stroke_hailAlt climacon_component-stroke_hailAlt-left">
                                <circle cx="42" cy="65.498" r="2"></circle>
                              </g>
                              <g class="climacon_component climacon_component-stroke climacon_component-stroke_hailAlt climacon_component-stroke_hailAlt-middle">
                                <circle cx="49.999" cy="65.498" r="2"></circle>
                              </g>
                              <g class="climacon_component climacon_component-stroke climacon_component-stroke_hailAlt climacon_component-stroke_hailAlt-right">
                                <circle cx="57.998" cy="65.498" r="2"></circle>
                              </g>
                              <g class="climacon_component climacon_component-stroke climacon_component-stroke_hailAlt climacon_component-stroke_hailAlt-left">
                                <circle cx="42" cy="65.498" r="2"></circle>
                              </g>
                              <g class="climacon_component climacon_component-stroke climacon_component-stroke_hailAlt climacon_component-stroke_hailAlt-middle">
                                <circle cx="49.999" cy="65.498" r="2"></circle>
                              </g>
                              <g class="climacon_component climacon_component-stroke climacon_component-stroke_hailAlt climacon_component-stroke_hailAlt-right">
                                <circle cx="57.998" cy="65.498" r="2"></circle>
                              </g>
                            </g>
                            <g class="climacon_wrapperComponent climacon_wrapperComponent-cloud">
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_cloud" d="M63.999,64.941v-4.381c2.39-1.384,3.999-3.961,3.999-6.92c0-4.417-3.581-8-7.998-8c-1.602,0-3.084,0.48-4.334,1.291c-1.23-5.317-5.974-9.29-11.665-9.29c-6.626,0-11.998,5.372-11.998,11.998c0,3.549,1.55,6.728,3.999,8.924v4.916c-4.776-2.768-7.998-7.922-7.998-13.84c0-8.835,7.162-15.997,15.997-15.997c6.004,0,11.229,3.311,13.966,8.203c0.663-0.113,1.336-0.205,2.033-0.205c6.626,0,11.998,5.372,11.998,12C71.998,58.863,68.656,63.293,63.999,64.941z"></path>
                            </g>
                          </g>
                        </svg>
                      </div>
                      <!-- cloudHailAlt-->
                      <div class="col-lg-2 col-3">
                        <svg class="climacon climacon_cloudHailAltFill" id="cloudHailAltFill" version="1.1" viewbox="15 15 70 70">
                          <g class="climacon_iconWrap climacon_iconWrap-cloudHailAltFill">
                            <g class="climacon_wrapperComponent climacon_wrapperComponent-hailAlt">
                              <g class="climacon_component climacon_component-stroke climacon_component-stroke_hailAlt climacon_component-stroke_hailAlt-left">
                                <circle cx="42" cy="65.498" r="2"></circle>
                              </g>
                              <g class="climacon_component climacon_component-stroke climacon_component-stroke_hailAlt climacon_component-stroke_hailAlt-middle">
                                <circle cx="49.999" cy="65.498" r="2"></circle>
                              </g>
                              <g class="climacon_component climacon_component-stroke climacon_component-stroke_hailAlt climacon_component-stroke_hailAlt-right">
                                <circle cx="57.998" cy="65.498" r="2"></circle>
                              </g>
                              <g class="climacon_component climacon_component-stroke climacon_component-stroke_hailAlt climacon_component-stroke_hailAlt-left">
                                <circle cx="42" cy="65.498" r="2"></circle>
                              </g>
                              <g class="climacon_component climacon_component-stroke climacon_component-stroke_hailAlt climacon_component-stroke_hailAlt-middle">
                                <circle cx="49.999" cy="65.498" r="2"></circle>
                              </g>
                              <g class="climacon_component climacon_component-stroke climacon_component-stroke_hailAlt climacon_component-stroke_hailAlt-right">
                                <circle cx="57.998" cy="65.498" r="2"></circle>
                              </g>
                            </g>
                            <g class="climacon_componentWrap climacon_componentWrap_cloud">
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_cloud" d="M43.945,65.639c-8.835,0-15.998-7.162-15.998-15.998c0-8.836,7.163-15.998,15.998-15.998c6.004,0,11.229,3.312,13.965,8.203c0.664-0.113,1.338-0.205,2.033-0.205c6.627,0,11.998,5.373,11.998,12c0,6.625-5.371,11.998-11.998,11.998C57.168,65.639,47.143,65.639,43.945,65.639z"></path>
                              <path class="climacon_component climacon_component-fill climacon_component-fill_cloud" fill="#FFFFFF" d="M59.943,61.639c4.418,0,8-3.582,8-7.998c0-4.417-3.582-8-8-8c-1.601,0-3.082,0.481-4.334,1.291c-1.23-5.316-5.973-9.29-11.665-9.29c-6.626,0-11.998,5.372-11.998,11.999c0,6.626,5.372,11.998,11.998,11.998C47.562,61.639,56.924,61.639,59.943,61.639z"></path>
                            </g>
                          </g>
                        </svg>
                      </div>
                      <!-- cloudHailAltFill-->
                      <div class="col-lg-2 col-3">
                        <svg class="climacon climacon_cloudHailAltSun" id="cloudHailAltSun" version="1.1" viewbox="15 15 70 70">
                          <clippath id="cloudFillClipfill8">
                            <path d="M15,15v70h70V15H15z M59.943,61.639c-3.02,0-12.381,0-15.999,0c-6.626,0-11.998-5.371-11.998-11.998c0-6.627,5.372-11.999,11.998-11.999c5.691,0,10.434,3.974,11.665,9.29c1.252-0.81,2.733-1.291,4.334-1.291c4.418,0,8,3.582,8,8C67.943,58.057,64.361,61.639,59.943,61.639z"></path>
                          </clippath>
                          <clippath id="sunCloudFillClipfill1_1">
                            <path d="M15,15v70h70V15H15z M57.945,49.641c-4.417,0-8-3.582-8-7.999c0-4.418,3.582-7.999,8-7.999s7.998,3.581,7.998,7.999C65.943,46.059,62.362,49.641,57.945,49.641z"></path>
                          </clippath>
                          <clippath id="cloudSunFillClipfill4">
                            <path d="M15,15v70h20.947V63.481c-4.778-2.767-8-7.922-8-13.84c0-8.836,7.163-15.998,15.998-15.998c6.004,0,11.229,3.312,13.965,8.203c0.664-0.113,1.338-0.205,2.033-0.205c6.627,0,11.998,5.373,11.998,12c0,5.262-3.394,9.723-8.107,11.341V85H85V15H15z"></path>
                          </clippath>
                          <g class="climacon_iconWrap climacon_iconWrap-cloudHailAltSun">
                            <g clip-path="url(#cloudSunFillClip)">
                              <g class="climacon_componentWrap climacon_componentWrap-sun climacon_componentWrap-sun_cloud">
                                <g class="climacon_componentWrap climacon_componentWrap_sunSpoke">
                                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M80.029,43.611h-3.998c-1.105,0-2-0.896-2-1.999s0.895-2,2-2h3.998c1.104,0,2,0.896,2,2S81.135,43.611,80.029,43.611z"></path>
                                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M72.174,30.3c-0.781,0.781-2.049,0.781-2.828,0c-0.781-0.781-0.781-2.047,0-2.828l2.828-2.828c0.779-0.781,2.047-0.781,2.828,0c0.779,0.781,0.779,2.047,0,2.828L72.174,30.3z"></path>
                                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M58.033,25.614c-1.105,0-2-0.896-2-2v-3.999c0-1.104,0.895-2,2-2c1.104,0,2,0.896,2,2v3.999C60.033,24.718,59.135,25.614,58.033,25.614z"></path>
                                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M43.892,30.3l-2.827-2.828c-0.781-0.781-0.781-2.047,0-2.828c0.78-0.781,2.047-0.781,2.827,0l2.827,2.828c0.781,0.781,0.781,2.047,0,2.828C45.939,31.081,44.673,31.081,43.892,30.3z"></path>
                                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M42.033,41.612c0,1.104-0.896,1.999-2,1.999h-4c-1.104,0-1.998-0.896-1.998-1.999s0.896-2,1.998-2h4C41.139,39.612,42.033,40.509,42.033,41.612z"></path>
                                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M43.892,52.925c0.781-0.78,2.048-0.78,2.827,0c0.781,0.78,0.781,2.047,0,2.828l-2.827,2.827c-0.78,0.781-2.047,0.781-2.827,0c-0.781-0.78-0.781-2.047,0-2.827L43.892,52.925z"></path>
                                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M58.033,57.61c1.104,0,2,0.895,2,1.999v4c0,1.104-0.896,2-2,2c-1.105,0-2-0.896-2-2v-4C56.033,58.505,56.928,57.61,58.033,57.61z"></path>
                                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M72.174,52.925l2.828,2.828c0.779,0.78,0.779,2.047,0,2.827c-0.781,0.781-2.049,0.781-2.828,0l-2.828-2.827c-0.781-0.781-0.781-2.048,0-2.828C70.125,52.144,71.391,52.144,72.174,52.925z"></path>
                                </g>
                                <g class="climacon_wrapperComponent climacon_wrapperComponent-sunBody" clip-path="url(#sunCloudFillClip)">
                                  <circle class="climacon_component climacon_component-stroke climacon_component-stroke_sunBody" cx="58.033" cy="41.612" r="11.999"></circle>
                                </g>
                              </g>
                            </g>
                            <g class="climacon_wrapperComponent climacon_wrapperComponent-hailAlt">
                              <g class="climacon_component climacon_component-stroke climacon_component-stroke_hailAlt climacon_component-stroke_hailAlt-left">
                                <circle cx="42" cy="65.498" r="2"></circle>
                              </g>
                              <g class="climacon_component climacon_component-stroke climacon_component-stroke_hailAlt climacon_component-stroke_hailAlt-middle">
                                <circle cx="49.999" cy="65.498" r="2"></circle>
                              </g>
                              <g class="climacon_component climacon_component-stroke climacon_component-stroke_hailAlt climacon_component-stroke_hailAlt-right">
                                <circle cx="57.998" cy="65.498" r="2"></circle>
                              </g>
                              <g class="climacon_component climacon_component-stroke climacon_component-stroke_hailAlt climacon_component-stroke_hailAlt-left">
                                <circle cx="42" cy="65.498" r="2"></circle>
                              </g>
                              <g class="climacon_component climacon_component-stroke climacon_component-stroke_hailAlt climacon_component-stroke_hailAlt-middle">
                                <circle cx="49.999" cy="65.498" r="2"></circle>
                              </g>
                              <g class="climacon_component climacon_component-stroke climacon_component-stroke_hailAlt climacon_component-stroke_hailAlt-right">
                                <circle cx="57.998" cy="65.498" r="2"></circle>
                              </g>
                            </g>
                            <g class="climacon_wrapperComponent climacon_wrapperComponent-cloud" clip-path="url(#cloudFillClip)">
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_cloud" d="M63.999,64.941v-4.381c2.39-1.384,3.999-3.961,3.999-6.92c0-4.417-3.581-8-7.998-8c-1.602,0-3.084,0.48-4.334,1.291c-1.23-5.317-5.974-9.29-11.665-9.29c-6.626,0-11.998,5.372-11.998,11.998c0,3.549,1.55,6.728,3.999,8.924v4.916c-4.776-2.768-7.998-7.922-7.998-13.84c0-8.835,7.162-15.997,15.997-15.997c6.004,0,11.229,3.311,13.966,8.203c0.663-0.113,1.336-0.205,2.033-0.205c6.626,0,11.998,5.372,11.998,12C71.998,58.863,68.656,63.293,63.999,64.941z"></path>
                            </g>
                          </g>
                        </svg>
                      </div>
                      <!-- cloudHailAltSun-->
                      <div class="col-lg-2 col-3">
                        <svg class="climacon climacon_cloudHailAltSun" id="cloudHailAltSunalt" version="1.1" viewbox="15 15 70 70">
                          <g class="climacon_iconWrap climacon_iconWrap-cloudHailAltSun">
                            <g class="climacon_componentWrap climacon_componentWrap-sun climacon_componentWrap-sun_cloud">
                              <g class="climacon_componentWrap climacon_componentWrap_sunSpoke">
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M80.029,43.611h-3.998c-1.105,0-2-0.896-2-1.999s0.895-2,2-2h3.998c1.104,0,2,0.896,2,2S81.135,43.611,80.029,43.611z"></path>
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M72.174,30.3c-0.781,0.781-2.049,0.781-2.828,0c-0.781-0.781-0.781-2.047,0-2.828l2.828-2.828c0.779-0.781,2.047-0.781,2.828,0c0.779,0.781,0.779,2.047,0,2.828L72.174,30.3z"></path>
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M58.033,25.614c-1.105,0-2-0.896-2-2v-3.999c0-1.104,0.895-2,2-2c1.104,0,2,0.896,2,2v3.999C60.033,24.718,59.135,25.614,58.033,25.614z"></path>
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M43.892,30.3l-2.827-2.828c-0.781-0.781-0.781-2.047,0-2.828c0.78-0.781,2.047-0.781,2.827,0l2.827,2.828c0.781,0.781,0.781,2.047,0,2.828C45.939,31.081,44.673,31.081,43.892,30.3z"></path>
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M42.033,41.612c0,1.104-0.896,1.999-2,1.999h-4c-1.104,0-1.998-0.896-1.998-1.999s0.896-2,1.998-2h4C41.139,39.612,42.033,40.509,42.033,41.612z"></path>
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M43.892,52.925c0.781-0.78,2.048-0.78,2.827,0c0.781,0.78,0.781,2.047,0,2.828l-2.827,2.827c-0.78,0.781-2.047,0.781-2.827,0c-0.781-0.78-0.781-2.047,0-2.827L43.892,52.925z"></path>
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M58.033,57.61c1.104,0,2,0.895,2,1.999v4c0,1.104-0.896,2-2,2c-1.105,0-2-0.896-2-2v-4C56.033,58.505,56.928,57.61,58.033,57.61z"></path>
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M72.174,52.925l2.828,2.828c0.779,0.78,0.779,2.047,0,2.827c-0.781,0.781-2.049,0.781-2.828,0l-2.828-2.827c-0.781-0.781-0.781-2.048,0-2.828C70.125,52.144,71.391,52.144,72.174,52.925z"></path>
                              </g>
                              <g class="climacon_wrapperComponent climacon_wrapperComponent-sunBody">
                                <circle class="climacon_component climacon_component-stroke climacon_component-stroke_sunBody" cx="58.033" cy="41.612" r="11.999"></circle>
                                <circle class="climacon_component climacon_component-fill climacon_component-fill_sunBody" fill="#FFFFFF" cx="58.033" cy="41.612" r="7.999"></circle>
                              </g>
                            </g>
                            <g class="climacon_wrapperComponent climacon_wrapperComponent-hailAlt">
                              <g class="climacon_component climacon_component-stroke climacon_component-stroke_hailAlt climacon_component-stroke_hailAlt-left">
                                <circle cx="42" cy="65.498" r="2"></circle>
                              </g>
                              <g class="climacon_component climacon_component-stroke climacon_component-stroke_hailAlt climacon_component-stroke_hailAlt-middle">
                                <circle cx="49.999" cy="65.498" r="2"></circle>
                              </g>
                              <g class="climacon_component climacon_component-stroke climacon_component-stroke_hailAlt climacon_component-stroke_hailAlt-right">
                                <circle cx="57.998" cy="65.498" r="2"></circle>
                              </g>
                              <g class="climacon_component climacon_component-stroke climacon_component-stroke_hailAlt climacon_component-stroke_hailAlt-left">
                                <circle cx="42" cy="65.498" r="2"></circle>
                              </g>
                              <g class="climacon_component climacon_component-stroke climacon_component-stroke_hailAlt climacon_component-stroke_hailAlt-middle">
                                <circle cx="49.999" cy="65.498" r="2"></circle>
                              </g>
                              <g class="climacon_component climacon_component-stroke climacon_component-stroke_hailAlt climacon_component-stroke_hailAlt-right">
                                <circle cx="57.998" cy="65.498" r="2"></circle>
                              </g>
                            </g>
                            <g class="climacon_componentWrap climacon_componentWrap_cloud">
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_cloud" d="M43.945,65.639c-8.835,0-15.998-7.162-15.998-15.998c0-8.836,7.163-15.998,15.998-15.998c6.004,0,11.229,3.312,13.965,8.203c0.664-0.113,1.338-0.205,2.033-0.205c6.627,0,11.998,5.373,11.998,12c0,6.625-5.371,11.998-11.998,11.998C57.168,65.639,47.143,65.639,43.945,65.639z"></path>
                              <path class="climacon_component climacon_component-fill climacon_component-fill_cloud" fill="#FFFFFF" d="M59.943,61.639c4.418,0,8-3.582,8-7.998c0-4.417-3.582-8-8-8c-1.601,0-3.082,0.481-4.334,1.291c-1.23-5.316-5.973-9.29-11.665-9.29c-6.626,0-11.998,5.372-11.998,11.999c0,6.626,5.372,11.998,11.998,11.998C47.562,61.639,56.924,61.639,59.943,61.639z"></path>
                            </g>
                          </g>
                        </svg>
                      </div>
                      <!-- cloudHailAltSun-->
                      <div class="col-lg-2 col-3">
                        <svg class="climacon climacon_cloudHailAltMoon" id="cloudHailAltMoon" version="1.1" viewbox="15 15 70 70">
                          <clippath id="cloudFillClipfill9">
                            <path d="M15,15v70h70V15H15z M59.943,61.639c-3.02,0-12.381,0-15.999,0c-6.626,0-11.998-5.371-11.998-11.998c0-6.627,5.372-11.999,11.998-11.999c5.691,0,10.434,3.974,11.665,9.29c1.252-0.81,2.733-1.291,4.334-1.291c4.418,0,8,3.582,8,8C67.943,58.057,64.361,61.639,59.943,61.639z"></path>
                          </clippath>
                          <clippath id="moonCloudFillClipfill5">
                            <path d="M0,0v100h100V0H0z M60.943,46.641c-4.418,0-7.999-3.582-7.999-7.999c0-3.803,2.655-6.979,6.211-7.792c0.903,4.854,4.726,8.676,9.579,9.58C67.922,43.986,64.745,46.641,60.943,46.641z"></path>
                          </clippath>
                          <g class="climacon_iconWrap climacon_iconWrap-cloudHailAltMoon">
                            <g clip-path="url(#cloudFillClip)">
                              <g class="climacon_wrapperComponent climacon_wrapperComponent-moon climacon_componentWrap-moon_cloud">
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunBody" d="M61.023,50.641c-6.627,0-11.999-5.372-11.999-11.998c0-6.627,5.372-11.999,11.999-11.999c0.755,0,1.491,0.078,2.207,0.212c-0.132,0.576-0.208,1.173-0.208,1.788c0,4.418,3.582,7.999,8,7.999c0.614,0,1.212-0.076,1.788-0.208c0.133,0.717,0.211,1.452,0.211,2.208C73.021,45.269,67.649,50.641,61.023,50.641z"></path>
                                <path class="climacon_component climacon_component-fill climacon_component-fill_moon" fill="#FFFFFF" d="M59.235,30.851c-3.556,0.813-6.211,3.989-6.211,7.792c0,4.417,3.581,7.999,7.999,7.999c3.802,0,6.979-2.655,7.791-6.211C63.961,39.527,60.139,35.705,59.235,30.851z"></path>
                              </g>
                            </g>
                            <g class="climacon_wrapperComponent climacon_wrapperComponent-hailAlt">
                              <g class="climacon_component climacon_component-stroke climacon_component-stroke_hailAlt climacon_component-stroke_hailAlt-left">
                                <circle cx="42" cy="65.498" r="2"></circle>
                              </g>
                              <g class="climacon_component climacon_component-stroke climacon_component-stroke_hailAlt climacon_component-stroke_hailAlt-middle">
                                <circle cx="49.999" cy="65.498" r="2"></circle>
                              </g>
                              <g class="climacon_component climacon_component-stroke climacon_component-stroke_hailAlt climacon_component-stroke_hailAlt-right">
                                <circle cx="57.998" cy="65.498" r="2"></circle>
                              </g>
                              <g class="climacon_component climacon_component-stroke climacon_component-stroke_hailAlt climacon_component-stroke_hailAlt-left">
                                <circle cx="42" cy="65.498" r="2"></circle>
                              </g>
                              <g class="climacon_component climacon_component-stroke climacon_component-stroke_hailAlt climacon_component-stroke_hailAlt-middle">
                                <circle cx="49.999" cy="65.498" r="2"></circle>
                              </g>
                              <g class="climacon_component climacon_component-stroke climacon_component-stroke_hailAlt climacon_component-stroke_hailAlt-right">
                                <circle cx="57.998" cy="65.498" r="2"></circle>
                              </g>
                            </g>
                            <g class="climacon_wrapperComponent climacon_wrapperComponent-cloud" clip-path="url(#cloudFillClip)">
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_cloud" d="M63.999,64.941v-4.381c2.39-1.384,3.999-3.961,3.999-6.92c0-4.417-3.581-8-7.998-8c-1.602,0-3.084,0.48-4.334,1.291c-1.23-5.317-5.974-9.29-11.665-9.29c-6.626,0-11.998,5.372-11.998,11.998c0,3.549,1.55,6.728,3.999,8.924v4.916c-4.776-2.768-7.998-7.922-7.998-13.84c0-8.835,7.162-15.997,15.997-15.997c6.004,0,11.229,3.311,13.966,8.203c0.663-0.113,1.336-0.205,2.033-0.205c6.626,0,11.998,5.372,11.998,12C71.998,58.863,68.656,63.293,63.999,64.941z"></path>
                            </g>
                          </g>
                        </svg>
                      </div>
                      <!-- cloudHailAltMoon-->
                      <div class="col-lg-2 col-3">
                        <svg class="climacon climacon_cloudHailAltMoonFill" id="cloudHailAltMoonFill" version="1.1" viewbox="15 15 70 70">
                          <g class="climacon_iconWrap climacon_iconWrap-cloudHailAltMoon">
                            <g class="climacon_wrapperComponent climacon_wrapperComponent-moon climacon_componentWrap-moon_cloud">
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunBody" d="M61.023,50.641c-6.627,0-11.999-5.372-11.999-11.998c0-6.627,5.372-11.999,11.999-11.999c0.755,0,1.491,0.078,2.207,0.212c-0.132,0.576-0.208,1.173-0.208,1.788c0,4.418,3.582,7.999,8,7.999c0.614,0,1.212-0.076,1.788-0.208c0.133,0.717,0.211,1.452,0.211,2.208C73.021,45.269,67.649,50.641,61.023,50.641z"></path>
                              <path class="climacon_component climacon_component-fill climacon_component-fill_moon" fill="#FFFFFF" d="M59.235,30.851c-3.556,0.813-6.211,3.989-6.211,7.792c0,4.417,3.581,7.999,7.999,7.999c3.802,0,6.979-2.655,7.791-6.211C63.961,39.527,60.139,35.705,59.235,30.851z"></path>
                            </g>
                            <g class="climacon_wrapperComponent climacon_wrapperComponent-hailAlt">
                              <g class="climacon_component climacon_component-stroke climacon_component-stroke_hailAlt climacon_component-stroke_hailAlt-left">
                                <circle cx="42" cy="65.498" r="2"></circle>
                              </g>
                              <g class="climacon_component climacon_component-stroke climacon_component-stroke_hailAlt climacon_component-stroke_hailAlt-middle">
                                <circle cx="49.999" cy="65.498" r="2"></circle>
                              </g>
                              <g class="climacon_component climacon_component-stroke climacon_component-stroke_hailAlt climacon_component-stroke_hailAlt-right">
                                <circle cx="57.998" cy="65.498" r="2"></circle>
                              </g>
                              <g class="climacon_component climacon_component-stroke climacon_component-stroke_hailAlt climacon_component-stroke_hailAlt-left">
                                <circle cx="42" cy="65.498" r="2"></circle>
                              </g>
                              <g class="climacon_component climacon_component-stroke climacon_component-stroke_hailAlt climacon_component-stroke_hailAlt-middle">
                                <circle cx="49.999" cy="65.498" r="2"></circle>
                              </g>
                              <g class="climacon_component climacon_component-stroke climacon_component-stroke_hailAlt climacon_component-stroke_hailAlt-right">
                                <circle cx="57.998" cy="65.498" r="2"></circle>
                              </g>
                            </g>
                            <g class="climacon_componentWrap climacon_componentWrap_cloud">
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_cloud" d="M43.945,65.639c-8.835,0-15.998-7.162-15.998-15.998c0-8.836,7.163-15.998,15.998-15.998c6.004,0,11.229,3.312,13.965,8.203c0.664-0.113,1.338-0.205,2.033-0.205c6.627,0,11.998,5.373,11.998,12c0,6.625-5.371,11.998-11.998,11.998C57.168,65.639,47.143,65.639,43.945,65.639z"></path>
                              <path class="climacon_component climacon_component-fill climacon_component-fill_cloud" fill="#FFFFFF" d="M59.943,61.639c4.418,0,8-3.582,8-7.998c0-4.417-3.582-8-8-8c-1.601,0-3.082,0.481-4.334,1.291c-1.23-5.316-5.973-9.29-11.665-9.29c-6.626,0-11.998,5.372-11.998,11.999c0,6.626,5.372,11.998,11.998,11.998C47.562,61.639,56.924,61.639,59.943,61.639z"></path>
                            </g>
                          </g>
                        </svg>
                      </div>
                      <!-- cloudHailAltMoonFill-->
                      <div class="col-lg-2 col-3">
                        <svg class="climacon climacon_cloudSnow" id="cloudSnow" version="1.1" viewbox="15 15 70 70">
                          <g class="climacon_iconWrap climacon_iconWrap-cloudSnow">
                            <g class="climacon_wrapperComponent climacon_wrapperComponent-snow" clip-path="url(#snowFillClip)">
                              <circle class="climacon_component climacon_component-stroke climacon_component-stroke_snow climacon_component-stroke_snow-left" cx="42.001" cy="59.641" r="2"></circle>
                              <circle class="climacon_component climacon_component-stroke climacon_component-stroke_snow climacon_component-stroke_snow-middle" cx="50.001" cy="59.641" r="2"></circle>
                              <circle class="climacon_component climacon_component-stroke climacon_component-stroke_snow climacon_component-stroke_snow-right" cx="57.999" cy="59.641" r="2"></circle>
                            </g>
                            <g class="climacon_wrapperComponent climacon_wrapperComponent-cloud">
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_cloud" d="M63.999,64.943v-4.381c2.39-1.386,3.999-3.963,3.999-6.922c0-4.417-3.581-7.999-7.999-7.999c-1.601,0-3.083,0.48-4.333,1.291c-1.23-5.317-5.974-9.291-11.665-9.291c-6.627,0-11.998,5.373-11.998,12c0,3.549,1.55,6.729,4,8.924v4.916c-4.777-2.769-8-7.922-8-13.84c0-8.836,7.163-15.999,15.998-15.999c6.004,0,11.229,3.312,13.965,8.204c0.664-0.113,1.337-0.205,2.033-0.205c6.627,0,11.999,5.373,11.999,11.999C71.998,58.863,68.654,63.293,63.999,64.943z"></path>
                            </g>
                          </g>
                        </svg>
                      </div>
                      <!-- cloudSnow-->
                      <div class="col-lg-2 col-3">
                        <svg class="climacon climacon_cloudSnowFill" id="cloudSnowFill" version="1.1" viewbox="15 15 70 70">
                          <g class="climacon_iconWrap climacon_iconWrap-cloudSnowFill">
                            <g class="climacon_wrapperComponent climacon_wrapperComponent-snow">
                              <circle class="climacon_component climacon_component-stroke climacon_component-stroke_snow climacon_component-stroke_snow-left" cx="42.001" cy="59.641" r="2"></circle>
                              <circle class="climacon_component climacon_component-stroke climacon_component-stroke_snow climacon_component-stroke_snow-middle" cx="50.001" cy="59.641" r="2"></circle>
                              <circle class="climacon_component climacon_component-stroke climacon_component-stroke_snow climacon_component-stroke_snow-right" cx="57.999" cy="59.641" r="2"></circle>
                            </g>
                            <g class="climacon_componentWrap climacon_componentWrap_cloud">
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_cloud" d="M43.945,65.639c-8.835,0-15.998-7.162-15.998-15.998c0-8.836,7.163-15.998,15.998-15.998c6.004,0,11.229,3.312,13.965,8.203c0.664-0.113,1.338-0.205,2.033-0.205c6.627,0,11.998,5.373,11.998,12c0,6.625-5.371,11.998-11.998,11.998C57.168,65.639,47.143,65.639,43.945,65.639z"></path>
                              <path class="climacon_component climacon_component-fill climacon_component-fill_cloud" fill="#FFFFFF" d="M59.943,61.639c4.418,0,8-3.582,8-7.998c0-4.417-3.582-8-8-8c-1.601,0-3.082,0.481-4.334,1.291c-1.23-5.316-5.973-9.29-11.665-9.29c-6.626,0-11.998,5.372-11.998,11.999c0,6.626,5.372,11.998,11.998,11.998C47.562,61.639,56.924,61.639,59.943,61.639z"></path>
                            </g>
                          </g>
                        </svg>
                      </div>
                      <!-- cloudSnowFill-->
                      <div class="col-lg-2 col-3">
                        <svg class="climacon climacon_cloudSnowSun" id="cloudSnowSun" version="1.1" viewbox="15 15 70 70">
                          <clippath id="cloudFillClipfill10">
                            <path d="M15,15v70h70V15H15z M59.943,61.639c-3.02,0-12.381,0-15.999,0c-6.626,0-11.998-5.371-11.998-11.998c0-6.627,5.372-11.999,11.998-11.999c5.691,0,10.434,3.974,11.665,9.29c1.252-0.81,2.733-1.291,4.334-1.291c4.418,0,8,3.582,8,8C67.943,58.057,64.361,61.639,59.943,61.639z"></path>
                          </clippath>
                          <clippath id="sunCloudFillClipfill2">
                            <path d="M15,15v70h70V15H15z M57.945,49.641c-4.417,0-8-3.582-8-7.999c0-4.418,3.582-7.999,8-7.999s7.998,3.581,7.998,7.999C65.943,46.059,62.362,49.641,57.945,49.641z"></path>
                          </clippath>
                          <clippath id="cloudSunFillClipfill5">
                            <path d="M15,15v70h20.947V63.481c-4.778-2.767-8-7.922-8-13.84c0-8.836,7.163-15.998,15.998-15.998c6.004,0,11.229,3.312,13.965,8.203c0.664-0.113,1.338-0.205,2.033-0.205c6.627,0,11.998,5.373,11.998,12c0,5.262-3.394,9.723-8.107,11.341V85H85V15H15z"></path>
                          </clippath>
                          <g class="climacon_iconWrap climacon_iconWrap-cloudSnowSun">
                            <g clip-path="url(#cloudSunFillClip)">
                              <g class="climacon_componentWrap climacon_componentWrap-sun climacon_componentWrap-sun_cloud">
                                <g class="climacon_componentWrap climacon_componentWrap_sunSpoke">
                                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M80.029,43.611h-3.998c-1.105,0-2-0.896-2-1.999s0.895-2,2-2h3.998c1.104,0,2,0.896,2,2S81.135,43.611,80.029,43.611z"></path>
                                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M72.174,30.3c-0.781,0.781-2.049,0.781-2.828,0c-0.781-0.781-0.781-2.047,0-2.828l2.828-2.828c0.779-0.781,2.047-0.781,2.828,0c0.779,0.781,0.779,2.047,0,2.828L72.174,30.3z"></path>
                                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M58.033,25.614c-1.105,0-2-0.896-2-2v-3.999c0-1.104,0.895-2,2-2c1.104,0,2,0.896,2,2v3.999C60.033,24.718,59.135,25.614,58.033,25.614z"></path>
                                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M43.892,30.3l-2.827-2.828c-0.781-0.781-0.781-2.047,0-2.828c0.78-0.781,2.047-0.781,2.827,0l2.827,2.828c0.781,0.781,0.781,2.047,0,2.828C45.939,31.081,44.673,31.081,43.892,30.3z"></path>
                                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M42.033,41.612c0,1.104-0.896,1.999-2,1.999h-4c-1.104,0-1.998-0.896-1.998-1.999s0.896-2,1.998-2h4C41.139,39.612,42.033,40.509,42.033,41.612z"></path>
                                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M43.892,52.925c0.781-0.78,2.048-0.78,2.827,0c0.781,0.78,0.781,2.047,0,2.828l-2.827,2.827c-0.78,0.781-2.047,0.781-2.827,0c-0.781-0.78-0.781-2.047,0-2.827L43.892,52.925z"></path>
                                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M58.033,57.61c1.104,0,2,0.895,2,1.999v4c0,1.104-0.896,2-2,2c-1.105,0-2-0.896-2-2v-4C56.033,58.505,56.928,57.61,58.033,57.61z"></path>
                                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M72.174,52.925l2.828,2.828c0.779,0.78,0.779,2.047,0,2.827c-0.781,0.781-2.049,0.781-2.828,0l-2.828-2.827c-0.781-0.781-0.781-2.048,0-2.828C70.125,52.144,71.391,52.144,72.174,52.925z"></path>
                                </g>
                                <g class="climacon_wrapperComponent climacon_wrapperComponent-sunBody" clip-path="url(#sunCloudFillClip)">
                                  <circle class="climacon_component climacon_component-stroke climacon_component-stroke_sunBody" cx="58.033" cy="41.612" r="11.999"></circle>
                                </g>
                              </g>
                            </g>
                            <g class="climacon_wrapperComponent climacon_wrapperComponent-snow">
                              <circle class="climacon_component climacon_component-stroke climacon_component-stroke_snow climacon_component-stroke_snow-left" cx="42.001" cy="59.641" r="2"></circle>
                              <circle class="climacon_component climacon_component-stroke climacon_component-stroke_snow climacon_component-stroke_snow-middle" cx="50.001" cy="59.641" r="2"></circle>
                              <circle class="climacon_component climacon_component-stroke climacon_component-stroke_snow climacon_component-stroke_snow-right" cx="57.999" cy="59.641" r="2"></circle>
                            </g>
                            <g class="climacon_wrapperComponent climacon_wrapperComponent-cloud">
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_cloud" d="M63.999,64.943v-4.381c2.39-1.386,3.999-3.963,3.999-6.922c0-4.417-3.581-7.999-7.999-7.999c-1.601,0-3.083,0.48-4.333,1.291c-1.23-5.317-5.974-9.291-11.665-9.291c-6.627,0-11.998,5.373-11.998,12c0,3.549,1.55,6.729,4,8.924v4.916c-4.777-2.769-8-7.922-8-13.84c0-8.836,7.163-15.999,15.998-15.999c6.004,0,11.229,3.312,13.965,8.204c0.664-0.113,1.337-0.205,2.033-0.205c6.627,0,11.999,5.373,11.999,11.999C71.998,58.863,68.654,63.293,63.999,64.943z"></path>
                            </g>
                          </g>
                        </svg>
                      </div>
                      <!-- cloudSnowSun-->
                      <div class="col-lg-2 col-3">
                        <svg class="climacon climacon_cloudSnowSunFill" id="cloudSnowSunFill" version="1.1" viewbox="15 15 70 70">
                          <g class="climacon_iconWrap climacon_iconWrap-cloudSnowSunFill">
                            <g class="climacon_componentWrap climacon_componentWrap-sun climacon_componentWrap-sun_cloud">
                              <g class="climacon_componentWrap climacon_componentWrap_sunSpoke">
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M80.029,43.611h-3.998c-1.105,0-2-0.896-2-1.999s0.895-2,2-2h3.998c1.104,0,2,0.896,2,2S81.135,43.611,80.029,43.611z"></path>
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M72.174,30.3c-0.781,0.781-2.049,0.781-2.828,0c-0.781-0.781-0.781-2.047,0-2.828l2.828-2.828c0.779-0.781,2.047-0.781,2.828,0c0.779,0.781,0.779,2.047,0,2.828L72.174,30.3z"></path>
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M58.033,25.614c-1.105,0-2-0.896-2-2v-3.999c0-1.104,0.895-2,2-2c1.104,0,2,0.896,2,2v3.999C60.033,24.718,59.135,25.614,58.033,25.614z"></path>
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M43.892,30.3l-2.827-2.828c-0.781-0.781-0.781-2.047,0-2.828c0.78-0.781,2.047-0.781,2.827,0l2.827,2.828c0.781,0.781,0.781,2.047,0,2.828C45.939,31.081,44.673,31.081,43.892,30.3z"></path>
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M42.033,41.612c0,1.104-0.896,1.999-2,1.999h-4c-1.104,0-1.998-0.896-1.998-1.999s0.896-2,1.998-2h4C41.139,39.612,42.033,40.509,42.033,41.612z"></path>
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M43.892,52.925c0.781-0.78,2.048-0.78,2.827,0c0.781,0.78,0.781,2.047,0,2.828l-2.827,2.827c-0.78,0.781-2.047,0.781-2.827,0c-0.781-0.78-0.781-2.047,0-2.827L43.892,52.925z"></path>
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M58.033,57.61c1.104,0,2,0.895,2,1.999v4c0,1.104-0.896,2-2,2c-1.105,0-2-0.896-2-2v-4C56.033,58.505,56.928,57.61,58.033,57.61z"></path>
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M72.174,52.925l2.828,2.828c0.779,0.78,0.779,2.047,0,2.827c-0.781,0.781-2.049,0.781-2.828,0l-2.828-2.827c-0.781-0.781-0.781-2.048,0-2.828C70.125,52.144,71.391,52.144,72.174,52.925z"></path>
                              </g>
                              <g class="climacon_wrapperComponent climacon_wrapperComponent-sunBody">
                                <circle class="climacon_component climacon_component-stroke climacon_component-stroke_sunBody" cx="58.033" cy="41.612" r="11.999"></circle>
                                <circle class="climacon_component climacon_component-fill climacon_component-fill_sunBody" fill="#FFFFFF" cx="58.033" cy="41.612" r="7.999"></circle>
                              </g>
                            </g>
                            <g class="climacon_wrapperComponent climacon_wrapperComponent-snow">
                              <circle class="climacon_component climacon_component-stroke climacon_component-stroke_snow climacon_component-stroke_snow-left" cx="42.001" cy="59.641" r="2"></circle>
                              <circle class="climacon_component climacon_component-stroke climacon_component-stroke_snow climacon_component-stroke_snow-middle" cx="50.001" cy="59.641" r="2"></circle>
                              <circle class="climacon_component climacon_component-stroke climacon_component-stroke_snow climacon_component-stroke_snow-right" cx="57.999" cy="59.641" r="2"></circle>
                            </g>
                            <g class="climacon_componentWrap climacon_componentWrap_cloud">
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_cloud" d="M43.945,65.639c-8.835,0-15.998-7.162-15.998-15.998c0-8.836,7.163-15.998,15.998-15.998c6.004,0,11.229,3.312,13.965,8.203c0.664-0.113,1.338-0.205,2.033-0.205c6.627,0,11.998,5.373,11.998,12c0,6.625-5.371,11.998-11.998,11.998C57.168,65.639,47.143,65.639,43.945,65.639z"></path>
                              <path class="climacon_component climacon_component-fill climacon_component-fill_cloud" fill="#FFFFFF" d="M59.943,61.639c4.418,0,8-3.582,8-7.998c0-4.417-3.582-8-8-8c-1.601,0-3.082,0.481-4.334,1.291c-1.23-5.316-5.973-9.29-11.665-9.29c-6.626,0-11.998,5.372-11.998,11.999c0,6.626,5.372,11.998,11.998,11.998C47.562,61.639,56.924,61.639,59.943,61.639z"></path>
                            </g>
                          </g>
                        </svg>
                      </div>
                      <!-- cloudSnowSunFill-->
                      <div class="col-lg-2 col-3">
                        <svg class="climacon climacon_cloudSnowMoon" id="cloudSnowMoon" version="1.1" viewbox="15 15 70 70">
                          <clippath id="moonCloudFillClipfill6">
                            <path d="M0,0v100h100V0H0z M60.943,46.641c-4.418,0-7.999-3.582-7.999-7.999c0-3.803,2.655-6.979,6.211-7.792c0.903,4.854,4.726,8.676,9.579,9.58C67.922,43.986,64.745,46.641,60.943,46.641z"></path>
                          </clippath>
                          <clippath id="cloudFillClipfill11_1">
                            <path d="M15,15v70h70V15H15z M59.943,61.639c-3.02,0-12.381,0-15.999,0c-6.626,0-11.998-5.371-11.998-11.998c0-6.627,5.372-11.999,11.998-11.999c5.691,0,10.434,3.974,11.665,9.29c1.252-0.81,2.733-1.291,4.334-1.291c4.418,0,8,3.582,8,8C67.943,58.057,64.361,61.639,59.943,61.639z"></path>
                          </clippath>
                          <g class="climacon_iconWrap climacon_iconWrap-cloudSnowMoon">
                            <g clip-path="url(#cloudFillClip)">
                              <g class="climacon_wrapperComponent climacon_wrapperComponent-moon climacon_componentWrap-moon_cloud" clip-path="url(#moonCloudFillClip)">
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunBody" d="M61.023,50.641c-6.627,0-11.999-5.372-11.999-11.998c0-6.627,5.372-11.999,11.999-11.999c0.755,0,1.491,0.078,2.207,0.212c-0.132,0.576-0.208,1.173-0.208,1.788c0,4.418,3.582,7.999,8,7.999c0.614,0,1.212-0.076,1.788-0.208c0.133,0.717,0.211,1.452,0.211,2.208C73.021,45.269,67.649,50.641,61.023,50.641z"></path>
                              </g>
                            </g>
                            <g class="climacon_wrapperComponent climacon_wrapperComponent-snow">
                              <circle class="climacon_component climacon_component-stroke climacon_component-stroke_snow climacon_component-stroke_snow-left" cx="42.001" cy="59.641" r="2"></circle>
                              <circle class="climacon_component climacon_component-stroke climacon_component-stroke_snow climacon_component-stroke_snow-middle" cx="50.001" cy="59.641" r="2"></circle>
                              <circle class="climacon_component climacon_component-stroke climacon_component-stroke_snow climacon_component-stroke_snow-right" cx="57.999" cy="59.641" r="2"></circle>
                            </g>
                            <g class="climacon_wrapperComponent climacon_wrapperComponent-cloud">
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_cloud" d="M63.999,64.943v-4.381c2.39-1.386,3.999-3.963,3.999-6.922c0-4.417-3.581-7.999-7.999-7.999c-1.601,0-3.083,0.48-4.333,1.291c-1.23-5.317-5.974-9.291-11.665-9.291c-6.627,0-11.998,5.373-11.998,12c0,3.549,1.55,6.729,4,8.924v4.916c-4.777-2.769-8-7.922-8-13.84c0-8.836,7.163-15.999,15.998-15.999c6.004,0,11.229,3.312,13.965,8.204c0.664-0.113,1.337-0.205,2.033-0.205c6.627,0,11.999,5.373,11.999,11.999C71.998,58.863,68.654,63.293,63.999,64.943z"></path>
                            </g>
                          </g>
                        </svg>
                      </div>
                      <!-- cloudSnowMoon-->
                      <div class="col-lg-2 col-3">
                        <svg class="climacon climacon_cloudSnowMoonFill" id="cloudSnowMoonFill" version="1.1" viewbox="15 15 70 70">
                          <g class="climacon_iconWrap climacon_iconWrap-cloudSnowMoonFill">
                            <g class="climacon_wrapperComponent climacon_wrapperComponent-moon climacon_componentWrap-moon_cloud">
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunBody" d="M61.023,50.641c-6.627,0-11.999-5.372-11.999-11.998c0-6.627,5.372-11.999,11.999-11.999c0.755,0,1.491,0.078,2.207,0.212c-0.132,0.576-0.208,1.173-0.208,1.788c0,4.418,3.582,7.999,8,7.999c0.614,0,1.212-0.076,1.788-0.208c0.133,0.717,0.211,1.452,0.211,2.208C73.021,45.269,67.649,50.641,61.023,50.641z"></path>
                              <path class="climacon_component climacon_component-fill climacon_component-fill_moon" fill="#FFFFFF" d="M59.235,30.851c-3.556,0.813-6.211,3.989-6.211,7.792c0,4.417,3.581,7.999,7.999,7.999c3.802,0,6.979-2.655,7.791-6.211C63.961,39.527,60.139,35.705,59.235,30.851z"></path>
                            </g>
                            <g class="climacon_wrapperComponent climacon_wrapperComponent-snow">
                              <circle class="climacon_component climacon_component-stroke climacon_component-stroke_snow climacon_component-stroke_snow-left" cx="42.001" cy="59.641" r="2"></circle>
                              <circle class="climacon_component climacon_component-stroke climacon_component-stroke_snow climacon_component-stroke_snow-middle" cx="50.001" cy="59.641" r="2"></circle>
                              <circle class="climacon_component climacon_component-stroke climacon_component-stroke_snow climacon_component-stroke_snow-right" cx="57.999" cy="59.641" r="2"></circle>
                            </g>
                            <g class="climacon_componentWrap climacon_componentWrap_cloud">
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_cloud" d="M43.945,65.639c-8.835,0-15.998-7.162-15.998-15.998c0-8.836,7.163-15.998,15.998-15.998c6.004,0,11.229,3.312,13.965,8.203c0.664-0.113,1.338-0.205,2.033-0.205c6.627,0,11.998,5.373,11.998,12c0,6.625-5.371,11.998-11.998,11.998C57.168,65.639,47.143,65.639,43.945,65.639z"></path>
                              <path class="climacon_component climacon_component-fill climacon_component-fill_cloud" fill="#FFFFFF" d="M59.943,61.639c4.418,0,8-3.582,8-7.998c0-4.417-3.582-8-8-8c-1.601,0-3.082,0.481-4.334,1.291c-1.23-5.316-5.973-9.29-11.665-9.29c-6.626,0-11.998,5.372-11.998,11.999c0,6.626,5.372,11.998,11.998,11.998C47.562,61.639,56.924,61.639,59.943,61.639z"></path>
                            </g>
                          </g>
                        </svg>
                      </div>
                      <!-- cloudSnowMoonFill-->
                      <div class="col-lg-2 col-3">
                        <svg class="climacon climacon_cloudSnowAlt" id="cloudSnowAltfill2" version="1.1" viewbox="15 15 70 70">
                          <clippath id="snowFillClip">
                            <path d="M15,15v70h70V15H15z M50,65.641c-1.104,0-2-0.896-2-2c0-1.104,0.896-2,2-2c1.104,0,2,0.896,2,2S51.104,65.641,50,65.641z"></path>
                          </clippath>
                          <g class="climacon_iconWrap climacon_iconWrap-cloudSnowAlt">
                            <g class="climacon_wrapperComponent climacon_wrapperComponent-snowAlt">
                              <g class="climacon_component climacon_component climacon_component-snowAlt" clip-path="url(#snowFillClip)">
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_snowAlt" d="M43.072,59.641c0.553-0.957,1.775-1.283,2.732-0.731L48,60.176v-2.535c0-1.104,0.896-2,2-2c1.104,0,2,0.896,2,2v2.535l2.195-1.268c0.957-0.551,2.18-0.225,2.73,0.732c0.553,0.957,0.225,2.18-0.73,2.731l-2.196,1.269l2.196,1.268c0.955,0.553,1.283,1.775,0.73,2.732c-0.552,0.954-1.773,1.282-2.73,0.729L52,67.104v2.535c0,1.105-0.896,2-2,2c-1.104,0-2-0.895-2-2v-2.535l-2.195,1.269c-0.957,0.553-2.18,0.226-2.732-0.729c-0.552-0.957-0.225-2.181,0.732-2.732L46,63.641l-2.195-1.268C42.848,61.82,42.521,60.598,43.072,59.641z"></path>
                              </g>
                            </g>
                            <g class="climacon_wrapperComponent climacon_wrapperComponent-cloud">
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_cloud" d="M61.998,65.461v-4.082c3.447-0.891,6-4.012,6-7.738c0-4.417-3.582-7.999-7.999-7.999c-1.601,0-3.084,0.48-4.334,1.291c-1.231-5.317-5.973-9.291-11.664-9.291c-6.627,0-11.999,5.373-11.999,12c0,4.438,2.417,8.305,5.999,10.379v4.444c-5.86-2.375-9.998-8.112-9.998-14.825c0-8.835,7.162-15.999,15.998-15.999c6.004,0,11.229,3.312,13.965,8.204c0.664-0.113,1.336-0.205,2.033-0.205c6.626,0,11.998,5.373,11.998,11.998C71.997,59.586,67.671,64.506,61.998,65.461z"></path>
                            </g>
                          </g>
                        </svg>
                      </div>
                      <!-- cloudSnowAlt-->
                      <div class="col-lg-2 col-3">
                        <svg class="climacon climacon_cloudSnowAltFill" id="cloudSnowAltFill" version="1.1" viewbox="15 15 70 70">
                          <g class="climacon_iconWrap climacon_iconWrap-cloudSnowAltFill">
                            <g class="climacon_wrapperComponent climacon_wrapperComponent-snowAlt">
                              <g class="climacon_component climacon_component climacon_component-snowAlt">
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_snowAlt" d="M43.072,59.641c0.553-0.957,1.775-1.283,2.732-0.731L48,60.176v-2.535c0-1.104,0.896-2,2-2c1.104,0,2,0.896,2,2v2.535l2.195-1.268c0.957-0.551,2.18-0.225,2.73,0.732c0.553,0.957,0.225,2.18-0.73,2.731l-2.196,1.269l2.196,1.268c0.955,0.553,1.283,1.775,0.73,2.732c-0.552,0.954-1.773,1.282-2.73,0.729L52,67.104v2.535c0,1.105-0.896,2-2,2c-1.104,0-2-0.895-2-2v-2.535l-2.195,1.269c-0.957,0.553-2.18,0.226-2.732-0.729c-0.552-0.957-0.225-2.181,0.732-2.732L46,63.641l-2.195-1.268C42.848,61.82,42.521,60.598,43.072,59.641z"></path>
                                <circle class="climacon_component climacon_component-fill climacon_component-fill_snowAlt" fill="#FFFFFF" cx="50" cy="63.641" r="2"></circle>
                              </g>
                            </g>
                            <g class="climacon_componentWrap climacon_componentWrap_cloud">
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_cloud" d="M43.945,65.639c-8.835,0-15.998-7.162-15.998-15.998c0-8.836,7.163-15.998,15.998-15.998c6.004,0,11.229,3.312,13.965,8.203c0.664-0.113,1.338-0.205,2.033-0.205c6.627,0,11.998,5.373,11.998,12c0,6.625-5.371,11.998-11.998,11.998C57.168,65.639,47.143,65.639,43.945,65.639z"></path>
                              <path class="climacon_component climacon_component-fill climacon_component-fill_cloud" fill="#FFFFFF" d="M59.943,61.639c4.418,0,8-3.582,8-7.998c0-4.417-3.582-8-8-8c-1.601,0-3.082,0.481-4.334,1.291c-1.23-5.316-5.973-9.29-11.665-9.29c-6.626,0-11.998,5.372-11.998,11.999c0,6.626,5.372,11.998,11.998,11.998C47.562,61.639,56.924,61.639,59.943,61.639z"></path>
                            </g>
                          </g>
                        </svg>
                      </div>
                      <!-- cloudSnowAltFill-->
                      <div class="col-lg-2 col-3">
                        <svg class="climacon climacon_cloudSnowSunAlt" id="cloudSnowSunAlt" version="1.1" viewbox="15 15 70 70">
                          <clippath id="cloudFillClipfill12">
                            <path d="M15,15v70h70V15H15z M59.943,61.639c-3.02,0-12.381,0-15.999,0c-6.626,0-11.998-5.371-11.998-11.998c0-6.627,5.372-11.999,11.998-11.999c5.691,0,10.434,3.974,11.665,9.29c1.252-0.81,2.733-1.291,4.334-1.291c4.418,0,8,3.582,8,8C67.943,58.057,64.361,61.639,59.943,61.639z"></path>
                          </clippath>
                          <clippath id="sunCloudFillClipfill3">
                            <path d="M15,15v70h70V15H15z M57.945,49.641c-4.417,0-8-3.582-8-7.999c0-4.418,3.582-7.999,8-7.999s7.998,3.581,7.998,7.999C65.943,46.059,62.362,49.641,57.945,49.641z"></path>
                          </clippath>
                          <clippath id="cloudSunFillClipfill6">
                            <path d="M15,15v70h20.947V63.481c-4.778-2.767-8-7.922-8-13.84c0-8.836,7.163-15.998,15.998-15.998c6.004,0,11.229,3.312,13.965,8.203c0.664-0.113,1.338-0.205,2.033-0.205c6.627,0,11.998,5.373,11.998,12c0,5.262-3.394,9.723-8.107,11.341V85H85V15H15z"></path>
                          </clippath>
                          <clippath id="snowFillClipfill1">
                            <path d="M15,15v70h70V15H15z M50,65.641c-1.104,0-2-0.896-2-2c0-1.104,0.896-2,2-2c1.104,0,2,0.896,2,2S51.104,65.641,50,65.641z"></path>
                          </clippath>
                          <g class="climacon_iconWrap climacon_iconWrap-cloudSnowSunAlt">
                            <g clip-path="url(#cloudSunFillClip)">
                              <g class="climacon_componentWrap climacon_componentWrap-sun climacon_componentWrap-sun_cloud">
                                <g class="climacon_componentWrap climacon_componentWrap_sunSpoke">
                                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M80.029,43.611h-3.998c-1.105,0-2-0.896-2-1.999s0.895-2,2-2h3.998c1.104,0,2,0.896,2,2S81.135,43.611,80.029,43.611z"></path>
                                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M72.174,30.3c-0.781,0.781-2.049,0.781-2.828,0c-0.781-0.781-0.781-2.047,0-2.828l2.828-2.828c0.779-0.781,2.047-0.781,2.828,0c0.779,0.781,0.779,2.047,0,2.828L72.174,30.3z"></path>
                                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M58.033,25.614c-1.105,0-2-0.896-2-2v-3.999c0-1.104,0.895-2,2-2c1.104,0,2,0.896,2,2v3.999C60.033,24.718,59.135,25.614,58.033,25.614z"></path>
                                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M43.892,30.3l-2.827-2.828c-0.781-0.781-0.781-2.047,0-2.828c0.78-0.781,2.047-0.781,2.827,0l2.827,2.828c0.781,0.781,0.781,2.047,0,2.828C45.939,31.081,44.673,31.081,43.892,30.3z"></path>
                                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M42.033,41.612c0,1.104-0.896,1.999-2,1.999h-4c-1.104,0-1.998-0.896-1.998-1.999s0.896-2,1.998-2h4C41.139,39.612,42.033,40.509,42.033,41.612z"></path>
                                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M43.892,52.925c0.781-0.78,2.048-0.78,2.827,0c0.781,0.78,0.781,2.047,0,2.828l-2.827,2.827c-0.78,0.781-2.047,0.781-2.827,0c-0.781-0.78-0.781-2.047,0-2.827L43.892,52.925z"></path>
                                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M58.033,57.61c1.104,0,2,0.895,2,1.999v4c0,1.104-0.896,2-2,2c-1.105,0-2-0.896-2-2v-4C56.033,58.505,56.928,57.61,58.033,57.61z"></path>
                                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M72.174,52.925l2.828,2.828c0.779,0.78,0.779,2.047,0,2.827c-0.781,0.781-2.049,0.781-2.828,0l-2.828-2.827c-0.781-0.781-0.781-2.048,0-2.828C70.125,52.144,71.391,52.144,72.174,52.925z"></path>
                                </g>
                                <g class="climacon_wrapperComponent climacon_wrapperComponent-sunBody" clip-path="url(#sunCloudFillClip)">
                                  <circle class="climacon_component climacon_component-stroke climacon_component-stroke_sunBody" cx="58.033" cy="41.612" r="11.999"></circle>
                                </g>
                              </g>
                            </g>
                            <g class="climacon_wrapperComponent climacon_wrapperComponent-snowAlt">
                              <g class="climacon_component climacon_component climacon_component-snowAlt" clip-path="url(#snowFillClip)">
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_snowAlt" d="M43.072,59.641c0.553-0.957,1.775-1.283,2.732-0.731L48,60.176v-2.535c0-1.104,0.896-2,2-2c1.104,0,2,0.896,2,2v2.535l2.195-1.268c0.957-0.551,2.18-0.225,2.73,0.732c0.553,0.957,0.225,2.18-0.73,2.731l-2.196,1.269l2.196,1.268c0.955,0.553,1.283,1.775,0.73,2.732c-0.552,0.954-1.773,1.282-2.73,0.729L52,67.104v2.535c0,1.105-0.896,2-2,2c-1.104,0-2-0.895-2-2v-2.535l-2.195,1.269c-0.957,0.553-2.18,0.226-2.732-0.729c-0.552-0.957-0.225-2.181,0.732-2.732L46,63.641l-2.195-1.268C42.848,61.82,42.521,60.598,43.072,59.641z"></path>
                              </g>
                            </g>
                            <g class="climacon_wrapperComponent climacon_wrapperComponent-cloud">
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_cloud" d="M61.998,65.461v-4.082c3.447-0.891,6-4.012,6-7.738c0-4.417-3.582-7.999-7.999-7.999c-1.601,0-3.084,0.48-4.334,1.291c-1.231-5.317-5.973-9.291-11.664-9.291c-6.627,0-11.999,5.373-11.999,12c0,4.438,2.417,8.305,5.999,10.379v4.444c-5.86-2.375-9.998-8.112-9.998-14.825c0-8.835,7.162-15.999,15.998-15.999c6.004,0,11.229,3.312,13.965,8.204c0.664-0.113,1.336-0.205,2.033-0.205c6.626,0,11.998,5.373,11.998,11.998C71.997,59.586,67.671,64.506,61.998,65.461z"></path>
                            </g>
                          </g>
                        </svg>
                      </div>
                      <!-- cloudSnowSunAlt-->
                      <div class="col-lg-2 col-3">
                        <svg class="climacon climacon_cloudSnowSunAltFill" id="cloudSnowSunAltFill" version="1.1" viewbox="15 15 70 70">
                          <g class="climacon_iconWrap climacon_iconWrap-cloudSnowSunAltFill">
                            <g class="climacon_componentWrap climacon_componentWrap-sun climacon_componentWrap-sun_cloud">
                              <g class="climacon_componentWrap climacon_componentWrap_sunSpoke">
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M80.029,43.611h-3.998c-1.105,0-2-0.896-2-1.999s0.895-2,2-2h3.998c1.104,0,2,0.896,2,2S81.135,43.611,80.029,43.611z"></path>
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M72.174,30.3c-0.781,0.781-2.049,0.781-2.828,0c-0.781-0.781-0.781-2.047,0-2.828l2.828-2.828c0.779-0.781,2.047-0.781,2.828,0c0.779,0.781,0.779,2.047,0,2.828L72.174,30.3z"></path>
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M58.033,25.614c-1.105,0-2-0.896-2-2v-3.999c0-1.104,0.895-2,2-2c1.104,0,2,0.896,2,2v3.999C60.033,24.718,59.135,25.614,58.033,25.614z"></path>
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M43.892,30.3l-2.827-2.828c-0.781-0.781-0.781-2.047,0-2.828c0.78-0.781,2.047-0.781,2.827,0l2.827,2.828c0.781,0.781,0.781,2.047,0,2.828C45.939,31.081,44.673,31.081,43.892,30.3z"></path>
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M42.033,41.612c0,1.104-0.896,1.999-2,1.999h-4c-1.104,0-1.998-0.896-1.998-1.999s0.896-2,1.998-2h4C41.139,39.612,42.033,40.509,42.033,41.612z"></path>
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M43.892,52.925c0.781-0.78,2.048-0.78,2.827,0c0.781,0.78,0.781,2.047,0,2.828l-2.827,2.827c-0.78,0.781-2.047,0.781-2.827,0c-0.781-0.78-0.781-2.047,0-2.827L43.892,52.925z"></path>
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M58.033,57.61c1.104,0,2,0.895,2,1.999v4c0,1.104-0.896,2-2,2c-1.105,0-2-0.896-2-2v-4C56.033,58.505,56.928,57.61,58.033,57.61z"></path>
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M72.174,52.925l2.828,2.828c0.779,0.78,0.779,2.047,0,2.827c-0.781,0.781-2.049,0.781-2.828,0l-2.828-2.827c-0.781-0.781-0.781-2.048,0-2.828C70.125,52.144,71.391,52.144,72.174,52.925z"></path>
                              </g>
                              <g class="climacon_wrapperComponent climacon_wrapperComponent-sunBody">
                                <circle class="climacon_component climacon_component-stroke climacon_component-stroke_sunBody" cx="58.033" cy="41.612" r="11.999"></circle>
                                <circle class="climacon_component climacon_component-fill climacon_component-fill_sunBody" fill="#FFFFFF" cx="58.033" cy="41.612" r="7.999"></circle>
                              </g>
                            </g>
                            <g class="climacon_wrapperComponent climacon_wrapperComponent-snowAlt">
                              <g class="climacon_component climacon_component climacon_component-snowAlt">
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_snowAlt" d="M43.072,59.641c0.553-0.957,1.775-1.283,2.732-0.731L48,60.176v-2.535c0-1.104,0.896-2,2-2c1.104,0,2,0.896,2,2v2.535l2.195-1.268c0.957-0.551,2.18-0.225,2.73,0.732c0.553,0.957,0.225,2.18-0.73,2.731l-2.196,1.269l2.196,1.268c0.955,0.553,1.283,1.775,0.73,2.732c-0.552,0.954-1.773,1.282-2.73,0.729L52,67.104v2.535c0,1.105-0.896,2-2,2c-1.104,0-2-0.895-2-2v-2.535l-2.195,1.269c-0.957,0.553-2.18,0.226-2.732-0.729c-0.552-0.957-0.225-2.181,0.732-2.732L46,63.641l-2.195-1.268C42.848,61.82,42.521,60.598,43.072,59.641z"></path>
                                <circle class="climacon_component climacon_component-fill climacon_component-fill_snowAlt" fill="#FFFFFF" cx="50" cy="63.641" r="2"></circle>
                              </g>
                            </g>
                            <g class="climacon_componentWrap climacon_componentWrap_cloud">
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_cloud" d="M43.945,65.639c-8.835,0-15.998-7.162-15.998-15.998c0-8.836,7.163-15.998,15.998-15.998c6.004,0,11.229,3.312,13.965,8.203c0.664-0.113,1.338-0.205,2.033-0.205c6.627,0,11.998,5.373,11.998,12c0,6.625-5.371,11.998-11.998,11.998C57.168,65.639,47.143,65.639,43.945,65.639z"></path>
                              <path class="climacon_component climacon_component-fill climacon_component-fill_cloud" fill="#FFFFFF" d="M59.943,61.639c4.418,0,8-3.582,8-7.998c0-4.417-3.582-8-8-8c-1.601,0-3.082,0.481-4.334,1.291c-1.23-5.316-5.973-9.29-11.665-9.29c-6.626,0-11.998,5.372-11.998,11.999c0,6.626,5.372,11.998,11.998,11.998C47.562,61.639,56.924,61.639,59.943,61.639z"></path>
                            </g>
                          </g>
                        </svg>
                      </div>
                      <!-- cloudSnowSunAltFill-->
                      <div class="col-lg-2 col-3">
                        <svg class="climacon climacon_cloudSnowAlt" id="cloudSnowAlt" version="1.1" viewbox="15 15 70 70">
                          <clippath id="moonCloudFillClipfill7">
                            <path d="M0,0v100h100V0H0z M60.943,46.641c-4.418,0-7.999-3.582-7.999-7.999c0-3.803,2.655-6.979,6.211-7.792c0.903,4.854,4.726,8.676,9.579,9.58C67.922,43.986,64.745,46.641,60.943,46.641z"></path>
                          </clippath>
                          <clippath id="cloudFillClipfill13">
                            <path d="M15,15v70h70V15H15z M59.943,61.639c-3.02,0-12.381,0-15.999,0c-6.626,0-11.998-5.371-11.998-11.998c0-6.627,5.372-11.999,11.998-11.999c5.691,0,10.434,3.974,11.665,9.29c1.252-0.81,2.733-1.291,4.334-1.291c4.418,0,8,3.582,8,8C67.943,58.057,64.361,61.639,59.943,61.639z"></path>
                          </clippath>
                          <clippath id="snowFillClipfill2">
                            <path d="M15,15v70h70V15H15z M50,65.641c-1.104,0-2-0.896-2-2c0-1.104,0.896-2,2-2c1.104,0,2,0.896,2,2S51.104,65.641,50,65.641z"></path>
                          </clippath>
                          <g class="climacon_iconWrap climacon_iconWrap-cloudSnowAlt">
                            <g clip-path="url(#cloudFillClip)">
                              <g class="climacon_wrapperComponent climacon_wrapperComponent-moon climacon_componentWrap-moon_cloud" clip-path="url(#moonCloudFillClip)">
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunBody" d="M61.023,50.641c-6.627,0-11.999-5.372-11.999-11.998c0-6.627,5.372-11.999,11.999-11.999c0.755,0,1.491,0.078,2.207,0.212c-0.132,0.576-0.208,1.173-0.208,1.788c0,4.418,3.582,7.999,8,7.999c0.614,0,1.212-0.076,1.788-0.208c0.133,0.717,0.211,1.452,0.211,2.208C73.021,45.269,67.649,50.641,61.023,50.641z"></path>
                              </g>
                            </g>
                            <g class="climacon_wrapperComponent climacon_wrapperComponent-snowAlt">
                              <g class="climacon_component climacon_component climacon_component-snowAlt" clip-path="url(#snowFillClip)">
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_snowAlt" d="M43.072,59.641c0.553-0.957,1.775-1.283,2.732-0.731L48,60.176v-2.535c0-1.104,0.896-2,2-2c1.104,0,2,0.896,2,2v2.535l2.195-1.268c0.957-0.551,2.18-0.225,2.73,0.732c0.553,0.957,0.225,2.18-0.73,2.731l-2.196,1.269l2.196,1.268c0.955,0.553,1.283,1.775,0.73,2.732c-0.552,0.954-1.773,1.282-2.73,0.729L52,67.104v2.535c0,1.105-0.896,2-2,2c-1.104,0-2-0.895-2-2v-2.535l-2.195,1.269c-0.957,0.553-2.18,0.226-2.732-0.729c-0.552-0.957-0.225-2.181,0.732-2.732L46,63.641l-2.195-1.268C42.848,61.82,42.521,60.598,43.072,59.641z"></path>
                              </g>
                            </g>
                            <g class="climacon_wrapperComponent climacon_wrapperComponent-cloud">
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_cloud" d="M61.998,65.461v-4.082c3.447-0.891,6-4.012,6-7.738c0-4.417-3.582-7.999-7.999-7.999c-1.601,0-3.084,0.48-4.334,1.291c-1.231-5.317-5.973-9.291-11.664-9.291c-6.627,0-11.999,5.373-11.999,12c0,4.438,2.417,8.305,5.999,10.379v4.444c-5.86-2.375-9.998-8.112-9.998-14.825c0-8.835,7.162-15.999,15.998-15.999c6.004,0,11.229,3.312,13.965,8.204c0.664-0.113,1.336-0.205,2.033-0.205c6.626,0,11.998,5.373,11.998,11.998C71.997,59.586,67.671,64.506,61.998,65.461z"></path>
                            </g>
                          </g>
                        </svg>
                      </div>
                      <!-- cloudSnowMoonAlt-->
                      <div class="col-lg-2 col-3">
                        <svg class="climacon climacon_cloudSnowAltFill" id="cloudSnowAltFill1" version="1.1" viewbox="15 15 70 70">
                          <g class="climacon_iconWrap climacon_iconWrap-cloudSnowAltFill">
                            <g class="climacon_wrapperComponent climacon_wrapperComponent-moon climacon_componentWrap-moon_cloud">
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunBody" d="M61.023,50.641c-6.627,0-11.999-5.372-11.999-11.998c0-6.627,5.372-11.999,11.999-11.999c0.755,0,1.491,0.078,2.207,0.212c-0.132,0.576-0.208,1.173-0.208,1.788c0,4.418,3.582,7.999,8,7.999c0.614,0,1.212-0.076,1.788-0.208c0.133,0.717,0.211,1.452,0.211,2.208C73.021,45.269,67.649,50.641,61.023,50.641z"></path>
                              <path class="climacon_component climacon_component-fill climacon_component-fill_moon" fill="#FFFFFF" d="M59.235,30.851c-3.556,0.813-6.211,3.989-6.211,7.792c0,4.417,3.581,7.999,7.999,7.999c3.802,0,6.979-2.655,7.791-6.211C63.961,39.527,60.139,35.705,59.235,30.851z"></path>
                            </g>
                            <g class="climacon_wrapperComponent climacon_wrapperComponent-snowAlt">
                              <g class="climacon_component climacon_component climacon_component-snowAlt">
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_snowAlt" d="M43.072,59.641c0.553-0.957,1.775-1.283,2.732-0.731L48,60.176v-2.535c0-1.104,0.896-2,2-2c1.104,0,2,0.896,2,2v2.535l2.195-1.268c0.957-0.551,2.18-0.225,2.73,0.732c0.553,0.957,0.225,2.18-0.73,2.731l-2.196,1.269l2.196,1.268c0.955,0.553,1.283,1.775,0.73,2.732c-0.552,0.954-1.773,1.282-2.73,0.729L52,67.104v2.535c0,1.105-0.896,2-2,2c-1.104,0-2-0.895-2-2v-2.535l-2.195,1.269c-0.957,0.553-2.18,0.226-2.732-0.729c-0.552-0.957-0.225-2.181,0.732-2.732L46,63.641l-2.195-1.268C42.848,61.82,42.521,60.598,43.072,59.641z"></path>
                                <circle class="climacon_component climacon_component-fill climacon_component-fill_snowAlt" fill="#FFFFFF" cx="50" cy="63.641" r="2"></circle>
                              </g>
                            </g>
                            <g class="climacon_componentWrap climacon_componentWrap_cloud">
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_cloud" d="M43.945,65.639c-8.835,0-15.998-7.162-15.998-15.998c0-8.836,7.163-15.998,15.998-15.998c6.004,0,11.229,3.312,13.965,8.203c0.664-0.113,1.338-0.205,2.033-0.205c6.627,0,11.998,5.373,11.998,12c0,6.625-5.371,11.998-11.998,11.998C57.168,65.639,47.143,65.639,43.945,65.639z"></path>
                              <path class="climacon_component climacon_component-fill climacon_component-fill_cloud" fill="#FFFFFF" d="M59.943,61.639c4.418,0,8-3.582,8-7.998c0-4.417-3.582-8-8-8c-1.601,0-3.082,0.481-4.334,1.291c-1.23-5.316-5.973-9.29-11.665-9.29c-6.626,0-11.998,5.372-11.998,11.999c0,6.626,5.372,11.998,11.998,11.998C47.562,61.639,56.924,61.639,59.943,61.639z"></path>
                            </g>
                          </g>
                        </svg>
                      </div>
                      <!-- cloudSnowMoonAltFill-->
                      <div class="col-lg-2 col-3">
                        <svg class="climacon climacon_cloudFog" id="cloudFog" version="1.1" viewbox="15 15 70 70">
                          <g class="climacon_iconWrap climacon_iconWrap-cloudFog">
                            <g class="climacon_wrapperComponent climacon_wrapperComponent-Fog">
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_fogLine climacon_component-stroke_fogLine-top" d="M69.998,57.641H30.003c-1.104,0-2-0.895-2-2c0-1.104,0.896-2,2-2h39.995c1.104,0,2,0.896,2,2C71.998,56.746,71.104,57.641,69.998,57.641z"></path>
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_fogLine climacon_component-stroke_fogLine-middle" d="M69.998,65.641H30.003c-1.104,0-2-0.896-2-2s0.896-2,2-2h39.995c1.104,0,2,0.896,2,2C71.998,64.744,71.104,65.641,69.998,65.641z"></path>
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_fogLine climacon_component-stroke_fogLine-bottom" d="M30.003,69.639h39.995c1.104,0,2,0.896,2,2c0,1.105-0.896,2-2,2H30.003c-1.104,0-2-0.895-2-2C28.003,70.535,28.898,69.639,30.003,69.639z"></path>
                            </g>
                            <g class="climacon_wrapperComponent climacon_wrapperComponent-cloud">
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_cloud" d="M59.999,45.643c-1.601,0-3.083,0.48-4.333,1.291c-1.232-5.317-5.974-9.291-11.665-9.291c-6.626,0-11.998,5.373-11.998,12h-4c0-8.835,7.163-15.999,15.998-15.999c6.004,0,11.229,3.312,13.965,8.204c0.664-0.113,1.337-0.205,2.033-0.205c5.222,0,9.651,3.342,11.301,8h-4.381C65.535,47.253,62.958,45.643,59.999,45.643z"></path>
                            </g>
                          </g>
                        </svg>
                      </div>
                      <!-- cloudFog-->
                      <div class="col-lg-2 col-3">
                        <svg class="climacon climacon_cloudFogFill" id="cloudFogFill" version="1.1" viewbox="15 15 70 70">
                          <g class="climacon_iconWrap climacon_iconWrap-cloudFog">
                            <g class="climacon_wrapperComponent climacon_wrapperComponent-Fog">
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_fogLine climacon_component-stroke_fogLine-top" d="M69.998,57.641H30.003c-1.104,0-2-0.895-2-2c0-1.104,0.896-2,2-2h39.995c1.104,0,2,0.896,2,2C71.998,56.746,71.104,57.641,69.998,57.641z"></path>
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_fogLine climacon_component-stroke_fogLine-middle" d="M69.998,65.641H30.003c-1.104,0-2-0.896-2-2s0.896-2,2-2h39.995c1.104,0,2,0.896,2,2C71.998,64.744,71.104,65.641,69.998,65.641z"></path>
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_fogLine climacon_component-stroke_fogLine-bottom" d="M30.003,69.639h39.995c1.104,0,2,0.896,2,2c0,1.105-0.896,2-2,2H30.003c-1.104,0-2-0.895-2-2C28.003,70.535,28.898,69.639,30.003,69.639z"></path>
                            </g>
                            <g class="climacon_wrapperComponent climacon_wrapperComponent-cloud">
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_cloud" d="M59.999,45.643c-1.601,0-3.083,0.48-4.333,1.291c-1.232-5.317-5.974-9.291-11.665-9.291c-6.626,0-11.998,5.373-11.998,12h-4c0-8.835,7.163-15.999,15.998-15.999c6.004,0,11.229,3.312,13.965,8.204c0.664-0.113,1.337-0.205,2.033-0.205c5.222,0,9.651,3.342,11.301,8h-4.381C65.535,47.253,62.958,45.643,59.999,45.643z"></path>
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_cloud" d="M71.287,49.355c-1.659-4.632-6.08-7.954-11.289-7.954c-0.695,0-1.369,0.091-2.033,0.205C55.229,36.72,50.004,33.413,44,33.413c-8.824,0-15.977,7.134-15.996,15.942H71.287z"></path>
                              <path class="climacon_component climacon_component-fill climacon_component-fill_cloud" fill="#FFFFFF" d="M66.897,49.376c-1.389-2.369-3.955-3.965-6.899-3.965c-1.602,0-3.082,0.48-4.334,1.291c-1.23-5.316-5.973-9.291-11.664-9.291c-6.615,0-11.977,5.354-11.996,11.965H66.897z"></path>
                            </g>
                          </g>
                        </svg>
                      </div>
                      <!-- cloudFogFill-->
                      <div class="col-lg-2 col-3">
                        <svg class="climacon climacon_cloudFogSun" id="cloudFogSun" version="1.1" viewbox="15 15 70 70">
                          <clippath id="cloudFillClipfill14">
                            <path d="M15,15v70h70V15H15z M59.943,61.639c-3.02,0-12.381,0-15.999,0c-6.626,0-11.998-5.371-11.998-11.998c0-6.627,5.372-11.999,11.998-11.999c5.691,0,10.434,3.974,11.665,9.29c1.252-0.81,2.733-1.291,4.334-1.291c4.418,0,8,3.582,8,8C67.943,58.057,64.361,61.639,59.943,61.639z"></path>
                          </clippath>
                          <clippath id="sunCloudFillClipfill">
                            <path d="M15,15v70h70V15H15z M57.945,49.641c-4.417,0-8-3.582-8-7.999c0-4.418,3.582-7.999,8-7.999s7.998,3.581,7.998,7.999C65.943,46.059,62.362,49.641,57.945,49.641z"></path>
                          </clippath>
                          <clippath id="cloudSunFillClipfill7">
                            <path d="M15,15v70h20.947V63.481c-4.778-2.767-8-7.922-8-13.84c0-8.836,7.163-15.998,15.998-15.998c6.004,0,11.229,3.312,13.965,8.203c0.664-0.113,1.338-0.205,2.033-0.205c6.627,0,11.998,5.373,11.998,12c0,5.262-3.394,9.723-8.107,11.341V85H85V15H15z"></path>
                          </clippath>
                          <g class="climacon_iconWrap climacon_iconWrap-cloudFogSun">
                            <g clip-path="url(#cloudSunFillClip)">
                              <g class="climacon_componentWrap climacon_componentWrap-sun climacon_componentWrap-sun_cloud">
                                <g class="climacon_componentWrap climacon_componentWrap_sunSpoke">
                                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M80.029,43.611h-3.998c-1.105,0-2-0.896-2-1.999s0.895-2,2-2h3.998c1.104,0,2,0.896,2,2S81.135,43.611,80.029,43.611z"></path>
                                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M72.174,30.3c-0.781,0.781-2.049,0.781-2.828,0c-0.781-0.781-0.781-2.047,0-2.828l2.828-2.828c0.779-0.781,2.047-0.781,2.828,0c0.779,0.781,0.779,2.047,0,2.828L72.174,30.3z"></path>
                                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M58.033,25.614c-1.105,0-2-0.896-2-2v-3.999c0-1.104,0.895-2,2-2c1.104,0,2,0.896,2,2v3.999C60.033,24.718,59.135,25.614,58.033,25.614z"></path>
                                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M43.892,30.3l-2.827-2.828c-0.781-0.781-0.781-2.047,0-2.828c0.78-0.781,2.047-0.781,2.827,0l2.827,2.828c0.781,0.781,0.781,2.047,0,2.828C45.939,31.081,44.673,31.081,43.892,30.3z"></path>
                                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M42.033,41.612c0,1.104-0.896,1.999-2,1.999h-4c-1.104,0-1.998-0.896-1.998-1.999s0.896-2,1.998-2h4C41.139,39.612,42.033,40.509,42.033,41.612z"></path>
                                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M43.892,52.925c0.781-0.78,2.048-0.78,2.827,0c0.781,0.78,0.781,2.047,0,2.828l-2.827,2.827c-0.78,0.781-2.047,0.781-2.827,0c-0.781-0.78-0.781-2.047,0-2.827L43.892,52.925z"></path>
                                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M58.033,57.61c1.104,0,2,0.895,2,1.999v4c0,1.104-0.896,2-2,2c-1.105,0-2-0.896-2-2v-4C56.033,58.505,56.928,57.61,58.033,57.61z"></path>
                                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M72.174,52.925l2.828,2.828c0.779,0.78,0.779,2.047,0,2.827c-0.781,0.781-2.049,0.781-2.828,0l-2.828-2.827c-0.781-0.781-0.781-2.048,0-2.828C70.125,52.144,71.391,52.144,72.174,52.925z"></path>
                                </g>
                                <g class="climacon_wrapperComponent climacon_wrapperComponent-sunBody" clip-path="url(#sunCloudFillClip)">
                                  <circle class="climacon_component climacon_component-stroke climacon_component-stroke_sunBody" cx="58.033" cy="41.612" r="11.999"></circle>
                                </g>
                              </g>
                            </g>
                            <g class="climacon_wrapperComponent climacon_wrapperComponent-Fog">
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_fogLine climacon_component-stroke_fogLine-top" d="M69.998,57.641H30.003c-1.104,0-2-0.895-2-2c0-1.104,0.896-2,2-2h39.995c1.104,0,2,0.896,2,2C71.998,56.746,71.104,57.641,69.998,57.641z"></path>
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_fogLine climacon_component-stroke_fogLine-middle" d="M69.998,65.641H30.003c-1.104,0-2-0.896-2-2s0.896-2,2-2h39.995c1.104,0,2,0.896,2,2C71.998,64.744,71.104,65.641,69.998,65.641z"></path>
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_fogLine climacon_component-stroke_fogLine-bottom" d="M30.003,69.639h39.995c1.104,0,2,0.896,2,2c0,1.105-0.896,2-2,2H30.003c-1.104,0-2-0.895-2-2C28.003,70.535,28.898,69.639,30.003,69.639z"></path>
                            </g>
                            <g class="climacon_wrapperComponent climacon_wrapperComponent-cloud">
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_cloud" d="M59.999,45.643c-1.601,0-3.083,0.48-4.333,1.291c-1.232-5.317-5.974-9.291-11.665-9.291c-6.626,0-11.998,5.373-11.998,12h-4c0-8.835,7.163-15.999,15.998-15.999c6.004,0,11.229,3.312,13.965,8.204c0.664-0.113,1.337-0.205,2.033-0.205c5.222,0,9.651,3.342,11.301,8h-4.381C65.535,47.253,62.958,45.643,59.999,45.643z"></path>
                            </g>
                          </g>
                        </svg>
                      </div>
                      <!-- cloudFogSun-->
                      <div class="col-lg-2 col-3">
                        <svg class="climacon climacon_cloudFogSunFill" id="cloudFogSunFill" version="1.1" viewbox="15 15 70 70">
                          <clippath id="cloudFillClipfill15">
                            <path d="M15,15v70h70V15H15z M59.943,61.639c-3.02,0-12.381,0-15.999,0c-6.626,0-11.998-5.371-11.998-11.998c0-6.627,5.372-11.999,11.998-11.999c5.691,0,10.434,3.974,11.665,9.29c1.252-0.81,2.733-1.291,4.334-1.291c4.418,0,8,3.582,8,8C67.943,58.057,64.361,61.639,59.943,61.639z"></path>
                          </clippath>
                          <clippath id="sunCloudFillClipfills1">
                            <path d="M15,15v70h70V15H15z M57.945,49.641c-4.417,0-8-3.582-8-7.999c0-4.418,3.582-7.999,8-7.999s7.998,3.581,7.998,7.999C65.943,46.059,62.362,49.641,57.945,49.641z"></path>
                          </clippath>
                          <clippath id="cloudSunFillClipfill8">
                            <path d="M15,15v70h20.947V63.481c-4.778-2.767-8-7.922-8-13.84c0-8.836,7.163-15.998,15.998-15.998c6.004,0,11.229,3.312,13.965,8.203c0.664-0.113,1.338-0.205,2.033-0.205c6.627,0,11.998,5.373,11.998,12c0,5.262-3.394,9.723-8.107,11.341V85H85V15H15z"></path>
                          </clippath>
                          <g class="climacon_iconWrap climacon_iconWrap-cloudFogSunFill">
                            <g clip-path="url(#cloudSunFillClip)">
                              <g class="climacon_componentWrap climacon_componentWrap-sun climacon_componentWrap-sun_cloud">
                                <g class="climacon_componentWrap climacon_componentWrap_sunSpoke">
                                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M80.029,43.611h-3.998c-1.105,0-2-0.896-2-1.999s0.895-2,2-2h3.998c1.104,0,2,0.896,2,2S81.135,43.611,80.029,43.611z"></path>
                                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M72.174,30.3c-0.781,0.781-2.049,0.781-2.828,0c-0.781-0.781-0.781-2.047,0-2.828l2.828-2.828c0.779-0.781,2.047-0.781,2.828,0c0.779,0.781,0.779,2.047,0,2.828L72.174,30.3z"></path>
                                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M58.033,25.614c-1.105,0-2-0.896-2-2v-3.999c0-1.104,0.895-2,2-2c1.104,0,2,0.896,2,2v3.999C60.033,24.718,59.135,25.614,58.033,25.614z"></path>
                                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M43.892,30.3l-2.827-2.828c-0.781-0.781-0.781-2.047,0-2.828c0.78-0.781,2.047-0.781,2.827,0l2.827,2.828c0.781,0.781,0.781,2.047,0,2.828C45.939,31.081,44.673,31.081,43.892,30.3z"></path>
                                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M42.033,41.612c0,1.104-0.896,1.999-2,1.999h-4c-1.104,0-1.998-0.896-1.998-1.999s0.896-2,1.998-2h4C41.139,39.612,42.033,40.509,42.033,41.612z"></path>
                                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M43.892,52.925c0.781-0.78,2.048-0.78,2.827,0c0.781,0.78,0.781,2.047,0,2.828l-2.827,2.827c-0.78,0.781-2.047,0.781-2.827,0c-0.781-0.78-0.781-2.047,0-2.827L43.892,52.925z"></path>
                                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M58.033,57.61c1.104,0,2,0.895,2,1.999v4c0,1.104-0.896,2-2,2c-1.105,0-2-0.896-2-2v-4C56.033,58.505,56.928,57.61,58.033,57.61z"></path>
                                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M72.174,52.925l2.828,2.828c0.779,0.78,0.779,2.047,0,2.827c-0.781,0.781-2.049,0.781-2.828,0l-2.828-2.827c-0.781-0.781-0.781-2.048,0-2.828C70.125,52.144,71.391,52.144,72.174,52.925z"></path>
                                </g>
                                <g class="climacon_wrapperComponent climacon_wrapperComponent-sunBody">
                                  <circle class="climacon_component climacon_component-stroke climacon_component-stroke_sunBody" cx="58.033" cy="41.612" r="11.999"></circle>
                                  <circle class="climacon_component climacon_component-fill climacon_component-fill_sunBody" fill="#FFFFFF" cx="58.033" cy="41.612" r="7.999"></circle>
                                </g>
                              </g>
                            </g>
                            <g class="climacon_wrapperComponent climacon_wrapperComponent-Fog">
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_fogLine climacon_component-stroke_fogLine-top" d="M69.998,57.641H30.003c-1.104,0-2-0.895-2-2c0-1.104,0.896-2,2-2h39.995c1.104,0,2,0.896,2,2C71.998,56.746,71.104,57.641,69.998,57.641z"></path>
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_fogLine climacon_component-stroke_fogLine-middle" d="M69.998,65.641H30.003c-1.104,0-2-0.896-2-2s0.896-2,2-2h39.995c1.104,0,2,0.896,2,2C71.998,64.744,71.104,65.641,69.998,65.641z"></path>
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_fogLine climacon_component-stroke_fogLine-bottom" d="M30.003,69.639h39.995c1.104,0,2,0.896,2,2c0,1.105-0.896,2-2,2H30.003c-1.104,0-2-0.895-2-2C28.003,70.535,28.898,69.639,30.003,69.639z"></path>
                            </g>
                            <g class="climacon_wrapperComponent climacon_wrapperComponent-cloud">
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_cloud" d="M59.999,45.643c-1.601,0-3.083,0.48-4.333,1.291c-1.232-5.317-5.974-9.291-11.665-9.291c-6.626,0-11.998,5.373-11.998,12h-4c0-8.835,7.163-15.999,15.998-15.999c6.004,0,11.229,3.312,13.965,8.204c0.664-0.113,1.337-0.205,2.033-0.205c5.222,0,9.651,3.342,11.301,8h-4.381C65.535,47.253,62.958,45.643,59.999,45.643z"></path>
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_cloud" d="M71.287,49.355c-1.659-4.632-6.08-7.954-11.289-7.954c-0.695,0-1.369,0.091-2.033,0.205C55.229,36.72,50.004,33.413,44,33.413c-8.824,0-15.977,7.134-15.996,15.942H71.287z"></path>
                              <path class="climacon_component climacon_component-fill climacon_component-fill_cloud" fill="#FFFFFF" d="M66.897,49.376c-1.389-2.369-3.955-3.965-6.899-3.965c-1.602,0-3.082,0.48-4.334,1.291c-1.23-5.316-5.973-9.291-11.664-9.291c-6.615,0-11.977,5.354-11.996,11.965H66.897z"></path>
                            </g>
                          </g>
                        </svg>
                      </div>
                      <!-- cloudFogSunFill-->
                      <div class="col-lg-2 col-3">
                        <svg class="climacon climacon_cloudFogMoon" id="cloudFogMoon" version="1.1" viewbox="15 15 70 70">
                          <clippath id="moonCloudFillClipfill8">
                            <path d="M0,0v100h100V0H0z M60.943,46.641c-4.418,0-7.999-3.582-7.999-7.999c0-3.803,2.655-6.979,6.211-7.792c0.903,4.854,4.726,8.676,9.579,9.58C67.922,43.986,64.745,46.641,60.943,46.641z"></path>
                          </clippath>
                          <clippath id="cloudFillClipfill16">
                            <path d="M15,15v70h70V15H15z M59.943,61.639c-3.02,0-12.381,0-15.999,0c-6.626,0-11.998-5.371-11.998-11.998c0-6.627,5.372-11.999,11.998-11.999c5.691,0,10.434,3.974,11.665,9.29c1.252-0.81,2.733-1.291,4.334-1.291c4.418,0,8,3.582,8,8C67.943,58.057,64.361,61.639,59.943,61.639z"></path>
                          </clippath>
                          <g class="climacon_iconWrap climacon_iconWrap-cloudFogMoon">
                            <g clip-path="url(#cloudFillClip)">
                              <g class="climacon_wrapperComponent climacon_wrapperComponent-moon climacon_componentWrap-moon_cloud" clip-path="url(#moonCloudFillClip)">
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunBody" d="M61.023,50.641c-6.627,0-11.999-5.372-11.999-11.998c0-6.627,5.372-11.999,11.999-11.999c0.755,0,1.491,0.078,2.207,0.212c-0.132,0.576-0.208,1.173-0.208,1.788c0,4.418,3.582,7.999,8,7.999c0.614,0,1.212-0.076,1.788-0.208c0.133,0.717,0.211,1.452,0.211,2.208C73.021,45.269,67.649,50.641,61.023,50.641z"></path>
                              </g>
                            </g>
                            <g class="climacon_wrapperComponent climacon_wrapperComponent-Fog">
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_fogLine climacon_component-stroke_fogLine-top" d="M69.998,57.641H30.003c-1.104,0-2-0.895-2-2c0-1.104,0.896-2,2-2h39.995c1.104,0,2,0.896,2,2C71.998,56.746,71.104,57.641,69.998,57.641z"></path>
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_fogLine climacon_component-stroke_fogLine-middle" d="M69.998,65.641H30.003c-1.104,0-2-0.896-2-2s0.896-2,2-2h39.995c1.104,0,2,0.896,2,2C71.998,64.744,71.104,65.641,69.998,65.641z"></path>
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_fogLine climacon_component-stroke_fogLine-bottom" d="M30.003,69.639h39.995c1.104,0,2,0.896,2,2c0,1.105-0.896,2-2,2H30.003c-1.104,0-2-0.895-2-2C28.003,70.535,28.898,69.639,30.003,69.639z"></path>
                            </g>
                            <g class="climacon_wrapperComponent climacon_wrapperComponent-cloud">
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_cloud" d="M59.999,45.643c-1.601,0-3.083,0.48-4.333,1.291c-1.232-5.317-5.974-9.291-11.665-9.291c-6.626,0-11.998,5.373-11.998,12h-4c0-8.835,7.163-15.999,15.998-15.999c6.004,0,11.229,3.312,13.965,8.204c0.664-0.113,1.337-0.205,2.033-0.205c5.222,0,9.651,3.342,11.301,8h-4.381C65.535,47.253,62.958,45.643,59.999,45.643z"></path>
                            </g>
                          </g>
                        </svg>
                      </div>
                      <!-- cloudFogMoon-->
                      <div class="col-lg-2 col-3">
                        <svg class="climacon climacon_cloudFogMoonFill" id="cloudFogMoonFill" version="1.1" xmlns="http://www.w3.org/2000/svg" viewbox="15 15 70 70">
                          <clippath id="moonCloudFillClipfill9">
                            <path d="M0,0v100h100V0H0z M60.943,46.641c-4.418,0-7.999-3.582-7.999-7.999c0-3.803,2.655-6.979,6.211-7.792c0.903,4.854,4.726,8.676,9.579,9.58C67.922,43.986,64.745,46.641,60.943,46.641z"></path>
                          </clippath>
                          <g class="climacon_iconWrap climacon_iconWrap-cloudFogMoonFill">
                            <g clip-path="url(#cloudFillClip)">
                              <g class="climacon_wrapperComponent climacon_wrapperComponent-moon climacon_componentWrap-moon_cloud">
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunBody" d="M61.023,50.641c-6.627,0-11.999-5.372-11.999-11.998c0-6.627,5.372-11.999,11.999-11.999c0.755,0,1.491,0.078,2.207,0.212c-0.132,0.576-0.208,1.173-0.208,1.788c0,4.418,3.582,7.999,8,7.999c0.614,0,1.212-0.076,1.788-0.208c0.133,0.717,0.211,1.452,0.211,2.208C73.021,45.269,67.649,50.641,61.023,50.641z"></path>
                                <path class="climacon_component climacon_component-fill climacon_component-fill_moon" fill="#FFFFFF" d="M59.235,30.851c-3.556,0.813-6.211,3.989-6.211,7.792c0,4.417,3.581,7.999,7.999,7.999c3.802,0,6.979-2.655,7.791-6.211C63.961,39.527,60.139,35.705,59.235,30.851z"></path>
                              </g>
                            </g>
                            <g class="climacon_wrapperComponent climacon_wrapperComponent-Fog">
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_fogLine climacon_component-stroke_fogLine-top" d="M69.998,57.641H30.003c-1.104,0-2-0.895-2-2c0-1.104,0.896-2,2-2h39.995c1.104,0,2,0.896,2,2C71.998,56.746,71.104,57.641,69.998,57.641z"></path>
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_fogLine climacon_component-stroke_fogLine-middle" d="M69.998,65.641H30.003c-1.104,0-2-0.896-2-2s0.896-2,2-2h39.995c1.104,0,2,0.896,2,2C71.998,64.744,71.104,65.641,69.998,65.641z"></path>
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_fogLine climacon_component-stroke_fogLine-bottom" d="M30.003,69.639h39.995c1.104,0,2,0.896,2,2c0,1.105-0.896,2-2,2H30.003c-1.104,0-2-0.895-2-2C28.003,70.535,28.898,69.639,30.003,69.639z"></path>
                            </g>
                            <g class="climacon_wrapperComponent climacon_wrapperComponent-cloud">
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_cloud" d="M59.999,45.643c-1.601,0-3.083,0.48-4.333,1.291c-1.232-5.317-5.974-9.291-11.665-9.291c-6.626,0-11.998,5.373-11.998,12h-4c0-8.835,7.163-15.999,15.998-15.999c6.004,0,11.229,3.312,13.965,8.204c0.664-0.113,1.337-0.205,2.033-0.205c5.222,0,9.651,3.342,11.301,8h-4.381C65.535,47.253,62.958,45.643,59.999,45.643z"></path>
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_cloud" d="M71.287,49.355c-1.659-4.632-6.08-7.954-11.289-7.954c-0.695,0-1.369,0.091-2.033,0.205C55.229,36.72,50.004,33.413,44,33.413c-8.824,0-15.977,7.134-15.996,15.942H71.287z"></path>
                              <path class="climacon_component climacon_component-fill climacon_component-fill_cloud" fill="#FFFFFF" d="M66.897,49.376c-1.389-2.369-3.955-3.965-6.899-3.965c-1.602,0-3.082,0.48-4.334,1.291c-1.23-5.316-5.973-9.291-11.664-9.291c-6.615,0-11.977,5.354-11.996,11.965H66.897z"></path>
                            </g>
                          </g>
                        </svg>
                      </div>
                      <!-- cloudFogMoonFill-->
                      <div class="col-lg-2 col-3">
                        <svg class="climacon climacon_cloudFogAlt" id="cloudFogAlt" version="1.1" viewbox="15 15 70 70">
                          <g class="climacon_iconWrap climacon_iconWrap-cloudFogAlt">
                            <g class="climacon_wrapperComponent climacon_wrapperComponent-Fog">
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_fogLine" d="M29.177,55.641c-0.262-0.646-0.473-1.314-0.648-2h43.47c0,0.685-0.069,1.349-0.181,2H29.177z"></path>
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_fogLine" d="M36.263,35.643c2.294-1.271,4.93-1.999,7.738-1.999c2.806,0,5.436,0.73,7.728,1.999H36.263z"></path>
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_fogLine" d="M28.142,47.642c0.085-0.682,0.218-1.347,0.387-1.999h40.396c0.552,0.613,1.039,1.281,1.455,1.999H28.142z"></path>
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_fogLine" d="M29.177,43.643c0.281-0.693,0.613-1.359,0.984-2h27.682c0.04,0.068,0.084,0.135,0.123,0.205c0.664-0.114,1.339-0.205,2.033-0.205c2.451,0,4.729,0.738,6.627,2H29.177z"></path>
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_fogLine" d="M31.524,39.643c0.58-0.723,1.225-1.388,1.92-2h21.123c0.689,0.61,1.326,1.28,1.902,2H31.524z"></path>
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_fogLine" d="M71.816,51.641H28.142c-0.082-0.656-0.139-1.32-0.139-1.999h43.298C71.527,50.285,71.702,50.953,71.816,51.641z"></path>
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_fogLine" d="M71.301,57.641c-0.246,0.699-0.555,1.367-0.921,2H31.524c-0.505-0.629-0.957-1.299-1.363-2H71.301z"></path>
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_fogLine" d="M33.444,61.641h35.48c-0.68,0.758-1.447,1.435-2.299,2H36.263C35.247,63.078,34.309,62.4,33.444,61.641z"></path>
                            </g>
                          </g>
                        </svg>
                      </div>
                      <!-- cloudFogAlt-->
                      <div class="col-lg-2 col-3">
                        <svg class="climacon climacon_cloudFogAltFill" id="cloudFogAltFill" version="1.1" viewbox="15 15 70 70">
                          <g class="climacon_iconWrap climacon_iconWrap-cloudFogAltFill">
                            <g class="climacon_wrapperComponent climacon_wrapperComponent-Fog">
                              <g class="climacon_componentWrap climacon_componentWrap_cloud">
                                <path class="climacon_component climacon_component-fill climacon_component-fill_cloud" fill="#FFFFFF" d="M43.945,65.639c-8.835,0-15.998-7.162-15.998-15.998c0-8.836,7.163-15.998,15.998-15.998c6.004,0,11.229,3.312,13.965,8.203c0.664-0.113,1.338-0.205,2.033-0.205c6.627,0,11.998,5.373,11.998,12c0,6.625-5.371,11.998-11.998,11.998C57.168,65.639,47.143,65.639,43.945,65.639z"></path>
                              </g>
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_fogLine" d="M29.177,55.641c-0.262-0.646-0.473-1.314-0.648-2h43.47c0,0.685-0.069,1.349-0.181,2H29.177z"></path>
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_fogLine" d="M36.263,35.643c2.294-1.271,4.93-1.999,7.738-1.999c2.806,0,5.436,0.73,7.728,1.999H36.263z"></path>
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_fogLine" d="M28.142,47.642c0.085-0.682,0.218-1.347,0.387-1.999h40.396c0.552,0.613,1.039,1.281,1.455,1.999H28.142z"></path>
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_fogLine" d="M29.177,43.643c0.281-0.693,0.613-1.359,0.984-2h27.682c0.04,0.068,0.084,0.135,0.123,0.205c0.664-0.114,1.339-0.205,2.033-0.205c2.451,0,4.729,0.738,6.627,2H29.177z"></path>
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_fogLine" d="M31.524,39.643c0.58-0.723,1.225-1.388,1.92-2h21.123c0.689,0.61,1.326,1.28,1.902,2H31.524z"></path>
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_fogLine" d="M71.816,51.641H28.142c-0.082-0.656-0.139-1.32-0.139-1.999h43.298C71.527,50.285,71.702,50.953,71.816,51.641z"></path>
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_fogLine" d="M71.301,57.641c-0.246,0.699-0.555,1.367-0.921,2H31.524c-0.505-0.629-0.957-1.299-1.363-2H71.301z"></path>
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_fogLine" d="M33.444,61.641h35.48c-0.68,0.758-1.447,1.435-2.299,2H36.263C35.247,63.078,34.309,62.4,33.444,61.641z"></path>
                            </g>
                          </g>
                        </svg>
                      </div>
                      <!-- cloudFogAltFill-->
                      <div class="col-lg-2 col-3">
                        <svg class="climacon climacon_cloudFogSunAlt" id="cloudFogSunAlt" version="1.1" viewbox="15 15 70 70">
                          <clippath id="cloudFillClipfill17">
                            <path d="M15,15v70h70V15H15z M59.943,61.639c-3.02,0-12.381,0-15.999,0c-6.626,0-11.998-5.371-11.998-11.998c0-6.627,5.372-11.999,11.998-11.999c5.691,0,10.434,3.974,11.665,9.29c1.252-0.81,2.733-1.291,4.334-1.291c4.418,0,8,3.582,8,8C67.943,58.057,64.361,61.639,59.943,61.639z"></path>
                          </clippath>
                          <clippath id="sunCloudFillClipfills2">
                            <path d="M15,15v70h70V15H15z M57.945,49.641c-4.417,0-8-3.582-8-7.999c0-4.418,3.582-7.999,8-7.999s7.998,3.581,7.998,7.999C65.943,46.059,62.362,49.641,57.945,49.641z"></path>
                          </clippath>
                          <clippath id="cloudSunFillClipfill9">
                            <path d="M15,15v70h20.947V63.481c-4.778-2.767-8-7.922-8-13.84c0-8.836,7.163-15.998,15.998-15.998c6.004,0,11.229,3.312,13.965,8.203c0.664-0.113,1.338-0.205,2.033-0.205c6.627,0,11.998,5.373,11.998,12c0,5.262-3.394,9.723-8.107,11.341V85H85V15H15z"></path>
                          </clippath>
                          <g class="climacon_iconWrap climacon_iconWrap-cloudFogSunAlt">
                            <g clip-path="url(#cloudSunFillClip)">
                              <g class="climacon_componentWrap climacon_componentWrap-sun climacon_componentWrap-sun_cloud">
                                <g class="climacon_componentWrap climacon_componentWrap_sunSpoke">
                                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M80.029,43.611h-3.998c-1.105,0-2-0.896-2-1.999s0.895-2,2-2h3.998c1.104,0,2,0.896,2,2S81.135,43.611,80.029,43.611z"></path>
                                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M72.174,30.3c-0.781,0.781-2.049,0.781-2.828,0c-0.781-0.781-0.781-2.047,0-2.828l2.828-2.828c0.779-0.781,2.047-0.781,2.828,0c0.779,0.781,0.779,2.047,0,2.828L72.174,30.3z"></path>
                                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M58.033,25.614c-1.105,0-2-0.896-2-2v-3.999c0-1.104,0.895-2,2-2c1.104,0,2,0.896,2,2v3.999C60.033,24.718,59.135,25.614,58.033,25.614z"></path>
                                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M43.892,30.3l-2.827-2.828c-0.781-0.781-0.781-2.047,0-2.828c0.78-0.781,2.047-0.781,2.827,0l2.827,2.828c0.781,0.781,0.781,2.047,0,2.828C45.939,31.081,44.673,31.081,43.892,30.3z"></path>
                                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M42.033,41.612c0,1.104-0.896,1.999-2,1.999h-4c-1.104,0-1.998-0.896-1.998-1.999s0.896-2,1.998-2h4C41.139,39.612,42.033,40.509,42.033,41.612z"></path>
                                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M43.892,52.925c0.781-0.78,2.048-0.78,2.827,0c0.781,0.78,0.781,2.047,0,2.828l-2.827,2.827c-0.78,0.781-2.047,0.781-2.827,0c-0.781-0.78-0.781-2.047,0-2.827L43.892,52.925z"></path>
                                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M58.033,57.61c1.104,0,2,0.895,2,1.999v4c0,1.104-0.896,2-2,2c-1.105,0-2-0.896-2-2v-4C56.033,58.505,56.928,57.61,58.033,57.61z"></path>
                                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M72.174,52.925l2.828,2.828c0.779,0.78,0.779,2.047,0,2.827c-0.781,0.781-2.049,0.781-2.828,0l-2.828-2.827c-0.781-0.781-0.781-2.048,0-2.828C70.125,52.144,71.391,52.144,72.174,52.925z"></path>
                                </g>
                                <g class="climacon_wrapperComponent climacon_wrapperComponent-sunBody" clip-path="url(#sunCloudFillClip)">
                                  <circle class="climacon_component climacon_component-stroke climacon_component-stroke_sunBody" cx="58.033" cy="41.612" r="11.999"></circle>
                                </g>
                              </g>
                            </g>
                            <g class="climacon_wrapperComponent climacon_wrapperComponent-Fog">
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_fogLine" d="M29.177,55.641c-0.262-0.646-0.473-1.314-0.648-2h43.47c0,0.685-0.069,1.349-0.181,2H29.177z"></path>
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_fogLine" d="M36.263,35.643c2.294-1.271,4.93-1.999,7.738-1.999c2.806,0,5.436,0.73,7.728,1.999H36.263z"></path>
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_fogLine" d="M28.142,47.642c0.085-0.682,0.218-1.347,0.387-1.999h40.396c0.552,0.613,1.039,1.281,1.455,1.999H28.142z"></path>
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_fogLine" d="M29.177,43.643c0.281-0.693,0.613-1.359,0.984-2h27.682c0.04,0.068,0.084,0.135,0.123,0.205c0.664-0.114,1.339-0.205,2.033-0.205c2.451,0,4.729,0.738,6.627,2H29.177z"></path>
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_fogLine" d="M31.524,39.643c0.58-0.723,1.225-1.388,1.92-2h21.123c0.689,0.61,1.326,1.28,1.902,2H31.524z"></path>
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_fogLine" d="M71.816,51.641H28.142c-0.082-0.656-0.139-1.32-0.139-1.999h43.298C71.527,50.285,71.702,50.953,71.816,51.641z"></path>
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_fogLine" d="M71.301,57.641c-0.246,0.699-0.555,1.367-0.921,2H31.524c-0.505-0.629-0.957-1.299-1.363-2H71.301z"></path>
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_fogLine" d="M33.444,61.641h35.48c-0.68,0.758-1.447,1.435-2.299,2H36.263C35.247,63.078,34.309,62.4,33.444,61.641z"></path>
                            </g>
                          </g>
                        </svg>
                      </div>
                      <!-- cloudFogSunAlt-->
                      <div class="col-lg-2 col-3">
                        <svg class="climacon climacon_cloudFogSunAltFill" id="cloudFogSunAltFill" version="1.1" viewbox="15 15 70 70">
                          <clippath id="cloudSunFillClipfill10">
                            <path d="M15,15v70h20.947V63.481c-4.778-2.767-8-7.922-8-13.84c0-8.836,7.163-15.998,15.998-15.998c6.004,0,11.229,3.312,13.965,8.203c0.664-0.113,1.338-0.205,2.033-0.205c6.627,0,11.998,5.373,11.998,12c0,5.262-3.394,9.723-8.107,11.341V85H85V15H15z"></path>
                          </clippath>
                          <g class="climacon_iconWrap climacon_iconWrap-cloudFogSunAlt">
                            <g class="climacon_componentWrap climacon_componentWrap_cloud">
                              <path class="climacon_component climacon_component-fill climacon_component-fill_cloud" fill="#FFFFFF" d="M43.945,65.639c-8.835,0-15.998-7.162-15.998-15.998c0-8.836,7.163-15.998,15.998-15.998c6.004,0,11.229,3.312,13.965,8.203c0.664-0.113,1.338-0.205,2.033-0.205c6.627,0,11.998,5.373,11.998,12c0,6.625-5.371,11.998-11.998,11.998C57.168,65.639,47.143,65.639,43.945,65.639z"></path>
                            </g>
                            <g clip-path="url(#cloudSunFillClip)">
                              <g class="climacon_componentWrap climacon_componentWrap-sun climacon_componentWrap-sun_cloud">
                                <g class="climacon_componentWrap climacon_componentWrap_sunSpoke">
                                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M80.029,43.611h-3.998c-1.105,0-2-0.896-2-1.999s0.895-2,2-2h3.998c1.104,0,2,0.896,2,2S81.135,43.611,80.029,43.611z"></path>
                                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M72.174,30.3c-0.781,0.781-2.049,0.781-2.828,0c-0.781-0.781-0.781-2.047,0-2.828l2.828-2.828c0.779-0.781,2.047-0.781,2.828,0c0.779,0.781,0.779,2.047,0,2.828L72.174,30.3z"></path>
                                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M58.033,25.614c-1.105,0-2-0.896-2-2v-3.999c0-1.104,0.895-2,2-2c1.104,0,2,0.896,2,2v3.999C60.033,24.718,59.135,25.614,58.033,25.614z"></path>
                                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M43.892,30.3l-2.827-2.828c-0.781-0.781-0.781-2.047,0-2.828c0.78-0.781,2.047-0.781,2.827,0l2.827,2.828c0.781,0.781,0.781,2.047,0,2.828C45.939,31.081,44.673,31.081,43.892,30.3z"></path>
                                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M42.033,41.612c0,1.104-0.896,1.999-2,1.999h-4c-1.104,0-1.998-0.896-1.998-1.999s0.896-2,1.998-2h4C41.139,39.612,42.033,40.509,42.033,41.612z"></path>
                                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M43.892,52.925c0.781-0.78,2.048-0.78,2.827,0c0.781,0.78,0.781,2.047,0,2.828l-2.827,2.827c-0.78,0.781-2.047,0.781-2.827,0c-0.781-0.78-0.781-2.047,0-2.827L43.892,52.925z"></path>
                                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M58.033,57.61c1.104,0,2,0.895,2,1.999v4c0,1.104-0.896,2-2,2c-1.105,0-2-0.896-2-2v-4C56.033,58.505,56.928,57.61,58.033,57.61z"></path>
                                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M72.174,52.925l2.828,2.828c0.779,0.78,0.779,2.047,0,2.827c-0.781,0.781-2.049,0.781-2.828,0l-2.828-2.827c-0.781-0.781-0.781-2.048,0-2.828C70.125,52.144,71.391,52.144,72.174,52.925z"></path>
                                </g>
                                <g class="climacon_wrapperComponent climacon_wrapperComponent-sunBody">
                                  <circle class="climacon_component climacon_component-stroke climacon_component-stroke_sunBody" cx="58.033" cy="41.612" r="11.999"></circle>
                                  <circle class="climacon_component climacon_component-fill climacon_component-fill_sunBody" fill="#FFFFFF" cx="58.033" cy="41.612" r="7.999"></circle>
                                </g>
                              </g>
                            </g>
                            <g class="climacon_wrapperComponent climacon_wrapperComponent-Fog">
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_fogLine" d="M29.177,55.641c-0.262-0.646-0.473-1.314-0.648-2h43.47c0,0.685-0.069,1.349-0.181,2H29.177z"></path>
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_fogLine" d="M36.263,35.643c2.294-1.271,4.93-1.999,7.738-1.999c2.806,0,5.436,0.73,7.728,1.999H36.263z"></path>
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_fogLine" d="M28.142,47.642c0.085-0.682,0.218-1.347,0.387-1.999h40.396c0.552,0.613,1.039,1.281,1.455,1.999H28.142z"></path>
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_fogLine" d="M29.177,43.643c0.281-0.693,0.613-1.359,0.984-2h27.682c0.04,0.068,0.084,0.135,0.123,0.205c0.664-0.114,1.339-0.205,2.033-0.205c2.451,0,4.729,0.738,6.627,2H29.177z"></path>
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_fogLine" d="M31.524,39.643c0.58-0.723,1.225-1.388,1.92-2h21.123c0.689,0.61,1.326,1.28,1.902,2H31.524z"></path>
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_fogLine" d="M71.816,51.641H28.142c-0.082-0.656-0.139-1.32-0.139-1.999h43.298C71.527,50.285,71.702,50.953,71.816,51.641z"></path>
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_fogLine" d="M71.301,57.641c-0.246,0.699-0.555,1.367-0.921,2H31.524c-0.505-0.629-0.957-1.299-1.363-2H71.301z"></path>
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_fogLine" d="M33.444,61.641h35.48c-0.68,0.758-1.447,1.435-2.299,2H36.263C35.247,63.078,34.309,62.4,33.444,61.641z"></path>
                            </g>
                          </g>
                        </svg>
                      </div>
                      <!-- cloudFogSunAltFill-->
                      <div class="col-lg-2 col-3">
                        <svg class="climacon climacon_cloudFogMoonAlt" id="cloudFogMoonAlt" version="1.1" viewbox="15 15 70 70">
                          <clippath id="moonCloudFillClipfill10">
                            <path d="M0,0v100h100V0H0z M60.943,46.641c-4.418,0-7.999-3.582-7.999-7.999c0-3.803,2.655-6.979,6.211-7.792c0.903,4.854,4.726,8.676,9.579,9.58C67.922,43.986,64.745,46.641,60.943,46.641z"></path>
                          </clippath>
                          <clippath id="newMoonCloudFillClip">
                            <path d="M15,15v70h70V15H15z M59.943,65.638c-2.775,0-12.801,0-15.998,0c-8.836,0-15.998-7.162-15.998-15.998c0-8.835,7.162-15.998,15.998-15.998c6.004,0,11.229,3.312,13.965,8.203c0.664-0.113,1.338-0.205,2.033-0.205c6.627,0,11.998,5.373,11.998,12C71.941,60.265,66.57,65.638,59.943,65.638z"></path>
                          </clippath>
                          <g class="climacon_iconWrap climacon_iconWrap-cloudFogMoon">
                            <g clip-path="url(#newMoonCloudFillClip)">
                              <g class="climacon_wrapperComponent climacon_wrapperComponent-moon climacon_componentWrap-moon_cloud" clip-path="url(#moonCloudFillClip)">
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunBody" d="M61.023,50.641c-6.627,0-11.999-5.372-11.999-11.998c0-6.627,5.372-11.999,11.999-11.999c0.755,0,1.491,0.078,2.207,0.212c-0.132,0.576-0.208,1.173-0.208,1.788c0,4.418,3.582,7.999,8,7.999c0.614,0,1.212-0.076,1.788-0.208c0.133,0.717,0.211,1.452,0.211,2.208C73.021,45.269,67.649,50.641,61.023,50.641z"></path>
                              </g>
                            </g>
                            <g class="climacon_wrapperComponent climacon_wrapperComponent-Fog">
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_fogLine" d="M29.177,55.641c-0.262-0.646-0.473-1.314-0.648-2h43.47c0,0.685-0.069,1.349-0.181,2H29.177z"></path>
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_fogLine" d="M36.263,35.643c2.294-1.271,4.93-1.999,7.738-1.999c2.806,0,5.436,0.73,7.728,1.999H36.263z"></path>
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_fogLine" d="M28.142,47.642c0.085-0.682,0.218-1.347,0.387-1.999h40.396c0.552,0.613,1.039,1.281,1.455,1.999H28.142z"></path>
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_fogLine" d="M29.177,43.643c0.281-0.693,0.613-1.359,0.984-2h27.682c0.04,0.068,0.084,0.135,0.123,0.205c0.664-0.114,1.339-0.205,2.033-0.205c2.451,0,4.729,0.738,6.627,2H29.177z"></path>
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_fogLine" d="M31.524,39.643c0.58-0.723,1.225-1.388,1.92-2h21.123c0.689,0.61,1.326,1.28,1.902,2H31.524z"></path>
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_fogLine" d="M71.816,51.641H28.142c-0.082-0.656-0.139-1.32-0.139-1.999h43.298C71.527,50.285,71.702,50.953,71.816,51.641z"></path>
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_fogLine" d="M71.301,57.641c-0.246,0.699-0.555,1.367-0.921,2H31.524c-0.505-0.629-0.957-1.299-1.363-2H71.301z"></path>
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_fogLine" d="M33.444,61.641h35.48c-0.68,0.758-1.447,1.435-2.299,2H36.263C35.247,63.078,34.309,62.4,33.444,61.641z"></path>
                            </g>
                          </g>
                        </svg>
                      </div>
                      <!-- cloudFogMoonAlt-->
                      <div class="col-lg-2 col-3">
                        <svg class="climacon climacon_cloudFogMoonAltFill" id="cloudFogMoonAltFill" version="1.1" viewbox="15 15 70 70">
                          <clippath id="newMoonCloudFillClipfill1">
                            <path d="M15,15v70h70V15H15z M59.943,65.638c-2.775,0-12.801,0-15.998,0c-8.836,0-15.998-7.162-15.998-15.998c0-8.835,7.162-15.998,15.998-15.998c6.004,0,11.229,3.312,13.965,8.203c0.664-0.113,1.338-0.205,2.033-0.205c6.627,0,11.998,5.373,11.998,12C71.941,60.265,66.57,65.638,59.943,65.638z"></path>
                          </clippath>
                          <g class="climacon_iconWrap climacon_iconWrap-cloudFogMoonAltFill">
                            <g class="climacon_componentWrap climacon_componentWrap_cloud">
                              <path class="climacon_component climacon_component-fill climacon_component-fill_cloud" fill="#FFFFFF" d="M43.945,65.639c-8.835,0-15.998-7.162-15.998-15.998c0-8.836,7.163-15.998,15.998-15.998c6.004,0,11.229,3.312,13.965,8.203c0.664-0.113,1.338-0.205,2.033-0.205c6.627,0,11.998,5.373,11.998,12c0,6.625-5.371,11.998-11.998,11.998C57.168,65.639,47.143,65.639,43.945,65.639z"></path>
                            </g>
                            <g class="climacon_wrapperComponent climacon_wrapperComponent-Fog">
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_fogLine" d="M29.177,55.641c-0.262-0.646-0.473-1.314-0.648-2h43.47c0,0.685-0.069,1.349-0.181,2H29.177z"></path>
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_fogLine" d="M36.263,35.643c2.294-1.271,4.93-1.999,7.738-1.999c2.806,0,5.436,0.73,7.728,1.999H36.263z"></path>
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_fogLine" d="M28.142,47.642c0.085-0.682,0.218-1.347,0.387-1.999h40.396c0.552,0.613,1.039,1.281,1.455,1.999H28.142z"></path>
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_fogLine" d="M29.177,43.643c0.281-0.693,0.613-1.359,0.984-2h27.682c0.04,0.068,0.084,0.135,0.123,0.205c0.664-0.114,1.339-0.205,2.033-0.205c2.451,0,4.729,0.738,6.627,2H29.177z"></path>
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_fogLine" d="M31.524,39.643c0.58-0.723,1.225-1.388,1.92-2h21.123c0.689,0.61,1.326,1.28,1.902,2H31.524z"></path>
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_fogLine" d="M71.816,51.641H28.142c-0.082-0.656-0.139-1.32-0.139-1.999h43.298C71.527,50.285,71.702,50.953,71.816,51.641z"></path>
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_fogLine" d="M71.301,57.641c-0.246,0.699-0.555,1.367-0.921,2H31.524c-0.505-0.629-0.957-1.299-1.363-2H71.301z"></path>
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_fogLine" d="M33.444,61.641h35.48c-0.68,0.758-1.447,1.435-2.299,2H36.263C35.247,63.078,34.309,62.4,33.444,61.641z"></path>
                            </g>
                            <g clip-path="url(#newMoonCloudFillClip)">
                              <g class="climacon_wrapperComponent climacon_wrapperComponent-moon climacon_componentWrap-moon_cloud">
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_moonBody" d="M61.023,50.641c-6.627,0-11.999-5.372-11.999-11.998c0-6.627,5.372-11.999,11.999-11.999c0.755,0,1.491,0.078,2.207,0.212c-0.132,0.576-0.208,1.173-0.208,1.788c0,4.418,3.582,7.999,8,7.999c0.614,0,1.212-0.076,1.788-0.208c0.133,0.717,0.211,1.452,0.211,2.208C73.021,45.269,67.649,50.641,61.023,50.641z"></path>
                                <path class="climacon_component climacon_component-fill climacon_component-fill_moon" fill="#FFFFFF" d="M59.235,30.851c-3.556,0.813-6.211,3.989-6.211,7.792c0,4.417,3.581,7.999,7.999,7.999c3.802,0,6.979-2.655,7.791-6.211C63.961,39.527,60.139,35.705,59.235,30.851z"></path>
                              </g>
                            </g>
                          </g>
                        </svg>
                      </div>
                      <!-- cloudFogMoonAltFill-->
                      <div class="col-lg-2 col-3">
                        <svg class="climacon climacon_cloudLightning" id="cloudLightningfill2" version="1.1" viewbox="15 15 70 70">
                          <g class="climacon_iconWrap climacon_iconWrap-cloudLightning">
                            <g class="climacon_wrapperComponent climacon_wrapperComponent-lightning">
                              <polygon class="climacon_component climacon_component-stroke climacon_component-stroke_lightning" points="48.001,51.641 57.999,51.641 52,61.641 58.999,61.641 46.001,77.639 49.601,65.641 43.001,65.641 "></polygon>
                            </g>
                            <g class="climacon_wrapperComponent climacon_wrapperComponent-cloud">
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_cloud" d="M59.999,65.641c-0.28,0-0.649,0-1.062,0l3.584-4.412c3.182-1.057,5.478-4.053,5.478-7.588c0-4.417-3.581-7.998-7.999-7.998c-1.602,0-3.083,0.48-4.333,1.29c-1.231-5.316-5.974-9.29-11.665-9.29c-6.626,0-11.998,5.372-11.998,12c0,5.446,3.632,10.039,8.604,11.503l-1.349,3.777c-6.52-2.021-11.255-8.098-11.255-15.282c0-8.835,7.163-15.999,15.998-15.999c6.004,0,11.229,3.312,13.965,8.204c0.664-0.114,1.338-0.205,2.033-0.205c6.627,0,11.999,5.371,11.999,11.999C71.999,60.268,66.626,65.641,59.999,65.641z"></path>
                            </g>
                          </g>
                        </svg>
                      </div>
                      <!-- cloudLightning-->
                      <div class="col-lg-2 col-3">
                        <svg class="climacon climacon_cloudLightningFill" id="cloudLightningFill" version="1.1" viewbox="15 15 70 70">
                          <g class="climacon_iconWrap climacon_iconWrap-cloudLightningFill">
                            <g class="climacon_wrapperComponent climacon_wrapperComponent-lightning">
                              <polygon class="climacon_component climacon_component-stroke climacon_component-stroke_lightning" points="48.001,51.641 57.999,51.641 52,61.641 58.999,61.641 46.001,77.639 49.601,65.641 43.001,65.641 "></polygon>
                            </g>
                            <g class="climacon_componentWrap climacon_componentWrap_cloud">
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_cloud" d="M43.945,65.639c-8.835,0-15.998-7.162-15.998-15.998c0-8.836,7.163-15.998,15.998-15.998c6.004,0,11.229,3.312,13.965,8.203c0.664-0.113,1.338-0.205,2.033-0.205c6.627,0,11.998,5.373,11.998,12c0,6.625-5.371,11.998-11.998,11.998C57.168,65.639,47.143,65.639,43.945,65.639z"></path>
                              <path class="climacon_component climacon_component-fill climacon_component-fill_cloud" fill="#FFFFFF" d="M59.943,61.639c4.418,0,8-3.582,8-7.998c0-4.417-3.582-8-8-8c-1.601,0-3.082,0.481-4.334,1.291c-1.23-5.316-5.973-9.29-11.665-9.29c-6.626,0-11.998,5.372-11.998,11.999c0,6.626,5.372,11.998,11.998,11.998C47.562,61.639,56.924,61.639,59.943,61.639z"></path>
                            </g>
                          </g>
                        </svg>
                      </div>
                      <!-- cloudLightningFill-->
                      <div class="col-lg-2 col-3">
                        <svg class="climacon climacon_cloudLightningSun" id="cloudLightningfill1" version="1.1" viewbox="15 15 70 70">
                          <clippath id="cloudFillClipfill18">
                            <path d="M15,15v70h70V15H15z M59.943,61.639c-3.02,0-12.381,0-15.999,0c-6.626,0-11.998-5.371-11.998-11.998c0-6.627,5.372-11.999,11.998-11.999c5.691,0,10.434,3.974,11.665,9.29c1.252-0.81,2.733-1.291,4.334-1.291c4.418,0,8,3.582,8,8C67.943,58.057,64.361,61.639,59.943,61.639z"></path>
                          </clippath>
                          <clippath id="sunCloudFillClipfills3">
                            <path d="M15,15v70h70V15H15z M57.945,49.641c-4.417,0-8-3.582-8-7.999c0-4.418,3.582-7.999,8-7.999s7.998,3.581,7.998,7.999C65.943,46.059,62.362,49.641,57.945,49.641z"></path>
                          </clippath>
                          <clippath id="cloudSunFillClipfill11">
                            <path d="M15,15v70h20.947V63.481c-4.778-2.767-8-7.922-8-13.84c0-8.836,7.163-15.998,15.998-15.998c6.004,0,11.229,3.312,13.965,8.203c0.664-0.113,1.338-0.205,2.033-0.205c6.627,0,11.998,5.373,11.998,12c0,5.262-3.394,9.723-8.107,11.341V85H85V15H15z"></path>
                          </clippath>
                          <g class="climacon_iconWrap climacon_iconWrap-cloudLightning">
                            <g clip-path="url(#cloudSunFillClip)">
                              <g class="climacon_componentWrap climacon_componentWrap-sun climacon_componentWrap-sun_cloud">
                                <g class="climacon_componentWrap climacon_componentWrap_sunSpoke">
                                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M80.029,43.611h-3.998c-1.105,0-2-0.896-2-1.999s0.895-2,2-2h3.998c1.104,0,2,0.896,2,2S81.135,43.611,80.029,43.611z"></path>
                                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M72.174,30.3c-0.781,0.781-2.049,0.781-2.828,0c-0.781-0.781-0.781-2.047,0-2.828l2.828-2.828c0.779-0.781,2.047-0.781,2.828,0c0.779,0.781,0.779,2.047,0,2.828L72.174,30.3z"></path>
                                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M58.033,25.614c-1.105,0-2-0.896-2-2v-3.999c0-1.104,0.895-2,2-2c1.104,0,2,0.896,2,2v3.999C60.033,24.718,59.135,25.614,58.033,25.614z"></path>
                                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M43.892,30.3l-2.827-2.828c-0.781-0.781-0.781-2.047,0-2.828c0.78-0.781,2.047-0.781,2.827,0l2.827,2.828c0.781,0.781,0.781,2.047,0,2.828C45.939,31.081,44.673,31.081,43.892,30.3z"></path>
                                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M42.033,41.612c0,1.104-0.896,1.999-2,1.999h-4c-1.104,0-1.998-0.896-1.998-1.999s0.896-2,1.998-2h4C41.139,39.612,42.033,40.509,42.033,41.612z"></path>
                                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M43.892,52.925c0.781-0.78,2.048-0.78,2.827,0c0.781,0.78,0.781,2.047,0,2.828l-2.827,2.827c-0.78,0.781-2.047,0.781-2.827,0c-0.781-0.78-0.781-2.047,0-2.827L43.892,52.925z"></path>
                                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M58.033,57.61c1.104,0,2,0.895,2,1.999v4c0,1.104-0.896,2-2,2c-1.105,0-2-0.896-2-2v-4C56.033,58.505,56.928,57.61,58.033,57.61z"></path>
                                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M72.174,52.925l2.828,2.828c0.779,0.78,0.779,2.047,0,2.827c-0.781,0.781-2.049,0.781-2.828,0l-2.828-2.827c-0.781-0.781-0.781-2.048,0-2.828C70.125,52.144,71.391,52.144,72.174,52.925z"></path>
                                </g>
                                <g class="climacon_wrapperComponent climacon_wrapperComponent-sunBody" clip-path="url(#sunCloudFillClip)">
                                  <circle class="climacon_component climacon_component-stroke climacon_component-stroke_sunBody" cx="58.033" cy="41.612" r="11.999"></circle>
                                </g>
                              </g>
                            </g>
                            <g class="climacon_wrapperComponent climacon_wrapperComponent-lightning">
                              <polygon class="climacon_component climacon_component-stroke climacon_component-stroke_lightning" points="48.001,51.641 57.999,51.641 52,61.641 58.999,61.641 46.001,77.639 49.601,65.641 43.001,65.641 "></polygon>
                            </g>
                            <g class="climacon_wrapperComponent climacon_wrapperComponent-cloud">
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_cloud" d="M59.999,65.641c-0.28,0-0.649,0-1.062,0l3.584-4.412c3.182-1.057,5.478-4.053,5.478-7.588c0-4.417-3.581-7.998-7.999-7.998c-1.602,0-3.083,0.48-4.333,1.29c-1.231-5.316-5.974-9.29-11.665-9.29c-6.626,0-11.998,5.372-11.998,12c0,5.446,3.632,10.039,8.604,11.503l-1.349,3.777c-6.52-2.021-11.255-8.098-11.255-15.282c0-8.835,7.163-15.999,15.998-15.999c6.004,0,11.229,3.312,13.965,8.204c0.664-0.114,1.338-0.205,2.033-0.205c6.627,0,11.999,5.371,11.999,11.999C71.999,60.268,66.626,65.641,59.999,65.641z"></path>
                            </g>
                          </g>
                        </svg>
                      </div>
                      <!-- cloudLightningSun-->
                      <div class="col-lg-2 col-3">
                        <svg class="climacon climacon_cloudLightningSunFill" id="cloudLightningSunFill" version="1.1" viewbox="15 15 70 70">
                          <g class="climacon_iconWrap climacon_iconWrap-cloudLightning">
                            <g clip-path="url(#clip)">
                              <g class="climacon_componentWrap climacon_componentWrap-sun climacon_componentWrap-sun_cloud">
                                <g class="climacon_componentWrap climacon_componentWrap_sunSpoke">
                                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M80.029,43.611h-3.998c-1.105,0-2-0.896-2-1.999s0.895-2,2-2h3.998c1.104,0,2,0.896,2,2S81.135,43.611,80.029,43.611z"></path>
                                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M72.174,30.3c-0.781,0.781-2.049,0.781-2.828,0c-0.781-0.781-0.781-2.047,0-2.828l2.828-2.828c0.779-0.781,2.047-0.781,2.828,0c0.779,0.781,0.779,2.047,0,2.828L72.174,30.3z"></path>
                                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M58.033,25.614c-1.105,0-2-0.896-2-2v-3.999c0-1.104,0.895-2,2-2c1.104,0,2,0.896,2,2v3.999C60.033,24.718,59.135,25.614,58.033,25.614z"></path>
                                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M43.892,30.3l-2.827-2.828c-0.781-0.781-0.781-2.047,0-2.828c0.78-0.781,2.047-0.781,2.827,0l2.827,2.828c0.781,0.781,0.781,2.047,0,2.828C45.939,31.081,44.673,31.081,43.892,30.3z"></path>
                                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M42.033,41.612c0,1.104-0.896,1.999-2,1.999h-4c-1.104,0-1.998-0.896-1.998-1.999s0.896-2,1.998-2h4C41.139,39.612,42.033,40.509,42.033,41.612z"></path>
                                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M43.892,52.925c0.781-0.78,2.048-0.78,2.827,0c0.781,0.78,0.781,2.047,0,2.828l-2.827,2.827c-0.78,0.781-2.047,0.781-2.827,0c-0.781-0.78-0.781-2.047,0-2.827L43.892,52.925z"></path>
                                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M58.033,57.61c1.104,0,2,0.895,2,1.999v4c0,1.104-0.896,2-2,2c-1.105,0-2-0.896-2-2v-4C56.033,58.505,56.928,57.61,58.033,57.61z"></path>
                                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M72.174,52.925l2.828,2.828c0.779,0.78,0.779,2.047,0,2.827c-0.781,0.781-2.049,0.781-2.828,0l-2.828-2.827c-0.781-0.781-0.781-2.048,0-2.828C70.125,52.144,71.391,52.144,72.174,52.925z"></path>
                                </g>
                                <g class="climacon_wrapperComponent climacon_wrapperComponent-sunBody">
                                  <circle class="climacon_component climacon_component-stroke climacon_component-stroke_sunBody" cx="58.033" cy="41.612" r="11.999"></circle>
                                  <circle class="climacon_component climacon_component-fill climacon_component-fill_sunBody" fill="#FFFFFF" cx="58.033" cy="41.612" r="7.999"></circle>
                                </g>
                              </g>
                            </g>
                            <g class="climacon_wrapperComponent climacon_wrapperComponent-lightning">
                              <polygon class="climacon_component climacon_component-stroke climacon_component-stroke_lightning" points="48.001,51.641 57.999,51.641 52,61.641 58.999,61.641 46.001,77.639 49.601,65.641 43.001,65.641 "></polygon>
                            </g>
                            <g class="climacon_componentWrap climacon_componentWrap_cloud">
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_cloud" d="M43.945,65.639c-8.835,0-15.998-7.162-15.998-15.998c0-8.836,7.163-15.998,15.998-15.998c6.004,0,11.229,3.312,13.965,8.203c0.664-0.113,1.338-0.205,2.033-0.205c6.627,0,11.998,5.373,11.998,12c0,6.625-5.371,11.998-11.998,11.998C57.168,65.639,47.143,65.639,43.945,65.639z"></path>
                              <path class="climacon_component climacon_component-fill climacon_component-fill_cloud" fill="#FFFFFF" d="M59.943,61.639c4.418,0,8-3.582,8-7.998c0-4.417-3.582-8-8-8c-1.601,0-3.082,0.481-4.334,1.291c-1.23-5.316-5.973-9.29-11.665-9.29c-6.626,0-11.998,5.372-11.998,11.999c0,6.626,5.372,11.998,11.998,11.998C47.562,61.639,56.924,61.639,59.943,61.639z"></path>
                            </g>
                          </g>
                        </svg>
                      </div>
                      <!-- cloudLightningSunFill-->
                      <div class="col-lg-2 col-3">
                        <svg class="climacon climacon_cloudLightningMoon" id="cloudLightningMoon" version="1.1" viewbox="15 15 70 70">
                          <clippath id="moonCloudFillClipfill11">
                            <path d="M0,0v100h100V0H0z M60.943,46.641c-4.418,0-7.999-3.582-7.999-7.999c0-3.803,2.655-6.979,6.211-7.792c0.903,4.854,4.726,8.676,9.579,9.58C67.922,43.986,64.745,46.641,60.943,46.641z"></path>
                          </clippath>
                          <clippath id="cloudFillClipfill19">
                            <path d="M15,15v70h70V15H15z M59.943,61.639c-3.02,0-12.381,0-15.999,0c-6.626,0-11.998-5.371-11.998-11.998c0-6.627,5.372-11.999,11.998-11.999c5.691,0,10.434,3.974,11.665,9.29c1.252-0.81,2.733-1.291,4.334-1.291c4.418,0,8,3.582,8,8C67.943,58.057,64.361,61.639,59.943,61.639z"></path>
                          </clippath>
                          <g class="climacon_iconWrap climacon_iconWrap-cloudLightningMoon">
                            <g clip-path="url(#cloudFillClip)">
                              <g class="climacon_wrapperComponent climacon_wrapperComponent-moon climacon_componentWrap-moon_cloud" clip-path="url(#moonCloudFillClip)">
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunBody" d="M61.023,50.641c-6.627,0-11.999-5.372-11.999-11.998c0-6.627,5.372-11.999,11.999-11.999c0.755,0,1.491,0.078,2.207,0.212c-0.132,0.576-0.208,1.173-0.208,1.788c0,4.418,3.582,7.999,8,7.999c0.614,0,1.212-0.076,1.788-0.208c0.133,0.717,0.211,1.452,0.211,2.208C73.021,45.269,67.649,50.641,61.023,50.641z"></path>
                              </g>
                            </g>
                            <g class="climacon_wrapperComponent climacon_wrapperComponent-lightning">
                              <polygon class="climacon_component climacon_component-stroke climacon_component-stroke_lightning" points="48.001,51.641 57.999,51.641 52,61.641 58.999,61.641 46.001,77.639 49.601,65.641 43.001,65.641 "></polygon>
                            </g>
                            <g class="climacon_wrapperComponent climacon_wrapperComponent-cloud">
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_cloud" d="M59.999,65.641c-0.28,0-0.649,0-1.062,0l3.584-4.412c3.182-1.057,5.478-4.053,5.478-7.588c0-4.417-3.581-7.998-7.999-7.998c-1.602,0-3.083,0.48-4.333,1.29c-1.231-5.316-5.974-9.29-11.665-9.29c-6.626,0-11.998,5.372-11.998,12c0,5.446,3.632,10.039,8.604,11.503l-1.349,3.777c-6.52-2.021-11.255-8.098-11.255-15.282c0-8.835,7.163-15.999,15.998-15.999c6.004,0,11.229,3.312,13.965,8.204c0.664-0.114,1.338-0.205,2.033-0.205c6.627,0,11.999,5.371,11.999,11.999C71.999,60.268,66.626,65.641,59.999,65.641z"></path>
                            </g>
                          </g>
                        </svg>
                      </div>
                      <!-- cloudLightningMoon-->
                      <div class="col-lg-2 col-3">
                        <svg class="climacon climacon_cloudLightningMoonFill" id="cloudLightningMoonFill" version="1.1" viewbox="15 15 70 70">
                          <g class="climacon_iconWrap climacon_iconWrap-cloudLightningMoonFill">
                            <g class="climacon_wrapperComponent climacon_wrapperComponent-moon climacon_componentWrap-moon_cloud">
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunBody" d="M61.023,50.641c-6.627,0-11.999-5.372-11.999-11.998c0-6.627,5.372-11.999,11.999-11.999c0.755,0,1.491,0.078,2.207,0.212c-0.132,0.576-0.208,1.173-0.208,1.788c0,4.418,3.582,7.999,8,7.999c0.614,0,1.212-0.076,1.788-0.208c0.133,0.717,0.211,1.452,0.211,2.208C73.021,45.269,67.649,50.641,61.023,50.641z"></path>
                              <path class="climacon_component climacon_component-fill climacon_component-fill_moon" fill="#FFFFFF" d="M59.235,30.851c-3.556,0.813-6.211,3.989-6.211,7.792c0,4.417,3.581,7.999,7.999,7.999c3.802,0,6.979-2.655,7.791-6.211C63.961,39.527,60.139,35.705,59.235,30.851z"></path>
                            </g>
                            <g class="climacon_wrapperComponent climacon_wrapperComponent-lightning">
                              <polygon class="climacon_component climacon_component-stroke climacon_component-stroke_lightning" points="48.001,51.641 57.999,51.641 52,61.641 58.999,61.641 46.001,77.639 49.601,65.641 43.001,65.641 "></polygon>
                            </g>
                            <g class="climacon_componentWrap climacon_componentWrap_cloud">
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_cloud" d="M43.945,65.639c-8.835,0-15.998-7.162-15.998-15.998c0-8.836,7.163-15.998,15.998-15.998c6.004,0,11.229,3.312,13.965,8.203c0.664-0.113,1.338-0.205,2.033-0.205c6.627,0,11.998,5.373,11.998,12c0,6.625-5.371,11.998-11.998,11.998C57.168,65.639,47.143,65.639,43.945,65.639z"></path>
                              <path class="climacon_component climacon_component-fill climacon_component-fill_cloud" fill="#FFFFFF" d="M59.943,61.639c4.418,0,8-3.582,8-7.998c0-4.417-3.582-8-8-8c-1.601,0-3.082,0.481-4.334,1.291c-1.23-5.316-5.973-9.29-11.665-9.29c-6.626,0-11.998,5.372-11.998,11.999c0,6.626,5.372,11.998,11.998,11.998C47.562,61.639,56.924,61.639,59.943,61.639z"></path>
                            </g>
                          </g>
                        </svg>
                      </div>
                      <!-- cloudLightningMoonFill-->
                      <div class="col-lg-2 col-3">
                        <svg class="climacon climacon_sunrise" id="sunrise" version="1.1" viewbox="15 15 70 70">
                          <g class="climacon_iconWrap climacon_iconWrap-sunrise">
                            <g class="climacon_componentWrap climacon_componentWrap-sunrise">
                              <g class="climacon_componentWrap climacon_componentWrap-sunSpoke">
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-east" d="M32.003,54h-4c-1.104,0-2,0.896-2,2s0.896,2,2,2h4c1.104,0,2-0.896,2-2S33.106,54,32.003,54z"></path>
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-northEast" d="M38.688,41.859l-2.828-2.828c-0.781-0.78-2.047-0.78-2.828,0c-0.781,0.781-0.781,2.047,0,2.828l2.828,2.828c0.781,0.781,2.047,0.781,2.828,0C39.469,43.906,39.469,42.641,38.688,41.859z"></path>
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M50.001,40.002c1.104,0,1.999-0.896,1.999-2v-3.999c0-1.104-0.896-2-1.999-2c-1.105,0-2,0.896-2,2v3.999C48.001,39.106,48.896,40.002,50.001,40.002z"></path>
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-northWest" d="M66.969,39.031c-0.779-0.78-2.048-0.78-2.828,0l-2.828,2.828c-0.779,0.781-0.779,2.047,0,2.828c0.781,0.781,2.049,0.781,2.828,0l2.828-2.828C67.749,41.078,67.749,39.812,66.969,39.031z"></path>
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-west" d="M71.997,54h-3.999c-1.104,0-1.999,0.896-1.999,2s0.896,2,1.999,2h3.999c1.104,0,2-0.896,2-2S73.104,54,71.997,54z"></path>
                              </g>
                              <g class="climacon_wrapperComponent climacon_wrapperComponent-sunBody">
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunBody" d="M50.001,44.002c-6.627,0-11.999,5.371-11.999,11.998c0,1.404,0.254,2.747,0.697,3.999h4.381c-0.683-1.177-1.079-2.54-1.079-3.999c0-4.418,3.582-7.999,8-7.999c4.417,0,7.998,3.581,7.998,7.999c0,1.459-0.396,2.822-1.078,3.999h4.381c0.443-1.252,0.697-2.595,0.697-3.999C61.999,49.373,56.627,44.002,50.001,44.002z"></path>
                              </g>
                              <g class="climacon_wrapperComponent climacon_wrapperComponent-arrow">
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_arrow climacon_component-stroke_arrow-up" d="M50.001,63.046c0.552,0,0.999-0.447,0.999-1v-3.827l2.536,2.535c0.39,0.391,1.022,0.391,1.414,0c0.39-0.391,0.39-1.023,0-1.414l-4.242-4.242c-0.391-0.391-1.024-0.391-1.414,0l-4.242,4.242c-0.391,0.391-0.391,1.023,0,1.414c0.391,0.391,1.023,0.391,1.414,0l2.535-2.535v3.827C49.001,62.599,49.448,63.046,50.001,63.046z"></path>
                              </g>
                              <g class="climacon_wrapperComponent climacon_wrapperComponent-horizonLine">
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_horizonLine" d="M59.999,63.999H40.001c-1.104,0-1.999,0.896-1.999,2s0.896,1.999,1.999,1.999h19.998c1.104,0,2-0.895,2-1.999S61.104,63.999,59.999,63.999z"></path>
                              </g>
                            </g>
                          </g>
                        </svg>
                      </div>
                      <!-- sunrise-->
                      <div class="col-lg-2 col-3">
                        <svg class="climacon climacon_sunriseFill" id="sunriseFill" version="1.1" viewbox="15 15 70 70">
                          <g class="climacon_iconWrap climacon_iconWrap-sunriseFill">
                            <g class="climacon_componentWrap climacon_componentWrap-sunrise">
                              <g class="climacon_componentWrap climacon_componentWrap-sunSpoke">
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-east" d="M71.997,57.999h-3.998c-1.104,0-2-0.896-2-1.999s0.896-2,2-2h3.998c1.104,0,2,0.896,2,2S73.104,57.999,71.997,57.999z"></path>
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-east" d="M64.143,44.688c-0.781,0.781-2.05,0.781-2.828,0c-0.781-0.781-0.781-2.047,0-2.828l2.828-2.828c0.778-0.781,2.047-0.781,2.828,0c0.778,0.781,0.778,2.047,0,2.828L64.143,44.688z"></path>
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-east" d="M50.001,40.002c-1.105,0-2-0.896-2-2v-3.999c0-1.104,0.895-2,2-2c1.104,0,2,0.896,2,2v3.999C52.001,39.106,51.104,40.002,50.001,40.002z"></path>
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-east" d="M35.86,44.688l-2.828-2.828c-0.781-0.781-0.781-2.047,0-2.828c0.781-0.781,2.047-0.781,2.828,0l2.828,2.828c0.781,0.781,0.781,2.047,0,2.828C37.907,45.469,36.641,45.469,35.86,44.688z"></path>
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-east" d="M34.002,56c0,1.104-0.896,1.999-2,1.999h-4c-1.104,0-1.999-0.896-1.999-1.999s0.896-2,1.999-2h4C33.107,54,34.002,54.896,34.002,56z"></path>
                              </g>
                              <g class="climacon_wrapperComponent climacon_wrapperComponent-sunBody">
                                <circle class="climacon_component climacon_component-stroke climacon_component-stroke_sunBody" cx="50.001" cy="56" r="11.999"></circle>
                                <circle class="climacon_component climacon_component-fill climacon_component-fill_sunBody" fill="#FFFFFF" cx="50.001" cy="56" r="7.999"></circle>
                              </g>
                              <g class="climacon_wrapperComponent climacon_wrapperComponent-arrow">
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_arrow climacon_component-stroke_arrow-up" d="M50.001,63.046c0.552,0,0.999-0.447,0.999-1v-3.827l2.536,2.535c0.39,0.391,1.022,0.391,1.414,0c0.39-0.391,0.39-1.023,0-1.414l-4.242-4.242c-0.391-0.391-1.024-0.391-1.414,0l-4.242,4.242c-0.391,0.391-0.391,1.023,0,1.414c0.391,0.391,1.023,0.391,1.414,0l2.535-2.535v3.827C49.001,62.599,49.448,63.046,50.001,63.046z"></path>
                              </g>
                              <g class="climacon_wrapperComponent climacon_wrapperComponent-horizonLine">
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_horizonLine" d="M59.999,63.999H40.001c-1.104,0-1.999,0.896-1.999,2s0.896,1.999,1.999,1.999h19.998c1.104,0,2-0.895,2-1.999S61.104,63.999,59.999,63.999z"></path>
                              </g>
                            </g>
                          </g>
                        </svg>
                      </div>
                      <!-- sunriseFill-->
                      <div class="col-lg-2 col-3">
                        <svg class="climacon climacon_sunset" id="sunset" version="1.1" viewbox="15 15 70 70">
                          <g class="climacon_iconWrap climacon_iconWrap-sunset">
                            <g class="climacon_componentWrap climacon_componentWrap-sunset">
                              <g class="climacon_componentWrap climacon_componentWrap-sunSpoke">
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-east" d="M32.003,54h-4c-1.104,0-2,0.896-2,2s0.896,2,2,2h4c1.104,0,2-0.896,2-2S33.106,54,32.003,54z"></path>
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-northEast" d="M38.688,41.859l-2.828-2.828c-0.781-0.78-2.047-0.78-2.828,0c-0.781,0.781-0.781,2.047,0,2.828l2.828,2.828c0.781,0.781,2.047,0.781,2.828,0C39.469,43.906,39.469,42.641,38.688,41.859z"></path>
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M50.001,40.002c1.104,0,1.999-0.896,1.999-2v-3.999c0-1.104-0.896-2-1.999-2c-1.105,0-2,0.896-2,2v3.999C48.001,39.106,48.896,40.002,50.001,40.002z"></path>
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-northWest" d="M66.969,39.031c-0.779-0.78-2.048-0.78-2.828,0l-2.828,2.828c-0.779,0.781-0.779,2.047,0,2.828c0.781,0.781,2.049,0.781,2.828,0l2.828-2.828C67.749,41.078,67.749,39.812,66.969,39.031z"></path>
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-west" d="M71.997,54h-3.999c-1.104,0-1.999,0.896-1.999,2s0.896,2,1.999,2h3.999c1.104,0,2-0.896,2-2S73.104,54,71.997,54z"></path>
                              </g>
                              <g class="climacon_wrapperComponent climacon_wrapperComponent-sunBody">
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunBody" d="M50.001,44.002c-6.627,0-11.999,5.371-11.999,11.998c0,1.404,0.254,2.747,0.697,3.999h4.381c-0.683-1.177-1.079-2.54-1.079-3.999c0-4.418,3.582-7.999,8-7.999c4.417,0,7.998,3.581,7.998,7.999c0,1.459-0.396,2.822-1.078,3.999h4.381c0.443-1.252,0.697-2.595,0.697-3.999C61.999,49.373,56.627,44.002,50.001,44.002z"></path>
                              </g>
                              <g class="climacon_wrapperComponent climacon_wrapperComponent-arrow">
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_arrow climacon_component-stroke_arrow-down" d="M50,49.107c0.552,0,1,0.448,1,1.002v3.83l2.535-2.535c0.391-0.391,1.022-0.391,1.414,0c0.391,0.391,0.391,1.023,0,1.414l-4.242,4.242c-0.392,0.391-1.022,0.391-1.414,0l-4.242-4.242c-0.391-0.391-0.391-1.023,0-1.414c0.392-0.391,1.023-0.391,1.414,0L49,53.939v-3.83C49,49.555,49.447,49.107,50,49.107z"></path>
                              </g>
                              <g class="climacon_wrapperComponent climacon_wrapperComponent-horizonLine">
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_horizonLine" d="M59.999,63.999H40.001c-1.104,0-1.999,0.896-1.999,2s0.896,1.999,1.999,1.999h19.998c1.104,0,2-0.895,2-1.999S61.104,63.999,59.999,63.999z"></path>
                              </g>
                            </g>
                          </g>
                        </svg>
                      </div>
                      <!-- sunset-->
                      <div class="col-lg-2 col-3">
                        <svg class="climacon climacon_sunsetFill" id="sunsetFill" version="1.1" viewbox="15 15 70 70">
                          <g class="climacon_iconWrap climacon_iconWrap-sunsetFill">
                            <g class="climacon_componentWrap climacon_componentWrap-sunsetFill">
                              <g class="climacon_componentWrap climacon_componentWrap-sunSpoke">
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-west" d="M71.997,57.999h-3.998c-1.104,0-2-0.896-2-1.999s0.896-2,2-2h3.998c1.104,0,2,0.896,2,2S73.104,57.999,71.997,57.999z"></path>
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-northWest" d="M64.143,44.688c-0.781,0.781-2.05,0.781-2.828,0c-0.781-0.781-0.781-2.047,0-2.828l2.828-2.828c0.778-0.781,2.047-0.781,2.828,0c0.778,0.781,0.778,2.047,0,2.828L64.143,44.688z"></path>
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M50.001,40.002c-1.105,0-2-0.896-2-2v-3.999c0-1.104,0.895-2,2-2c1.104,0,2,0.896,2,2v3.999C52.001,39.106,51.104,40.002,50.001,40.002z"></path>
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-northEast" d="M35.86,44.688l-2.828-2.828c-0.781-0.781-0.781-2.047,0-2.828c0.781-0.781,2.047-0.781,2.828,0l2.828,2.828c0.781,0.781,0.781,2.047,0,2.828C37.907,45.469,36.641,45.469,35.86,44.688z"></path>
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-east" d="M34.002,56c0,1.104-0.896,1.999-2,1.999h-4c-1.104,0-1.999-0.896-1.999-1.999s0.896-2,1.999-2h4C33.107,54,34.002,54.896,34.002,56z"></path>
                              </g>
                              <g class="climacon_wrapperComponent climacon_wrapperComponent-sunBody">
                                <circle class="climacon_component climacon_component-stroke climacon_component-stroke_sunBody" cx="50.001" cy="56" r="11.999"></circle>
                                <circle class="climacon_component climacon_component-fill climacon_component-fill_sunBody" fill="#FFFFFF" cx="50.001" cy="56" r="7.999"></circle>
                              </g>
                              <g class="climacon_wrapperComponent climacon_wrapperComponent-arrow">
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_arrow climacon_component-stroke_arrow-down" d="M50,49.107c0.552,0,1,0.448,1,1.002v3.83l2.535-2.535c0.391-0.391,1.022-0.391,1.414,0c0.391,0.391,0.391,1.023,0,1.414l-4.242,4.242c-0.392,0.391-1.022,0.391-1.414,0l-4.242-4.242c-0.391-0.391-0.391-1.023,0-1.414c0.392-0.391,1.023-0.391,1.414,0L49,53.939v-3.83C49,49.555,49.447,49.107,50,49.107z"></path>
                              </g>
                              <g class="climacon_wrapperComponent climacon_wrapperComponent-horizonLine">
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_horizonLine" d="M59.999,63.999H40.001c-1.104,0-1.999,0.896-1.999,2s0.896,1.999,1.999,1.999h19.998c1.104,0,2-0.895,2-1.999S61.104,63.999,59.999,63.999z"></path>
                              </g>
                            </g>
                          </g>
                        </svg>
                      </div>
                      <!-- sunsetFill-->
                      <div class="col-lg-2 col-3">
                        <svg class="climacon climacon_sunriseAlt" id="sunriseAlt" version="1.1" viewbox="15 15 70 70">
                          <clippath id="sunriseClip">
                            <rect x="15" y="15" width="70" height="45"></rect>
                          </clippath>
                          <g class="climacon_iconWrap climacon_iconWrap-sunriseAlt">
                            <g clip-path="url(#sunriseClip)">
                              <g class="climacon_componentWrap climacon_componentWrap-sunriseAlt">
                                <g class="climacon_componentWrap climacon_componentWrap-sunSpoke">
                                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-east" d="M71.997,74.002h-3.999c-1.104,0-2-0.896-2-2c0-1.105,0.896-2,2-2h3.999c1.104,0,2,0.895,2,2C73.997,73.105,73.104,74.002,71.997,74.002z"></path>
                                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-east" d="M64.141,60.689c-0.781,0.78-2.048,0.78-2.828,0c-0.779-0.781-0.779-2.047,0-2.828l2.828-2.828c0.78-0.78,2.047-0.78,2.828,0c0.78,0.781,0.78,2.047,0,2.828L64.141,60.689z"></path>
                                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-east" d="M50,56.003c-1.104,0-1.999-0.896-1.999-2v-3.999c0-1.104,0.896-2,1.999-2s2,0.896,2,2v3.999C52,55.107,51.104,56.003,50,56.003z"></path>
                                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-east" d="M35.86,60.689l-2.828-2.828c-0.781-0.781-0.781-2.047,0-2.828c0.78-0.78,2.047-0.78,2.828,0l2.828,2.828c0.78,0.781,0.78,2.047,0,2.828C37.907,61.47,36.641,61.47,35.86,60.689z"></path>
                                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-east" d="M34.002,72.002c0,1.104-0.896,2-1.999,2h-4c-1.104,0-2-0.896-2-2c0-1.105,0.896-2,2-2h4C33.106,70.002,34.002,70.896,34.002,72.002z"></path>
                                </g>
                                <g class="climacon_wrapperComponent climacon_wrapperComponent-sunBody">
                                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunBody" d="M61.302,76h-4.381c0.683-1.176,1.078-2.539,1.078-3.998c0-4.418-3.581-8-7.999-8c-4.417,0-7.999,3.582-7.999,8c0,1.459,0.396,2.822,1.079,3.998h-4.381c-0.444-1.252-0.698-2.594-0.698-3.998c0-6.627,5.373-11.999,11.999-11.999c6.627,0,11.999,5.371,11.999,11.999C61.999,73.406,61.745,74.748,61.302,76z"></path>
                                </g>
                              </g>
                            </g>
                            <g class="climacon_wrapperComponent climacon_wrapperComponent-horizonLine">
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_horizonLine" d="M40.001,63.998h19.998c1.104,0,2,0.896,2,2c0,1.105-0.896,2-2,2H40.001c-1.104,0-2-0.895-2-2C38.001,64.895,38.897,63.998,40.001,63.998z"></path>
                            </g>
                          </g>
                        </svg>
                      </div>
                      <!-- sunriseAlt-->
                      <div class="col-lg-2 col-3">
                        <svg class="climacon climacon_sunriseAltFill" id="sunriseAltFill" version="1.1" viewbox="15 15 70 70">
                          <clippath id="sunriseFillClip">
                            <rect x="15" y="15" width="70" height="48.999"></rect>
                          </clippath>
                          <g class="climacon_iconWrap climacon_iconWrap-sunriseAltFill">
                            <g clip-path="url(#sunriseFillClip)">
                              <g class="climacon_componentWrap climacon_componentWrap-sunriseAlt">
                                <g class="climacon_componentWrap climacon_componentWrap-sunSpoke">
                                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-east" d="M72.31,77.999h-3.998c-1.104,0-2-0.896-2-1.999s0.896-2,2-2h3.998c1.104,0,2,0.896,2,2S73.416,77.999,72.31,77.999z"></path>
                                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-east" d="M64.455,64.688c-0.781,0.781-2.05,0.781-2.828,0c-0.781-0.78-0.781-2.047,0-2.828l2.828-2.827c0.778-0.781,2.047-0.781,2.828,0c0.778,0.78,0.778,2.047,0,2.827L64.455,64.688z"></path>
                                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-east" d="M50.313,60.002c-1.104,0-2-0.896-2-2v-3.999c0-1.104,0.896-2,2-2s2,0.896,2,2v3.999C52.313,59.105,51.416,60.002,50.313,60.002z"></path>
                                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-east" d="M36.172,64.688l-2.828-2.828c-0.781-0.78-0.781-2.047,0-2.827c0.781-0.781,2.047-0.781,2.828,0L39,61.859c0.781,0.781,0.781,2.048,0,2.828C38.22,65.469,36.954,65.469,36.172,64.688z"></path>
                                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-east" d="M34.314,76c0,1.104-0.896,1.999-2,1.999h-4c-1.104,0-1.999-0.896-1.999-1.999s0.896-2,1.999-2h4C33.419,74,34.314,74.896,34.314,76z"></path>
                                </g>
                                <g class="climacon_wrapperComponent climacon_wrapperComponent-sunBody">
                                  <circle class="climacon_component climacon_component-stroke climacon_component-stroke_sunBody" cx="50.313" cy="76" r="11.999"></circle>
                                  <circle class="climacon_component climacon_component-fill climacon_component-fill_sunBody" fill="#FFFFFF" cx="50.001" cy="76" r="7.999"></circle>
                                </g>
                              </g>
                            </g>
                            <g class="climacon_wrapperComponent climacon_wrapperComponent-horizonLine">
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_horizonLine" d="M40.001,63.998h19.998c1.104,0,2,0.896,2,2c0,1.105-0.896,2-2,2H40.001c-1.104,0-2-0.895-2-2C38.001,64.895,38.897,63.998,40.001,63.998z"></path>
                            </g>
                          </g>
                        </svg>
                      </div>
                      <!-- sunriseAltFill-->
                      <div class="col-lg-2 col-3">
                        <svg class="climacon climacon_sunsetAlt" id="sunsetAltfill" version="1.1" viewbox="15 15 70 70">
                          <clippath id="sunriseClipfill">
                            <rect x="15" y="15" width="70" height="45"></rect>
                          </clippath>
                          <g class="climacon_iconWrap climacon_iconWrap-sunsetAlt">
                            <g clip-path="url(#sunriseClip)">
                              <g class="climacon_componentWrap climacon_componentWrap-sunsetAlt">
                                <g class="climacon_componentWrap climacon_componentWrap-sunSpoke">
                                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-east" d="M71.997,74.002h-3.999c-1.104,0-2-0.896-2-2c0-1.105,0.896-2,2-2h3.999c1.104,0,2,0.895,2,2C73.997,73.105,73.104,74.002,71.997,74.002z"></path>
                                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-east" d="M64.141,60.689c-0.781,0.78-2.048,0.78-2.828,0c-0.779-0.781-0.779-2.047,0-2.828l2.828-2.828c0.78-0.78,2.047-0.78,2.828,0c0.78,0.781,0.78,2.047,0,2.828L64.141,60.689z"></path>
                                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-east" d="M50,56.003c-1.104,0-1.999-0.896-1.999-2v-3.999c0-1.104,0.896-2,1.999-2s2,0.896,2,2v3.999C52,55.107,51.104,56.003,50,56.003z"></path>
                                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-east" d="M35.86,60.689l-2.828-2.828c-0.781-0.781-0.781-2.047,0-2.828c0.78-0.78,2.047-0.78,2.828,0l2.828,2.828c0.78,0.781,0.78,2.047,0,2.828C37.907,61.47,36.641,61.47,35.86,60.689z"></path>
                                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-east" d="M34.002,72.002c0,1.104-0.896,2-1.999,2h-4c-1.104,0-2-0.896-2-2c0-1.105,0.896-2,2-2h4C33.106,70.002,34.002,70.896,34.002,72.002z"></path>
                                </g>
                                <g class="climacon_wrapperComponent climacon_wrapperComponent-sunBody">
                                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunBody" d="M61.302,76h-4.381c0.683-1.176,1.078-2.539,1.078-3.998c0-4.418-3.581-8-7.999-8c-4.417,0-7.999,3.582-7.999,8c0,1.459,0.396,2.822,1.079,3.998h-4.381c-0.444-1.252-0.698-2.594-0.698-3.998c0-6.627,5.373-11.999,11.999-11.999c6.627,0,11.999,5.371,11.999,11.999C61.999,73.406,61.745,74.748,61.302,76z"></path>
                                </g>
                              </g>
                            </g>
                            <g class="climacon_wrapperComponent climacon_wrapperComponent-horizonLine">
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_horizonLine" d="M40.001,63.998h19.998c1.104,0,2,0.896,2,2c0,1.105-0.896,2-2,2H40.001c-1.104,0-2-0.895-2-2C38.001,64.895,38.897,63.998,40.001,63.998z"></path>
                            </g>
                          </g>
                        </svg>
                      </div>
                      <!-- sunsetAlt-->
                      <div class="col-lg-2 col-3">
                        <svg class="climacon climacon_sunsetAltFill" id="sunsetAltFill" version="1.1" viewbox="15 15 70 70">
                          <clippath id="sunriseFillClipfill">
                            <rect x="15" y="15" width="70" height="48.999"></rect>
                          </clippath>
                          <g class="climacon_iconWrap climacon_iconWrap-sunsetAltFill">
                            <g clip-path="url(#sunriseFillClip)">
                              <g class="climacon_componentWrap climacon_componentWrap-sunset climacon_componentWrap-sunsetAlt">
                                <g class="climacon_componentWrap climacon_componentWrap-sunSpoke">
                                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-east" d="M72.31,77.999h-3.998c-1.104,0-2-0.896-2-1.999s0.896-2,2-2h3.998c1.104,0,2,0.896,2,2S73.416,77.999,72.31,77.999z"></path>
                                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-northEast" d="M64.455,64.688c-0.781,0.781-2.05,0.781-2.828,0c-0.781-0.78-0.781-2.047,0-2.828l2.828-2.827c0.778-0.781,2.047-0.781,2.828,0c0.778,0.78,0.778,2.047,0,2.827L64.455,64.688z"></path>
                                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M50.313,60.002c-1.104,0-2-0.896-2-2v-3.999c0-1.104,0.896-2,2-2s2,0.896,2,2v3.999C52.313,59.105,51.416,60.002,50.313,60.002z"></path>
                                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-northWest" d="M36.172,64.688l-2.828-2.828c-0.781-0.78-0.781-2.047,0-2.827c0.781-0.781,2.047-0.781,2.828,0L39,61.859c0.781,0.781,0.781,2.048,0,2.828C38.22,65.469,36.954,65.469,36.172,64.688z"></path>
                                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-west" d="M34.314,76c0,1.104-0.896,1.999-2,1.999h-4c-1.104,0-1.999-0.896-1.999-1.999s0.896-2,1.999-2h4C33.419,74,34.314,74.896,34.314,76z"></path>
                                </g>
                                <g class="climacon_wrapperComponent climacon_wrapperComponent-sunBody">
                                  <circle class="climacon_component climacon_component-stroke climacon_component-stroke_sunBody" cx="50.313" cy="76" r="11.999"></circle>
                                  <circle class="climacon_component climacon_component-fill climacon_component-fill_sunBody" fill="#FFFFFF" cx="50.001" cy="76" r="7.999"></circle>
                                </g>
                              </g>
                            </g>
                            <g class="climacon_wrapperComponent climacon_wrapperComponent-horizonLine">
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_horizonLine" d="M40.001,63.998h19.998c1.104,0,2,0.896,2,2c0,1.105-0.896,2-2,2H40.001c-1.104,0-2-0.895-2-2C38.001,64.895,38.897,63.998,40.001,63.998z"></path>
                            </g>
                          </g>
                        </svg>
                      </div>
                      <!-- sunsetAltFill-->
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid Ends-->
        </div>
        <!-- footer start-->
        <footer class="footer">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-6 footer-copyright">
                <p class="mb-0">Copyright 2021-22 © viho All rights reserved.</p>
              </div>
              <div class="col-md-6">
                <p class="pull-right mb-0">Hand crafted & made with <i class="fa fa-heart font-secondary"></i></p>
              </div>
            </div>
          </div>
        </footer>
      </div>
    </div>
    <div class="icon-hover-bottom p-fixed icons-show-div">
      <div class="container-fluid">
        <div class="row">
          <div class="icon-popup">
            <div class="close-icon"><i class="icofont icofont-close"></i></div>
            <div class="icon-first"></div>
            <div class="icon-last icon-last">
              <label class="icon-title">Markup</label>
              <div class="form-inline theme-form">
                <div class="form-group m-0">
                  <input class="inp-val form-control m-r-10" id="input_copy" type="text" value="" readonly="readonly">
                  <button class="btn btn-primary notification" onclick="myFunction()">Copy text</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- latest jquery-->
    <script src="../assets/js/jquery-3.5.1.min.js"></script>
    <!-- feather icon js-->
    <script src="../assets/js/icons/feather-icon/feather.min.js"></script>
    <script src="../assets/js/icons/feather-icon/feather-icon.js"></script>
    <!-- Sidebar jquery-->
    <script src="../assets/js/sidebar-menu.js"></script>
    <script src="../assets/js/config.js"></script>
    <!-- Bootstrap js-->
    <script src="../assets/js/bootstrap/popper.min.js"></script>
    <script src="../assets/js/bootstrap/bootstrap.min.js"></script>
    <!-- Plugins JS start-->
    <script src="../assets/js/notify/bootstrap-notify.min.js"></script>
    <script src="../assets/js/icons/icons-notify.js"></script>
    <script src="../assets/js/icons/whether-icon-clipart.js"></script>
    <script src="../assets/js/tooltip-init.js"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="../assets/js/script.js"></script>
    <script src="../assets/js/theme-customizer/customizer.js"></script>
    <!-- login js-->
    <!-- Plugin used-->
  </body>
</html>