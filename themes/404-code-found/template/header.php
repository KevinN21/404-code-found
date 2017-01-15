<!DOCTYPE html>
<html>
  <head>

    <title>404 Code Found Blog | Access Code School Wordpress</title>

    <meta charset="utf-8">
    <meta name="authors" content="HoudaB KevinN">
    <meta name="keywords" content="Blog Wordpress Access Code School Promo 404 Code Found">
    <meta name="description" content="Official blog of the 2nd promo '404-Code-Found' from Access Code School in Besancon, France.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <link rel="stylesheet" href="themes/404-code-found/assets/css/style.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

    <!-- Compiled and minified CSS-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css">


    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--Let browser know website is optimized for mobile-->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script>

       $(document).ready(function()
       {


           $.get('index.php')

                 .done(function(data) {


                     console.log(data);
                 })



                 .fail(function(data) {
                     alert('Error: ' + data);
                 });


             return false;

           });

           });
    </script>

  </head>
  <body>
    <header>
        <nav class="navbar-fixed nav-extended z-depth-0 ">
          <div class="nav-wrapper">
            <div class="row menu">
            <div class="row">
              <a href="index.html" class="brand-logo center">
                <img src="themes/404-code-found/assets/img/logo.svg"></img>
              </a>
            </div>
            <a href="#" data-activates="mobile-demo" class="button-collapse">
              <i class="material-icons">menu</i>
            </a>
            <ul id="nav-mobile" class="left hide-on-med-and-down">
              <li class=""><a href="index.html"><i class="material-icons">home</i></a>
              <li class="orbar">||</li>
              <li><a href="">À propos</a></li>
              <li class="orbar">||</li>
              <li><a href="">Contact</a></li>
            </ul>
            <ul id="social" class="right hide-on-med-and-down">
              <li><a href="http://facebook.com"><img src="themes/404-code-found/assets/img/facebook.svg"></img></a></li>
              <li><a href="http://twitter.com"><img src="themes/404-code-found/assets/img/twitter.svg"></img></a></li>
            </ul>
            <ul class="side-nav" id="mobile-demo">
              <li><a href="">A propos</a></li>
              <li><a href="">Contact</a></li>
              <li><a href="http://facebook.com"><img src="themes/404-code-found/assets/img/facebook.svg"></img></a></li>
              <li><a href="http://twitter.com"><img src="themes/404-code-found/assets/img/twitter.svg"></img></a></li>
            </ul>
          </div>
          </div>
        </nav>

        <nav id="categorie" class="row center">
          <ul id="navcat" class="offset-m2 col m8 tabs">
            <li class="tab"><a class="categorie" href="#">Catégorie 1</a></li>
            <li class="tab"><a class="categorie" href="#">Catégorie 2</a></li>
            <li class="tab"><a class="categorie" href="#">Catégorie 3</a></li>
            <li class="tab"><a class="categorie" href="#">Catégorie 4</a></li>
            <li class="tab"><a class="categorie" href="#">Catégorie 5</a></li>
            <li class="tab"><a class="categorie" href="#">Catégorie 6</a></li>
            <li class="tab"><a class="categorie" href="#">Catégorie 7</a></li>
          </ul>
        </nav>
    </header>
