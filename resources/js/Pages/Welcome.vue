<script setup>
import { Head, Link } from '@inertiajs/vue3';
import Contact from "@/Layouts/LayoutCustomers/Contact.vue";
import Footer from "@/Layouts/LayoutCustomers/Footer.vue";

</script>

<template>
    <Head title="Welcome" />

    <!-- Start .header-section -->
    <div id="home" class="header-section flex-box-middle section gradiant-background header-curbed header-software">
        <div id="particles-js" class="particles-container"></div>
        <div id="navigation" class="navigation is-transparent" data-spy="affix" data-offset-top="5">
            <nav class="navbar navbar-default">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
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
                            <li><a class="nav-item" href="#about">A Propos</a></li>
                            <li><a class="nav-item" href="#features">Fonctionnalité</a></li>
                            <li><a class="nav-item" href="#screenshots">Presentation</a></li>
                            <li><a class="nav-item" href="#pricing">Prix</a></li>
<!--                            <li><a class="nav-item" href="#testimonial">Temoignages</a></li>-->
                            <li><a class="nav-item" href="#contacts">Contact</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container -->
            </nav>
        </div><!-- .navigation -->

        <div class="header-content pt-90">
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="header-texts">
                            <h1 class="cd-headline clip is-full-width wow fadeInUp" data-wow-duration=".5s">
                                <span>Bienvenue sur <strong style="color: orange">Whataa</strong> </span>

                            </h1>
                            <p class="lead wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".3s">
                                Découvrez une nouvelle ère de gestion d'entreprise avec notre logiciel tout-en-un ! Suivez vos stocks,
                                gérez vos ventes,
                                simplifiez vos achats et gardez le contrôle sur votre comptabilité, le tout en un seul endroit pratique.
                            </p>
                            <ul class="buttons">
                                <li><Link :href="route('downlaod.whataa')" class="button wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".6s">
                                    Démarrer votre essai gratuit</Link>
                                </li>
                            </ul>
                        </div>
                    </div><!-- .col -->
                </div><!-- .row -->
                <div class="row text-center">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="header-laptop-mockup wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s" >
                            <img src="/assets/images/our-img/comptoir-2.png" class="img-home" alt="software-screen" />
                        </div>
                    </div>
                </div>
            </div><!-- .container -->
        </div><!-- .header-content -->
    </div><!-- .header-section -->

    <!-- Start .about-section  -->
    <div id="about" class="about-section section pb-90 white-bg">
        <div class="container tab-fix">
            <div class="section-head text-center">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h2 class="heading">A propos de <span>Whataa</span></h2>
                        <p>
                            <strong>Whataa</strong> vous la possibilité de gérer facilement votre entreprise avec notre solution complète de gestion de stock, vente, achat, retour et comptabilité.
                            Notre logiciel bureautique offre une interface intuitive et des fonctionnalités puissantes pour répondre à tous vos besoins.
                        </p>
                    </div>
                </div>
            </div><!-- .section-head -->
            <div class="row tab-center mobile-center">
                <div class="col-md-8">
                    <div class="video wow fadeInLeft" data-wow-duration=".5s">
                        <iframe width="100%" height="450" src="https://www.youtube.com/embed/6Inr4h8CAhQ?si=JyMnAx1fEg51LqnZ"
                                title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write;
                        encrypted-media; gyroscope; picture-in-picture; web-share"
                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

                    </div>
                </div><!-- .col -->
                <div class="col-md-4">
                    <div class="txt-entry">
                        <h3>Pourquoi choisir <span>Whataa</span> </h3>
                       <p><strong>Facile à utiliser :</strong> Notre interface conviviale rend la gestion de votre entreprise plus simple que jamais.</p>
                       <p><strong>Évolutif :</strong> Notre logiciel s'adapte à vos besoins en croissance, que vous soyez une petite entreprise
                           ou une entreprise en plein essor.</p>
                       <p><strong>Sécurisé : </strong> Vos données sont sécurisées grâce à notre technologie de cryptage de pointe.</p>
                       <p><strong>Support dédié :</strong> Notre équipe de support est là pour vous aider à tout moment. 24/7</p>
                        <Link :href="route('downlaod.whataa')" class="button">Essayez Whataa dès aujourd'hui</Link>
                    </div>
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .about-section  -->


    <!-- Start .features-section  -->
    <div id="features" class="features-section section gradiant-background overflowvisible">
        <div class="container tab-fix">
            <div class="features-content pt-10">
                <div class="row">
                    <div class="col-md-12 pull-right pb-4">
                        <div class="section-head heading-light mobile-center tab-center">
                            <div class="row">
                                <div class="col-md-12">
                                    <h2 class="heading heading-light text-center">Fonctionnalités</h2>
                                   <p class="text-center">
                                       Vous manquez de visibilité sur votre activité, ce qui vous empêche de prendre des décisions éclairées pour votre entreprise.
                                       <br><strong style="color: orange">Whataa</strong> est la solution idéale pour vous simplifier la vie et vous aider à gérer votre activité en toute sérénité.
                                   </p>
                                </div>
                            </div>
                        </div><!-- .section-head -->
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="single-features">
                                    <em class="ti ti-user"></em>
                                    <h4>Gestion des stocks</h4>
                                    <p> suivre vos entrées et sorties de stock en temps réel, connaître votre niveau de stock à tout moment et définir des seuils de réapprovisionnement.</p>
                                </div>
                            </div><!-- .col -->
                            <div class="col-sm-6">
                                <div class="single-features">
                                    <em class="ti ti-bolt"></em>
                                    <h4>Gestion des ventes</h4>
                                    <p>
                                        Traitement des commandes clients, création de devis et de factures,
                                        suivi des ventes et des paiements, gestion des retours et des remboursements.
                                    </p>
                                </div>
                            </div><!-- .col -->
                            <div class="col-sm-6">
                                <div class="single-features">
                                    <em class="ti ti-video-camera"></em>
                                    <h4>Gestion des achats</h4>
                                    <p>Génération de bons de commande, bons de livraison et suivi des soldes fournisseurs</p>
                                </div>
                            </div><!-- .col -->
                            <div class="col-sm-6">
                                <div class="single-features">
                                    <em class="ti ti-infinite"></em>
                                    <h4>Comptabilité intégrée</h4>
                                    <p>
                                        Suivi des dépenses et des revenus, gestion des comptes clients et fournisseurs,
                                        génération de rapports financiers, intégration avec d'autres systèmes comptables.
                                    </p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="single-features">
                                    <em class="ti ti-infinite"></em>
                                    <h4>Gestion des codes-barres et des étiquettes</h4>
                                    <p>
                                        Prise en charge de l'utilisation de codes-barres pour le suivi des produits,
                                        impression d'étiquettes pour l'identification des articles.
                                    </p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="single-features">
                                    <em class="ti ti-infinite"></em>
                                    <h4>Gestion des utilisateurs </h4>
                                    <p>
                                        Attribution de droits d'accès personnalisés en
                                        fonction des rôles des utilisateurs, sécurisation des données sensibles
                                    </p>
                                </div>
                            </div><!-- .col -->
                        </div><!-- .row -->
                    </div><!-- .col -->
