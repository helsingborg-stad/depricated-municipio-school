<?php
namespace MunicipioSchool;

class App
{
    public function __construct()
    {
        new \MunicipioSchool\Theme\Enqueue();
    }
}
