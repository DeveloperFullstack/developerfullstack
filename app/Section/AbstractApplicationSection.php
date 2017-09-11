<?php

namespace App\Section;

use EBM\Section\AbstractBaseSection;

abstract class AbstractApplicationSection extends AbstractBaseSection
{
    public function setOnPostActionString()
    {
        $user = $this->getUIApplication()->getInstance('user');

        $this->onPostActionString = route('front.application.store', ['slug' => $this->getSlug()]);

        return $this;
    }
}
