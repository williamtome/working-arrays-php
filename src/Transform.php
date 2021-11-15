<?php

namespace Alura\WorkingArrays;

class Transform
{
    private string $phrase;
    private string $separator;

    public function __construct(string $phrase, string $separator)
    {
        $this->phrase = $phrase;
        $this->separator = $separator;
    }

    public function toArray(): array
    {
        return explode($this->separator, $this->phrase);
    }

    public function toString(array $array): string
    {
        return implode($this->separator, $array);
    }
}
