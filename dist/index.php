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

    $searchOption = isset($_POST['searchOption']) ? $_POST['searchOption'] : 'Catalog';
    $search = isset($_POST['search']) ? $_POST['search'] : '';


	// load template
	$tpl = $twig->loadTemplate('index.twig');

	// render template with our data
	echo $tpl->render(array(
        'search'  => $search,
        'searchOption'  => $searchOption,
    ));

// EOF
?>
