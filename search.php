<?php
/**
 * The Template for displaying Search Results pages.
 */

get_header();

if ( have_posts() ) :
?>	
<div class="container-fluid">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-lg-12 col-sm-12">
				<header class="page-header">
					<h1 class="page-title" style="text-align:center; margin-top:100px;"><?php printf( esc_html__( 'Search Results for: %s', 'xgrid-resources' ), get_search_query() ); ?></h1>
				</header>
			</div>
		</div>
	</div>
</div>
<?php
	get_template_part( 'archive', 'loop' );
else :
?>
	<article id="post-0" class="post no-results not-found" style="padding: 150px 0px;">
		<div class="container-fluid">
			<div class="container" style="text-align: center;">
				<div class="row">
					<div class="col-md-12 col-lg-12 col-sm-12">
						<header class="entry-header">
							<h1 class="entry-title"><?php esc_html_e( 'Nothing Found', 'xgrid-resources' ); ?></h1>
						</header><!-- /.entry-header -->
						<p><?php esc_html_e( 'Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'xgrid-resources' ); ?></p>
					</div>
				</div>
			</div>
		</div>
		<?php
			get_search_form();
		?>
	</article><!-- /#post-0 -->
<?php
endif;
wp_reset_postdata();

get_footer();
