<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--<link rel="shortcut icon" type="image/x-icon" href="{{ secure_asset('img/logo.jpg') }}">
  <link rel="stylesheet" href="{{ secure_asset('assets/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ secure_asset('assets/css/bootstrap-social.css') }}">
  <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <script src="{{ secure_asset('assets/js/jquery.min.js') }}"></script>
  <script src="{{ secure_asset('assets/js/bootstrap.min.js') }}"></script>-->
  <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/logo.jpg') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-social.css') }}">
  <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
  <title>ZeCOURSIER</title>
  <style type="text/css">

/*  @font-face{ 
    font-family:'FontAwesome';
    src:url({{public_path() . '/assets/fonts/FontAwesome.otf'}});
    } */
    /*#footer_description,#footer_rejoigner, #footer_info {
       border-right: 1px solid white;
    }*/
       #footer-upper {
      background-color: rgb(50,50,50);
      border-top-right-radius: 5px;
      border-top-left-radius: 5px;
      padding-top: 20px;
    }
    #footer-lower {
      background-color: rgb(30,30,30);
      padding-top: 20px;
      padding-bottom: 7px;
    }
    #footer_lien p a, #footer_rejoigner p a {
      color: rgba(255,255,255,0.5);
      text-decoration: none;
    }
    #footer_lien p a:hover, #footer_rejoigner p a:hover {
      color: yellow;
    }
    #footer_social_media a {
      text-decoration: none;
      color: white;
    }
    #footer_social_media a span:hover {
      color: yellow;
    }
    #b {
      float: right;
    }
    body {
      font-family:Calibri;
    }
    nav {
      font-size: 1.2em;
    }

.btn-social-icon span:hover {
    opacity: 0.5;
  }
  center a:hover {
    opacity: 0.5;
  }
      /*dimension de pc*/
    @media (min-width: 992px) {
      #footer_lien {
      border-left: 1px solid white;
      border-right: 1px solid white;
      }
      #footer_info {
      border-left: 1px solid white;
      }
    }
  /* dimension tablette*/
   @media (min-width: 768px) and (max-width: 992px) {
          #footer_rejoigner {
            margin-top: 60px;
          }
          #footer_info {
            margin-top: -60px;
            border-right: 1px solid white;
          }
          #footer_lien {
          border-left: 1px solid white;
          }
          #description {
          padding-right: 20px;
        }
        }
    /*dimension portable*/
   @media (max-width: 768px)  {
    footer {
      text-align: center;
        }
    #footer_rejoigner, #footer_info {
      margin-top: 40px;
        }
        #description {
          padding-right: 80px;
          padding-left: 80px;
        }
        #footer_lien {
          margin-top: 80px;
        }
   }
  </style>
</head>
<body>
<div class="container">
    <header>
   <nav class="navbar navbar-default">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><img width="30" style="margin-top: -5px;" src="{{ asset('img/logo.jpg') }}"></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li id="accueil"><a href="{{ url('/') }}">ACCUEIL<span class="sr-only">(current)</span></a></li>
        <li id="propos"><a href="{{ url('/apropos') }}">À PROPOS</a></li>
        <li id="service"><a href="{{ url('/service') }}">NOS SERVICES</a></li>
        <li id="contact"><a href="{{ url('/contact') }}">CONTACTEZ-NOUS</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
</nav>
</header>

@yield('content') 

<hr />
<footer>
  <div id="footer-upper" class="row">
    <div class="col-md-4 col-sm-8" id="footer_description">
    
    <!--<img style="opacity: 0.7;" src="{{ secure_asset('img/logo.jpg') }}" height="40" height="40" class="center-block">-->
    <img src="{{ asset('img/Fouter-Logo.png') }}" height="60" alt="logoZeCOURSIER" style="margin-bottom: 5px">
    <p id="description" style="color: rgba(255,255,255,0.5);">Cher e-commerial, ZeCOURSIER est pour vous, un choix qui vous met en oeuvre une certaine rapidité, souplesse et honnêteté de vos demandes et vos stocks</p>
     <p id="footer_social_media" style="text-align: center;" class="col-xs-12">
    <a href="https://www.facebook.com/zecoursier.officiel/" onclick="window.open(this.href); return false;"><span class="fa fa-facebook"></span></a>
      <a href="https://www.youtube.com/channel/UCiqsOSIEBjQv9kSAI_NwN8Q" onclick="window.open(this.href); return false;"><span class="fa fa-youtube" style="margin-left: 2em"></span></a>
     </p>
    </div>
    <div class="col-md-2 col-sm-4" id="footer_lien">
    <p style="font-weight: bold;color: rgba(255,255,255,0.7);">LIENS</p>
    <p><a href="{{ url('/') }}">Accueil</a><br />
    <a href="{{ url('/apropos') }}">À propos</a><br />
    <a href="{{ url('/service') }}">Nos Services</a><br />
    <a href="{{ url('/contact') }}">Contactez-nous</a></p>
    </div>
    <div class="col-md-2 col-sm-4" id="footer_rejoigner">
    <p style="font-weight: bold;color: rgba(255,255,255,0.7);">REJOIGNEZ NOUS</p>
    <p><a href="#">Créer un compte</a></p>
    </div>
    <div class="col-md-4 col-sm-8" id="footer_info">
    <p style="font-weight:bold;color: rgba(255,255,255,0.7);">INFORMATION</p>
    <p style="color: rgba(255,255,255,0.5);">3 rue Oslo boulevard Bayrouth Zohor 1 Fès<br />
    ICE: 002335495000074<br />
    Tel: 0622-656117 / Whatsapp: 0688-163484<br />
    Email: zecoursier@gmail.com</p>
    </div>  
  </div>

  <div id="footer-lower" class="row" style="text-align: center;color: rgba(255,255,255,0.5);">
    <p>Tous droits réservés par ZeCOURSIER 2019</p>
  </div>
</footer>
</div>
</body>
</html>
