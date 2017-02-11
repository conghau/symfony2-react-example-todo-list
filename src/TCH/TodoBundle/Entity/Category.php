<?php

namespace TCH\TodoBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * Category
 *
 * @ORM\Table(name="category")
 * @ORM\Entity(repositoryClass="TCH\TodoBundle\Repository\CategoryRepository")
 */
class Category extends BaseTCHEntity
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @Groups({"category"})
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255)
     * @Groups({"category"})
     */
    protected $title;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=1000)
     * @Groups({"category"})
     */
    protected $description;

    /**
     * @ORM\OneToMany(targetEntity="CategoryItem", mappedBy="category")
     * @Groups({"category"})
     */
    protected $categoryItem;

    /**
     * Category constructor.
     */
    public function __construct()
    {
        $this->categoryItem = new ArrayCollection();
    }

    /**
     * Set title
     *
     * @param string $title
     * @return Category
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Category
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return mixed
     */
    public function getCategoryItem()
    {
        return $this->categoryItem;
    }

    /**
     * @param mixed $categoryItem
     */
    public function setCategoryItem($categoryItem)
    {
        $this->categoryItem = $categoryItem;
    }
}
