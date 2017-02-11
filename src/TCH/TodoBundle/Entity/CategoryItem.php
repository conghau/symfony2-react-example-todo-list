<?php

namespace TCH\TodoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * CategoryItem
 *
 * @ORM\Table(name="category_item")
 * @ORM\Entity(repositoryClass="TCH\TodoBundle\Repository\CategoryItemRepository")
 */
class CategoryItem extends BaseTCHEntity
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
     * @var int
     * @ORM\Column(name="category_id", type="integer")
     */
    protected $categoryId;

    /**
     * Many Features have One Product.
     *
     * @var Category $category
     * @ORM\ManyToOne(targetEntity="TCH\TodoBundle\Entity\Category", inversedBy="CategoryItem")
     * @ORM\JoinColumn(name="category_id", referencedColumnName="id")
     */
    protected $category;

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
     * @return int
     */
    public function getCategoryId()
    {
        return $this->categoryId;
    }

    /**
     * @param int $categoryId
     */
    public function setCategoryId($categoryId)
    {
        $this->categoryId = $categoryId;
    }

    /**
     * @return mixed
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param mixed $category
     */
    public function setCategory($category)
    {
        $this->category = $category;
    }
}
