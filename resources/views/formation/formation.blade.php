@extends('parent')
@section('title','Formations')
@push('css')
 <!-- Styles pour la page formation -->
    <link href="{{ asset('css/juni_style.css') }}" rel="stylesheet">
    <!-- Styles fontawesome -->
    <link href="{{ asset('css/fontawesome-free/css/fontawesome-all.min.css') }}" rel="stylesheet">
@endpush


@section('content')
        <section class="probootstrap-section probootstrap-section-colored">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-left section-heading probootstrap-animate mb0">
              <h1 class="mb0">NOS FORMATIONS</h1>
            </div>
          </div>
        </div>
      </section>
     <!-- conteneur-->
    <div style="padding: 20px;background-color: transparent;" class="juni">
        <!-- conteneur flex du BTS/HND et LICENCE -->
        <div class="j_flex">
            <div class="center j_block_sec">
                <div class="j_flex_content j_radius_reverse">
                    <a href="/formations/cycle_bts" class="j_ablock_relative j_radius_reverse">
                        <img src="images/images_formations/h.jpg" alt="h.jpg" class="j_img_radius j_radius_reverse">
                        <div class="j_block_flot">
                             <i class="fas fa-hand-rock"></i>
                        </div>
                    </a>
                </div>
                <h3>CYCLE BTS/HND <br> (Bacc+2) </h3>
            </div>
            <div class="center j_block_sec">
                <div class="j_flex_content">
                    <a href="/formations/cycle_licence" class="j_ablock_relative">
                        <img src="images/images_formations/g.jpg" alt="g.jpg" class="j_img_radius">
                        <div class="j_block_flot">
                             <i class="fas fa-dove"></i>
                        </div>
                    </a>
                </div>
                <h3>CYCLE LICENCE/BACHELOR <br> PROFESSIONELLE <br> (Bacc+3) </h3>
            </div>
        </div>

         <!-- conteneur flex de MASTER EXPERTISE COMPTABLE-->
         <div class="j_flex">
            <div class="center j_block_sec">
                <div class="j_flex_content j_radius_reverse">
                    <a href="/formations/cycle_master" class="j_ablock_relative j_radius_reverse">
                        <img src="images/images_formations/f.jpg" alt="f.jpg" class="j_img_radius j_radius_reverse">
                        <div class="j_block_flot">
                             <i class="fas fa-history"></i>
                        </div>
                    </a>
                </div>
                <h3>CYCLE MASTER <br> (Bacc+5) </h3>
            </div>
            <div class="center j_block_sec">
                <div class="j_flex_content">
                    <a href="/formations/cycle_expertise" class="j_ablock_relative">
                        <img src="images/image_galery/expertise.jpg" alt="e.jpg" class="j_img_radius">
                        <div class="j_block_flot">
                            <i class="fas fa-heartbeat"></i>
                        </div>
                    </a>
                </div>
                <h3>CYCLE EXPERTISE <br> COMPTABLE</h3>
            </div>
        </div>
    </div>
    <section class="probootstrap-cta">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h2 class="probootstrap-animate" data-animate-effect="fadeInRight">Obtenez Votre Admission Maintenant !</h2>
              <a href="/inscription" role="button" class="btn btn-primary btn-lg btn-ghost probootstrap-animate" data-animate-effect="fadeInLeft">S'inscrire</a>
            </div>
          </div>
        </div>
      </section>
@endsection
@push('js')

@endpush
