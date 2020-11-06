@extends('layouts.menu')

@section('content')
<script type="text/javascript"> 
document.getElementById('contact').className = "active";
</script>
<!--<img class="img-rounded img-responsive" width="100%" src="{{ secure_asset('img/contactez_nous.jpg') }}" alt="contactez_nous">-->
<img class="img-rounded img-responsive" width="100%" src="{{ asset('img/contactez_nous.jpg') }}" alt="contactez_nous">
<hr />
<div class="row">
	<aside class="col-sm-5">
		 <div class="panel-group">
                <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><span class="glyphicon glyphicon-circle-arrow-down"></span>
                        <a style="text-decoration: none;font-weight: bold;" id="link" class="accordion-toggle" href="#item1" data-toggle="collapse"> Nos Coordonnées </a></h3>
                </div>
                <div id="item1" class="panel-collapse collapse">
                <div class="panel-body"> 
                	<p><span class="glyphicon glyphicon-home"></span> 3 rue Oslo boulevard Bayrouth Zohor 1 Fès Maroc</p>
                	<p><span class="glyphicon glyphicon-earphone"></span> +212622-656117</p>
                	<p><span class="fa fa-whatsapp"></span> +212688-163484</p>
                	<p><span class="glyphicon glyphicon-envelope"></span> zecoursier@gmail.com</p>
                </div>
            	</div>
            	</div>
        </div>
        <div class="panel-group">
                <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><span class="glyphicon glyphicon-circle-arrow-down"></span>
                        <a style="text-decoration: none;font-weight: bold;" id="link" class="accordion-toggle" href="#item2" data-toggle="collapse"> Nos Réseaux Sociaux </a></h3>
                </div>
                <div id="item2" class="panel-collapse collapse">
                <div class="panel-body"> 
                	<a href="https://www.facebook.com/zecoursier.officiel/" onclick="window.open(this.href); return false;" class="btn btn-social-icon btn-facebook center-block" role="button"><span class="fa fa-facebook"></span></a><br />
                	<a href="https://www.youtube.com/channel/UCiqsOSIEBjQv9kSAI_NwN8Q" class="btn btn-social-icon btn-pinterest center-block" onclick="window.open(this.href); return false;" role="button"><span class="fa fa-youtube"></span></a>
                </div>
            	</div>
            	</div>
        </div>
</aside>
<aside class="col-sm-7">
	<iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d13229.747928042476!2d-4.995898276462142!3d34.00699257773561!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0xd9f8b9d4c46d683%3A0xe5a5f61244ae81d4!2sAvenue%20Bayrout%2C%20F%C3%A8s%2C%20Maroc!3m2!1d34.0069751!2d-4.9871435!5e0!3m2!1sfr!2sma!4v1588693482297!5m2!1sfr!2sma" height="390" frameborder="0" style="border:0;width: 100%" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</aside>
</div>

@endsection