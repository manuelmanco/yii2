<?php

/**
 * @copyright Laptrinhphp 2016
 * @version 1.0
 */

namespace common\helpers;

use api\models\SignupForm;
use common\models\App;
use common\models\Article;
use common\models\User;
use kartik\markdown\Markdown;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Yii;
use yii\data\ActiveDataProvider;
use yii\helpers\Inflector;
use Auth0\SDK\Auth0;
use yii\helpers\Json;

/**
 * Collection of useful helper functions for Yii Applications
 *
 * @author dungphanxuan <dungpx.na@gmail.vn>
 * @since 1.0
 *
 */
class DataHelper extends Inflector
{

    /*Get All Data*/

    public static function getAppData($app_id)
    {
        $get_limit = getParam('limit', '');
        $data = [];

        /** @var App $appModel */
        $appModel = App::findOne($app_id);
        if($appModel){
            switch($appModel->id){
                case $appModel->data_type == App::DATA_LOCAL:
                    $data['items'] = AppHelper::getAppLocalData($app_id, $get_limit);
                    break;
                case $appModel->data_type == App::DATA_STREAM:
                    $data['items'] = AppHelper::getAppLocalData($app_id, $get_limit);
                    break;
                case $appModel->data_type == App::DATA_API:
                    $data['items'] = AppHelper::getAppLocalData($app_id, $get_limit);
                    break;
            }

        }else{
            throw new NotFoundHttpException('The requested page does not exist.');
        }
        return $data;
    }





}