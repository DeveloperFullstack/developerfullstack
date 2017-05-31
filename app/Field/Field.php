<?php

namespace App\Field;

class Field
{
    private $name = null;
    private $label = null;
    private $type = null;
    private $value = null;
    private $options = [];
    private $alias = null;
    private $hint = null;
    private $placeholder = null;
    private $required = false;
    private $class = 'form-control form-control-lg';

    const TYPE_TEXT = 'text';
    const TYPE_SELECT = 'select';
    const TYPE_TEXTAREA = 'textarea';
    const TYPE_DATE = 'date';
    const TYPE_EMAIL = 'email';
    const TYPE_RADIO = 'radio';
    const TYPE_CHECKBOX = 'checkbox';
    const TYPE_NUMBER = 'number';
    const TYPE_HIDDEN = 'hidden';

    public function setAlias(String $alias)
    {
        $this->alias = $alias;

        return $this;
    }

    public function getAlias(): string
    {
        return $this->alias;
    }

    public function setName(String $name)
    {
        $this->name = $name;

        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    public function getValue($value)
    {
        return $this->value;
    }

    public function setLabel(String $label)
    {
        $this->label = $label;

        return $this;
    }

    public function getLabel(): string
    {
        return $this->label;
    }

    public function setType(String $type)
    {
        $this->type = $type;

        return $this;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function setOptions(Array $options)
    {
        $this->options = $options;

        return $this;
    }

    public function getOptions(): array
    {
        return $this->options;
    }

    public function setHint(String $hint)
    {
        $this->hint = $hint;

        return $this;
    }

    public function getHint(): string
    {
        return $this->hint;
    }

    public function setPlaceholder(String $ph)
    {
        $this->placeholder = $ph;

        return $this;
    }

    public function getPlaceholder(): string
    {
        return $this->placeholder;
    }

    public function setClass(String $class)
    {
        $this->class = $class;

        return $this;
    }

    public function getClass(): string
    {
        return $this->class;
    }

    public function required()
    {
        $this->required = true;

        return $this;
    }

    public function isRequired(): bool
    {
        return $this->required;
    }
}
