<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Impress extends Controller_Website {
	
	//Jeans
	public function action_jeans()
	{
		$this->view= new View_Impress_Jeans();
	}
	
	//Jeans Ajax loading
	public function action_jeansajax()
	{
		$this->view= new View_Impress_Jeansajax();
	}
}