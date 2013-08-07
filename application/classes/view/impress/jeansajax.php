<?php defined('SYSPATH') or die('No direct script access.');

class View_Impress_Jeansajax extends View_Website
{
	# ========================================================================================================================
	#
	#   #####                        ##          
	#  ##   ##                       ##          
	#  ##   ##  #####  #####  ####  #####  ##### 
	#  ####### ##     ##     ##  ##  ##   ##     
	#  ##   ##  ####   ####  ######  ##    ####  
	#  ##   ##     ##     ## ##      ##       ## 
	#  ##   ## #####  #####   ####    ### #####  
	#
	# ========================================================================================================================
	# Assets
	public function action_assets()
   	{
		return parent::action_assets()
		->set('head.css.jeans'				,  $this->css.'jeans.css')
		->set('head.css.impress_css'		,  $this->vendor.'impress/css/impress_css.css')
		
	   //validationEngine
	   ->remove('validationEngineLanguage')
	   ->remove('validationEngine')
	   ->remove('validationEngineCss')
	   
	   //alertify.js-0.3.10
	   ->remove('alertify')
	   ->remove('alertifycore')
	   ->remove('alertifydefault') 
	   
	   //flowplayer
	   ->remove('flowplayer')
	   ->remove('flowplayerskin')
	   
	   //Responsive
	   ->remove('responsive')
	   
	   //JS Page
	   ->remove('slides')
	   ->remove('tinycarousel')
	   ->remove('mask')
	   
	   //Back to TOP
	   ->remove('totop')
	   ->remove('totopcss')
		;

	}
}