<?php
/**
 * Created by PhpStorm.
 * User: Inhere
 * Date: 2017/11/18 0018
 * Time: 19:41
 */

namespace Inhere\Asset\Filter;

use Inhere\Asset\FilterInterface;

/**
 * Class JsMinify
 * @package Inhere\Asset\Filter
 */
class JsMinify implements FilterInterface
{
    /**
     * @param string $content
     * @return string
     */
    public function filter(string $content): string
    {
        return $content;
    }
}