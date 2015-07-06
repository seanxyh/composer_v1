<?php
namespace Composer_v1;

Class Tools extends Base
{

    /**
     * @return Tools
     */
    public static function Instance()
    {
        return parent::Instance();
    }

    public function getIp()
    {
        return '127.0.0.1';
    }
}
