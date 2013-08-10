<?php
class Controller {

	protected $_model;
	protected $_controller;
	protected $_action;
	protected $_template;

	var $param = array();

	function __construct($model, $controller, $action) {

		$this->_controller = $controller;
		$this->_action = $action;
		$this->_model = $model;
		if(class_exists($model))
                {
			$this->$model =  new $model;
		}
		$this->_template = new Template($controller,$action);

	}

	function set($name,$value) {
		$this->_template->set($name,$value);
	}

	function __destruct() {
			$this->_template->render();
	}

    
    function setQueryData($querydata=""){
     
      if(!empty($querydata)){    
         $str = parse_url($querydata);
         if(!empty($str['query'])){
            // echo $str['query']; 
             parse_str($str['query'],$this->param['query']);
         }

      }

    }

}
