<?php

namespace App\Game\Loader;

abstract class AbstractLoader implements LoaderInterface
{
    final public function load(string $dictionary): array
    {
        $words = $this->doLoad($dictionary);

        return array_map('trim', $words);
    }

    abstract protected function doLoad(string $dictionary): array;
}
