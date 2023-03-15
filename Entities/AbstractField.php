<?php

namespace Entities;

abstract class AbstractField {
  protected mixed $name;
  protected string $value;

  public function __construct(string $name, mixed $value)
  {
    $this->name = $name;
    $this->value = $value;
  }

  public function getName(): string
  {
    return $this->name;
  }

  public function getValue(): string
  {
    return $this->value;
  }
}