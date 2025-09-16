<?php
/**
 * The Template for displaying Archive pages.
 */

get_header();

if ( have_posts() ) :
?>
<style>
h1.page-title{
    text-align: center;
    padding-top: 37px;
    color: #000000;
    font-size: 53px;
    font-weight: 700;
    text-transform: none;
    font-style: normal;
    text-decoration: none;
    line-height: 35px;
    font-family: 'Bower-Bold';
    margin-top: 24px;
    margin-bottom: 24px;
}
</style>
<header class="page-header">
	<h1 class="page-title">
		<?php
			if ( is_day() ) :
				printf( esc_html__( 'Daily Archives: %s', 'xgrid-resources' ), get_the_date() );
			elseif ( is_month() ) :
				printf( esc_html__( 'Monthly Archives: %s', 'xgrid-resources' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'xgrid-resources' ) ) );
			elseif ( is_year() ) :
				printf( esc_html__( 'Yearly Archives: %s', 'xgrid-resources' ), get_the_date( _x( 'Y', 'yearly archives date format', 'xgrid-resources' ) ) );
			else :
				esc_html_e( 'Available Archives', 'xgrid-resources' );
			endif;
		?>
	</h1>
</header>
<?php
	get_template_part( 'archive', 'loop' );
else :
	// 404.
	get_template_part( 'content', 'none' );
endif;

wp_reset_postdata(); // End of the loop.

get_footer();
