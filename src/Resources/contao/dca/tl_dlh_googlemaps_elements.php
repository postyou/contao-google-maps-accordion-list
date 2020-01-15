<?php

$GLOBALS['TL_DCA']['tl_dlh_googlemaps_elements']['palettes']['MARKER'] = str_replace('{element_legend},','{element_legend},imageSRC,',$GLOBALS['TL_DCA']['tl_dlh_googlemaps_elements']['palettes']['MARKER']);
$GLOBALS['TL_DCA']['tl_dlh_googlemaps_elements']['palettes']['MARKERSIMPLE'] = str_replace('{element_legend},','{element_legend},imageSRC,',$GLOBALS['TL_DCA']['tl_dlh_googlemaps_elements']['palettes']['MARKERSIMPLE']);
$GLOBALS['TL_DCA']['tl_dlh_googlemaps_elements']['palettes']['MARKERICON'] = str_replace('{element_legend},','{element_legend},imageSRC,',$GLOBALS['TL_DCA']['tl_dlh_googlemaps_elements']['palettes']['MARKERICON']);
$GLOBALS['TL_DCA']['tl_dlh_googlemaps_elements']['palettes']['MARKERSIMPLEINFO'] = str_replace('{element_legend},','{element_legend},imageSRC,',$GLOBALS['TL_DCA']['tl_dlh_googlemaps_elements']['palettes']['MARKERSIMPLEINFO']);
$GLOBALS['TL_DCA']['tl_dlh_googlemaps_elements']['palettes']['MARKERICONINFO'] = str_replace('{element_legend},','{element_legend},imageSRC,',$GLOBALS['TL_DCA']['tl_dlh_googlemaps_elements']['palettes']['MARKERICONINFO']);
$GLOBALS['TL_DCA']['tl_dlh_googlemaps_elements']['palettes']['MARKERSIMPLELINK'] = str_replace('{element_legend},','{element_legend},imageSRC,',$GLOBALS['TL_DCA']['tl_dlh_googlemaps_elements']['palettes']['MARKERSIMPLELINK']);
$GLOBALS['TL_DCA']['tl_dlh_googlemaps_elements']['palettes']['MARKERICONLINK'] = str_replace('{element_legend},','{element_legend},imageSRC,',$GLOBALS['TL_DCA']['tl_dlh_googlemaps_elements']['palettes']['MARKERICONLINK']);

$GLOBALS['TL_DCA']['tl_dlh_googlemaps_elements']['fields']['imageSRC'] = [
    'label'     => &$GLOBALS['TL_LANG']['tl_dlh_googlemaps_elements']['imageSRC'],
    'exclude'   => true,
    'inputType' => 'fileTree',
    'eval'      => ['fieldType' => 'radio', 'filesOnly' => true, 'extensions' => 'gif,jpg,jpeg,png,svg,svgz', 'mandatory' => true, 'tl_class' => 'clr'],
    'sql'       => "binary(16) NULL",
];