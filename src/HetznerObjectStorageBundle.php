<?php
/**
 * @link      https://www.vaersaagod.no/
 * @copyright Copyright (c) Værsågod
 * @license   MIT
 */

namespace vaersaagod\hetznerobjectstorage;

use craft\web\AssetBundle;
use craft\web\assets\cp\CpAsset;

/**
 * Asset bundle for the filesystem settings
 */
class HetznerObjectStorageBundle extends AssetBundle
{
    /**
     * @inheritdoc
     */
    public function init(): void
    {
        $this->sourcePath = '@vaersaagod/hetznerobjectstorage/resources';

        $this->depends = [
            CpAsset::class,
        ];

        $this->js = [
            'js/editVolume.js',
        ];

        parent::init();
    }
}
