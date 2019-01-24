<?php

namespace liberosoft\luyawysiwyg\admin\assets;

/**
 * Asset file for tinymce
 */
class WysiwygAssets extends \luya\web\Asset
{
    public $sourcePath = '@wysiwygadmin/resources';

    public $js = [
        'js/directives.js',
    ];

    public $depends = [
        'luya\admin\assets\Main',
        'liberosoft\luyawysiwyg\admin\assets\TinymceAssets'
    ];
}