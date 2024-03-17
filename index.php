<?php
session_start();
include("app/models/pdo.php");
pdo_get_connection();
include_once("app/controllers/user/headerControllers.php");
include_once("app/controllers/user/indexControllers.php");
include_once("app/controllers/user/footerControllers.php");