@extends('parent')
@section('title','About')

@section('content')
    <div>

    <div class="probootstrap-search" id="probootstrap-search">
      <a href="#" class="probootstrap-close js-probootstrap-close"><i class="icon-cross"></i></a>
      <form action="#">
        <input type="search" name="s" id="search" placeholder="Search a keyword and hit enter...">
      </form>
    </div>

    <div class="probootstrap-page-wrapper">

      <section class="probootstrap-section probootstrap-section-colored">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-left section-heading probootstrap-animate">
              <h1>A propos de L'ISTEC</h1>
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
                  <div class="text-uppercase probootstrap-uppercase">Histoire</div>
                  <h3>Jetez un oeil à la façon dont nous avons débuté</h3>
            <p>Fondé en 2008, l'institut ISTEC/ISTACO est un établissement d'enseignement supérieur spécialisé dans des domaines aussi variés que le commerce et gestion, la communication de l'information, l'industrie et les nouvelles technologies, et la formation paramédicale... </p>
                  <p><a href="/abouts/detail" class="btn btn-primary">Pour en savoir plus</a></p>
                </div>
                <div class="probootstrap-image probootstrap-animate" style="background-image: url(img/slider_4.jpg)">
                  <a href="{{ asset('videos/presentation.mp4') }}" class="btn-video"><i class="icon-play3"></i><img src="{{ asset('images/image_galery/abouts.jpg') }}" style="width: 100%; height: 100%; "></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>




      <section class="probootstrap-section">
        <div class="container">

          <div class="col-md-6">
            <p>
              <img src="images/image_Events/pro1.jpg" alt="Free Bootstrap Template by ProBootstrap.com" class="img-responsive">
            </p>
          </div>
          <div class="col-md-6 col-md-push-1">
              <h3>Une formation axée sur des projets</h3>
            <p>La formation étant axée autour de la réalisation des projets, nos enseignants et nos étudiants s'investissent corps et âme pour méner à bien tous nos projets.Son offre permet aux étudiants d'adapter leur parcours au fur et à mesure de leur évolution personnelle. <br> Par exemple, Voici quelques projets réalisés par nos étudiants de 2008 à 2021:
                <ul>
                    <li>Construction de nouveaux bâtiments à ISTEC (boadibo et ndogbong): par nos étudiants de BATIMENT.</li>
                    <li>Développement et mise en ligne de l'application web de l'ISTEC: par nos étudiants de GENIE LOGICIEL.</li>
                    <li>Enregistrement des contrats de AES-SONEL: par nos étudiants de CGE.</li>
                    <li>Digitalisation des inscriptions (en ligne) de L'ISTEC: par nos étudiants de GENIE LOGICIEL</li>
                    <li>Amélioration de la gestion de la relation de CSANT: par nos étudiants de MANAGEMENT</li>
                    <li>Amélioration de la gestion de ressources humaines de CAMARADE EXPRESS VOYAGE: par nos étudiants de RESSOURCE HUMAINE</li>
                    <li>etc...</li>
                </ul>
            </p>
          </div>


        </div>
      </section>


    <section class="probootstrap-section">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center section-heading probootstrap-animate">
              <h2>Pourquoi Etudier<br>A<br>L'ISTEC</h2>
              {{-- <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto provident qui tempore natus quos quibusdam soluta at.</p> --}}
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="service left-icon probootstrap-animate">
                <div class="icon"><i class="icon-checkmark"></i></div>
                <div class="text">
                  <h3>Sur le plan de la qualité pédagogique:</h3>
                  <p>Le promoteur est un expert-comptable diplomé économiste pertinent et expérimenté dans l'enseignement supérieur; <br>Tous les enseignants sont des universitaires de haut niveau et des professionnels chevronnés. <br>Les stages académiques et professionnels sont garantis pour tous les étudiants de tous les cycles. <br>Prise en charge médicale pour tous les étudiants.
                  Des cours académiques et professionnels sont garantis pour tous les étudiants de tous les cycles. <br>Des professeurs de haut niveau et des professionnels aguerris.</p>
                
                </div>
              </div>
              <div class="service left-icon probootstrap-animate">
                <div class="icon"><i class="icon-checkmark"></i></div>
                <div class="text">
                  <h3>Sur le plan de la qualité financière:</h3>
                  <p>Les frais de scolarité sont abordables et flexibles pour tous. <br>Des bourses d'étude accompagnent l'excellence académique. <br>Des bourses spéciales pour personnes handicapées démunies et vulnérables.</p>
                </div>
              </div>
              

            </div>
            <div class="col-md-6">
              <div class="service left-icon probootstrap-animate">
                <div class="icon"><i class="icon-checkmark"></i></div>
                <div class="text">
                  <h3>En terme de qualité sociale:</h3>
                  <p>L'association des étudiants et l'assemnlée générale des enseignants améliorent le vivre ensemble sur les campus. <br>Cours de langue, d'informatique, de conduite (Auto-école) et de préparation aux concours administratifs accélèrent l'insertion socio-professionnelle des étudiants. </p>
                </div>
              </div>
              <div class="service left-icon probootstrap-animate">
                <div class="icon"><i class="icon-checkmark"></i></div>
                <div class="text">

                  <h3>Sur le plan de la qualité infrastructurelle:</h3>
                  <p>Nos campus disposent de batiment autonomes et modernes pour l'organisation des formations standardisées et personalisées.<br>Plusieurs atéliers équipés, laboratoires, bibliothèque et salles de travaux dirigés facilitent la professionalisation des enseignements. <br>Un incubateur en cours d'achevement pour développer l'entrepreneuriat et le montage de projets jeunes et startup. </p>
                </div>
              </div>

            </div>
          </div>
          <!-- END row -->
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


    </div>
    </div>
@endsection
