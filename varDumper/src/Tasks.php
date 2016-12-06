<?php

class Tasks
{
    protected $tasks;

    /**
     * Task constructor.
     * @param array $tasks
     */
    public function __construct(array $tasks)
    {
        $this->tasks = $tasks;
    }
}