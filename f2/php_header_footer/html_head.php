<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<title>Wlor</title>
<?php
    css_loader([
        'https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback',
        'https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css',
        'vendor/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css',
        'vendor/plugins/icheck-bootstrap/icheck-bootstrap.min.css',
        'vendor/plugins/jqvmap/jqvmap.min.css',
        'dist/css/adminlte.min.css',
        'vendor/plugins/overlayScrollbars/css/OverlayScrollbars.min.css',
        'vendor/plugins/daterangepicker/daterangepicker.css',
        'vendor/plugins/summernote/summernote-bs4.min.css',
        '../dist/css/custom.css',
        'dist/css/navbar.css',
        'dist/css/bootstrap.min.css',
        'dist/css/jquery.fancybox.min.css',
    ]);
   
    js_loader([
        'js/vendor/jquery.min.js', 
        'js/vendor/underscore-umd-min.js',
        'js/libs/functions.js',
        'js/libs/url.js',
        'js/libs/view_loader.js',
        'js/context/main.js'
]);
?>
</head>