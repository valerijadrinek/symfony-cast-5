<?php

namespace App\Security\Voter;

use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Authorization\Voter\Voter;
use Symfony\Component\Security\Core\User\UserInterface;
use App\Entity\HumaniodEntity;
use App\Entity\Question;
use Symfony\Bundle\SecurityBundle\Security;

class QuestionVoter extends Voter
{
    private Security $security;
    public function __construct(Security $security)
    {
        $this->security = $security;
    }

    public const EDIT = 'EDIT';
    public const VIEW = 'VIEW';

    protected function supports(string $attribute, mixed $subject): bool
    {
        // replace with your own logic
        // https://symfony.com/doc/current/security/voters.html
        return in_array($attribute, [self::EDIT])
            && $subject instanceof \App\Entity\Question;
    }

    protected function voteOnAttribute(string $attribute, mixed $subject, TokenInterface $token): bool
    {
        /** @var HumaniodEntity $user */
        $user = $token->getUser();
        // if the user is anonymous, do not grant access
        if (!$user instanceof UserInterface) {
            return false;
        }
        if (!$subject instanceof Question) {
            throw new \Exception('Wrong type somehow passed');
        }

        if ($this->security->isGranted('ROLE_ADMIN')) {
            return true;
        }
        
        // ... (check conditions and return true to grant permission) ...
        switch ($attribute) {
            case self::EDIT:
                return $user === $subject->getOwner();
                
           // case self::VIEW:
                // logic to determine if the user can VIEW
                // return true or false
                //break;
        }

        return false;
    }
}
