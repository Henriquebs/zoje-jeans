<?php defined('SYSPATH') or die('No direct access allowed.');

return array(
	//URL FRONTEND
	"base" 			=>	url::base(TRUE, 'http'),
	"self"          =>  url::base(TRUE, 'http').substr(Request::detect_uri(),1),
	"base_admin" 	=> 	url::base(TRUE, 'http')."admin/", 
	"base_action" 	=> 	url::base(TRUE, 'http')."form/", 
	"vendor" 		=> 	url::base(TRUE, 'http')."assets/vendor/", 
	"css" 			=> 	url::base(TRUE, 'http')."assets/css/", 
	"js" 			=> 	url::base(TRUE, 'http')."assets/js/", 
	"img" 			=> 	url::base(TRUE, 'http')."assets/img/", 
	"video" 		=> 	url::base(TRUE, 'http')."assets/video/", 
	
	
	
	//Meta Tags
	"meta_title" 		=> 	"Zoje Conteúdo Especial",
	"meta_description" 	=> 	"A Zoje inova em relação aos seus concorrentes a mostrar seu produto, totalmente diferenciado.",
	"meta_keywords" 	=> 	"Zoje, conteúdo especial de maquina, novas maquinas zoje",
	"meta_author" 		=> 	"Rolemak Comercial Ltda",
	
	
	"year"		=>  date("Y"),
);