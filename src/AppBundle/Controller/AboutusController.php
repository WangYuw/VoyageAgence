<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * About us controller.
 */
class AboutusController extends Controller
{
	/**
	 * @Route("/aboutus", name="aboutus")
	 * @Method("GET")
	 */
	public function aboutusAction()
	{
		return $this->render('circuit/aboutus.html.twig');
	}
}