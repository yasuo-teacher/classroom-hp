<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">

        <meta name="keywords" content="<?php echo SITE_KEYWORDS; ?>">
        <meta name="description" content="<?php echo SITE_DESCRIPTION; ?>">

        <title><?php echo $meta['page_name']; ?></title>

        <link rel="icon" href="./favicon.ico" />
        <link rel="apple-touch-icon" href="./img/apple-touch-icon.png">
        <link rel="icon" sizes="192x192" href="./img/icon-192x192.png">
        <link rel="icon" sizes="128x128" href="./img/icon-128x128.png">

        <meta property="og:url" content="<?php echo (empty($_SERVER["HTTPS"]) ? "http://" : "https://") . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]; ?>"><!-- ページのURL -->
        <meta property="og:type" content="<?php if ($page == 'index'): ?>website<?php else : ?>article<?php endif; ?>"><!-- トップページはwebsite、個別ページはarticle、ブログはblog -->
        <meta property="og:title" content="<?php echo $meta['page_name']; ?>"><!-- ページの名前 -->
        <meta property="og:description" content="<?php echo SITE_DESCRIPTION; ?>"><!-- ページの説明 -->
        <meta property="og:image" content="https://classroom.yasuo-teacher/img/top.png"><!-- サムネイル画像 -->
        <meta property="og:site_name" content="<?php echo SITE_NAME; ?>"><!-- サイトの名前 -->
        <meta property="og:locale" content="ja_JP">

        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@200..900&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
        <link rel="stylesheet" type="text/css" href="./css/main.css?ver=1.00"/>

        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inview/1.0.0/jquery.inview.min.js"></script>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
        <script type="text/javascript" src="./js/main.js?ver=1.00"></script>
        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-S2B6T7ZCN2"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'G-S2B6T7ZCN2');
        </script>
</head>
