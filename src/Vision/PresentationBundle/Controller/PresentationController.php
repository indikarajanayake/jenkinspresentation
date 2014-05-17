<?php
namespace Vision\PresentationBundle\Controller;

use Symfony\Component\HttpFoundation\Response;

class PresentationController 
{
	public function indexAction($name) 
	{
		return new Response('<html><body> Hello</body></html>');
	}

}



?>

