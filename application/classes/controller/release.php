<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Release extends Controller_Website {
	
	//Caseadeira ZJ-5820
	public function action_buttonhole()
	{
		$this->view= new View_Release_Buttonhole();
	}
	
	//FiligranaÁrea ZJ-5770-3020-HG1
	public function action_eletronicPattern()
	{
		$this->view= new View_Release_eletronicpattern();
	}	
	
	//Como adquirir está máquina
	public function action_emailContact()
	{
		$data = Request::current()->post('form');
		
	    $email = Codeinternut::instance('print')
		  ->printrtofile(array(
			'content'		=> $_SERVER,
			'file_name'		=> 'form.txt',
			'send_email'	=> false,
		));	

		if(is_array($data))
		{

		  $save = Codeinternut::instance('sql')->dbsave('emaillogs_forms', $data);
		  
		  if($save)
		  {
			$body = utf8_decode('<h4>Formulário de Contato sobre Conteúdo Especial</h4>');
			
			foreach($data as $key => $value)
			{
			  $body .= '<p><strong>'.ucfirst(str_replace('ef_','',$key)).': </strong>'.$value.'</p>';	
			}
			
			$email = Codeinternut::instance('mail')
					->sendmail(array(
					  'from'               => 'rolemak@rolemak.com.br',
					  'fromname'           => '::.Rolemak Comercial.::',
					  'to'                 => array('vendas' => 'vendas@zoje.com.br', 'marcio' => 'marciooc@vallery.com.br', 'rogerio' => 'rogeriobbvn@vallery.com.br'),
					  //'to'               => array('rogerio' => 'rogeriobbvn@vallery.com.br'),
					  'subject'            => utf8_decode('Solicitação de Informação sobre a '.$data['ef_machine']),
					  'body'               => $body,
					  'authentication'     => true,
					  'attachment'         => false,
					  'attachment_content' => array('content' => '', 'file_name' => 'file.txt'),
					));	
				
			 // Fornece: link sem GET
			 $methods  = array("?send=false", "?send=true");
			 $clear    = array("", "",);
			 $referrer = str_replace($methods, $clear, Request::current()->referrer());		
			 		
			 Request::initial()->redirect($referrer.'?send=true');
		  }
		  else
		  {
			 Request::initial()->redirect($referrer.'?send=false'); 
		  }

		}
		
	
	}
}