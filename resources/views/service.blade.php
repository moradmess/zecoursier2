@extends('layouts.menu')

@section('content')
<script type="text/javascript"> 
document.getElementById('service').className = "active";
</script>
	<div class="row">
  <iframe style="width: 100%" height="500" src="https://www.youtube.com/embed/9jo0w4bA2VU" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
	<hr />

	<div class="row" style="text-align: justify; text-align-last: center;font-size: 1.4em;margin-top: 20px">
		<p class="col-sm-6 col-sm-offset-3">Nos services sont caractérisés par la sécurité avec une culture de l'innovation visée sur la rapidité et l'excellence.<br />En plus vous garantissez une livraison de toute qualité, et donc vous n'inquiétez pas d'essayer de rapprocher de nos services <strong>ZeCOURSIER</strong>.</p>
	</div>
<hr />
<div class="row">
	<aside class="col-sm-4">
		<div class="panel panel-default" style="text-align: center;">
  		<div class="panel-heading"><span class="glyphicon glyphicon-check"></span> RAMASSAGE</div>
  		<div class="panel-body">
  			<img style="width: 50%" src="{{ secure_asset('img/ramassages.jpg') }}">
  			<!--<img style="width: 50%" src="{{ asset('img/ramassages.jpg') }}">-->
    	<p style="font-size: 1.2em;">Nous pouvons déplacer chez vous dans des plusieurs sites au Maroc afin de ramasser vos colis</p>
  		</div>
		</div>
	</aside>
	<aside class="col-sm-4">
		<div class="panel panel-default" style="text-align: center;">
  		<div class="panel-heading"><span class="glyphicon glyphicon-send"></span> LIVRAISON</div>
  		<div class="panel-body">
  		<img style="width: 50%" src="{{ secure_asset('img/livraisons.jpg') }}">
  		<!--<img style="width: 50%" src="{{ asset('img/livraisons.jpg') }}">-->
    	<p style="font-size: 1.2em;">ZeCOURSIER est à la disposition de tous les e-commerciaux, 24h/24 et 7j/7 pour livrer tous ce que vous voulez</p>
  		</div>
		</div>
	</aside>
	<aside class="col-sm-4">
		<div class="panel panel-default" style="text-align: center;">
  		<div class="panel-heading"><span class="glyphicon glyphicon-pencil"></span> SUIVI</div>
  		<div class="panel-body">
  		<img style="width: 50%" src="{{ secure_asset('img/suivi.jpg') }}">
  		<!--<img style="width: 50%" src="{{ asset('img/suivi.jpg') }}">-->
    	<p style="font-size: 1.2em;">Au cas où un client ne réponde pas, nous l'envoyons un SMS dans lequel nous informons que son colis est présent dans le délai de 72 h</p>
  		</div>
		</div>
	</aside>
</div>

@endsection
