<?php

namespace App\Service;

use App\Entity\Recommendation;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AccessControl extends AbstractController
{
    public function checkIfLoggedUserIsAuthor(Recommendation $recommendation): bool
    {
        // this method cheks if the user connected is the owner of the recipe AND checks ADMIN status
        if ($this->getUser() !== $recommendation->getOwner() && !$this->isGranted('ROLE_ADMIN')) {
            return false;
        } else {
            return true;
        }
    }

    public function checkIfUserLoggedIn(): bool
    {
        // this method checks if a user is connected AND checks ADMIN status
        if (!$this->isGranted('ROLE_USER') && !$this->isGranted('ROLE_ADMIN')) {
            return false;
        } else {
            return true;
        }
    }
}
