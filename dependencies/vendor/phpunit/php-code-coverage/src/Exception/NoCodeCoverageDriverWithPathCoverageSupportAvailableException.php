<?php

declare (strict_types=1);
/*
 * This file is part of phpunit/php-code-coverage.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Barn2\Plugin\Easy_Post_Types_Fields\Dependencies\SebastianBergmann\CodeCoverage;

use RuntimeException;
final class NoCodeCoverageDriverWithPathCoverageSupportAvailableException extends RuntimeException implements Exception
{
    public function __construct()
    {
        parent::__construct('No code coverage driver with path coverage support available');
    }
}