<?php
/**
 * @link      https://www.vaersaagod.no/
 * @copyright Copyright (c) Værsågod
 * @license   MIT
 */

namespace vaersaagod\hetznerobjectstorage;

use craft\events\RegisterComponentTypesEvent;
use craft\services\Fs as FsService;
use yii\base\Event;

/**
 * Plugin represents the Hetzner Object Storage filesystem plugin.
 *
 * @method static Plugin getInstance()
 * @author Værsågod
 * @since  1.0
 */
class Plugin extends \craft\base\Plugin
{
    // Public Methods
    // =========================================================================

    /**
     * @inheritdoc
     */
    public function init(): void
    {
        parent::init();

        Event::on(FsService::class, FsService::EVENT_REGISTER_FILESYSTEM_TYPES, static function(RegisterComponentTypesEvent $event) {
            $event->types[] = Fs::class;
        });
    }
}
