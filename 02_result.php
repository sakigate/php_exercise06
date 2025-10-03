<?php

$name = '';
$err_msg = " ";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo "私の名前は{$_POST['message']}です。";
}
?>

<p><a href="02_form.php">戻る</a></p>