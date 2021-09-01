@extends('parent')
@section('title','detail-news6')

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
             <h2>Stage Académique Pour Tous </h2>

                  <h5>l'ISTEC en partenariats avec un grand nombre d'entreprises dans tout le Cameroun, garantit un stage académique pour tous ces apprenants. En effet, tous les étudiants doivent faire un stage académique pour leur soutenance au BTS alors l'administration de l'ISTEC se rassure que tous ces apprenants durant la période des vacances intergre l'une de nos entreprises partenaire(avec suivi pédagogique) a fine de metre en exergue les compétences apris au cours de l'année. la fin se justifie par un rapport de stage bien élaborer par l'étudiant  corrige par leur encadreur académique.</h5>
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
