<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/css/img/blog.com.ico">

    <title><?php wp_title( '|', true, 'right' ); ?></title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo get_template_directory_uri(); ?>/vendor/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/css/style.css" rel="stylesheet">
    <style>
    </style>
    <!--[if lt IE 9]>
    <script src="<?php echo get_template_directory_uri(); ?>/js/html5shiv.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/respond.min.js"></script>
    <![endif]-->
</head>

<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>

<body>

<div class="container" id="main">
    <div id="header"></div>
    <a class="home-link" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
        <h1><?php bloginfo( 'name' ); ?> <small><?php bloginfo( 'description' ); ?></small></h1>
    </a>
    <div class="row">
