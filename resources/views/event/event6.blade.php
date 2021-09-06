@extends('parent')
@section('title','events')

@section('content')
<section class="probootstrap-section probootstrap-section-colored">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-left section-heading probootstrap-animate">
              <h1>Événements scolaires</h1>
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
                  <div class="text-uppercase probootstrap-uppercase">Événements en vedette</div>
                  <h3>Début du deuxième semestre</h3>
                  <p>Un concours d'entrée en première année à l'Institut Superieur Des Techniques Economiques Et Comptables est lancée pour les nouveaux bacheliers</p>
                  <p>
                    <span class="probootstrap-date"><i class="icon-calendar"></i>Aout 30, 2021</span>
                    <span class="probootstrap-location"><i class="icon-location2"></i>Campus ISTEC, derrière Camlait Ndogbong</span>
                  </p>
                  <p><a href="/event6/detail6" class="btn btn-primary">Pour en savoir plus</a></p>
                </div>
                <div class="probootstrap-image probootstrap-animate" style="background-image: url(images/image_Events/pro4.jpg)">
                  {{-- <a href="https://vimeo.com/45830194" class="btn-video popup-vimeo"><i class="icon-play3"></i></a> --}}
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>




      <section class="probootstrap-section">
        <div class="container">

          <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate">
              <a href="event1" class="probootstrap-featured-news-box">
                <figure class="probootstrap-media"><img src="images/image_Events/pro3.jpg" alt="Free Bootstrap Template by ProBootstrap.com" class="img-responsive"></figure>
                <div class="probootstrap-text">
                  <h3>Une remise à niveau pour les Etudiants du Niveau 2</h3>
                  <span class="probootstrap-date"><i class="icon-calendar"></i>Septembre 5, 2021</span>
                  <span class="probootstrap-location"><i class="icon-location2"></i>ISTEC, derrière Camlait Ndogbong </span>
                </div>
              </a>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate">
              <a href="event2" class="probootstrap-featured-news-box">
                <figure class="probootstrap-media"><img src="images/image_Events/pro1.jpg" alt="Free Bootstrap Template by ProBootstrap.com" class="img-responsive"></figure>
                <div class="probootstrap-text">
                  <h3>Un match de Gala Etudiants vs Professeurs</h3>
                  <span class="probootstrap-date"><i class="icon-calendar"></i>Septembre 30, 2021</span>
                  <span class="probootstrap-location"><i class="icon-location2"></i>ISTEC, derrière Camlait Ndogbong</span>
                </div>
              </a>
            </div>
            <div class="clearfix visible-sm-block visible-xs-block"></div>
            <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate">
              <a href="event3" class="probootstrap-featured-news-box">
                <figure class="probootstrap-media"><img src="images/image_Events/pro1.jpg" alt="Free Bootstrap Template by ProBootstrap.com" class="img-responsive"></figure>
                <div class="probootstrap-text">
                  <h3>Cérémonie de la fête de Noël de l'annee 2021 ...</h3>
                  <span class="probootstrap-date"><i class="icon-calendar"></i>Decembre 23, 2021</span>
                  <span class="probootstrap-location"><i class="icon-location2"></i>ISTEC, derrière Camlait Ndogbong</span>
                </div>
              </a>
            </div>

            <div class="clearfix visible-md-block"></div>

            <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate">
              <a href="event4" class="probootstrap-featured-news-box">
                <figure class="probootstrap-media"><img src="images/image_Events/pro.jpg" alt="Free Bootstrap Template by ProBootstrap.com" class="img-responsive"></figure>
                <div class="probootstrap-text">
                  <h3>Début du deuxième semestre</h3>
                  <span class="probootstrap-date"><i class="icon-calendar"></i>Janvier 15, 2021</span>
                  <span class="probootstrap-location"><i class="icon-location2"></i>ISTEC, derrière Camlait Ndogbong</span>
                </div>
              </a>
            </div>
            <div class="clearfix visible-sm-block visible-xs-block"></div>

            <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate">
              <a href="event5" class="probootstrap-featured-news-box">
                <figure class="probootstrap-media"><img src="images/image_Events/pro.jpg" alt="Free Bootstrap Template by ProBootstrap.com" class="img-responsive"></figure>
                <div class="probootstrap-text">
                  <h3>Cérémonie de la fête de Noël 2021...</h3>
                  <span class="probootstrap-date"><i class="icon-calendar"></i>July 9, 2021</span>
                  <span class="probootstrap-location"><i class="icon-location2"></i>ISTEC, derrière Camlait Ndogbong</span>
                </div>
              </a>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate">
              <a href="event6" class="probootstrap-featured-news-box">
                <figure class="probootstrap-media"><img src="images/image_Events/pro4.jpg" alt="Free Bootstrap Template by ProBootstrap.com" class="img-responsive"></figure>
                <div class="probootstrap-text">
                  <h3>Début du deuxième semestre </h3>
                  <span class="probootstrap-date"><i class="icon-calendar"></i>July 9, 2021</span>
                  <span class="probootstrap-location"><i class="icon-location2"></i>ISTEC, derrière Camlait Ndogbong</span>
                </div>
              </a>
            </div>
            <div class="clearfix visible-sm-block visible-xs-block"></div>

          </div>
        </div>
      </section>
      <section class="probootstrap-cta">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h2 class="probootstrap-animate" data-animate-effect="fadeInRight">Obtenez votre admission maintenant!</h2>
              <a href="/inscription" role="button" class="btn btn-primary btn-lg btn-ghost probootstrap-animate" data-animate-effect="fadeInLeft">S'inscrire</a>
            </div>
          </div>
        </div>
      </section> 
@endsection