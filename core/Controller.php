<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 20.02.19
 * Time: 12:50
 */

namespace Core;

use Core\Model as Model;


class Controller
{
    public $text;

    public function __construct()
    {
        $this->text='text';

    }
    public function index()
    {
        $db = Model::db;
        echo Model::all($db);
    }
}