<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>
        Подготовительные задания к курсу
    </title>
    <meta name="description" content="Chartist.html">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no, minimal-ui">
    <link id="vendorsbundle" rel="stylesheet" media="screen, print" href="css/vendors.bundle.css">
    <link id="appbundle" rel="stylesheet" media="screen, print" href="css/app.bundle.css">
    <link id="myskin" rel="stylesheet" media="screen, print" href="css/skins/skin-master.css">
    <link rel="stylesheet" media="screen, print" href="css/statistics/chartist/chartist.css">
    <link rel="stylesheet" media="screen, print" href="css/miscellaneous/lightgallery/lightgallery.bundle.css">
    <link rel="stylesheet" media="screen, print" href="css/fa-solid.css">
    <link rel="stylesheet" media="screen, print" href="css/fa-brands.css">
    <link rel="stylesheet" media="screen, print" href="css/fa-regular.css">
</head>
<?php

$items = [
    [
        "img_src" => "sunny.png",
        "img_alt" => "Sunny A.",
        "name" => "Sunny A. (UI/UX Expert)",
        "prof" => "Lead Author",
        "twitter_link" => "myplaneticket",
        "bootstrap_user" => "myorange",
        "bootstrap_title" => "Sunny",
    ],
    [
        "img_src" => "josh.png",
        "img_alt" => "Jos K.",
        "name" => "Jos K. (ASP.NET Developer)",
        "prof" => " Partner &amp; Contributor",
        "twitter_link" => "atlantez",
        "bootstrap_user" => "Walapa",
        "bootstrap_title" => "Contact Jos",
    ],
    [
        "img_src" => "jovanni.png",
        "img_alt" => "Jovanni Lo",
        "name" => "Jovanni L. (PHP Developer)",
        "prof" => "Partner &amp; Contributor",
        "twitter_link" => "lodev09",
        "bootstrap_user" => "lodev09",
        "bootstrap_title" => "Contact Jovanni",
    ],
    [
        "img_src" => "roberto.png",
        "img_alt" => "Jovanni Lo",
        "name" => "Roberto R. (Rails Developer)",
        "prof" => "Partner &amp; Contributor",
        "twitter_link" => "sildur",
        "bootstrap_user" => "sildur",
        "bootstrap_title" => "Contact Roberto",
    ],
]
?>
<body class="mod-bg-1 mod-nav-link ">
<main id="js-page-content" role="main" class="page-content">
    <div class="col-md-6">
        <div id="panel-1" class="panel">
            <div class="panel-hdr">
                <h2>
                    Задание
                </h2>
                <div class="panel-toolbar">
                    <button class="btn btn-panel waves-effect waves-themed" data-action="panel-collapse"
                            data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                    <button class="btn btn-panel waves-effect waves-themed" data-action="panel-fullscreen"
                            data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                </div>
            </div>
            <div class="panel-container show">
                <div class="panel-content">
                    <div class="d-flex flex-wrap demo demo-h-spacing mt-3 mb-3">
                        <?foreach ($items as $item):?>
                            <div class="rounded-pill bg-white shadow-sm p-2 border-faded mr-3 d-flex flex-row align-items-center justify-content-center flex-shrink-0">
                                <img src="img/demo/authors/<?=$item['img_src']?>" alt="<?=$item['img_alt']?>"
                                     class="img-thumbnail img-responsive rounded-circle" style="width:5rem; height: 5rem;">
                                <div class="ml-2 mr-3">
                                    <h5 class="m-0">
                                        <?=$item['name']?>
                                        <small class="m-0 fw-300">
                                            <?=$item['prof']?>
                                        </small>
                                    </h5>
                                    <a href="https://twitter.com/@<?=$item['twitter_link']?>" class="text-info fs-sm" target="_blank">@<?=$item['twitter_link']?></a>
                                    -
                                    <a href="https://wrapbootstrap.com/user<?=$item['bootstrap_user']?>" class="text-info fs-sm"
                                       target="_blank" title="<?=$item['bootstrap_title']?>"><i class="fal fa-envelope"></i></a>
                                </div>
                            </div>
                        <?endforeach;?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>


<script src="js/vendors.bundle.js"></script>
<script src="js/app.bundle.js"></script>
<script>
    // default list filter
    initApp.listFilter($('#js_default_list'), $('#js_default_list_filter'));
    // custom response message
    initApp.listFilter($('#js-list-msg'), $('#js-list-msg-filter'));
</script>
</body>
</html>