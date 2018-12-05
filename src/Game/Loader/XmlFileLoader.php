<?php

namespace App\Game\Loader;

class XmlFileLoader extends AbstractLoader implements LoaderInterface
{
    protected function doLoad(string $dictionary): array
    {
        $words = [];
        $xml = new \SimpleXmlElement(file_get_contents($dictionary));
        foreach ($xml->word as $word) {
            $words[] = $word;
        }

        return $words;
    }

    public function getType(): string
    {
        return 'xml';
    }
}
