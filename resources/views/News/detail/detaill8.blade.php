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
            <div class="col-md-12">

             <p><h2>JOURNEE ORIENTATION SCOLAIRE</h2></p>
                
                  <p>ISTEC toujours a l'écoute  de ses étudiants et futurs étudiants. <br> La journée orientation a pour but d'orienter l'étudiant en fonction de son BAC , de ses projets  futurs, sa passion et les avis des parents parraport au filé qu'offre ISTEC.</p>
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
              <a href="/inscription" role="button" class="btn btn-primary btn-lg btn-ghost probootstrap-animate" data-animate-effect="fadeInLeft">Inscrire</a>
            </div>
          </div>
        </div>
      </section>

      @endsection
