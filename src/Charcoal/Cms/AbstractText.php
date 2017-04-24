<?php

namespace Charcoal\Cms;

// From 'charcoal-object'
use Charcoal\Object\Content;
use Charcoal\Object\CategorizableInterface;
use Charcoal\Object\CategorizableTrait;
use Charcoal\Object\PublishableInterface;
use Charcoal\Object\PublishableTrait;

// From 'charcoal-translator'
use Charcoal\Translator\Translation;

// From 'charcoal-cms'
use Charcoal\Cms\SearchableInterface;
use Charcoal\Cms\SearchableTrait;
use Charcoal\Cms\TextInterface;

/**
 * Text
 */
abstract class AbstractText extends Content implements
    CategorizableInterface,
    PublishableInterface,
    SearchableInterface,
    TextInterface
{
    use CategorizableTrait;
    use PublishableTrait;
    use SearchableTrait;

    /**
     * @var Translation|string|null
     */
    private $title;

    /**
     * @var Translation|string|null
     */
    private $subtitle;

    /**
     * @var Translation|string|null
     */
    private $content;

    /**
     * @param  mixed $title The news title (localized).
     * @return TextInterface
     */
    public function setTitle($title)
    {
        $this->title = $this->translator()->translation($title);
        return $this;
    }

    /**
     * @return Translation|string|null
     */
    public function title()
    {
        return $this->title;
    }

    /**
     * @param  mixed $subtitle The news subtitle (localized).
     * @return self
     */
    public function setSubtitle($subtitle)
    {
        $this->subtitle = $this->translator()->translation($subtitle);
        return $this;
    }

    /**
     * @return Translation|string|null
     */
    public function subtitle()
    {
        return $this->subtitle;
    }

    /**
     * @param  mixed $content The news content (localized).
     * @return self
     */
    public function setContent($content)
    {
        $this->content = $this->translator()->translation($content);
        return $this;
    }

    /**
     * @return Translation|string|null
     */
    public function content()
    {
        return $this->content;
    }
}