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


/**
 * Namespace
 */
namespace newsMetaDescription;


/**
 * Class NewsMetaDescription
 *
 * @copyright  Kreativ&Söhne 2015
 * @author     Kreativ&Söhne | Alexander Tittmann
 * @author    Kreativ&Söhne | Michael Fuchs
 * @package    Devtools
 */
class NewsMetaDescription extends \Frontend
{
	public function generateMetaDescription($objPage, $objLayout, $objPageRegular)
	{
        
        if (!$this->Input->get('items')){
			return; //no news
		}

		$this->import('Database');
		$objArticle = $this->Database->prepare("SELECT meta_description FROM tl_news WHERE alias=? AND published=1")
									 ->limit(1)
									 ->execute($this->Input->get('items'));

		if ($objArticle->numRows < 1){
			return; //not found !!
		}

		global $objPage;

		if ($objArticle->meta_description != '') {
            $objPage->description = $objArticle->meta_description;
		}

	}
}
