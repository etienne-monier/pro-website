<?php require('config/config.php'); 


function DisplayRequest($title,$req){

  $flag=True;
  while ($data = $req->fetch()){

    if ($flag){
      ?>
        <h2 class="bibliography"><?= $title ?></h2>
        <ol class="bibliography"  type="1" reversed>
      <?php
      $flag = False;
    }

    ?>
    <li>
      <span id=<?= $data['IDtext']?>><?= $data['Citation']?></span>
      <span id=<?php echo $data['IDtext'] . "_materials";?>>
        <ul class="bib" style="margin-left: 0px">

          <?php 

            // Abstract
            if ($data['Abstract']!=null) {
              echo '<li><a data-target="#' . $data['IDtext'] . '_abstract" data-toggle="collapse" href="#' . $data['IDtext'] . '" onclick="return false">abstract</a></li>';
            }
            if ($data['BibTex']!=null) {
              echo '<li><a data-target="#' . $data['IDtext'] . '_bibtex" data-toggle="collapse" href="#' . $data['IDtext'] . '" onclick=\'_gaq.push(["_trackEvent", "View", "Bibliography", "' . $data['IDtext'] . '"]); return false;\'>bib</a></li>';
            }
            if ($data['Arxiv']!=null) {
              echo '<li><a href="' . $data['Arxiv'] . '" target="_blank">arxiv</a></li>';
            }
            if ($data['Pdf']!=null) {
              echo '<li><a href="' . $data['Pdf'] . '" target="_blank">pdf</a></li>';
            }
            if ($data['Web']!=null) {
              echo '<li><a href="' . $data['Web'] . '" target="_blank">web</a></li>';
            }
          
        echo '</ul>';
        
        if ($data['Abstract']!=null) {
          echo '<p id="'. $data['IDtext'] . '_abstract" class="abs collapse">' . $data['Abstract'] . '</p>';
        }
        if ($data['BibTex']!=null) {
          echo '<pre id="'. $data['IDtext'] . '_bibtex" class="prebib collapse">' . $data['BibTex'] . '</pre>';
        }

        ?>        
    </span>
  </li>

  <?php

  }

  if ($flag==False){
    echo "</ol>";
  }

}

// Start php recording 
ob_start(); ?>


<h1 id="publications">Publications & Talks</h1>

<?php
//------------------------------------------
DisplayRequest("Submitted/pipelined journal papers",$SIJreq);

//------------------------------------------
DisplayRequest("International journal papers",$IJreq);

//------------------------------------------
DisplayRequest("International conference papers",$ICreq);

//------------------------------------------
DisplayRequest("National conference papers",$NCreq);


$content = ob_get_clean();
//-- Stop php recording --

require('template_en.php');
