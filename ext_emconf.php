<?php
$EM_CONF[$_EXTKEY] = [
	'title' => 'Slidecontent',
	'description' => 'Content element for image slide with link',
	'category' => 'fe',
	'version' => '1.0.0',
	'state' => 'stable',
	'uploadfolder' => false,
	'createDirs' => '',
	'clearcacheonload' => true,
	'author' => 'Tanel Põld',
	'author_email' => 'tanel@brightside.ee',
	'author_company' => 'Brightside OÜ / t3brightside.com',
	'constraints' => [
		'depends' => [
			'typo3' => '10.4.0 - 11.5.99',
			'fluid_styled_content' => '',
		],
	],
];
