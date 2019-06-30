<?php
namespace App\Services;

use App\Models\Product;
use App\SearchBuilders\ProductSearchBuilder;

/**
 * 查找某个商品的相似商品属于一个通用的需求，
 * 比如在订单详情页面可能也需要展示订单中商品的相似商品，
 * 因此我们需要将查找相似商品封装起来，方便以后调用
 */
class ProductService
{
    public function getSimilarProductIds(Product $product, $amount)
    {
        // 如果商品没有商品属性，则直接返回空
        if (count($product->properties) === 0) {
            return [];
        }
        $builder = (new ProductSearchBuilder())->onSale()->paginate($amount, 1);
        foreach ($product->properties as $property) {
            $builder->propertyFilter($property->name, $property->value, 'should');
        }
        $builder->minShouldMatch(ceil(count($product->properties) / 2));
        $params = $builder->getParams();
        $params['body']['query']['bool']['must_not'] = [['term' => ['_id' => $product->id]]];
        $result = app('es')->search($params);

        return collect($result['hits']['hits'])->pluck('_id')->all();
    }
}