<?php
namespace BionicUniversity\DmytroShumitskiy\OopHomework\Exam;

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
    abstract public function paste();

    /**
     * @return mixed
     */
    abstract public function getCenter();
}
