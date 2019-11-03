<?php
class contohStatis
{
    public static $angka = 1;
    public static function halo()
    {
        return "Halo " . self::$angka++ . "kali";
    }
}

echo contohStatis::$angka; #properti statis
echo "<hr>";
echo contohStatis::halo(); #metodh statis
echo "<hr>";
echo contohStatis::halo();
