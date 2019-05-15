<?php

// 定义一个变量
$a = range(0, 1000);
var_dump(memory_get_usage());

// 定义变量b，将a变量的值赋给b
// COW Copy On Write（对$a或$b有修改操作，才会进行copy）
$b = $a;
var_dump(memory_get_usage());

// 对a进行修改
$a = range(0, 1000);
var_dump(memory_get_usage());
