<?php

class Task
{
    public $description;

    /**
     * Task constructor.
     * @param array $tasks
     */
    public function __construct($description)
    {
        $this->description = $description;
    }
}