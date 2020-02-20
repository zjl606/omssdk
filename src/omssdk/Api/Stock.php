<?php
namespace OmsSdk\Api;

use OmsSdk\Kernel\BasicApi;

class Stock extends BasicApi
{
    public function __construct($config)
    {
        parent::__construct($config);
    }

    /**
     * 库存更新
     *
     * @param array $params
     * @return void
     */
    public function update($params)
    {
        return $this->request('api/stock/stockupdate', $params);
    }
}
