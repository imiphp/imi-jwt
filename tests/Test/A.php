<?php
namespace Imi\JWT\Test\Test;

use Imi\Bean\Annotation\Bean;
use Imi\JWT\Annotation\JWTValidation;

/**
 * @Bean("A")
 */
class A
{
    /**
     * @JWTValidation(tokenParam="token", dataParam="data")
     *
     * @param \Lcobucci\JWT\Token $token
     * @param \stdClass $data
     * @return array
     */
    public function test($token = null, $data = null)
    {
        return [$token, $data];
    }

}
