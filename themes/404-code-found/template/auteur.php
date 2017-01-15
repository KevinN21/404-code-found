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
  <section class="lastart profil col m2 s12">
    <figure class="photoprofil col m12 s12">
      <img src="../assets/img/carousel1.jpg" alt="photo profil de l'auteur" class="profilphoto">
      <div class="row">
        <p class="contact">Nom Prénom</p>
        <p class="contact">Email</p>
      </div>
      <div class="row socialm">
          <img class="col m6" src="../assets/img/facebook.svg" alt="fb link">
          <img class="col m6" src="../assets/img/github.svg" alt="github link">
      </div>
      <div class="cv row">
        <img src="../assets/img/carousel1.jpg" alt="" class="col m11 push-m1 s11">
        <button id="cvBtn" class="btn waves-effect waves-light pink accent-3 col m10 push-m2" type="submit" name="action"><i class="material-icons center">cloud</i></button>
      </div>



    </figure>
  </section>
  <section class="lastart col m5 s12">
        <div class="row">
          <h4>BIOGRAPHIE</h4>
        </div>
        <div class="row">
          <p>Donec tristique feugiat mollis. Curabitur ultrices quam nec vehicula maximus. Nullam pharetra ac felis eu facilisis. Sed in fringilla dui. Integer bibendum luctus sem, at euismod diam dictum ut. Nam congue, mauris a maximus suscipit, nisl massa tincidunt augue, ac suscipit turpis ligula in lacus. Donec convallis lacus non diam dignissim tempus. Maecenas mattis ex ut ligula volutpat, sit amet bibendum libero cursus. Mauris eu leo rutrum, fringilla augue at, convallis risus. Pellentesque vitae sem et tellus convallis faucibus nec vel nunc. Nulla ac iaculis leo. Mauris vehicula tortor vitae laoreet gravida. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ut dignissim, libero ultrices lacinia mollis, velit turpis fringilla libero, at tempus ipsum ipsum eu neque. Integer sed faucibus erat.</p>
        </div>
        <div class="row">
          <h4>CITATION</h4>
          <img src="../assets/img/leftquote.svg" alt="left quote">
          <p class="citation">Velit turpis fringilla libero, Velit turpis fringilla libero, at tempus ipsum ipsum eu neque. Integer sed faucibus erat.</p>
          <img src="../assets/img/rightquote.svg" alt="left quote" class="right">
        </div>
        <div class="row">
<?php
require_once('listeArticle.php');
?>

        </div>
  </section>

<?php
require_once('listeAuteur.php');
?>
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
