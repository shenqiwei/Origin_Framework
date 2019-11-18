<?php
/**
 * @author 沈起葳 <cheerup.shen@foxmail.com>
 * @version 0.5
 * @copyright 2015-2017
 * @context IoC 主配置文件
 */
return array(
    // 默认访问文件根目录
    'DEFAULT_APPLICATION' => 'Home',
    // 应用目录 (1.0版本后逐步消除配置文件夹对框架内容的影响)
    'APPLICATION_METHOD' => 'Common', // 公共方法文件目录，系统公共方法公共调用文件存储位置，内建应用
    'APPLICATION_FUNCTION' => 'Common', // 公共方法文件目录，系统公共方法公共调用文件存储位置
    'APPLICATION_CONFIG' => 'Config', // 开发者或用户自定义或改写系统配置文件存储位置
    'APPLICATION_CONTROLLER' => 'Controller', // 执行程序文件目录
    'APPLICATION_MODEL' => 'Model', // 数据操作语句文件目录
    'APPLICATION_VIEW' => 'View', // 模板（Template）文件目录
    // 资源目录
    'ROOT_RESOURCE' => 'Resource', // 资源主目录
    //资源结构下目录(1.0版本后，配置内容不再影响框架使用)
    'ROOT_RESOURCE_PUBLIC' => 'Public', // 公共文件目录
    'ROOT_RESOURCE_UPLOAD' => 'Upload', // 上传目录
    'ROOT_RESOURCE_BUFFER' => 'Buffer', // 缓存文件目录
    // 日志主目录
    'ROOT_LOG' => 'Logs/',
    // 日志目录
    'LOG_ACCESS' => 'Access/', // 服务请求链接日志
    'LOG_CONNECT' => 'Connect/', // 数据库连接日志
    'LOG_EXCEPTION' => 'Error/', // 系统异常信息日志
    'LOG_INITIALIZE' => 'Initialize/', // 框架初始化日志
    'LOG_OPERATE' => 'Action/', // 系统操作日志
    // 引导信息
    'DEFAULT_CONTROLLER' => 'index', // 默认访问控制器对象
    'DEFAULT_METHOD' => 'index', // 默认访问函数方法
    'DEFAULT_VIEW' => 'index', // 默认访问模板
    // 会话session设置, 当前版本只对会话进行基础支持，所以部分设置暂时不使用
    'SESSION' => array(
        'SAVE_PATH'=> '', // session存储位置，一般php.ini设置,如果需要修改存储位置,再填写
        'NAME'=> 'PHPSESSID', // 指定会话名以用做 cookie 的名字.只能由字母数字组成，默认为 PHPSESSID
        'SAVE_HANDLER' => 'files', // 定义了来存储和获取与会话关联的数据的处理器的名字.默认为 files
        'AUTO_START' => 0, // 指定会话模块是否在请求开始时自动启动一个会话.默认为 0（不启动）
        'GC_PROBABILITY' => 1, // 与 gc_divisor 合起来用来管理 gc（garbage collection 垃圾回收）进程启动的概率.默认为 1
        'GC_DIVISOR' => 100, // 与 gc_probability 合起来定义了在每个会话初始化时启动 gc（garbage collection 垃圾回收）进程的概率.默认为 100
        'GC_MAXLIFTTIME' => 1440, // 指定过了多少秒之后数据就会被视为“垃圾”并被清除,垃圾搜集可能会在 session 启动的时候开始
        'SERIALIZE_HANDLER' => 'php', // 定义用来序列化／解序列化的处理器名字
        'USE_STRICT_MODE' => 0, //
        'REFERER_CHECK'=> '', // 用来检查每个 HTTP Referer 的子串,如果客户端发送了 Referer 信息但是在其中并未找到该子串,则嵌入的会话 ID 会被标记为无效,默认为空字符串
        'ENTROPY_FILE' => '', // 给出一个到外部资源（文件）的路径,在会话 ID 创建进程中被用作附加的值资源
        'ENTROPY_LENGTH' => 0, // 指定了从上面的文件中读取的字节数,默认为 0
        'CACHE_LIMITER' => 'nocache', // 指定会话页面所使用的缓冲控制方法.默认为 nocache
        'CACHE_EXPIRE' => 180, // 以分钟数指定缓冲的会话页面的存活期,此设定对 nocache 缓冲控制方法无效,默认为 180
        'USE_TRANS_SID' => 1, // 指定是否启用透明 SID 支持.默认为 0（禁用）
        'HASH_FUNCTION' => 0, // 允许用户指定生成会话 ID 的散列算法.'0' 表示 MD5（128 位）,'1' 表示 SHA-1（160 位）
        'HASH_BITS_PER_CHARACTER' => 4, // 允许用户定义将二进制散列数据转换为可读的格式时每个字符存放多少个比特,可能值为 '4'（0-9，a-f）默认,'5'（0-9，a-v）,以及 '6'（0-9，a-z，A-Z，"-"，","）
    ),
    // 会话cookie设置, 根据系统安全规范，cookie不推荐使用
    'COOKIE' => array(
        'COOKIE_LIFETIME' => 0, // 以秒数指定了发送到浏览器的 cookie 的生命周期,值为 0 表示“直到关闭浏览器”,默认为 0
        'COOKIE_PATH' => '/', // 指定了要设定会话 cookie 的路径
        'COOKIE_DOMAIN' => '', // 指定了要设定会话 cookie 的域名,默认为无
        'COOKIE_SECURE' => '', // 指定是否仅通过安全连接发送 cookie,默认为 off
        'COOKIE_HTTPONLY' => '', // 标记cookie，只有通过HTTP协议访问，这意味着饼干不会访问的脚本语言,比如JavaScript，这个设置可以有效地帮助降低身份盗窃XSS攻击,仅部分浏览器支持
        'USE_COOKIES' => 1, // 指定是否在客户端用 cookie 来存放会话 ID,默认为 1
        'USE_ONLY_COOKIES' => 1, // 指定是否在客户端仅仅使用 cookie 来存放会话 ID,启用此设定可以防止有关通过 URL 传递会话 ID 的攻击,默认值改为1
    ),
    # 数据库服务器配置(多数据库类型支持结构)
    'DATA_MATRIX_CONFIG' => array(
        array(
            "DATA_NAME" =>"redis_test", # 当前数据源名称
            "DATA_TYPE"=>"redis",
            "DATA_CONN" => "normal",# 连接类型 redis下设置生效
            'DATA_HOST' => 'localhost', # redis服务访问地址
            'DATA_PWD' => '', # redis登录密码
            'DATA_PORT' => '6379', # redis默认访问端口
            "DATA_P_CONNECT" => false, # 是否使用持久链接
        ),
        array(
            "DATA_NAME" =>"mongo_test", # 当前数据源名称
            "DATA_TYPE"=>"mongoDB",
            'DATA_HOST' => 'localhost', #  mongodb服务访问地址
            'DATA_USER' => 'root', #登录用户
            'DATA_PWD' => '', # mongodb登录密码
            'DATA_PORT' => '27017', #  mongodb默认访问端口
            'DATA_DB' => 'test', #访问数据库
        ),
        array(
            "DATA_NAME" =>"mysql_test", # 当前数据源名称
            "DATA_TYPE"=>"mysql",# 连接类型 redis下设置生效
            'DATA_HOST' => 'localhost', # mysql服务访问地址
            'DATA_USER' => 'root', # mysql登录用户
            'DATA_PWD' => '', # mysql登录密码
            'DATA_PORT' => '3306', # mysql默认访问端口
            'DATA_DB' => 'test', # mysql访问数据库
            "DATA_P_CONNECT" => false, # 是否使用持久链接
            'DATA_AUTO' => true, # mysql自动提交单语句
            'DATA_TIMEOUT' => 0, # mysql请求超时时间（单位 s）,设置为0 不启用
            'DATA_USE_BUFFER' => false, # mysql是否使用缓冲查询 默认值false
        ),
    ),
    // 访问数据缓冲及显示模式设置
    'LABEL_TYPE' => 0, // 系统支持标签格式（0:默认格式(Origin格式),1:html格式,2:自然语句格式)
    'BUFFER_TYPE' => 0, //使用缓存器类型（0:不适用缓存器,1:使用数据缓存,2:生成php缓存文件,3:生成静态文件）
    'BUFFER_TIME' => 0, //缓存器生命周期（0:不设限制,内容发生变化,缓存器执行更新,大于0时以秒为时间单位进行周期更新）
    // 路由类型用于决定程序使用地址解析结构
    // default：使用伪静态路径结构进行访问
    'ROUTE_CATALOGUE' => 'Route/', // 路由主目录
    'ROUTE_FILES' => 'Route.php', // 路由文件
);