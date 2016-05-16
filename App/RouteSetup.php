<?php

namespace App;

use App\Direct as Direct;

/**
*   Direct Setup
*   Direct::to(url, controller@method)
*/

Direct::to("/", 'MainController@index');

Direct::to("/test", 'MainController@test');
