<?php
/**
 * Template Name: Typeform
 *
 * @package Ndrade
 * @subpackage mauad
 * @since 1.0
 */
?>
<section id="page_<?php the_id() ?>" class="content-typeform page_<?php the_id() ?>">
	<div class="container">
		<h2><?php the_title() ?></h2>
		<p><?php the_content() ?></p>
		<div class="typeform">
			<!-- Change the width and height values to suit you best -->
			<div class="typeform-widget" data-url="<?php the_field('typeform_url') ?>" data-text="Liberte" ></div>
			<script>(function(){var qs,js,q,s,d=document,gi=d.getElementById,ce=d.createElement,gt=d.getElementsByTagName,id='typef_orm',b='https://s3-eu-west-1.amazonaws.com/share.typeform.com/';if(!gi.call(d,id)){js=ce.call(d,'script');js.id=id;js.src=b+'widget.js';q=gt.call(d,'script')[0];q.parentNode.insertBefore(js,q)}})()</script>
			
		</div>
	</div>
</section>
