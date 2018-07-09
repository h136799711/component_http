<?php
/**
 * 下载文件请求示例
 */
require dirname(__DIR__) . '/vendor/autoload.php';

use by\component\http\HttpRequest;

$url = 'http://www.baidu.com';

$http = new HttpRequest;

$http->download(__DIR__ . '/save.html', $url);

// 也支持 POST 下载：
// $body = '';
// $http->download(__DIR__ . '/save.html', $url, $body, 'POST');