<html>
    <head>
        <title><?= $title ?></title>
        <link rel="stylesheet" href="https://bootswatch.com/4/litera/bootstrap.min.css" >
        <link rel="stylesheet" href="<?= base_url() ?>/assets/css/style.css">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
         <a class="navbar-brand" href="<?= base_url() ?>">ciBlog</a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation" style="">
           <span class="navbar-toggler-icon"></span>
         </button>

         <div class="collapse navbar-collapse" id="navbarColor03">
           <ul class="navbar-nav mr-auto">
             <li class="nav-item active"><a class="nav-link" href="<?= base_url() ?>">Home</a></li>
             <li class="nav-item active"><a class="nav-link" href="<?= base_url() ?>about">About</a></li>
             <li class="nav-item active"><a class="nav-link" href="<?= base_url() ?>posts">Posts</a></li>
             
           </ul>
             <ul class="navbar-nav">
                 <li class="nav-item active"><a class="btn btn-outline-primary" href="<?= base_url() ?>posts/create">Create post</a></li>
				<li class="nav-item active"><a class="nav-link" href="<?= base_url() ?>users/register">Register</a></li>
             </ul>
         </div>
       </nav>
        <br>
        <div class="container">
        <h2><?= $title ?></h2>
        <br><br>
		
		<?php
			if( $this->session->flashdata( 'user_registered' ) ){
				echo $this->session->flashdata('user_registered');
			}
		?>