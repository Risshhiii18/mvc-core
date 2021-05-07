<?php
namespace app\core\form;

use app\core\Model;

/**
 * Class Form
 * @package app\core\form
 */

class Form 
{
    public static function begin($action, $method) 
    {
        echo sprintf('<form action="%s" method="%s">', $action, $method);
        //echo sprintf('<p>%s</p>', $name);
        return new Form();
    }

    public static function end() 
    {
        echo '</form>';
    }

    public function field(Model $model, $attribute)
    {
        return new InputField($model, $attribute);
    }
}

?>