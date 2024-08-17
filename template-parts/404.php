<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
get_header();
?>
<main id="content" class="site-main">

	<?php if ( apply_filters( 'hello_elementor_page_title', true ) ) : ?>
		<div class="page-header">
			<h1 class="entry-title"><?php echo esc_html__( 'The page can&rsquo;t be found.', 'hello-elementor' ); ?></h1>
		</div>
	<?php endif; ?>

	<div class="page-content">
		<p><?php echo esc_html__( 'It looks like nothing was found at this location.', 'hello-elementor' ); ?></p>
	</div>

</main>
