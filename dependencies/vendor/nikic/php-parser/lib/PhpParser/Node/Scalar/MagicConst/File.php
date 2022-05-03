<?php

declare (strict_types=1);
namespace Barn2\Plugin\Easy_Post_Types_Fields\Dependencies\PhpParser\Node\Scalar\MagicConst;

use Barn2\Plugin\Easy_Post_Types_Fields\Dependencies\PhpParser\Node\Scalar\MagicConst;
class File extends MagicConst
{
    public function getName() : string
    {
        return '__FILE__';
    }
    public function getType() : string
    {
        return 'Scalar_MagicConst_File';
    }
}