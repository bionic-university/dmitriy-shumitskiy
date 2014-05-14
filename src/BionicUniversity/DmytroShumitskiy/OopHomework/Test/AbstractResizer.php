<?php
namespace BionicUniversity\DmytroShumitskiy\OopHomework\Test;


abstract class AbstractResizer
{
    /**
     * As a result square centralized  picture should be returned
     * @return mixed
     */
    abstract public function thumbnail();

    /**
     * @return mixed
     */
    abstract  function paste();

    /**
     * @return mixed
     */
    abstract function getCenter();
} 