<?php
/* 
 * The configuration of Foodle.
 *
 * Read more about foodle here: 
 *  http://rnd.feide.no/content/foodle-0
 */

$config = array (

	'simplesamlphpdir'   => NULL,
	'basedir'            => '/www/foodle.feide.no/',
	'baseurlpath'        => '',
	'secret' => 'sdf9sdf765sdf765sdfytux657',
	
	'templatedir'        => 'templates/',
	'dictionarydir'      => 'dictionaries/',
	
	'photodir'      => 'photos/',
	
	/*
	 * Languages available and what language is default
	 */
	'language.available'	=> array('en', 'no', 'nn', 'da', 'sv', 'fi', 'nl', 'fr', 'de', 'es', 'sl', 'cs', 'hr'),
	'language.default'	  => 'en',
	
	'auth' => 'default-sp',
	'entityid' => 'http://foodle.feide.no',
	
	// This user IDs will see a list of all foodles on the front page.
	'adminUsers' => array('andreas@rnd.feide.no', 'andreas@uninett.no'),
	
	// Enable login from facebook, and links to share current foodle on facebook.
	'enableFacebookAuth' => FALSE,
	
	// E-mails from Foodle to end-users is sent from this address.
	'fromAddress' => 'no-reply@foodle.example.org',
	
	'getsatisfaction.key' => 'xxx',
	'getsatisfaction.secret' => 'xxx',
	
	
	'db.host'	=> 'sql.example.org',
	'db.name'	=> 'feidefoodle',
	'db.user'	=> 'user',
	'db.pass'	=> 'pass',

);
