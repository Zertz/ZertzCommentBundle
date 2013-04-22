<?php
// src/Zertz/CommentBundle/Entity/Signalement.php
namespace Zertz\CommentBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table("Comment__Report")
 */
class Report
{
    /**
     * @ORM\Column(name="ID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue()
     */
    protected $id;
    
    /**
     * @ORM\Column(name="Spam", type="boolean", nullable=true)
     */
    protected $spam;
    
    /**
     * @ORM\Column(name="Vulgaire", type="boolean", nullable=true)
     */
    protected $vulgaire;
    
    /**
     * @ORM\Column(name="Publicite", type="boolean", nullable=true)
     */
    protected $publicite;
    
    /**
     * @ORM\ManyToOne(targetEntity="Zertz\CommentBundle\Entity\Comment")
     * @ORM\JoinColumn(name="Comment_ID", referencedColumnName="id", nullable=false)
     */
    protected $comment;
    
    /**
     * @ORM\ManyToOne(targetEntity="Zertz\UserBundle\Entity\User")
     * @ORM\JoinColumn(name="User_ID", referencedColumnName="ID", nullable=false)
     */
    protected $user;
    
    public function getId()
    {
        return $this->id;
    }

    public function setSpam($spam)
    {
        $this->spam = $spam;
        return $this;
    }

    public function getSpam()
    {
        return $this->spam;
    }

    public function setVulgaire($vulgaire)
    {
        $this->vulgaire = $vulgaire;
        return $this;
    }

    public function getVulgaire()
    {
        return $this->vulgaire;
    }

    public function setPublicite($publicite)
    {
        $this->publicite = $publicite;
        return $this;
    }

    public function getPublicite()
    {
        return $this->publicite;
    }
    
    public function getComment()
    {
        return $this->comment;
    }

    public function setComment($comment)
    {
        $this->comment = $comment;
    }
    
    public function getUser()
    {
        return $this->utilisateur;
    }

    public function setUser($user)
    {
        $this->utilisateur = $user;
    }
}
?>