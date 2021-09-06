@extends('parent')
@push('css')

@endpush

@section('content')
<section class="probootstrap-section probootstrap-section-colored">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-left section-heading probootstrap-animate">
            <h1 class="login100-form-title">Pré-inscription de L'ISTEC</h1> 

            </div>
          </div>
        </div>
      </section>

{{-- <div class="wrap-login100" style="height: 850px; width: 1200px;"> --}}
<div class="login100-form validate-form p-l-55 p-r-55 p-t-178">
<form class="row g-3"  method="POST" action ="{{route('add.user')}}" class="was-validated" >


  @csrf

  {{-- parite1 --}}
  <div id="first">
    <h2 style="text-align:center; padding-bottom: 16px; padding-top: -16px;"> <u> Etape1:</u> <span>Informations personnelles</span> </h2>
    {{$errors}}
<div class="col-md-6">
    <label for="inputname" class="form-label">Nom<span style="color: red;" title="champ obligatoire" >*</span></label>
    <input type="text" class="form-control" id="name" name="name">
    @error('name')
       <span class="text-danger">{{ $message }}</span>
    @enderror
  </div>
  <div class="col-md-6">
    <label for="inputlastname" class="form-label">Prenom<span style="color: red;" title="champ obligatoire" >*</span></label>
    <input type="text" class="form-control" id="lastname" name="lastname">
    @error('lastname')
    <span class="text-danger">{{ $message }}</span>
 @enderror
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Email <span style="color: red;" title="champ obligatoire" >*</span></label>
    <input type="email" class="form-control" id="inputEmail4" name="email">
    @error('email')
    <span class="text-danger">{{ $message }}</span>
 @enderror
  </div>
  <div class="col-md-6">
    <label for="inputNoCNI" class="form-label">Numero CNI <span style="color: red;" title="champ obligatoire" >*</span></label>
    <input type="text" class="form-control" id="inputNoCNI" name="NoCNI" >
    @error('NoCNI')
    <span class="text-danger">{{ $message }}</span>
 @enderror
  </div>

  <div class="col-md-6">
    <label for="date_naissance " class="form-label"> Date de naissance <span style="color: red;" title="champ obligatoire" >*</span></label><br>
    <input  type="date" id="date_naissance" class="form-control" name="date" required>
    @error('date')
    <span class="text-danger">{{ $message }}</span>
 @enderror
  </div>
<div class="col-md-6">
    <label for="lieu_naissance " class="form-label"> Lieu de naissance <span style="color: red;" title="champ obligatoire" >*</span></label><br>
    <input  type="text" id="lieu_naissance" class="form-control" name="lieu_naissance">
    @error('lieu_naissance')
    <span class="text-danger">{{ $message }}</span>
 @enderror
  </div>
<div class="col-md-6">
    <label for="ville_residence " class="form-label"> Ville de residence </label>
    <input  type="text" id="ville_residence" class="form-control" name="ville_residence">
    @error('ville_residence')
    <span class="text-danger">{{ $message }}</span>
 @enderror
  </div>
<div class="col-md-6">
    <label for="inputcountry " class="form-label"> Nationalité</label>
    <input  type="text" id="inputcountry" class="form-control" name="pays">
    @error('pays')
    <span class="text-danger">{{ $message }}</span>
 @enderror
  </div>
<div class="col-md-6">
    <label for="inputregion " class="form-label"> Région d'origine</label>
    <input  type="text" id="inputregion" class="form-control" name="origin_region">
    @error('origin_region')
    <span class="text-danger">{{ $message }}</span>
 @enderror
  </div>
  <div class="col-md-6">
						<label for="genre">Genre<span style="color: red;" title="champ obligatoire">*</span></label>
						<div>
                            <div style="float:left; margin-right: 16px;">
							<label id="genre">Masculin</label>
							<input id="genre" type="radio" name="genre" value="Masculin">
                            </div>
                            <div>
							<label id="genre">Feminin</label>
							<input id="genre" type="radio" name="genre" value="Feminin">
                            </div>
						</div>
            @error('genre')
            <span class="text-danger">{{ $message }}</span>
         @enderror
					</div>
                    <div class="col-md-6">
    <label for="telephone " class="form-label">Telephone</label>
    <input  type="text" id="telephone" class="form-control" placeholder="+XXX XXXXXXXXX" name="telephone">
    @error('telephone')
    <span class="text-danger">{{ $message }}</span>
 @enderror
  </div>
                    <div class="col-md-6">
    <label for="inputsituationmat" class="form-label">Situation Matrimoniale</label>
    <select id="inputsituationmat" class="form-select" name="statut">
      <option >Choose...</option>
      <option value="Marié(e)">Marié(e)</option>
      <option value="Celibataire">Célibataire</option>
      <option value="Celibataire">Divorcé(e)</option>
    </select>
    @error('statut')
    <span class="text-danger">{{ $message }}</span>
 @enderror
  </div>
  <button type="button" onclick="next('first','second')" class="btn btn-primary " style="margin-top:10px; margin-bottom:5px; padding:10px; float:right; font-size:18px; border-radius:20px/20px" value="">

      Suivant

    </button>

  </div>




  {{-- partie 2 --}}
