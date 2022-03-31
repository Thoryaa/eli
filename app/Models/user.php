<?php
namespace coding\app\models;



class User extends Model{
   

    function __construct()
    {
        parent::$tblName="users";//اسم الجدول في قاعدة البيانات
        
    }
//اسند القيمة
    function __set($name, $value)
    {
        $this->$name=$value;
        
    }

}