# component\http



## 简介


支持所有常见的GET、POST、PUT、DELETE、UPDATE等请求方式，支持上传下载、设置和读取header、Cookie、请求参数、失败重试、限速、代理、证书等。

3.0 版完美支持Curl


## Composer

本项目可以使用composer安装，遵循psr-4自动加载规则，在你的 `composer.json` 中加入下面的内容
```json
{
    "require": {
        "itboye/compoent_http": "1.0.*"
    }
}
```

然后执行 `composer update` 安装。

之后你便可以使用 `include "vendor/autoload.php";` 来自动加载类。（ps：不要忘了namespace）

## 用法

### 简单调用

```php
<?php
use by\component\http\HttpRequest;

$http = new HttpRequest;
$response = $http->ua('ByHttp')
                 ->get('http://www.baidu.com');

echo 'html:', PHP_EOL, $response->body();
```

### PSR-7 请求构建

```php
<?php
use by\component\http\ByHttp\Http\Request;
use by\component\http\ByHttp;

$url = 'http://www.baidu.com';

// 构造方法定义：__construct($uri = null, array $headers = [], $body = '', $method = RequestMethod::GET, $version = '1.1', array $server = [], array $cookies = [], array $files = [])
$request = new Request($url);

// 发送请求并获取结果
$response = ByHttp::send($request);

var_dump($response);
```


具体详见`test`目录中的示例代码