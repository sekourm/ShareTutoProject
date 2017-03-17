<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Share_categories
 */
class Share_categories
{

    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name_sca;

    /**
     * @var string
     */
    private $logo_sca;

    /**
     * @var boolean
     */
    private $active_sca;

    /**
     * @var \DateTime
     */
    private $created_at_sca;

    /**
     * @var \DateTime
     */
    private $updated_at_sca;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $CategoriesTutos;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->CategoriesTutos = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name_sca
     *
     * @param string $nameSca
     * @return Share_categories
     */
    public function setNameSca($nameSca)
    {
        $this->name_sca = $nameSca;

        return $this;
    }

    /**
     * Get name_sca
     *
     * @return string 
     */
    public function getNameSca()
    {
        return $this->name_sca;
    }

    /**
     * Set logo_sca
     *
     * @param string $logoSca
     * @return Share_categories
     */
    public function setLogoSca($logoSca)
    {
        $this->logo_sca = $logoSca;

        return $this;
    }

    /**
     * Get logo_sca
     *
     * @return string 
     */
    public function getLogoSca()
    {
        return $this->logo_sca;
    }

    /**
     * Set active_sca
     *
     * @param boolean $activeSca
     * @return Share_categories
     */
    public function setActiveSca($activeSca)
    {
        $this->active_sca = $activeSca;

        return $this;
    }

    /**
     * Get active_sca
     *
     * @return boolean 
     */
    public function getActiveSca()
    {
        return $this->active_sca;
    }

    /**
     * Set created_at_sca
     *
     * @param \DateTime $createdAtSca
     * @return Share_categories
     */
    public function setCreatedAtSca($createdAtSca)
    {
        $this->created_at_sca = $createdAtSca;

        return $this;
    }

    /**
     * Get created_at_sca
     *
     * @return \DateTime 
     */
    public function getCreatedAtSca()
    {
        return $this->created_at_sca;
    }

    /**
     * Set updated_at_sca
     *
     * @param \DateTime $updatedAtSca
     * @return Share_categories
     */
    public function setUpdatedAtSca($updatedAtSca)
    {
        $this->updated_at_sca = $updatedAtSca;

        return $this;
    }

    /**
     * Get updated_at_sca
     *
     * @return \DateTime 
     */
    public function getUpdatedAtSca()
    {
        return $this->updated_at_sca;
    }

    /**
     * Add CategoriesTutos
     *
     * @param \AppBundle\Entity\Share_tutos $categoriesTutos
     * @return Share_categories
     */
    public function addCategoriesTuto(\AppBundle\Entity\Share_tutos $categoriesTutos)
    {
        $this->CategoriesTutos[] = $categoriesTutos;

        return $this;
    }

    /**
     * Remove CategoriesTutos
     *
     * @param \AppBundle\Entity\Share_tutos $categoriesTutos
     */
    public function removeCategoriesTuto(\AppBundle\Entity\Share_tutos $categoriesTutos)
    {
        $this->CategoriesTutos->removeElement($categoriesTutos);
    }

    /**
     * Get CategoriesTutos
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCategoriesTutos()
    {
        return $this->CategoriesTutos;
    }
}
