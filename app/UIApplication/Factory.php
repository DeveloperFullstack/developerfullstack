<?php

namespace App\UIApplication;

use App\ModelAdapters\UserAdapter as User;
use App\ModelAdapters\StudentAdapter as Student;

class Factory
{
    const UI_APPLICATION_PLACEHOLDER = 'App\UIApplication\UIApplication_';

    public static function get(User $user): AbstractUIApplication
    {
        $UIApplication = self::UI_APPLICATION_PLACEHOLDER . Student::CURRENT_PROGRAM_VERSION;

        return new $UIApplication($user);
    }
}
