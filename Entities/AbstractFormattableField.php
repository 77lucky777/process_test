<?php

namespace Entities;

abstract class AbstractFormattableField extends AbstractField  {
  protected string $format;

  public function __construct(string $name, string $value, string $format)
  {
    $formatted_value = $this->format($value, $format);

    parent::__construct($name, $formatted_value);
  }

  abstract protected function format(mixed $value, string $format): mixed;
}