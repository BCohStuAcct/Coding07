<!--
Name: Brenda Cohen
Assignment: 06
Purpose: Header and nav bar Html.
-->

<html>
    <head>

        <title><?php echo $title; ?></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="<?php echo base_url(); ?>assets/css/main.css" rel="stylesheet">
        <link rel="icon" href="assets/icon.png" type="image/gif">
    </head>
<body>
    <nav class="nav-section">
        <ul>
            <li><?php echo anchor('home', 'Home'); ?></li>
            <li><?php echo anchor('about', 'About'); ?></li>
        </ul>
    </nav>