@extends('pages.layout')

@section('content')
    <body>
    <?php
		foreach($annonceUnique as $annonce)
		{
		?>


<h1><?= $annonce->nom_annonce ?></h1>


        <div class="nomAnnonce">Description<?= $annonce->description ?></div>
        <div> <img src={{url($annonce->lien_photo)}} alt=""> </div>
       <a href="{{url('annonceUnique')}}" class = "soumettre">Afficher</a>
       <?php
		}
		?>

</body>
@endsection
