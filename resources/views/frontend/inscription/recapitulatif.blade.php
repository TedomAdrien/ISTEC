<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>ISTEC Pré-inscription | Récapitulatif</title>
		<link rel="stylesheet" href="{{ asset('css/recapitulatif.css') }}" />
	</head>
	<body>
		<div class="contend">
			<h1 class="center">
				FICHE D'INSCRIPTION
				<span class="italic">N<sup>o</sup></span> :
				<span style="font-weight: lighter; font-size: 0.7em"
					>{{ $student->id . '-' . date('Y-m-d') }}</span
				>
			</h1>

			<div class="info">
				<h4 class="italic underline serif">
					INFORMATIONS PERSONNELLES :
				</h4>
				<div>
					<p class="flex spacebetween">
						<span class="bb1">
							Filière : <span>{{ $student->formation }}</span>
						</span>
						<span class="bb1">
							Specialite:
							<span>{{ $student->specialites }}</span></span
						>
						<span class="bb11">
							Niveau : <span>{{ $student->niveau }}</span></span
						>
					</p>
				</div>
				@if($student->genre === 'Masculin')
				<div>
					<p class="flex spacebetween">
						Titre :
						<span class="b1">
							M :<span style="font-weight: bold"> X</span>
						</span>
						<span class="b1"> Mlle<span> .....</span></span>
						<span class="b1"> Mme<span> .....</span></span>
					</p>
				</div>
				@elseif($student->genre === 'Feminin' && $student->statut ===
				'Marié(e)')
				<div>
					<p class="flex spacebetween">
						Titre : <span class="b1"> M <span> .....</span> </span>
						<span class="b1"> Mlle<span> .....</span></span>
						<span class="b1">
							Mme :<span style="font-weight: bold"> X</span></span
						>
					</p>
				</div>
				@else
				<div>
					<p class="flex spacebetween">
						Titre : <span class="b1"> M <span> .....</span> </span>
						<span class="b1">
							Mlle :<span style="font-weight: bold">
								X</span
							></span
						>
						<span class="b1"> Mme<span> .....</span></span>
					</p>
				</div>
				@endif
				<div>
					<p class="flex spacebetween">
						<span class="b2">
							Nom(s) :
							<span>{{ $student->first_name }}</span></span
						>
						<span class="b2">
							Prénom(s) :
							<span>{{ $student->last_name }}</span></span
						>
					</p>
				</div>
				<!-- <div><p>Noms du conjoint: <span>.................................................................................................................................</span></p></div> -->
				<div>
					<p class="flex spacebetween">
						<span class="b2">
							Date de naissance :
							<span>{{ $student->birthdate }}</span></span
						>
						<span class="b2">
							Lieu :
							<span>{{ $student->lieu_naissance }}</span></span
						>
					</p>
				</div>
				<div>
					<p class="flex spacebetween">
						<span class="b2">
							Numéro CNI :
							<span>{{ $student->NoCNI }}</span></span
						>
						<span class="b2">
							Region d'origine :
							<span>{{ $student->origin_region }}</span></span
						>
					</p>
				</div>
				<div>
					<p class="flex spacebetween">
						<span class="b2">
							Nationalité :
							<span>{{ $student->pays }}</span></span
						><span class="b2"
							>Quartier :
							<span>{{ $student->ville_residence }}</span></span
						>
					</p>
				</div>
				<div>
					<p class="flex spacebetween">
						<span class="b2">
							Télephone personnel :
							<span>{{ $student->phone_number }}</span></span
						>
						<span class="b2"
							>Télephone parent :
							<span
								>{{ $parent->phone_number }} {{
								(!is_null($other_parent) &&
								!is_null($other_parent->phone_number)) ? '/' .
								$other_parent->phone_number : '' }}</span
							></span
						>
					</p>
				</div>
				<div>
					<p>
						Email : <span><em>{{ $student->email }}</em></span>
					</p>
				</div>
			</div>

			<div class="info border-b">
				<h4 class="italic underline serif">
					DIPLÔMES ET ANNÉES D'OBTENTION :
				</h4>
				<div>
					<div>
						<p class="flex start">
							<span class="b2">
								Diplôme :
								<span>{{ $student->diplome }}</span></span
							><span class="b2">
								Année :
								<span
									>{{ $student->date_obtention }}</span
								></span
							>
						</p>
					</div>
					<div>
						<p>
							Établissement fréquenté :
							<span><em>{{ $student->etablissement }}</em></span>
						</p>
					</div>
				</div>
			</div>

			<div class="info mt-2 p-1 border-all">
				<h2 class="center italic underline serif">
					DROITS UNIVERSITAIRES
				</h2>
				<div class="w-7">
					<div class="flex spacebetween">
						<span class="w-5">- Frais d'inscription :</span>
						<span class="fl-r w-5">30 000 FCFA</span>
					</div>
					<div class="flex spacebetween">
						<span class="w-5">- Total :</span>
						<span class="fl-r w-5 border-t">30 000 FCFA</span>
					</div>
				</div>
				<div
					class="flex spacebetween border-t w-10"
					style="margin-top: 10px;"
				>
					<span>&Eacute;tudiant</span><span>Scolarité</span
					><span>Contrôle</span><span>Directeur</span>
				</div>
			</div>

			<div class="info center">
				<p>
					(1) Ces droits universitaires sont exclusifs des frais
					d'examen, de soutenance et autres frais solicités ou exigés
					dans le cadre de l'examen.
				</p>
			</div>

			<div class="info center">
				<a
					href="{{ route('print.fiche_pre_inscription', $student) }}"
					style="
						border: 2px black solid;
						text-decoration: none;
						padding: 5px;
						color: black;
					"
					>Imprimer</a
				>
			</div>
		</div>
	</body>
</html>
