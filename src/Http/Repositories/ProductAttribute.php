<?php

namespace Dcat\Admin\Extension\DcatProductAttr\Http\Repositories;

use Dcat\Admin\Extension\DcatProductAttr\Models\ProductAttribute as ProductAttributeModel;
use Dcat\Admin\Repositories\EloquentRepository;

class ProductAttribute extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = ProductAttributeModel::class;
}
