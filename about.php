<?php session_start(); $_SESSION["page"] = "about";?>
<?php include('configlang.php');?>
<?php include('req/head.php'); ?>
<?php include('req/nav.php'); ?>
<?php include('aboutus/page-info.php'); ?>
<!-- content -->
<?php include('req/content-open.php');?>
<?php include('aboutus/index.php');?>
<?php include('req/content-close.php'); ?>
<!-- end content-->
<?php include('req/footer.php'); ?>
<?php include('req/web-close.php'); ?>
<?php include('req/script.php'); ?>