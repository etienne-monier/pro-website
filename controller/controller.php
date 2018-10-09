<?php

require('model/model.php');

function indexPage()
{
    require('view/en/indexView.php');
}
function publicationsPage()
{

    $SIJreq=getSubmitedInternationalJournal();
	$IJreq=getInternationalJournal();
	$ICreq=getInternationalConference();
	$NCreq=getNationalConference();

    require('view/en/publicationView.php');
}
function researchPage()
{
    require('view/en/researchView.php');
}
function teachingPage()
{
    require('view/en/teachingView.php');
}
function cvPage()
{
    require('view/en/curriculumView.php');
}
function findmePage()
{
    require('view/en/findmeView.php');
}


function notFound()
{
    require('view/en/notFoundView.php');
}