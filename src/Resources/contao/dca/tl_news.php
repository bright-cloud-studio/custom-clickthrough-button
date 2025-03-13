<?php

declare(strict_types=1);

use Contao\CoreBundle\DataContainer\PaletteManipulator;

if(!isset($GLOBALS['TL_DCA']['tl_news'])) {
    return;
}

//$GLOBALS['TL_DCA']['tl_news']['palettes']['default'] = str_replace("author", "author,clickthrough_copy", $GLOBALS['TL_DCA']['tl_news']['palettes']['default']);
PaletteManipulator::create()
    ->addField('clickthrough_copy', 'author')
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
