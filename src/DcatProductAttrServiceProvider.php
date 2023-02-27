<?php

namespace Dcat\Admin\Extension\DcatProductAttr;

use Dcat\Admin\Admin;
use Dcat\Admin\Extend\ServiceProvider;
use Dcat\Admin\Form;

class DcatProductAttrServiceProvider extends ServiceProvider
{
    protected $js = [
        'js/index.js',
    ];
    protected $css = [
        'css/index.css',
    ];

    protected $menu = [
        [
            'title' => '属性管理',
            'uri' => 'sku-attribute'
        ]
    ];

    public function init()
    {
        parent::init();

        if ($views = $this->getViewPath()) {
            $this->loadViewsFrom($views, 'dcat-product-attr');
        }

        Admin::booting(function () {
            Form::extend('sku', SkuField::class);
        });
    }

    public function settingForm(): Setting
    {
        return new Setting($this);
    }
}
