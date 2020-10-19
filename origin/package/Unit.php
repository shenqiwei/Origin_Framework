<?php
/**
 * @author 沈起葳 <cheerup.shen@foxmail.com>
 * @version 1.0
 * @copyright 2015-2020
 * @context: Origin公共控制器
 */
namespace Origin\Package;

use Exception;

/**
 * 功能控制器，负责内核功能方法的预加载调用
*/
abstract class Unit
{
    /**
     * 装载参数信息数组
     * @var array $_Param_Array
    */
    private $_Param = array();
    /**
     * 构造方法，获取当前操作类信息
     * @access public
    */
    function __construct()
    {}
    /**
     * 向模板加载数据信息
     * @access protected
     * @param string $key
     * @param mixed $value
    */
    protected function param($key, $value)
    {
        $_regular = '/^[^\_\W]+(\_[^\_\W]+)*$/';
        if(is_true($_regular, $key)){
            $this->_Param[Junctor::$_Class][$key] = $value;
        }else{
            # 异常提示：变量名称包含非合法符号
            try{
                throw new Exception('Variable name contains non legal symbols');
            }catch(Exception $e){
                errorLog($e->getMessage());
                exception("Param Error",$e->getMessage(),debug_backtrace(0,1));
                exit();
            }
        }
    }
    /**
     * 调用模板方法
     * @access protected
     * @param string $template 视图模板
     */
    protected function template($template=null)
    {
        $_page = Junctor::$_Function;
        $_regular = '/^[^\_\W]+(\_[^\_\W]+)*(\:[^\_\W]+(\_[^\_\W]+)*)*$/';
        $_dir = str_replace("classes/", '',
                str_replace(DEFAULT_APPLICATION."/", '',
                    str_replace('application/', '',
                        str_replace('\\', '/', strtolower(Junctor::$_Class)))));
        if(is_null($template) and is_true($_regular, $template)){
            $_page = $template;
        }
        View::view($_dir, $_page,$this->_Param[Junctor::$_Class],Junctor::$_LoadTime);
    }
    /**
     * 返回执行对象类名
     * @access protected
     * @return string
     */
    protected function get_class()
    {
        return Junctor::$_Class;
    }
    /**
     * 返回执行对象方法名
     * @access protected
     * @return string
     */
    protected function get_function()
    {
        return Junctor::$_Function;
    }
    /**
     * 执行成功提示信息
     * @access protected
     * @param string $message
     * @param string $url
     * @param int $time
    */
    protected function success($message='success',$url='#',$time=3)
    {
        $_setting = array("bgcolor"=>"floralwhite","color"=>"#000000","title"=>"Success");
        Output::output($time, $message, $url, $_setting);
    }
    /**
     * 错误提示
     * @access protected
     * @param string $message
     * @param string $url
     * @param int $time
    */
    protected function error($message='error',$url='#',$time=3)
    {
        $_setting = array("bgcolor"=>"orangered","color"=>"floralwhite","title"=>"Error");
        Output::output($time, $message, $url, $_setting);
    }
    /**
     * @access public
     * @param array $array
    */
    protected function json($array=null)
    {
        Output::json($array);
    }
}