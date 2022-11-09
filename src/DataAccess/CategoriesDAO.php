<?php

namespace Fsbe\DataAccess;

use Fsbe\Entities\Categories;
use Fsbe\DataAccess\Hydrators\CategoriesHydrator;

class CategoriesDAO
{
    public static function fetch(Database $db, Categories $categories): Categories
    {
        return CategoriesHydrator::hydrateFromDb($db, $categories);
    }
}