<?php
$name = htmlspecialchars($_POST['name'], ENT_QUOTES);
print $name . "さん登録ありがとうございます";