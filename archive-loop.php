<?php
/**
 * The template for displaying the archive loop.
 */

xgrid_resources_content_nav( 'nav-above' );

if ( have_posts() ) :
?>
<style>
.container.ss-grid-box-for-landing-pages {
    padding: 4% 6% 4% 6%;
}
.recent-blog_box.post_box {
    border-radius: 15px;
    background: #FFF;
    box-shadow: -8px 8px 116px -6px rgba(0, 0, 0, 0.13);
	display: flex;
    flex-direction: column;
    height: 100%;
}

img.post_box_recent{
	border-radius: 15px 15px 0px 0px;
	height: 279px;
	object-fit: cover;
}
.single-grid-outer-block{
	margin-bottom: 48px;
}
</style>
<div class="container-fluid">
	<div class="container ss-grid-box-for-landing-pages">
		<div class="row">
	<?php
		while ( have_posts() ) :
			the_post();
		 // Get feature image
                $feature_image = get_the_post_thumbnail_url(null, 'full');

                // Get title
                $title = get_the_title();

                // Get permalink
                $permalink = get_permalink();
		?>
<div class="col-lg-4 col-sm-12 col-md-4 single-grid-outer-block">
				<div class="recent-blog_box post_box">
		            <a href="<?php echo $permalink; ?>">
		                <img class="post_box_recent" src="<?php echo $feature_image;?>" width="100%">
		            </a>
	                <div class="text-wrap related_text_wrap">
	                	
	                	<a href="<?php echo $permalink; ?>">
	                    	<div class="post-title-block"><h3><?php echo $title; ?></h3></div>
	                	</a>
	                    <div class="post-button-block"><a href="<?php echo $permalink; ?>"><p>Read more <svg style="margin-left: 10px;" xmlns="http://www.w3.org/2000/svg" width="15" height="12" viewBox="0 0 15 12" fill="none"><path id="Arrow 1" d="M1.52881 5.25C1.1146 5.25 0.778809 5.58579 0.778809 6C0.778809 6.41421 1.11459 6.75 1.52881 6.75L1.52881 5.25ZM13.8248 6.53033C14.1177 6.23744 14.1177 5.76256 13.8248 5.46967L9.05179 0.6967C8.7589 0.403806 8.28403 0.403806 7.99113 0.6967C7.69824 0.989593 7.69824 1.46447 7.99113 1.75736L12.2338 6L7.99113 10.2426C7.69824 10.5355 7.69824 11.0104 7.99113 11.3033C8.28403 11.5962 8.7589 11.5962 9.05179 11.3033L13.8248 6.53033ZM1.52881 6.75L13.2944 6.75L13.2944 5.25L1.52881 5.25L1.52881 6.75Z" fill="#6F63DE"></path></svg></p></a></div>
	                </div>
		        </div>
			</div> 
		<?php endwhile;
	?>
	</div>
	</div>
</div>
	
<?php
endif;

wp_reset_postdata();

xgrid_resources_content_nav( 'nav-below' );
