@extends('parent')
@section('title','detaill')

@section('content')



      @yield('begin')
      <section class="probootstrap-section probootstrap-section-colored">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-left section-heading probootstrap-animate">

              <h1 style="color: green;font-size: 30px">Infos de l'ecole</h1>
                <p style="font-size: 30px"></p>

            </div>
          </div>
        </div>
   </section>

   @yield('footer')

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
