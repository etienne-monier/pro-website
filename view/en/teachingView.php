<?php require('config/config.php'); ?>


<!-- Start php recording --> 
<?php ob_start(); ?>

<h2>Teaching</h2>
        <p>Since 2016, Etienne has a teaching job in the electonics and signal processing department of INP-ENSEEIHT (Toulouse). For instance, he teaches some of the following courses
        </p>

        <ul>
          <li>Complex variables - complex integration</li>
          <li>Digital signal processing</li>
          <li>Analog electronics projects - PLL</li>
        </ul>



<?php $content = ob_get_clean(); ?>
<!-- Stop php recording -->

<?php require('template_en.php'); ?>