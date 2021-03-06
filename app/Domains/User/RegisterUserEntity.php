<?php

namespace App\Domains\User;

use App\Domains\ValueObjects\User\NickName;
use App\Domains\ValueObjects\User\Password;
use ValueObjects\Web\EmailAddress;

/**
 * Class RegisterUserEntity
 * @package App\Domains\User
 */
class RegisterUserEntity
{
    /** @var NickName */
    private NickName $nickname;

    /** @var EmailAddress */
    private EmailAddress $email;

    /** @var Password */
    private Password $password;

    /**
     * RegisterUserEntity constructor
     *
     * @param NickName $nickname
     * @param EmailAddress $email
     * @param Password $password
     */
    public function __construct(NickName $nickname, EmailAddress $email, Password $password)
    {
        $this->nickname = $nickname;
        $this->email    = $email;
        $this->password = $password;
    }

    /**
     * @return NickName
     */
    public function getName(): NickName
    {
        return $this->nickname;
    }

    /**
     * @return EmailAddress
     */
    public function getEmail(): EmailAddress
    {
        return $this->email;
    }

    /**
     * @return Password
     */
    public function getPassword(): Password
    {
        return $this->password;
    }
}
