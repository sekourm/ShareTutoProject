<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Share_tutos
 */
class Share_tutos
{
    
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $title_stu;

    /**
     * @var string
     */
    private $description_stu;

    /**
     * @var string
     */
    private $content_stu;

    /**
     * @var boolean
     */
    private $active_stu = 1;

    /**
     * @var \DateTime
     */
    private $created_at_stu;

    /**
     * @var \DateTime
     */
    private $updated_at_stu;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $TutoFiles;

    /**
     * @var \AppBundle\Entity\Share_users
     */
    private $TutosUsers;

    /**
     * @var \AppBundle\Entity\Share_categories
     */
    private $TutosCategories;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->TutoFiles = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set title_stu
     *
     * @param string $titleStu
     * @return Share_tutos
     */
    public function setTitleStu($titleStu)
    {
        $this->title_stu = $titleStu;

        return $this;
    }

    /**
     * Get title_stu
     *
     * @return string 
     */
    public function getTitleStu()
    {
        return $this->title_stu;
    }

    /**
     * Set description_stu
     *
     * @param string $descriptionStu
     * @return Share_tutos
     */
    public function setDescriptionStu($descriptionStu)
    {
        $this->description_stu = $descriptionStu;

        return $this;
    }

    /**
     * Get description_stu
     *
     * @return string 
     */
    public function getDescriptionStu()
    {
        return $this->description_stu;
    }

    /**
     * Set content_stu
     *
     * @param string $contentStu
     * @return Share_tutos
     */
    public function setContentStu($contentStu)
    {
        $this->content_stu = $contentStu;

        return $this;
    }

    /**
     * Get content_stu
     *
     * @return string 
     */
    public function getContentStu()
    {
        return $this->content_stu;
    }

    /**
     * Set active_stu
     *
     * @param boolean $activeStu
     * @return Share_tutos
     */
    public function setActiveStu($activeStu)
    {
        $this->active_stu = $activeStu;

        return $this;
    }

    /**
     * Get active_stu
     *
     * @return boolean 
     */
    public function getActiveStu()
    {
        return $this->active_stu;
    }

    /**
     * Set created_at_stu
     *
     * @param \DateTime $createdAtStu
     * @return Share_tutos
     */
    public function setCreatedAtStu($createdAtStu)
    {
        $this->created_at_stu = $createdAtStu;

        return $this;
    }

    /**
     * Get created_at_stu
     *
     * @return \DateTime 
     */
    public function getCreatedAtStu()
    {
        return $this->created_at_stu;
    }

    /**
     * Set updated_at_stu
     *
     * @param \DateTime $updatedAtStu
     * @return Share_tutos
     */
    public function setUpdatedAtStu($updatedAtStu)
    {
        $this->updated_at_stu = $updatedAtStu;

        return $this;
    }

    /**
     * Get updated_at_stu
     *
     * @return \DateTime 
     */
    public function getUpdatedAtStu()
    {
        return $this->updated_at_stu;
    }

    /**
     * Add TutoFiles
     *
     * @param \AppBundle\Entity\Share_tutos_files $tutoFiles
     * @return Share_tutos
     */
    public function addTutoFile(\AppBundle\Entity\Share_tutos_files $tutoFiles)
    {
        $this->TutoFiles[] = $tutoFiles;

        return $this;
    }

    /**
     * Remove TutoFiles
     *
     * @param \AppBundle\Entity\Share_tutos_files $tutoFiles
     */
    public function removeTutoFile(\AppBundle\Entity\Share_tutos_files $tutoFiles)
    {
        $this->TutoFiles->removeElement($tutoFiles);
    }

    /**
     * Get TutoFiles
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTutoFiles()
    {
        return $this->TutoFiles;
    }

    /**
     * Set TutosUsers
     *
     * @param \AppBundle\Entity\Share_users $tutosUsers
     * @return Share_tutos
     */
    public function setTutosUsers(\AppBundle\Entity\Share_users $tutosUsers = null)
    {
        $this->TutosUsers = $tutosUsers;

        return $this;
    }

    /**
     * Get TutosUsers
     *
     * @return \AppBundle\Entity\Share_users 
     */
    public function getTutosUsers()
    {
        return $this->TutosUsers;
    }

    /**
     * Set TutosCategories
     *
     * @param \AppBundle\Entity\Share_categories $tutosCategories
     * @return Share_tutos
     */
    public function setTutosCategories(\AppBundle\Entity\Share_categories $tutosCategories = null)
    {
        $this->TutosCategories = $tutosCategories;

        return $this;
    }

    /**
     * Get TutosCategories
     *
     * @return \AppBundle\Entity\Share_categories 
     */
    public function getTutosCategories()
    {
        return $this->TutosCategories;
    }

    public function insertCreatedAtAuto()
    {
        $this->setCreatedAtStu(new \DateTime());
    }

    public function insertUpdateAtAuto()
    {
        $this->setUpdatedAtStu(new \DateTime());
    }


    public function updateDateAuto()
    {
        $this->setUpdatedAtStu(new \DateTime());
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $TutoView;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $TutoLike;


    /**
     * Add TutoView
     *
     * @param \AppBundle\Entity\Share_tutos_view $tutoView
     * @return Share_tutos
     */
    public function addTutoView(\AppBundle\Entity\Share_tutos_view $tutoView)
    {
        $this->TutoView[] = $tutoView;

        return $this;
    }

    /**
     * Remove TutoView
     *
     * @param \AppBundle\Entity\Share_tutos_view $tutoView
     */
    public function removeTutoView(\AppBundle\Entity\Share_tutos_view $tutoView)
    {
        $this->TutoView->removeElement($tutoView);
    }

    /**
     * Get TutoView
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTutoView()
    {
        return $this->TutoView;
    }

    /**
     * Add TutoLike
     *
     * @param \AppBundle\Entity\Share_tutos_like $tutoLike
     * @return Share_tutos
     */
    public function addTutoLike(\AppBundle\Entity\Share_tutos_like $tutoLike)
    {
        $this->TutoLike[] = $tutoLike;

        return $this;
    }

    /**
     * Remove TutoLike
     *
     * @param \AppBundle\Entity\Share_tutos_like $tutoLike
     */
    public function removeTutoLike(\AppBundle\Entity\Share_tutos_like $tutoLike)
    {
        $this->TutoLike->removeElement($tutoLike);
    }

    /**
     * Get TutoLike
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTutoLike()
    {
        return $this->TutoLike;
    }
}
