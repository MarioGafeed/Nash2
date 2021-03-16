<?php


/**
 * Get The Application Locale
 * @return string
 */
function GetLanguage() : string
{
    return App::getLocale();
}

/**
 * Get's The Site Direction
 * @return string
 */
function GetDirection() : string
{
    return GetLanguage() == 'ar' ? 'rtl' : 'ltr';
}

/**
 * Get's The Default Language
 * @return string
 */
function GetDefaultLang() : string
{
    return 'ar';
}

/**
 * if design isRtl
 * @return bool
 */
function isRtl() : bool
{
    return GetLanguage() == 'ar' ? true : false;
}
