<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Share_tutos_files
 */
class Share_tutos_files
{
    /**
     * @var int
     */
    private $id;

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
     * @var \AppBundle\Entity\Share_tutos
     */
    private $FilesTuto;

    /**
     * Set FilesTuto
     *
     * @param \AppBundle\Entity\Share_tutos $filesTuto
     * @return Share_tutos_files
     */
    public function setFilesTuto(\AppBundle\Entity\Share_tutos $filesTuto = null)
    {
        $this->FilesTuto = $filesTuto;

        return $this;
    }

    /**
     * Get FilesTuto
     *
     * @return \AppBundle\Entity\Share_tutos 
     */
    public function getFilesTuto()
    {
        return $this->FilesTuto;
    }
    /**
     * @var string
     */
    private $name_stf;
    

    /**
     * Set name_stf
     *
     * @param string $nameStf
     * @return Share_tutos_files
     */
    public function setNameStf($nameStf)
    {
        $this->name_stf = $nameStf;

        return $this;
    }

    /**
     * Get name_stf
     *
     * @return string 
     */
    public function getNameStf()
    {
        return $this->name_stf;
    }

    /**
     * Set real_name_stf
     *
     * @param string $realNameStf
     * @return Share_tutos_files
     */
    public function setRealNameStf($realNameStf)
    {
        $this->real_name_stf = $realNameStf;

        return $this;
    }

    /**
     * Get real_name_stf
     *
     * @return string 
     */
    public function getRealNameStf()
    {
        return $this->real_name_stf;
    }
    /**
     * @var string
     */
    private $real_name_stf;

    /**
     * @var boolean
     */
    private $active_stf = 1;

    /**
     * @var \DateTime
     */
    private $created_at_stf;

    /**
     * @var \DateTime
     */
    private $updated_at_stf;


    /**
     * Set active_stf
     *
     * @param boolean $activeStf
     * @return Share_tutos_files
     */
    public function setActiveStf($activeStf)
    {
        $this->active_stf = $activeStf;

        return $this;
    }

    /**
     * Get active_stf
     *
     * @return boolean 
     */
    public function getActiveStf()
    {
        return $this->active_stf;
    }

    /**
     * Set created_at_stf
     *
     * @param \DateTime $createdAtStf
     * @return Share_tutos_files
     */
    public function setCreatedAtStf($createdAtStf)
    {
        $this->created_at_stf = $createdAtStf;

        return $this;
    }

    /**
     * Get created_at_stf
     *
     * @return \DateTime 
     */
    public function getCreatedAtStf()
    {
        return $this->created_at_stf;
    }

    /**
     * Set updated_at_stf
     *
     * @param \DateTime $updatedAtStf
     * @return Share_tutos_files
     */
    public function setUpdatedAtStf($updatedAtStf)
    {
        $this->updated_at_stf = $updatedAtStf;

        return $this;
    }

    /**
     * Get updated_at_stf
     *
     * @return \DateTime 
     */
    public function getUpdatedAtStf()
    {
        return $this->updated_at_stf;
    }

    public function insertCreatedAtAuto()
    {
        $this->setCreatedAtStf(new \DateTime());
    }

    public function insertUpdateAtAuto()
    {
        $this->setUpdatedAtStf(new \DateTime());
    }


    public function updateDateAuto()
    {
        $this->setUpdatedAtStf(new \DateTime());
    }
}
