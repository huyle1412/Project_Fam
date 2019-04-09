<?php
    $url_host =$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);
?>
<section class="type-003">
    <div class="container-fluid container-bacrow">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="caption">
                        <div class="title">
                            <h5>About Us</h5>
                        </div>			
                        <div class="content">
                            Proin iaculis purus consequat sem cursus digni ssim. Donec porttitor entume suscipit. Aenean rhoncus posuere odio in tinciduis purus consequa.
                            Suscipit. Aenean rhoncus posuere odio in tincidunt litifonus libidkociums.
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="caption">
                        <div class="title">
                            <h5>Useful links</h5>
                        </div>
                        <div class="login">
                            <div class="icon">
                                <i class="fa fa-angle-right">
                                    <a href="#">Log in</a>
                                </i>

                            </div>
                        </div>
                        <div class="entries">
                            <div class="icon">
                                <i class="fa fa-angle-right">
                                    <a href="#">Entries RSS</a>
                                </i>

                            </div>
                        </div>
                        <div class="comments">
                            <div class="icon">
                                <i class="fa fa-angle-right">
                                    <a href="#">Comments RSS</a>
                                </i>
                            </div>
                        </div>
                        <div class="wordpress">
                            <div class="icon">
                                <i class="fa fa-angle-right">
                                    <a href="#">WordPress.org</a>
                                </i>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="caption">
                        <div class="title">
                            <h5>Flickr Stream</h5>
                        </div>			
                        <div class="images-list">
                            <div class="images">
                                <a href="#">
                                    <img alt="img1" src="http://<?php echo $url_path ?>/images/img-1.jpg " width="50" height="50">
                                    <img alt="img2" src="http://<?php echo $url_path ?>/images/img-2.jpg " width="50" height="50">
                                    <img alt="img3" src="http://<?php echo $url_path ?>/images/img-3.jpg " width="50" height="50">
                                    <img alt="img4" src="http://<?php echo $url_path ?>/images/img-4.jpg " width="50" height="50">
                                </a>
                            </div>
                            <div class="images">
                                <a href="#">
                                    <img alt="img5" src="http://<?php echo $url_path ?>/images/img-5.jpg " width="50" height="50">
                                    <img alt="img6" src="http://<?php echo $url_path ?>/images/img-6.jpg " width="50" height="50">
                                    <img alt="img7" src="http://<?php echo $url_path ?>/images/img-7.jpg " width="50" height="50">
                                    <img alt="img8" src="http://<?php echo $url_path ?>/images/img-8.jpg " width="50" height="50">
                                </a>
                            </div>
                            <div class="images">
                                <a href="#">
                                    <img alt="img9" src="http://<?php echo $url_path ?>/images/img-9.jpg " width="50" height="50">
                                    <img alt="img10" src="http://<?php echo $url_path ?>/images/img-10.jpg " width="50" height="50">
                                    <img alt="img11" src="http://<?php echo $url_path ?>/images/img-11.jpg " width="50" height="50">
                                    <img alt="img12" src="http://<?php echo $url_path ?>/images/img-12.jpg " width="50" height="50">
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="caption">
                        <div class="title">
                            <h5>Get in touch</h5>
                        </div>	
                        <div class="contact">
                            <div class="address">
                                <div class="fa fa-home homeicon"> 
                                    Jacky George St. 158-56,<br> EastLondon, NF1561, UK
                                </div> 
                            </div>
                            <div class="phone">
                                <div class="fa fa-phone">
                                    +460 123 456 789
                                </div>
                            </div>
                            <div class="email">
                                <div class="fa fa-envelope-o">
                                    <a href="#">
                                        hello@showcase.me
                                    </a>
                                </div>
                            </div>
                            <div class="flag">
                                <div class="fa fa-flag">
                                    <a href="#">
                                        Find us on the map
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid container-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="menu-footer">
                        <a href="">
                            Showcase © 2013
                        </a>
                    </div>
                    <div class="menu-footer">
                        <a href="#" class="note">
                            Legal Notice
                        </a>
                    </div>
                    <div class="menu-footer">
                        <a href="#" class="note">
                            Terms
                        </a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div id="text-3" class="hidden-xs">		
                        <div class="clearfix">
                            <div class="rbSocial clearfix icons">
                                <ul class="list-unstyled">
                                    <li><a href=""><i clalist-unstyledss="fa fa-twitter"></i></a></li>
                                    <li><a href=""><i class="fa fa-facebook-square"></i></a></li>
                                    <li><a href=""><i class="fa fa-dribbble"></i></a></li>
                                    <li><a href=""><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href=""><i class="fa fa-cloud"></i></a></li>
                                    <li><a href=""><i class="fa fa-feed"></i></a></li>
                                </ul>
                            </div>
                        </div> 

                    </div>
                </div>

            </div>
        </div>
    </div>
</section>