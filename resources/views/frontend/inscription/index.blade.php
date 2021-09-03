@extends('parent')
@push('css')

@endpush

@section('content')
<section class="probootstrap-section probootstrap-section-colored " style="background:#f4a105;">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-left section-heading probootstrap-animate">
              <h2>INSCRIPTION</h2>
            </div>
          </div>
        </div>
      </section>
     


<div class="wrap-login100" style="height: 850px; width: 1200px; margin:auto;">
<div class="login100-form validate-form p-l-55 p-r-55 p-t-178">
<form class="row g-3"  method="POST" action ="{{route('users.store')}}" class="was-validated" >
  @csrf
    <h2 style="text-align:center; padding-bottom: 16px; padding-top: -16px;"> <u> Etape1:</u> <span>Informations personnels</span> </h2>
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
    <label for="inputcountry" class="form-label">Pays</label>
    <select id="inputcountry" class="form-select" name="pays">
      <option >Choose...</option>
      <option value="Cameroun">Cameroun</option>
      <option value="Congo">Congo</option>
    </select>
    @error('pays')
    <span class="text-danger">{{ $message }}</span>
 @enderror
  </div>
  <div class="col-md-6">
    <label for="inputregion" class="form-label" >Région d'origine</label>
    <select id="inputregion" class="form-select" name="origin_region">
      <option >Choose...</option>
      <option value="Littoral">Littoral</option>
      <option value="Ouest">Ouest</option>
    </select>
    @error('origin_region')
    <span class="text-danger">{{ $message }}</span>
 @enderror
  </div>
  <div class="col-md-6">
    <label for="inputdepartment" class="form-label">Departement</label>
    <select id="inputdepartment" class="form-select" name="departement" >
      <option selected>Choose...</option>
      <option value="Wouri">Wouri</option>
      <option value="Nkam">Nkam</option>
    </select>
    @error('departement')
    <span class="text-danger">{{ $message }}</span>
 @enderror
  </div>
  <div class="col-md-6">
						<label for="genre">Genre<span style="color: red;" title="champ obligatoire">*</span></label>
						<div>
                            <div style="float:left; margin-right: 16px;">
							<label>Masculin</label>
							<input id="genre" type="radio" name="genre">
                            </div>
                            <div>
							<label>Feminin</label>
							<input id="genre" type="radio" name="genre">
                            </div>
						</div>
            @error('genre')
            <span class="text-danger">{{ $message }}</span>
         @enderror
					</div>
                    <div class="col-md-6">
    <label for="telephone " class="form-label">Telephone</label>
    <input  type="text" id="telephone" class="form-control" placeholder="+237 6XXXXXXXX" name="telephone">
    @error('telephone')
    <span class="text-danger">{{ $message }}</span>
 @enderror
  </div>
                    <div class="col-md-6">
    <label for="inputsituationmat" class="form-label">Situation Matrimoniale</label>
    <select id="inputsituationmat" class="form-select" name="statut">
      <option selected>Choose...</option>
      <option value="Marié(e)">Marié(e)</option>
      <option value="Celibataire">Celibataire</option>
    </select>
    @error('statut')
    <span class="text-danger">{{ $message }}</span>
 @enderror
  </div>
 
  <div  style="" >
<button type="submit"  class="btn btn-primary " style="margin-top:10px; margin-bottom:5px; padding:10px; float:right; font-size:18px; border-radius:20px/20px" value="">
Sign up and Next



</button>



</div>
  

</form>


</div>
</div>
</div>
</div>
    

@endsection

@push('js')
@endpus
