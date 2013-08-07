<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Website extends Controller {
	
	// atributos
	protected $view;
	
	// metodos
	public function before()
	{ 
	  $seconds_to_cache = 3600;
	  $ts = gmdate("D, d M Y H:i:s", time() + $seconds_to_cache) . " GMT";
	  
	  header("Expires: $ts");
	  header("Pragma: cache");
	  header("Cache-Control: max-age=$seconds_to_cache");

	  parent::before();
	  
	  //Cria as variaveis para todos os controllers
	  $constants=Kohana::$config->load('constants')->as_array();
	  
	  foreach($constants as $key => $val)
	  {
		  define(strtoupper($key),$val);
	  }
	  
	  // Create a new instance of the memcache group
	  $this->mycache = Cache::instance('file');
	  
	  //Gera ID do Cache Unico Para cada Revendedor e cada página 
	  $this->cache_id = 
					   '/'.Request::current()->controller()
					  .'/'.Request::current()->action()
					  .'/'.Request::detect_uri();
	  
	  //echo $this->cache_id;
	  
	  $page = $this->mycache->get($this->cache_id);
	  
	  if ( $page = $this->mycache->get($this->cache_id) )
	  {	
		  //echo 'achei !!';
		  echo $this->response->body($page);
		  die();
	  }
	  else
	  {		
		  //echo 'nao achei cache!!';
	  }
	  
	}
	
	public function after()
	{
	
		if ( ! $page = $this->mycache->get($this->cache_id) )
		{	
			//Cache $page for seconds
			//$this->mycache->set($this->cache_id, $this->view , 60*60*24); 
		}	
		
		$this->response->body($this->view);
		parent::after();
	}
}
