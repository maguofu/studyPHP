<?php
header("Content-type:text/html;charset=utf-8");

//用Cache-Control告诉浏览器有效期 5秒
header("Cache-Control:max-age=10");//等同于Cache-Control:public, max-age=5
$curr_time = date('Y-m-d H:i:s');
echo '服务器时间:'.$curr_time;
?>



<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Page Title</title>
  <script src="http://code.jquery.com/jquery-latest.js"></script>
</head>
<body>
  <div id="main">
    <p id="btn">点击</p>
  </div>
</body>
  <script>
    $('#btn').on('click', function(){
      $.ajax({
        type: 'GET',
        url: './php&mysql/http.php',
        success: function(res){
          console.log(typeof res)
          console.log(JSON.parse(res));
        }
      })
    });
  </script>
</html>