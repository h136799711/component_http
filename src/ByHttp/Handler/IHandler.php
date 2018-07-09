<?php
namespace by\component_http\ByHttp\Handler;

use by\component_http\ByHttp\Http\Psr7\Response;

interface IHandler
{
    /**
     * 发送请求
     * @param \by\component_http\ByHttp\Http\Request $request
     * @return void
     */
    public function send($request);

    /**
     * 接收请求
     * @return \by\component_http\ByHttp\Http\Response
     */
    public function recv();
}