<?php

namespace App;

use App\Direct as Direct;

/**
*   Direct Setup
*   Direct::to(url, controller@method)
*/

Direct::to("/", 'MainController@index');

Direct::to("/ball", 'BallController@ball');

Direct::to("/test", 'MainController@test');

// to = get

// direct::post

Direct::post("/", 'MainController@post');



