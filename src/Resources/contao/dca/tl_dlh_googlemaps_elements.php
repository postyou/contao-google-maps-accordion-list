<?php

$GLOBALS['TL_DCA']['tl_dlh_googlemaps_elements']['palettes']['MARKER'] = str_replace('{element_legend},geocoderAddress,geocoderCountry,','{element_legend},imageSRC,addressTitle,geocoderAddress,geocoderCountry,geocoderPhone,geocoderFax,geocoderEmail,url,',$GLOBALS['TL_DCA']['tl_dlh_googlemaps_elements']['palettes']['MARKER']);
$GLOBALS['TL_DCA']['tl_dlh_googlemaps_elements']['palettes']['MARKERSIMPLE'] = str_replace('{element_legend},geocoderAddress,geocoderCountry,','{element_legend},imageSRC,addressTitle,geocoderAddress,geocoderCountry,geocoderPhone,geocoderFax,geocoderEmail,url,',$GLOBALS['TL_DCA']['tl_dlh_googlemaps_elements']['palettes']['MARKERSIMPLE']);
$GLOBALS['TL_DCA']['tl_dlh_googlemaps_elements']['palettes']['MARKERICON'] = str_replace('{element_legend},geocoderAddress,geocoderCountry,','{element_legend},imageSRC,addressTitle,geocoderAddress,geocoderCountry,geocoderPhone,geocoderFax,geocoderEmail,url,',$GLOBALS['TL_DCA']['tl_dlh_googlemaps_elements']['palettes']['MARKERICON']);
$GLOBALS['TL_DCA']['tl_dlh_googlemaps_elements']['palettes']['MARKERSIMPLEINFO'] = str_replace('{element_legend},geocoderAddress,geocoderCountry,','{element_legend},imageSRC,addressTitle,geocoderAddress,geocoderCountry,geocoderPhone,geocoderFax,geocoderEmail,url,',$GLOBALS['TL_DCA']['tl_dlh_googlemaps_elements']['palettes']['MARKERSIMPLEINFO']);
$GLOBALS['TL_DCA']['tl_dlh_googlemaps_elements']['palettes']['MARKERICONINFO'] = str_replace('{element_legend},geocoderAddress,geocoderCountry,','{element_legend},imageSRC,addressTitle,geocoderAddress,geocoderCountry,geocoderPhone,geocoderFax,geocoderEmail,url,',$GLOBALS['TL_DCA']['tl_dlh_googlemaps_elements']['palettes']['MARKERICONINFO']);
$GLOBALS['TL_DCA']['tl_dlh_googlemaps_elements']['palettes']['MARKERSIMPLELINK'] = str_replace('{element_legend},geocoderAddress,geocoderCountry,','{element_legend},imageSRC,addressTitle,geocoderAddress,geocoderCountry,geocoderPhone,geocoderFax,geocoderEmail,url,',$GLOBALS['TL_DCA']['tl_dlh_googlemaps_elements']['palettes']['MARKERSIMPLELINK']);
$GLOBALS['TL_DCA']['tl_dlh_googlemaps_elements']['palettes']['MARKERICONLINK'] = str_replace('{element_legend},geocoderAddress,geocoderCountry,','{element_legend},imageSRC,addressTitle,geocoderAddress,geocoderCountry,geocoderPhone,geocoderFax,geocoderEmail,url,',$GLOBALS['TL_DCA']['tl_dlh_googlemaps_elements']['palettes']['MARKERICONLINK']);

$GLOBALS['TL_DCA']['tl_dlh_googlemaps_elements']['list']['sorting']['child_record_callback'] = ['tl_dlh_googlemaps_elements_accordion', 'listElements'];

$GLOBALS['TL_DCA']['tl_dlh_googlemaps_elements']['fields']['imageSRC'] = [
    'label'     => &$GLOBALS['TL_LANG']['tl_dlh_googlemaps_elements']['imageSRC'],
    'exclude'   => true,
    'inputType' => 'fileTree',
    'eval'      => ['fieldType' => 'radio', 'filesOnly' => true, 'extensions' => 'gif,jpg,jpeg,png,svg,svgz', 'mandatory' => true, 'tl_class' => 'clr'],
    'sql'       => "binary(16) NULL",
];

$GLOBALS['TL_DCA']['tl_dlh_googlemaps_elements']['fields']['addressTitle'] = [
    'label'     => &$GLOBALS['TL_LANG']['tl_dlh_googlemaps_elements']['addressTitle'],
    'exclude'   => true,
    'inputType' => 'text',
    'eval'      => ['tl_class' => 'clr w50'],
    'sql'       => "varchar(256) NOT NULL default ''",
];

$GLOBALS['TL_DCA']['tl_dlh_googlemaps_elements']['fields']['geocoderPhone'] = [
    'label'     => &$GLOBALS['TL_LANG']['tl_dlh_googlemaps_elements']['geocoderPhone'],
    'exclude'   => true,
    'inputType' => 'text',
    'eval'      => ['tl_class' => 'w50'],
    'sql'       => "varchar(256) NOT NULL default ''",
];

$GLOBALS['TL_DCA']['tl_dlh_googlemaps_elements']['fields']['geocoderFax'] = [
    'label'     => &$GLOBALS['TL_LANG']['tl_dlh_googlemaps_elements']['geocoderFax'],
    'exclude'   => true,
    'inputType' => 'text',
    'eval'      => ['tl_class' => 'w50'],
    'sql'       => "varchar(256) NOT NULL default ''",
];

$GLOBALS['TL_DCA']['tl_dlh_googlemaps_elements']['fields']['geocoderEmail'] = [
    'label'     => &$GLOBALS['TL_LANG']['tl_dlh_googlemaps_elements']['geocoderEmail'],
    'exclude'   => true,
    'inputType' => 'text',
    'eval'      => ['tl_class' => 'w50'],
    'sql'       => "varchar(256) NOT NULL default ''",
];

class tl_dlh_googlemaps_elements_accordion extends tl_dlh_googlemaps_elements {

    /**
     * List records
     *
     * @param array
     *
     * @return string
     */
    public function listElements($arrRow)
    {
        $key    = $arrRow['published'] ? 'published' : 'unpublished';
        $return = '<div class="cte_type ' . $key . '"><strong>' . (!empty($arrRow['addressTitle']) ? $arrRow['addressTitle'] : $arrRow['title']) . '</strong></div><div>'
            . $GLOBALS['TL_LANG']['tl_dlh_googlemaps_elements']['references'][$arrRow['type']] . '</div>' . "\n";

        return $return;
    }
}