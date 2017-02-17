<?php

namespace Charcoal\Cms;

use Charcoal\Translation\TranslationString;

/**
*
*/
trait MetatagTrait
{
    /**
     * @var TranslationString $metaTitle
     */
    protected $metaTitle;
    /**
     * @var TranslationString $metaDescription
     */
    protected $metaDescription;
    /**
     * @var TranslationString $metaImage
     */
    protected $metaImage;
    /**
     * @var TranslationString $metaAuthor
     */
    protected $metaAuthor;

    /**
     * @var string $facebookAppId
     */
    protected $facebookAppId;

    /**
     * @var TranslationString $opengraphTitle
     */
    protected $opengraphTitle;

    /**
     * @var TranslationString $siteName
     */
    protected $opengraphSiteName;

    /**
     * @var TranslationString $opengraphDescription
     */
    protected $opengraphDescription;

    /**
     * @var string $opengraphType
     */
    protected $opengraphType;

    /**
     * @var TranslationString $opengraphImage
     */
    protected $opengraphImage;

    /**
     * @var TranslationString $opengraphAuthor
     */
    protected $opengraphAuthor;

    /**
     * @var TranslationString $opengraphPublisher
     */
    protected $opengraphPublisher;


    /**
     * @return string
     */
    abstract public function canonicalUrl();

    /**
     * @return TranslationString
     */
    abstract public function defaultMetaTitle();

    /**
     * @return TranslationString
     */
    abstract public function defaultMetaDescription();

    /**
     * @return TranslationString
     */
    abstract public function defaultMetaImage();

    /**
     * @param mixed $title The meta tile (localized).
     * @return MetatagInterface Chainable
     */
    public function setMetaTitle($title)
    {
        $this->metaTitle = new TranslationString($title);
        return $this;
    }

    /**
     * @return TranslationString
     */
    public function metaTitle()
    {
        return $this->metaTitle;
    }

    /**
     * @param mixed $description The meta description (localized).
     * @return MetatagInterface Chainable
     */
    public function setMetaDescription($description)
    {
        $this->metaDescription = new TranslationString($description);
        return $this;
    }

    /**
     * @return TranslationString
     */
    public function metaDescription()
    {
        return $this->metaDescription;
    }

    /**
     * @param mixed $image The meta image (localized).
     * @return MetatagInterface Chainable
     */
    public function setMetaImage($image)
    {
        $this->metaImage = new TranslationString($image);
        return $this;
    }

    /**
     * @return TranslationString
     */
    public function metaImage()
    {
        return $this->metaImage;
    }

    /**
     * @param mixed $author The meta author (localized).
     * @return MetatagInterface Chainable
     */
    public function setMetaAuthor($author)
    {
        $this->metaAuthor = new TranslationString($author);
        return $this;
    }

    /**
     * @return TranslationString
     */
    public function metaAuthor()
    {
        return $this->metaAuthor;
    }

    /**
     * @return string
     */
    public function metaTags()
    {
        $tags = '';
        return $tags;
    }

    /**
     * @param string $appId The facebook App ID (numeric string).
     * @return MetatagInterface Chainable
     */
    public function setFacebookAppId($appId)
    {
        $this->facebookAppId = $appId;
        return $this;
    }

    /**
     * @return string
     */
    public function facebookAppId()
    {
        return $this->facebookAppId;
    }

    /**
     * @param mixed $title The opengraph title (localized).
     * @return MetatagInterface Chainable
     */
    public function setOpengraphTitle($title)
    {
        $this->opengraphTitle = new TranslationString($title);
        return $this;
    }

    /**
     * Get the opengraph title.
     *
     * If not expilicitely defined, use the meta title as opengraph title.
     *
     * @return TranslationString
     */
    public function opengraphTitle()
    {
        if (!$this->opengraphTitle) {
            return $this->metaTitle();
        }
        return $this->opengraphTitle;
    }

