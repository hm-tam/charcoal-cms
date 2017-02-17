<?php

namespace Charcoal\Cms;

// Module `charcoal-base` dependencies
use Charcoal\Object\Content;
use Charcoal\Object\CategoryInterface;
use Charcoal\Object\CategoryTrait;

use Charcoal\Cms\Image;

/**
 *
 */
final class ImageCategory extends Content implements CategoryInterface
{
    use CategoryTrait;

    /**
     * CategoryTrait > itemType()
     *
     * @return string
     */
    public function itemType()
    {
        return Image::class;
    }

    /**
     * @return Collection
     */
    public function loadCategoryItems()
    {
        return [];
    }
}