<?php
namespace by\component\http\ByHttp\Handler;

interface IHandler
{
    /**
     * 发送请求
     * @param \by\component\http\ByHttp\Http\Request $request
     * @return void
     */
    public function send($request);

    /**
     * 接收请求
     * @return \by\component\http\ByHttp\Http\Response
     */
    public function recv();
}