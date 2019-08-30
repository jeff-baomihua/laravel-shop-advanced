<?php

namespace App\Http\Middleware;

use App\Exceptions\InvalidRequestException;
use Closure;

class RandomDropSeckillRequest
{
    /**
     * $percent 参数是在路由添加中间件时传入
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $percent)
    {
        // 为了避免商品已经抢完了，还是提示用户，请稍候再试。在此先判断：商品存在和库存情况
        $stock = \Redis::get('seckill_sku_'.$request->input('sku_id', 0));
        // 如果是 null 代表这个 SKU 不是秒杀商品
        if (is_null($stock)) {
            throw new InvalidRequestException('商品不存在', 403);
        }
        // 判断库存
        if ($stock < 1) {
            throw new InvalidRequestException('商品已售完', 403);
        }
        // 然后再进行随机拒绝


        if (random_int(0, 100) < (int)$percent) {
            throw new InvalidRequestException('参与的用户过多，请稍候再试', 403);
        }

        return $next($request);
    }
}
