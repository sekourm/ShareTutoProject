<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Share_tutos_view
 */
class Share_tutos_view
{
  
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $date_stv;

    /**
     * @var \AppBundle\Entity\Share_tutos
     */
    private $ViewTuto;

    /**
     * @var \AppBundle\Entity\Share_users
     */
    private $ViewUsers;


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
     * Set date_stv
     *
     * @param \DateTime $dateStv
     * @return Share_tutos_view
     */
    public function setDateStv($dateStv)
    {
        $this->date_stv = $dateStv;

        return $this;
    }

    /**
     * Get date_stv
     *
     * @return \DateTime 
     */
    public function getDateStv()
    {
        return $this->date_stv;
    }

    /**
     * Set ViewTuto
     *
     * @param \AppBundle\Entity\Share_tutos $viewTuto
     * @return Share_tutos_view
     */
    public function setViewTuto(\AppBundle\Entity\Share_tutos $viewTuto = null)
    {
        $this->ViewTuto = $viewTuto;

        return $this;
    }

    /**
     * Get ViewTuto
     *
     * @return \AppBundle\Entity\Share_tutos 
     */
    public function getViewTuto()
    {
        return $this->ViewTuto;
    }

    /**
     * Set ViewUsers
     *
     * @param \AppBundle\Entity\Share_users $viewUsers
     * @return Share_tutos_view
     */
    public function setViewUsers(\AppBundle\Entity\Share_users $viewUsers = null)
    {
        $this->ViewUsers = $viewUsers;

        return $this;
    }

    /**
     * Get ViewUsers
     *
     * @return \AppBundle\Entity\Share_users 
     */
    public function getViewUsers()
    {
        return $this->ViewUsers;
    }
}
