@extends('parent')
@section('title','detail-news5')

@section('content')
<section class="probootstrap-section probootstrap-section-colored">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-left section-heading probootstrap-animate">
              <h1>Infos de l'école</h1>
            </div>
          </div>
        </div>
      </section>

      <section class="probootstrap-section">
        <div class="container">
          <div class="row">
            <div class="col-md-12"><h3>INITIATION AU DEVELOPPEMENT WEB  pour les nouveaux bacheliers</h3>
              <p style="font-size:22px"> cette formation spéciale est ouverte à tous les nouveaux bacheliers et les étudiants souhaitants s'inscrirent au niveau 1 dans notre institut. <br> La pédagogie est purement pratique. <br> au cours de la formation certains templates seront réalisés à l'instar du portfolio, bande et surtout la fin sera manque par la réalisation d'un vrai site statique. <br> Avec ses compétences l'apprenant pourra gagner des marches en développement web pour la création  des sites vitrines et des sites statiques. <br> Un développeur frontend peut travailler en FREELAN(seul) ou en équipe et peut gagner en moyenne 200000 fcfa par projet.. </p>

            
             {{-- <div class="probootstrap-flex-block">
                  <figure class="probootstrap-media"><img src="img/pro3.jpg" alt="Free Bootstrap Template by ProBootstrap.com" class="img-responsive"></figure>
                  <div class="probootstrap-image probootstrap-animate" style="background-image: url(img/slider_4.jpg)">
                  <a href="https://vimeo.com/45830194" class="btn-video popup-vimeo"><i class="icon-play3"></i></a>
                </div> --}}

                </div>
            </div>
          </div>
        </div>
      </section>
      <section class="probootstrap-cta">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h2 class="probootstrap-animate" data-animate-effect="fadeInRight">Obtenez votre admission maintenant!</h2>
              <a href="/inscription" role="button" class="btn btn-primary btn-lg btn-ghost probootstrap-animate" data-animate-effect="fadeInLeft">S'Inscrire</a>
            </div>
          </div>
        </div>
      </section>

      @endsection
