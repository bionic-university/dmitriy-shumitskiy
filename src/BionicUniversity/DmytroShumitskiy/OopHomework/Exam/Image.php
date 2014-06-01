<?php

namespace BionicUniversity\DmytroShumitskiy\OopHomework\Exam;

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
    private $x1;
    /**
     * @var
     */
    private $x2;
    /**
     * @var
     */
    private $y2;
    /**
     * @var
     */
    private $y1;
    /**
     * @var
     */
    private $reduction;

    /**
     * @param $height
     * @param $width
     * @param $reduction
     */
    public function __constructor($height, $width, $reduction)
    {
        $this->height = $height;
        $this->width = $width;
        $this->reduction = $reduction;
    }

    /**
     * As a result square centralized  picture should be returned
     * @return mixed
     */
    public function thumbnail()
    {
        if ($this->width > $this->height) {
            $this->x1 = $this->xCenter * ($this->y1 / $this->xCenter);
            $this->x2 = $this->xCenter * ($this->y2 / $this->xCenter);
            $this->$y2 = $this->yCenter + ($this->yCenter * $this->reduction);
            $this->$y1 = $this->yCenter - ($this->yCenter * $this->reduction);
        } elseif ($this->width < $this->height) {
            $this->x1 = $this->xCenter - ($this->xCenter * $this->reduction);
            $this->x2 = $this->xCenter + ($this->xCenter * $this->reduction);
            $this->$y2 = $this->yCenter * ($this->x2 / $this->yCenter);
            $this->$y1 = $this->yCenter * ($this->x1 / $this->yCenter);
        } elseif ($this->width == $this->height) {
            $this->x1 = $this->xCenter - ($this->xCenter * $this->reduction);
            $this->x2 = $this->xCenter + ($this->xCenter * $this->reduction);
            $this->$y2 = $this->yCenter + ($this->yCenter * $this->reduction);
            $this->$y1 = $this->yCenter - ($this->yCenter * $this->reduction);
        }
    }

    /**
     * @return mixed|void
     */
    public function getCenter()
    {
        $this->xCenter = $this->width / 2;
        $this->yCenter = $this->height / 2;
    }

    /**
     * @return mixed|void
     */
    public function paste()
    {
        array_push(
            $this->pasteImageCoordinate,
            [$this->x1, $this->y1],
            [$this->x2, $this->y1],
            [$this->x2, $this->y2],
            [$this->x1, $this->y2]
        );
    }
}
