# Origin PHP Framework
Origin PHP framework 主要是用于解决PHP开发过程中关于公共结构功能重复编写封装等繁杂的无效行为所以编写和开发的简单程序封装结构；

Origin PHP framework 单一入口方式实现各应用功能访问，并利用MVC特性将程序与界面内容完全分开；

Origin PHP framework 使用内封装结构创建一套简单的web标签工具包，以方便开发者在不使用PHP程序结构的前提下简单实现对数据内容的展示；

Origin PHP framework 2020.9.16 至2020.10.18更新后版本以将部分原有仿写（函数命名，封装逻辑表述）结构舍弃，完全新的定义结构和功能标记规则；    
    
<table>
    <tr>
        <th align="left">快速访问 -- menu</th>
    </tr>
    <tr>
        <td><a href="#welcome">欢迎</a> -- welcome</td>
    </tr>
    <tr>
        <td><a href="#tree">文件目录</a> -- tree</td>
    </tr>
    <tr>
        <td><a href="#basic">基础功能</a> -- basic function</td>
    </tr>
    <tr>
        <td><a href="#config">基础配置</a> -- configuration</td>
    </tr>
    <tr>
        <td><a href="#iif">web标签</a> -- include & if & for</td>
    </tr>
    <tr>
        <td><a href="#validate">对比函数</a> -- validate package</td>
    </tr>
    <tr>
        <td><a href="#dao">数据库</a> -- DAO</td>
    </tr>
    <tr>
        <td><a href="#history">历史版本</a> -- history</td>
    </tr>
</table>
    
<span id='welcome'></span>
##### 欢迎
   感谢您能进一步了解origin，虽然他并不是您所期望最好的选择，不过对于您做出决定，我们感到十分荣幸！
在大环境下，我们经历了足够多的嘲讽和质疑，经历了团队变故，一些人离开了，一些人放弃了，
2017年参与商业化项目中版权以及技术不扩散等合作协议导致我们失去初版origin全部控制权，但这些已经过去！
我们在新的设计原型的基础上，重新创立了origin，摒弃了原有的模仿和所谓的从众原则，并去除了快捷应用原则而设计的函数。
2020年9月15日起，origin ver 1.0正式上传完全替代原始origin，文件也将从1.0重新开始迭代，谢谢，我们将一如既往的努力下去！    

<span id='tree'></span>
##### 文件目录    
<table style="border:0;">
    <tr>
        <td>#</td>
        <td colspan="4">application</td>
        <td>应用主目录，该目录由系统初始加载时生成</td>
        <td><a href="https://github.com/shenqiwei/origin_readme/tree/master/application">访问文档</a></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td colspan="3">┗common</td>
        <td colspan="2">功能函数目录</td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td colspan="3">┗home</td>
        <td colspan="2">默认访问地址目录</td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td colspan="2">┗classes</td>
        <td colspan="2">控制器目录</td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td colspan="2">┗common</td>
        <td colspan="2">默认访问应用功能函数目录</td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td colspan="2">┗template</td>
        <td colspan="2">应用视图模板目录</td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td>┗home</td>
        <td colspan="2">默认访问视图模板目录</td>
    </tr>
    <tr>
        <td>#</td>
        <td colspan="4">common</td>
        <td>功能文件目录，该目录由系统初始加载时生成</td>
        <td><a href="https://github.com/shenqiwei/origin_readme/tree/master/common/config">访问文档</a></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td colspan="3">┗config</td>
        <td colspan="2">系统配置文件目录</td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td colspan="3">┗log</td>
        <td colspan="2">系统日志目录</td>
    </tr>
    <tr>
        <td>#</td>
        <td colspan="4">origin</td>
        <td>origin framework功能封装目录</td>
        <td><a href="https://github.com/shenqiwei/origin_readme/tree/master/origin">访问文档</a></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td colspan="3">┗library</td>
        <td colspan="2">实例函数目录</td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td colspan="3">┗package</td>
        <td colspan="2">功能类封装目录</td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td colspan="3">┗template</td>
        <td colspan="2">内核信息视图模板目录</td>
    </tr>
    <tr>
        <td>#</td>
        <td colspan="4">resource</td>
        <td colspan="2">web文件资源目录，该目录由系统初始加载时生成</td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td colspan="3">┗buffer</td>
        <td colspan="2">缓存文件目录</td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td colspan="3">┗public</td>
        <td colspan="2">功能文件目录</td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td>┗font</td>
        <td colspan="3">字体目录，内核封装的验证码字体初始化位置</td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td>┗temp</td>
        <td colspan="3">自定义模板目录</td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td colspan="3">┗upload</td>
        <td colspan="2">上传文件目录</td>
    </tr>
