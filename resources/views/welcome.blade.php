@extends('layouts.menu')

@section('content')
<script type="text/javascript"> 
document.getElementById('accueil').className = "active";
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
</script>

<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <!--<img style="width: 100%" src="{{ secure_asset('img/slider-1-1.jpg') }}" alt="slider1">-->
      <img style="width: 100%" src="{{ asset('img/slider-1-1.jpg') }}" alt="slider1">
    </div>
    <div class="item">
      <!--<img style="width: 100%" src="{{ secure_asset('img/slider-2-2.jpg') }}" alt="slider2">-->
      <img style="width: 100%" src="{{ asset('img/slider-2-2.jpg') }}" alt="slider2">
    </div>
    <div class="item">
      <!--<img style="width: 100%" src="{{ secure_asset('img/slider-3-3.jpg') }}" alt="slider3">-->
      <img style="width: 100%" src="{{ asset('img/slider-3-3.jpg') }}" alt="slider3">
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<hr />

<div class="row">
<section class="col-sm-5" style="font-size: 1.2em;">
  <p><strong>ZeCOURSIER</strong>, une auto-entreprenariat, basée sur <strong>la livraison à domicile</strong> rapide de vos demandes que soient des marchandises, des pièces,des documents,..., à Fès aussi à ses environs</p>
    <p>Zakaria Elmesoudy, le créateur de <strong>ZeCOURSIER</strong> un jeune entrepreneur qui habite à la ville de Fes, motivé. J'ai toujours l'ambition de rendre mon service le plus bon possible, et de travailler sur les lacunes et les défauts afin de satisfaire nos clients.</p>
 <!--<img class="hidden-sm img-responsive img-rounded" src="{{ secure_asset('img/banner1.jpg') }}" style="width:100%;margin-bottom: 15px;" alt="banner1">-->
 <img class="hidden-sm img-responsive img-rounded" src="{{ asset('img/banner1.jpg') }}" style="width:100%;margin-bottom: 15px;" alt="banner1">
</section>
<aside class="col-sm-7">
    <iframe src="https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2Fzecoursier.officiel%2Fvideos%2F2588580877915913%2F&show_text=0&width=560" scrolling="no" frameborder="0" height="470" allowTransparency="true" allowFullScreen="true" style="width: 100%;border: none;overflow: hidden;"></iframe>
</aside>    
</div>
<div class="row visible-sm">
  <!--<img class="img-responsive img-rounded center-block" src="{{ secure_asset('img/banner1.jpg') }}" alt="banner1">-->
  <img class="img-responsive img-rounded center-block" src="{{ asset('img/banner1.jpg') }}" alt="banner1">
</div>
<hr />

<div class="row">
    <h1 style="text-align: center;font-weight: bold;color: rgb(50,50,50);margin-bottom: 40px;">CE QU'ILS ONT DIT DE NOTRE SERVICE</h1>
  <div class="col-sm-4">
    <div class="thumbnail">
      <!--<img class="img-circle" width="100" src="{{ secure_asset('img/ahmed.jpg') }}" alt="ahmed">-->
      <img class="img-circle" width="100" src="{{ asset('img/ahmed.jpg') }}" alt="ahmed">
      <div class="caption" style="text-align: center;">
        <h3>AHMED</h3>
        <p style="font-size: 1.2em;">Service au niveau requis, bonne chance et bonne continuation</p>
        <p><a href="https://www.facebook.com/pg/zecoursier.officiel/reviews/?ref=page_internal" onclick="window.open(this.href); return false;" class="btn btn-social-icon btn-facebook" role="button"><span class="fa fa-facebook"></span></a></p>
      </div>
    </div>
  </div>

  <div class="col-sm-4">
    <div class="thumbnail">
      <!--<img class="img-circle" width="100" src="{{ secure_asset('img/khadija.jpg') }}" alt="khadija">-->
      <img class="img-circle" width="100" src="{{ asset('img/khadija.jpg') }}" alt="khadija">
      <div class="caption" style="text-align: center;">
        <h3>KHADIJA</h3>
        <p style="font-size: 1.2em;">Vous avez un bon service dont tout le monde a besoin</p>
        <p><a href="https://www.facebook.com/pg/zecoursier.officiel/reviews/?ref=page_internal" onclick="window.open(this.href); return false;" class="btn btn-social-icon btn-facebook" role="button"><span class="fa fa-facebook"></span></a></p>
      </div>
    </div>
  </div>

  <div class="col-sm-4">
    <div class="thumbnail">
      <!--<img class="img-circle" width="100" src="{{ secure_asset('img/said.jpg') }}" alt="said">-->
      <img class="img-circle" width="100" src="{{ asset('img/said.jpg') }}" alt="said">
      <div class="caption" style="text-align: center;">
        <h3>SAID</h3>
        <p style="font-size: 1.2em;">Bonne chance, notre merveilleuse équipe de ZeCOURSIER</p>
        <p><a href="https://www.facebook.com/pg/zecoursier.officiel/reviews/?ref=page_internal" onclick="window.open(this.href); return false;" class="btn btn-social-icon btn-facebook" role="button"><span class="fa fa-facebook"></span></a></p>
      </div>
    </div>
  </div>
</div>

<hr />

<div class="row">
    <h1 style="text-align: center;font-weight: bold;color: rgb(50,50,50);margin-bottom: 20px;">NOS CLIENTS</h1>
    <aside class="col-sm-4" style="margin-top: 20px">
      <!--<center><img class="img-responsive img-thumbnail" src="{{ secure_asset('img/client-1.jpg') }}" width="250" height="250" alt="Maakoul" data-toggle="tooltip" data-placement="top" title="شركة الحاج المعقول"></center>-->
      <center><img class="img-responsive img-thumbnail" src="{{ asset('img/client-1.jpg') }}" width="250" height="250" alt="Maakoul" data-toggle="tooltip" data-placement="top" title="شركة الحاج المعقول"></center>
    </aside>
    <aside class="col-sm-4" style="margin-top: 20px">
    <center><a href="https://hmizatmaroc.storeino.co/" onclick="window.open(this.href); return false;">
      <!--<img class="img-responsive img-thumbnail" src="{{ secure_asset('img/client-2.jpg') }}"  width="250" height="250" alt="Hmizat Maroc">-->
      <img class="img-responsive img-thumbnail" src="{{ asset('img/client-2.jpg') }}"  width="250" height="250" alt="Hmizat Maroc">
    </a></center>
    </aside>
    <aside class="col-sm-4" style="margin-top: 20px">
    <center><a href="https://www.facebook.com/HasniPromotion" onclick="window.open(this.href); return false;">
      <!--<img class="img-responsive img-thumbnail" src="{{ secure_asset('img/client-3.jpg') }}"  width="250" height="250" alt="Hasni">-->
      <img class="img-responsive img-thumbnail" src="{{ asset('img/client-3.jpg') }}"  width="250" height="250" alt="Hasni">
       </a></center>
   </aside>
   </div> 
   <br />
   <section class="row">
        <!--<img src="{{ secure_asset('img/banner2.jpg') }}" class="img-responsive center-block img-rounded" alt="banner2">-->
        <img src="{{ asset('img/banner2.jpg') }}" class="img-responsive img-rounded center-block" alt="banner2">
   </section>

@endsection