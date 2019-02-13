<?php
/**
 * Created by PhpStorm.
 * User: Mangust
 * Date: 13.02.2019
 * Time: 22:07
 */

class GuestBook
{
    private $records;
    private $path;



    public function __construct($fn)
    {
        $this->records = file($fn,2);
    }

    public function getData()
    {
        return $this->records;
    }

    public function append($text)
    {
        $this->records[] = $text;
    }

    public function save($fn)
    {
        file_put_contents($fn,implode(PHP_EOL,$this->records));

    }

}