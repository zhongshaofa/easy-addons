<?php

// +----------------------------------------------------------------------
// | EasyAdmin
// +----------------------------------------------------------------------
// | PHP交流群: 763822524
// +----------------------------------------------------------------------
// | 开源协议  https://mit-license.org 
// +----------------------------------------------------------------------
// | github开源项目：https://github.com/zhongshaofa/EasyAdmin
// +----------------------------------------------------------------------

namespace EasyAddons\driver;

use think\Route;
use think\Service as BaseService;

class Service extends BaseService
{
    public function register()
    {
        dump('执行1');
    }

    public function boot(Route $route)
    {
        dump($route);
        dump($this->app->request);
        halt('执行2');
    }

}