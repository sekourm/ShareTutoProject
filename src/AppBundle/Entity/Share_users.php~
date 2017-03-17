<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\AdvancedUserInterface;

/**
 * Share_users
 */
class Share_users implements UserInterface, AdvancedUserInterface, \Serializable
{
    
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $username_sha;

    /**
     * @var string
     */
    private $email_sha;

    /**
     * @var string
     */
    private $password_sha;

    /**
     * @var boolean
     */
    private $active_sha = 0;

    /**
     * @var string
     */
    private $personal_key_sha;

    /**
     * @var string
     */
    private $grade_sha;

    /**
     * @var \DateTime
     */
    private $created_at_sha;

    /**
     * @var \DateTime
     */
    private $update_at_sha;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $UsersTutos;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->UsersTutos = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set username_sha
     *
     * @param string $usernameSha
     * @return Share_users
     */
    public function setUsernameSha($usernameSha)
    {
        $this->username_sha = $usernameSha;

        return $this;
    }

    /**
     * Get username_sha
     *
     * @return string
     */
    public function getUsernameSha()
    {
        return $this->username_sha;
    }

    /**
     * Set email_sha
     *
     * @param string $emailSha
     * @return Share_users
     */
    public function setEmailSha($emailSha)
    {
        $this->email_sha = $emailSha;

        return $this;
    }

    /**
     * Get email_sha
     *
     * @return string
     */
    public function getEmailSha()
    {
        return $this->email_sha;
    }

    /**
     * Set password_sha
     *
     * @param string $passwordSha
     * @return Share_users
     */
    public function setPasswordSha($passwordSha)
    {
        $this->password_sha = $passwordSha;

        return $this;
    }

    /**
     * Get password_sha
     *
     * @return string
     */
    public function getPasswordSha()
    {
        return $this->password_sha;
    }

    /**
     * Set active_sha
     *
     * @param boolean $activeSha
     * @return Share_users
     */
    public function setActiveSha($activeSha)
    {
        $this->active_sha = $activeSha;

        return $this;
    }

    /**
     * Get active_sha
     *
     * @return boolean
     */
    public function getActiveSha()
    {
        return $this->active_sha;
    }

    /**
     * Set personal_key_sha
     *
     * @param string $personalKeySha
     * @return Share_users
     */
    public function setPersonalKeySha($personalKeySha)
    {
        $this->personal_key_sha = $personalKeySha;

        return $this;
    }

    /**
     * Get personal_key_sha
     *
     * @return string
     */
    public function getPersonalKeySha()
    {
        return $this->personal_key_sha;
    }

    /**
     * Set created_at_sha
     *
     * @param \DateTime $createdAtSha
     * @return Share_users
     */
    public function setCreatedAtSha($createdAtSha)
    {
        $this->created_at_sha = $createdAtSha;

        return $this;
    }

    /**
     * Get created_at_sha
     *
     * @return \DateTime
     */
    public function getCreatedAtSha()
    {
        return $this->created_at_sha;
    }

    /**
     * Set update_at_sha
     *
     * @param \DateTime $updateAtSha
     * @return Share_users
     */
    public function setUpdateAtSha($updateAtSha)
    {
        $this->update_at_sha = $updateAtSha;

        return $this;
    }

    /**
     * Get update_at_sha
     *
     * @return \DateTime
     */
    public function getUpdateAtSha()
    {
        return $this->update_at_sha;
    }

    /**
     * Add UsersTutos
     *
     * @param \AppBundle\Entity\Share_tutos $usersTutos
     * @return Share_users
     */
    public function addUsersTuto(\AppBundle\Entity\Share_tutos $usersTutos)
    {
        $this->UsersTutos[] = $usersTutos;

        return $this;
    }

    /**
     * Remove UsersTutos
     *
     * @param \AppBundle\Entity\Share_tutos $usersTutos
     */
    public function removeUsersTuto(\AppBundle\Entity\Share_tutos $usersTutos)
    {
        $this->UsersTutos->removeElement($usersTutos);
    }

    /**
     * Get UsersTutos
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getUsersTutos()
    {
        return $this->UsersTutos;
    }

    /**
     * Set grade_sha
     *
     * @param string $gradeSha
     * @return Share_users
     */
    public function setGradeSha($gradeSha)
    {
        $this->grade_sha = $gradeSha;

        return $this;
    }

    /**
     * Get grade_sha
     *
     * @return string
     */
    public function getGradeSha()
    {
        return $this->grade_sha;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $UsersView;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $UsersLike;


    /**
     * Add UsersView
     *
     * @param \AppBundle\Entity\Share_tutos_view $usersView
     * @return Share_users
     */
    public function addUsersView(\AppBundle\Entity\Share_tutos_view $usersView)
    {
        $this->UsersView[] = $usersView;

        return $this;
    }

    /**
     * Remove UsersView
     *
     * @param \AppBundle\Entity\Share_tutos_view $usersView
     */
    public function removeUsersView(\AppBundle\Entity\Share_tutos_view $usersView)
    {
        $this->UsersView->removeElement($usersView);
    }

    /**
     * Get UsersView
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getUsersView()
    {
        return $this->UsersView;
    }

    /**
     * Add UsersLike
     *
     * @param \AppBundle\Entity\Share_tutos_like $usersLike
     * @return Share_users
     */
    public function addUsersLike(\AppBundle\Entity\Share_tutos_like $usersLike)
    {
        $this->UsersLike[] = $usersLike;

        return $this;
    }

    /**
     * Remove UsersLike
     *
     * @param \AppBundle\Entity\Share_tutos_like $usersLike
     */
    public function removeUsersLike(\AppBundle\Entity\Share_tutos_like $usersLike)
    {
        $this->UsersLike->removeElement($usersLike);
    }

    public function insertCreatedAtAuto()
    {
        $this->setCreatedAtSha(new \DateTime());
    }

    public function insertUpdateAtAuto()
    {
        $this->setUpdateAtSha(new \DateTime());
    }


    public function insertRoleAtAuto()
    {
        $this->setGradeSha('ROLE_USER');
    }

    /**
     * Get UsersLike
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getUsersLike()
    {
        return $this->UsersLike;
    }

    public function getUsername()
    {
        $this->username = $this->getUsernameSha();

        return $this->username;
    }

    public function getSalt()
    {
        return 'TutoShared_Mennad';
    }

    public function getPassword()
    {
        $this->password = $this->getPasswordSha();

        return $this->password;
    }

    public function getRoles()
    {
        return array($this->getGradeSha());
    }

    public function eraseCredentials()
    {

    }

    public function isAccountNonExpired()
    {
        return true;
    }

    public function isAccountNonLocked()
    {
        return true;
    }

    public function isCredentialsNonExpired()
    {
        return true;
    }

    public function isEnabled()
    {
        return $this->getActiveSha();
    }

    public function serialize()
    {
        return serialize(array(
            $this->id,
            $this->getUsernameSha(),
            $this->getPasswordSha()
        ));
    }

    public function unserialize($serialized)
    {
        list (
            $this->id,
            $this->username,
            $this->password
            ) = unserialize($serialized);
    }
}
