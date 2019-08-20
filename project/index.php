<?php

  
  $link = new mysqli('localhost', 'root', '123456', 'mydb');
  $userName = $_POST['nameValue'];
  $psd = $_POST['padValue'];
  if ($_POST['flag'] == 1) {
    $confirmPsd = $_POST['confirmValue'];
  }

  // 插入sql
  $insertSql = 'insert into login (username, psd)
    values (' . '"' . $userName . '"' . ',' . $psd . ')';
  $checkBeforeInsert = 'select * from login where username=' . '"' . $userName . '"';
  // 查询psd   sql
  $checkSql = 'select psd from login where username=' . '"' . $userName . '"';
  // 返回值格式
  $res = array(
    'errNo' => 0,
    'errStr' => 'success',
    'data' => array(
      'status' => 0,
    )
  );

  if (!$link->errno) {
    if(array_key_exists('confirmValue', $_POST)){
      // 注册
      if ($link->query($checkBeforeInsert)->num_rows !== 0) {
        // 用户名重复
        $res['data']['status'] = 2;
        $res['data']['errMsg'] = '用户名已经被占用';
      } else {
        print_r($link->query($insertSql));
        if($link->query($insertSql) === true){
          // status=1插入成功
          $res['data']['status'] = 1;
          $res['data']['errMsg'] = '注册成功';
        }else{
          // status=2插入失败
          $res['data']['status'] = 2;
          $res['data']['errMsg'] = '注册失败，请重试';
        }
      }
    }else{
      // 登录
      // status=3登录成功
      // status=4登录失败
      if ($link->query($checkBeforeInsert)->num_rows === 0) {
        $res['data']['status'] = 4;
        $res['data']['errMsg'] = '没有该用户，请确认用户名是否存在';
      } else {
        $checkResult = $link->query($checkSql);
        // print_r($checkResult->fetch_all()[0][0]);
        $resultRow = $checkResult->fetch_assoc();
        if ($resultRow['psd'] === $psd) {
          $res['data']['status'] = 3;
          $res['data']['errMsg'] = '登录成功';
        } else {
          $res['data']['status'] = 4;
          $res['data']['errMsg'] = '密码错误，请重试';
        }
      }
    };
  } else {
    $res['errNo'] = 50000;
    $res['errStr'] = '数据库链接失败';
    $res['data'] = array();
  }

  print_r(json_encode($res));

  $link->close();
  die;