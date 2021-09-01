@extends('parent')
@section('title','news1-detaille1')

@section('content')
<section class="probootstrap-section probootstrap-section-colored">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-left section-heading probootstrap-animate">
              <h3 style="color: green;font-size: 30px">INSCRIPTION</h3>
                <p style="font-size: 30px">Les inscriptions ont débuté depuis mais 2021 et se poursuivent jusqu'en octobre 2021 chez la secretaire au niveau de l'accueil.</p>
            </div>
          </div>
        </div>
      </section>

      <section class="probootstrap-section">
        <div class="container">
          <div class="row">
            <div class="cl-md-12">
             {{-- <p><h1>Description :</h1></p>

                <h3>Initiation A l'Informatique</h3>
                  <p>ISTEC-ISTACO</p> --}}

                <p>

                   <h1 style="font-size:50px; color:green; text-decoration:underline"> Modalité d'admission  <br> </h1>

                   <h2>  -- pour toutes les spécialités (BTS / HND) </h2>

                    01 Photocopies certifiée de l'acte de naissance

                    01 Photocopies certifiée du baccalauréat ou équivalent<br>

                    02 photos couleurs 4*4<br>

                    02 Enveloppes A4<br>

                    01 Fichr d'inscription a retirer au campus ISTEC<br>

                    photocopie CNI <br>

                   <h2> -- licence pro </h2>

                    CV

                    photocopie CNI<br>

                    certificat médical<br>

                    02 photo 4*4<br>

                    01 lettres de motivation<br>

                    photocopie certifie du relevé de note du baccalauréat<br>

                    photocopie certifie de l'acte de naissance<br>

                    photocopie certifie du relevé de note du BTS<br>

                    04 enveloppes (01 timbrée) <br>

                   <h2> -- master </h2>

                    CV<br>

                    photocopie CNI<br>

                    certificat médical<br>

                    02 photo 4*4<br>

                    01 lettres de motivation<br>

                    photocopie certifie du relevé de note du baccalauréat<br>

                    photocopie certifie de l'acte de naissance<br>

                    photocopie certifie du relevé de note du BTS<br>

                    photocopie certifie du relevé de note de la licence<br>

                    04 enveloppes (01 timbrée) <br>

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
         <div class="col-md-12">
              <h2 class="probootstrap-animate" data-animate-effect="fadeInRight">Obtenez votre admission maintenant!</h2>
              <a href="/inscription" role="button" class="btn btn-primary btn-lg btn-ghost probootstrap-animate" data-animate-effect="fadeInLeft">S'Inscrire</a>
            </div>
          </div>
        </div>
      </section>

      @endsection
