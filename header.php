<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php    bloginfo("charset"); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> -->
    <!-- <link
        href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&family=Roboto:wght@500&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/style.css"> -->
    <?php wp_head() ?>
</head>

<body>
    <?php  wp_body_open();  ?>
    <?php get_template_part('/template-parts/content', 'header') ; ?>
    

    <main class="productos">
        <div class="container-fluid gx-5">