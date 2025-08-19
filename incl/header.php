    <head>

        <?php 

        $HTTP_or_HTTPS = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS']!=='off') || $_SERVER['SERVER_PORT']==443) ? 'https://':'http://';
        if ($HTTP_or_HTTPS == 'http://') { header('Location: https://csiap.lk'); }

        ?>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
        <link rel="manifest" href="site.webmanifest">

        <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="../../assets/css/animate.min.css">
        <link rel="stylesheet" href="../../assets/css/fontawesome.min.css">
        <link rel="stylesheet" href="../../assets/css/flaticon.css">
        <link rel="stylesheet" href="../../assets/css/magnific-popup.min.css">
        <link rel="stylesheet" href="../../assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="../../assets/css/imagelightbox.min.css">
        <link rel="stylesheet" href="../../assets/css/nice-select.min.css">
        <link rel="stylesheet" href="../../assets/css/meanmenu.css">
        <link rel="stylesheet" href="../../assets/css/odometer.min.css">
        <link rel="stylesheet" href="../../assets/css/style.css">
        <link rel="stylesheet" href="../../assets/css/responsive.css">

        <meta name="google-site-verification" content="p1l_giMe92098TFVTxNiXBKaZG_sk1kqlfVOaO1LEao" />

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-QJYWPWHFC3"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'G-QJYWPWHFC3');
        </script>
        <meta name="google-site-verification" content="p1l_giMe92098TFVTxNiXBKaZG_sk1kqlfVOaO1LEao" />

    </head>