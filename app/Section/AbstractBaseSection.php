<?php

namespace App\Section;

use App\Field\Field;
use App\Form\FormActionTrait;

abstract class AbstractBaseSection
{
    use FormActionTrait;

    protected $fields = [];
    protected $onPostActionString = '';
    protected $slug = '';

    abstract public function setSlug();
    abstract public function setFields();
    abstract public function setOnPostActionString();

    public function __construct()
    {
        $this->setSlug();
        $this->setOnPostActionString();
    }

    public function getSlug(): string
    {
        return $this->slug;
    }
}
