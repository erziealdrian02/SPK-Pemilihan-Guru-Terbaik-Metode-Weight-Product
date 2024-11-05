<?php
session_start();
if ($_SESSION['stat'] != 'masuk') {
    echo "<script>alert('anda belum login')</script>";
    header("location:index.php?id=out");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Sistem Pendukung Keputusan</title>
    <link rel="stylesheet" href="./css/style.css" />
</head>

<body>
    <!-- partial:index.partial.html -->
    <!DOCTYPE html>
    <!--[if lt IE 7]><html class="ie ie6" lang="en"> <![endif]-->
    <!--[if IE 7]><html class="ie ie7" lang="en"> <![endif]-->
    <!--[if IE 8]><html class="ie ie8" lang="en"> <![endif]-->
    <!--[if (gte IE 9)|!(IE)]><!-->
    <html lang="en">
    <!--<![endif]-->

    <head>
        <!-- Le Basic Page Needs ================================================== -->
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />

        <script type="text/javascript">
            var host = "bootadmin.org";
            if (
                host == window.location.host &&
                window.location.protocol != "https:"
            )
                window.location.protocol = "https";
        </script>

        <!-- Le Meta Data -->
        <meta content="Bootadmin" property="og:site_name" />
        <meta content="Bootadmin" property="og:title" />
        <meta content="website" property="og:type" />
        <meta content="Bootadmin is an open source bootstrap admin panel." property="og:description" />
        <meta name="keywords" content="bootstrap, admin, theme, panel, administration, material" />

        <meta content="/images/logo.png" property="og:image" />
        <meta name="twitter:card" content="summary" />
        <meta name="twitter:site" content="@iamshipon1988" />
        <meta name="twitter:creator" content="@iamshipon1988" />

        <meta name="twitter:title" content="Bootadmin" />

        <meta name="twitter:description" content="An opensource bootstrap admin panel." />

        <!-- Le App Banner Data -->
        <meta name="apple-itunes-app" content="app-id=1245521413" />
        <!--<meta name="apple-itunes-app" content="app-id=1245521413, affiliate-data=myAffiliateData, app-argument=myURL">-->

        <!-- Le Mobile Specific Metas
    ================================================== -->
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <!-- Le CSS
    ================================================== -->
        <link rel="stylesheet" href="https://bootadmin.org/style/vendor/library.min.css" />
        <link rel="stylesheet" href="./css/jquery-ui.min.css" />
        <link rel="stylesheet" href="./css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous" />

        <link rel="stylesheet" href="./css/style.min.css" />

        <!-- Le IE Conditionals
    ================================================== -->
        <!--[if lt IE 9]>
               <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
            <![endif]-->

        <!-- Le Javascript Pre-loads
    ================================================== -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <!-- Le Page Specific Codes
    ================================================== -->

        <!-- Le Favicons
	================================================== -->
        <link rel="apple-touch-icon" sizes="76x76" href="/images/favicon/apple-touch-icon.png" />
        <link rel="icon" type="image/png" sizes="32x32" href="/images/favicon/favicon-32x32.png" />
        <link rel="icon" type="image/png" sizes="16x16" href="/images/favicon/favicon-16x16.png" />
        <link rel="manifest" href="/images/favicon/site.webmanifest" />
        <link rel="mask-icon" href="/images/favicon/safari-pinned-tab.svg" color="#5bbad5" />
        <link rel="shortcut icon" href="/images/favicon/favicon.ico" />
        <meta name="msapplication-TileColor" content="#2d89ef" />
        <meta name="msapplication-config" content="/images/favicon/browserconfig.xml" />
        <meta name="theme-color" content="#ffffff" />
    </head>