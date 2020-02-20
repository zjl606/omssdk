<?php
namespace OmsSdk\Api;

use OmsSdk\Kernel\BasicApi;

class Order extends BasicApi
{
    public function __construct($config)
    {
        parent::__construct($config);
    }

    /**
     * 查询订单
     * 
     * @param array $params
     * @return void
     */
    public function getOrder($params)
    {
        return $this->request('api/order/getorder', $params);
    }

    /**
     * 查询订单列表
     *
     * @param array $params
     * @return void
     */
    public function getOrderList($params)
    {
        return $this->request('api/order/getorderlist', $params);
    }

    /**
     * 发货
     *
     * @param array $params
     * @return void
     */
    public function delivery($params)
    {
        return $this->request('api/order/delivery', $params);
    }
}