<?php
/**
 * Created by PhpStorm.
 * User: Inhere
 * Date: 2017/11/18 0018
 * Time: 19:27
 */

namespace PhpComp\Asset\Item;

/**
 * Class JsFile
 * @package PhpComp\Asset\Item
 */
final class JsFile extends FileItem
{
    /**
     * @inheritdoc
     */
    public function __construct($type, $path, bool $local = true, $filter = true, array $attributes = [])
    {
        parent::__construct(self::JS_FILE, $path, $local, $filter, $attributes);
    }

    /**
     * @param bool $wrapperTag
     * @return string
     */
    public function toString($wrapperTag = true): string
    {
        $path = $this->getPath();

        if ($wrapperTag) {
            return sprintf('<script src="%s" %s></script>', $path, $this->buildAttributes());
        }

        return $path;
    }
}
