<?php
/**
 * @author Eugene Terentev <eugene@terentev.net>
 */

$cache = [
    'class' => 'yii\caching\FileCache',
    'cachePath' => '@api/runtime/cache'
];

if (YII_DEBUG) {
    $cache = [
        'class' => 'yii\caching\DummyCache'
    ];
}

return $cache;
