<?php
    $url_host =$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-004">
    <div class="container">
        <div class="row header-top-line">
            <div class="col-md-12">
                <div class="pull-left">
                    <div id="rb_email_widget-3" class="widget ">
                        <a  href="mailto:hello@rubenbristian.com">
                            <i class="fa fa-envelope"></i>huylele1997@gmail.com</a>
                    </div>
                    <div id="rb_phone_widget-3" class="widget hidden-xs">
                        <a href="">
                            <i class="fa fa-phone"></i>+84367506054
                        </a>
                    </div>
                </div>
                <div class="pull-right">
                    <div id="text-3" class="widget hidden-xs">      
                        <div class="clearfix">
                            <div class="clearfix icons">
                                <ul class="list-unstyled">
                                    <li><a href=""><i class="fa fa-twitter"></i></a></li>
                                    <li><a href=""><i class="fa fa-facebook-square"></i></a></li>
                                    <li><a href=""><i class="fa fa-dribbble"></i></a></li>
                                    <li><a href=""><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href=""><i class="fa fa-cloud"></i></a></li>
                                    <li><a href=""><i class="fa fa-feed"></i></a></li>
                                </ul>
                            </div>
                        </div> 
                    </div>
                    <form class="navbar-form widget" role="search" id="searchform">
                        <div class="input-group">
                            <input class="form-control" placeholder="Search for..." name="s" id="s" type="text">
                            <div class="input-group-btn">
                                <button class="btn btn-default" id="searchsubmit" type="submit"><i class="glyphicon glyphicon-search iconsearch"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>                  
    </div> 
</div>