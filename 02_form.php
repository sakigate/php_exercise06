<?php

$name = '';
$err_msg = " ";

?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>フォームの練習2</title>
</head>

<body>
    <form action="02_result.php" method="post">
        <div>
            <label for="">名前</label>
            <input type="text" name="message" value="">

            <?php if (!empty($err_msg)) : ?>
                <p><?= $err_msg ?></p>
            <?php endif; ?>
        </div>
        <div>
            <input type="submit" value="送信">
        </div>
    </form>
    <p><?= htmlspecialchars($name, ENT_QUOTES, "UTF-8") ?></p>
</body>

</html>