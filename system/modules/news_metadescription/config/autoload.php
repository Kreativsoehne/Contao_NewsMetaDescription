<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2015 Leo Feyer
 *
 * @license LGPL-3.0+
 */


/**
 * Register the namespaces
 */
ClassLoader::addNamespaces(array
(
	'newsMetaDescription',
));


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Classes
	'newsMetaDescription\NewsMetaDescription' => 'system/modules/news_metadescription/classes/NewsMetaDescription.php',
));
