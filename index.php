<?php
session_start();
include_once 'inc/Database.php';
require 'model/Category.php';
require 'model/News.php';
require 'model/Comments.php';
require 'model/Register.php';

include_once 'view/ViewNews.php';
include_once 'view/ViewComments.php';

include_once 'controller/Controller.php';
include_once 'route/routing.php';

echo $response;

