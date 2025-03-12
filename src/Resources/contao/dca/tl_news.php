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

 /* Extend the tl_news palettes */
//$GLOBALS['TL_DCA']['tl_news']['palettes']['default'] = str_replace(';{publish_legend}', ';{custom_clickthrough_legend},clickthrough_copy;{publish_legend}', $GLOBALS['TL_DCA']['tl_news']['palettes']['default']);
//$GLOBALS['TL_DCA']['tl_news']['palettes']['default'] = str_replace(';{enclosure_legend:hide}', ';{featured_video_legend},featured_video;{enclosure_legend}', $GLOBALS['TL_DCA']['tl_news']['palettes']['default']);




$dc = &$GLOBALS['TL_DCA']['tl_news'];
$dc['palettes']['default'] = str_replace(';{publish_legend}', ';{custom_clickthrough_legend},clickthrough_copy;{publish_legend}', $dc['palettes']['default']);



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
