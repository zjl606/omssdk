## ASA OMS SDK

### 使用方法

```php
require './vendor/autoload.php';

use OmsSdk\Factory;

$configs = [
    'clientGuid' => 'xxx',
    'clientName' => 'xxx',
    'host'       => 'https://api.jingjing.shop',
    'username'   => 'xxx',
    'password'   => 'xxx'
];

/* 基础数据 */
$baseDataApi = Factory::make('BaseData', $configs);
$units = $baseDataApi->getUnit(); // 销售单位
$countries = $baseDataApi->getCountryInfo(); // 国际地区
$wraps = $baseDataApi->getWrap(); // 包装代码

/* 订单 */
$orderApi = Factory::make('Order', $configs);
$orders = $orderApi->getOrderList([ // 获取订单列表
    'QueryOrders' => [
        'VendorGuid' => 'xxx',
        'VendorId' => '15'
    ],
]);
$result = $orderApi->delivery([ // 发货
    'ShipmentInfo' => []
]);

/* 商品分类 */
$categoryApi = Factory::make('Category', $configs);
$categories = $categoryApi->getAll();

/* 库存 */
$stockApi = Factory::make('Stock', $configs);
$result = $stockApi->update([
    'StockIn' => []
]);

/* 商品上新更新 */
$productApi = Factory::make('Product', $configs);
$result = $productApi->update([
    'ProductItems' => []
]);
```