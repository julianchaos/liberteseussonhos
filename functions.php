<?php
function getPageTemplateCommand()
{
	$pageTemplateSlug = get_page_template_slug();
	
	if(
			$pageTemplateSlug === 'page-template/front-page.php' ||
			empty($pageTemplateSlug)
	){
		return null;
	}
	
	return explode("-",str_replace(".php", "", $pageTemplateSlug));	
}