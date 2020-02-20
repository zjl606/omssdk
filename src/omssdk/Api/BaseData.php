<?php
namespace OmsSdk\Api;

use OmsSdk\Kernel\BasicApi;

class BaseData extends BasicApi
{
    public function __construct($config)
    {
        parent::__construct($config);
    }

    /**
     * 销售单位
     *
     * @return void
     */
    public function getUnit()
    {
        return $this->request('api/basedata/GetUnit');
    }

    /**
     * 国家地区
     *
     * @return void
     */
    public function getCountryInfo()
    {
        return $this->request('api/basedata/GetCountryInfo');
    }

    /**
     * 包装
     *
     * @return void
     */
    public function getWrap()
    {
        return $this->request('api/basedata/GetWrap');
    }
}