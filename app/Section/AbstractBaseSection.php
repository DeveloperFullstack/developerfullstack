<?php

namespace App\Section;

use App\Field\Field;
use App\Form\FormActionTrait;
use App\ModelAdapters\UserAdapter as User;

abstract class AbstractBaseSection
{
    use FormActionTrait;

    protected $fields = [];
    protected $onPostActionString = '';
    protected $slug = '';

    protected $user = null;

    abstract public function setSlug();
    abstract public function setFields();
    abstract public function setOnPostActionString();

    public function __construct(User $user)
    {
        $this->setSlug();
        $this->setOnPostActionString();

        $this->user = $user;
    }

    public function getSlug(): string
    {
        return $this->slug;
    }
}
