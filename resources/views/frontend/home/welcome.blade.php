@extends('parent')

@section('content')
    <section class="flexslider">
        <ul class="slides">
            <li style="background-image: url(images/home-images/banner/ban1.jpg); " class="overlay"
                style="background: rgb(0,0,0,11%);">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="probootstrap-slider-text text-center">
                                <h1 class="probootstrap-heading probootstrap-animate">Votre Futur est notre priorité</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li style="background-image: url(images/home-images/banner/ban2.jpg); " class="overlay"
                style="background: rgb(0,0,0,11%);">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="probootstrap-slider-text text-center">
                                <h1 class="probootstrap-heading probootstrap-animate">L'éducation c'est la vie</h1>
                            </div>
                        </div>
                    </div>
                </div>

            </li>
            <li style="background-image: url(images/home-images/banner/ban3.jpg);" class="overlay"
                style="background: rgb(0,0,0,11%);">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="probootstrap-slider-text text-center">
                                <h1 class="probootstrap-heading probootstrap-animate">Aider chacun de nos étudiants est un
                                    réel bonheur</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </section>

    <section class="probootstrap-section probootstrap-section-colored " style="background:#f4a105;">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-left section-heading probootstrap-animate">
                    <h2>Bienvenue dans notre université</h2>
                </div>
            </div>
        </div>
    </section>

    <section class="probootstrap-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="probootstrap-flex-block">
                        <div class="probootstrap-text probootstrap-animate">
                            <h3>A Propos De L'istec</h3>

                            <p>Une formation académique pour l'obtention d'un diplôme universitaire suivie d'un corps
                                professoral dynamique, une direction jeune et compétente pour les études, l'étudiant a donc
                                tous les atouts pour réussir.</p>
                            <p><a href="/abouts" class="btn btn-primary">En Apprendre Plus</a></p>

                        </div>
                        <div class="probootstrap-image probootstrap-animate">
                            <a href="{{ asset('videos/presentation.mp4') }}" class="btn-video" controle loop autoplay><i
                                    class="icon-play3"></i><img src="{{ asset('images/home-images/about/accueil.jpg') }}"
                                    style="width: 100%; height: 100%; "></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="probootstrap-section" id="probootstrap-counter">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate">
                    <div class="probootstrap-counter-wrap">
                        <div class="probootstrap-icon">
                            <i class="icon-users2" style="color:#f4a105;"></i>
                        </div>
                        <div class="probootstrap-text">
                            <span class="probootstrap-counter">
                                +<span class="js-counter" data-from="0" data-to="9000" data-speed="2000"
                                    data-refresh-interval="50">1</span>
                            </span>
                            <span class="probootstrap-counter-label">Etudiant inscrits</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate">
                    <div class="probootstrap-counter-wrap">
                        <div class="probootstrap-icon">
                            <i class="icon-user-tie" style="color:#f4a105;"></i>
                        </div>
                        <div class="probootstrap-text">
                            <span class="probootstrap-counter">
                                <span class="js-counter" data-from="0" data-to="110" data-speed="2000"
                                    data-refresh-interval="50">1</span>
                            </span>
                            <span class="probootstrap-counter-label">Professeurs certifiés</span>
                        </div>
                    </div>
                </div>
                <div class="clearfix visible-sm-block visible-xs-block"></div>
                <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate">
                    <div class="probootstrap-counter-wrap">
                        <div class="probootstrap-icon">
                            <i class="icon-library" style="color:#f4a105;"></i>
                        </div>
                        <div class="probootstrap-text">
                            <span class="probootstrap-counter">
                                <span class="js-counter" data-from="0" data-to="90" data-speed="2000"
                                    data-refresh-interval="50">1</span>%
                            </span>
                            <span class="probootstrap-counter-label">Pourcentage de réussite</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate">

                    <div class="probootstrap-counter-wrap">
                        <div class="probootstrap-icon">
                            <i class="icon-smile2" style="color:#f4a105;"></i>
                        </div>
                        <div class="probootstrap-text">
                            <span class="probootstrap-counter">
                                <span class="js-counter" data-from="0" data-to="98" data-speed="2000"
                                    data-refresh-interval="50">1</span>%
                            </span>
                            <span class="probootstrap-counter-label">Parents satisfaits</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section
        class="probootstrap-section probootstrap-section-colored probootstrap-bg probootstrap-custom-heading probootstrap-tab-section"
        style="background-image: url(images/home-images/point_fort.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center section-heading probootstrap-animate">
                    <h2 class="mb0">Points forts</h2>
                </div>
            </div>
        </div>
        <div class="probootstrap-tab-style-1">
            <ul class="nav nav-tabs probootstrap-center probootstrap-tabs no-border">
                <li class="active"><a data-toggle="tab" href="#featured-news" aria-expanded="true">Actualités à la une</a>
                </li>
                <li class=""><a data-toggle="tab" href="#upcoming-events" aria-expanded="false">Evènements à venir</a></li>
            </ul>
        </div>
    </section>

    <section class="probootstrap-section probootstrap-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="tab-content">

                        <div id="featured-news" class="tab-pane fade in active">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="owl-carousel" id="owl1">
                                        <div class="item">
                                            <a href="News/1" class="probootstrap-featured-news-box">
                                                <figure class="probootstrap-media"><img src="{{ asset('images/image-news/gift1.jpg') }}"
                                                        alt="cadea" class="img-responsive" style="height: 282px"></figure>
                                                <div class="probootstrap-text">

                                                    <h3>ISTEC CADEAUX</h3>

                                                    <span class="probootstrap-date"><i class="icon-calendar"></i>Tous les
                                                        jours avant la rentrée académique
                                                    </span>
                                                    <span class="probootstrap-location"><i class="icon-location"></i>Campus
                                                        ISTEC, en face scierie Ndogbong</span><br>
                                                    <span class="probootstrap-clock"><i class="icon-clock"></i> 8H00-17H00
                                                    </span>
                                                </div>
                                            </a>
                                        </div>
                                        <!-- END item -->
                                        <div class="item">
                                            <a href="News/7" class="probootstrap-featured-news-box">
                                                <figure class="probootstrap-media"><img src="{{ asset('images/image-news/news7.jpg') }}"
                                                        alt="happy video" class="img-responsive" style="height: 282px">
                                                </figure>
                                                <div class="probootstrap-text">
                                                    <h3>FORMATIONS GRATUITES</h3>
                                                    <span class="probootstrap-date"><i class="icon-calendar"></i>Tous les
                                                        jours avant la rentrée académique</span>
                                                    <span class="probootstrap-location"><i class="icon-location"></i>Campus
                                                        ISTEC, en face scierie Ndogbong</span><br>
                                                    <span class="probootstrap-clock"><i class="icon-clock"></i> De 8H00 à
                                                        17H00 </span>

                                                </div>
                                            </a>
                                        </div>
                                        <!-- END item -->
                                        <div class="item">
                                            <a href="News/3" class="probootstrap-featured-news-box">
                                                <figure class="probootstrap-media"><img src="{{ asset('images/image-news/smiller.jpg') }}"
                                                        alt="Début des inscriptions" class="img-responsive" style="height: 282px"></figure>
                                                <div class="probootstrap-text">
                                                    <h3>DEBUT DES INSCRIPTIONS</h3>
                                                    <span class="probootstrap-date"><i class="icon-calendar"></i>Depuis mai
                                                        2021</span><br>
                                                    <span class="probootstrap-location"><i class="icon-location"></i>Campus
                                                        ISTEC, en face scierie Ndogbong</span>
                                                    <span class="probootstrap-clock"><i class="icon-clock"></i> De 8H00 à
                                                        17H00 </span>
                                                </div>
                                            </a>
                                        </div>
                                        <!-- END item -->
                                        <div class="item">
                                            <a href="News/4" class="probootstrap-featured-news-box">
                                                <figure class="probootstrap-media"><img  src="{{ asset('images/image_galery/gallery11.jpg') }}"
                                                        alt="Remise a niveau" class="img-responsive" style="height: 282px"></figure>
                                                <div class="probootstrap-text">
                                                    <h3>📚 Remise a niveau des etudiants inscris au niveau 2</h3>
                                                    <span class="probootstrap-date"><i class="icon-calendar"></i>14 juillet
                                                        2021</span>
                                                    <span class="probootstrap-location"><i class="icon-location"></i>Campus
                                                        ISTEC, en face scierie Ndogbong</span>
                                                    <span class="probootstrap-clock"><i  class="icon-clock"></i>
                                                        09H00-17H00</span>
                                                </div>
                                            </a>
                                        </div>
                                        <!-- END item -->
                                    </div>
                                </div>
                            </div>
                            <!-- END row -->
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <p><a href="/" class="btn btn-primary">Voir toutes les actualités</a></p>
                                </div>
                            </div>
                        </div>
                        <div id="upcoming-events" class="tab-pane fade">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="owl-carousel" id="owl2">
                                        <div class="item">
                                            <a href="event1" class="probootstrap-featured-news-box">
                                                <figure class="probootstrap-media"><img src="{{ asset('images/image_Events/pro3.jpg') }}"
                                                        alt="Event 1" class="img-responsive" style="height: 282px"></figure>
                                                <div class="probootstrap-text">
                                                    <h3>📚 Soutenance BTS</h3>
                                                    <span class="probootstrap-date"><i class="icon-calendar"></i>Septembre
                                                        5, 2021</span>
                                                    <span class="probootstrap-location"><i class="icon-location2"></i>Campus
                                                        ISTEC, en face scierie Ndogbong</span>
                                                </div>
                                            </a>
                                        </div>
                                        <!-- END item -->
                                        <div class="item">
                                            <a href="event2" class="probootstrap-featured-news-box">
                                                <figure class="probootstrap-media"><img src="{{ asset('images/image_galery/match.jpg') }}"
                                                        class="img-responsive" style="height: 282px;"></figure>
                                                <div class="probootstrap-text">
                                                    <h3>⚽ Un match de Gala Etudiants vs Professeurs💪🏼</h3>
                                                    <span class="probootstrap-date"><i class="icon-calendar"></i>Septembre
                                                        30, 2021</span>
                                                    <span class="probootstrap-location"><i class="icon-location2"></i>v</span>
                                                </div>
                                            </a>
                                        </div>
                                        <!-- END item -->
                                        <div class="item">
                                            <a href="event4" class="probootstrap-featured-news-box">
                                                <figure class="probootstrap-media"><img src="{{ asset('images/image_Events/pro3.jpg') }}"
                                                        alt="Event 3" class="img-responsive" style="height: 282px;"></figure>
                                                <div class="probootstrap-text">
                                                    <h3>Remise des releves pour les niveaux 1</h3>
                                                    <span class="probootstrap-date"><i class="icon-calendar"></i>Septembre
                                                        2, 2021</span>
                                                    <span class="probootstrap-location"><i class="icon-location2"></i>Campus
                                                        ISTEC, en face scierie Ndogbong</span>
                                                </div>
                                            </a>
                                        </div>
                                        <!-- END item -->
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <p><a href="events" class="btn btn-primary">Voir toutes les actualités</a></p>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="probootstrap-section probootstrap-bg-white probootstrap-border-top">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center section-heading probootstrap-animate">

                    <h2> Les Specialités Les Plus Demandées</h2>
                    <p class="lead">
                        Istec vous propose une multitude de filières Industrielles et filières comptables.
                    </p>


                </div>
            </div>
            <!-- END row -->
            <div class="row">
                <div class="col-md-6">
                    <div class="probootstrap-service-2 probootstrap-animate">
                        <div class="image">


                            <div class="image-bg "
                                style="height:100% ; width: 100%; background-image: url('images/home-images/code5.jpg')">


                                <!-- <img src="images/home-images/code.jpg" alt="Free Bootstrap Template by ProBootstrap.com"> -->
                            </div>
                        </div>
                        <div class="text">
                            <span class="probootstrap-meta"><i class="icon-calendar2"></i> 15,septembre 2021</span>
                            <h3>Genie Logiciel </h3>
                            <p>L'ingenierie logicielle est une science du génie industrielle qui étudie les méthodes de
                                travail et les bonnes pratiques des ingenieurs qui développent les logiciels informatiques
                            </p><br>

                            <p><a href="/inscription" class="btn btn-primary" style="background:#f4a105;">s'inscrire</a>
                                <span class="enrolled-count">25 Etudiants déjà inscrits</span>


                        </div>
                    </div>

                    <div class="probootstrap-service-2 probootstrap-animate">
                        <div class="image">

                            <div class="image-bg" style="height:100% ; width: 100%">
                                <img src="images/home-images/comptable.jpg"
                                    alt="Free Bootstrap Template by ProBootstrap.com">
                            </div>
                        </div>
                        <div class="text">
                            <span class="probootstrap-meta"><i class="icon-calendar2"></i> 15,septembre 2021</span>
                            <h3>Comptabilité</h3><br>
                            <p style="text-align:justify">La comptabilité est un ensemble de conventions et de règles qui
                                consistent à recueillir et compiler des données liées aux événements et aux opérations
                                financières, afin de présenter dans une unité monétaire</p>

                            <p><a href="/inscription" class="btn btn-primary" style="background:#f4a105;">s'inscrire</a>
                                <span class="enrolled-count">25 Etudiants déjà inscrits</span>
                            </p>

                        </div>
                    </div>

                </div>
                <div class="col-md-6">
                    <div class="probootstrap-service-2 probootstrap-animate">
                        <div class="image">
                            <div class="image-bg" style="height:100% ; width: 100%">
                                <img src="images/home-images/civil.jpg" alt="Free Bootstrap Template by ProBootstrap.com">
                            </div>
                        </div>
                        <div class="text">
                            <span class="probootstrap-meta"><i class="icon-calendar2"></i> 15,septembre 2021</span>
                            <h3>Genie Civil </h3>
                            <p>Le génie civil est l'art de concevoir et de réaliser des ouvrages d'infrastructures. Il
                                inclut également les bâtiments,topographie et etc. C'est l'un des meilleurs secteurs
                                d'Employabilités </p>

                            <p><a href="/inscription" class="btn btn-primary" style="background:#f4a105;">s'inscrire</a>
                                <span class="enrolled-count">28 Etudiants déjà inscrits</span>
                            </p>

                        </div>
                    </div>

                    <div class="probootstrap-service-2 probootstrap-animate">
                        <div class="image">

                            <div class="image-bg" style="height:100% ; width: 100%">
                                <img src="{{ asset('images/home-images/logistique-transport.jpg') }}"
                                    alt="Transport et logistique">
                            </div>
                        </div>
                        <div class="text">
                            <span class="probootstrap-meta"><i class="icon-calendar2"></i> 15,septembre 2021</span>
                            <h3>Transport & Logistique</h3>

                            <p>La logistique et le transport sont deux activités économiques intimement liées. Qu’elles
                                transitent par voie aérienne, maritime et etc, les marchandises doivent être prises en
                                charge par un personnel qualifié tant avant leur expédition qu’après leur réception</p>
                            <p><a href="/inscription" class="btn btn-primary" style="background:#f4a105;">s'inscrire </a>
                                <span class="enrolled-count">31 Etudiants déjà inscrits</span>
                            </p>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>



    <section class="probootstrap-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center section-heading probootstrap-animate">
                    <h2>Rencontrez Nos Enseignants Qualifiés</h2>
                    <p class="lead">"Se réunir est un début, rester ensemble est un progres, travailler ensemble est la
                        réussite"</p>

                </div>
            </div>
            <!-- END row -->
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="probootstrap-teacher text-center probootstrap-animate">
                        <figure class="media">
                            <img src="{{ asset('images/image_galery/gallery0.jpg') }}" style="width: 100%; height: 100%;"
                                class="img-responsive">
                        </figure>
                        <div class="text">
                            <h3>M. FOTSO DAVID</h3>
                            <p>Promoteur de l'ISTEC</p>
                            <ul class="probootstrap-footer-social">
                                <li class="twitter"><a href="#"><i class="icon-twitter"></i></a></li>
                                <li class="facebook"><a href="#"><i class="icon-facebook2"></i></a></li>
                                <li class="instagram"><a href="#"><i class="icon-instagram2"></i></a></li>
                                <li class="google-plus"><a href="#"><i class="icon-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="probootstrap-teacher text-center probootstrap-animate">
                        <figure class="media">
                            <img src="{{ asset('images/image_galery/directeur.jpg') }}"
                                style="width: 220px; height:146.66px;" class="img-responsive">
                        </figure>
                        <div class="text">
                            <h3>M. DINGA</h3>
                            <p>Directeur de l'ISTEC</p>
                            <ul class="probootstrap-footer-social">
                                <li class="twitter"><a href="#"><i class="icon-twitter"></i></a></li>
                                <li class="facebook"><a href="#"><i class="icon-facebook2"></i></a></li>
                                <li class="instagram"><a href="#"><i class="icon-instagram2"></i></a></li>
                                <li class="google-plus"><a href="#"><i class="icon-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="clearfix visible-sm-block visible-xs-block"></div>
                <div class="col-md-3 col-sm-6">
                    <div class="probootstrap-teacher text-center probootstrap-animate">
                        <figure class="media">
                            <img src="{{ asset('images/image_galery/gallery3.jpg') }}" style="width: 100%; height: 100%;"
                                class="img-responsive">
                        </figure>
                        <div class="text">
                            <h3>Dr SIMO</h3>
                            <p>Directrice Académique</p>
                            <ul class="probootstrap-footer-social">
                                <li class="twitter"><a href="#"><i class="icon-twitter"></i></a></li>
                                <li class="facebook"><a href="#"><i class="icon-facebook2"></i></a></li>
                                <li class="instagram"><a href="#"><i class="icon-instagram2"></i></a></li>
                                <li class="google-plus"><a href="#"><i class="icon-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="probootstrap-teacher text-center probootstrap-animate">
                        <figure class="media">
                            <img src="{{ asset('images/image_galery/galleryB.jpg') }}" style="width: 100%; height: 100%;"
                                class="img-responsive">
                        </figure>
                        <div class="text">
                            <h3>M. NTED</h3>
                            <p>Contrôleur de gestion</p>
                            <ul class="probootstrap-footer-social">
                                <li class="twitter"><a href="#"><i class="icon-twitter"></i></a></li>
                                <li class="facebook"><a href="https://m.facebook.com/profile.php?id=100010783265031"><i class="icon-facebook2"></i></a></li>
                                <li class="instagram"><a href="#"><i class="icon-instagram2"></i></a></li>
                                <li class="google-plus"><a href="mailto: ntedbilogmoise@gmail.com"><i class="icon-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 text-center">
                    <p><a href="/teachers" class="btn btn-primary">Voir tous les enseignants</a></p>
                </div>
            </div>
        </div>
    </section>
    <section class="probootstrap-section probootstrap-bg probootstrap-section-colored probootstrap-testimonial">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center section-heading probootstrap-animate">
                    <h2>TEMOIGNAGES</h2>
                    {{-- <p class="lead">Sed a repudiandae impedit voluptate nam Deleniti dignissimos perspiciatis nostrum porro nesciunt</p> --}}
                </div>
            </div>
            <!-- END row -->
            <div class="row">
                <div class="col-md-12 probootstrap-animate">
                    <div class="owl-carousel owl-carousel-testimony owl-carousel-fullwidth">
                        <div class="item">

                            <div class="probootstrap-testimony-wrap text-center">
                                <figure>
                                    <img src="{{ asset('images/home-images/romuald.jpg') }}"
                                        style="width: 100%; height: 100%;">
                                </figure>
                                <quote class="quote">&ldquo;... J'ai acquis beaucoup de compétences dans le domaine de
                                    l'entrepreunariat et du developpement web a l'ISTEC.je suis euphorique car je peux deja
                                    voler de mes propres ailes dans multiples dommaines,je remercie sur le cadre
                                    administratifs et les enseignants de nous avoir donne le meilleur de l'enseignement
                                    tout le long de mon apprenstissage. Merci l'ISTEC &rdquo; <br> <cite class="author">
                                        &mdash; <span>Touko Romuald</span></cite></quote>

                            </div>

                        </div>
                        <div class="item">
                            <div class="probootstrap-testimony-wrap text-center">
                                <figure>
                                    <img src="{{ asset('images/home-images/Adrien.jpg') }}"
                                        style="width: 100%; height: 100%;">
                                </figure>
                                <quote class="quote">&ldquo;J’ai obtenu beaucoup de bagages intellectuels dans le domaine du
                                    developpement web a l'ISTEC. Ainsi, je me sens compétent pour apporter mon aide à la
                                    professionnalisation des industries de technologie.Nous avons eu la chance d’avoir des
                                    enseignants qualifiés qui nous ont tenu durant notre periode d'études. Une expérience
                                    inoubliable. &rdquo; <br> <cite class="author"> &mdash;<span>Tedom Adrien</span></cite>
                                </quote>


                            </div>
                        </div>
                        <div class="item">
                            <div class="probootstrap-testimony-wrap text-center">
                                <figure>
                                    <img src="{{ asset('images/images_formations/juni1.jpg') }}"
                                        style="width: 100%; height: 100%;">
                                </figure>
                                <quote class="quote">&ldquo;Les professeurs d'ISTEC m'ont aidé à améliorer mes compétences
                                    et à développer une certaine autonomie dans l'apprentissage.Cette université n'est peut
                                    être pas parfaite mais grâce à elle, j'ai maintenant confiance en mes compétences et
                                    qualités de programmeur/développeur ! (^_^).
                                    &rdquo; <br> <cite class="author">&mdash; <span>Junior Ledoux</span></cite></quote>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- END row -->
        </div>
    </section>

    {{-- <section class="probootstrap-section">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center section-heading probootstrap-animate">
              <h2>Pourquoi Etudier<br>A<br> ISTEC</h2>
              {{-- <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto provident qui tempore natus quos quibusdam soluta at.</p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="service left-icon probootstrap-animate">
                <div class="icon"><i class="icon-checkmark"></i></div>
                <div class="text">
                  <h3>Sur le plan de la qualité pédagogique:</h3>
                  <p>Le promoteur est un expert-comptable diplomé économiste pertinent et expérimenté dans l'enseignement supérieur; <br>Tous les enseignants sont des universitaires de haut niveau et des professionnels chevronnés. <br>Les stages académiques et professionnels sont garantis pour tous les étudiants de tous les cycles. <br>Prise en charge médicale pour tous les étudiants.</p>
                </div>
              </div>
              <div class="service left-icon probootstrap-animate">
                <div class="icon"><i class="icon-checkmark"></i></div>
                <div class="text">
                  <h3>Sur le plan de la qualité financière:</h3>
                  <p>Les frais de scolarité sont abordables et flexibles pour tous. <br>Des bourses d'étude accompagnent l'excellence académique. <br>Des bourses spéciales pour personnes handicapées démunies et vulnérables.</p>
                </div>
              </div>
              <div class="service left-icon probootstrap-animate">
                <div class="icon"><i class="icon-checkmark"></i></div>
                <div class="text">
                   <h3>En terme de qualité pédagogique:</h3>
                  <p>Des cours académiques et professionnels sont garantis pour tous les étudiants de tous les cycles. <br>Des professeurs de haut niveau et des professionnels aguerris.</p>
                </div>
              </div>

            </div>
            <div class="col-md-6">
              <div class="service left-icon probootstrap-animate">
                <div class="icon"><i class="icon-checkmark"></i></div>
                <div class="text">
                  <h3>En terme de qualité sociale:</h3>
                  <p>L'association des étudiant et l'assemnlée générale des enseignants améliorent le vivre ensemble sur les campus. <br>Cours de langue, d'informatique, de conduite (Auto-école) et de préparation aux concours administratifs accélèrent l'insertion socio-professionnelle des étudiants. </p>
                </div>
              </div>
              <div class="service left-icon probootstrap-animate">
                <div class="icon"><i class="icon-checkmark"></i></div>
                <div class="text">

                  <h3>Sur le plan de la qualité infrastructurelle:</h3>
                  <p>Nos campus disposent de batiments autonomes et modernes pour l'organisation des formations standardisées et personalisées.<br>Plusieurs atéliers équipés, laboratoires, bibliothèque et salles de travaux dirigés facilitent la professionalisation des enseignements. <br>Un incubateur en cours d'achèvement pour développer l'entrepreneuriat et le montage de projets jeunes et startup. </p>
                </div>
              </div>

            </div>
          </div>
          <!-- END row -->
        </div>
      </section> --}}


<!-- partie des partenaires -->
<section class="probootstrap-section probootstrap-bg probootstrap-section-colored" style="background-color:#ED0000;padding:24px; ">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center section-heading probootstrap-animate" >
            
            </div>
          </div>
          <h1 style="text-align:center;font-size:40px;color:#FFFFFF"><b> NOS PARTENAIRES</b> </h1>
          <div class="row">
            <div class="col-md-12 probootstrap-animate">
              <div class="owl-carousel owl-carousel-testimony owl-carousel-fullwidth">

                <div class="item" >
                   <figure>
                    <img src="images/image-pat/print.jpg" style="width: 55%; height: 205px;margin:auto">
                    </figure>
                    </div>
                
                <div class="item" >
                    <figure>
                    <img src="images/image-pat/tropik.jpg"  style="width: 50%; height: 200px;margin:auto">
                    </figure>
                    </div>

                <div class="item"  >
                   <figure>
                    <img src="images/image-pat/eneo.jpg" style="width: 50%; height: 200px;margin:auto">
                    </figure>
                  </div>

                  <div class="item" >
                   <figure>
                   <img src="images/image-pat/cecaw.png" style="width: 50%; height: 200px;margin:auto">
                    </figure>
                  </div>

                  <div class="item"  >
                   <figure>
                   <img src="images/image-pat/dschang.jpg" style="width: 50%; height: 200px;margin:auto">
                    </figure>
                  </div>

                  
                  <div class="item" >
                   <figure>
                   <img src="images/image-pat/agc conseil.png" style="width: 50%; height: 200px;margin:auto">
                    </figure>
                  </div>

                  
                  <div class="item" >
                   <figure>
                   <img src="images/image-pat/CGI.png" style="width: 50%; height: 200px;margin:auto">
                    </figure>
                  </div>

                  
                  <div class="item" >
                   <figure>
                   <img src="images/image-pat/ifage.jpeg" style="width: 50%; height: 200px;margin:auto">
                    </figure>
                  </div>

                   
                  <div class="item" >
                   <figure>
                   <img src="images/image-pat/jupiner.jpg" style="width: 50%; height: 200px;margin:auto">
                    </figure>
                  </div>

                   
                  <div class="item" >
                   <figure>
                   <img src="images/image-pat/logobio_2-01.png" style="width: 50%; height: 200px;margin:auto">
                    </figure>
                  </div>

                   
                  <div class="item" >
                   <figure>
                   <img src="images/image-pat/minesup.jpg" style="width: 50%; height: 200px;margin:auto">
                    </figure>
                  </div>

                  <div class="item" >
                   <figure>
                   <img src="images/image-pat/gms.png" style="width: 50%;height: 200px;margin:auto">
                    </figure>
                  </div>

                  <div class="item" >
                   <figure>
                   <img src="images/image-pat/reseau ex.png" style="width: 50%;height: 200px;margin:auto">
                    </figure>
                  </div>

                  <div class="item" >
                   <figure>
                   <img src="images/image-pat/logo_udo.jpg" style="width: 50%;height: 200px;margin:auto">
                    </figure>
                  </div>


   

    <section class="probootstrap-cta" style="background: #f4a105;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="probootstrap-animate" data-animate-effect="fadeInRight">Obtenez votre admission maintenant!
                    </h2>
                    <a href="/inscription" role="button" class="btn btn-primary btn-lg btn-ghost probootstrap-animate"
                        data-animate-effect="fadeInLeft">S'inscrire</a>
                </div>
            </div>
        </div>
    </section>
@endsection
