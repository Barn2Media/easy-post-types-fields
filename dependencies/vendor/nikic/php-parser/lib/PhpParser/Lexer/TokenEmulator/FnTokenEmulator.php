<?php

declare (strict_types=1);
namespace Barn2\Plugin\Easy_Post_Types_Fields\Dependencies\PhpParser\Lexer\TokenEmulator;

use Barn2\Plugin\Easy_Post_Types_Fields\Dependencies\PhpParser\Lexer\Emulative;
final class FnTokenEmulator extends KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return Emulative::PHP_7_4;
    }
    public function getKeywordString() : string
    {
        return 'fn';
    }
    public function getKeywordToken() : int
    {
        return \T_FN;
    }
}