<?php
  // array_multisort() 函数返回一个排序数组。您可以输入一个或多个数组。函数先对第一个数组进行排序，接着是其他数组，如果两个或多个值相同，它将对下一个数组进行排序。
  // 注释：字符串键名将被保留，但是数字键名将被重新索引，从 0 开始，并以 1 递增。
  // 注释：您可以在每个数组后设置排序顺序和排序类型参数。如果没有设置，每个数组参数会使用默认值。

  //  array_multisort(array1,sorting order,sorting type,array2,array3...) 
  // sorting order	可选。规定排列顺序。可能的值：
                    // SORT_ASC - 默认。按升序排列 (A-Z)。
                    // SORT_DESC - 按降序排列 (Z-A)。
  // sorting type	可选。规定排序类型。可能的值：
                  // SORT_REGULAR - 默认。把每一项按常规顺序排列（Standard ASCII，不改变类型）。
                  // SORT_NUMERIC - 把每一项作为数字来处理。
                  // SORT_STRING - 把每一项作为字符串来处理。
                  // SORT_LOCALE_STRING - 把每一项作为字符串来处理，基于当前区域设置（可通过 setlocale() 进行更改）。
                  // SORT_NATURAL - 把每一项作为字符串来处理，使用类似 natsort() 的自然排序。
                  // SORT_FLAG_CASE - 可以结合（按位或）SORT_STRING 或 SORT_NATURAL 对字符串进行排序，不区分大小写。
  $arr1 = array(5,34,2,8);
  $arr2 = array('ad','Dfad','ghk','Ydfh');
  array_multisort($arr1);
  array_multisort($arr2);
  print_r($arr1);
  print_r($arr2);