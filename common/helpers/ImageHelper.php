<?php
namespace common\helpers;
/**
 * Created by PhpStorm.
 * User: dungpx
 * Date: 5/22/2016
 * Time: 9:48 PM
 */
use Yii;
use yii\helpers\Inflector;

/**
 * Collection of useful helper functions for Yii Applications
 *
 * @author Kartik Visweswaran <kartikv2@gmail.com>
 * @since 1.0
 *
 */
class ImageHelper extends Inflector
{
    public static function getImageWH($image_url)
    {
        $data_Image = array();
        list($width, $height, $type, $attr) = getimagesize($image_url);
        $data_Image['w']  =  $width;
        $data_Image['h']  =  $height;
        return $data_Image;
    }
}