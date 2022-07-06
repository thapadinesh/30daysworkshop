<?php require('connection/config.php'); ?>
<!DOCTYPE html>
<html lang="en"> 
<head>
    <title>DevBlog - Bootstrap 5 Blog Template For Developers</title>
    
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Blog Template">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">    
    <link rel="shortcut icon" href="favicon.ico"> 
    
    <!-- FontAwesome JS-->
	<script defer src="assets/fontawesome/js/all.min.js"></script>
    
    <!-- Theme CSS -->  
    <link id="theme-style" rel="stylesheet" href="assets/css/theme-1.css">

</head> 

<body>
    
    <header class="header text-center">	    
	    <h1 class="blog-name pt-lg-4 mb-0"><a class="no-text-decoration" href="index.html">Anthony's Blog</a></h1>
        
	    <nav class="navbar navbar-expand-lg navbar-dark" >
           
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div id="navigation" class="collapse navbar-collapse flex-column" >
				<div class="profile-section pt-3 pt-lg-0">
					<?php 
					$profile_query = "SELECT * FROM siteconfigs WHERE sitekey='profile'";
					$profile_result = mysqli_query($conn,$profile_query);
					$profile_row = $profile_result->fetch_assoc();
					?>
				    <img class="profile-image mb-3 rounded-circle mx-auto" src="<?php echo $profile_row['sitevalue'];?>" alt="image" >			
					
					<ul class="social-list list-inline py-3 mx-auto">
					<?php 
					$facebook_query = "SELECT * FROM siteconfigs WHERE sitekey='fb_link'";
					$facebook_result = mysqli_query($conn,$facebook_query);
					$facebook_row = $facebook_result->fetch_assoc();
					?>
			            <li class="list-inline-item"><a href="<?php echo $facebook_row['sitevalue']; ?>" target="_blank"><i class="fab fa-facebook fa-fw"></i></a></li>
						<?php 
					$linkedin_query = "SELECT * FROM siteconfigs WHERE sitekey='linkedin_link'";
					$linkedin_result = mysqli_query($conn,$linkedin_query);
					$linkedin_row = $linkedin_result->fetch_assoc();
					?>
			            <li class="list-inline-item"><a href="<?php echo $linkedin_row['sitevalue']; ?>" target="_blank"><i class="fab fa-linkedin-in fa-fw"></i></a></li>
						
			            <li class="list-inline-item"><a href="#"><i class="fab fa-github-alt fa-fw"></i></a></li>
			        </ul><!--//social-list-->
			        <hr> 
				</div><!--//profile-section-->
				
				<ul class="navbar-nav flex-column text-start">
					<li class="nav-item">
					    <a class="nav-link active" href="index.php"><i class="fas fa-home fa-fw me-2"></i>Home</a>
					</li>
					<?php
					$select_pages = "SELECT * FROM pages ORDER BY id ASC";
					$select_result = mysqli_query($conn,$select_pages);
					while($select_row = mysqli_fetch_array($select_result))
					{
						?>
					<li class="nav-item">
					    <a class="nav-link" href="page.php?slug=<?php echo $select_row['slug']; ?>"><i class="fas fa-user fa-fw me-2"></i><?php echo $select_row['title']; ?></a>
					</li>
						<?php 
					} 
					?>
				</ul>
				
				<div class="my-2 my-md-3">
				    <a class="btn btn-primary" href="https://themes.3rdwavemedia.com/" target="_blank">Get in Touch</a>
				</div>
			</div>
		</nav>
    </header>