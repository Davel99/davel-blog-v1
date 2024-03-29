<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body>
    <header>
        <div id="header-banner" class="py-4">
            <div class="m-0 row">
                <div class="col-md-8">
                    <div class="title-container">
                        <a class="text-decoration-none" href="<?= site_url() ?>">
                            <div class="gral-gold-title">
                                Davel Gomoz
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <?php
                    get_template_part('template-parts/gral', 'iconContainer');
                    ?>
                </div>
            </div>
        </div>

        <nav class="navbar navbar-expand-lg navbar-dark" id="main-navbar">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="justify-content-center collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="<?= site_url() ?>">
                                <i class="fa-solid fa-house"></i>
                                Inicio
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= site_url() ?>/blog">
                                <i class="fa-brands fa-wordpress"></i>
                                Blog
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= site_url() ?>/contacto">
                                <i class="fa-solid fa-address-book"></i>
                                Contacto
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= site_url() ?>/novelas">
                                <i class="fas fa-book"></i>
                                Novelas
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

    </header>
    <main>