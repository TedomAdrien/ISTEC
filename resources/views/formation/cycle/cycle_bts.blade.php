@extends('formation.cycle.cycle')
@section('title','Cycles bts et hnd')

@section('content_cycle')
        <section class="probootstrap-section probootstrap-section-colored " style="background:#f4a105;">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-left section-heading probootstrap-animate">
              <h2>CYCLE BTS</h2>
            </div>
          </div>
        </div>
      </section>
  <div class="juni">
         <div class="porteur">
            <div class="dropdown">
                <div>
                    <button class="dropbtn"> <i class="fas fa-dove"></i> <br> Filieres Commerciales <br> et Gestions </button>
                </div>
                <div class="dropdown-content">
                    <a href="/formations/cycle_bts/assur">Assurance</a>
                    <a href="/formations/cycle_bts/ama">Management</a>
                    <a href="/formations/cycle_bts/mic_fin">Micro Finance</a>
                    <a href="/formations/cycle_bts/ama">Assistant Manager</a>
                    <a href="/formations/cycle_bts/bnk_fin">Banque Et Finance</a>
                    <a href="/formations/cycle_bts/ama">Gestion Des Projets</a>
                    <a href="/formations/cycle_bts/grh">Ressources Humaines</a>
                    <a href="/formations/cycle_bts/ges_qual">Gestion De La Qualité</a>
                    <a href="/formations/cycle_bts/com_int">Commerce International</a>
                    <a href="/formations/cycle_bts/ama">Management Evenementiel</a>
                    <a href="/formations/cycle_bts/mcv"> Marketing Commerce Vente</a>
                    <a href="/formations/cycle_bts/com_ets">Communication D'Entreprise</a>
                    <a href="/formations/cycle_bts/glt"> Gestion Logistique Et Transport </a>
                    <a href="/formations/cycle_bts/gsi">Gestion Des Systeme D'Information</a>
                    <a href="/formations/cycle_bts/cge"> Comptabilite Et Gestion Des Entreprises </a>
                </div>
            </div>

            <div class="dropdown">
                <div>
                    <button class="dropbtn"> <i class="fas fa-heartbeat"></i> <br> Filieres Industrielles <br> et Technologies </button>
                </div>
                <div class="dropdown-content">
                    <a href="/formations/cycle_bts/bat">Batiment</a>
                    <a href="/formations/cycle_bts/topo">Topographie</a>
                    <a href="/formations/cycle_bts/chaudro">Chaudronnerie</a>
                    <a href="/formations/cycle_bts/genie_log">Genie Logiciel</a>
                    <a href="/formations/cycle_bts/froid_clim">Froid Et Climatisation</a>
                    <a href="/formations/cycle_bts/iia">Informatique Industrielle</a>
                    <a href="/formations/cycle_bts/info_ges">Informatique De Gestion</a>
                    <a href="/formations/cycle_bts/elec">Electronique/Electrotechnique</a>
                    <a href="/formations/cycle_bts/reso_tel">Telecommunication</a>
                    <a href="/formations/cycle_bts/reso_secu">Réseau Et Sécurité</a>
                    <a href="/formations/cycle_bts/maint_syst_info">Maintenance Des Systemes Informatiques</a>
                </div>
            </div>
        </div>
    </div>

   <div class="juni">
         <h1 class="center j_white">CYCLE HND:</h1>
         <div class="porteur">
            <div class="dropdown">
                <div>
                    <button class="dropbtn"> <i class="fas fa-history"></i> <br> Commercial Sectors <br> And Management </button>
                </div>
                <div class="dropdown-content">
                    <a href="/formations/cycle_bts/statistics">Statistics</a>
                    <a href="/formations/cycle_bts/insurance">Insurance</a>
                    <a href="/formations/cycle_bts/accounting">Accounting</a>
                    <a href="/formations/cycle_bts/management">Management</a>
                    <a href="/formations/cycle_bts/international-trade">International Trade</a>
                    <a href="/formations/cycle_bts/assistant-manager">Assistant Manager</a>
                    <a href="/formations/cycle_bts/event-management">Events Management</a>
                    <a href="/formations/cycle_bts/project-management">Project Management</a>
                    <a href="/formations/cycle_bts/banking-and-finance">Banking and Finance</a>
                    <a href="/formations/cycle_bts/marketing-trade-and-sales">Marketing-Trade-Sale</a>
                    <a href="/formations/cycle_bts/OperationAirTransport">Operation Air Transport</a>
                    <a href="/formations/cycle_bts/port-shipping-management">Port Shipping Management</a>
                    <a href="/formations/cycle_bts/human-resource-management">Human Resource Management</a>

                    <a href="/formations/cycle_bts/logistics-and-transport-management">Logistics and Transport Management</a>
                    <a href="/formations/cycle_bts/management-of-non-gouvementalorganization">Management of non-Gouvemental Organization</a>

                </div>
            </div>
            <div class="dropdown">
                <div>
                    <button class="dropbtn"> <i class="fas fa-hand-rock"></i> <br> Industrial Sectors <br> And Technologies </button>
                </div>
                <div class="dropdown-content">
                  <a href="/formations/cycle_bts/topography">Topography</a>
                    <a href="/formations/cycle_bts/construction">Construction</a>
                    <a href="/formations/cycle_bts/telecommunication">Telecommunication</a>
                    <a href="/formations/cycle_bts/hardware-maintenance">hardware Maintenance</a>
                    <a href="/formations/cycle_bts/software-engineering">Software Engineering</a>
                    <a href="/formations/cycle_bts/industrialcomputing">Industrial Computing</a>
                    <a href="/formations/cycle_bts/electrotechnics"> Electrotechnics</a>
                    <a href="/formations/cycle_bts/network-and-security">Network And Securitys</a>
                    <a href="/formations/cycle_bts/refrigeration-and-air-conditioning">Refrigeration and Air Conditioning</a>
                    <a href="/formations/cycle_bts/MaintenanceOfComputerSystems">Maintenance Of Computer Systems</a>
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
