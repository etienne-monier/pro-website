<?php

ini_set('display_errors', 1);
error_reporting(E_ALL|E_STRICT);

require('controller/controller.php');

if (isset($_GET['page'])) {
    if ($_GET['page'] == 'index') {
        indexPage();
    }
    elseif ($_GET['page'] == 'publications') {
        publicationsPage();
    }
    elseif ($_GET['page'] == 'research') {
        researchPage();
    }
    elseif ($_GET['page'] == 'teaching') {
        teachingPage();
    }
    elseif ($_GET['page'] == 'curriculum') {
        cvPage();
    }
    elseif ($_GET['page'] == 'findme') {
        findmePage();
    }
    else{
        notFound();
    }
}
else {
    indexPage();
}