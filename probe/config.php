<?php

	/** This location. */
	$location = 'Home';

	/** Submission Key. */
	$submissionKey = 'SomePassword';

	/** Collection URL. */
	$collectionServer = 'http://127.0.0.1/wemo/submit.php';

	// Collection Server can also be an array.
	//
	// $collectionServer = array();
	// $collectionServer[] = 'http://127.0.0.1/wemo/submit.php';
	// $collectionServer[] = 'http://Home:SomeOtherPassword@10.0.0.2/wemo/submit.php';
	//
	// If no location/key is specified in the url, then the default values of
	// $location and $submissionKey will be used.

	/** Files to read data from. */
	$discoveryFiles = array('/tmp/energenie-listen.json');

	/** Data storage directory. */
	$dataDir = dirname(__FILE__) . '/data/';

	if (file_exists(dirname(__FILE__) . '/config.user.php')) {
		require_once(dirname(__FILE__) . '/config.user.php');
	}

	if (!function_exists('afterProbeAction')) {
		/**
		 * Function to run after finding all devices to perform additional
		 * tasks.
		 * (Saves modules needing to re-scan every time.)
		 *
		 * @param $devices Devices array
		 */
		function afterProbeAction($devices) { }
	}
