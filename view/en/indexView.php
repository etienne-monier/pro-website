<?php require('config/config.php'); ?>

<!-- Start php recording --> 
<?php ob_start(); ?>

 <img
    src="<?= $avatar_img ?>"
    class="avatar"
    alt="<?= $author ?>"
    srcset="<?php echo $avatar_img ." 1x , " . $avatar_img . "2x"?>"
  >

<h1 id="aboutme" class="page-title hr">Welcome</h1>
  <p>I am a Ph.D. student since September, 2016 in the city of Toulouse, France. I work under the supervision of <a href="http://oberlin.perso.enseeiht.fr/">Thomas Oberlin</a> and <a href="http://dobigeon.perso.enseeiht.fr/index.html">Nicolas Dobigeon</a>, within the <a href="http://sc.enseeiht.fr/">SC</a> group of the <a href="https://www.irit.fr/">IRIT</a> laboratory.
  </p>

  <p>Prior to that, I graduated from <a href="http://www.ens-cachan.fr/">Ecole Normale Supérieur de Cachan</a> (renamed Ecole Normale Supérieur Paris-Saclay in September 2016). I hold two M.Sc. degrees : one in teaching and another in signal processing.</p>

  <p>My research interests are in new methods and algorithms to solve challenging acquisition problems encountered in the acquisition of multi-band microscopy images. In particular, I am interested in acquiring high-SNR Electron Energy Loss Spectroscopy (EELS) images with extremely low beam energy to prevent destruction of sensitive microscopy samples. My goal is to provide to the EELS community precise algorithms to detect rapidly the presence of a chemical element inside a sample to reduce irradiance as much as possible. Such problem requires <b>signal processing</b> methods, such as <b>convex optimization</b> and <b>proximal splitting methods</b>. </p>

  <p class="message"><strong><font color="black">News/Events</strong>:</font><br>
    <span style="font-size: 0.9em">
    <b>September 23-26, 2018</b> Attending <a href="http://www.ieee-whispers.com/2017/11/23/whispers-2018/">WHISPERS 2018 conference</a> (Amsterdam, The Netherlands).<br>
    <b>June 11-14, 2018</b> Attending <a href="https://jeels2018.sciencesconf.org/">JEELS 2018 conference</a> (Porquerolles, France).<br>
    </span>
  <p>


<div style="text-align: center; margin-top: 50px">
<a href="https://www.irit.fr/" class="no-mark-external" style="display: inline-block;margin-right: 30px" target="_blank"><img alt="IRITlogo" src="public/img/Logo_IRIT.png" style="height: 100px;width: auto;" /></a>
<a href="http://www.univ-toulouse.fr/" class="no-mark-external" style="display: inline-block; margin-right: 30px" target="_blank"> <img alt="Toulouselogo" src="public/img/Logo_univToulouse.jpg" style="height: 100px;width: auto;" /></a>
<a href="http://www.enseeiht.fr/fr/index.html" class="no-mark-external" style="display: inline-block;" target="_blank"> <img alt="ENSEEIHTlogo" src="public/img/Logo_ENSEEIHT.png" style="height: 100px;width: auto; " /></a>

</div>


<?php $content = ob_get_clean(); ?>
<!-- Stop php recording -->

<?php require('template_en.php'); ?>