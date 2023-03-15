<?php

namespace Entities;

use Entities\Field\Date;
use Entities\Field\Number;
use Entities\Field\Text;

class Process {
  public array $fields;

  public function __construct(array $fields)
  {
    $this->fields = $this->initFields($fields);
  }

  public function addField(array $field): void
  {
    array_push(
      $this->fields,
      $this->initField($field)
    );
  }

  public function getFieldsValues(): array
  {
    return array_reduce(
      $this->fields,
      function ($res, $field) {
        $res[$field->getName()] = $field->getValue();
        return $res;
      },
      []
    );
  }

  protected function initFields(array $fields): array
  {
    $init_fields = [];

    foreach($fields as $field) {
      array_push($init_fields, $this->initField($field));
    }

    return $init_fields;
  }

  protected function initField(array $field): AbstractField
  {
    return match($field['type']) {
      'text' => new Text($field['name'], $field['value']),
      'number' => new Number($field['name'], $field['value'], $field['format']),
      'date' => new Date($field['name'], $field['value'], $field['format'])
    };

  }

}