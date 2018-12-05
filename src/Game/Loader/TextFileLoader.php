<?php

namespace App\Game\Loader;

class TextFileLoader extends AbstractLoader implements LoaderInterface
{
    protected function doLoad(string $dictionary): array
    {
        return file($dictionary);
    }

    public function getType(): string
    {
        return 'txt';
    }
}