</table>

<span id='basic'></span>
##### 基础功能    
使用origin非常简单,将origin所有文件放入项目目录后，直接访问地址，origin会自动在第一次访问自动创建应用文件结构。
初始化完成后在应用文件夹（application）会出现默认访问文件目录（home），应用类对象存储格式（application/应用名/classes/类名.php）
类对象需标明命名空间，命名与文件地址名相同，但首字母大写参照classes/Index.php文件中的格式，就可以调用origin的基础功能     

Index.php文件    

    namespace Application\Home\Classes;
    
    use Origin\Package\Unit;
    
    class Index extends Unit
    {
        function __construct()
        {
            parent::__construct();
            $this->param('title','Origin架构开发版');
            $Origin = array('title' => 'Origin', 'version' => 'Ver.1.0');
            $this->param('o', $Origin);
        }
        function index()
        {
            $welcomes = array(
                '0'=>array('statement' => '你好！欢迎使用Origin框架'),
                '1'=>array('statement' => 'Hello! Welcome to use Origin framework'),
            );
            $this->param('welcome', $welcomes);
            $this->param('author', 'ShenQiwei');
            $this->param('time', '2020/10/19');
            $this->template();
        }
    }
    
index.html文件
    
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>{$title}</title>
        <style>
            body{background-color:green; font-family:微软雅黑; font-size:16px; color:floralwhite; top:0; left:0;}
        </style>
    </head>
    <body style="top:0px; left:0px;">
    <div style="margin: 0px auto; width:380px;">
        <h1 style="font-size:60px; margin: 0px;">{$o.title}</h1>
        <div style="font-size:10px; text-align: right;">{$o.version}</div>
        <br />
        <div style="padding-bottom:8px;">{$welcome.[0].statement}</div>
        <div style="padding-bottom:8px;text-align: right;">{$welcome.[1].statement}</div>
        <br />
        <div style="text-align: center; ">\author\:
            <spac style="font-family: 'Arial Black'; font-size:13px; text-decoration: underline;">{$author}</spac>
            \time\:
            <spac style="font-family: 'Arial Black'; font-size:13px; text-decoration: underline;">{$time}</spac>
        </div>
    </div>
    </body>
    </html>
    
`use Origin\Package\Unit`用于引用origin内部封装出口文件，使用父类集成方式      
`$this->param()`用于调用前端变量数据交换方法,方法参数（$key:变量名，$value:变量值）    
`$this->template()`用于调用前端模板视图模板文件方法，结构视图模板地址(application/应用名/template/类名/方法名.html)    
使用上述，就可以简单设计一个web主页


<span id='config'></span>
##### 基础配置    
编写无数据交互的web服务时，配置结构完全可以忽略，而配置主要达成功能是对数据库，缓存单元，session，cookie功能使用的基本控制条件进行设定。
文件存储地址（common/config/config.php）    
数据库（mysql）配置：    
>`DATA_NAME`  数据源名称，用于数据库封装调用指定配置内容
`DATA_TYPE` 选择数据库类型,当前版本支持Mysql,MariaDB,SQL server(mssql),PostgreSQL(pgsql),sqlite,Oracle,
`DATA_HOST`  服务访问地址  
`DATA_USER`  登录用户  
`DATA_PWD` 登录密码  
`DATA_PORT`  默认访问端口 mysql:3306,mariadb:3306,PostgreSQL:5432,Redis:6379,MongoDB:27017    
`DATA_DB` 访问数据库  
`DATA_P_CONNECT` 启用长连接  
`DATA_ATUO` 自动提交，默认设置为启用  
`DATA_TIMEOUT` 请求超时时间
`DATA_USE_TRANSACTION` 数据驱动类型为innodb时，事务操作设置才会生效(暂不支持)   
`DATA_USE_BUFFER` mysql是否使用memcache进行数据缓冲,默认值是0（不启用）,启用memcache需要在部署服务器上搭建memcache环境(暂时取消该功能支持)  

