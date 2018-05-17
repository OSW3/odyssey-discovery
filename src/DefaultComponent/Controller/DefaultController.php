<?php

namespace DefaultComponent\Controller;

use \Odyssey\Controller\Controller;

class DefaultController extends Controller
{
	/**
	 * Home
	 */
	public function homeAction()
	{
		$this->render('Default:Default:home');
	}

}