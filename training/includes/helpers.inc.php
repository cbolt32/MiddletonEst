<?php
/**
 * Created by PhpStorm.
 * User: Chris
 * Date: 12/12/2015
 * Time: 23:42
 */
function html($text)
{
    return htmlspecialchars($text, ENT_QUOTES, 'UTF-8');
}
function htmlout($text)
{
    echo html($text);
}