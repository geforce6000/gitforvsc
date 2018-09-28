<?php
/**
 * Created by PhpStorm.
 * User: geforce
 * Date: 2018/9/18
 * Time: 13:18
 */

  class UserController
  {
    public function add()
    {

    }

    public function index(Request $request, DB $db)
    {
      $request->all();
      $request->only();
      $db->get();
    }
  }

  class Request
  {
    public function all()
    {
      echo '获取所有参数<hr>';
    }

    public function only()
    {
      echo '获取部分参数<hr>';
    }
  }

  class Db
  {
    public function get()
    {
      echo '获取所有的结果集<hr>';
    }
  }

  // $Request = new Request;
  // 利用PHP的反射机制
  // $request = new ReflectionClass('Request')
  // $obj = $request->newInstance()

  $test = new ReflectionClass('Db');
  $testMethods = $test->getMethods();
  $lol = new ReflectionClass('Request');
  
  
  foreach ($testMethods as $value) {  
    echo 'Db->'.$value->name.':<br>';
    $test->newInstance()->{$value->name}();
    echo '<br>';
  }

  