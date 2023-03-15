<?php

use Entities\Process;

require __DIR__.'/vendor/autoload.php';

$fields = [
  ['name' => 'Text', 'type' => 'text', 'value' => 'Text'],
  ['name' => 'Number', 'type' => 'number', 'value' => 455, 'format' => '%+.2f'],
  ['name' => 'Start', 'type' => 'date', 'value' => '12.03.2023', 'format' => 'Y-m-d H:i:s'],
];

$process = new Process($fields);

$process->addField([
  'name' => 'Text2',
  'type' => 'text',
  'value' => 'asdf'
]);

print_r($process->getFieldsValues());
