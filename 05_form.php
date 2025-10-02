<?php

$msg = '';
$err_msg = '';
$msg1 = '';
$msg2 = '';
$msg3 = '';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $msg1 = $_POST["message1"] ?? "";
    $msg2 = $_POST["message2"] ?? "";
    $msg3 = $_POST["message3"] ?? "";

    if ($msg1 === "" || $msg2 === "" || $msg3 === "" || !is_numeric($msg1) || !is_numeric($msg2) || !is_numeric($msg3)) {
        $err_msg = "全てに数字を入力してください";
    } else {
        $sum = $msg1 + $msg2 + $msg3;
        $msg = "合計値は{$sum}です";
    }
}
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>合計値</title>
</head>

<body>
    <h1>数字を入力してください</h1>
    <form action="" method="post">
        <div>
            <?php if (!empty($err_msg)) : ?>
                <ul>
                    <li><?= htmlspecialchars($err_msg, ENT_QUOTES, "UTF-8") ?></li>
                </ul>
            <?php endif; ?>
            <label>１つめの数字</label><br>
            <input type="text" name="message1" value="<?= htmlspecialchars($msg1, ENT_QUOTES, "UTF-8") ?>">
            <br>
            <label>２つめの数字</label><br>
            <input type="text" name="message2" value="<?= htmlspecialchars($msg2, ENT_QUOTES, "UTF-8") ?>">
            <br>
            <label>３つめの数字</label><br>
            <input type="text" name="message3" value="<?= htmlspecialchars($msg3, ENT_QUOTES, "UTF-8") ?>">
        </div>
        <div>
            <input type="submit" value="送信">
        </div>
    </form>
    <p><?= htmlspecialchars($msg, ENT_QUOTES, "UTF-8") ?></p>
</body>

</html>