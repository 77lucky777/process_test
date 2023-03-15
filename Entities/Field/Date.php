<?php

namespace Entities\Field;

use DateTime;
use Entities\AbstractFormattableField;

class Date extends AbstractFormattableField {
  protected function format(mixed $value, string $format): mixed
  {
    return (new DateTime($value))->format($format);
  }

}