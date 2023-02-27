<?php

namespace Dcat\Admin\Extension\DcatProductAttr\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;
use Illuminate\Database\Eloquent\Model;

class ProductAttribute extends Model
{
    use HasDateTimeFormatter;

    public $table = 'product_attrs';

    protected $casts = [
        'attr_value' => 'json'
    ];
}
