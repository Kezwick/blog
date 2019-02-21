<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 21.02.19
 * Time: 13:26
 */

namespace Core;

use Core\CoreModel as Model;
use Core\CoreView as View;



class Article
{
    public $Model;
    public $View;
    public $result;
    public function __construct()
    {
        $this->Model= new Model();
        $this->View = new View();
    }

    public function ShowAllPost()
    {
     $this->Model->all();
     $this->result=$this->Model->out;
     $this->View->index($this->result);
    }
}