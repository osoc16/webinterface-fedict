<?php
/**
 * Created by PhpStorm.
 * User: beheerder
 * Date: 24/02/2016
 * Time: 14:40
 */


	/**
	 * Includes
	 * ----------------------------------------------------------------
	 */

		// Twig
		require_once '../vendor/autoload.php';
		//Twig_Autoloader::register();

	/**
	 * Bootstrapping
	 * ----------------------------------------------------------------
	 */

		// Twig
		$loader = new Twig_Loader_Filesystem('../src/Templates');
		$twig = new Twig_Environment($loader, array(
			'cache' => __DIR__ . '/cache',
			'auto_reload' => true,
			'debug' => true,

		));
		$twig->addExtension(new Twig_Extension_Debug());


	/**
	 * Select filter
	 * ----------------------------------------------------------------
	 */
	//$option = isset($_POST['option']) ? $_POST['option'] : '%';
    // URL structure: baseURI/servicefamily/service#method
    // Example:
    // http://localhost/webinterface-fedict/dist/?serviceFamily=TestServiceFamily&service=TestService&method=TestMethod
    $subject = isset($_GET['subject']) ? $_GET['subject'] : '';

	// load template
	$tpl = $twig->loadTemplate('webservice.twig');

	// render template with our data
	echo $tpl->render(array(
        'subject'=> $subject,
    ));


// EOF