<div id="second" style="margin-top: 20px; display:none;">

    <h2 style="text-align:center; padding-bottom: 16px; padding-top: -16px;"> <u> Etape2:</u> <span>Scolarité</span> </h2>
    <div class="col-md-6">
    <label for="inputcycle" class="form-label">Cycle<span style="color: red;" title="champ obligatoire" >*</span></label>
    <select id="inputcycle" class="form-select" name="cycle">
      <option >Choose...</option>
      <option value="BTS">BTS</option>
      <option value="HND">HND</option>
      <option value="Licence">Licence</option>
    </select>
    @error('cycle')
    <span class="text-danger">{{ $message }}</span>
 @enderror
  </div>
  <div class="col-md-6">
    <label for="inputniveau" class="form-label">Niveau<span style="color: red;" title="champ obligatoire" >*</span></label>
        <input type="text" class="form-control" id="inputniveau" name="niveau">
    @error('specialités')
    <span class="text-danger">{{ $message }}</span>
 @enderror
  </div>
  <div class="col-md-6">
    <label for="inputfiliere" class="form-label">Formations<span style="color: red;" title="champ obligatoire" >*</span></label>
    <select id="inputfiliere" class="form-select" name="formation">
      <option >Choose...</option>
      <option value="Filiere industrielle">Filiere industrielle</option>
      <option value="Filiere Commercial">Filiere Commercial</option>
    </select>
    @error('formation')
    <span class="text-danger">{{ $message }}</span>
 @enderror
  </div>
  <div class="col-md-6">
    <label for="inputformation" class="form-label">Spécialités<span style="color: red;" title="champ obligatoire" >*</span></label>
        <input type="text" class="form-control" id="inputformation" placeholder="Spécialité choisie" name="specialités">
    @error('specialités')
    <span class="text-danger">{{ $message }}</span>
 @enderror
  </div>

  <div class="col-md-6">
    <label for="diplome" class="form-label">Diplome d'admission <span style="color: green;" title="dernier diplome a votre actif" >?</span><span style="color: red;" title="champ obligatoire" >*</span></label>
    <input type="text" class="form-control" id="diplome" placeholder="Dernier diplome obtenu" name="diplome">
    @error('diplome')
    <span class="text-danger">{{ $message }}</span>
 @enderror
  </div>


<div class="col-md-6">
    <label for="inputdateobt" class="form-label">Date d'obtention <span style="color: red;" title="champ obligatoire" >*</span></label>
    <select id="inputdateobt" class="form-select" name="date_optention">
      <option >Choose...</option>
      <option value="2021">2021</option>
      <option value="2020">2020</option>
      <option value="2019">2019</option>
      <option value="2019">2018</option>
      <option value="2019">2017</option>
      <option value="2019">2016</option>
      <option value="2019">2015</option>
      <option value="2019">2014</option>
      <option value="2019">2013</option>
      <option value="2019">2012</option>
</select>
@error('date_optention')
    <span class="text-danger">{{ $message }}</span>
 @enderror
</div>
  <div class="col-md-6">
    <label for="paysobt " class="form-label">Pays d'obtention <span style="color: red;" title="champ obligatoire" >*</span></label>
    <input  type="text" id="paysobt" class="form-control" name="pays_obtention">
    @error('pays_obtention')
    <span class="text-danger">{{ $message }}</span>
 @enderror
  </div>
<div class="col-md-12">
    <label for="etabobt " class="form-label">Etablissement d'obtention <span style="color: red;" title="champ obligatoire" >*</span></label>
    <input  type="text" id="etabobt" class="form-control" name=" Etablissement">
    @error('Etablissement')
    <span class="text-danger">{{ $message }}</span>
 @enderror
  </div>

