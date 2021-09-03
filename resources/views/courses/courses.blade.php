@extends('parent')
@section('title','Courses')

@section('content')
        <div>

      <section class="probootstrap-section probootstrap-section-colored">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-left section-heading probootstrap-animate">
              <h1>Les Filieres Les Plus Démandées</h1>
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
                  <div class="text-uppercase probootstrap-uppercase">Filières phares</div>
                  <h3>Comptabilité Et Gestion D'Entreprise</h3>
                  <p>Responsable en comptabilité, capable d'organiser la gestion des obligations comptables, fiscales et sociales, de participer à l'élaboration  des informations de gestion et contribuer aux prévisions et à la préparation des décisions.</p>
                  <p><a href="/inscription" class="btn btn-primary">s'inscrire</a> <span class="enrolled-count">2,928 students enrolled</span></p>
                </div>
                <div class="probootstrap-image probootstrap-animate" style="background-image: url(img/slider_3.jpg)">
                  <a href="{{ asset('images/images_formations/g.jpg') }}" class="btn-video"><i class="icon-play3"></i> <img src="{{ asset('images/images_formations/g.jpg') }}" style="width: 100%; height: 100%; "></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="probootstrap-section">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <div class="probootstrap-service-2 probootstrap-animate">
                <div class="image">
                  <div class="image-bg" style="height:354px ; width: 165px">
                    <img src="{{ asset('images/images_formations/GLT.jpg') }}" style="width: 100%; height: 100%; ">
                  </div>
                </div>
                <div class="text">
                  <span class="probootstrap-meta"><i class="icon-calendar2"></i> September 06, 2021</span>
                  <h3>Logistique Et Transport</h3>
                  <p>Responsable de l'organisation et du management des opérations de transport et des prestations logistiques sur les marchés locaux, régionaux, nationaux et internationaux.</p>
                  <p><a href="/inscription" class="btn btn-primary">s'inscrire</a> <span class="enrolled-count">2,928 étudiants inscrits</span></p>
                </div>
              </div>

              <div class="probootstrap-service-2 probootstrap-animate">
                <div class="image">
                  <div class="image-bg" style="height:354px ; width: 165px">
                    <img src="{{ asset('images/images_formations/w.jpeg') }}" style="width: 100%; height: 100%; ">
                  </div>
                </div>
                <div class="text">
                  <span class="probootstrap-meta"><i class="icon-calendar2"></i> September 06, 2021</span>
                  <h3>Assistant Manager</h3>
                  <p>Collaborateurs des directeurs généraux, des directeurs d'unités ou des chefs de services. Organisés, rigoureux, dynamiques, discrets, ils soutiennent, facilitent et suivent le travail du responsable afin de le rendre plus éfficace.</p>
                  <p><a href="/inscription" class="btn btn-primary">s'inscrire</a> <span class="enrolled-count">7,202 étudiants inscrits</span></p>
                </div>
              </div>

            </div>
            <div class="col-md-6">
                 <div class="probootstrap-service-2 probootstrap-animate">
                <div class="image">
                  <div class="image-bg" style="height:354px ; width: 165px">
                    <img src="{{ asset('images/images_formations/t.jpg') }}" style="width: 100%; height: 100%; ">
                  </div>
                </div>
                <div class="text">
                  <span class="probootstrap-meta"><i class="icon-calendar2"></i> September 06, 2021</span>
                  <h3>Genie Logiciel</h3>
                  <p>Spécialistes capable de développer des applications informatiques dans divers domaines, en faisant appel à leurs capacités d’étude du besoin, d’analyse et de codage.</p>
                  <p><a href="/inscription" class="btn btn-primary">s'inscrire</a> <span class="enrolled-count">12,582 étudiants inscrits</span></p>
                </div>
              </div>

              <div class="probootstrap-service-2 probootstrap-animate">
                <div class="image">
                  <div class="image-bg" style="height:354px ; width: 165px">
                    <img src="{{ asset('images/images_formations/électronique.jpg') }}" style="width: 100%; height: 100%; ">
                  </div>
                </div>
                <div class="text">
                  <span class="probootstrap-meta"><i class="icon-calendar2"></i> September 06, 2021</span>
                  <h3>Electrotechnique</h3>
                  <p>Spécialistes de l’étude, de la mise en œuvre, de l’utilisation et de la maintenance des équipements électriques, capable d’intervenir dans la conception, la réalisation et la gestion de systèmes électrotechniques.</p>
                  <p><a href="/inscription" class="btn btn-primary">s'inscrire</a> <span class="enrolled-count">9,582 students enrolled</span></p>
                </div>
              </div>

            </div>
          </div>

          <div class="row">
            <div class="col-md-6">
              <div class="probootstrap-service-2 probootstrap-animate">
                <div class="image">
                  <div class="image-bg" style="height:354px ; width: 165px">
                    <img src="{{ asset('images/images_formations/accounting.jpg') }}" style="width: 100%; height: 100%; ">
                  </div>
                </div>
                <div class="text">
                  <span class="probootstrap-meta"><i class="icon-calendar2"></i> September 06, 2021</span>
                  <h3>Management</h3>
                  <p>Professionals who are going to pursue careers in areas of investment analysis and management, banking, and auditing, consulting and financial management.</p>
                  <p><a href="/inscription" class="btn btn-primary">s'inscrire</a> <span class="enrolled-count">2,928 étudiants inscrits</span></p>
                </div>
              </div>

              <div class="probootstrap-service-2 probootstrap-animate">
                <div class="image">
                  <div class="image-bg" style="height:354px ; width: 165px">
                    <img src="{{ asset('images/images_formations/batiment.jpg') }}" style="width: 100%; height: 100%; ">
                  </div>
                </div>
                <div class="text">
                  <span class="probootstrap-meta"><i class="icon-calendar2"></i> September 06, 2021</span>
                  <h3>Batiment</h3>
                  <p>Spécialistes du bâtiment, disposant de solides connaissances dans l’ensemble des techniques d’une construction neuve ou d’une réhabilitation, ainsi que dans le processus de réalisation d’un ouvrage.</p>
                  <p><a href="/inscription" class="btn btn-primary">S'inscrire</a> <span class="enrolled-count">7,202 étudiants inscrits</span></p>
                </div>
              </div>

            </div>
            <div class="col-md-6">
              <div class="probootstrap-service-2 probootstrap-animate">
                <div class="image">
                  <div class="image-bg" style="height:354px ; width: 165px">
                    <img src="{{ asset('images/images_formations/gestion.jpg') }}" style="width: 100%; height: 100%; ">
                  </div>
                </div>
                <div class="text">
                  <span class="probootstrap-meta"><i class="icon-calendar2"></i> September 06, 2021</span>
                  <h3>Gestion De La Qualité</h3>
                  <p>Spécialistes assurant la qualité des biens et services dans le cadre de l'amélioration de la performance en termes de coût, qualité et délai afin de satisfaire aux exigences des clients.</p>
                  <p><a href="inscription" class="btn btn-primary">S'inscrire</a> <span class="enrolled-count">12,582 étudiants inscrits</span></p>
                </div>
              </div>

              <div class="probootstrap-service-2 probootstrap-animate">
                <div class="image">
                  <div class="image-bg" style="height:354px ; width: 165px">
                    <img src="{{ asset('images/images_formations/topo.jpg') }}" style="width: 100%; height: 100%; ">
                  </div>
                </div>
                <div class="text">
                  <span class="probootstrap-meta"><i class="icon-calendar2"></i> September 06, 2021</span>
                  <h3>Topographie</h3>
                  <p>Experts en relevés métriques sur le terrain et capable de traiter ces données avec l'équipement approprié dans le but d'élaborer des plans et des cartes, et fournissant un travail de qualité dans le respect des règles de sécurité</p>
                  <p><a href="inscription" class="btn btn-primary">S'inscrire</a> <span class="enrolled-count">9,582 étudiants inscrits</span></p>
                </div>
              </div>

            </div>
          </div>
        </div>
      </section>



      <section class="probootstrap-section">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center section-heading probootstrap-animate">
              <h2>Quelques uns de notre personnel</h2>
              <p class="lead">ISTEC, LE SAVOIR FAIRE A PARTAGER...</p>
            </div>
          </div>
          <!-- END row -->

          <div class="row">
            <div class="col-md-3 col-sm-6">
              <div class="probootstrap-teacher text-center probootstrap-animate">
                <figure class="media">
                  <img src="{{ asset('images/images_formations/m.jpg') }}" style="width: 100%; height: 100%;" class="img-responsive">
                </figure>
                <div class="text">
                  <h3>Dr SIMO</h3>
                  <p>Directeur Académique</p>
                  <ul class="probootstrap-footer-social">
                    <li class="twitter"><a href="#"><i class="icon-twitter"></i></a></li>
                    <li class="facebook"><a href="#"><i class="icon-facebook2"></i></a></li>
                    <li class="instagram"><a href="#"><i class="icon-instagram2"></i></a></li>
                    <li class="google-plus"><a href="#"><i class="icon-google-plus"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="probootstrap-teacher text-center probootstrap-animate">
                <figure class="media">
                  <img src="{{ asset('images/images_formations/n.jpg') }}" style="width: 100%; height: 100%;" class="img-responsive">
                </figure>
                <div class="text">
                  <h3>Mxlle ARIANNE</h3>
                  <p>Assistante De Direction</p>
                  <ul class="probootstrap-footer-social">
                    <li class="twitter"><a href="#"><i class="icon-twitter"></i></a></li>
                    <li class="facebook"><a href="#"><i class="icon-facebook2"></i></a></li>
                    <li class="instagram"><a href="#"><i class="icon-instagram2"></i></a></li>
                    <li class="google-plus"><a href="#"><i class="icon-google-plus"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="clearfix visible-sm-block visible-xs-block"></div>
            <div class="col-md-3 col-sm-6">
              <div class="probootstrap-teacher text-center probootstrap-animate">
                <figure class="media">
                  <img src="{{ asset('images/images_formations/o.jpg') }}" style="width: 100%; height: 100%;" class="img-responsive">
                </figure>
                <div class="text">
                  <h3>Mr NGUEMKAM</h3>
                  <p>Ingénieur Réseau</p>
                  <ul class="probootstrap-footer-social">
                    <li class="twitter"><a href="#"><i class="icon-twitter"></i></a></li>
                    <li class="facebook"><a href="#"><i class="icon-facebook2"></i></a></li>
                    <li class="instagram"><a href="#"><i class="icon-instagram2"></i></a></li>
                    <li class="google-plus"><a href="#"><i class="icon-google-plus"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="probootstrap-teacher text-center probootstrap-animate">
                <figure class="media">
                  <img src="{{ asset('images/images_formations/p.jpg') }}" style="width: 100%; height: 100%;" class="img-responsive">
                </figure>
                <div class="text">
                  <h3>Mme ALLIANCE</h3>
                  <p>Sécretaire</p>
                  <ul class="probootstrap-footer-social">
                    <li class="twitter"><a href="#"><i class="icon-twitter"></i></a></li>
                    <li class="facebook"><a href="#"><i class="icon-facebook2"></i></a></li>
                    <li class="instagram"><a href="#"><i class="icon-instagram2"></i></a></li>
                    <li class="google-plus"><a href="#"><i class="icon-google-plus"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>

        </div>
      </section>

      <section class="probootstrap-cta">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h2 class="probootstrap-animate" data-animate-effect="fadeInRight">Obtenez Votre Admission Maintenant !</h2>
              <a href="/inscription" role="button" class="btn btn-primary btn-lg btn-ghost probootstrap-animate" data-animate-effect="fadeInLeft">INSCRIPTION</a>
            </div>
          </div>
        </div>
      </section>
        </div>
@endsection
