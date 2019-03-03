<div class="row">
    <div class="col-md-12">
        <div class="work-flex">
            <div class="half animate-box">
                <div class="row no-gutters">
                    <div class="col-md-12 col-md-push-12 no-gutters">
                        <a href="#" class="work-img" style="background-image: url(assets/img/work-1.jpg);"></a>
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
                        <a href="#" class="work-img" style="background-image: url(assets/img/work-2.jpg);"></a>
                    </div>
                </div>
            </div>
            <div class="half animate-box">
                <div class="row no-gutters">
                    <div class="col-md-12 no-gutters">
                        <div class="display-t desc">
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
    <div class="col-md-12">
        <div class="work-flex">
            <div class="half animate-box">
                <div class="row no-gutters">
                    <div class="col-md-12 col-md-push-12 no-gutters">
                        <a href="#" class="work-img" style="background-image: url(assets/img/work-3.jpg);"></a>
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
</div>
