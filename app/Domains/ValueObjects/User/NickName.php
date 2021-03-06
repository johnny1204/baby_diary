<?php

namespace App\Domains\ValueObjects\User;

use Illuminate\Validation\ValidationException;
use ValueObjects\StringLiteral\StringLiteral;

/**
 * Class NickName
 * @package App\Domains\ValueObjects\User
 */
class NickName extends StringLiteral
{
    /**
     * @param string $value
     */
    public function __construct(string $value)
    {
        if (10 < mb_strlen($value)) {
            throw ValidationException::withMessages(['ニックネームは10文字以内にしてください。']);
        }

        parent::__construct($value);
    }
}
