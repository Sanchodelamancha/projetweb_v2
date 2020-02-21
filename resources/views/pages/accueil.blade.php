@extends('pages.layout')

@section('content')
    <body>
        
        
<!--<div class="imagesSlider">
<img src = "{{ URL::to('/') }}/images/outils.jpg" class="outils">
<img src = "{{ URL::to('/') }}/images/mobilier.jpg" class="mobilier">
<img src = "{{ URL::to('/') }}/images/instruments.jpg" class="instruments">
<img src = "{{ URL::to('/') }}/images/voiture.jpg" class="voiture">
</div>-->
@include('pages.slider')
<h1>Annonces</h1>
<table class = 'produitsServices'>
	<tbody class = 'tbody1'>

	<?php
		foreach($annonces as $annonce)
		{
		?>

		<tr class = 'lesProduits'>	
        <td style="background-image:url(<?= $annonce->lien_photo ?>)" class="leProduit">
        <div class="cadrage">
        <div class="nomAnnonce"><?= $annonce->nom_annonce ?></div>
        <a href="{{url('pages/annonceUnique/'. $annonce->id_annonce)}}" class = "soumettre">Afficher</a>
        </div>
		</td>
		</tr>

		<?php
		
		}
		?>
		
	</tbody>	
    </table>	
    <!-- slider script -->   
            
</body>
@endsection
