<?php

namespace Dcat\Admin\Extension\DcatProductAttr;

use Dcat\Admin\Extend\Setting as Form;

class Setting extends Form
{
    public function title()
    {
        return 'Product Attr扩展增强版配置';
    }

    public function form()
    {
        $this->text('attr_img_upload_url', '图片上传地址')
            ->default('/admin/product-attr-image-upload')
            ->help('必须以【/】开头')
            ->required();

        $this->text('attr_img_remove_url', '图片删除地址')
            ->default('/admin/product-attr-image-remove')
            ->help('必须以【/】开头')
            ->required();
    }
}
