<!-- dipakai sesuai kebutuhan -->
<?php
switch($_GET["id"]){
    case 1:{
        $_SESSION["img"] = "tirta.jpeg";
        $_SESSION["nama"] = "Tirta B. Wirawan";
        $_SESSION["about"] = $lang['tirtaabout'];
        $_SESSION["experience"] = "";
        $_SESSION["more_exp"] = "";
        $_SESSION["experience2"] = "";
        $_SESSION["more_exp2"] ="";
        $_SESSION["speaker"] = "";
    }
        break;
    case 2: {
        $_SESSION["img"] = "sherinaProfile.jpg";
        $_SESSION["nama"] = "Sherina Salamon";
        $_SESSION["about"] = $lang['sheriabout'];
        $_SESSION["experience"] = $lang['sheriexp'];
        $_SESSION["more_exp"] = "";
        $_SESSION["title_exp2"] = $lang['sherititexp2'];
        $_SESSION["experience2"] = $lang['sheriex2'];
        $_SESSION["more_exp2"] ="";
        $_SESSION["speaker"] = "";
    }
        break;
    case 3:{
        $_SESSION["img"] = "paulusProfile.jpg";
        $_SESSION["nama"] = "Paulus B. Wirawan ";
        $_SESSION["about"] = $lang['paulabout'];
        $_SESSION["experience"] = $lang['paulexp'];
        $_SESSION["more_exp"] = $lang['paulmoreexp'];
        $_SESSION["title_exp2"] = $lang['paultitexp2'];
        $_SESSION["experience2"] = $lang['paulexp2'];
        $_SESSION["more_exp2"] = $lang['paulmorexp2'];
        $_SESSION["speaker"] = $lang['paulspeak'];
        $_SESSION["more_speaker"] = $lang['paulmorespeak'];
        $_SESSION["software"] =$lang['paulsoftware'];
        $_SESSION["more_software"] = $lang['paulmoresoft'];
        $_SESSION["books"] = $lang['paulbook'];
        $_SESSION["more_books"]=$lang['paulmorebook'];
    }
        break;
    default:{
        $_SESSION["nama"] = "Tirta B. Wirawan";
        $_SESSION["about"] = "Abc";
        $_SESSION["experience"] = "";
        $_SESSION["more_exp"] = "";
        $_SESSION["experience2"] = "";
        $_SESSION["more_exp2"] ="";
    }
        break;
}
?>
<section id="home" class="video-hero" style="height: 500px; background-image: url(assets/img/cover_img_1.jpg);  background-size:cover; background-position: center center;background-attachment:fixed;" data-section="home">
<div class="overlay"></div>
    <div class="display-t display-t2 text-center">
        <div class="display-tc display-tc2">
            <div class="container">
                <div class="col-md-12 col-md-offset-0">
                    <div class="animate-box">
                        <h2><span style = "font-weight:100;color:#007748"><?php echo $lang['people'];?></span></h2>
                        <p class="breadcrumbs"><span><a href="index.php" style = "color:#007748"><?php echo $lang['home'];?></a></span><span><a href="about.php" style = "color:#007748"><?php echo $lang['aboutus'];?></a></span><span style = "color:#007748"><strong><?php echo $_SESSION["nama"];?></strong></span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>