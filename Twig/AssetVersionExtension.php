<?php

namespace ShadeSoft\Twig;

class AssetVersionExtension extends \Twig\Extension\AbstractExtension {

    /**
     * @return array
     */
    public function getFilters() {
        return array(
            new \Twig\TwigFilter('versionify', function getAssetVersion($asset) {
                return $asset . '?v=' . substr(
                    md5(
                        filemtime(
                            str_replace('//', '/', $_SERVER['DOCUMENT_ROOT'] . '/' . $asset)
                        )
                    ), 0, 8
                );
            })
        );
    }

    public function getName() {
        return 'shadesoft_twig_asset_version';
    }
}
