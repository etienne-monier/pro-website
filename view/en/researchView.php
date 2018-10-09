<?php require('config/config.php'); ?>


<!-- Start php recording --> 
<?php ob_start(); ?>

<h2>Research activities</h2>
        <h3>Research interests</h3>
        <p>Signal processing, statistics<br/>
            Compressed sensing, inpainting<br/>
            Hyperspectral imaging, acquisition, subspace learning.
        </p>
  
  <h3>PhD</h3>
        <p>2016-...<br/>
            IRIT / INP - ENSEEIHT<br/>
            Supervisors : Nicolas DOBIGEON and Thomas OBERLIN.
        </p>



        <h3 id="Collaborations">Collaborations (past and current)</h3>
        <ul>
         <li>  <a href="https://www.stem.lps.u-psud.fr/users/brun" >Nathalie Brun</a> (University of Paris-Sud, LPS, France).</li>   
         <li>  <a href="http://dobigeon.perso.enseeiht.fr" >Nicolas Dobigeon</a> (University of Toulouse, IRIT, France).</li>
         <li>  <a href="http://oberlin.perso.enseeiht.fr/" >Thomas Oberlin</a> (University of Toulouse, IRIT, France).</li>
         <li>  <a href="http://gilleschardon.fr/" >Gilles Chardon</a> (L2S, Supélec, Gif-Sur-Yvette, France).</li>
         <li>  <a href="http://www.satie.ens-cachan.fr/version-francaise/les-membres/chercheurs-et-enseignants-chercheurs/chercheurs-pole-siame/barbot-jean-pierre-212464.kjsp?RH=1371131439750" >Jean-Pierre BARBOT</a> (ENS of Cachan, SATIE, France).</li>
         <li>  Fabrice LABEAU (McGill University, SYTACOM, Montréal, Canada).</li>
         <li>  <a href="http://www.l2s.centralesupelec.fr/perso/Michel.KIEFFER" >Michel KIEFFER</a> (Supélec, L2S, Gif-Sur-Yvette, France).</li>
         </ul>



<?php $content = ob_get_clean(); ?>
<!-- Stop php recording -->

<?php require('template_en.php'); ?>