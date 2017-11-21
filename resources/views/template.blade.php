<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <!--<link rel="shortcut icon" href="../images/favicon.png" type="image/png">-->

        <title>Obson</title>

        <link rel="stylesheet" href="<?php echo asset('quirk/lib/jquery-ui/jquery-ui.css') ?>">
        <link rel="stylesheet" href="<?php echo asset('quirk/lib/select2/select2.css') ?>">
        <link rel="stylesheet" href="<?php echo asset('quirk/lib/dropzone/dropzone.css') ?>">
        <link rel="stylesheet" href="<?php echo asset('quirk/lib/jquery-toggles/toggles-full.css') ?>">
        <link rel="stylesheet" href="<?php echo asset('quirk/lib/fontawesome/css/font-awesome.css') ?>">
        <link rel="stylesheet" href="<?php echo asset('quirk/lib/timepicker/jquery.timepicker.css') ?>">
        <link rel="stylesheet" href="<?php echo asset('quirk/lib/bootstrapcolorpicker/css/bootstrap-colorpicker.css') ?>">
        <link rel="stylesheet" href="<?php echo asset('quirk/lib/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css') ?>">
        <link rel="stylesheet" href="<?php echo asset('quirk/lib/select2/select2.css') ?>">
        <link rel="stylesheet" href="<?php echo asset('quirk/lib/animate.css/animate.css') ?>">

        <link rel="stylesheet" href="<?php echo asset('quirk/css/quirk.css') ?>">

        <script src="<?php echo asset('quirk/lib/modernizr/modernizr.js') ?>"></script>
        <style type="text/css">
            .spacing{
                margin-top: 15px;
            }
            .select2-dropdown {
                z-index: 9001;
            }
            .select2-container {
                width: 100% !important;
                padding: 0;
            }

            .carousel-content {
                color:black;
                display:flex;
                align-items:center;
            }

            .btn-others {
                color: #ffffff;
                background-color: #8e44ad;
                border-color: transparent;
            }

            .app{
                width: 100%;
                position: relative;
            }

            .app #start-camera{
                display: none;
                border-radius: 3px;
                max-width: 400px;
                color: #fff;
                background-color: #448AFF;
                text-decoration: none;
                padding: 15px;
                opacity: 0.8;
                margin: 50px auto;
                text-align: center;
            }

            .app video#camera-stream{
                display: none;
                width: 100%;
            }

            .app img#snap{
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                z-index: 10;
                display: none;
            }

            .app #error-message{
                width: 100%;
                background-color: #ccc;
                color: #9b9b9b;
                font-size: 28px;
                padding: 200px 100px;
                text-align: center;
                display: none;
            }

            .app .controls{
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                z-index: 20;

                display: flex;
                align-items: flex-end;
                justify-content: space-between;
                padding: 30px;
                display: none;
            }

            .app .controls a{
                border-radius: 50%;
                color: #fff;
                background-color: #111;
                text-decoration: none;
                padding: 15px;
                line-height: 0;
                opacity: 0.7;
                outline: none;
                -webkit-tap-highlight-color: transparent;
            }

            .app .controls a:hover{
                opacity: 1;
            }

            .app .controls a.disabled{
                background-color: #555;
                opacity: 0.5;
                cursor: default;
                pointer-events: none;
            }

            .app .controls a.disabled:hover{
                opacity: 0.5;
            }

            .app .controls a i{
                font-size: 18px;
            }

            .app .controls #take-photo i{
                font-size: 32px;
            }

            .app canvas{
                display: none;
            }

            .app video#camera-stream.visible,
            .app img#snap.visible,
            .app #error-message.visible
            {
                display: block;
            }

            .app .controls.visible{
                display: flex;
            }
            @media(max-width: 1000px){
                .app #start-camera.visible{
                    display: block;
                }

                .app .controls a i{
                    font-size: 16px;
                }

                .app .controls #take-photo i{
                    font-size: 24px;
                }
            }

            @media(max-width: 600px){
                .app #error-message{
                    padding: 80px 50px;
                    font-size: 18px;
                }

                .app .controls a i{
                    font-size: 12px;
                }

                .app .controls #take-photo i{
                    font-size: 18px;
                }
            }

            .round {
                display: inline-block;
                height: 30px;
                width: 30px;
                line-height: 30px;
                -moz-border-radius: 15px;
                border-radius: 15px;
                background-color: #222;    
                color: #FFF;
                text-align: center;  
            }
            .round.hollow {
                display: inline-block;
                height: 30px;
                width: 30px;
                line-height: 30px;
                -moz-border-radius: 15px;
                border-radius: 15px;
                background-color: #FFF;    
                color: #222;
                text-align: center;
                -webkit-box-shadow: 0px 0px 0px 3px rgba(0,0,0,0.75);
                -moz-box-shadow: 0px 0px 0px 3px rgba(0,0,0,0.75);
                box-shadow: 0px 0px 0px 3px rgba(0,0,0,0.75);
            }

            .round.round-sm {
                height: 10px;
                width: 10px;
                line-height: 10px;
                -moz-border-radius: 10px;
                border-radius: 10px;
                font-size: 0.7em;
            }

            .round.blue {
                background-color: #3EA6CE;
            }

            .round.orange {
                background-color: #FF6701;
            }

        </style>
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="../lib/html5shiv/html5shiv.js"></script>
        <script src="../lib/respond/respond.src.js"></script>
        <![endif]-->
    </head>
    <body>
        <header>
            <div class="headerpanel">
                <div class="logopanel">
                    <small style="color:#fff;margin-top:-5px;margin-left:5px;"></small>
                </div>
                <div class="headerbar">
                    <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>    
                    <div class="header-right">
                        <ul class="headermenu">              
                            <li>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-logged" data-toggle="dropdown">
                                        User<span class="caret"></span>
                                     </button>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="#"><i class="glyphicon glyphicon-log-out"></i> Log Out</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>

        <section>
            <div class="leftpanel">
                <div class="leftpanelinner">
                    <div class="media leftpanel-profile">
                        <div class="media-left"></div>
                        <div class="media-body">
                            <h4 class="media-heading">User</h4>
                            <span>User</span>
                        </div>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane active" id="mainmenu">
                            <h5 class="sidebar-title">Favorites</h5>
                            <ul class="nav nav-pills nav-stacked nav-quirk">
                                <li><a href="#" ><i class="fa fa-home"></i> <span>Dashboard</span></a></li>
                            </ul>
                            <h5 class="sidebar-title">Main Menu</h5>
                            <ul class="nav nav-pills nav-stacked nav-quirk">
                                <li class="nav-parent {{ Request::is('member/*') || Request::is('member') ? 'active' : '' }}">
                                    <a href=""><i class="fa fa-check-square"></i> <span>Members</span></a>
                                    <ul class="children">
                                        <li class="{{ Request::is('member/*') || Request::is('member') ? 'active' : '' }}"><a href="{{ url('member') }}">Members List</a></li>
                                    </ul>
                                </li>
                                <li class="nav-parent {{ Request::is('group/*') || Request::is('group') ? 'active' : '' }}">
                                    <a href=""><i class="fa fa-check-square"></i> <span>Groups</span></a>
                                    <ul class="children">
                                        <li class="{{ Request::is('group/*') || Request::is('group') ? 'active' : '' }}"><a href="{{ url('group') }}">Groups List</a></li>
                                    </ul>
                                </li>
                                <li class="nav-parent {{ Request::is('payment/*') || Request::is('payment') ? 'active' : '' }}">
                                    <a href=""><i class="fa fa-check-square"></i> <span>Payments</span></a>
                                    <ul class="children">
                                        <li class="{{ Request::is('payment/*') || Request::is('payment') ? 'active' : '' }}"><a href="{{ url('payment') }}">Search</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <h5 class="sidebar-title">Security</h5>
                            <ul class="nav nav-pills nav-stacked nav-quirk">
                                <li class="nav-parent">
                                    <a href=""><i class="fa fa-check-square"></i> <span>Password</span></a>
                                    <ul class="children">
                                        <li><a href="#">Change Password</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mainpanel">
                <div class="contentpanel">
                    @include('alert')
                    @yield('content')
                </div>
            </div>
            @yield('modal')
            @yield('footer')
        </section>
        <script src="<?php echo asset('quirk/lib/jquery/jquery.js') ?>"></script>
        <script src="<?php echo asset('quirk/lib/jquery-ui/jquery-ui.js') ?>"></script>
        <script src="<?php echo asset('quirk/lib/bootstrap/js/bootstrap.js') ?>"></script>
        <script src="<?php echo asset('quirk/lib/jquery-autosize/autosize.js') ?>"></script>
        <script src="<?php echo asset('quirk/lib/select2/select2.js') ?>"></script>
        <script src="<?php echo asset('quirk/lib/jquery-toggles/toggles.js') ?>"></script>
        <script src="<?php echo asset('quirk/lib/jquery-maskedinput/jquery.maskedinput.js') ?>"></script>
        <script src="<?php echo asset('quirk/lib/timepicker/jquery.timepicker.js') ?>"></script>
        <script src="<?php echo asset('quirk/lib/dropzone/dropzone.js') ?>"></script>
        <script src="<?php echo asset('quirk/lib/bootstrapcolorpicker/js/bootstrap-colorpicker.js') ?>"></script>
        <script src="<?php echo asset('quirk/lib/datatables/jquery.dataTables.js') ?>"></script>
        <script src="<?php echo asset('quirk/lib/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.js') ?>"></script>
        <script src="<?php echo asset('quirk/lib/select2/select2.js') ?>"></script>
        <script src="<?php echo asset('quirk/js/quirk.js') ?>"></script>
        <script type="text/javascript">
            $('#dataTable1').dataTable( {
                "order": [],
            } );

            $('.select').select2();

            $('.dt').datepicker({ 
                dateFormat: 'yy-mm-dd' 
            });
        </script>
        @yield('js')
        @stack('scripts')
    </body>
</html>
