@extends('formation.filiere.filiere_master')
@section('title','BTS BATIMENT')
      
@section('content_filiere_master')
       <h1 class="center j_white">Expertise Comptable</h1>

    <div class="bk_desc">
    <div class="items1">
      <div>
      <div class="sous_block_informations">
        <h2>Description:</h2>
        <p>L'<span>Expertise Comptable</span> est une profession libérale dont la mission consiste en la prestation de services comptables, fiscaux et sociaux pour le compte d’une clientèle principalement entrepreneuriale..</p>
      </div>
       <div class="sous_block_informations">
        <h2>DETAILS:</h2>
        <ul>
          <li>Préparation au diplome du 1er et 2nd cycle (DCG) ;</li>
          <li>Un (01) an de stage professionnel en cabinet Garanti;</li>
          <li>Une double diplomation (une licence et un DCG) ;</li>
          <li>Une ouverture sur les universités étrangeres ;</li>
        </ul>
      </div>
      <div class="sous_block_informations">
        <h2>Débouchés:</h2>
        <ul>
          <li>Devenir Expert Comptable;</li>
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
  </div>
</div>
@endsection
