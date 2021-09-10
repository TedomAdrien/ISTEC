@extends('parent')

@section('title','Course_single')
@section('content')

     <section class="probootstrap-section probootstrap-section-colored">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-left section-heading probootstrap-animate">
              <h1>Détails des Cycles</h1>
            </div>
          </div>
        </div>
      </section>
      <section class="probootstrap-section probootstrap-section-sm">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="row probootstrap-gutter0">
                <div class="col-md-4" id="probootstrap-sidebar">
                  <div class="probootstrap-sidebar-inner probootstrap-overlap probootstrap-animate">
                    <h3>TOUS LES CYCLES</h3>
                    <ul class="probootstrap-side-menu">
                      <li class="active"><a href="/formations/cycle_bts">Cycles BTS/HND</a></li>
                      <li><a href="/formations/cycle_licence">Cycles LICENCE/BACHELOR</a></li>
                      <li><a href="/formations/cycle_master">Cycle MASTER</a></li>
                      <li><a href="/formations/cycle_expertise">Cycle Expertise</a></li>
                    </ul>
                  </div>
                </div>
                <div class="col-md-7 col-md-push-1  probootstrap-animate" id="probootstrap-content">
                  <h2 class="center">BTS/HND</h2>
                  <p>Accessibles sélectivement après le bac sur dossier (dossier scolaire de première et de terminale + lettre de motivation et éventuellement entretien), le BTS est destiné prioritairement aux bacheliers. Près du quart des nouveaux bacheliers de 2020 y ont pris une inscription. Il existe plusieurs spécialités qui, associées à de nombreuses options offrent un choix d'environ 150 spécialisations, dans des secteurs aussi variés que les services (commerce-vente, secrétariat et gestion, etc...), l'informatique, l'industrie, l'édition, l'agriculture, le social etc... Le BTP et de nombreuses spécialités de l'industrie manquent actuellement de candidats, alors qu'elles offrent des débouchés intéressants et bien rémunérés. l'objectif étant de former en 02 ans après le bac des techniciens supérieurs destinés à exercer des tâches d'encadrement (collaborateurs d'ingénieurs ou de chefs de service, assistants de direction) et qui peuvent assez rapidement accéder à des postes de responsabilité (chefs de chantier ou conducteurs de travaux dans le BTP, par exemple).Le taux de réussite, après un examen d'État, tourne autour de 85%. Les BTS étant très recherchés, il vaut mieux ne pas attendre le dernier moment pour solliciter une inscription.</p>
                  <p><a href="/formations/cycle_bts" class="btn btn-primary">Inscrivez vous des maintenant !</a> <span class="enrolled-count">521etudiants inscrits</span></p>
                </div>
                <div class="col-md-7 col-md-push-1  probootstrap-animate" id="probootstrap-content">
                  <h2 class="center">LICENCE/BACHELOR</h2>
                  <p>La licence se déroule théoriquement en 06 semestres après le baccalauréat (ou équivalent) ou 02 semestres apres le BTS. Chaque licence s'inscrit dans un « domaine », puis dans une « mention » et, dans certains cas, dans une « spécialité » (exemple : licence en « Sciences et technologies », mention « Physique et ingénierie », spécialité en « Mécanique et ingénierie » – voir le détail ci-dessous). Pour la conception de leurs programmes, ISTEC tient compte des référentiels de compétences nationaux.la licence assure une formation linguistique, transversale (expression écrite et orale, exploitation des ressources documentaires, maniement des outils numériques…) et pré-professionnelle (connaissances des métiers, projet professionnel).Techniquement, le diplôme s’obtient par acquisition de chaque unité d’enseignement (UE) du programme, ou par application des modalités de compensation. Les notes au sein d’un semestre se compensent en effet, ainsi que les notes au sein d'une même année (règle de la moyenne générale pondérée). Il n’y a pas de notes éliminatoires, et le contrôle des connaissances (le contrôle continu est l’objet d’une application prioritaire, mais les examens terminaux sont tolérés) est organisé en deux sessions (initiale et « de rattrapage »). L’unité d’enseignement est définitivement acquise et capitalisable dès que la moyenne y est obtenue.</p>
                  <p><a href="/formations/cycle_licence" class="btn btn-primary">Inscrivez vous des maintenant !</a> <span class="enrolled-count">214 etudiants inscrits</span></p>
                </div>
                 <div class="col-md-7 col-md-push-1  probootstrap-animate" id="probootstrap-content">
                  <h2 class="center">MASTER</h2>
                  <p>Dans le système éducatif français, le master est à la fois un diplôme national de l’enseignement supérieur et un grade universitaire, validant le deuxième cycle de l’enseignement supérieur, soit cinq années d’études après le baccalauréat. Il permet de poursuivre vers le diplôme national du doctorat. Le grade de "Master", c'est le fameux M de la réforme LMD (licence, master, doctorat), de niveau bac+5.Cette formation garantit un bon niveau académique, de recherche en gestion et d'encadrement des étudiants: <br>
                    M1 => première année du grade de Master (suite logique de la licence, sans sélection)
                    M2 => deuxième année du grade de Master (avec sélection) <br>
                    Le Master peut avoir une finalité professionnelle ou de recherche.</p>
                  <p><a href="/formations/cycle_master" class="btn btn-primary">Inscrivez vous des maintenant !</a> <span class="enrolled-count">328 etudiants inscrits</span></p>
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
              <a href="/inscription" role="button" class="btn btn-primary btn-lg btn-ghost probootstrap-animate" data-animate-effect="fadeInLeft">S'inscrire</a>
            </div>
          </div>
        </div>
      </section>
@endsection
