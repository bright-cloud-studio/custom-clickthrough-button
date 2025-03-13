<?php

/**
 * Bright Cloud Studio's Custom Clickthrough Button
 *
 * Copyright (C) 2022 Bright Cloud Studio
 *
 * @package    bright-cloud-studio/custom-clickthrough-button
 * @link       https://www.brightcloudstudio.com/
 * @license    http://opensource.org/licenses/lgpl-3.0.html
**/

use Contao\CoreBundle\DataContainer\PaletteManipulator;

//$GLOBALS['TL_DCA']['tl_news']['palettes']['default'] = str_replace("author", "author,clickthrough_copy", $GLOBALS['TL_DCA']['tl_news']['palettes']['default']);
PaletteManipulator::create()
    ->addLegend('custom_clickthrough_legend', 'enclosure_legend', PaletteManipulator::POSITION_BEFORE)
    ->addField('clickthrough_copy', 'custom_clickthrough_legend', PaletteManipulator::POSITION_APPEND)
    ->applyToPalette('default', 'tl_news')
;


$GLOBALS['TL_DCA']['tl_news']['fields']['clickthrough_copy'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_news']['clickthrough_copy'],
	'inputType'               => 'text',
	'default'                 => '',
	'search'                  => true,
	'eval'                    => array('mandatory'=>true, 'tl_class'=>'w50'),
	'sql'                     => "varchar(255) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_news']['fields']['featured_video'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_news']['featured_video'],
	'inputType'               => 'textarea',
	'default'                 => '',
	'search'                  => true,
	'eval'                    => array('mandatory'=>false, 'tl_class'=>'long', 'rte'=>'tinyMCE'),
	'sql'                     => "varchar(255) NOT NULL default ''"
);
