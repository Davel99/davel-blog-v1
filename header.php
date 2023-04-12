<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body>
    <header>
        <nav class="navbar navbar-dark navbar-expand-xxl" id="main-navbar">
            <div class="container-fluid p-0">
                <a class="navbar-brand brand-container px-5" href="<?= site_url() ?>">
                    <img src="<?= get_template_directory_uri(); ?>/assets/images/venturtam-logo.png" alt="" width="40" class="pt-1">
                    <span id="brandName">VENTURTAM</span>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-navbar-action" aria-controls="main-navbar-action" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="main-navbar-action">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="<?= site_url() ?>/blog">
                                <i class="fa-brands fa-wordpress"></i>
                                Blog
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= site_url() ?>/nosotros">
                                <i class="fa-solid fa-users-between-lines"></i>
                                Nosotros
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= site_url() ?>/viajes">
                                <i class="fa-regular fa-calendar"></i>
                                Calendario de viajes
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="<?= site_url() ?>/destinos">
                                <i class="fa-solid fa-plane-circle-check"></i>
                                Destinos
                            </a>
                        </li>

                        <!-- <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa-solid fa-plane-circle-check"></i>
                                Destinos
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li> -->

                        <li class="nav-item">
                            <a class="nav-link" href="<?= site_url() ?>/contacto">
                                <i class="fa-solid fa-address-book"></i>
                                ¡Contáctanos!
                            </a>
                        </li>

                    </ul>

                    <div class="gral-icon-container navbar-text">
                        <a href="https://facebook.com/venturtam" target="_blank">
                            <i class="fa-brands fa-square-facebook"></i>
                        </a>
                        <a href="https://instagram.com/venturtam" target="_blank">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                        <a href="https://wa.link/sgqbxc" target="_blank">
                            <i class="fa-brands fa-whatsapp"></i>
                        </a>

                    </div>
                </div>
            </div>
        </nav>

    </header>
    <main id="main-content">