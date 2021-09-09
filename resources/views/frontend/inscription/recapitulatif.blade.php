<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ISTEC Pré-inscription | Récapitulatif</title>
    <link rel="stylesheet" href="{{ asset('css/recapitulatif.css') }}">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</head>
<body>
    <div class="contend">
    <h1 class="center">FICHE D'INSCRIPTION  <span class="italic" >N<sup>o</sup></span> :  <span>{{ $student->id . '-' . date('Y-m-d') }}</span> </h1>

    <div class="info">
        <h4 class="italic underline serif">INFORMATIONS PERSONNELLES :</h4>
        <table class="table-responsive">
            <tbody>
                 <tr><td class="b1"> Filière : {{ $student->formation }}</td><td class="b1"> Specialite: {{ $student->specialites }}</td> <td class="b1"> Niveau :{{ $student->niveau }}</td></tr>
                    @if($student->genre === 'Masculin')
                        <td class="flex spacebetween"><tr>Titre :<span class="b1"> M :<span style="font-weight: bold"> X</span></td><td><span class="b1"> Mlle: .....</td> <td><span class="b1"> Mme .....</span></td></tr>
                    @elseif($student->genre === 'Feminin' && $student->statut === 'Marié(e)')
                        <td class="flex spacebetween"><tr>Titre :<span class="b1"> M : ....</span></td><td><span class="b1"> Mlle : .....</td> <td><span style="font-weight: bold"> Mme  X</span></td></tr>
                    @else
                        <td class="flex spacebetween"><tr>Titre :<span class="b1"> M : ....</span></td><td><span class="b1"> Mlle :<span style="font-weight: bold"> X</span></td> <td><span style="font-weight: bold"> Mme  X</span></td></tr>
                    @endif
                
                <td class="flex spacebetween"> <tr class="b2"> Nom(s) : {{ $student->first_name }}</tr> <tr class="b2"> Prénom(s) : {{ $student->last_name }}</td></tr>
                <!-- <div><p>Noms du conjoint: <span>.................................................................................................................................</span></p></div> -->
                <tr class="flex spacebetween"> <td class="b2"> Date de naissance : {{ $student->birthdate }}</td> <td class="b2"> Lieu : {{ $student->lieu_naissance }}</td></tr>
                <tr class="flex spacebetween"><td class="b2"> Numéro CNI : {{ $student->NoCNI }}</td> <td class="b2"> Region d'origine : {{ $student->origin_region }}</td></tr>
                <tr class="flex spacebetween"><td class="b2"> Nationalité : {{ $student->pays }}</td><td class="b2">Quartier : {{ $student->ville_residence }}</td></tr>
                <tr class="flex spacebetween"> <td class="b2"> Télephone personnel : {{ $student->phone_number }}</td> <td class="b2">Télephone parent : {{ $parent->phone_number }} {{ (!is_null($other_parent) && !is_null($other_parent->phone_number)) ? '/' . $other_parent->phone_number : '' }}</td></td>
                <tr>Email :<em>{{ $student->email }}</em></tr>
            </tbody>
        </table>
    </div>

    <div class="info border-b">
        <h4 class="italic underline serif">DIPLÔMES ET ANNÉES D'OBTENTION :</h4>
        <div>
            <div><p class="flex start"> <span class="b2"> Diplôme : <span>{{ $student->diplome }}</span></span><span class="b2"> Année : <span>{{ $student->date_obtention }}</span></span></p></div>
            <div><p>Établissement fréquenté : <span><em>{{ $student->etablissement }}</em></span></p></div>
        </div>
    </div>

    <div class="info mt-2 p-1 border-all">
        <h2 class="center italic underline serif">DROITS UNIVERSITAIRES</h2>
        <div class="w-7">
              <div><span>- Frais d'inscription :</span> <span class="fl-r center-w-10">30 000 FCFA</span></div>
              <div><span>- Total :</span> <span class="fl-r center-w-10 border-t">30 000 FCFA</span></div>
        </div>
        <div class="flex spacebetween" style="margin-top: 10px"><span>&Eacute;tudiant</span><span>Scolarité</span><span>Contrôle</span><span>Directeur</span></div>
    </div>

    <div class="info center">
        <p>(1) Ces droits universitaires sont exclusifs des frais d'examen, de soutenance et autres frais solicités ou exigés dans le cadre de l'examen.</p>
    </div>

    <div class="info center">
        <a href="{{ route('print.fiche_pre_inscription', $student) }}" style="border: 2px black solid; text-decoration: none; padding: 5px; color: black;">Imprimer</a>
    </div>
  </div>
</body>
</html>
