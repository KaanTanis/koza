<?php

namespace KaanTanis\Koza\Fields;

use JetBrains\PhpStorm\Pure;

class Field
{
    public string $name;
    public string $placeholder;
    public string $value;
    public string $label;
    public string $required;
    public string $col;
    public bool $translatable;

    #[Pure] public static function make(): static
    {
        return (new static);
    }

    final public function name(string $name): static
    {
        $this->name = $name;
        return $this;
    }

    final public function placeholder(string $placeholder): static
    {
        $this->placeholder = $placeholder;
        return $this;
    }

    final public function value(string $value): static
    {
         $this->value = $value;
         return $this;
    }

    final public function label(string $label): static
    {
        $this->label = $label;
        return $this;
    }

    final public function required(bool $required = true): static
    {
        $this->required = $required;
        return $this;
    }

    final public function col(int $col): static
    {
        $this->col = $col;
        return $this;
    }

    final public function translatable(bool $translatable = true): static
    {
        $this->translatable = $translatable;
        return $this;
    }
}
