<?php
/**
 * Template Name: Vídeo
 *
 * @package Ndrade
 * @subpackage mauad
 * @since 1.0
 */
?>
<section id="page_<?php the_id() ?>" class="content-video page_<?php the_id() ?>">
	<div class="container">
		
		<div class="iframe">
			<iframe width="853" height="480" src="//www.youtube.com/embed/<?php the_field('video_id') ?>?showinfo=0" frameborder="0" allowfullscreen></iframe>
		</div>
		<img src="<?php bloginfo('template_directory') ?>/images/video-bg.png" />
	</div>
</section>
