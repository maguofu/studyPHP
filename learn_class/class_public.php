<?php
  class MyClass{
    public $public = 'public';
    protected $protected = 'protected';
    private $private = 'private';
    function printHello() {
      echo $this->public . '<br/>';
      echo $this->protected . '<br/>';
      echo $this->private . '<br/>';
    }
  }

  // protected、private不能通过 $aa->protected、$aa->private来访问
  $aa = new MyClass();
  print($aa->public . '<br/>');
  $aa->printHello();

  class MyClass2 extends MyClass{
    // 可以对 public 和 protected 进行重定义，但 private 而不能
    protected $protected = 'protected2';
  }
  $bb = new MyClass2();
  $bb->printHello();