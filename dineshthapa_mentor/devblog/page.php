<?php require('inc/header.php'); ?>
    
<?php 
if(isset($_GET['slug']))
{
	$slug = $_GET['slug'];
	$page_query = "SELECT * FROM pages WHERE slug='$slug'";
	$page_result = mysqli_query($conn,$page_query);
	$page_row = $page_result->fetch_assoc();
}
?>
    <div class="main-wrapper">
	    	    
	    <article class="about-section py-5">
		    <div class="container">
			    <h2 class="title mb-3"><?php echo $page_row['title']; ?></h2>
			    
			   
			    <figure><img class="img-fluid" src="uploads/<?php echo $page_row['img']; ?>" alt="image"></figure>
			    <p>
				<?php echo $page_row['content']; ?>
				</p>
			    
			    
		    </div>
	    </article><!--//about-section-->
	    

<?php require('inc/footer.php'); ?>