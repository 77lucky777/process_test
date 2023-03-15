<?php

namespace Entities\Field;

use Entities\AbstractFormattableField;

class Number extends AbstractFormattableField {
  protected function format(mixed $value, string $format): mixed
  {
    return sprintf($format, $value);
  }
}