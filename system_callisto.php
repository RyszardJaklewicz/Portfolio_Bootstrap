<!--
Author:Ryszard Jaklewicz 2021
-->
<?php
include 'array_data.php';

//print"<PRE>";
//print_r($www_i_programy_do_portfolio);
//print"</PRE>";
?>
<!doctype html>
<html lang="pl">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <!-- Responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="bootstrap_5_0_2/bootstrap_css/bootstrap.min.css.css" rel="stylesheet" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet" crossorigin="anonymous">
    <link rel='stylesheet' href='css/style_callisto.css'>
    <link rel='stylesheet' id='cherry-google-fonts-advolix-css'  href='//fonts.googleapis.com/css?family=Montserrat%3A300%2C700%2C800%2C600%7CRaleway%3A400%7COpen+Sans%3A600&#038;subset=latin&#038;ver=4.9.10' type='text/css' media='all'>
    <title>Ryszard Jaklewicz portfolio</title>
    <link rel='dns-prefetch' href='//fonts.googleapis.com' />
  </head>
  <body>
  <?php include 'header.php'; ?>
  <div class="aaa">
  <div class="cointeiner_tables_www">

  <!-- start grid bootstrap -->
  <div class="row">
  <?php


foreach ($opis_callisto_do_portfolio as $k => $v) {
if($opis_callisto_do_portfolio[$k]['show']=="1"){
?>

<div class="col-sm">
    <div class="div_nadrzedny"  style="display:block;">
        <span class="tytul_nazwa_wykonanego_serwisu">
          <div class="div_tytul_nazwa_wykonanego_serwisu">
            <?php  echo "<strong>".$opis_callisto_do_portfolio[$k]['tytul']."</strong><br />"; ?>
          </div>
        </span>
        <?php
        if($opis_callisto_do_portfolio[$k]['item']==1){
        ?>
        <p></p>
        <div class="opis_pod_tytulem">
        <a href="system_callisto_procesowanie_spraw.php">
        <img class="odstep_lewo" src="<?php print($opis_callisto_do_portfolio[$k]['link_punkt_trojkatny']); ?>" style="border: 0;margin-right:5px;margin-left:15px;" width="10" height="10" border="0">
        Procesowanie spraw kredytowych
        </a>
        <p></p>
        <a href="system_callisto_zarzadzanie_placowkami.php">
        <img class="odstep_lewo" src="<?php print($opis_callisto_do_portfolio[$k]['link_punkt_trojkatny']); ?>" style="border: 0;margin-right:5px;margin-left:15px;" width="10" height="10" border="0">
        Zarządzanie placówkami
        </a>
        </div>
      <?php	
      }//END if($opis_callisto_do_portfolio[$k]['item']==1){
      ?>
      <p></p>
      <!-- Opis rozbudowany nad grafika w div left -->
      <div class="opis_pod_tytulem" style="margin-left:15px;border:0px solid blue;">
      <?php
          $opis_callisto_do_portfolio[$k]['tytul_opisu'];
          $opis_callisto_do_portfolio[$k]['link_opisu'];
          $opis_callisto_do_portfolio[$k]['opis'];
          
          /**  Istnieje tytul opisu oraz link opisu */
          if( !empty($opis_callisto_do_portfolio[$k]['link_opisu']) && !empty($opis_callisto_do_portfolio[$k]['tytul_opisu'])  ){
            ?><a href="<?php print($opis_callisto_do_portfolio[$k]['link_opisu']); ?>">
            <img src="<?php print($opis_callisto_do_portfolio[$k]['link_punkt_trojkatny']); ?>" style="border: 0;margin-right:5px;" width="10" height="10" border="0">
            <?php print($opis_callisto_do_portfolio[$k]['tytul_opisu']); ?>
            </a>
            <br><br>
            <?php
          }
          /** Istnieje tytul opisu bez linku*/
          if( empty($opis_callisto_do_portfolio[$k]['link_opisu']) && !empty($opis_callisto_do_portfolio[$k]['tytul_opisu'])  ){
            ?><img src="<?php print($opis_callisto_do_portfolio[$k]['link_punkt_trojkatny']); ?>" style="border: 0;margin-right:5px;" width="10" height="10" border="0"><?php
            print("<img src=''>".$opis_callisto_do_portfolio[$k]['tytul_opisu']."<br><br>");
            
          }
          print($opis_callisto_do_portfolio[$k]['opis']); ?>
          <p></p>
          <img  src="<?php print($opis_callisto_do_portfolio[$k]['link_grafiki']); ?>" border="0" class="image_callisto_all_article">
      </div><!-- END <div class="opis_pod_tytulem" style="margin-left:15px;border:1px solid blue;"> -->

</div><!-- END <div class="div_nadrzedny"  style="display:block;">-->
</div><!-- END <div class="col-sm"> -->
<div class="w-100"></div><!-- END row grid bootstrap -->
<?php
}
}
?>
</div><!-- END <div class="row"> -->
</div><!-- END <div class="cointeiner_tables_www"> -->
</div><!-- END <div class="aaa"> -->
<?php include 'footer.php'; ?>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <!-- Uzywamy oddzielnych plikow bootstrap i popper -->
    <!--
    <script src="bootstrap-5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    -->
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script src="bootstrap_5_0_2/js/popper_2_9_2.min.js"  crossorigin="anonymous"></script>
    <script src="bootstrap_5_0_2/js/bootstrap.min.js"  crossorigin="anonymous"></script>
  </body>
</html>
