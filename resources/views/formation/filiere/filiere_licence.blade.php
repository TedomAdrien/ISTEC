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

        @yield('content_filiere_licence')

        <div class="dossier_inscription">
          <h2 class="center j_red">DOSSIER D'INSCRIPTION:</h2>
          <ol>
              <li>Un CV</li>
            <li>lettre de motivation </li>
            <li>Une copie certifiée conforme de l'acte de naissance</li>
            <li>Une photocopie du baccalauréat</li>
            <li>Un certificat médical datant de moins de trois mois</li>
            <li>Deux (02) photos 4x4 couleur</li>
            <li>Frais d'inscription 40 000 FCFA payable a la caisse de ISTEC</li>
            <li>01 Enveloppe A4 timbrée à 400 FCFA</li>
            <li>Frais médicaux 5000 FCFA obligatoire. Payable a la caisse a l'inscription</li>
            <li>Une copie de la carte nationale d’identité(CNI) ou du passeport</li>
            <li>Une copie certifiée du diplôme BAC + 2</li>
        </ol>
            <a href="/inscription">S'INSCRIRE</a>
        </div>
    </div>
    <section class="probootstrap-cta">
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
    @push('js')

    @endpush
