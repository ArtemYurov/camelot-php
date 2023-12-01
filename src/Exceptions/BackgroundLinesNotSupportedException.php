<?php

namespace RandomState\Camelot\Exceptions;

use RandomState\Camelot\Camelot;

class BackgroundLinesNotSupportedException extends NotSupportedException
{
    protected function validModes(): array
    {
        return [
            Camelot::MODE_LATTICE,
        ];
    }

    protected function featureName(): string
    {
        return 'processing background lines';
    }

}