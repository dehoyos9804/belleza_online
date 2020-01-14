<!DOCTYPE html>
<html lang="en">
    <head>        
        <!-- META SECTION -->
        <title>@yield('titulo')</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <link rel="shortcut icon" href='{{url("/admin-lte")}}/assets/images/logo2.png' type="image/x-icon">
        <!-- END META SECTION -->
        
        <!-- CSS INCLUDE -->        
        <link rel="stylesheet" type="text/css" id="theme" href='{{url("/admin-lte")}}/joli/css/theme-default.css'/> 
        <!--plugin para el reloj-->
        <link rel="stylesheet" type="text/css" href='{{url("/admin-lte")}}/misclases/css/bootstrap-clockpicker.css'>
        <!-- EOF CSS INCLUDE -->                                    
    </head>
    <body>
        <!-- START PAGE CONTAINER -->
        <div class="page-container">
            
            <!-- START PAGE SIDEBAR -->
            <div class="page-sidebar">
               @yield('menu')
            </div>
            <!-- END PAGE SIDEBAR -->
            
            <!-- PAGE CONTENT -->
            <div class="page-content">
                
                <!-- START X-NAVIGATION VERTICAL -->
                <ul class="x-navigation x-navigation-horizontal x-navigation-panel">
                    <!-- TOGGLE NAVIGATION -->
                    <li class="xn-icon-button">
                        <a href="#" class="x-navigation-minimize"><span class="fa fa-dedent"></span></a>
                    </li>
                    <!-- END TOGGLE NAVIGATION -->
                    <!-- SEARCH -->
                    <li class="xn-search">
                        <form role="form">
                            <input type="text" name="search" placeholder="Search..."/>
                        </form>
                    </li>   
                    <!-- END SEARCH -->
                    <!-- SIGN OUT -->
                    <li class="xn-icon-button pull-right">
                        <a href="#" class="mb-control" data-box="#mb-signout"><span class="fa fa-sign-out"></span></a>                        
                    </li> 
                    <!-- END SIGN OUT -->
                    <!-- MESSAGES -->
                    <li class="xn-icon-button pull-right">
                        <a href="#"><span class="fa fa-comments"></span></a>
                        <div class="informer informer-danger">4</div>
                        <div class="panel panel-primary animated zoomIn xn-drop-left xn-panel-dragging">
                            <div class="panel-heading">
                                <h3 class="panel-title"><span class="fa fa-comments"></span> Messages</h3>                                
                                <div class="pull-right">
                                    <span class="label label-danger">4 new</span>
                                </div>
                            </div>
                            <div class="panel-body list-group list-group-contacts scroll" style="height: 200px;">
                                <a href="#" class="list-group-item">
                                    <div class="list-group-status status-online"></div>
                                    <img src='{{url("/admin-lte")}}/joli/assets/images/users/user2.jpg' class="pull-left" alt="John Doe"/>
                                    <span class="contacts-title">John Doe</span>
                                    <p>Praesent placerat tellus id augue condimentum</p>
                                </a>
                                <a href="#" class="list-group-item">
                                    <div class="list-group-status status-away"></div>
                                    <img src='{{url("/admin-lte")}}/joli/assets/images/users/user2.jpg' class="pull-left" alt="Dmitry Ivaniuk"/>
                                    <span class="contacts-title">Dmitry Ivaniuk</span>
                                    <p>Donec risus sapien, sagittis et magna quis</p>
                                </a>
                                <a href="#" class="list-group-item">
                                    <div class="list-group-status status-away"></div>
                                    <img src='{{url("/admin-lte")}}/joli/assets/images/users/user3.jpg' class="pull-left" alt="Nadia Ali"/>
                                    <span class="contacts-title">Nadia Ali</span>
                                    <p>Mauris vel eros ut nunc rhoncus cursus sed</p>
                                </a>
                                <a href="#" class="list-group-item">
                                    <div class="list-group-status status-offline"></div>
                                    <img src='{{url("/admin-lte")}}/joli/assets/images/users/user6.jpg' class="pull-left" alt="Darth Vader"/>
                                    <span class="contacts-title">Darth Vader</span>
                                    <p>I want my money back!</p>
                                </a>
                            </div>     
                            <div class="panel-footer text-center">
                                <a href="pages-messages.html">Show all messages</a>
                            </div>                            
                        </div>                        
                    </li>
                    <!-- END MESSAGES -->
                    <!-- TASKS -->
                    <li class="xn-icon-button pull-right">
                        <a href="#"><span class="fa fa-tasks"></span></a>
                        <div class="informer informer-warning">3</div>
                        <div class="panel panel-primary animated zoomIn xn-drop-left xn-panel-dragging">
                            <div class="panel-heading">
                                <h3 class="panel-title"><span class="fa fa-tasks"></span> Tasks</h3>                                
                                <div class="pull-right">
                                    <span class="label label-warning">3 active</span>
                                </div>
                            </div>
                            <div class="panel-body list-group scroll" style="height: 200px;">                                
                                <a class="list-group-item" href="#">
                                    <strong>Phasellus augue arcu, elementum</strong>
                                    <div class="progress progress-small progress-striped active">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;">50%</div>
                                    </div>
                                    <small class="text-muted">John Doe, 25 Sep 2014 / 50%</small>
                                </a>
                                <a class="list-group-item" href="#">
                                    <strong>Aenean ac cursus</strong>
                                    <div class="progress progress-small progress-striped active">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">80%</div>
                                    </div>
                                    <small class="text-muted">Dmitry Ivaniuk, 24 Sep 2014 / 80%</small>
                                </a>
                                <a class="list-group-item" href="#">
                                    <strong>Lorem ipsum dolor</strong>
                                    <div class="progress progress-small progress-striped active">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%;">95%</div>
                                    </div>
                                    <small class="text-muted">John Doe, 23 Sep 2014 / 95%</small>
                                </a>
                                <a class="list-group-item" href="#">
                                    <strong>Cras suscipit ac quam at tincidunt.</strong>
                                    <div class="progress progress-small">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">100%</div>
                                    </div>
                                    <small class="text-muted">John Doe, 21 Sep 2014 /</small><small class="text-success"> Done</small>
                                </a>                                
                            </div>     
                            <div class="panel-footer text-center">
                                <a href="pages-tasks.html">Show all tasks</a>
                            </div>                            
                        </div>                        
                    </li>
                    <!-- END TASKS -->
                </ul>
                <!-- END X-NAVIGATION VERTICAL -->                     

                <!-- START BREADCRUMB -->
                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>                    
                    <li class="active">Inicio</li>
                </ul>
                <!-- END BREADCRUMB -->                       
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                    @yield('contenido')
                </div>
                <!-- END PAGE CONTENT WRAPPER -->                                
            </div>            
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->

        <!-- BLUEIMP GALLERY -->
        <div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls">
            <div class="slides"></div>
            <h3 class="title"></h3>
            <a class="prev">‹</a>
            <a class="next">›</a>
            <a class="close">×</a>
            <a class="play-pause"></a>
            <ol class="indicator"></ol>
        </div>      
        <!-- END BLUEIMP GALLERY -->

        <!--CERRAR SESION-->
        <!-- MESSAGE BOX-->
        <div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">
            <div class="mb-container">
                <div class="mb-middle">
                    <div class="mb-title"><span class="fa fa-sign-out"></span>¿Cerrar <strong>Sesion</strong> ?</div>
                    <div class="mb-content">
                        <p>¿Estás seguro de que quieres cerrar sesion?</p>                    
                        <p>Presione NO si desea continuar. Presione SÍ para cerrar sesion con el usuario actual</p>
                    </div>
                    <div class="mb-footer">
                        <div class="pull-right">
                            <a href="/" class="btn btn-success btn-lg">Si</a>
                            <button class="btn btn-default btn-lg mb-control-close">No</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MESSAGE BOX-->

        

        <!-- START PRELOADS -->
        <audio id="audio-alert" src='{{url("/admin-lte")}}/joli/audio/alert.mp3' preload="auto"></audio>
        <audio id="audio-fail" src='{{url("/admin-lte")}}/joli/audio/fail.mp3' preload="auto"></audio>
        <!-- END PRELOADS -->                  
        
    <!-- START SCRIPTS -->
        <!-- START PLUGINS -->
        <script type="text/javascript" src='{{url("/admin-lte")}}/joli/js/plugins/jquery/jquery.min.js'></script>
        <script type="text/javascript" src='{{url("/admin-lte")}}/joli/js/plugins/jquery/jquery-ui.min.js'></script>
        <script type="text/javascript" src='{{url("/admin-lte")}}/joli/js/plugins/bootstrap/bootstrap.min.js'></script>
        @stack('scripts') 
        <!-- END PLUGINS -->

        <script type="text/javascript" src='{{url("/admin-lte")}}/joli/js/demo_tables.js'></script> 
        <script type="text/javascript" src='{{url("/admin-lte")}}/joli/js/plugins/datatables/jquery.dataTables.min.js'></script>  
        
        <!-- START THIS PAGE PLUGINS-->        
        <script type='text/javascript' src='{{url("/admin-lte")}}/joli/js/plugins/icheck/icheck.min.js'></script>        
        <script type="text/javascript" src='{{url("/admin-lte")}}/joli/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js'></script>

        <script type="text/javascript" src='{{url("/admin-lte")}}/joli/js/plugins/blueimp/jquery.blueimp-gallery.min.js'></script>
        <script type="text/javascript" src='{{url("/admin-lte")}}/joli/js/plugins/dropzone/dropzone.min.js'></script>
        <script type="text/javascript" src='{{url("/admin-lte")}}/joli/js/plugins/fileinput/fileinput.min.js'></script>        
        <script type="text/javascript" src='{{url("/admin-lte")}}/joli/js/plugins/filetree/jqueryFileTree.js'></script>
        <script type="text/javascript" src='{{url("/admin-lte")}}/joli/js/plugins/icheck/icheck.min.js'></script>

        <!--<script type="text/javascript" src='{{url("/admin-lte")}}/joli/js/plugins/moment.min.js'></script>-->
        <script type="text/javascript" src='{{url("/admin-lte")}}/misclases/js/moment.min.js'></script>
        <script type="text/javascript" src='{{url("/admin-lte")}}/joli/js/plugins/fullcalendar/fullcalendar.min.js'></script>
        <script type="text/javascript" src='{{url("/admin-lte")}}/misclases/js/es.js'></script>

        <!--<script type="text/javascript" src='{{url("/admin-lte")}}/joli/js/plugins/fullcalendar/lang/es.js'></script>-->

        <script type="text/javascript" src='{{url("/admin-lte")}}/joli/js/plugins/scrolltotop/scrolltopcontrol.js'></script>
        
        <script type="text/javascript" src='{{url("/admin-lte")}}/joli/js/plugins/morris/raphael-min.js'></script>
        <script type="text/javascript" src='{{url("/admin-lte")}}/joli/js/plugins/morris/morris.min.js'></script>       
        <script type="text/javascript" src='{{url("/admin-lte")}}/joli/js/plugins/rickshaw/d3.v3.js'></script>
        <script type="text/javascript" src='{{url("/admin-lte")}}/joli/js/plugins/rickshaw/rickshaw.min.js'></script>
        <script type='text/javascript' src='{{url("/admin-lte")}}/joli/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js'></script>
        <script type='text/javascript' src='{{url("/admin-lte")}}/joli/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js'></script>                
        <script type='text/javascript' src='{{url("/admin-lte")}}/joli/js/plugins/bootstrap/bootstrap-datepicker.js'></script>                
        <script type="text/javascript" src='{{url("/admin-lte")}}/joli/js/plugins/owl/owl.carousel.min.js'></script>                 
        
        <script type="text/javascript" src='{{url("/admin-lte")}}/joli/js/plugins/moment.min.js'></script>
        <script type="text/javascript" src='{{url("/admin-lte")}}/joli/js/plugins/daterangepicker/daterangepicker.js'></script>

        <!-- END THIS PAGE PLUGINS-->        
        <!-- END THIS PAGE PLUGINS-->        

        <!-- START TEMPLATE -->
        <script type="text/javascript" src='{{url("/admin-lte")}}/joli/js/settings.js'></script>
        
        <script type="text/javascript" src='{{url("/admin-lte")}}/joli/js/plugins.js'></script>        
        <script type="text/javascript" src='{{url("/admin-lte")}}/joli/js/actions.js'></script>
        
        <script type="text/javascript" src='{{url("/admin-lte")}}/joli/js/demo_dashboard.js'></script>
        <script type="text/javascript" src='{{url("/admin-lte")}}/misclases/js/bootstrap-clockpicker.js'></script>

        <script type="text/javascript" src='{{url("/admin-lte")}}/joli/js/plugins/bootstrap/bootstrap-datepicker.js'></script>
        <script type="text/javascript" src='{{url("/admin-lte")}}/joli/js/plugins/bootstrap/bootstrap-timepicker.min.js'></script>
        <script type="text/javascript" src='{{url("/admin-lte")}}/joli/js/plugins/bootstrap/bootstrap-colorpicker.js'></script>
        <script type="text/javascript" src='{{url("/admin-lte")}}/joli/js/plugins/bootstrap/bootstrap-file-input.js'></script>
        <script type="text/javascript" src='{{url("/admin-lte")}}/joli/js/plugins/bootstrap/bootstrap-select.js'></script>
        <script type="text/javascript" src='{{url("/admin-lte")}}/joli/js/plugins/tagsinput/jquery.tagsinput.min.js'></script>

        <script type="text/javascript">
            //referencias para abrir el reloj
            $('.clockpicker').clockpicker();

        </script>
        <!-- END TEMPLATE -->

        <script>            
            document.getElementById('links').onclick = function (event) {
                event = event || window.event;
                var target = event.target || event.srcElement;
                var link = target.src ? target.parentNode : target;
                var options = {index: link, event: event,onclosed: function(){
                        setTimeout(function(){
                            $("body").css("overflow","");
                        },200);                        
                    }};
                var links = this.getElementsByTagName('a');
                blueimp.Gallery(links, options);
            };
        </script>

        <script>
            $(function(){
                $("#file-simple").fileinput({
                        showUpload: false,
                        showCaption: false,
                        browseClass: "btn btn-danger",
                        fileType: "any"
                });            
                $("#filetree").fileTree({
                    root: '/',
                    script: 'assets/filetree/jqueryFileTree.php',
                    expandSpeed: 100,
                    collapseSpeed: 100,
                    multiFolder: false                    
                }, function(file) {
                    alert(file);
                }, function(dir){
                    setTimeout(function(){
                        page_content_onresize();
                    },200);                    
                });                
            });            
        </script>
    <!-- END SCRIPTS --> 

    <!-- END SCRIPTS -->         
    </body>
</html>






