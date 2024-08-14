<?php 

$text = "<h3>ES muy facil</h3>";

$text = mb_convert_case( $text, MB_CASE_LOWER,"UTF-8");
echo $text;

$text = mb_convert_case( $text, MB_CASE_UPPER,"UTF-8");
echo $text;