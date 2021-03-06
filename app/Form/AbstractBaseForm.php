<?php

namespace App\Form;

use App\Field\Field;

abstract class AbstractBaseForm
{
    use FormActionTrait;

    protected $fields = [];
    protected $onPostActionString = '';

    abstract public function setFields();
    abstract public function setOnPostActionString();

    public function __construct()
    {
        $this->setOnPostActionString();
    }
}
