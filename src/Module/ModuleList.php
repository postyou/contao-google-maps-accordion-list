<?php

namespace Postyou\ContaoGoogleMapsAccordionListBundle\Module;


class ModuleList extends \Module
{

    protected $strTemplate = 'ce_dlh_googlemaps_list';

    /**
     * Display a wildcard in the back end
     * @return string
     */
    public function generate()
    {
        if (TL_MODE == 'BE')
        {
//            $objMap = \delahaye\googlemaps\MapModel::findByPk($this->dlh_googlemap);


            $objTemplate = new \BackendTemplate('be_wildcard');

            $objTemplate->wildcard = '### GOOGLE ELEMENTS LIST ###';
            $objTemplate->title = $this->headline;
            $objTemplate->id = $this->dlh_googlemap;
//            $objTemplate->link = $objMap->title;
            $objTemplate->href = 'contao/main.php?do=themes&amp;table=tl_module&amp;act=edit&amp;id=' . $this->id;

            return $objTemplate->parse();
        }

        return parent::generate();
    }

    /**
     * Compile the current element
     */
    protected function compile()
    {
        $elements = \ElementModel::findBy('published', '1');

        $elementsArr = [];
        while ($elements->next()) {
            $element = new \stdClass();
            $element->name = $elements->title;
            $element->addressName = $elements->addressTitle;
            $element->address = $elements->geocoderAddress;
            $element->icon = \FilesModel::findByUuid($elements->iconSRC)->path;
            $element->logo = \FilesModel::findByUuid($elements->imageSRC)->path;
            $element->phone = $elements->geocoderPhone;
            $element->email = $elements->geocoderEmail;
            $element->url = $elements->url;
            $matches = [];
            preg_match('/\d\d\d\d\d/m', $elements->geocoderAddress, $matches, PREG_OFFSET_CAPTURE);
            $element->place = substr($element->address, $matches[0][1] + 5);
            $elementsArr[] = $element;
        }

        $this->Template->elements = $elementsArr;

    }
}