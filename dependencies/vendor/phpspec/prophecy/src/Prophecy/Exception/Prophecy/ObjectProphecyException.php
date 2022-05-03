<?php

/*
 * This file is part of the Prophecy.
 * (c) Konstantin Kudryashov <ever.zet@gmail.com>
 *     Marcello Duarte <marcello.duarte@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Barn2\Plugin\Easy_Post_Types_Fields\Dependencies\Prophecy\Exception\Prophecy;

use Barn2\Plugin\Easy_Post_Types_Fields\Dependencies\Prophecy\Prophecy\ObjectProphecy;
class ObjectProphecyException extends \RuntimeException implements ProphecyException
{
    private $objectProphecy;
    public function __construct($message, ObjectProphecy $objectProphecy)
    {
        parent::__construct($message);
        $this->objectProphecy = $objectProphecy;
    }
    /**
     * @return ObjectProphecy
     */
    public function getObjectProphecy()
    {
        return $this->objectProphecy;
    }
}