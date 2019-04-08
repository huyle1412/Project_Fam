<?php
    $url_host =$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);
?>
<section class="type-002">
        <div class="container-fluid">
            <div class="container">
                <div class="row header">
                    <div class="col-md-4 col-sm-4 col-xs-4 what-we">
                        DANH MỤC RAU
                    </div>
                    <div class="col-xs-8 col-sm-8 col-md-8">
                        <div class="all">
                            <div id="endfalse-list" class="blocks">
                                <div class="showing">
                                    Showing
                                </div>
                                <div class="menu-left">
                                    <ul style="overflow: hidden;">
                                        <li style="display: inline-block; width: 40px;"><a class="active" href="#" data-filter="*">All</a></li>
                                        <li><a href="#" data-filter=".category-inspiration">Video</a></li>
                                        <li><a href="#" data-filter=".category-inspiration">Video</a></li>
                                        <li><a href="#" data-filter=".category-inspiration">Video</a></li>
                                        <li><a href="#" data-filter=".category-inspiration">Video</a></li>
                                        <li><a href="#" data-filter=".category-inspiration">Video</a></li>
                                        <li><a href="#" data-filter=".category-inspiration">Video</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!--1-->
                    <div class="col-md-3 col-sm-6">
                        <a href="#">
                            <div class="images">
                                <div class="img">
                                    <img class="imgStyle"  src=" http://<?php echo $url_path ?>/images/bapcai.jpg" alt="WowWay"/>
                                </div>
                                <div class="caption">
                                    <h3 class="title">Bắp cải</h3>
                                    <span>15.000đ/1kg</span>
                                    <br/>
                                    <button class="btnDatMua">Đặt mua</button>
                                </div>
                            </div>
                        </a>
                    </div><!--End 1-->
                    <!--2-->
                    <div class="col-md-3 col-sm-6">
                        <a href="#">
                            <div class="images">
                                <div class="img">
                                    <img class="imgStyle"  src=" http://<?php echo $url_path ?>/images/mong-toi.jpg " alt="WowWay"/>
                                </div>
                                <div class="caption">
                                    <h3 class="title">Mòng tơi</h3>
                                    <span>15.000đ/1kg</span>
                                    <br/>
                                    <button class="btnDatMua">Đặt mua</button>
                                </div>
                            </div>
                        </a>
                    </div><!--End 2-->
                    <!--3-->
                    <div class="col-md-3 col-sm-6">
                        <a href="#">
                            <div class="images">
                                <div class="img">
                                    <img class="imgStyle"  src=" http://<?php echo $url_path ?>/images/bap-cai-be.jpg " alt="WowWay"/>
                                </div>
                                <div class="caption">
                                    <h3 class="title">Bắp cải bẹ</h3>
                                    <span>15.000đ/1kg</span>
                                    <br/>
                                    <button class="btnDatMua">Đặt mua</button>
                                </div>
                            </div>
                        </a>
                    </div><!--End 3-->
                    <!--4-->
                    <div class="col-md-3 col-sm-6">
                        <a href="#">
                            <div class="images">
                                <div class="img">
                                    <img class="imgStyle"  src=" http://<?php echo $url_path ?>/images/rau-xa-lat.jpg " alt="WowWay"/>
                                </div>
                                <div class="caption">
                                    <h3 class="title">Rau xà lát</h3>
                                    <span>15.000đ/1kg</span>
                                    <br/>
                                    <button class="btnDatMua">Đặt mua</button>
                                </div>
                            </div>
                        </a>
                    </div><!--End 4-->
                </div><!--End row-->               
            </div> 
        </div>
    </section> 