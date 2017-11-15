<?php
/**
 *
 */

namespace Orc\Controller;


use Mage\ControllerAbstract;
use Orc\Model\JobModel;

class JobAction extends ControllerAbstract
{
    /**
     * @var JobModel
     */
    public $job;

    public function __construct(JobModel $job)
    {
        $this->job = $job;
    }

    /**
     * Возвращает задачу
     * @return JobModel
     */
    public function getAction(): JobModel
    {
        return $this->job;
    }
}