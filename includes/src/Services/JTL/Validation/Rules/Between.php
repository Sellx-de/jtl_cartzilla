<?php

declare(strict_types=1);

namespace JTL\Services\JTL\Validation\Rules;

use JTL\Services\JTL\Validation\RuleInterface;
use JTL\Services\JTL\Validation\RuleResult;

/**
 * Class Between
 * @package JTL\Services\JTL\Validation\Rules
 *
 * Validates, that the $value is between an $lower and an $upper bound.
 *
 * No transform.
 */
class Between implements RuleInterface
{
    /**
     * Between constructor.
     * @param mixed $lower
     * @param mixed $upper
     */
    public function __construct(protected $lower, protected $upper)
    {
    }

    /**
     * @inheritdoc
     */
    public function validate($value): RuleResult
    {
        if ($value < $this->lower) {
            return new RuleResult(false, 'value too low', $value);
        }

        if ($value > $this->upper) {
            return new RuleResult(false, 'value too high', $value);
        }

        return new RuleResult(true, '', $value);
    }
}
