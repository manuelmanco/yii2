<?php
Yii::setAlias('@common', dirname(__DIR__));
Yii::setAlias('@frontend', dirname(dirname(__DIR__)) . '/frontend');
Yii::setAlias('@backend', dirname(dirname(__DIR__)) . '/backend');
Yii::setAlias('@api', dirname(dirname(__DIR__)) . '/api');
Yii::setAlias('@console', dirname(dirname(__DIR__)) . '/console');
Yii::setAlias('@upload', realpath(__DIR__.'/../../upload'));

Yii::setAlias('@uploadUrl', 'http://localhost/php/yii2starter/upload/web/source');
//Yii::setAlias('@uploadUrl', 'http://yourdomain/upload/web/source');

/**
 * @return int|string
 */
function getMyId()
{
    return Yii::$app->user->getId();
}
function getStorageBaseUrl()
{
    return Yii::$app->fileStorage->baseUrl;
}

function isHomePage(){
    return Yii::$app->controller->getUniqueId();
}


function getParam($name, $defaultValue = null)
{
    return Yii::$app->request->get($name, $defaultValue);
}

function postParam($name, $defaultValue = null)
{
    return Yii::$app->request->post($name, $defaultValue);
}

function isAjax(){
    return Yii::$app->request->isAjax;
}

function isPost(){
    return Yii::$app->request->isPost;
}


function php_dump($data){
    echo "<pre>";
    var_dump($data);
    die;
}