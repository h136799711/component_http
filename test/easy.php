<?php
/**
 * 简单用法示例
 */
require dirname(__DIR__) . '/vendor/autoload.php';

use by\component\http\HttpRequest;

//$http = new HttpRequest;
$http = HttpRequest::newSession();
$response = $http->get('https://www.biquge.com.cn/book/31833/489624.html');

echo 'html:', PHP_EOL, $response->getBody()->getContents();
