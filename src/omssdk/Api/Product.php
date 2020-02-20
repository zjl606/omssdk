<?php
namespace OmsSdk\Api;

use OmsSdk\Kernel\BasicApi;

class Product extends BasicApi
{
    public function __construct($config)
    {
        parent::__construct($config);
    }

    /**
     * 商品档案上新和更新
     *
     * @param array $params
     * @return void
     */
    public function update($params)
    {
        return $this->request('api/stock/stockupdate', $params);
    }
}