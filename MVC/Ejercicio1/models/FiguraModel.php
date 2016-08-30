<?php

abstract class FiguraModel
{
    abstract protected function getArea();

    static function comparator($p1, $p2) {

        if ($p1->getArea() == $p2->getArea()) {
            return 0;
        }

        return ($p1->getArea() < $p2->getArea() ) ? -1 : 1;

    }
}

?>