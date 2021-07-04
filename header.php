<?php 
/**
 * Author:Ryszard Jaklewicz
 * portfolio Ryszard Jaklewicz
 * get data array
 */
?>
<div id="main_images_header">
Ryszard Jaklewicz<p></p>
Portfolio programisty
</div>
<!-- Menu Bootstrap-->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  
	<div class="container-fluid">
	<a href="index.php">Home</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav">
				<li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
				<?php
				foreach ($menu_portfolio as $k => $v) {
					if($menu_portfolio[$k]['show']=="1"){
					?>
					<li class="nav-item">
						<a class="nav-link" href="<?php print($menu_portfolio[$k]['link_pozycji_menu']); ?>"><?php print($menu_portfolio[$k]['tytul_pozycji_menu']); ?></a>
					</li>
					<?php
				}
			}
			?>
			</ul>
		</div>
	</div>
</nav>
<!-- END menu bootstrap -->

<!--
Bootstrap menu two lewel
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown link
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
-->
<p></p>