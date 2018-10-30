<?php 

//controller acccueil du site//
require('model/model.php');

function listChapters()
{
	 $chapters = getChapters();

    require('view/homeBlog.php');
}

function viewchapter()
{
	 $chapter = getChapter($_GET['id']);
    require('view/chapterView.php');
  
}


/*$chapter = getChapter();
require ('view/homeBlog.php');*/



 ?>