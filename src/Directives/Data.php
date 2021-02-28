<?php

namespace Edalzell\Blade\Directives;

use Edalzell\Blade\Concerns\IsDirective;
use Statamic\Stache\Query\Builder;

class Data
{
    use IsDirective;

    public $directive = 'data';
    public $key = 'data';
    public $type = 'array';
    public $method = 'handle';

    public function handle($data)
    {
        if ($data instanceof Builder) {
            return $this->getAugmentedValue($data->get());
        }

        return $this->getAugmentedValue($data);
    }
}
