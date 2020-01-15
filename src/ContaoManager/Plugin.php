<?php

namespace Postyou\ContaoGoogleMapsAccordionListBundle\ContaoManager;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use Postyou\ContaoGoogleMapsAccordionListBundle\ContaoGoogleMapsAccordionListBundle;

class Plugin implements BundlePluginInterface
{
    /**
     * {@inheritdoc}
     */
    public function getBundles(ParserInterface $parser)
    {
        return [
            BundleConfig::create(ContaoGoogleMapsAccordionListBundle::class)
                ->setLoadAfter([ContaoCoreBundle::class, 'dlh_googlemaps']),
        ];
    }
}