<div>
<button type="button" onclick="back('first','second')" class="btn btn-secondary " style="margin-top:10px; margin-bottom:5px; padding:10px; float:left; font-size:18px; border-radius:20px/20px" value="">

    Précédent
  </button>

<button type="button" onclick="next('second','tree')" class="btn btn-primary " style="margin-top:10px; margin-bottom:5px; padding:10px; float:right; font-size:18px; border-radius:20px/20px" value="">
 Suivant

  </button>
</div>
</div>




{{-- partie 3 --}}

<div id="tree" style="display: none">
<h2 style="text-align:center; padding-bottom: 16px; padding-top: -16px;"> <u> Etape3:</u> <span>Profil Académique</span> </h2>
<div class="col-md-6">
<label for="inputsitscol" class="form-label">Situation scolaire de l'année passée :</label>
<select id="inputsitscol" class="form-select" name="situation_passé">
  <option>Choose...</option>
  <option value="Inscrite au secondaire">Inscrite au secondaire</option>
  <option value="Non-scolarisee">Non-scolarisee</option>
  <option value="Inscrite autre universite">Inscrite autre universite</option>
</select>
</div>

{{-- <div id="too" style="display: none"> --}}
<div class="col-md-6">
<label for="firstyear" class="form-label">Année 1ère inscription à l'université :</label>
<select id="firstyear" class="form-select" name="Date_arrive_fac">

  <option >Choose...</option>
  <option value="2021">2021</option>
      <option value="2020">2020</option>
      <option value="2019">2019</option>
      <option value="2019">2018</option>
      <option value="2019">2017</option>
      <option value="2019">2016</option>
      <option value="2019">2015</option>
      <option value="2019">2014</option>
      <option value="2019">2013</option>
      <option value="2019">2012</option>
</select>
</div>
<div class="col-md-6">
<label for="typeuniv" class="form-label">Type d'université fréquentée la 1ère fois :</label>
<select id="typeuniv" class="form-select" name="typeuniv">
  <option>Choose...</option>
  <option value="Universite public">Universite public</option>
  <option value="Universite privee">Universite privee</option>
  <option value="Autres">Autres</option>
</select>
</div>
{{-- </div> --}}

<div class="col-md-6">
        <label for="actprof">Avez vous une acitivite professionnelle ?</label>
        <div>
              <div style="float:left; margin-right: 16px;">
          <label for="oui">Oui</label>
          <input id="oui" type="radio" name="active_proffetionnel" value="OUI">
                        </div>
                        <div>
          <label for="non">Non</label>
          <input id="non" type="radio" name="active_proffetionnel" value="NON">
                        </div>
        </div>
      </div>


<button type="button" onclick="back('second','tree')" class="btn btn-secondary " style="margin-top:10px; margin-bottom:5px; padding:10px; float:left; font-size:18px; border-radius:20px/20px" value="">

Précédent

</button>

<button type="button" onclick="next('tree','four')"  class="btn btn-primary " style="margin-top:10px; margin-bottom:5px; padding:10px; float:right; font-size:18px; border-radius:20px/20px" value="">
Suivant

</button>
</div>


<div id="four" style=" display:none;">

  <h2 style="text-align:center; padding-bottom: 16px; padding-top: -16px;"> <u> Etape4:</u> <span>Aptitudes physiques</span> </h2>
  {{$errors}}
  <div class="col-md-6">
  <label for="firstfreetime" class="form-label">Premier Loisir :</label>
  <select id="firstfreetime" class="form-select" name="loisir1">
    <option >Choose...</option>
    <option value="Lecture">Lecture</option>
    <option value="Cinema">Cinema</option>
    <option value="Sport">Sport</option>
    <option value="Sport">Jeux</option>
    <option value="Sport">Voyage</option>
    <option value="Sport">Danse</option>
    <option value="Sport">Chant</option>
    <option value="Sport">Musique</option>
    <option value="Sport">Autres</option>

  </select>
</div>

<div class="col-md-6">
  <label for="scndfreetime" class="form-label">Deuxieme Loisir :</label>
  <select id="scndfreetime" class="form-select" name="loisir2">
    <option >Choose...</option>
   <option value="Lecture">Lecture</option>
    <option value="Cinema">Cinema</option>
    <option value="Sport">Sport</option>
    <option value="Sport">Jeux</option>
    <option value="Sport">Voyage</option>
    <option value="Sport">Danse</option>
    <option value="Sport">Chant</option>
    <option value="Sport">Musique</option>
    <option value="Sport">Autres</option>

  </select>
