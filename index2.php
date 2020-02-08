<?php
require "php/config.php";
require "admin/template/header.php";

?>


<div id="container">

  <div class="container_header">
          <br>
    <h1 ;>  Administratorski profil</h1>
    <br>
    </div>
  <div class="col-sm-10">

            <div class="col-sm-5">

    <img src="img/AdminPanel.png">
    <br>
          </div>
            <div class="col-sm-5" style="padding-bottom:330px">

            <?php
            if (empty($_SESSION['username'])) {
echo"<h3>Dobrodošli na administratorski profil! Prijavite se da biste upravljali sajtom.</h3>";

}

else {

echo"<h3>Zdravo, " .$_SESSION['username'] . "! Izaberite neku od opcija za ažuriranje sadržaja.</h3>";

}
?>

        </div>

  </div>



</div>



<?php

require "admin/template/footer.php"; ?>