    /**
     * @param mixed $siteName The site name (localized).
     * @return MetatagInterface Chainable
     */
    public function setOpengraphSiteName($siteName)
    {
        $this->opengraphSiteName = new TranslationString($siteName);
        return $this;
    }

    /**
     * @return TranslationString
     */
    public function opengraphSiteName()
    {
        return $this->opengraphSiteName;
    }

    /**
     * @param mixed $description The opengraph description (localized).
     * @return MetatagInterface Chainable
     */
    public function setOpengraphDescription($description)
    {
        $this->opengraphDescription = new TranslationString($description);
        return $this;
    }

    /**
     * @return TranslationString
     */
    public function opengraphDescription()
    {
        if (!$this->opengraphDescription) {
            return $this->metaDescription();
        }
        return $this->opengraphDescription;
    }

    /**
     * @param string $type The opengraph type.
     * @return MetatagInterface Chainable
     */
    public function setOpengraphType($type)
    {
        $this->opengraphType = $type;
        return $this;
    }

    /**
     * @return string
     */
    public function opengraphType()
    {
        return $this->opengraphType;
    }

    /**
     * @param mixed $image The opengraph image (localized).
     * @return MetatagInterface Chainable
     */
    public function setOpengraphImage($image)
    {
        $this->opengraphImage = new TranslationString($image);
        return $this;
    }

    /**
     * @return TranslationString
     */
    public function opengraphImage()
    {
        if (!$this->opengraphImage) {
            return $this->metatagImage();
        }
        return $this->opengraphImage;
    }

    /**
     * @param mixed $author The opengraph author (localized).
     * @return MetatagInterface Chainable
     */
    public function setOpengraphAuthor($author)
    {
        $this->opengraphAuthor = new TranslationString($author);
        return $this;
    }

    /**
     * @return TranslationString
     */
    public function opengraphAuthor()
    {
        if (!$this->opengraphAuthor) {
            return $this->metaAuthor();
        }
        return $this->opengraphAuthor;
    }

    /**
     * @param mixed $publisher The opengraph publisher (localized).
     * @return MetatagInterface Chainable
     */
    public function setOpengraphPulisher($publisher)
    {
        $this->opengraphPublisher = new TranslationString($publisher);
        return $this;
    }

    /**
     * @return TranslationString
     */
    public function opengraphPublisher()
    {
        if (!$this->opengraphPublisher) {
            return $this->opengraphAuthor();
        }
        return $this->opengraphPublisher;
    }

    /**
     * @return string
     */
    public function opengraphTags()
    {
        return '';
    }

    /**
     * Generates the default metatags for the current object.
     * Prevents some problem where the defaultMetaTag method
     * content isn't set at the moment of setting the meta.
     * Should be called on preSave and preUpdate of the object.
     * @return self $this.
     */
    public function generateDefaultMetaTags()
    {
        if ($this->isEmptyMeta($this->metaTitle)) {
            $this->setMetaTitle($this->defaultMetaTitle());
        }
        if ($this->isEmptyMeta($this->metaDescription)) {
            $this->setMetaDescription($this->defaultMetaDescription());
        }
        if ($this->isEmptyMeta($this->metaImage)) {
            $this->setMetaImage($this->defaultMetaImage());
        }
        return $this;
    }

    /**
     * Check if the meta is empty. Method exists
     * because at this point we don't really know
     * what's in the meta.
     * Possible param type:
     * - [ lang => value, lang => value ]
     * - TranslationString
     * - null
     * @param  mixed $meta Current meta value.
     * @return boolean       Empty or not.
     */
    public function isEmptyMeta($meta)
    {
        if (!$meta) {
            return true;
        }

        // From back-end form which post meta_description[lang]=value
        // Gives [ lang => value ] as value
        if (is_array($meta)) {
            $meta = new TranslationString($meta);
        }

        // If one value is set in whatever language,
        // this is NOT empty.
        if ($meta instanceof TranslationString) {
            $empty = true;
            foreach ($meta->all() as $lang => $val) {
                if ($val && $val != '') {
                    $empty = false;
                }
            }
            return $empty;
        }
        return true;
    }
}