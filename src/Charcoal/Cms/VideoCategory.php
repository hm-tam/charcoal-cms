<?php

namespace Charcoal\Cms;

// From 'charcoal-object'
use Charcoal\Object\Content;
use Charcoal\Object\CategoryInterface;
use Charcoal\Object\CategoryTrait;

// From 'charcoal-cms'
use Charcoal\Cms\Video;

/**
 * Video Category
 */
final class VideoCategory extends Content implements CategoryInterface
{
    use CategoryTrait;

    /**
     * CategoryTrait > itemType()
     *
     * @return string
     */
    public function itemType()
    {
        return Video::class;
    }

    /**
     * @return \Charcoal\Model\Collection|array
     */
    public function loadCategoryItems()
    {
        return [];
    }
}