<?php
/**
 * -*- coding: utf-8 -*-
 * -*- system OS: windows2008 -*-
 * -*- work Tools:Phpstorm -*-
 * -*- language Ver: php7.1 -*-
 * -*- agreement: PSR-1 to PSR-11 -*-
 * -*- filename: IoC.Origin.Function.function-*-
 * -*- version: 0.1-*-
 * -*- structure: common framework -*-
 * -*- designer: 沈启威 -*-
 * -*- developer: 沈启威 -*-
 * -*- partner: 沈启威-*-
 * -*- chinese Context:
 * -*- create Time: 2017/01/09 15:34
 * -*- update Time: 2017/01/09 15:34
 * -*- IoC 主方法函数包
 */
# 初试公共函数包
include('Common/Common.func.php');
include('Common/Load.func.php');
include('Common/Configurate.func.php');
# 框架柱目录文件路径
if (!defined('RING')) define('RING', 'Origin' . SLASH);
# 公共配置常量
if (!defined('CLASS_SUFFIX')) define('CLASS_SUFFIX', Configurate('CLASS_SUFFIX'));
if (!defined('METHOD_SUFFIX')) define('METHOD_SUFFIX', Configurate('METHOD_SUFFIX'));
if (!defined('CONFIG_SUFFIX')) define('CONFIG_SUFFIX', Configurate('CONFIG_SUFFIX'));
# 判断程序是否锁定域名
if (Configurate('URL_HOST_ONLY') != 0) {
    # 判断访问地址与注册域名是否相同
    if (Configurate('URL_HOST') != $_SERVER['HTTP_HOST']) {
        # 不同抛出错误
        # 异常处理：访问域名与注册域名不符
        try {
            throw new \Exception('error: Access to the domain name does not accord with registered domain name');
        } catch (\Exception $e) {
            echo($e->getMessage());
            exit(0);
        }
    }
}
# 创建基础常量
# 默认应用访问目录，默认为空，当进行web开发时，区分前后台时，填入并在Apply下建立同名文件夹
if (!defined('__APPLICATION__')) define('__APPLICATION__', Configurate('DEFAULT_APPLICATION'));
# 协议类型
if (!defined('__PROTOCOL__')) define('__PROTOCOL__', $_SERVER['HTTPS'] === 'on' ? 'https://' : 'http://');
# 地址信息
if (!defined('__HOST__')) define('__HOST__', __PROTOCOL__ . $_SERVER['HTTP_HOST'] . '/');
# 插件应用常量
if (!defined('__PLUGIN__')) define('__PLUGIN__', Configurate('ROOT_PLUGIN'));
# 资源应用常量
if (!defined('__RESOURCE__')) define('__RESOURCE__', Configurate('ROOT_RESOURCE'));
# 公共目录常量
define('__PUBLIC__', __RESOURCE__ .'/'. Configurate('ROOT_RESOURCE_PUBLIC'));
# 插件地址常量
define('__PLUG_IN__', __RESOURCE__ .'/'. Configurate('ROOT_RESOURCE_PLUGIN'));
# 上传文件常量
define('__UPLOAD__', __RESOURCE__.'/' . Configurate('ROOT_RESOURCE_UPLOAD'));
# 加载函数封装类
Import('File:File'); # 文件控制类
Import('Parameter:Request'); # 调用请求控制器
Import('Parameter:Validate'); # 调用验证控制器
Import('Parameter:Filter');
Import('Parameter:Output');# 格式输出
# 基础操作方法包应用
include('Common/File.func.php');
include('Common/Request.func.php');
include('Common/Validate.func.php');
include('Common/Filter.func.php');
include('Common/Session.func.php');
include('Common/Cookie.func.php');
# 公共应用函数类
Import('File:Upload'); # 文件上传控制类
Import('Data:Mysql'); # 调用Mysql数据库对象组件
Import('Data:Redis'); # 调用Redis数据库对象组件
Import("Data:Mongodb"); # 调用MongoDB 70+支持包
# 应用公共函数文件
include('Common/Log.func.php'); # 引用日志函数包
include('Common/Database.func.php'); # 文件操作函数包
# 图形支持函数
Import('Interface:Mark:Impl:Label'); # 调用内建标签解释结构接口控制类
Import("Mark:Analysis"); # 调用模板主控制类
Import('Export:Verify'); # 调用验证码组件
Import('Graph:View'); # 调用界面模板匹配控制类
# 引入路由控制函数包
Import('Protocol:Route'); # 调用路由控制函数包
Import('Protocol:Curl'); # 调用远程请求控制函数包
Import('Protocol:Socket'); # 调用Socket通信控制函数包
# 调用应用函数文件
include('Common/Socket.func.php');
# 应用结构包调用
Common('Common:Public'); # 引入公共函数包
# 公共控制器文件
Import('Application:Controller');
