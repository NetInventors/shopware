<?php
/**
 * Shopware 4
 * Copyright © shopware AG
 *
 * According to our dual licensing model, this program can be used either
 * under the terms of the GNU Affero General Public License, version 3,
 * or under a proprietary license.
 *
 * The texts of the GNU Affero General Public License with an additional
 * permission and of our proprietary license can be found at and
 * in the LICENSE file you have received along with this program.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Affero General Public License for more details.
 *
 * "Shopware" is a registered trademark of shopware AG.
 * The licensing of the program under the AGPLv3 does not imply a
 * trademark license. Therefore any rights, title and interest in
 * our trademarks remain entirely with us.
 */

namespace Shopware\Bundle\StoreFrontBundle\Struct;

/**
 * @package Shopware\Bundle\StoreFrontBundle\Struct
 */
class Category extends Extendable
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var array
     */
    protected $path;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $metaKeywords;

    /**
     * @var string
     */
    protected $metaDescription;

    /**
     * @var string
     */
    protected $cmsHeadline;

    /**
     * @var string
     */
    protected $cmsText;

    /**
     * @var string
     */
    protected $template;

    /**
     * @var boolean
     */
    protected $blog;

    /**
     * @var boolean
     */
    protected $allowViewSelect;

    /**
     * @var boolean
     */
    protected $displayPropertySets;

    /**
     * @var boolean
     */
    protected $displayFacets;

    /**
     * @var boolean
     */
    protected $displayInNavigation;

    /**
     * @var string
     */
    protected $externalLink;

    /**
     * @var Media
     */
    protected $media;

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param array $path
     */
    public function setPath($path)
    {
        $this->path = $path;
    }

    /**
     * @return array
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $cmsHeadline
     */
    public function setCmsHeadline($cmsHeadline)
    {
        $this->cmsHeadline = $cmsHeadline;
    }

    /**
     * @return string
     */
    public function getCmsHeadline()
    {
        return $this->cmsHeadline;
    }

    /**
     * @param string $cmsText
     */
    public function setCmsText($cmsText)
    {
        $this->cmsText = $cmsText;
    }

    /**
     * @return string
     */
    public function getCmsText()
    {
        return $this->cmsText;
    }

    /**
     * @param string $metaDescription
     */
    public function setMetaDescription($metaDescription)
    {
        $this->metaDescription = $metaDescription;
    }

    /**
     * @return string
     */
    public function getMetaDescription()
    {
        return $this->metaDescription;
    }

    /**
     * @param string $metaKeywords
     */
    public function setMetaKeywords($metaKeywords)
    {
        $this->metaKeywords = $metaKeywords;
    }

    /**
     * @return string
     */
    public function getMetaKeywords()
    {
        return $this->metaKeywords;
    }

    /**
     * @param string $template
     */
    public function setTemplate($template)
    {
        $this->template = $template;
    }

    /**
     * @return string
     */
    public function getTemplate()
    {
        return $this->template;
    }

    /**
     * @param string $externalLink
     */
    public function setExternalLink($externalLink)
    {
        $this->externalLink = $externalLink;
    }

    /**
     * @return string
     */
    public function getExternalLink()
    {
        return $this->externalLink;
    }

    /**
     * @param boolean $allowViewSelect
     */
    public function setAllowViewSelect($allowViewSelect)
    {
        $this->allowViewSelect = $allowViewSelect;
    }

    /**
     * @param boolean $displayFacets
     */
    public function setDisplayFacets($displayFacets)
    {
        $this->displayFacets = $displayFacets;
    }

    /**
     * @param boolean $displayInNavigation
     */
    public function setDisplayInNavigation($displayInNavigation)
    {
        $this->displayInNavigation = $displayInNavigation;
    }

    /**
     * @param boolean $displayPropertySets
     */
    public function setDisplayPropertySets($displayPropertySets)
    {
        $this->displayPropertySets = $displayPropertySets;
    }

    /**
     * @param boolean $blog
     */
    public function setBlog($blog)
    {
        $this->blog = $blog;
    }

    /**
     * @param \Shopware\Bundle\StoreFrontBundle\Struct\Media $media
     */
    public function setMedia($media)
    {
        $this->media = $media;
    }

    /**
     * @return \Shopware\Bundle\StoreFrontBundle\Struct\Media
     */
    public function getMedia()
    {
        return $this->media;
    }

    /**
     * @return boolean
     */
    public function allowViewSelect()
    {
        return $this->allowViewSelect;
    }

    /**
     * @return boolean
     */
    public function isBlog()
    {
        return $this->blog;
    }

    /**
     * @return boolean
     */
    public function displayFacets()
    {
        return $this->displayFacets;
    }

    /**
     * @return boolean
     */
    public function displayInNavigation()
    {
        return $this->displayInNavigation;
    }

    /**
     * @return boolean
     */
    public function displayPropertySets()
    {
        return $this->displayPropertySets;
    }
}
