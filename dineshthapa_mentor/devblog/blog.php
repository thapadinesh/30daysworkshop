<?php require('inc/header.php'); ?>
    
<?php 
if(isset($_GET['slug']))
{
	$slug = $_GET['slug'];
	$blog_query = "SELECT * FROM blogs WHERE slug='$slug'";
	$blog_result = mysqli_query($conn,$blog_query);
	$blog_row = $blog_result->fetch_assoc();
}
?>
    <div class="main-wrapper">
	    
	    <article class="blog-post px-3 py-5 p-md-5">
		    <div class="container single-col-max-width">
			    <header class="blog-post-header">
				    <h2 class="title mb-2"><?php echo $blog_row['title']; ?></h2>
				    <div class="meta mb-3"><span class="date"><?php echo $blog_row['created_at']; ?></span></div>
			    </header>
			    
			    <div class="blog-post-body">
				    <figure class="blog-banner">
				        <img class="img-fluid" src="uploads/<?php echo $blog_row['img']; ?>" alt="image">
				    </figure>
				    <p>
						<?php echo $blog_row['content']; ?>
					</p>
					
				<div class="blog-comments-section">
					<div id="disqus_thread"></div>
					<script>
					    /**
					     *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT 
					     *  THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR 
					     *  PLATFORM OR CMS.
					     *  
					     *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: 
					     *  https://disqus.com/admin/universalcode/#configuration-variables
					     */
					    /*
					    var disqus_config = function () {
					        // Replace PAGE_URL with your page's canonical URL variable
					        this.page.url = PAGE_URL;  
					        
					        // Replace PAGE_IDENTIFIER with your page's unique identifier variable
					        this.page.identifier = PAGE_IDENTIFIER; 
					    };
					    */
					    
					    (function() {  // REQUIRED CONFIGURATION VARIABLE: EDIT THE SHORTNAME BELOW
					        var d = document, s = d.createElement('script');
					        
					        // IMPORTANT TODO: Replace 3wmthemes with your forum shortname!
					        s.src = 'https://3wmthemes.disqus.com/embed.js';
					        
					        s.setAttribute('data-timestamp', +new Date());
					        (d.head || d.body).appendChild(s);
					    })();
					</script>
					<noscript>
					    Please enable JavaScript to view the 
					    <a href="https://disqus.com/?ref_noscript" rel="nofollow">
					        comments powered by Disqus.
					    </a>
					</noscript>
				</div><!--//blog-comments-section-->
				
		    </div><!--//container-->
	    </article>
	    
	    <section class="promo-section theme-bg-light py-5 text-center">
		    <div class="container">
			    <h2 class="title">Promo Section Heading</h2>
			    <p>You can use this section to promote your side projects etc. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. </p>
                <figure class="promo-figure">
			        <a href="https://made4dev.com" target="_blank"><img class="img-fluid" src="assets/images/promo-banner.jpg" alt="image"></a>
			    </figure>
		    </div><!--//container-->
	    </section><!--//promo-section-->

<?php require('inc/footer.php'); ?>