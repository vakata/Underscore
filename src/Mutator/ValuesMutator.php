<?php

namespace Underscore\Mutator;

use Underscore\Collection;
use Underscore\Mutator;

class ValuesMutator extends Mutator
{
    /**
     * Creates an collection composed of the enumerable property values of object.
     *
     * @param Collection $collection
     * @return Collection
     */
    public function __invoke($collection)
    {
        $newCollection = [];

        foreach ($collection as $value) {
            $newCollection[] = $value;
        }

        return $this->wrap($newCollection);
    }
}
