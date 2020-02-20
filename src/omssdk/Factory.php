<?php
namespace OmsSdk;

class Factory
{
    public static function make($name, $configs)
    {
        $class = "\\OmsSdk\\Api\\{$name}";
        return new $class($configs);
    }
}
