<div style="position:relative; height:40px; background-color: green"><div class="brand-bar">
            <div class="container">
                <div class="row">
                    <div class="brand-social col-md-5 col-sm-3">
                        <ul>
                            <li class="instagram">
                                <a href="https://instagram.com/bnpparibas/" target="_blank">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </li>
                            <li class="twitter">
                                <a href="https://twitter.com/BNPParibas" target="_blank">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li class="linkedin">
                                <a href="https://www.linkedin.com/company/bnp-paribas" target="_blank">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </li>
                            <li class="youtube">
                                <a href="https://www.youtube.com/user/BNPParibas" target="_blank">
                                    <i class="fab fa-youtube"></i>
                                </a>
                            </li>
                        </ul>
                    </div>


                        <div class="brand-nav col-md-7 col-sm-9">
                            <ul>
                                <li class="language-menu" data-suggester="langmenu.suggester.label">
                                    <ul>                                 
                                        <li><a href="/" title="Display the page in french" data-lang="FR">EN</a></li>
                                        <li class="active"><span>ID</span></li>
                                        <li><a href="/">EN</a></li>
                                        <li><a href="/">EN</a></li>
                                    </ul>
                                </li>
                                <li><a href="/en/contacts"><?php echo $lang['nav6'];?></a></li>
                            </ul>
                        </div>
                </div>
            </div>
        </div></div>
<nav class="colorlib-nav" role="navigation">
    <div class="top-menu">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div id="colorlib-logo"><a href="index.php">T&amp;S INTERNATIONAL</a></div>
                </div>
                <div class="col-md-9 text-right menu-1">
                    <ul>
                        <li class="has-dropdown">
                            <a href="#"><img src='assets/img/icon/<?php echo $_SESSION['lang_img'];?>' style = 'width:20px; margin-right: 10px'></a>
                            <ul class="dropdown">
                                <li style = "cursor:pointer" onclick = "location.href = 'index.php?lang=id'"><img src='assets/img/icon/indonesia.png' style = 'width:20px; margin-right: 10px'>ID</li>
                                <li style = "cursor:pointer" onclick = "location.href = 'index.php?lang=en'"><img src='assets/img/icon/us.png' style = 'width:20px; margin-right: 10px'>EN</li>
                                <li style = "cursor:pointer" onclick = "location.href = 'index.php?lang=gr'"><img src='assets/img/icon/germany.png' style = 'width:20px; margin-right: 10px'>DE</li>
                                <li style = "cursor:pointer" onclick = "location.href = 'index.php?lang=ch'"><img src='assets/img/icon/china.png' style = 'width:20px; margin-right: 10px'>CH</li>
                            </ul>
                        </li>
                        <li><a href="index.php"><?php echo $lang['nav1'];?> </a></li>
                        <li class="has-dropdown">
                            <a href="discover.php"><?php echo $lang['nav2'];?></a>
                            <ul class="dropdown">
                                <li><a href="property.php"><?php echo $lang['nav2a'];?></a></li>
                                <li><a href="foundation.php"><?php echo $lang['nav2b'];?></a></li>
                            </ul>
                        </li>
                        <li><a href="difference.php"><?php echo $lang['nav3'];?></a></li>
                        <li><a href="about.php"><?php echo $lang['nav4'];?></a></li>
                        <li><a href="career.php"><?php echo $lang['nav5'];?></a></li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>