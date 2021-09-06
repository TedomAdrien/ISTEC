@extends('parent')
@section('title','News-detaille4')

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
            <div class="col-md-12">
              <h3>Remise a niveau pour tous les etudiants de l'ISTEC inscris au niveau 2</h3>
              <h5>Pour maintenir un tres bon resultat au BTS/HND.</h5>
              <ul>
                  <li>Les étudiants du programme BTS 2 en 1 et tous les autres étudiants du niveau 2.</li>
                  <li>Les étudiants ayant commencent les cours après la rentrer et accusant un retard dans certaines matières.</li>
                   <li>Les étudiants ayant des lacunes en rapport avec des leçons de la première année et les matières de la terminale.</li>
              </ul>

              <h5></h5>

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
