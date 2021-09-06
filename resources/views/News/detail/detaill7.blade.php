@extends('parent')
@section('title','new2-detaille2')

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


             <h3>INITIATION A L'INFORMATIQUE</h3>
               <p> pour cette formation aucun pré-requis n'est demandé .l'apprenant devra juste se munir d'un ordinateur;dans le cas ou il n'en possede par  ISTEC lui en fournira  pour pratiquer les acquis À remettre À la fin de la journee .<br> Cette formation a pour but de develloper l'esprit de recherche chez l'apprenant et surtout le familiariser avec l'outil informatique .À la fin l'apprenant aura acquis de  nouvelle competence qui pourra mentionner dans son cv . il pourra egalement ramener sa formation dans le cadre scolaire au niveau de la realisation des memoires.
               <h3> competences acquises </h3>
               realisation des fichiers textes<br>
               conception des flayers <br>
               realisation des presentations asistes par ordinateur <br>
               montage video et photos <br>
               creation des bases de donnees avec EXCEL <br>


               </p>
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
