<?php

$r = json_decode(file_get_contents('http://swapi.dev/api/planets/'));

print_r($r);
