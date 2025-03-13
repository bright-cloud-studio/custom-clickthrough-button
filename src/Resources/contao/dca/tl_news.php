<?php

use Contao\News;
use Contao\CoreBundle\DataContainer\PaletteManipulator;


//$GLOBALS['TL_DCA']['tl_news']['palettes']['default'] = str_replace("author", "author,clickthrough_copy", $GLOBALS['TL_DCA']['tl_news']['palettes']['default']);

//PaletteManipulator::create()
//    ->addLegend('custom_clickthrough_legend', 'publish_legend', PaletteManipulator::POSITION_AFTER)
//    ->addField('clickthrough_copy', 'custom_clickthrough_legend', PaletteManipulator::POSITION_APPEND)
//    ->applyToPalette('default', 'tl_news')
//;

PaletteManipulator::create()
    ->addLegend('custom_clickthrough_legend', 'publish_legend', PaletteManipulator::POSITION_BEFORE)
    ->addLegend('featured_video_legend', 'custom_clickthrough_legend', PaletteManipulator::POSITION_AFTER)
    ->addField('clickthrough_copy', 'custom_clickthrough_legend', PaletteManipulator::POSITION_APPEND)
    ->addField('featured_video', 'featured_video_legend', PaletteManipulator::POSITION_APPEND)
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
