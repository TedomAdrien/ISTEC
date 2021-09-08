@extends('parent')
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
              <h1 class="mb0">Spécialité:</h1>
            </div>
          </div>
        </div>
      </section>
    <div class="juni block_informations">

        @yield('content_filiere')

        <div class="dossier_inscription">
          <h2 class="center j_red">DOSSIER D'INSCRIPTION:</h2>
          <ol>
            <li>Une demande manuscrite ou lettre de motivation adressée au Directeur Géneral de ISTEC</li>
            <li>Une copie certifiée conforme de l'acte de naissance</li>
            <li>Une photocopie du baccalauréat, bordereau de reussite du CGE A/L en 2 matieres au moins, hors mis "RELIGION STUDIES" ou tout diplome équivalent</li>
            <li>Un certificat médical datant de moins de trois mois</li>
            <li>Deux (02) photos 4x4 couleur</li>
            <li>Frais d'inscription 30 000 FCFA payable a la caisse de ISTEC</li>
          </ol>
            <a href="/inscription">S'INSCRIRE</a>
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
