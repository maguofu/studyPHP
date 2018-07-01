<?php
  // htmlentities() 函数把字符转换为 HTML 实体。
  // 提示：要把 HTML 实体转换回字符，请使用html_entity_decode() 函数。
  // 提示：请使用get_html_translation_table() 函数来返回 htmlentities() 使用的翻译表。
  $str = 'Hello PHP!I am learning you.';
  print_r(htmlentities($str));
?>