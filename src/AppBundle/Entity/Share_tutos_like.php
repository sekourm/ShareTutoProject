<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Share_tutos_like
 */
class Share_tutos_like
{

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $date_stl;

    /**
     * @var boolean
     */
    private $active_stl = 1;

    /**
     * @var \AppBundle\Entity\Share_tutos
     */
    private $LikeTuto;

    /**
     * @var \AppBundle\Entity\Share_users
     */
    private $LikeUsers;


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
     * Set date_stl
     *
     * @param \DateTime $dateStl
     * @return Share_tutos_like
     */
    public function setDateStl($dateStl)
    {
        $this->date_stl = $dateStl;

        return $this;
    }

    /**
     * Get date_stl
     *
     * @return \DateTime 
     */
    public function getDateStl()
    {
        return $this->date_stl;
    }

    /**
     * Set active_stl
     *
     * @param boolean $activeStl
     * @return Share_tutos_like
     */
    public function setActiveStl($activeStl)
    {
        $this->active_stl = $activeStl;

        return $this;
    }

    /**
     * Get active_stl
     *
     * @return boolean 
     */
    public function getActiveStl()
    {
        return $this->active_stl;
    }

    /**
     * Set LikeTuto
     *
     * @param \AppBundle\Entity\Share_tutos $likeTuto
     * @return Share_tutos_like
     */
    public function setLikeTuto(\AppBundle\Entity\Share_tutos $likeTuto = null)
    {
        $this->LikeTuto = $likeTuto;

        return $this;
    }

    /**
     * Get LikeTuto
     *
     * @return \AppBundle\Entity\Share_tutos 
     */
    public function getLikeTuto()
    {
        return $this->LikeTuto;
    }

    /**
     * Set LikeUsers
     *
     * @param \AppBundle\Entity\Share_users $likeUsers
     * @return Share_tutos_like
     */
    public function setLikeUsers(\AppBundle\Entity\Share_users $likeUsers = null)
    {
        $this->LikeUsers = $likeUsers;

        return $this;
    }

    /**
     * Get LikeUsers
     *
     * @return \AppBundle\Entity\Share_users 
     */
    public function getLikeUsers()
    {
        return $this->LikeUsers;
    }

    /**
     * @ORM\PrePersist
     */
    public function insertDateAuto()
    {
        return $this->setDateStl(new \DateTime());
    }
}
