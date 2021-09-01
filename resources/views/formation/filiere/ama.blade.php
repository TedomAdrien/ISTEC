@extends('formation.filiere.filiere')
@section('title','BTS MANAGEMENT')

@section('content_filiere')
       <h1 class="center j_white">Gestion / Management</h1>

    <div class="bk_desc">
    <div class="items1">
      <div>
      <div class="sous_block_informations">
        <h2>Description:</h2>
        <p>Le <span>Brevet de Technicien Superieur</span> en<span> Management</span> ou en<span> Gestion Des Projets</span> vise à former les collaborateurs des direucteurs généraux, des directeurs d'unités ou des chef de services. Organisés, rigoureux, dynamiques, discrets, ils soutiennent, facilitent et suivent le travail du responsable afin de le rendre plus efficace. Ils assurent principalement le role d'interface et de médiation entre l'entreprise et son environnement. Ils s'occupent de l'administration, de la communication, de l'organisation du travil, de l'aide à la décision et peuvent meme prendre en charge un dossier spécialisé ou organiser un évenement.</p>
      </div>
      <div class="sous_block_informations">
        <h2>Compétences Génériques:</h2>
        <ol>
          <li>Maitriser l'économie des organisations;</li>
          <li>Maitriser plusieurs langues;</li>
          <li>Avoir une aptitude à la négociation;</li>
          <li>Comprendre l'environnement professionnel</li>
          <li>Etre capable de travailler sous pression</li>
          <li>Faire preuve d'adaptabilité et de polyvalence, etc...</li>
        </ol>
      </div>
       <div class="sous_block_informations">
        <h2>Compétences Acquises:</h2>
        <ul>
          <li>Participer à l'organisation et au management de l'entreprise</li>
          <li>Gérer et traiter les flux d'informations pour permettre les prises de décision</li>
          <li>Assurer la fonction d'interface relationnelle</li>
          <li>Assurer la gestion comptable et financiere de l'entreprise</li>
          <li>Maitriser les differentes procédures juridiques</li>
          <li>Etre courtois, réactif et bien organisé</li>
          <li>Maitriser la redaction administrative, etc...</li>
        </ul>
      </div>
      <div class="sous_block_informations">
        <h2>Débouchés:</h2>
        <ul>
          <li><a href="http://etudiant.aujourdhui.fr/etudiant/metiers/fiche-metier/assistante-de-manager.html"> Assistant manager</a></li>
          <li><a href="https://www.randstad.fr/metiers/assistant-de-direction-f-h/#:~:text=Le%20m%C3%A9tier%20d%E2%80%99assistant%20de%20direction%20consiste%20%C3%A0%20seconder,Il%20organise%20les%20agendas%2C%20r%C3%A9unions%2C%20d%C3%A9placements%20ou%20rendez-vous."> Assistant de direction</a></li>
          <li><a href="https://www.jobijoba.com/fr/fiches-metiers/Assistant+administratif#:~:text=Fiche%20m%C3%A9tier%20Assistant%20administratif%20L%E2%80%99assistant%20administratif%20appartient%20au,%C3%A0%20accueillir%20les%20visiteurs%20au%20t%C3%A9l%C3%A9phone%20ou%20physiquement."> Assistant administratif</a></li>
          <li><a href="https://www.entreprises.cci-paris-idf.fr/web/rh/fiche-metier-assistant-commercial-competences-missions-formation#:~:text=L%E2%80%99assistant%20%28e%29%20commercial%20%28e%29%20participe%20%C3%A0%20la%20gestion,direction%2C%20les%20clients%2C%20les%20fournisseurs%2C%20les%20chefs%20d%E2%80%99entreprise" >Assistant commercial</a></li>
          <li><a href="https://www.comptalia.com/metiers/office-manager.php#:~:text=L%E2%80%99Office%20Manager%20est%20responsable%20du%20bon%20fonctionnement%20d%E2%80%99un,et%20s%E2%80%99occupe%20des%20commandes%20de%20fournitures%20de%20bureau."> Office manager</a></li>
          <li><a href="https://fr.jobted.com/fiche-m%C3%A9tier/chef-de-projet#:~:text=Chef%20de%20projet%20-%20Fiche%20m%C3%A9tier%20%3A%20T%C3%A2ches,attraits%20du%20m%C3%A9tier%20de%20responsable%20de%20projet.%20"> Chef de projet</a></li>
          <li><a href="https://www.cegos.fr/fiches-metiers/les-metiers-de-la-communication/fiche-metier-responsable-communication"> Responsable de communication </a></li>
          <li><a href="https://www.leguidedesmetiers.fr/fr/metier/assistante-chargee-de-communication"> Assistant de communication</a>, etc...</li>
        </ul>
      </div>
    </div>
  </div>

  <div class="items2">
    <div>
      <img src="{{ asset('images/images_formations/w.jpeg') }}" style="width: 100%; ">
      <div>
        <h2>Pourquoi suivre cette formation ?</h2>
        <ul>
          <li>Des professeurs de haut niveau et des professionnels chevronnés</li>
          <li>Des stages academiques et professionnels garantis à tous les étudiants</li>
          <li>Des frais de scolarités abordables et flexibles pour tous</li>
          <li>des bourses d'etude accompagnent l'excellence académique</li>
          <li>Un incubateur en cour d'achevement pour développer l'entrepreneuriat et le montage de projets jeunes et startup</li>
          <li>Possibilité de poursuivre ses études à l'étranger</li>
        </ul>
      </div>
    </div>
    <div>
      <h2>Autres filieres BTS GESTION:</h2>

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
     <div>
      <h2>Autres filieres BTS INDUSTRIEL:</h2>
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
@endsection
