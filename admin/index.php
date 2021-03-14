<?php
session_start();
if($_SESSION['username'] == ""){
	header("location:../index.php");
}
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <title>Praktikum 2021</title>
    <style type="text/css">
      body {
        margin-bottom: 6em;
      }

      *{
      	font-size: 14px;
      }
      footer {
        position: fixed;
        bottom: 0;
        width: 100%;
        background:#1fb359;
        color: #fff;
        padding:10px 0;
        letter-spacing: 1.5px;
        text-align: center;
        font-family: Arial, Helvetica, sans-serif;
      }
    </style>
  </head>
  <body>
  	<div class="container-fluid">
  		<h3 class="mt-4 mb-4">Aplikasi Data Mahasiswa</h3>
  		<div class="row">
  			<div class="col-md-3 col-sm-12 mb-4">
  				<?php include 'nav.php'; ?>
  			</div>
  			<div class="col-md-9 col-sm-12">
  				<?php include '../connection.php'; 
  				error_reporting(0);

  				switch ($_GET['page']) {
  					default:
  					include "dashboard.php";
  					break;

  					case 'dashboard';
  						include 'dashboard.php';
  						break;

  					//Mahasiswa	
  					case 'mahasiswa-show';
  						include '../mahasiswa/mahasiswa_show.php';
  						break;
  					case 'mahasiswa-add';
  						include '../mahasiswa/mahasiswa_add.php';
  						break;
  					case 'mahasiswa-edit';
  						include '../mahasiswa/mahasiswa_edit.php';
  						break;
  					case 'mahasiswa-update';
  						include '../mahasiswa/mahasiswa_update.php';
  						break;
  					case 'mahasiswa-delete';
  						include '../mahasiswa/mahasiswa_delete.php';
  						break;

  					//User
  					case 'user-show';
  						include '../user/user_show.php';
  						break;
  					case 'user-add';
  						include '../user/user_add.php';
  						break;
  					case 'user-update';
  						include '../user/user_update.php';
  						break;
  					case 'user-edit';
  						include '../user/user_edit.php';
  						break;
  					}
  				?>
  			</div>
  		</div>
  	</div>
  	<footer>
  		<div class="conatiner">
  			<span>&copy; 2021 - FTI UNISKA</span>
  		</div>
  	</footer>
</body>
</html>