<?php 
class Application 
{
    protected $controller = "ProductController";
    protected $action = "getProductsByBand";
    protected $params = [];

    function __construct()
    {
        $arr = $this->__urlProcess();
        $n = count($arr);

        // Xử lý controller
        if (file_exists("./MVC/controllers/" . $arr[$n-2] . ".php")) {
            $this->controller = $arr[$n-2];
            unset($arr[$n - 2]);
        }

        require_once "./MVC/controllers/" . $this->controller . ".php";
        $this->controller = new $this->controller;

        // Xử lý action
        if (isset($arr[$n-1])) {
            if (method_exists($this->controller, $arr[$n-1])) {
                $this->action = $arr[$n-1];
            }
            unset($arr[$n-1]);
        }

        // Xử lý params
        $this->params = $arr ? array_values($arr) : [];
        call_user_func_array([$this->controller, $this->action], $this->params);
    }

    function __urlProcess()
    {
        if (isset($_SERVER["REQUEST_URI"])) {
            return explode("/", filter_var(trim($_SERVER['REQUEST_URI'], "/")));
        }
    }
}

?>