<?php
  class Site{
    var $url;
    var $title;
    function __construct($parUrl, $parTitle) {
      $this->url = $parUrl;
      $this->title = $parTitle;
    }
    // function __destruct(){
    //   print_r('<br/>' . $this->url . '销毁<br/>');
    // }
    function setUrl($par) {
      $this->url = $par;
    }
    function getUrl(){
      echo $this->url . '<br/>';
    }
    function setTitle($par) {
      $this->title = $par;
    }
    function getTitle() {
      echo $this->title . '<br/>'; 
    }
  }

  $youj = new Site('www.w3cschool.cn', 'W3Cschool教程');
  $taobao = new Site('www.taobao.com', '淘宝网');
  $google = new Site('www.google.com', '谷歌');

  // $youj->setUrl('https://www.w3cschool.cn/php/php-oop.html');
  // $taobao->setUrl('www.taobao.com');
  // $google->setUrl('www.google.com');

  // $youj->setTitle('W3Cschool教程');
  // $taobao->setTitle('淘宝网');
  // $google->setTitle('谷歌');

  // $youj->getTitle();
  // $taobao->getTitle();
  // $google->getTitle();


  class Child_site extends Site{
    var $category;
    function setCategory($par) {
      $this->category = $par;
    }
    function getCategory() {
      echo $this->category . '<br/>';
    }
  }
  $aa = new Child_site('www.aa.com','title:aa');
  $aa->setCategory('oo');
  $aa->getUrl();
  $aa->getTitle();
  $aa->getCategory();