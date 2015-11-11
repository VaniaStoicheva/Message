<?php

abstract class BaseController {

    protected $controllerName;
    protected $layoutName = DEFAULT_LAYOUT;
    protected $isViewRender = false;
    protected $isPost = false;
    protected $isLogedIn;

    public function __construct($controllerName) {
        $this->controllerName=$controllerName;
        if($_SERVER['REQUEST_METHOD']==='POST'){
            $this->isPost=true;
        }
        if(isset($_SESSION['username'])){
            $this->isLogedIn=true;
        }
        $this->OnInit();
    }
    public function onInit();
    public function index();
    public function renderView($viewName='index',$includeLayout=true){
        if(!$this->isViewRender){
            $viewFileName='views/'.$this->controllerName.'/'.$viewName.'.php';
        }
        if($includeLayout){
            $headerFile='views/layout/'.$this->layoutName.'/header.php';
            include_once ($headerFile);
        }
        include_once $viewFileName;
        if($includeLayout){
            $footerFile='views/layout/'.$this->layoutName.'footer.php';
            include_once $footerFile;
        }
        $this->isViewRender=true;
    }

    public function addText($txt,$type){
        if(!isset($_SESSION['message'])){
            $_SESSION['mesage']=array();
        }
        array_push($_SESSION['message'], array('text'=>$txt,'type'=>$type));
    }
    public function addInfoText($txt){
        $this->addInfoText($txt,'info'); 
    }
    public function addErrorText($txt){
        $this->addText($txt,'error');
    }
    public function redirectToUrl($url){
      header('Location:'.$url);
      die();
    }
    public function redirect($controllerName,$actionName=null,$params=null){
        $url='/'.urldecode($controllerName);
        if($actionName!=null){
            $url='/'.urldecode($actionName);
            }
            if($params!=null){
                $encodedParams=array_map($params,'urlecode');
                $url.=implode('/',$encodedParams);
            }
            $this->redirectToUrl($url);
    }
}
