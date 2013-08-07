<?php defined('SYSPATH') or die('No direct script access.');

//Jeans
Route::set('jeans', 'costuras-calca-jeans')
->defaults(array(
	'controller' => 'impress',
	'action'     => 'jeans'
));

//Caseadeira ZJ-5820
Route::set('buttonhole', 'caseadeira-eletronica-olho-zj5820')
->defaults(array(
	'controller' => 'release',
	'action'     => 'buttonhole'
));

//Filigrana Área ZJ-5770-3020-HG1
Route::set('eletronicpattern', 'maquina-filigrana-eletronica-pregar-bolso')
->defaults(array(
	'controller' => 'release',
	'action'     => 'eletronicPattern'
));


/*Default*/
Route::set('default', '(<controller>(/<action>(/<id>)))')
->defaults(array(
	'controller' => 'index',
	'action'     => 'index'
));

