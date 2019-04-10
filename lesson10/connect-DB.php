<?php

$connection = new PDO('mysql:host = localhost; dbname = profile; charset = utf8', 'root', '');

$aboutData = $connection->query("SELECT * FROM profile.about")
        ->fetch(PDO::FETCH_ASSOC);
$educData = $connection->query("SELECT * FROM profile.education");
$langData = $connection->query("SELECT * FROM profile.languages");
$intData = $connection->query("SELECT * FROM profile.interests");
$careerData = $connection->query("SELECT * FROM profile.about_career")
        ->fetch(PDO::FETCH_ASSOC);
$jobsData = $connection->query("SELECT * FROM profile.jobs");
$projectsData = $connection->query("SELECT * FROM profile.projects")
        ->fetch(PDO::FETCH_ASSOC);
$myProjectsData = $connection->query("SELECT * FROM profile.my_projects");
$skillsData = $connection->query("SELECT * FROM profile.skills");
//$comments = $connection->query("SELECT * FROM profile.comments");

