@extends('formation.cycle.cycle')
@section('title','Cycles expertise')

@section('content_cycle')
    <section class="probootstrap-section probootstrap-section-colored " style="background:#f4a105;">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-left section-heading probootstrap-animate">
              <h2>CYCLE EXPERTISE</h2>
            </div>
          </div>
        </div>
      </section>
  <div class="juni">
        <div class="porteur">
            <div class="dropdown">
                <div>
                    <button class="dropbtn"> <i class="fas fa-heartbeat"></i> <br> Filieres Commerciales <br> et Gestions </button>
                </div>
                <div class="dropdown-content">
                    <a href="/formations/cycle_bts/expertiseComptable"> Expertise Comptable </a>
                </div>
            </div>
        </div>
    </div>
     <section class="probootstrap-cta"style="background: #f4a105;">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h2 class="probootstrap-animate" data-animate-effect="fadeInRight">Obtenez Votre Admission Maintenant !</h2>
              <a href="/inscription" role="button" class="btn btn-primary btn-lg btn-ghost probootstrap-animate" data-animate-effect="fadeInLeft">INSCRIPTION</a>
            </div>
          </div>
        </div>
      </section>
@endsection
