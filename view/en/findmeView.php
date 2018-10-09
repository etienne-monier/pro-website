<?php require('config/config.php'); ?>

<!-- Start php recording --> 
<?php ob_start(); ?>

<h1 id="find-me">Find me</h1>

<h3 id="on-the-web">On the Web</h3>

<div style="width: 100%;  display: table; vertical-align:top;">
  <div style="display: table-row"></div>
  <div style="float: left; display: table-cell; vertical-align: top;">

<!-- Social bar -->
<?php
DislaySocial($social_array)
?>

<!-- google scholar 
<a href="https://scholar.google.fr/citations?user=R5dfDTAAAAAJ&hl=en" class="no-mark-external">
<i class="ai ai-2x ai-google-scholar-square" style="color:#0076ae; margin-right: 5px;" aria-hidden="true"></i></a>
-->

<!-- Research Gate 
<a href="https://www.researchgate.net/profile/Maxime_Vono" class="no-mark-external">
<i class="ai ai-2x ai-researchgate-square" style="color:#00a578;" aria-hidden="true"></i></a>
-->

<!-- Address -->
  <h3>Mailing address</h3>
  <p>INP - ENSEEIHT Toulouse<br />
     2, rue Charles Camichel<br />
     Bureau F207<br />
     31000 Toulouse<br />
     France 
  </p>
  <br />
  <h3>Phone</h3>
  <p>+33 5 34 32 27 11
  </p>
  <br />

  </div>
  <div style=" display: table-cell; vertical-align: top;">  
    <iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.openstreetmap.org/export/embed.html?bbox=1.4507853984832766%2C43.59960030501525%2C1.4597976207733157%2C43.6046114707667&amp;layer=mapnik&amp;marker=43.60209944545912%2C1.4552856842055917" style="border: 1px solid black"></iframe><br/><small><a href="https://www.openstreetmap.org/?mlat=43.60210&amp;mlon=1.45529#map=17/43.60211/1.45529" target="_blank">View larger map</a></small>
    </iframe>
  </div>
 </div>




<?php $content = ob_get_clean(); ?>
<!-- Stop php recording -->

<?php require('template_en.php'); ?>