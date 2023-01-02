<?php
require_once __DIR__ . '/ISingleton.php';

final class Mail implements ISingleton
{
    private static $o_singleton;
    private const FROM_ADDRESS = 'example@gmail.com';
    private int $i_hoge;

    private function __construct(int $hoge)
    {
        $this->i_hoge = $hoge;
    }

    public static function get_instance():self
    {
        if(!isset(self::$o_singleton)){
            self::$o_singleton = new Mail(100);
        }

        return self::$o_singleton;
    }
}
