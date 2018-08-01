<?php
  $link = new mysqli('localhost', 'root', '123456', 'mydb');
  if($link->connect_error){
    die('link failed ' . $link->connect_error);
  }else{
    print_r('success' . '<br/>');
  };

  $sql = "create table student(
    id int(100) not null auto_increment,
    name varchar(500) not null default 'admin',
    sex varchar(100) not null default 'boy',
    age int(100) not null default 22,
    class int(100) not null default 5,
    grade varchar(1000) not null default '三年级',
    address varchar(10000) not null default '北京市',
    primary key (id)
  )engine=innodb charset=utf8";
  if($link->query($sql) === true){
    echo 'the table created successful';
  }else{
    echo 'the table created failed ' . $link->error;
  }

  $link->close();



  // 查看MySQL建标语句：show create table table_name