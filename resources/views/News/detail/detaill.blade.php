@extends('parent')
@section('title','detaill')

@section('content')
<section class="probootstrap-section probootstrap-section-colored">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-left section-heading probootstrap-animate">
              <h1>ISTEC ENCORE PLUS GRAND</h1>
            </div>
          </div>
        </div>
      </section>

      <section class="probootstrap-section">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
       
               <h2 style="color: green">toujours dans l'innovation</h2>
                  <p> dans le cycle BTS et LICENCE, ISTEC ouvre pour la première fois la faculté de médecine. Le rapport qualité prix est au même niveau que celui des facultés de médecine public et surtout celui de l'université des montagnes. Grâce à son laboratoire bien équipe, de ses enseignants dévoués et compétents, un BTS en trois ou une LICENCE en quatre ans ISTEC vous garantir une formation qualifie suivie d'une réussite totale. <br>Dans cette faculte ,les filieres suivantes seront disponibles <br> <h2  style="color:green">cycle bts</h2>  <br> <span  >Soin infimiere <br>Technicien de laboratoire <br> Vente en pharmacie <br> Secretaire medical <br> la Pension annuelle pour toute filiere confondu s eleve a 600000fcfa <br> </span>
                  <h2  style="color: green"> cycle licence</h2> QHSE: Qualite Hygiene Securite Environnement <br> Pension 700000fcfa </p>
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
              <a href="/inscription" role="button" class="btn btn-primary btn-lg btn-ghost probootstrap-animate" data-animate-effect="fadeInLeft">S'inscrire</a>
            </div>
          </div>
        </div>
      </section>

      @endsection
