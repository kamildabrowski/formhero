<?php namespace app\FormHero\Helpers;

use app\FormHero\Helpers\Element as ElementHelper;
class Adding {
    private static $added = [];

    public function getAdded():array {
        return self::$added;
    }
    public function getAddedOne($id):ElementHelper {
        return self::$added[$id];
    }
    /**
     * params @var ElementHelper $added  Element form
     * params @var int $id Id element form
     */
    public function setAdded(ElementHelper $added, string|int $id = null):ElementHelper
    {
        if ($id === null) {
            return self::$added[$id] = $added;
        } else {
            return self::$added[$id] = $added;
        }
    }

}