<?php defined('SYSPATH') or die('No direct script access.');

class View_Website extends Kostache_Layout
{
	# ========================================================================================================================
	#
	#                                @@ @                                                 
	#  @@@@@@@                       @ @@              @@@@        @@        @@        @@ 
	#  @@                                               @@                             @@ 
	#  @@      @@  @@  @@@@   @@@@   @@@@   @@@@        @@   @@@@  @@  @@@@  @@  @@@@  @@ 
	#  @@@@@@  @@  @@ @@  @@ @@  @@     @@ @@  @@       @@  @@  @@ @@ @@  @@ @@     @@ @@ 
	#  @@      @@  @@ @@  @@ @@      @@@@@ @@  @@       @@  @@  @@ @@ @@     @@  @@@@@ @@ 
	#  @@      @@  @@ @@  @@ @@  @@ @@  @@ @@  @@       @@  @@  @@ @@ @@  @@ @@ @@  @@ @@ 
	#  @@       @@@@@ @@  @@  @@@@   @@@@@  @@@@       @@@@ @@  @@ @@  @@@@  @@  @@@@@ @@ 
	#                          @@                                                         
	#                         @@                                                          
	#
	# ========================================================================================================================
	# Função Inicial
	public function __construct()
	{
		parent::__construct(); 
	
		//Cria as variaveis no mustache para todo o site
		$constants = Kohana::$config->load('constants')->as_array();
		
		foreach($constants as $key => $val)
		{
			$this->$key=$val;
		}
	}
	
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
		 return Assets::factory()
 
		 //jQuery 
		 ->set('head.js.jquery_1_9_1'	        , $this->vendor.'jquery/jquery.1.9.1.js')
		 ->set('head.js.jquery_ui_1_9_1'	    , $this->js.'jquery.ui.js')
		 ->set('head.js.html5shiv'	            , $this->js.'html5shiv.js')
		 
		 //Bootstrap
		 ->set('head.js.bootstrap_min_js'   , $this->vendor.'bootstrap/js/bootstrap.min.js')
		 ->set('head.css.bootstrap_min_css' , $this->vendor.'bootstrap/css/bootstrap.min.css')
		 
		 //validationEngine
		 ->set('head.js.validationEngineLanguage'   , $this->vendor.'jquery-validation-engine-2/js/languages/jquery.validationEngine-pt_BR.js')
		 ->set('head.js.validationEngine' 			, $this->vendor.'jquery-validation-engine-2/js/jquery.validationEngine.js')
		 ->set('head.css.validationEngineCss'       , $this->vendor.'jquery-validation-engine-2/css/validationEngine.jquery.css')
		 
		 //alertify.js-0.3.10
		 ->set('head.js.alertify'  				 , $this->vendor.'alertify.js-0.3.10/lib/alertify.min.js')
		 ->set('head.css.alertifycore' 			 , $this->vendor.'alertify.js-0.3.10/themes/alertify.core.css')
		 ->set('head.css.alertifydefault' 		 , $this->vendor.'alertify.js-0.3.10/themes/alertify.default.css') 
		 
		 //flowplayer
		 ->set('head.js.flowplayer'  			 , $this->vendor.'flowplayer-5.4.3/flowplayer.min.js')
		 ->set('head.css.flowplayerskin' 		 , $this->vendor.'flowplayer-5.4.3/skin/minimalist.css')
		 
		 //Responsive
		 ->set('head.css.responsive'        , $this->vendor.'bootstrap/css/bootstrap-responsive.css')
		 
		 //Reset CSS
		 ->set('head.css.reset'       		, $this->css.'reset.css')
		 
		 //Global CSS
		 ->set('head.css.global'       		, $this->css.'global.css')
		 
		 //JS Page
		 ->set('head.js.slides'   	 		, $this->vendor.'slides-slidesjs/source/jquery.slides.min.js')
		 ->set('head.js.tinycarousel' 	    , $this->vendor.'tinycarousel/js/jquery.tinycarousel.min.js')
		 ->set('head.js.mask' 				, $this->js.'mask.js')
		 
		 //Back to TOP
		 ->set('head.js.totop' 				, $this->vendor.'uitotop-jquery-plugin/ui.totop.js')
		 ->set('head.css.totopcss'     	    , $this->vendor.'uitotop-jquery-plugin/ui.totop.css')
		 ;
	}

}