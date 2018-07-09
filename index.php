<?php
		// phpinfo();
    $link = new mysqli(
        'localhost',
        'root',
        'maguofu',
        'mydb'
    );
    if(!$link){
      printf("Can't connect to MySQL Server. Errorcode: %s ", mysqli_connect_error()); 
	    exit;
    }else{
      echo ('数据库连接上了！')."<br/>";   
    }

    
    mysqli_query($link,'set names utf8');    