<?php

include $_SERVER['DOCUMENT_ROOT'] . '/include/Db.php';

use Handlers\Db;


if (!empty($_POST['submit'])) {
    if (!empty($_POST['author'] && !empty($_POST['text']))) {
        $db = new Db();
        $db->setData($_POST);
    } else {
        $data['type_message'] = 'error';
        $data['message'] = (empty($_POST['author']) && empty($_POST['text'])) ? 'Заполните имя и текст сообщения' : (empty($_POST['author']) ? 'Заполните имя' : 'Введите текст сообщения');
    }
}

$db = $db ?? new Db();
$data['data'] = $db->getData();
$db->closeConnect();

