<?php
use App\Routes\Direct as Direct;

/**
*   Direct Setup
*   Direct::[to, post](url, controller@method)
*/

Direct::get("/", 'MainController@index');

Direct::get("/api", 'MainController@api');

Direct::post("/create", 'MainController@insert');
Direct::post("/delete", 'MainController@delete');


Direct::ball("404", 'ErrorController@pageNotFound');

Direct::get("/skiitsekk", 'Skiit@sekk');
