@extends('parent')
@section('title','News')
@section('content')


    
    @yield('toto')
      <section class="probootstrap-section">
        <div class="container">

          <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate fadeInUp probootstrap-animated">
              <a href="{{asset('News/1')}}" class="probootstrap-featured-news-box">
                <span></span>
                <figure class="probootstrap-media"><img src="{{asset('images/image_galery/pb1.jpg')}}"  class="img-responsive" style="width: 360px;height: 230px;"></figure>
                <div class="probootstrap-text">
                  <h3>ISTEC CADEAUX</h3>
                    <i><p>gagne un laptop   PBHER si tu payes la premier tranche avant le 29 septembre</p></i>   
                  <span class="probootstrap-date"><i class="icon-calendar"></i>tous les jours avant la rentrée académique</span>
                  <span class="probootstrap-location"><i class="icon-location"></i>Campus ISTEC,En face scierie Ndogbong</span>

                  <span class="probootstrap-clock" style="color:gray"><i class="icon-clock"></i> De 8H00 A 17h00  </span>


                </div>
              </a>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate fadeInUp probootstrap-animated">
              <a href="{{asset('News/2')}}" class="probootstrap-featured-news-box">
                <span></span>

                <figure class="probootstrap-media"><img src="{{asset('images/image_galery/images.jpg')}}" style="width: 360px;height: 230px;"class="img-responsive"></figure>
                <div class="probootstrap-text">
                  <h3>ISTEC t'offre un cadeau</h3>
                  <i><p>Comme moi inscris toi avant le 20 septembre 2021 et beneficis de nombreux cadeaux </p></i>
                    <span class="probootstrap-date"><i class="icon-calendar"></i> tous les jours avant la rentree academique</span>
                    <span class="probootstrap-location"><i class="icon-location"></i> Campus ISTEC,En face scierie Ndogbong</span>

                   <span class="probootstrap-clock" style="color:gray"><i class="icon-clock" style="color:rgb(22, 21, 21)"></i> De 8H00 A 17h00 </span>

                </div>
              </a>
            </div>
            <div class="clearfix visible-sm-block visible-xs-block"></div>
            <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate fadeInUp probootstrap-animated">
              <a href="{{asset('News/3')}}" class="probootstrap-featured-news-box">
                <span></span>
                <figure class="probootstrap-media"><img src="{{asset('images/image-news/n3.jpg')}}" class="img-responsive" style="width: 360px;height: 230px;"></figure>
                <div class="probootstrap-text">
                  <h3>INSCRIPTIION</h3>

                    <p style="margin:0px">Bienvenu a ISTEC  Les inscriptions ont débuté depuis mais 2021 et se poursuivent jusqu'en octobre 2021</p>

                  <span class="probootstrap-date"><i class="icon-calendar"></i>12 Aout 2021</span>
                  <span class="probootstrap-location"><i class="icon-location"></i>Campus ISTEC,En face scierie Ndogbong</span>
                  <span class="probootstrap-clock" style="color:grey"><i class="icon-clock"></i> De 8H00 A 17h00 </span>
                </div>
              </a>
            </div>
          </div>
          <div class="row">
            <div class="row">
              <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate fadeInUp probootstrap-animated">
                <a href="{{asset('News/4')}}" class="probootstrap-featured-news-box">
                  <figure class="probootstrap-media"><img src="{{asset('images/image_galery/students.jpg')}}"  class="img-responsive" style="width: 361px;height: 239px;"></figure>
                  <div class="probootstrap-text">

                    <h3>📚remise a niveau des etudiants inscris au niveau 2</h3>
                  <p>Votre réussite est notre prioritée</p>
                  <span class="probootstrap-date"><i class="icon-calendar"></i>14 septembre 2021</span>
                  <span class="probootstrap-location"><i class="icon-location"></i>Campus ISTEC,En face scierie Ndogbong</span>
                  <span class="probootstrap-clock"style="color:rgb(21, 21, 21)"><i class="icon-clock"style="color:rgb(21, 21, 21)"></i> De 8H00 A 17h00</span><br>
                </div>
                </a>
              </div>
              <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate fadeInUp probootstrap-animated">
                <a href="{{asset('News/5')}}" class="probootstrap-featured-news-box">
                  <figure class="probootstrap-media"><img src="{{asset('images/image-news/n5.jpg')}}"  class="img-responsive" style="width: 360px;height: 230px;"></figure>
                  <div class="probootstrap-text">

                    <h3>INITIATION AU DEVELOPPEMENT WEB</h3>
                    <p> Tu es un  nouveaux bacheliers?<br> alors click et reçois ta suprise</p>
                    <span class="probootstrap-date"><i class="icon-calendar"></i>Jusqu'au 10 septembre </span>
                    <span class="probootstrap-clock" style="color:grey"><i class="icon-clock"style="color:rgb(21, 21, 21)"></i>  13H-17H</span><br>


                  </div>
                </a>
              </div>
              <div class="clearfix visible-sm-block visible-xs-block"></div>
              <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate fadeInUp probootstrap-animated">
                <a href="{{asset('News/6')}}" class="probootstrap-featured-news-box">
                  <figure class="probootstrap-media"><img src="{{asset('images/image-news/t.JPG')}}"  class="img-responsive" style="width: 360px;height: 230px;"></figure>
                  <div class="probootstrap-text">
                    <h3>STAGE ACADÉMIQUE</h3>
                    <p style="margin:0px;">conception du site web d'ISTEC et d'application web de gestions du contenue du site ,des étudiants et du personnels par les étudiants du niveau 1</p>
                    <span class="probootstrap-date"><i class="icon-calendar"></i>9 juillet 2021</span>
                  <span class="probootstrap-clock"style="color:grey"><i class="icon-clock"style="color:gray"></i> De 8H00 A 17h00</span>


                  </div>
                </a>
              </div>
            </div>
            <div class="clearfix visible-md-block"></div>

            <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate fadeInUp probootstrap-animated">
              <a href="{{asset('News/7')}}" class="probootstrap-featured-news-box">
                <figure class="probootstrap-media"><img src="{{asset('images/image-news/n4.jpg')}}"  class="img-responsive" style="width: 360px;height: 230px;"></figure>
                <div class="probootstrap-text">
                  <h3>INITIATION A L'INFORMATIQUE </h3>
                   <p>formation en Bureautique & Infographie<p>

                 <span class="probootstrap-date"><i class="icon-calendar"></i>14 juillet 2021</span>
                 <span class="probootstrap-location"><i class="icon-location"></i>Campus ISTEC,En face scierie Ndogbong</span>
                 <span class="probootstrap-clock" style="color:gray"><i class="icon-clock"></i> 9H00-13H00</span>
                 <span class="probootstrap-clock"style="color:gray"><i class="icon-clock" style="color:gray"></i> 13H30-17H30</span>
                </div>
              </a>
            </div>
            <div class="clearfix visible-sm-block visible-xs-block"></div>
            <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate fadeInUp probootstrap-animated">
              <a href="{{asset('News/8')}}" class="probootstrap-featured-news-box">
                <figure class="probootstrap-media"><img src="{{asset('images/image-news/12.jpeg')}}"  class="img-responsive" style="width: 360px;height: 230px;"></figure>
                <div class="probootstrap-text">

                  <h3>JOURNEE ORIENTATION SCOLAIRE</h3>
                  <p>nous et nos expert conseiller d'orientation vous aidons à faire le meilleur choix pour votre avenir</p>


                  <span class="probootstrap-date"><i class="icon-calendar"></i>14 juillet 2021</span>

                  <span class="probootstrap-location"><i class="icon-location"></i>Campus ISTEC,En face scierie Ndogbong</span>
                  <span class="probootstrap-clock" style="color:grey"><i class="icon-clock" style="color:gray"></i> De 8H00 A 17h00</span>
                </div>
              </a>
            </div>
           
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
              <a href="/inscription" role="button" class="btn btn-primary btn-lg btn-ghost probootstrap-animate" data-animate-effect="fadeInLeft">S'Inscrire</a>
            </div>
          </div>
        </div>
      </section>
    @endsection











