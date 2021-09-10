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
                  <h3>Concours d'entrée en première année</h3>
                  <p>Un concours d'entrée en première année à l'Institut Supérieur Des Techniques Economiques Et Comptables est lancée pour les nouveaux bacheliers</p>
                  <p>
     <span class="probootstrap-date"><i class="icon-calendar"></i>Août 30, 2021</span>
                    <span class="probootstrap-location"><i class="icon-location2"></i>Campus ISTEC, derrière Camlait Ndogbong</span>
                  </p>
                  <p><a href="/events/detail" class="btn btn-primary">Pour en savoir plus</a></p>

                </div>
                <div class="probootstrap-image probootstrap-animate" style="background-image: url(/images/image_galery/gallery23.jpg)">
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
              <a href="#" class="probootstrap-featured-news-box">
                <figure class="probootstrap-media"><img src="images/image_galery/don.jpg"  class="img-responsive"></figure>
                <div class="probootstrap-text">
                  <h3>Donnation des livres a L'ISTEC</h3>
                  <span class="probootstrap-date"><i class="icon-calendar"></i>Janvier 15, 2021</span>
                  <span class="probootstrap-location"><i class="icon-location2"></i>ISTEC, derrière Camlait Ndogbong</span>
                </div>
              </a>
            </div>
            <div class="clearfix visible-sm-block visible-xs-block"></div>
            
            <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate">
              <a href="#" class="probootstrap-featured-news-box">
                <figure class="probootstrap-media"><img src="images/image_Events/pro4.jpg" class="img-responsive"></figure>
                <div class="probootstrap-text">
                  <h3>Remise d'un present au promoteur</h3>
                  <span class="probootstrap-date"><i class="icon-calendar"></i>July 9, 2021</span>
                  <span class="probootstrap-location"><i class="icon-location2"></i>ISTEC, derrière Camlait Ndogbong</span>
                </div>
              </a>
            </div>
            <div class="clearfix visible-sm-block visible-xs-block"></div>
            <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate">
              <a f="event3" class="probootstrap-featured-news-box">
                <figure class="probootstrap-media"><img src="images/image_galery/noel.jpg" class="img-responsive" style="width: 369px;"></figure>
                <div class="probootstrap-text">
                  <h3>Cérémonie de la fête de Noël</h3><br>
                  <span class="probootstrap-date"><i class="icon-calendar"></i>Decembre 23, 2021</span>

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
