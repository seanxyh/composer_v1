<?php
namespace Composer_v1;


Class Base
{
    static $instance;

    public static function Instance()
    {
        $class = get_called_class();
        if (empty(self::$instance[$class]))
        {
            self::$instance[$class] = new $class;
        }

        return self::$instance[$class];
    }
}
