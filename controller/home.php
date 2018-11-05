<?php 

//frontcontroller acccueil du site//
require('model/model.php');

function listChapters()
{
	 $chapters = getChapters();
    require(VIEW.'homeBlog.php');
}

function viewchapter()
{
	 $chapter = getChapter($_GET['id']);
    require(VIEW.'chapterView.php');
  
}




