<?php

/**
 * Class Figure
 */
abstract class Figure
{
    protected $bodyColor;
    protected $lineColor;
    protected $lineWidth;
    protected $opacity;

    public function __construct($params)
    {

    }

    abstract public function draw();
}