</div>

<div class="col-md-6">
          <label for="handip">Avez vous un handicap ?</label>
          <div>
                          <div style="float:left; margin-right: 16px;">
            <label for="Oui">Oui</label>
            <input id="Oui" type="radio" name="handip" value="OUI">
                          </div>
                          <div>
            <label for="Non">Non</label>
            <input id="Non" type="radio" name="handip" value="NON">
                          </div>
          </div>
        </div>

                  <div class="col-md-6">
          <label for="actsport">Pratiquez-vous une activité sportive ?</label>
          <div>
                          <div style="float:left; margin-right: 16px;">
            <label >Oui</label>
            <input type="radio" name="actsport" value="OUI">
                          </div>
                          <div>
            <label >Non</label>
            <input type="radio" name="actsport" value="NON">
                          </div>
          </div>
        </div>


<button type="button" onclick="back('tree','four')" class="btn btn-secondary " style="margin-top:10px; margin-bottom:5px; padding:10px; float:left; font-size:18px; border-radius:20px/20px" value="">

  Précédent
</button>

<button type="button" onclick="next('four','five')" class="btn btn-primary " style="margin-top:10px; margin-bottom:5px; padding:10px; float:right; font-size:18px; border-radius:20px/20px; " value="">
 Suivant

</button>

</div>



<div id="five" style="display:none">

  <h2 style="text-align:center; padding-bottom: 16px; padding-top: -16px;"> <u> Etape5:</u> <span>Parents ou tuteurs</span> </h2>
  @if($errors ->any())
  @foreach($errors->all() as $err)
  <li>{{$err}}</li>
  @endforeach
  @endif

  <!-- {{$errors}} -->
  <div style="float:left; padding:0 8px; width:50%;" >

  <div class="col-md-12">
  <h5>PARENTS OU TUTEUR</h5>
      <label for="inputname" class="form-label">Nom<span style="color: red;" title="champ obligatoire" >*</span></label>
      <input type="text" class="form-control" id="inputname" name="name_parent" >
    </div>
    <div class="col-md-12">
      <label for="ville_residence " class="form-label"> Ville de residence </label>
      <input  type="text" id="ville_residence" class="form-control" name="ville_resid_parent">
  </div>

  <div class="col-md-12">
    <label for="telephone " class="form-label">Telephone<span style="color: red;" title="champ obligatoire" >*</span></label>
    <input  type="text" id="telephone" class="form-control" placeholder="+XXX XXXXXXXXX" name="telephone_parent">
  </div>
  </div>


  <div>

    <h5>Autre</h5>
  <div class="col-md-6">
      <label for="inputname" class="form-label">Nom<span style="color: red;" title="champ obligatoire" >*</span></label>
      <input type="text" class="form-control" id="name" name="name_autre">
    </div>
    <div class="col-md-6">
      <label for="ville_residence " class="form-label"> Ville de residence </label>
      <input  type="text" id="ville_residence" class="form-control" name="ville_resid_autre">
  </div>
 
  <div class="col-md-6">
    <label for="telephone " class="form-label">Telephone<span style="color: red;" title="champ obligatoire" >*</span></label>
    <input  type="text" id="telephone" class="form-control" placeholder="+XXX XXXXXXXXX" name="telephone_autre">
  </div>
  </div>

  <button type="button" onclick="back('four','five')" class="btn btn-secondary " style="margin-top:10px; margin-bottom:5px; padding:10px; float:left; font-size:18px; border-radius:20px/20px" value="">

      Précédent
    </button>

  <button type="submit"  class="btn btn-primary " style="margin-top:10px; margin-bottom:5px; padding:10px; float:right; font-size:18px; border-radius:20px/20px">

      Valider

    </button>


</div>
</form>


</div>
</div>
</div>
</div>


@endsection
@push('js')
<script>
  // apllication de la partition du formulation en plusieurs page
function next(parent,child){
  document.getElementById(parent).style.display="none";
  document.getElementById(child).style.display="block";
}
function back(parent,child){
  document.getElementById(parent).style.display="block";
  document.getElementById(child).style.display="none";
}
</script>
@endpush


