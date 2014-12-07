<?php
/**
 * Template Name: Na Mídia
 *
 * @package Ndrade
 * @subpackage mauad
 * @since 1.0
 */
?>
<section id="page_<?php the_id() ?>" class="content-namidia page_<?php the_id() ?>">
	<div class="container">
		<div class="clipping">
			<a href="http://g1.globo.com/fantastico/quadros/canal-f/noticia/2013/05/muro-abandonado-vira-espaco-colaborativo-na-lapa-no-rio.html" target="_BLANK">
				<img src="<?php bloginfo('template_directory') ?>/images/clipping/fantastico.png" />
			</a>
			<a href="http://www.cultura.rj.gov.br/materias/arte-toma-conta-das-ruas" target="_BLANK">
				<img src="<?php bloginfo('template_directory') ?>/images/clipping/secretaria-rj.png" />
			</a>
			<a href="http://g1.globo.com/globo-news/cidades-e-solucoes/platb/2013/09/05/empreendedores-sociais/" target="_BLANK">
				<img src="<?php bloginfo('template_directory') ?>/images/clipping/globo-news.png" />
			</a>
			<a href="javascript: void(0)">
				<img src="<?php bloginfo('template_directory') ?>/images/clipping/home-health.png" />
			</a>
			<a href="http://www1.folha.uol.com.br/empreendedorsocial/minhahistoria/2013/01/1212550-o-sonho-que-a-gente-sonha-acordado-e-o-mais-legal.shtml" target="_BLANK">
				<img src="<?php bloginfo('template_directory') ?>/images/clipping/folha-sao-paulo.png" />
			</a>
		</div>
		<h2><?php the_title() ?></h2>
		<p><?php the_content() ?></p>
	</div>
</section>
