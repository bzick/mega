<?php
/**
 *
 */

namespace Orc\OrcApi;


class Response
{

    /**
     * @var
     */
    public $job_id;

    public $data;

    public function isJob(): bool
    {
        return $this->job_id;
    }

    public function getJobId(): int
    {
        return $this->job_id;
    }
}