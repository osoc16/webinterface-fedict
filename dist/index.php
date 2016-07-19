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
    //$serviceFamily = isset($_GET['serviceFamily']) ? $_GET['serviceFamily'] : '%';
    //$service = isset($_GET['service']) ? $_GET['service'] : '%';
    //$method = isset($_GET['method']) ? $_GET['method'] : '%';

    $searchOption = isset($_POST['searchOption']) ? $_POST['searchOption'] : '';
    $search = isset($_POST['search']) ? $_POST['search'] : '';

	$services = array(
        array('name' => "PersonService",'description' => "Some description is here....", 'method' => "GetPersonDetails"),
        array('name' => "SomeService",'description' => "Second desc is here....", 'method' => "GetServicex")

    );

	// load template
	$tpl = $twig->loadTemplate('index.twig');

	// render template with our data
	echo $tpl->render(array(
		'services' => $services,
        'search'  => $search,
        'searchOption'  => $searchOption,
    ));

// EOF
?>
