<?php

declare (strict_types=1);
/**
 * This file is part of phpDocumentor.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @link      http://phpdoc.org
 */
namespace Barn2\Plugin\Easy_Post_Types_Fields\Dependencies\phpDocumentor\Reflection\DocBlock\Tags;

use Barn2\Plugin\Easy_Post_Types_Fields\Dependencies\phpDocumentor\Reflection\DocBlock\Description;
use Barn2\Plugin\Easy_Post_Types_Fields\Dependencies\phpDocumentor\Reflection\DocBlock\DescriptionFactory;
use Barn2\Plugin\Easy_Post_Types_Fields\Dependencies\phpDocumentor\Reflection\Types\Context as TypeContext;
use Barn2\Plugin\Easy_Post_Types_Fields\Dependencies\Webmozart\Assert\Assert;
use function preg_match;
/**
 * Reflection class for a {@}since tag in a Docblock.
 */
final class Since extends BaseTag implements Factory\StaticMethod
{
    /** @var string */
    protected $name = 'since';
    /**
     * PCRE regular expression matching a version vector.
     * Assumes the "x" modifier.
     */
    public const REGEX_VECTOR = '(?:
        # Normal release vectors.
        \\d\\S*
        |
        # VCS version vectors. Per PHPCS, they are expected to
        # follow the form of the VCS name, followed by ":", followed
        # by the version vector itself.
        # By convention, popular VCSes like CVS, SVN and GIT use "$"
        # around the actual version vector.
        [^\\s\\:]+\\:\\s*\\$[^\\$]+\\$
    )';
    /** @var string|null The version vector. */
    private $version;
    public function __construct(?string $version = null, ?Description $description = null)
    {
        Assert::nullOrNotEmpty($version);
        $this->version = $version;
        $this->description = $description;
    }
    public static function create(?string $body, ?DescriptionFactory $descriptionFactory = null, ?TypeContext $context = null) : ?self
    {
        if (empty($body)) {
            return new static();
        }
        $matches = [];
        if (!preg_match('/^(' . self::REGEX_VECTOR . ')\\s*(.+)?$/sux', $body, $matches)) {
            return null;
        }
        Assert::notNull($descriptionFactory);
        return new static($matches[1], $descriptionFactory->create($matches[2] ?? '', $context));
    }
    /**
     * Gets the version section of the tag.
     */
    public function getVersion() : ?string
    {
        return $this->version;
    }
    /**
     * Returns a string representation for this tag.
     */
    public function __toString() : string
    {
        if ($this->description) {
            $description = $this->description->render();
        } else {
            $description = '';
        }
        $version = (string) $this->version;
        return $version . ($description !== '' ? ($version !== '' ? ' ' : '') . $description : '');
    }
}