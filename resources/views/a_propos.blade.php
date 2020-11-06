@extends('layouts.menu')

@section('content')
<script type="text/javascript"> 
document.getElementById('propos').className = "active";
</script>
<section class="row well">
	<!--<img margin-bottom: 10px" width="100%" class="img-rounded img-responsive" src="{{ secure_asset('img/zecoursier_logo.jpg') }}" alt="ZeCoursier">-->
	<img margin-bottom: 10px" width="100%" class="img-rounded img-responsive" src="{{ asset('img/zecoursier_logo.jpg') }}" alt="ZeCoursier">
	<aside class="col-sm-6 col-sm-offset-3" style="text-align: justify; text-align-last: center;font-size: 1.4em;margin-top: 25px">
		<p><strong>ZeCOURSIER</strong> est une auto-entreprenariat, son rôle principal est <strong>le stockage</strong> et <strong>la livraison à domicile</strong>, ainsi vous pouvez <strong>suivre l'état de vos colis</strong> que ça soit une marchandise, produit, ..., etc.</p>
	<p>Donc si vous  êtes un e-commercial ou commercial chargé des demandes sur internet de votre client à domicile, vous n'hésitez pas à choisir notre service. <strong>ZeCOURSIER</strong> est le bon choix pour vous, et nous aurons de la fierté de vous servir.</p>
	</aside>
</section>
<h1 style="text-align: center;font-weight: bold;color: rgb(50,50,50);margin-bottom: 30px;margin-top: 30px">EQUIPE DE ZeCOURSIER</h1>
<div class="row">
	<aside class="col-md-10 col-md-offset-1">
		<div class="panel panel-default" style="text-align: center;">
	    <div class="panel-heading" style="font-size: 1.2em;font-weight: bold;">Gérant / Livreur</div>
  		<div class="panel-body">
    	<div class="thumbnail">
      	<!--<img class="img-circle" width="120" src="{{ secure_asset('img/gerant.jpg') }}" alt="gérant">-->
      	<img class="img-circle" width="120" src="{{ asset('img/gerant.jpg') }}" alt="gérant">
      	<div class="caption">
        <h3>ZAKARIA ELMESOUDY</h3>
        <p style="font-size: 1.2em;">Jeune homme âgé de 27 ans, bachelier de l'école technologie numérique et multimédia de la FEDE, ait des connaissances sur la psychologie et de bien douer avec les gens, obtenu un certificat en potentiels vivant de la fondation internationale pour la jeunesse, ait une grande expérience en distribution des colis et en technique de vente avec Sté TRANS RTIMI.</p>
        <p style="font-size: 1.2em;">De plus, un jeune homme motivé, flexible, aime son travail et honnête</p>
      	</div>
    	</div>
  		</div>
		</div>
	</aside>
</div>

<div class="row">
	<aside class="col-md-5 col-md-offset-1 col-sm-6">
		<div class="panel panel-default" style="text-align: center;">
	    <div class="panel-heading" style="font-size: 1.2em;font-weight: bold;">Développeur</div>
  		<div class="panel-body">
    	<div class="thumbnail">
      	<!--<img class="img-circle" width="120" src="{{ secure_asset('img/livreur3.jpg') }}" alt="développeur">-->
      	<img class="img-circle" width="120" src="{{ asset('img/livreur3.jpg') }}" alt="développeur">
      	<div class="caption">
        <h3>MORAD</h3>
        <p style="font-size: 1.2em;">Jeune homme âgé de 25 ans, ingénieur d'Etat, motivé, honnête, il cherche toujours à perfectionner la qualité du site, et fixer les problèmes qui peuvent briser son bon fonctionnement</p>
    	</div>
  		</div>
		</div>
		</div>
	</aside>
	<aside class="col-md-5 col-sm-6">
		<div class="panel panel-default" style="text-align: center;">
	    <div class="panel-heading" style="font-size: 1.2em;font-weight: bold;">Livreur</div>
  		<div class="panel-body">
    	<div class="thumbnail">
      	<!--<img class="img-circle" width="120" src="{{ secure_asset('img/livreur1.jpg') }}" alt="livreur">-->
      	<img class="img-circle" width="120" src="{{ asset('img/livreur1.jpg') }}" alt="livreur">
      	<div class="caption">
        <h3>SAMIR</h3>
        <p style="font-size: 1.2em;">Jeune homme âgé de 27 ans, titulaire de la licence en psychologie, ait des connaissances sur le vente et la livraison à domicile, motivé, honnête et il cherche à améliorer la façon de travail, de parler et d'agir</p>
    	</div>
  		</div>
		</div>
		</div>
	</aside>
</div>
@endsection
