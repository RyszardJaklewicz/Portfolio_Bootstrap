<!--
Author:Ryszard Jaklewicz 2021
-->
<?php
include 'array_data.php';
//print"<PRE>";
//print_r($example_data);
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


foreach ($example_data as $k => $v) {
if($example_data[$k]['show']=="1"){
?>

<div class="col-sm">
	<?php if(1==1){ ?>
    <div class="div_nadrzedny"  style="display:block;">
        <span class="tytul_nazwa_wykonanego_serwisu">
          <div class="div_tytul_nazwa_wykonanego_serwisu">
            <?php  echo "<strong>".$example_data[$k]['tytul']."</strong><br />"; ?>
          </div>
        </span>
		<p></p>
		<!-- Opis rozbudowany nad grafika w div left -->
		<div class="opis_pod_tytulem" style="margin-left:15px;border:0px solid blue;">
		<?php
       //$example_data[$k]['tytul_opisu'];
       //$example_data[$k]['link_opisu'];
       //$example_data[$k]['opis'];
		print($example_data[$k]['opis']); ?>
        <p></p>
		</div><!-- END <div class="opis_pod_tytulem" style="margin-left:15px;border:1px solid blue;"> -->
	</div><!-- END <div class="div_nadrzedny"  style="display:block;">-->
	<?php } ?>
</div><!-- END <div class="col-sm"> -->
<div class="w-100"></div><!-- END row grid bootstrap -->
<?php
}//END if($example_data[$k]['show']=="1"){
}//END foreach ($example_data as $k => $v) {
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
