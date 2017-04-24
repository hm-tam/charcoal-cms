<?php

namespace Charcoal\Cms;

// From 'charcoal-cms'
use Charcoal\Cms\AbstractDocument;
use Charcoal\Cms\DocumentCategory;

/**
 *
 */
final class Document extends AbstractDocument
{
    /**
     * @return string
     */
    public function categoryType()
    {
        return DocumentCategory::class;
    }
}