<!--                    <div class="col-md-5 pt-100 text-center">-->
<!--                        <div class="fearures-software-mocku wow fadeInLeft" data-wow-duration=".5s">-->
<!--                            <img src="/assets/images/our-img/login.png" class="img-responsive" alt="software-screen" />-->
<!--                        </div>-->
<!--                    </div>&lt;!&ndash; .col &ndash;&gt;-->
                </div><!-- .row -->
                <div class="row pb-4" style="padding: 50px">
                    <div class="col-md-6 col-md-offset-4">
                        <Link :href="route('downlaod.whataa')" class="button">Essayez gratuitement dès aujourd'hui</Link>
                    </div>
                </div>
            </div><!-- .features-content -->
        </div><!-- .container -->
    </div><!-- .features-section  -->


    <!-- Start .screenshots-section  -->
    <div id="screenshots" class="screenshots-section section grey-background">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="tab-fix">
                        <div class="has-carousel software-screens owl-carousel owl-theme"  data-items="1" data-loop="true" data-auto="true" data-dots="false" data-navs="true">
                            <div class="item"><img src="/assets/images/our-img/login.png" alt="software-screen" /></div>
                            <div class="item"><img src="images/software-screen-b.jpg" alt="software-screen" /></div>
                            <div class="item"><img src="images/software-screen-c.jpg" alt="software-screen" /></div>
                            <div class="item"><img src="images/software-screen-d.jpg" alt="software-screen" /></div>
                        </div>
                    </div><!-- .tab-fix -->
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container-fluid -->
    </div><!-- .screenshots-section  -->


    <!-- Start .steps-section  -->
    <div class="section steps-section pb-90">
        <div class="container">
            <div class="section-head text-center">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h2 class="heading">Comment fonctionne <span>Whataa</span></h2>
                        <p>
                            Finir avec les heures de configuration et de
                            parametrage fascidieux avec <span>Whataa</span> en un simple clic vous êtes prêt pour l'utilisation.
                        </p>
                    </div>
                </div>
            </div><!-- .section-head  -->
            <div class="row">
                <div class="col-md-5 col-md-offset-0 col-sm-8 col-sm-offset-2">
                    <ul class="nav nav-tabs">
                        <li class="active" data-toggle="tab" data-target="#tab1">
                            <div class="steps">
                                <h4>Connexion</h4>
                                <p>Connectez vous avec votre nom d'utilisateur et mot de passe</p>
                            </div>
                        </li>
                        <li data-toggle="tab" data-target="#tab2">
                            <div class="steps">
                                <h4>Tableau de bord</h4>
                                <p>Prenez des decisions éclairées et precis avec des statistique precis</p>
                            </div>
                        </li>
                        <li data-toggle="tab" data-target="#tab3">
                            <div class="steps">
                                <h4>Documents commercials</h4>
                                <p>Vous avez tous les documents commercials</p>
                            </div>
                        </li>
                        <li data-toggle="tab" data-target="#tab4">
                            <div class="steps">
                                <h4>Vente au comptoir</h4>
                                <p>
                                    Un point de vente simple, intuitive et dynamique.
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-md-7 col-sm-12 col-md-offset-0 text-center">
                    <div class="tab-content no-pd steps-screen">
                        <div class="tab-pane fade in active" id="tab1">
                            <img src="/assets/images/our-img/login.png" alt="step-screen">
                        </div>
                        <div class="tab-pane fade" id="tab2">
                            <img src="/assets/images/our-img/dashboard.png" alt="step-screen">
                        </div>
                        <div class="tab-pane fade" id="tab3">
                            <img src="/assets/images/our-img/document-vente.png" alt="step-screen">
                        </div>
                        <div class="tab-pane fade" id="tab4">
                            <img src="/assets/images/our-img/vente-comptoir.png" alt="step-screen">
                        </div>
                    </div>
                </div>
            </div><!-- .row  -->
        </div><!-- .container  -->
    </div><!-- Start .statistics-section  -->


    <!-- Start .pricing-section  -->
    <div id="pricing" class="pricing-section section pb-80">
        <div class="imagebg">
            <img src="images/pricing-bg.jpg" alt="pricing-bg">
        </div>
        <div class="gradiant-background gradiant-overlay gradiant-light"></div><!-- .gradiant-background  /exta div for transparent gradiant overlay /  -->
        <div class="container tab-fix">
            <div class="section-head  text-center">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h2 class="heading ">Choisissez votre plan</h2>
                        <p>
                            Nos offres battent toute concurence, avec une assistance support de 24/7.
                        </p>
                    </div>
                </div>
            </div><!-- .col -->
            <div class="row text-center">
                <div class="col-md-4 col-sm-12">
                    <div class="pricing-box pricing-box-curbed wow fadeIn" data-wow-duration="1s">
                        <div class="pricing-top gradiant-background">
                            <h5>Particulier</h5>
                            <h2>10 000cfa</h2>
                        </div>
                        <div class="pricing-bottom">
                            <ul class="text-left">
                                <li><em class="ti ti-check"></em>Licence à vie</li>
                                <li><em class="ti ti-check"></em>Assistance en ligne gratuite </li>
                                <li><em class="ti ti-close"></em>Assistance en presentielle</li>
                                <li><em class="ti ti-close"></em>licence pour multiple postes</li>
                                <li><em class="ti ti-close"></em>Personnalisation sur mesure</li>
                            </ul>
                            <Link :href="route('downlaod.whataa')" class="button button-uppercase">Essayez gratuitement</Link>
                        </div>
                    </div>
                </div><!-- .col  -->
                <div class="col-md-4 col-sm-12">
                    <div class="pricing-box pricing-box-curbed wow fadeIn" data-wow-duration="1s">
                        <div class="pricing-top gradiant-background">
                            <span class="pricing-badge">Plus recommandé</span>
                            <h5>Professionnel</h5>
                            <h2>50 000cfa</h2>
                        </div>
                        <div class="pricing-bottom">
                            <ul class="text-left">
                                <li><em class="ti ti-check"></em>Licence à vie</li>
                                <li><em class="ti ti-check"></em>Assistance en ligne gratuite </li>
                                <li><em class="ti ti-check"></em>Assistance en presentielle</li>
                                <li><em class="ti ti-check"></em>licence pour multiple postes</li>
                                <li><em class="ti ti-close"></em>Personnalisation sur mesure</li>
                            </ul>
                            <Link :href="route('downlaod.whataa')" class="button button-uppercase">Essayez gratuitement</Link>
                        </div>
                    </div>
                </div><!-- .col  -->
                <div class="col-md-4 col-sm-12">
                    <div class="pricing-box pricing-box-curbed wow fadeIn" data-wow-duration="1s">
                        <div class="pricing-top gradiant-background">
                            <h5>Entreprise</h5>
                            <h2>100 000cfa</h2>
                        </div>
                        <div class="pricing-bottom">
                            <ul class="text-left">
                                <li><em class="ti ti-check"></em>Licence à vie</li>
                                <li><em class="ti ti-check"></em>Assistance en ligne gratuite </li>
                                <li><em class="ti ti-check"></em>Assistance en presentielle</li>
                                <li><em class="ti ti-check"></em>licence pour multiple postes</li>
                                <li><em class="ti ti-check"></em>Personnalisation sur mesure</li>
                            </ul>
                            <Link :href="route('downlaod.whataa')" class="button button-uppercase">Essayez gratuitement</Link>
                        </div>
                    </div>
                </div><!-- .col  -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .pricing-section  -->


    <!-- Start .faq-section  -->
    <div class="faq-section section white-bg pt-120 pb-100">
        <div class="container">
            <div class="faq-alt">
                <div class="row tab-fix">
                    <div class="col-md-4 tab-center mobile-center col-md-offset-1">
                        <div class="side-heading">
                            <h2 class="heading">Whataa <span>FAQ</span></h2>
                            <p>
                                Nous avons ce qu'il vous faut, consultez ces FAQ si ce n'est pas là,
                                <a class="nav-item" href="#contacts"> demandez-nous.</a>
                            </p>

                        </div>
                    </div><!-- .col  -->
                    <div class="col-md-6">
                        <!-- Accordion -->
                        <div class="panel-group accordion" id="another" role="tablist" aria-multiselectable="true">
                            <!-- each panel for accordion -->
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="accordion-i1">
                                    <h6 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#another" href="#accordion-pane-i1" aria-expanded="false">
                                            Comment puis-je essayer whataa ?
                                            <span class="plus-minus"><span></span></span>
                                        </a>
                                    </h6>
                                </div>
                                <div id="accordion-pane-i1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="accordion-i1">
                                    <div class="panel-body">
                                        <p>
                                            Vous avez la possibilité d'essayer gratuitement tous les fonctionnalités de Whataa sans engagement.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- each panel for accordion -->
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="accordion-i2">
                                    <h6 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#another" href="#accordion-pane-i2" aria-expanded="false">
                                            Est-ce que Whataa peut être adapté à mon entreprise ?
                                            <span class="plus-minus"><span></span></span>
                                        </a>
                                    </h6>
                                </div>
                                <div id="accordion-pane-i2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="accordion-i2">
                                    <div class="panel-body">
                                        <p>
                                            Whataa est une solution personnalisable qui s'adapte parfaitement sur demande, peut import les contraints de votre entreprise.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- each panel for accordion -->
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="accordion-i3">
                                    <h6 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#another" href="#accordion-pane-i3" aria-expanded="false">
                                            Est-ce que plusieurs personnes peuvent utiliser le logiciel ?
                                            <span class="plus-minus"><span></span></span>
                                        </a>
                                    </h6>
                                </div>
                                <div id="accordion-pane-i3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="accordion-i3">
                                    <div class="panel-body">
                                        <p>
                                            Whataa fonctionne avec un système multi-utilisateur, chaque utilisateur ayant un accès et un rôle définis.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- each panel for accordion -->
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="accordion-i4">
                                    <h6 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#another" href="#accordion-pane-i4" aria-expanded="false">
                                            Comment puis-je reccuperer mes données en cas d'incident ?
                                            <span class="plus-minus"><span></span></span>
                                        </a>
                                    </h6>
                                </div>
                                <div id="accordion-pane-i4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="accordion-i4">
                                    <div class="panel-body">
                                        <p>
                                            Whataa vous propose un système de synchronisation automatique des données dans un cloud sécurisé.
                                        </p>
                                    </div>
                                </div>
                            </div><!-- end each panel -->
                        </div><!-- Accordion #end -->
                    </div><!-- .col  -->
                </div><!-- .row  -->
            </div><!-- .faq  -->
        </div><!-- .container  -->
    </div><!-- .faq-section  -->

    <Contact />
    <Footer />
</template>
<style>
#themes_panel{
    display: none;
}
</style>
