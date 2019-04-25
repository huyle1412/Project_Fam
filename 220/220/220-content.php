<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-220">
    <div class="header">
        <header id="lms_header">
            <!--Header top-->
            <div class="lms_header_top">
                <div class="container">
                    <div class="row">
                        <div class="top-header">
                            <div class="col-md-4 col-sm-4 col-xs-4">
                                <div class="lms_any_que_wrapper">
                                    <a>My Account</a>
                                    <a>Wish</a>
                                    <a>Checkout</a>                                    
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-4">
                                <div class="logo">
                                    <img src="<?php echo $url_path ?>/images/rapha.png" alt=""/>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <div class="lms_login_wrapper">
                                    <ul>
                                        <li><a href="#/" title="USD">USD<i class="fa fa-angle-down"></i></a></li>
                                        <li><a href="#/" title="Card"><i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                <span id="#">0</span>
                                            </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <!--Menu-->
            <div class="navbar-wrapper">
                <nav class="navbar navbar-fixed-top">
                    <div class="container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div id="navbar" class="navbar-collapse collapse">
                            <ul class="nav navbar-nav">
                                <li class="active"><a href="#" class="">Home</a></li>
                                <li class=" dropdown">
                                    <a href="#" class="dropdown-toggle " data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Product<span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Add New</a></li>
                                    </ul>
                                </li>
                                <li class=" dropdown"><a href="#" class="dropdown-toggle " data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Blogs<span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Team</a></li>
                                    </ul>
                                </li>
                                <li class=" dropdown"><a href="#" class="dropdown-toggle " data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages<span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Team</a></li>
                                        <li><a href="#">Team Single</a></li>
                                        <li><a href="#">Services</a></li>
                                        <li><a href="#">Careers</a></li>
                                    </ul>
                                </li>
                                <li class=" dropdown"><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About<span class="caret"></span></a>
                                </li>
                                <li class=" down"><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Contact US <span class="caret"></span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
            <!--End Menu-->

        </header>              
    </div>
</div>