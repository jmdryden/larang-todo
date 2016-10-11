<!DOCTYPE html SYSTEM "about:legacy-compat">
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <meta content="IE=edge" http-equiv="X-UA-Compatible"/>
        <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
        <title>Laravel 5 | The University of New Mexico</title>        
        <link href="//webcore.unm.edu/v1/images/unm.ico" rel="shortcut icon"/>
        <link href="//webcore.unm.edu/dev/css/unm-styles.min.css" rel="stylesheet"/>
        <link href="../css/site-styles.css" media="screen" rel="stylesheet" type="text/css"/>
        <script src="../js/unm-scripts.min.js" type="text/javascript"></script>        
        <!-- Site Meta - put site specific css, javascript, etc. here-->
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
            <script src="//webcore.unm.edu/v2/js/html5shiv.min.js"></script>
            <script src="//webcore.unm.edu/v2/js/respond.min.js"></script>
            <link href="//webcore.unm.edu/v2/js/respond-proxy.html" id="respond-proxy" rel="respond-proxy" />
            <link href="../js/respond.proxy.gif" id="respond-redirect" rel="respond-redirect" />
            <script src="../js/respond.proxy.js"></script>
        <![endif]-->
        
        <!-- Angular libraries -->
        <script src="//code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
	<script type="text/javascript" src="//code.angularjs.org/1.5.7/angular.min.js"></script>
	<script type="text/javascript" src="//code.angularjs.org/1.5.7/angular-route.min.js"></script>
	<script type="text/javascript" src="//code.angularjs.org/1.5.8/angular-animate.min.js"></script>
	<script type="text/javascript" src="../js/libraries/ui-bootstrap-tpls-2.0.0.min.js"></script>
        <!-- toaster animations -->
        <script src="https://npmcdn.com/angular-toastr/dist/angular-toastr.tpls.js"></script>
	<link rel="stylesheet" href="https://npmcdn.com/angular-toastr/dist/angular-toastr.css" />
        
        <link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" type="text/css" href="../css/helpers.css">
	<script type="text/javascript" src="../js/index.js"></script>
	<script type="text/javascript" src="../js/services/todoService.js"></script>
	<script type="text/javascript" src="../js/mainRoutes.js"></script>
	<script type="text/javascript" src="../js/mainApp.js"></script>
        <script type="text/javascript" src="../js/services/breadcrumbs.js"></script>
        <!-- end Angular scripts -->

    </head>
    
    <!-- <body id="home">  -->
    <body ng-app="mainApp"> 

        <!-- container to hold menus on collapse -->
        <a accesskey="2" class="sr-only sr-only-focusable skip2content" href="#main">Skip to main content</a>
        <div class="nav-wrapper" id="offcanvas">
            <div class="navbar-header">
                <button class="menu-toggle navbar-toggle collapsed" data-target="#mobile-menu .navbar-collapse" data-toggle="collapse" type="button"><span class="sr-only">Toggle navigation</span><span class="fa fa-reorder fa-2x"></span></button>
                <div id="mobile-menu">
                    <div class="text-center visible-xs-block" id="mobile-toolbar">
                        <ul aria-label="..." class="list-unstyled btn-group" role="group">
                            <li class="btn btn-default"><a href="http://directory.unm.edu/departments/" title="UNM A to Z">UNM A-Z</a></li>
                            <li class="btn btn-default"><a href="http://search.unm.edu" title="Search"><span class="fa fa-search"></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div id="page"><!-- start nav -->
            <div class="navbar navbar-unm">
                <div class="container">
                    <a class="navbar-brand" href="http://www.unm.edu">The University of New Mexico</a><!-- search form -->
                    <form action="//search.unm.edu/search" class="pull-right hidden-xs" id="unm_search_form" method="get">
                        <div class="input-append search-query">
                            <input accesskey="4" id="unm_search_form_q" maxlength="255" name="q" placeholder="Search" title="input search query here" type="text"/>
                            <button accesskey="s" class="btn" id="unm_search_for_submit" name="submit" title="submit search" type="submit"><span class="fa fa-search"></span></button>
                        </div>
                    </form><!-- end search form -->
                    <ul class="nav navbar-nav navbar-right hidden-xs" id="toolbar-nav">
                        <li><a href="http://directory.unm.edu/departments/" title="UNM A to Z">UNM A-Z</a></li>
                        <li><a href="https://my.unm.edu" title="myUNM">myUNM</a></li>                        
                        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Help <span class="caret"></span></a>
                            <ul class="dropdown-menu"><li><a href="http://studentinfo.unm.edu" title="StudentInfo">StudentInfo</a></li>
                                <li><a href="http://fastinfo.unm.edu" title="FastInfo">FastInfo</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div><!-- end  nav -->
            
            <div id="header">
                <div class="container"><a href="http://demo.unm.edu"><h1>WAMS Laravel 5.2 Angular Skeleton</h1></a></div>
            </div>
            <div id="hero"></div>
            <div id="nav">
                <div class="container">
                    <div class="navbar navbar-top" id="horiz-nav">
                        <nav class="navbar-collapse collapse" id="horz-nav" role="navigation">
                            <ul class="nav navbar-nav" role="menubar">
                                
                                <li><a class=" active" href="#" title="Home">Home</a></li>
                                <li class="dropdown"><a aria-haspopup="true" class="dropdown-toggle" data-toggle="dropdown" href="how-tos/login--overview.html">How To's<span class="caret">&#160;</span></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="how-tos/login--overview.html" title="How To's - Login &amp; Overview">Login &amp; Overview</a></li>
                                        <li class="dropdown-submenu"><a aria-haspopup="true" class="dropdown-toggle" data-toggle="dropdown" href="how-tos/pages/index.html">Pages</a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="how-tos/pages/index.html" title="Pages - Create a Page">Create a Page</a></li>
                                                <li><a href="how-tos/pages/edit-a-page.html" title="Pages - Edit a Page">Edit a Page</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="how-tos/create-a-folder.html" title="How To's - Create a Folder">Create a Folder</a></li>                                    
                                        <li><a href="how-tos/external-link.html" title="How To's - External Link">External Link</a></li>
                                        <li class="dropdown-submenu"><a aria-haspopup="true" class="dropdown-toggle" data-toggle="dropdown" href="how-tos/content-blocks/index.html">Content Blocks</a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="how-tos/content-blocks/index.html" title="Content Blocks - Create a Content Block">Create a Content Block</a></li>                                            
                                                <li><a href="how-tos/content-blocks/adding-a-content-block-configuration-set.html" title="Content Blocks - Add a Content Block to Config Set">Add a Content Block to Config Set</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown-submenu"><a aria-haspopup="true" class="dropdown-toggle" data-toggle="dropdown" href="how-tos/publishing/index.html">Publishing</a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="how-tos/publishing/setup-publishing.html" title="Publishing - Setup Publishing">Setup Publishing</a></li>                                            
                                                <li><a href="how-tos/publishing/scheduled-publishing.html" title="Publishing - Scheduled Publishing">Scheduled Publishing</a></li>
                                            </ul>
                                        </li>                                    
                                    </ul>
                                </li>
                                <li class="dropdown"><a aria-haspopup="true" class="dropdown-toggle" data-toggle="dropdown" href="template-guide/site-structure.html">Template Guide<span class="caret">&#160;</span></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="template-guide/site-structure.html" title="Template Guide - Site Structure">Site Structure</a></li>                                 
                                        <li><a href="template-guide/page-level-css.html" title="Template Guide - Page Level CSS">Page Level CSS</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#about">About</a></li>                            
                            </ul>
                        </nav>
                    </div>
                </div><!-- container -->
            </div> <!-- nav -->
            <div id="upper">
                <div class="container"><!--UPPER--></div>                
            </div>
            
            <div id="breadcrumbs"> <!-- V2 breadcrumb -->
                <div class="container">
                    <ul class="breadcrumb hidden-xs" id="unm_breadcrumbs">                        
                        <li class="unm_home"><a href="http://www.unm.edu">UNM</a></li>                        
                        <li>Home</li>                        
                    </ul>
                </div>
            </div>            
            
            <div> <!-- new angular breadcrumb -->            
                <ul class="breadcrumb">
                    <li ng-repeat="breadcrumb in breadcrumbs.getAll()">
                      <span class="divider">/</span>
                      <ng-switch on="$last">
                        <span ng-switch-when="true">{{breadcrumb.name}}</span>
                        <span ng-switch-default><a href="{{breadcrumb.path}}">{{breadcrumb.name}}</a></span>
                       </ng-switch>
                    </li>
               </ul>
            </div>
            
            <div id="main">
                <div class="container layout" id="cs">
                    <div class="row">
                        <div id="primary">
                            <div class="alert alert-danger"><p class="lead">Hola world! Starter Site using Laravel 5.2 and AngularJS.</p></div>
                            <p>Congratulations, you've downloaded the Laravel 5.2 Angular Skeleton.</p>
                            
                            <!-- Inject Angular Views -->
                            <ng-view></ng-view>
                            
                            <hr/>
                            <div class="row">
                                <div class="col-md-6 unm-cherry"><h2>How To's</h2>
                                    <p>Quick step by step guides to complete common Cascade tasks.</p>
                                    <p><a class="btn btn-default" href="how-tos/index.html">See a list of How To's</a></p>
                                </div>                                                                
                                <div class="col-md-6 unm-green">
                                    <h2>Template Guide</h2>
                                    <p>An overview of the features and functions of the V2 template.</p>
                                    <p><a class="btn btn-primary" href="template-guide/index.html">View the Template Guide Overview</a></p>
                                </div>
                            </div>
                        </div>
                        <div id="secondary"><!-- secondary right side column -->
                            <div class="well">
                                <h2>V2 Information</h2>
                                <ul>
                                    <li><a href="https://github.com/unmweb/V2-Template-Assets">V2 Template Assets</a>&#160;- (css, js, fonts, etc.)</li>
                                    <li><a href="https://github.com/unmweb/V2-Template-Formats">V2 Template Formats</a>&#160;- (xslt files)</li>
                                </ul>
                                <h3>Components</h3>
                                <ul>
                                    <li><a href="http://getbootstrap.com/">Bootstrap</a>&#160;- 3.3.4</li>
                                    <li><a href="http://jquery.com/">JQuery</a>&#160;- 1.11.3</li>
                                    <li><a href="http://fortawesome.github.io/Font-Awesome/">Font Awesome</a> - 4.3.0</li>
                                    <li><a href="https://github.com/mrkelly/lato">Lato</a> - 0.3.0</li>
                                </ul>
                            </div><!-- content block -->
                        </div>
                        <div id="tertiary"><div class="well"><h2>Tertiary column with a well</h2></div></div>

                    </div>

                </div>

            </div>
            <div id="lower">
                <div class="container"><!--LOWER--></div>

            </div>
            <div id="footer">
                <div class="container">
                    <hr/>
                    <div class="row">
                        <div class="col-md-8"><p><a href="http://www.unm.edu"><img alt="The University of New Mexico" src="https://webcore.unm.edu/v2/images/unm-transparent-white.png"/></a></p><p><small>&#169; The University of New Mexico<br/> Albuquerque, NM 87131, (505) 277-0111<br/> New Mexico's Flagship University</small></p></div>
                        <div class="col-md-4"><ul class="list-inline"><li><a href="https://www.facebook.com/universityofnewmexico" title="UNM on Facebook"><span class="fa fa-facebook-square fa-2x"><span class="sr-only">UNM on Facebook</span></span></a></li><li><a href="http://instagram.com/uofnm" title="UNM on Instagram"><span class="fa fa-instagram fa-2x"><span class="sr-only">UNM on Instagram</span></span></a></li><li><a href="https://twitter.com/unm" title="UNM on Twitter"><span class="fa fa-twitter-square fa-2x"><span class="sr-only">UNM on Twitter</span></span></a></li><li><a href="http://uofnm.tumblr.com" title="UNM on Tumblr"><span class="fa fa-tumblr-square fa-2x"><span class="sr-only">UNM on Tumblr</span></span></a></li><li><a href="http://www.youtube.com/user/unmlive" title="UNM on YouTube"><span class="fa fa-youtube-square fa-2x"><span class="sr-only">UNM on YouTube</span></span></a></li></ul><p>more at <a href="http://social.unm.edu" title="UNM Social Media Directory &amp; Information">social.unm.edu</a></p><ul class="list-inline" id="unm_footer_links"><li><a href="http://www.unm.edu/accessibility.html">Accessibility</a></li><li><a href="http://www.unm.edu/legal.html">Legal</a></li><li><a href="http://www.unm.edu/contactunm.html">Contact UNM</a></li><li><a href="http://nmhedss2.state.nm.us/Dashboard/index.aspx?ID=21">New Mexico Higher Education Dashboard</a></li></ul></div>
                    </div>
                </div>
            </div>
        </div>
        <div id="totop">
            <span class="fa fa-arrow-circle-up"></span>
        </div>
    
    </body>
</html>