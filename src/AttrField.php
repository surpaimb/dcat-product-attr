<?php

namespace Dcat\Admin\Extension\DcatProductAttr;

use Dcat\Admin\Admin;
use Dcat\Admin\Extension\DcatProductAttr\Models\ProductAttribute;
use Dcat\Admin\Form\Field;

class AttrField extends Field
{
    protected $view = 'dcat-product-attr::index';

    public function render()
    {
        Admin::js('vendor/dcat-admin-extensions/surpaimb/dcat-product-attr/js/index.js');
        Admin::css('vendor/dcat-admin-extensions/surpaimb/dcat-product-attr/css/index.css');

        $uploadUrl = DcatProductAttrServiceProvider::setting('attr_img_upload_url') ?: '/admin/product-attr-image-upload';
        $deleteUrl = DcatProductAttrServiceProvider::setting('attr_img_remove_url') ?: '/admin/product-attr-image-remove';
        $ProductAttributes = ProductAttribute::orderBy('sort', 'desc')->get();

        $this->script = <<< EOF
        window.DemoSku = new SurpaimbProductAttribute('{$this->getElementClassSelector()}');
EOF;
        $this->addVariables(compact('ProductAttributes', 'uploadUrl', 'deleteUrl'));

        return parent::render();
    }

    /**
     * 添加扩展列.
     *
     * @param  array  $column
     * @return $this
     */
    public function addColumn(array $column = []): self
    {
        $this->addVariables(['extra_column' => json_encode($column)]);

        return $this;
    }
}
