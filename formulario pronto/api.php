<?php

if($_POST){
	foreach (array_keys($_POST) as $key => $value) {
		@$text .= "$value: ".$_POST[$value]."\n";
	}
}

$fp = fopen("C:/xampp/htdocs/form/novo.txt", "wb");

fwrite($fp,$text);

fclose($fp);