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
                        <li><a href="contact.php"><?php echo $lang['nav6'];?></a></li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>