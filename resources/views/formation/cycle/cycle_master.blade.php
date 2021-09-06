@extends('formation.cycle.cycle')
@section('title','Cycles master')

@section('content_cycle')
     <section class="probootstrap-section probootstrap-section-colored " style="background:#f4a105;">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-left section-heading probootstrap-animate">
              <h2>CYCLE MASTER</h2>
            </div>
          </div>
        </div>
      </section>
  <div class="juni">
         <div class="porteur">
            <div class="dropdown">
                <div>
                    <button class="dropbtn"> <i class="fas fa-history"></i> <br> Master 1 <br> Proffessionnel </button>
                </div>
                <div class="dropdown-content">
                    <a href="/formations/cycle_master/mcf1">Finance Et Comptabilité</a>
                    <a href="/formations/cycle_master/mcp1">Communication Et Publicité</a>
                    <a href="/formations/cycle_master/mqse1">Qualité Sécurité Environnement</a>
                    <a href="/formations/cycle_master/mmsl1">Management Stratégique Et Logistique</a>
                </div>
            </div>
            <div class="dropdown">
                <div>
                    <button class="dropbtn"> <i class="fas fa-dove"></i> <br> Master 2<br> Proffessionel </button>
                </div>
                <div class="dropdown-content">
                    <a href="/formations/cycle_master/mbf2">Banque Et Finance</a>
                    <a href="/formations/cycle_master/mfa2">Fiscalité Appliquée</a>
                    <a href="/formations/cycle_master/mcp2">Communication Et Publicité</a>
                    <a href="/formations/cycle_master/mm2">Marketing (Chef De Projet)</a>
                    <a href="/formations/cycle_master/macg2">Audit Et Controle De Gestion</a>
                    <a href="/formations/cycle_master/mqse2">Qualité Sécurité Environnement</a>
                    <a href="/formations/cycle_master/mgrh2">Gestion Des Ressources Humaines</a>
                    <a href="/formations/cycle_master/mmsl2">Management Stratégique Et Logistique</a>
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
