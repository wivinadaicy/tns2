<div id = "copy" style="">
    <div class="brand-bar">
            <div class="container">
                <div class="row">
                    <div class="brand-social col-md-5 col-sm-3">
                        <ul>
                            <li class="instagram">
                                <a href="https://www.instagram.com/tnsgruppe/" target="_blank">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </li>
                            <li class="twitter">
                                <a href="https://twitter.com/tnsintergroup" target="_blank">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li class="linkedin">
                                <a href="https://www.linkedin.com/in/tirta-bambangwirawan-59707a126/" target="_blank">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </li>
                            <li class="facebook">
                                <a href="https://www.facebook.com/pages/category/Real-Estate-Agent/TS-International-Group-640885576344326/" target="_blank">
                                    <i class="fab fa-facebook"></i>
                                </a>
                            </li>
                            <li class="youtube">
                                <a href="https://www.youtube.com/channel/UClo0mUbE1YcZD9s0s7ZScEg?view_as=subscriber" target="_blank">
                                    <i class="fab fa-youtube"></i>
                                </a>
                            </li>
                        </ul>
                    </div>


                        <div class="brand-nav col-md-7 col-sm-9">
                            <ul>
                                <li class="language-menu" data-suggester="langmenu.suggester.label">
                                    <ul>                                 
                                        <li style = "cursor:pointer; color:white; margin-top:11px" onclick = "location.href = 'index.php?lang=id'"><img src='assets/img/icon/indonesia.png' style = 'width:20px; margin-right: 5px; '>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li style = "cursor:pointer; color:white; margin-top:11px" onclick = "location.href = 'index.php?lang=en'"><img src='assets/img/icon/us.png' style = 'width:20px; margin-right: 5px; '>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li style = "cursor:pointer; color:white; margin-top:11px" onclick = "location.href = 'index.php?lang=gr'"><img src='assets/img/icon/germany.png' style = 'width:20px; margin-right: 5px; '>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li style = "cursor:pointer; color:white; margin-top:11px" onclick = "location.href = 'index.php?lang=ch'"><img src='assets/img/icon/china.png' style = 'width:20px; margin-right: 5px; '>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                    </ul>
                                </li>
                                <li><a href="contact.php" ><?php echo $lang['nav6'];?></a></li>
                            </ul>
                        </div>
                </div>
            </div>
        </div>
</div>
<nav class="colorlib-nav" role="navigation" style = "background-color:white; color:#007348; position:relative; margin-top:0px">
    <div class="top-menu">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div id="colorlib-logo" style = "margin-top:0px; margin-bottom:0px; position:relative; top:0px"><a href = "index.php"><img src = "assets/img/logo.png" style = "height:50px;padding-top:0px; margin-top:0px; position:relative; top:0px;"></a></div>
                </div>
                <div class="col-md-9 text-right menu-1">
                    <ul>
                        <li class = "has-dropdown" <?php if($_SESSION["page"] == "glance"){ ?> style = "border-top:2px solid #007248" <?php } ?>>
                            <a href="index.php" style = "color:#007348; font-weight:Bolder"><?php echo $lang['nav1'];?> </a>
                            <ul class="dropdown">
                                <li><a href="vision.php" style = "color:#007348; font-weight:Bolder">Vision &amp; Mission</a></li>
                                <li><a href="values.php" style = "color:#007348; font-weight:Bolder">Our Values</a></li>
                            </ul>
                        </li>
                        <li <?php if($_SESSION["page"] == "about"){ ?> style = "border-top:2px solid #007248" <?php } ?>><a href="about.php" style = "color:#007348; font-weight:Bolder"><?php echo $lang['nav4'];?></a></li>
                        <li class="has-dropdown" <?php if($_SESSION["page"] == "discover"){ ?> style = "border-top:2px solid #007248" <?php } ?>>
                            <a href="discover.php" style = "color:#007348; font-weight:Bolder"><?php echo $lang['nav2'];?></a>
                            <ul class="dropdown">
                                <li><a href="property.php" style = "color:#007348; font-weight:Bolder"><?php echo $lang['nav2a'];?></a></li>
                                <li><a href="foundation.php" style = "color:#007348; font-weight:Bolder"><?php echo $lang['nav2b'];?></a></li>
                                <li><a href="#" style = "color:#007348; font-weight:Bolder">T&AMP;S Chemical</a></li>
                                <li><a href="#" style = "color:#007348; font-weight:Bolder">T&AMP;S Pulp</a></li>
                                <li><a href="#" style = "color:#007348; font-weight:Bolder">T&AMP;S Mining</a></li>
                                <li><a href="#" style = "color:#007348; font-weight:Bolder">T&AMP;S Resources</a></li>
                                <li><a href="#" style = "color:#007348; font-weight:Bolder">T&AMP;S Beverage &amp; Dairy</a></li>
                            </ul>
                        </li>
                        <li <?php if($_SESSION["page"] == "difference"){ ?> style = "border-top:2px solid #007248" <?php } ?>><a href="difference.php" style = "color:#007348; font-weight:Bolder"><?php echo $lang['nav3'];?></a></li>
                        <li <?php if($_SESSION["page"] == "career"){ ?> style = "border-top:2px solid #007248" <?php } ?>><a href="career.php" style = "color:#007348; font-weight:Bolder"><?php echo $lang['nav5'];?></a></li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>