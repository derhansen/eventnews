<?php

/***************************************************************
 * Extension Manager/Repository config file for ext: "eventnews"
 *
 * Auto generated by Extension Builder 2015-02-03
 *
 * Manual updates:
 * Only the data in the array - anything else is removed by next write.
 * "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array(
	'title' => 'news events',
	'description' => 'Events for news',
	'category' => 'plugin',
	'author' => 'Georg Ringer',
	'author_email' => '',
	'state' => 'beta',
	'internal' => '',
	'uploadfolder' => '0',
	'createDirs' => '',
	'clearCacheOnLoad' => 1,
	'version' => '1.0.2',
	'constraints' => array(
		'depends' => array(
			'typo3' => '6.2.0-6.2.99',
			'news' => '3.2.0',
		),
		'conflicts' => array(),
		'suggests' => array(),
	),
);
