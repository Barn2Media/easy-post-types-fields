<?php

declare (strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Barn2\Plugin\Easy_Post_Types_Fields\Dependencies\PHPUnit\TextUI\XmlConfiguration\Logging\TestDox;

use Barn2\Plugin\Easy_Post_Types_Fields\Dependencies\PHPUnit\TextUI\XmlConfiguration\File;
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 * @psalm-immutable
 */
final class Html
{
    /**
     * @var File
     */
    private $target;
    public function __construct(File $target)
    {
        $this->target = $target;
    }
    public function target() : File
    {
        return $this->target;
    }
}