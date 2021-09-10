@extends('News.News')
@section('title','News/1')
@section('toto')

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
              <div class="probootstrap-flex-block">
                <div class="probootstrap-text probootstrap-animate">
                  <div class="text-uppercase probootstrap-uppercase">Infos</div>
                  <h3>ISTEC CADEAUX</h3>
                  <p style="color: red;font-size:30px">laptop gratuit
                   <p>

                    <p>Ah oui oui la generosite d'ISTEC est sans limite. <br>Apres avoir paye <span style="color: red; font-size:15px"> totalement la premiere tranche avant la rentre accademique ,recoit gratuitement un laptop.</span>
                      <p>
                    <span class="probootstrap-date"><i class="icon-calendar"></i>tous les jours avant la rentree academique </span>

                    <span class="probootstrap-location"><i class="icon-location"></i>Campus ISTEC,En face scierie Ndogbong</span>
                  </p>
                  <p><a href="{{asset('/News/detail/1')}}" class="btn btn-primary">Plus d'infos</a></p>
                </div>
                <div class="probootstrap-image probootstrap-animate" style="background-image: ">
                  <img src="{{asset('images/image_galery/pb.jpg')}}">
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>




 @endsection



















