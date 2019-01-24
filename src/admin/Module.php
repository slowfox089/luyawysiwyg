<?php

namespace liberosoft\luyawysiwyg\admin;

use luya\console\interfaces\ImportControllerInterface;

/**
 * Wysiwyg Admin Module.
 *
 *
 * @author
 * @since 1.0.0
 */
class Module extends \luya\admin\base\Module
{
    public function getAdminAssets() {
        return [
            'liberosoft\luyawysiwyg\admin\assets\WysiwygAssets',
        ];
    }
}