<?php
namespace Tools;
/**
 * Class ViewHelper
 */
class ViewHelper
{
    public static function getImgsFilePath()
    {
        return $_SERVER["DOCUMENT_ROOT"] . SITE_TEMPLATE_PATH . "/img";
    }

    public static function getIconsFilePath()
    {
        return self::getImgsFilePath() . "/icons";
    }

    public static function getSvg($path)
    {
        return file_get_contents($path);
    }

    public static function getSvgIcon($name)
    {
        return file_get_contents(self::getIconsFilePath() . '/' . $name . ".svg");
    }

    public static function includeCommonBlock($name)
    {
        include $_SERVER['DOCUMENT_ROOT'] . '/include/blocks/' . $name . '.php';
    }
    
    public static function includeForm($name)
    {
        include $_SERVER['DOCUMENT_ROOT'] . '/include/forms/' . $name . '.php';
    }

    public static function getImgsPath()
    {
        return SITE_TEMPLATE_PATH . "/img";
    }

    public static function getIconsPath()
    {
        return self::getImgsPath() . "/icons";
    }

    public static function getIcon($name)
    {
        return self::getIconsPath() . '/' . $name;
    }

    public static function getImg($name)
    {
        return self::getImgsPath() . '/' . $name;
    }
}
