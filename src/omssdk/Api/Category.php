<?php
namespace OmsSdk\Api;

use OmsSdk\Kernel\BasicApi;

class Category extends BasicApi
{
    public function __construct($config)
    {
        parent::__construct($config);
    }

    /**
     * 商品分类
     *
     * @return void
     */
    public function getAll()
    {
        return $this->request('api/category/getcategory');
    }
}
