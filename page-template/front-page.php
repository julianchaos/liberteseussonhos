<?php
/*
  Template Name: Front Page
 */

get_header();

$args = array("post_type" => "page", "order" => "ASC");
$the_query = new WP_Query($args);

if (have_posts()):
	while ($the_query->have_posts()):
		$the_query->the_post();

		$pageTemplateCommand = getPageTemplateCommand();
		if(is_array($pageTemplateCommand)) :
			get_template_part($pageTemplateCommand[0], $pageTemplateCommand[1]);
		endif;
	endwhile;
endif;

get_footer();
