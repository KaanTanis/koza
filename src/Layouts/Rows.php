<?php

namespace KaanTanis\Koza\Layouts;

use JetBrains\PhpStorm\ArrayShape;

trait Rows
{
    #[ArrayShape(['layout' => "string", 'fields' => ""])]
    final public function rows(array $fields): array
    {
        return [
            'layout' => 'rows',
            'fields' => $fields
        ];
    }

}
