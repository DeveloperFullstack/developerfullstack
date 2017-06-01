<?php

namespace App\Form;

use App\Field\Field;

trait FormActionTrait
{
    public function addField(String $alias): Field
    {
        $field = new Field;

        $field->setAlias($alias);
        $field->setName($alias);

        $this->fields[$alias] = $field;

        return $field;
    }

    public function getFields(): array
    {
        return $this->fields;
    }

    public function getField(String $alias): Field
    {
        $fields = $this->getFields();

        return $fields[$alias];
    }

    public function getOnPostActionString(): string
    {
        return $this->onPostActionString;
    }

    public function getValidationRules(): array
    {
        $fields = $this->getFields();

        $rules = [];

        foreach ($fields as $field) {
            $rules[$field->getAlias()] = $field->getValidationRules();
        }

        return $rules;
    }

    public function getValidationMessages(): array
    {
        $fields = $this->getFields();

        $messages = [];

        foreach ($fields as $field) {
            foreach ($field->getValidationMessages() as $validator => $message) {
                $key = "{$field->getAlias()}.$validator";
                $messages[$key] = $message;
            }
        }

        return $messages;
    }
}