<span id='iif'></span>
##### web标签    
origin ver 1.0支持4种独立标签     
>include：引用     
 `<include href="src/html/page.html"/>`用于引用（resource/public）中公共模板文件,该标签内容仅用html文件引用    
 
> if：判断，功能与if逻辑结构功能一直    
 `<if condition = 'variable eq conditions_variable'>`   
 `<elseif condition = 'variable eq conditions_variable'/>`    
 `<else/>`    
 `</if>`    
 
> for：循环    
 `<for operation = 'variable to circulation_count'>`    
 `</for>`    
 
> foreach：迭代循环     
 `<foreach operation = 'variable (as mark_variable)'>`    
 `</foreach>`    

<span id='validate'></span>
##### 对比函数   
origin功能结构中封装了3个基本比对条件(是否为空，大小，正则结构)函数，
并且将三个基本功能统一到一个基本函数(`is_true($regular,$param)` )中:    
> $regular (string)正则表达式    
> $param (string)对象参数      

origin在初期版本中预设了15个基本比对函数，由于新版本计划所以删除原有函数内容支持（但是保留了正则表达式，以帮助使用者会更好的完成开发工作）：     
> '/^[^\s\w\!\@\#\%\^\&\*\(\)\-\+\=\/\'\\"\$\:\;\,\.\<\>\`\~]+$/' 验证中文姓名方法，支持中文英文混写，也可以用来支持名字中出现单字母的名字    
> '/^([A-Za-z]+[\.\s]?)+$/' 验证英文姓名方法    
> '/^([0]{1}\d{2,3})?([^0]\d){1}\d{2,10}$/' 验证固定电话方法，支持加区号电话号码    
> '/^(800|400){1}[\-\s]?\d{4,6}[\-\s]?\d{4}$/' 验证400和800固定电话方法    
> '/^[1][3|4|5|7|8]{1}\d{9}$/' 验证移动电话号码    
> '/^([^\_\W]+[\.\-]*)+\@(([^\_\W]+[\.\-]*)+\.)+[^\_\W]{2,8}$/' 邮箱验证方法    
> '/^((http|https):\/\/)?(www.)?([\w\-]+\.)+[a-zA-z]+(\/[\w\-\.][a-zA-Z]+)*(\?([^\W\_][\w])+[\w\*\&\@\%\-=])?$/' host地址验证方法    
> '/^[\x{4e00}-\x{9fa5}]+$/u' 中文验证方法    
> '/^[^\_\d\W]+$/' 英文验证方法     
> '/^[\w\.\-\@\+\$\#\*\~\%\^\&]+$/' 验证用户名方法    
> '/^([^\_\W]+([\_\.\-\@\+\$\#\*\~\%\^\&]*))+$/' 弱密码验证方法    
> '/^([A-Z]+[a-z]+[0-9]+[\.\_\-\@\+\$\#\*\~\%\^\&]*)+$/' 强密码验证方法    
> '/^([A-Z]+[a-z]+[0-9]+[\.\_\-\@\+\$\#\*\~\%\^\&]+)+$/' 调用验证结构包，并声明验证对象   

    function is_true($regular,$param)
    {
        $_validate = new Origin\Package\Validate($param);
        return $_validate->_type($regular);
    } 
上述方法为简单验证实例，如果使用相同功能，可以参照代码格式

<span id='dao'></span>
##### 数据库    
origin ver 1.0后数据支持Mysql，MariaDB，SQL server，PostgreSQL，Sqlite，Oracle，Mongodb（基础功能支持），Redis（部分结构支持）。
功能实现封装在DB类中，使用时需预先在配置文件（common/config/config.php）中设置数据参数    

    $_mysql = DB::mysql("origin");
    $_select = $_mysql->table("member")->where(array("member_mobile"=>$mobile))->select();    
这是一个简单的mysql select 实例，也可以用更简单的写法

    $_select = $_mysql->query("select * from member where member_mobile = '{$mobile}'");

<span id='history'></span>
##### 历史版本    
2020 origin framework ver 1.0 bate online