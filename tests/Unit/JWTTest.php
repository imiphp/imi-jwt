<?php
namespace Imi\JWT\Test\Unit;

use Imi\App;
use Imi\JWT\Facade\JWT;
use PHPUnit\Framework\TestCase;

class JWTTest extends TestCase
{
    public function testJWT()
    {
        $data = [
            'memberId'  =>  19260817,
        ];
        $token = JWT::getToken($data);
        $tokenStr = (string)$token;
        $token2 = JWT::parseToken($tokenStr);
        $config = JWT::getConfig();
        $this->assertEquals(json_encode($data), json_encode($token2->getClaim($config->getDataName())));
    }

    public function testJWTValidation()
    {
        $excepted = [
            'memberId'  =>  19260817,
        ];
        /** @var \Imi\JWT\Test\Test\A $a */
        $a = App::getBean('A');
        [$token, $data] = $a->test();
        $this->assertInstanceOf(\Lcobucci\JWT\Token::class, $token);
        $this->assertEquals(json_encode($excepted), json_encode($data));
    }

}