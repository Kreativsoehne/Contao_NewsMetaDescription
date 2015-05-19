<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2015 Leo Feyer
 *
 * @package   newsMetaDescription
 * @author    Kreativ&Söhne | Alexander Tittmann
 * @author    Kreativ&Söhne | Michael Fuchs
 * @license   MIT
 * @copyright Kreativ&Söhne 2015
 */

$GLOBALS['TL_HOOKS']['generatePage'][] = array('NewsMetaDescription', 'generateMetaDescription');