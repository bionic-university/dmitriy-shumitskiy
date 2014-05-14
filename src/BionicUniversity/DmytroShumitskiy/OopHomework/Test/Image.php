<?php

namespace BionicUniversity\DmytroShumitskiy\OopHomework\Test;

/**
 * Class Image
 * @package BionicUniversity\DmytroShumitskiy\OopHomework\Test
 */
class Image extends AbstractResizer implements ImageInterface
{
    /**
     * @var
     */
    private $height;
    /**
     * @var
     */
    private $width;
    /**
     * @var
     */
    private $xCenter;
    /**
     * @var
     */
    private $yCenter;
    /**
     * @var array
     */
    private $pasteImageCoordinate = [];
    /**
     * @var
     */
    private $xLeft;
    /**
     * @var
     */
    private $xRight;
    /**
     * @var
     */
    private $yUp;
    /**
     * @var
     */
    private $yDown;

    /**
     * @param $height
     * @param $width
     */
    public function __constructor($height, $width)
    {
        $this->height = $height;
        $this->width = $width;
    }

    /**
     * As a result square centralized  picture should be returned
     * @return mixed
     */
    public function thumbnail()
    {
        $this->xLeft = $this->xCenter - 40;
        $this->xRight = $this->xCenter + 40;
        $this->$yUp = $this->yCenter + 40;
        $this->$yDown = $this->yCenter - 40;
    }

    public function getCenter()
    {
        $this->xCenter = $this->width / 2;
        $this->yCenter = $this->height / 2;
    }

    public function paste()
    {
        array_push(
            $this->pasteImageCoordinate,
            [$this->xLeft, $this->yUp],
            [$this->xRight, $this->yUp,],
            [$this->yDown, $this->xRight],
            [$this->xLeft, $this->yDown]
        );
    }
}