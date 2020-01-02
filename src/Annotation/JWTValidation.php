<?php
namespace Imi\JWT\Annotation;

use Imi\Bean\Annotation\Base;
use Imi\Bean\Annotation\Parser;

/**
 * JWT 验证注解
 * @Annotation
 * @Target("METHOD")
 * @Parser("Imi\Aop\Parser\AopParser")
 */
class JWTValidation extends Base
{
    /**
     * 只传一个参数时的参数名
     * @var string
     */
    protected $defaultFieldName = 'name';

    /**
     * JWT 配置名称
     *
     * @var string
     */
    public $name;

    /**
     * Token 对象注入的参数名称
     *
     * @var string
     */
    public $tokenParam;

    /**
     * 数据注入的参数名称
     *
     * @var string
     */
    public $dataParam;

}
