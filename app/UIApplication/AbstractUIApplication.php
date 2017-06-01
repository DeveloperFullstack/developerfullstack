<?php

namespace App\UIApplication;

use App\Section\AbstractBaseSection;
use App\ModelAdapters\UserAdapter as User;

abstract class AbstractUIApplication
{
    public $sections = [];
    public $sectionInstances = [];
    public $sectionSlugs = [];

    protected $user = null;

    public function __construct(User $user)
    {
        $this->user = $user;

        $this->addSections($this->sections);
    }

    public function addSections(Array $sections = [])
    {
        foreach ($sections as $section) {
            $sectionInstance = new $section($this->user);

            $slug = $sectionInstance->getSlug();

            $this->addSectionInstance($slug, $sectionInstance)
                ->addSectionSlug($slug);
        }

        return $this;
    }

    public function addSectionInstance(String $slug, AbstractBaseSection $section)
    {
        $this->sectionInstances[$slug] = $section;

        return $this;
    }

    public function addSectionSlug(String $slug)
    {
        $this->sectionSlugs[] = $slug;

        return $this;
    }

    public function getSections(): array
    {
        return $this->sectionInstances;
    }

    public function getSectionBySlug(String $slug)
    {
        $sections = $this->getSections();

        foreach ($sections as $section) {
            if ($section->getSlug() == $slug) {
                return $section;
            }
        }

        return null;
    }

    public function getSectionSlugs(): array
    {
        return $this->sectionSlugs;
    }

    public function getNextSectionSlug(String $currentSlug)
    {
        $slugs = $this->getSectionSlugs();

        $slug = null;

        for ($i = 0; $i < count($slugs); $i++) {
            if ($slugs[$i] == $currentSlug) {
                $slug = isset($slugs[$i+1]) ? $slugs[$i+1] : null;
            }
        }

        return $slug;
    }
}
