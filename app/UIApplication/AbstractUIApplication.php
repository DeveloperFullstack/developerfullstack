<?php

namespace App\UIApplication;

use EBM\UIApplication\AbstractUIApplication as EBMAbstractUIApplication;
use App\ModelAdapters\UserAdapter as User;

abstract class AbstractUIApplication extends EBMAbstractUIApplication
{
    public function __construct(User $user)
    {
        $this->registerInstance('user', $user);

        parent::__construct();
    }
}
