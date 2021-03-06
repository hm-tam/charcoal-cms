<?php

namespace Charcoal\Cms;

// From 'charcoal-translator'
use Charcoal\Translator\Translation;

/**
 *
 */
interface MetatagInterface
{
    /**
     * @return string
     */
    public function canonicalUrl();

    /**
     * @return Translation|string|null
     */
    public function defaultMetaTitle();

    /**
     * @return Translation|string|null
     */
    public function defaultMetaDescription();

    /**
     * @return Translation|string|null
     */
    public function defaultMetaImage();

    /**
     * @param  mixed $title The meta title (localized).
     * @return self
     */
    public function setMetaTitle($title);

    /**
     * @return Translation|string|null
     */
    public function metaTitle();

    /**
     * @param  mixed $description The meta description (localized).
     * @return self
     */
    public function setMetaDescription($description);

    /**
     * @return Translation|string|null
     */
    public function metaDescription();

    /**
     * @param  mixed $image The meta image (localized).
     * @return self
     */
    public function setMetaImage($image);

    /**
     * @return Translation|string|null
     */
    public function metaImage();

    /**
     * @param  mixed $author The meta author (localized).
     * @return self
     */
    public function setMetaAuthor($author);

    /**
     * @return Translation|string|null
     */
    public function metaAuthor();

    /**
     * @return string
     */
    public function metaTags();

    /**
     * @param  string $appId The facebook App ID (numeric string).
     * @return self
     */
    public function setFacebookAppId($appId);

    /**
     * @return string
     */
    public function facebookAppId();

    /**
     * @param  mixed $title The opengraph title (localized).
     * @return self
     */
    public function setOpengraphTitle($title);

    /**
     * @return Translation|string|null
     */
    public function opengraphTitle();

    /**
     * @param  mixed $siteName The opengraph site name (localized).
     * @return self
     */
    public function setOpengraphSiteName($siteName);

    /**
     * @return Translation|string|null
     */
    public function opengraphSiteName();

    /**
     * @param  mixed $description The opengraph description (localized).
     * @return self
     */
    public function setOpengraphDescription($description);

    /**
     * @return Translation|string|null
     */
    public function opengraphDescription();

    /**
     * @param  string $type The opengraph type.
     * @return self
     */
    public function setOpengraphType($type);

    /**
     * @return string
     */
    public function opengraphType();

    /**
     * @param  mixed $image The opengraph image (localized).
     * @return self
     */
    public function setOpengraphImage($image);

    /**
     * @return Translation|string|null
     */
    public function opengraphImage();

    /**
     * @param  mixed $author The opengraph author (localized).
     * @return self
     */
    public function setOpengraphAuthor($author);

    /**
     * @return Translation|string|null
     */
    public function opengraphAuthor();

    /**
     * @param  mixed $publisher The opengraph publisher (localized).
     * @return MetatagInterface
     */
    public function setOpengraphPulisher($publisher);

    /**
     * @return Translation|string|null
     */
    public function opengraphPublisher();

    /**
     * @return string
     */
    public function opengraphTags();
}
