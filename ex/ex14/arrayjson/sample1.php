<?php
$tweet =[
    'ユーザー' => [
        'ユーザー名' => 'さとし',
        '生年月日' => '1992年5月25日',
        'メールアドレス' => 'test@example.com',
        '紹介文' => 'はじめまして、さとしです。美容師やってます。',
        'フォロー中' => 100,
        'フォロワー' => 120
    ],
    '本文' => 'よろしく！',
    '投稿日時' => '2021-07-14 02:00:59.999',
    'いいね' => 1,
    'リツイート数' => 0
];

echo $tweet['ユーザー']['メールアドレス'];


