<script setup>
import {Link} from "@inertiajs/vue3";
</script>
<template>
    <div id="navigation" class="navigation is-transparent" data-spy="affix" data-offset-top="5">
        <nav class="navbar navbar-default">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobi le display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#site-collapse-nav" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/">
                        <img class="logo logo-light" src="/assets/images/our-img/logo-white-2.png" alt="logo white whataa " />
                        <img class="logo logo-color" src="/assets/images/our-img/whataa-black-logo.png" alt="whataa logo white" />
                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse font-secondary" id="site-collapse-nav">
                    <ul class="nav nav-list navbar-nav navbar-right">
                        <li><Link class="nav-item" href="/#about">A Propos</Link></li>
                        <li><Link class="nav-item" href="/#features">Fonctionnalité</Link></li>
                        <li><Link class="nav-item" href="/#screenshots">Presentation</Link></li>
                        <li><Link class="nav-item" href="/#pricing">Prix</Link></li>
                        <!--                            <li><a class="nav-item" href="#testimonial">Temoignages</a></li>-->
                        <li><Link class="nav-item" href="#contacts">Contact</Link></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container -->
        </nav>
    </div>
</template>
