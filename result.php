<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo "私の名前は{$_POST['message']}です。";
}
