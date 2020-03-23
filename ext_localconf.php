<?php
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('@import "EXT:slidecontent/Configuration/PageTS/setup.typoscript"');

	$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
	$iconRegistry->registerIcon(
		'mimetypes-x-content-slidecontent',
		\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
		['source' => 'EXT:slidecontent/Resources/Public/Images/Icons/mimetypes-x-content-slidecontent.svg']
	);

$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['cms/layout/class.tx_cms_layout.php']['tt_content_drawItem']['slidecontent'] = \Brightside\Slidecontent\Hooks\PageLayoutView\ContentElementPreviewRenderer::class;
