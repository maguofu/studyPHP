<?php
  // addcslashes() 函数返回在指定的字符前添加反斜杠的字符串。
  // 注释：addcslashes() 函数是区分大小写的。
  // 注释：在对 0（NULL)、r（回车）、n（换行）、t（换页）、f（制表符）和 v（垂直制表符）应用 addcslashes() 时要小心。在 PHP 中，\0、\r、\n、\t、\f 和 \v 是预定义的转义序列。
  $str = 'Hello PHP!I am learning you.';
  //在制定字符前面加上反斜杠
  echo addcslashes($str, 'P'), '<br/>';
  
  // 在制定字符范围内加上反斜杠
  echo addcslashes($str, 'a..z'), '<br/>';
  echo addcslashes($str, 'A..Z'), '<br/>';
?>