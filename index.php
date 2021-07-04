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
    <link rel='stylesheet' id='cherry-google-fonts-advolix-css'  href='//fonts.googleapis.com/css?family=Montserrat%3A300%2C700%2C800%2C600%7CRaleway%3A400%7COpen+Sans%3A600&#038;subset=latin&#038;ver=4.9.10' type='text/css' media='all'>
    <title>Ryszard Jaklewicz portfolio</title>
    <link rel='dns-prefetch' href='//fonts.googleapis.com' />
  </head>
  <body>
  <?php include 'header.php'; ?>
	<div class="aaa">
		<div class="cointeiner_tables_www">
			<div class="row">
			<?php
			$i=0;
			/**
			 * Dynamics make table grid bootstrap
			 * data  - array_data.php
			 */
			foreach ($www_i_programy_do_portfolio as $k => $v) {
				if($www_i_programy_do_portfolio[$k]['show']=="1"){
					if(!empty($www_i_programy_do_portfolio[$k]['name_image_big'])){
					$i++;
					?>
					<div class="col-sm">
						<p class="page_www_title"><?php print($www_i_programy_do_portfolio[$k]['tytul']); ?></p>
						<br>
						<img id="click_<?php print($www_i_programy_do_portfolio[$k]['name_image_big']); ?>" src="<?php print($www_i_programy_do_portfolio[$k]['link_grafiki']); ?>" border="0">
						<br>
						<p class="page_www_description"><?php print($www_i_programy_do_portfolio[$k]['opis']); ?></p>
					</div>
					<?php
						if ($i%2 == 0){ // brak reszty z dzielenia przez 2
						?>
						<div class="w-100"></div>
						<?php
						}
					}
				}
			}
			$name_image_big = str_replace("_jpg", ".jpg", $www_i_programy_do_portfolio[$k]['name_image_big']);
			?>
			</div>
		</div>
	</div>
<?php include 'footer.php'; ?>
    <!-- Bootstrap Bundle with Popper -->
    <!--
    <script src="bootstrap-5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    -->
    <!-- Separate Popper and Bootstrap JS -->
    <script src="bootstrap_5_0_2/js/popper_2_9_2.min.js"  crossorigin="anonymous"></script>
    <script src="bootstrap_5_0_2/js/bootstrap.min.js"  crossorigin="anonymous"></script>
  </body>
</html>