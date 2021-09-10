<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
     <!-- CSS only -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ISTEC Pré-inscription | Récapitulatif</title>
    <link rel="stylesheet" href="{{ asset('css/recapitulatif.css') }}">
</head>
 <body>
  <div class="contend">
    <div class="flex spacebetween">
        <div class="e1"><img src="{{asset('/images/home-images/Logo.png')}}" style="width:60px; height: 60px;"></div>
        <div class="e1"><img src="{{asset('/images/home-images/Logo.png')}}" style="width:60px; height: 60px;"></div>
    </div>
    <h1 class="center">FICHE D'INSCRIPTION  <span class="italic" >N<sup>o</sup></span> :  <span>{{ $student->id . '-' . date('Y-m-d') }}</span> </h1>
    <div class="io">
        <h4 class="italic underline serif center">INFORMATIONS PERSONNELLES :</h4>
        <table class="table-responsive" style="width:75%;">
            <tbody>
                <tr>
                    <td > Filière : {{ $student->formation }}</td>
                    <td > Specialite: {{ $student->specialites }}</td>
                    <td > Niveau :{{ $student->niveau }}</td>
                </tr>
                @if($student->genre === 'Masculin')
                <tr>
                    <td>Titre : M :<span style="font-weight: bold"> X</td>
                    <td> Mlle: .....</td>
                    <td style="width: 115px!important;"> Mme .....</td>          
                </tr>
                @elseif($student->genre === 'Feminin' && $student->statut === 'Marié(e)')
                <tr>
                    <td>Titre : M : .....</td>
                    <td> Mlle: <span style="font-weight: bold"> X</span></td>
                    <td style="width: 115!importantpx;"> Mme .....</td>          
                </tr>
                @else
                <tr>
                    <td>Titre : M :.........</td>
                    <td> Mlle: <span style="font-weight: bold"> X</span></td>
                    <td> Mme .....</td>          
                </tr>
                @endif
                <tr>
                    <td > Nom(s) : {{ $student->first_name }}</td>
                    <td > Prénom(s) : {{ $student->last_name }}</td>     
                </tr>
                <tr>
                    <td > Date de naissance : {{ $student->birthdate }}</td>
                    <td > Lieu : {{ $student->lieu_naissance }}</td>
                </tr>
                <tr>
                    <td > Numéro CNI : {{ $student->NoCNI }}</td>
                    <td > Region d'origine : {{ $student->origin_region }}</td>        
                </tr>
                <tr>
                    <td > Nationalité : {{ $student->pays }}</td>
                    <td >Quartier : {{ $student->ville_residence }}</td>           
               </tr>
               <tr>
                    <td > Télephone personnel : {{ $student->phone_number }}</td> 
                    <td >Télephone parent : {{ $parent->phone_number }} {{ (!is_null($other_parent) && !is_null($other_parent->phone_number)) ? '/' . $other_parent->phone_number : '' }}
                    </td>       
                </tr>
                <tr>
                    <td >	Email : {{ $student->email }}></td>      
                </tr>
                 <tr>
                    <td > Connu/Parrainé par : {{ $student->parrain }}</td> 
                    <td >Téléphone du parrain : {{ $student->phone_number_parrain }} </td>       
                </tr>
            </tbody>
        </table>
    </div>

    <div class="info border-b">
        <h4 class="italic underline serif center ">DIPLÔMES ET ANNÉES D'OBTENTION :</h4>
        <table class="table-responsive" style="width:75%;">
           <tbody>
           <tr>
                <td > Diplôme : {{ $student->diplome }}</td>
                <td > Année : {{ $student->date_obtention }}</td>
                <td>Établissement fréquenté : {{ $student->etablissement }}</td>
            </tr>
           </tbody> 
        </table>
    </div>

    <div class="info mt-2 p-1 border-all" style="height: 161px;
">
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
