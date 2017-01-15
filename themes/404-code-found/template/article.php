<?php
  require_once('header.php');
 ?>

 <link rel="stylesheet" href="../assets/css/style.css">
 <!-- Compiled and minified CSS-->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css">


 <!--Import Google Icon Font-->
 <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
 <!--Import materialize.css-->

 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 <!--Let browser know website is optimized for mobile-->

 <main class="row">
   <section class="outborder col m8 s12">
     <article class="inborder col m12 s12">
       <img class="col m3 s6" src="../assets/img/carousel1.jpg" alt="photo">
       <h2 class="col m9 s12">TITRE DE L'ARTICLE</h2>
       <div class="row col m9 s12 ">
         <span class="nameauthor">Prénom N. ||</span>
         <span class="dateArt">Date ||</span>
         <span class="cat">Catégories</span>
         <span class="chat" style="text-transform: lowercase;"><i class="material-icons center">chat_bubble_outline</i>4 news</span>

       </div>
       <div class="row">
         <p class="post col s12">
           Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ornare, erat id dictum suscipit, odio felis rutrum velit, condimentum porttitor risus neque eu massa. Cras nisi risus, pellentesque eget finibus ac, vestibulum in lectus. Donec in nisl sem. Donec eget eleifend eros, sed sollicitudin leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam venenatis semper augue, sed vulputate tellus condimentum sit amet. Phasellus nibh neque, convallis sed condimentum eget, ullamcorper id mauris. Ut lacus nisi, tempus at tempor vel, iaculis at ex. Duis semper sem elit, in condimentum nisl egestas tempus.
           Integer at orci viverra, placerat augue et, tincidunt elit. Nulla ac maximus urna. Nam sagittis erat ut erat lobortis pretium nec ut neque. Donec eget cursus orci, gravida vehicula magna. Aenean tincidunt fringilla arcu a iaculis. Duis pulvinar ipsum erat, vitae facilisis elit feugiat ut. Donec placerat tellus eu nisi pellentesque, quis porta tortor scelerisque. Aenean blandit non libero id condimentum. Nunc magna lectus, condimentum eu eros sed, fermentum aliquet erat. Nullam facilisis feugiat mi, ac efficitur ante eleifend sed. Pellentesque vestibulum lacus eu ligula egestas semper. Phasellus lacinia euismod libero, ultrices feugiat mi accumsan non. In rhoncus semper arcu, in sagittis turpis lacinia quis. Ut nibh ex, dictum facilisis feugiat vel, fermentum a odio.
         </p>
       </div>
       <div class="row">
         <p class="tag col m4">TAGS: mot-clé || mot-clé || mot-clé || mot-clé || mot-clé || mot-clé</p>
         <button id="btnCom"  class="btn waves-effect waves-light col m2 push-m2 z-depth-0 pink accent-2" type="submit" name="action">Commenter<i class="material-icons right">textsms</i></button>
         <button id="btnOg" type="btn waves-effect waves-light col m3 push-m1 z-depth-0 pink " type="submit">
             <div class="fb-share-button" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button_count" data-size="large" data-mobile-iframe="false"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse">Partager</a></div>
          </button>
        </div>
           <!-- button share -->
           <div id="fb-root"></div>
           <script>
           (function(d, s, id) {
             var js, fjs = d.getElementsByTagName(s)[0];
             if (d.getElementById(id)) return;
             js = d.createElement(s); js.id = id;
             js.src = "//connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v2.8";
             fjs.parentNode.insertBefore(js, fjs);
           }(document, 'script', 'facebook-jssdk'));
           </script>

 <?php
 require_once('commentaire.php');
 ?>


                 </article>
               </section>

<?php
require_once('listeAuteur.php');
require_once('listeArticle.php');
?>

           <div class="row right">
              <a class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons">add</i></a>
              <a href="#top" class="btn-floating btn-large waves-effect waves-light grey"><i class="material-icons">navigation</i></a>
          </div>
        </section>
 </main>
 <footer>
 <div class="footer row">
   <div id="logoPartenaire" class="footer col m8 s8 center valign-wrapper">
     <nav class="valign">
       <a href="#"><img src="../assets/img/logo.svg" alt="Logo 404 Code Found"></a>
       <a href="#"><img src="../assets/img/acs.svg" alt="Logo ACS"></a>
       <a href="#"><img src="../assets/img/ecoledunum.svg" alt="Logo Grande Ecole du Numérique"></a>
       <a href="#"><img src="../assets/img/onlineforma.svg" alt="Logo Onlineformapro"></a>
     </nav>
   </div>
   <nav id="menuFooter" class="footer col m4 s4 center valign-wrapper">
     <ul class="valign">
       <li><a href="index.html">Accueil</a></li>
       <li><a class="grey-text text-lighten-3" href="about.html">À propos</a></li>
       <li><a class="grey-text text-lighten-3" href="contact.html">Contact</a></li>
     </ul>
 </nav>
 </div>

 <div class="footer-copyright">
   <p class="container center">© 2017 Promo 404 Code Found Access Code School - Dreamteam Houda Kevin</p>
 </div>
 </footer>

 <!--Import jQuery before materialize.js-->
 <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>

 <!-- Compiled and minified JavaScript -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>
 <script src="../assets/scripts/javascript.js" charset="utf-8"></script>

 </body>
 </html>
