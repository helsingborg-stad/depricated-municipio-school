<?php
namespace MunicipioSchool;

class App
{
    public function __construct()
    {
        // Theme
        new \MunicipioSchool\Theme\Enqueue();

        // Post types
        new \MunicipioSchool\PostTypes\ForParents();
    }
}
