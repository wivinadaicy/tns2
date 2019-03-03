
<div class="row row-pb-lg" style = "margin-top:50px">
    <div class="col-md-6 animate-box">
        <div class="col-lg-12">
            <img src = "assets/img/<?php echo $_SESSION["img"];?>" style = "width:100%">
        </div>
    </div>
    <div class="col-md-6 animate-box">
        <h2><?php echo $_SESSION["nama"];?></h2>
        <p style ="text-align: justify; text-align-last: left;"><?php echo $_SESSION["about"];?></p>
    </div>
</div>
<?php if($_SESSION["experience"] != ""){ ?>
    

<div class="row">
    <div class="col-md-12">
        <div class="work-flex">
            <div class="half animate-box">
                <div class="row no-gutters">
                    <div class="col-md-12 col-md-push-12 no-gutters">
                        <a href="#" class="work-img" style="background-image: url(assets/img/work-1.jpg); background-size:cover"></a>
                    </div>
                </div>
            </div>
            <div class="half animate-box">
                <div class="row no-gutters">
                    <div class="col-md-12 col-md-pull-12 no-gutters">
                        <div class="display-t desc col-lg-12">
                            <div class="display-tc" style = "font-size:15px">
                                <h2><a href="#"><?php echo $lang['exp'];?></a></h2>
                                <p><?php echo $_SESSION["experience"];?></p>
                                
                                <?php if($_SESSION["more_exp"] != ""){ ?><button type="button" class="btn btn-danger mb-1" data-toggle="modal" data-target="#mediumModal"><?php echo $lang['expm'];?></button> <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-12">
        <div class="work-flex">
            <div class="half animate-box">
                <div class="row no-gutters">
                    <div class="col-md-12 no-gutters">
                        <a href="#" class="work-img" style="background-image: url(assets/img/work-2.jpg); background-size:cover"></a>
                    </div>
                </div>
            </div>
            <div class="half animate-box">
                <div class="row no-gutters">
                    <div class="col-md-12 no-gutters col-lg-12">
                        <div class="display-t desc col-lg-12">
                            <div class="display-tc">
                                <h2><a href="#"><?php echo $_SESSION["title_exp2"];?></a></h2>
                                <p><?php echo $_SESSION["experience2"];?></p>
                                <?php if($_SESSION["more_exp2"] != ""){ ?><button type="button" class="btn btn-danger mb-1" data-toggle="modal" data-target="#mediumModal2"><?php echo $lang['expm'];?></button> <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php if($_SESSION["speaker"] != ""){?> 
    <div class="col-md-12">
        <div class="work-flex">
            <div class="half animate-box">
                <div class="row no-gutters">
                    <div class="col-md-12 col-md-push-12 no-gutters">
                        <a href="#" class="work-img" style="background-image: url(assets/img/work-3.jpg); background-size:cover"></a>
                    </div>
                </div>
            </div>
            <div class="half animate-box">
                <div class="row no-gutters">
                    <div class="col-md-12 col-md-pull-12 no-gutters">
                        <div class="display-t desc col-lg-12">
                            <div class="display-tc" style = "font-size:15px">
                                <h2><a href="#">Speaker</a></h2>
                                <p><?php echo $_SESSION["speaker"];?></p>
                                
                                <?php if($_SESSION["more_speaker"] != ""){ ?><button type="button" class="btn btn-danger mb-1" data-toggle="modal" data-target="#mediumModal3"><?php echo $lang['expm'];?></button> <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="col-md-12">
        <div class="work-flex">
            <div class="half animate-box">
                <div class="row no-gutters">
                    <div class="col-md-12 no-gutters">
                        <a href="#" class="work-img" style="background-image: url(assets/img/work-4.jpg);"></a>
                    </div>
                </div>
            </div>
            <div class="half animate-box">
                <div class="row no-gutters">
                    <div class="col-md-12 no-gutters">
                        <div class="display-t desc col-lg-12">
                            <div class="display-tc">
                                <h2><a href="#"><?php echo $lang['softdev'];?></a></h2>
                                <p><?php echo $_SESSION["software"];?></p>
                                <?php if($_SESSION["more_software"] != ""){ ?><button type="button" class="btn btn-danger mb-1" data-toggle="modal" data-target="#mediumModal4"><?php echo $lang['expm'];?></button> <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-md-12">
        <div class="work-flex">
            <div class="half animate-box">
                <div class="row no-gutters">
                    <div class="col-md-12 col-md-push-12 no-gutters">
                        <a href="#" class="work-img" style="background-image: url(assets/img/work-5.jpg);"></a>
                    </div>
                </div>
            </div>
            <div class="half animate-box">
                <div class="row no-gutters">
                    <div class="col-md-12 col-md-pull-12 no-gutters">
                        <div class="display-t desc col-lg-12">
                            <div class="display-tc" style = "font-size:15px">
                                <h2><a href="#"><?php echo $lang['writb'];?></a></h2>
                                <p><?php echo $_SESSION["books"];?></p>
                                
                                <?php if($_SESSION["more_books"] != ""){ ?><button type="button" class="btn btn-danger mb-1" data-toggle="modal" data-target="#mediumModal5"><?php echo $lang['expm'];?></button> <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php } ?>
</div>
<div class="modal fade" id="mediumModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="mediumModalLabel"><?php echo $lang['morexp'];?></h5>
            </div>
            <form action = "#" method="post">
                <div class="modal-body" style = "font-size:15px">
                    <?php echo $_SESSION["more_exp"];?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo $lang['close'];?></button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="mediumModal2" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="mediumModalLabel"><?php echo $lang['more'];?> <?php echo $_SESSION["title_exp2"];?></h5>
            </div>
            <form action = "#" method="post">
                <div class="modal-body" style = "font-size:15px">
                    <?php echo $_SESSION["more_exp2"];?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo $lang['close'];?></button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="mediumModal3" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel3" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="mediumModalLabel"><?php echo $lang['moresp'];?></h5>
            </div>
            <form action = "#" method="post">
                <div class="modal-body" style = "font-size:15px">
                    <?php echo $_SESSION["more_speaker"];?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo $lang['close'];?></button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="mediumModal4" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel3" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="mediumModalLabel"><?php echo $lang['moresoftdev'];?></h5>
            </div>
            <form action = "#" method="post">
                <div class="modal-body" style = "font-size:15px">
                    <?php echo $_SESSION["more_software"];?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo $lang['close'];?></button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="mediumModal5" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="mediumModalLabel"><?php echo $lang['morewrit'];?></h5>
            </div>
            <form action = "#" method="post">
                <div class="modal-body" style = "font-size:15px">
                    <?php echo $_SESSION["more_books"];?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo $lang['close'];?></button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php } ?>