<?php

namespace Yhjohn\ColorTag;

use Laravel\Nova\Fields\Field;

class ColorTag extends Field
{
    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'color-tag';

    public function colors(array $colors)
    {
        return $this->withMeta(['colors' => $colors]);
    }
}
