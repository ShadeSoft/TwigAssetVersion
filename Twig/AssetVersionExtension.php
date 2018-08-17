<?php

namespace ShadeSoft\Twig;

class AssetVersionExtension extends \Twig_Extension {

    /**
     * @return array
     */
    public function getFilters() {
        return array(
            new \Twig_SimpleFilter('versionify', array($this, 'getAssetVersion'))
        );
    }

    /**
     * @param string $asset
     * @return string
     */
    public function getAssetVersion($asset) {
        return $asset . '?v=' . substr(
            md5(
                filemtime(
                    str_replace('//', '/', $_SERVER['DOCUMENT_ROOT'] . '/' . $asset)
                )
            ), 0, 8
        );
    }

    public function getName() {
        return 'shadesoft_twig_asset_version';
    }
}
