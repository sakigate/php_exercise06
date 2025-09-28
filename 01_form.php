<?php

$msg = '';
$err_msg = " ";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $msg = "私は{$_POST['message']}歳です。";

    if (empty($msg)) {
        $err_msg = "未入力です";
    }
}
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>フォームの練習</title>
</head>

<body>
    <h1>POSTメソッド</h1>
    <form action="" method="post">
        <div>
            <label for="">年齢</label><br>
            <input type="text" name="message" value="">

            <?php if (!empty($err_msg)) : ?>

                <p><?= $err_msg ?></p>
            <?php endif; ?>
        </div>
        <div>
            <input type="submit" value="送信">
        </div>
    </form>
    <p><?= htmlspecialchars($msg, ENT_QUOTES, "UTF-8") ?></p>
</body>

</html>