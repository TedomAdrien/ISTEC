@extends('parent')

@push('css')
<style>
    .mt-5 {
        margin-top: 20px;
    }
</style>
@endpush

@section('content')

    <section class="probootstrap-section probootstrap-section-colored">
        <div class="container">
            <div class="row">
                <div class="col-md-12 probootstrap-animate">
                    <h1 class="text-center" style="color: #fff">Pré-inscription à ISTEC</h1>
                </div>

            </div>
        </div>
    </section>
    <div class="container center">
        @if(session('echec'))
        <strong class="alert alert-danger">
        {{session('echec')}}
        </strong>
    @endif
    </div>
    <div class="container">
        <div class="login100-form validate-form p-l-55 p-r-55 p-t-178 mt-5">
            <form class="row g-3" method="POST" action="{{ route('add.student') }}" class="was-validated">
                @csrf
                {{-- partie 1 --}}
                <div id="first">
                    <h2 style="text-align:center; padding-bottom: 16px; padding-top: -16px;"> <u>&Eacute;tape 1 :</u>
                        <span>Informations personnelles</span>
                    </h2>

                    <div class="col-md-6">
                        <label for="inputname" class="form-label">Nom<span style="color: red;"
                                title="champ obligatoire">*</span></label>
                        <input type="text" class="form-control" id="name" name="first_name" value="{{ old('first_name') }}">
                        @error('first_name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="col-md-6">
                        <label for="inputlastname" class="form-label">Prénom<span style="color: red;"
                                title="champ obligatoire">*</span></label>
                        <input type="text" class="form-control" id="lastname" name="last_name" value="{{ old('last_name') }}">
                        @error('last_name')

                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="col-md-6">

                        <label for="inputEmail4" class="form-label">Email <span style="color: red;"
                                title="champ obligatoire">*</span></label>
                        <input type="email" class="form-control" id="inputEmail4" name="email" value="{{ old('email') }}">
                        @error('email')
                <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="col-md-6">

                        <label for="inputNoCNI" class="form-label">Numero CNI <span style="color: red;"
                                title="champ obligatoire">*</span></label>
                        <input type="text" class="form-control" id="inputNoCNI" name="NoCNI" value="{{ old('NoCNI') }}">
                        @error('NoCNI')

                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="col-md-6">

                        <label for="date_naissance " class="form-label">Date de naissance <span style="color: red;"
                                title="champ obligatoire">*</span></label><br>
                        <input type="date" id="date_naissance" class="form-control" name="birthdate" value="{{ old('birthdate') }}">
                        @error('birthdate')

                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="col-md-6">

                        <label for="lieu_naissance" class="form-label"> Lieu de naissance <span style="color: red;"
                                title="champ obligatoire">*</span></label><br>
                        <input type="text" id="lieu_naissance" class="form-control" name="lieu_naissance" value="{{ old('lieu_naissance') }}">
                        @error('lieu_naissance')

                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="col-md-6">

                        <label for="ville_residence" class="form-label"> Ville de residence </label>
                        <input type="text" id="ville_residence" class="form-control" name="ville_residence" value="{{ old('ville_residence') }}">
                        @error('ville_residence')
            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="col-md-6">

                        <label for="inputcountry" class="form-label"> Nationalité</label>
                        <input type="text" id="inputcountry" class="form-control" name="pays" value="{{ old('pays') }}">
                        @error('pays')

                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="col-md-6">

                        <label for="inputregion " class="form-label"> Région d'origine</label>
                        <input type="text" id="inputregion" class="form-control" name="origin_region" value="{{ old('origin_region') }}">
                        @error('origin_region')

                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="col-md-6">

                        <label for="genre">Genre<span style="color: red;" title="champ obligatoire">*</span></label>
                        <div style="display: flex;">
                            <div style="margin-right: 20px">
                                <label id="genre">Masculin</label>
                                <input id="genre" type="radio" name="sex" value="Masculin" {{ (old('sex') === 'Masculin') ? 'checked' : '' }}>
                            </div>
                            <div>
                                <label id="genre">Feminin</label>
                                <input id="genre" type="radio" name="sex" value="Feminin" {{ (old('sex') === 'Feminin') ? 'checked' : '' }}>
                            </div>
                        </div>
                        @error('sex')

                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="col-md-6">

                        <label for="telephone " class="form-label">Telephone</label>
                        <input type="text" id="telephone" class="form-control" placeholder="+XXX XXXXXXXXX"
                            name="phone_number" value="{{ old('phone_number') }}">
                        @error('phone_number')

                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="col-md-6">

                        <label for="inputsituationmat" class="form-label">Situation Matrimoniale</label>
                        <select id="inputsituationmat" class="form-control" name="statut">
                            <option>Choose...</option>
                            <option value="Marié(e)" {{ (old('statut') === 'Marié(e)') ? 'selected' : '' }}>Marié(e)</option>
                            <option value="Celibataire" {{ (old('statut') === 'Celibataire') ? 'selected' : '' }}>Célibataire</option>
                            <option value="Divorcé(e)" {{ (old('statut') === 'Divorcé(e)') ? 'selected' : '' }}>Divorcé(e)</option>
                        </select>
                        @error('statut')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <button type="button" onclick="next('first','second')" class="btn btn-primary"
                        style="margin-top:10px; margin-bottom:5px; padding:10px; float:right; font-size:18px; border-radius:20px/20px"
                        value="">Suivant</button>
                </div>
                {{-- partie 2 --}}
                <div id="second" style="margin-top: 20px; display:none;">
                    <h2 style="text-align:center; padding-bottom: 16px; padding-top: -16px;"> <u>&Eacute;tape 2 :</u>
                        <span>Scolarité</span>
                    </h2>
                    <div class="col-md-6">
                        <label for="inputcycle" class="form-label">Cycle<span style="color: red;"
                                title="champ obligatoire">*</span></label>
                        <select id="inputcycle" class="form-control" name="cycle" value="{{ old('cycle') }}">
                            <option>Choose...</option>
                            <option value="BTS" {{ (old('cycle') === 'BTS') ? 'selected' : '' }}>BTS</option>
                            <option value="HND" {{ (old('cycle') === 'HND') ? 'selected' : '' }}>HND</option>
                            <option value="Licence" {{ (old('cycle') === 'Licence') ? 'selected' : '' }}>Licence</option>
                        </select>
                        @error('cycle')
              <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-6">

                        <label for="inputniveau" class="form-label">Niveau<span style="color: red;"
                                title="champ obligatoire">*</span></label>
                        <select id="inputniveau" class="form-control" name="niveau" value="{{ old('niveau') }}">
                            <option>Choose...</option>
                            <option value="1" {{ (old('niveau') === '1') ? 'selected' : '' }}>1</option>
                            <option value="2" {{ (old('niveau') === '2') ? 'selected' : '' }}>2</option>
                            <option value="3" {{ (old('niveau') === '3') ? 'selected' : '' }}>3</option>
                            <option value="4" {{ (old('niveau') === '4') ? 'selected' : '' }}>4</option>
                            <option value="5" {{ (old('niveau') === '5') ? 'selected' : '' }}>5</option>
                        </select>
                        @error('niveau')

                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="col-md-6">

                        <label for="inputfiliere" class="form-label">Formations<span style="color: red;"
                                title="champ obligatoire">*</span></label>
                        <select id="inputfiliere" class="form-control" name="formation">
                            <option>Choose...</option>
                            <option value="Filiere industrielle" {{ (old('formation') === 'Filiere industrielle') ? 'selected' : '' }}>Filiere industrielle</option>
                            <option value="Filiere Commercial" {{ (old('formation') === 'Filiere Commercial') ? 'selected' : '' }}>Filiere Commercial</option>
                        </select>
                        @error('formation')
                <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="col-md-6">

                        <label for="inputformation" class="form-label">Spécialités<span style="color: red;"
                                title="champ obligatoire">*</span></label>
                        <input type="text" class="form-control" id="inputformation" placeholder="Spécialité choisie"
                            name="specialites" value="{{ old('specialites') }}">
                        @error('specialites')

                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="col-md-6">

                        <label for="diplome" class="form-label">Diplome d'admission <span style="color: green;"
                                title="dernier diplome a votre actif">?</span><span style="color: red;"
                                title="champ obligatoire">*</span></label>
                        <input type="text" class="form-control" id="diplome" placeholder="Dernier diplome obtenu"
                            name="diplome" value="{{ old('diplome') }}">
                        @error('diplome')
               <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="col-md-6">

                        <label for="inputdateobt" class="form-label">Date d'obtention <span style="color: red;"
                                title="champ obligatoire">*</span></label>
                        <select id="inputdateobt" class="form-control" name="date_obtention">
                            <option>Choose...</option>
                            <option value="2021" {{ (old('date_obtention') === '2021') ? 'selected' : '' }}>2021</option>
                            <option value="2020" {{ (old('date_obtention') === '2020') ? 'selected' : '' }}>2020</option>
                            <option value="2019" {{ (old('date_obtention') === '2019') ? 'selected' : '' }}>2019</option>
                            <option value="2018" {{ (old('date_obtention') === '2018') ? 'selected' : '' }}>2018</option>
                            <option value="2017" {{ (old('date_obtention') === '2017') ? 'selected' : '' }}>2017</option>
                            <option value="2016" {{ (old('date_obtention') === '2016') ? 'selected' : '' }}>2016</option>
                            <option value="2015" {{ (old('date_obtention') === '2015') ? 'selected' : '' }}>2015</option>
                            <option value="2014" {{ (old('date_obtention') === '2014') ? 'selected' : '' }}>2014</option>
                            <option value="2013" {{ (old('date_obtention') === '2013') ? 'selected' : '' }}>2013</option>
                            <option value="2012" {{ (old('date_obtention') === '2012') ? 'selected' : '' }}>2012</option>
                        </select>
                        @error('date_obtention')

                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="col-md-6">

                        <label for="paysobt " class="form-label">Pays d'obtention <span style="color: red;"
                                title="champ obligatoire">*</span></label>
                        <input type="text" id="paysobt" class="form-control" name="pays_obtention" value="{{ old('pays_obtention') }}">
                        @error('pays_obtention')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="col-md-12">
                        <label for="etabobt " class="form-label">Etablissement d'obtention <span style="color: red;"
                                title="champ obligatoire">*</span></label>
                        <input type="text" id="etabobt" class="form-control" name="etablissement" value="{{ old('etablissement') }}">
                        @error('etablissement')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div>
                        <button type="button" onclick="back('first','second')" class="btn btn-secondary "
                            style="margin-top:10px; margin-bottom:5px; padding:10px; float:left; font-size:18px; border-radius:20px/20px"
                            value="">
                            Précédent
                        </button>
                        <button type="button" onclick="next('second','tree')" class="btn btn-primary "
                            style="margin-top:10px; margin-bottom:5px; padding:10px; float:right; font-size:18px; border-radius:20px/20px"
                            value="">
                            Suivant
                        </button>
                    </div>
                </div>

                {{-- partie 3 --}}
                <div id="tree" style="display: none">
                    <h2 style="text-align:center; padding-bottom: 16px; padding-top: -16px;"> <u>&Eacute;tape 3 :</u> <span>Profil
                            Académique</span>
                    </h2>

                    <div class="col-md-6">
                        <label for="inputsitscol" class="form-label">Situation scolaire de l'année passée :</label>
                        <select id="inputsitscol" class="form-control" name="situation_passe">
                            <option>Choose...</option>
                            <option value="Inscrite au secondaire" {{ (old('situation_passe') === 'Inscrite au secondaire') ? 'selected' : '' }}>Inscrit(e) au secondaire</option>
                            <option value="Non-scolarisee" {{ (old('situation_passe') === 'Non-scolarisee') ? 'selected' : '' }}>Non-scolarisé(e)</option>
                            <option value="Inscrite autre universite" {{ (old('situation_passe') === 'Inscrite autre universite') ? 'selected' : '' }}>Inscrit(e) dans une autre université</option>
                        </select>
                    </div>

                    <div class="col-md-6">
                        <label for="firstyear" class="form-label">Année première inscription à l'université :</label>
                        <select id="firstyear" class="form-control" name="date_arrive_fac">
                            <option>Choose...</option>
                            <option value="2021" {{ (old('date_arrive_fac') === '2021') ? 'selected' : '' }}>2021</option>
                            <option value="2020" {{ (old('date_arrive_fac') === '2020') ? 'selected' : '' }}>2020</option>
                            <option value="2019" {{ (old('date_arrive_fac') === '2019') ? 'selected' : '' }}>2019</option>
                            <option value="2018" {{ (old('date_arrive_fac') === '2018') ? 'selected' : '' }}>2018</option>
                            <option value="2017" {{ (old('date_arrive_fac') === '2017') ? 'selected' : '' }}>2017</option>
                            <option value="2016" {{ (old('date_arrive_fac') === '2016') ? 'selected' : '' }}>2016</option>
                            <option value="2015" {{ (old('date_arrive_fac') === '2015') ? 'selected' : '' }}>2015</option>
                            <option value="2014" {{ (old('date_arrive_fac') === '2014') ? 'selected' : '' }}>2014</option>
                            <option value="2013" {{ (old('date_arrive_fac') === '2013') ? 'selected' : '' }}>2013</option>
                            <option value="2019" {{ (old('date_arrive_fac') === '2012') ? 'selected' : '' }}>2012</option>
            </select>
                    </div>

                    <div class="col-md-6">
      <label for="typeuniv" class="form-label">Type d'université fréquentée la première fois :</label>
                        <select id="typeuniv" class="form-control" name="typeuniv">
                            <option>Choose...</option>
                            <option value="Universite public" {{ (old('typeuniv') === 'Universite public') ? 'selected' : '' }}>Universite public</option>
                            <option value="Universite privee" {{ (old('typeuniv') === 'Universite privee') ? 'selected' : '' }}>Universite privee</option>
                            <option value="Autres">Autres</option>

                        </select>
                    </div>

                    <div class="col-md-6">

                        <label for="actprof">Avez vous une acitivite professionnelle ?</label>
                        <div style="display: flex">
                            <div style="margin-right: 20px">
                                <label for="oui">Oui</label>
                                <input id="oui" type="radio" name="professional_activity" value="OUI"  {{ (old('professional_activity') === 'OUI') ? 'checked' : '' }}>
                            </div>
                            <div>
                                <label for="non">Non</label>
                                <input id="non" type="radio" name="professional_activity" value="NON"  {{ (old('professional_activity') === 'NON') ? 'checked' : '' }}>
                            </div>
                        </div>
                    </div>

                    <button type="button" onclick="back('second','tree')" class="btn btn-secondary "
                        style="margin-top:10px; margin-bottom:5px; padding:10px; float:left; font-size:18px; border-radius:20px/20px"
                        value="">
                        Précédent
                    </button>
                    <button type="button" onclick="next('tree','four')" class="btn btn-primary "
                        style="margin-top:10px; margin-bottom:5px; padding:10px; float:right; font-size:18px; border-radius:20px/20px"
                        value="">
                        Suivant
                    </button>
                </div>

                {{-- partie 4 --}}
                <div id="four" style="display:none;">
                    <h2 style="text-align:center; padding-bottom: 16px; padding-top: -16px;"> <u>&Eacute;tape 4 :</u>
                        <span>Aptitudes physiques</span>
                    </h2>

                    <div class="col-md-6">
                        <label for="firstfreetime" class="form-label">Premier Loisir :</label>
                        <select id="firstfreetime" class="form-control" name="loisir1">
                            <option>Choose...</option>
                            <option value="Lecture" {{ (old('loisir1') === 'Lecture') ? 'selected' : '' }}>Lecture</option>
                            <option value="Cinema" {{ (old('loisir1') === 'Cinema') ? 'selected' : '' }}>Cinema</option>
                            <option value="Sport" {{ (old('loisir1') === 'Sport') ? 'selected' : '' }}>Sport</option>
                            <option value="Jeux" {{ (old('loisir1') === 'Jeux') ? 'selected' : '' }}>Jeux</option>
                            <option value="Voyage" {{ (old('loisir1') === 'Voyage') ? 'selected' : '' }}>Voyage</option>
                            <option value="Danse" {{ (old('loisir1') === 'Danse') ? 'selected' : '' }}>Danse</option>
                            <option value="Chant" {{ (old('loisir1') === 'Chant') ? 'selected' : '' }}>Chant</option>
                            <option value="Musique" {{ (old('loisir1') === 'Musique') ? 'selected' : '' }}>Musique</option>
                            <option value="Autres" {{ (old('loisir1') === 'Autres') ? 'selected' : '' }}>Autres</option>
                        </select>
                    </div>

                    <div class="col-md-6">
                        <label for="scndfreetime" class="form-label">Deuxième Loisir :</label>
                        <select id="scndfreetime" class="form-control" name="loisir2">
                            <option>Choose...</option>
                            <option value="Lecture" {{ (old('loisir2') === 'Lecture') ? 'selected' : '' }}>Lecture</option>
                            <option value="Cinema" {{ (old('loisir2') === 'Cinema') ? 'selected' : '' }}>Cinema</option>
                            <option value="Sport" {{ (old('loisir2') === 'Sport') ? 'selected' : '' }}>Sport</option>
                            <option value="Jeux" {{ (old('loisir2') === 'Jeux') ? 'selected' : '' }}>Jeux</option>
                            <option value="Voyage" {{ (old('loisir2') === 'Voyage') ? 'selected' : '' }}>Voyage</option>
                            <option value="Danse" {{ (old('loisir2') === 'Danse') ? 'selected' : '' }}>Danse</option>
                            <option value="Chant" {{ (old('loisir2') === 'Chant') ? 'selected' : '' }}>Chant</option>
                            <option value="Musique" {{ (old('loisir2') === 'Musique') ? 'selected' : '' }}>Musique</option>
                            <option value="Autres" {{ (old('loisir2') === 'Autres') ? 'selected' : '' }}>Autres</option>

                        </select>
                    </div>

                    <div class="col-md-6">

                        <label for="handip">Avez vous un handicap ?</label>
                        <div style="display: flex">
                            <div style="margin-right: 20px;">
                                <label for="Oui">Oui</label>
                                <input id="Oui" type="radio" name="handicap" value="OUI" {{ (old('handicap') === 'OUI') ? 'checked' : '' }}>
                            </div>
                            <div>
                                <label for="Non">Non</label>
                                <input id="Non" type="radio" name="handicap" value="NON" {{ (old('handicap') === 'NON') ? 'checked' : '' }}>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <label for="actsport">Pratiquez-vous une activité sportive ?</label>
                        <div style="display: flex">
                            <div style="margin-right: 20px;">
                                <label>Oui</label>
                                <input type="radio" name="sport_activity" value="OUI" {{ (old('sport_activity') === 'OUI') ? 'checked' : '' }}>
                            </div>
                            <div>
                                <label>Non</label>
                                <input type="radio" name="sport_activity" value="NON" {{ (old('sport_activity') === 'NON') ? 'checked' : '' }}>
                            </div>
                        </div>
                    </div>

                    <button type="button" onclick="back('tree','four')" class="btn btn-secondary "
                        style="margin-top:10px; margin-bottom:5px; padding:10px; float:left; font-size:18px; border-radius:20px/20px"
                        value="">
                        Précédent
                    </button>
                    <button type="button" onclick="next('four','five')" class="btn btn-primary "
                        style="margin-top:10px; margin-bottom:5px; padding:10px; float:right; font-size:18px; border-radius:20px/20px; "
                        value="">
                        Suivant
                    </button>
                </div>
                {{-- partie 5 --}}
                <div id="five" style="display:none">
                    <h2 style="text-align:center; padding-bottom: 16px; padding-top: -16px;"> <u>&Eacute;tape 5 :</u> <span>Parents (Tuteurs)</span></h2>

                    <div style="float:left; padding:0 8px; width:50%;">
                        <h5>PARENTS (TUTEURS)</h5>
                        <div class="col-md-12">
                            <label for="inputname" class="form-label">Nom<span style="color: red;"
                                    title="champ obligatoire">*</span></label>
                            <input type="text" class="form-control" id="inputname" name="name_parent" value="{{ old('name_parent') }}">
                            @error('name_parent')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-12">
                            <label for="inputlastname" class="form-label">Prénom<span style="color: red;"
                                    title="champ obligatoire">*</span></label>
                            <input type="text" class="form-control" id="inputlastname" name="lastname_parent" value="{{ old('lastname_parent') }}">
                            @error('lastname_parent')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-12">
                            <label for="ville_residence " class="form-label"> Ville de residence </label>
                            <input type="text" id="ville_residence" class="form-control" name="ville_resid_parent" value="{{ old('ville_resid_parent') }}">
                            @error('ville_resid_parent')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-12">
                            <label for="telephone " class="form-label">Telephone<span style="color: red;"
                                    title="champ obligatoire">*</span></label>
                            <input type="text" id="telephone" class="form-control" placeholder="+XXX XXXXXXXXX"
                                name="telephone_parent" value="{{ old('telephone_parent') }}">
                            @error('telephone_parent')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div>
                        <h5>AUTRE</h5>
                        <div class="col-md-6">
                            <label for="name_autre" class="form-label">Nom<span style="color: red;"
                                    title="champ obligatoire">*</span></label>
                            <input type="text" class="form-control" id="name_autre" name="name_autre" value="{{ old('name_autre') }}">
                            @error('name_autre')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="lastname_autre" class="form-label">Prénom<span style="color: red;"
                                    title="champ obligatoire">*</span></label>
                            <input type="text" class="form-control" id="lastname_autre" name="lastname_autre" value="{{ old('lastname_autre') }}">
                            @error('lastname_autre')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="ville_resid_autre " class="form-label"> Ville de residence </label>
                            <input type="text" id="ville_resid_autre" class="form-control" name="ville_resid_autre" value="{{ old('ville_resid_autre') }}">
                            @error('ville_resid_autre')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="telephone_autre" class="form-label">Telephone<span style="color: red;"
                                    title="champ obligatoire">*</span></label>
                            <input type="text" id="telephone_autre" class="form-control" placeholder="+XXX XXXXXXXXX"
                                name="telephone_autre" value="{{ old('telephone_autre') }}">
                            @error('telephone_autre')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <button type="button" onclick="back('four','five')" class="btn btn-secondary"
                        style="margin-top:10px; margin-bottom:5px; padding:10px; float:left; font-size:18px; border-radius:20px/20px"
                        value="">
                        Précédent
                    </button>
                    <button type="submit" class="btn btn-primary "
                        style="margin-top:10px; margin-bottom:5px; padding:10px; float:right; font-size:18px; border-radius:20px/20px;background-color:green;">
                        Valider
                    </button>
                </div>
            </form>
        </div>
    </div>

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
