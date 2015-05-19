<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

    $GLOBALS['TL_DCA']['tl_news']['palettes']['default'] = str_replace('subheadline,','subheadline, meta_description,', $GLOBALS['TL_DCA']['tl_news']['palettes']['default']);
	$GLOBALS['TL_DCA']['tl_news']['palettes']['internal'] = str_replace('subheadline,','subheadline, meta_description,', $GLOBALS['TL_DCA']['tl_news']['palettes']['internal']);
	$GLOBALS['TL_DCA']['tl_news']['palettes']['external'] = str_replace('subheadline,','subheadline, meta_description,', $GLOBALS['TL_DCA']['tl_news']['palettes']['external']);

    $GLOBALS['TL_DCA']['tl_news']['fields']['meta_description'] = array
    (
    	'label'                   => &$GLOBALS['TL_LANG']['tl_news']['meta_description'],
    	'inputType'               => 'textarea',
    	'eval'                    => array('tl_class'=>'clr'),
    	'sql'                     => "text NULL"
    );

?>