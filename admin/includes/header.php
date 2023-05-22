<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - Allsites IT</title>
        <link href="css/style.min.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
		<link href="css/bootstrap.min.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
		<!-- include summernote css/js -->
		<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
		<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    </head>
    
    <body class="sb-nav-fixed">
        <div id="layoutSidenav">
            
            <?php
            require_once 'classes/tools.php';
            $tool = new tools();
            require_once 'includes/sidebar.php'; 
            require_once 'includes/navbar-top.php'; 
            ?>

            <div id="layoutSidenav_content">
                <main>