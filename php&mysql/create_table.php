<?php
  $link = new mysqli('localhost', 'root', '123456', 'mydb');
  if($link->connect_error){
    die('link failed ' . $link->connect_error);
  }else{
    print_r('success' . '<br/>');
  };

  $sql = "create table student(
    id int(10) not null auto_increment,
    name varchar(50) not null default 'admin',
    sex varchar(10) not null default 'boy',
    age int(10) not null default 22,
    calss int(10) not null default 5,
    grade varchar(10) not null default '三年级',
    address varchar(100) not null default '北京市',
    primary key (id)
  )engine=innodb";
  if($link->query($sql) === true){
    echo 'the table created successful';
  }else{
    echo 'the table created failed ' . $link->error;
  }

  $link->close();