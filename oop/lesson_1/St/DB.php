<?php
// паттерн синглтон позволяет соединяться с бд 
// одним коннектом
class DB {
    static $object;
    static $connect;

    private function __construct()
    {
        // DB::$connect= mysqli_connect()
    }

    public static function getObject(){
        if(DB::$object == null) {
            DB::$object = new DB;
        }
        return DB::$object;
    }


}


class Goods{
    function getGoods(){
        $goods = DB::getObject()->select;
    }
}



?>