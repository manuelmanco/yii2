<?php
/**
 * Created by PhpStorm.
 * User: developer
 * Date: 4/11/2016
 * Time: 11:30 AM
 */
namespace common\helpers;

use Facebook\Facebook;
use Yii;
use yii\helpers\Inflector;

/**
 * Collection of useful helper functions for Yii Applications
 *
 * @author Dung Phan Xuan <dungpx.s@gmail.com>
 * @since 1.0
 *
 */
class FacebookHelper extends Inflector
{
    public static function getPost($page_id)
    {
        $app_id = '1722470388040715';
        $app_secret = 'dfb6103f9a872bae0b2ae1387aff0c34';
        $facebookPageId = '1135922939762286';
        $fb = new Facebook([
            'app_id' => $app_id,
            'app_secret' => $app_secret,
            'default_graph_version' => 'v2.5',
        ]);
        $access_token = $fb->getApp()->getAccessToken();
        $app_session = '1722470388040715|JVbq2Z-zzF5ua3pGvc1eH6TlOug';
        if (isset($access_token)) {
            $app_session = $access_token->getValue();
        }
        # GET request in v5
        $response = $fb->get('/' . $page_id . '/posts?limit=8&fields=full_picture,link,created_time,name,message', $app_session);

        $data = $response->getDecodedBody()['data'];
        return $data;

    }
}