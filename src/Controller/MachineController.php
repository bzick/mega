<?php
/**
 *
 */

namespace Orc\Controller;


use Mage\ControllerAbstract;
use Orc\Model\MachineModel;

class MachineController extends ControllerAbstract
{
    /**
     * @var MachineModel
     */
    public $context;

    public function __construct(MachineModel $machine)
    {
        $this->context = $machine;
    }

    /**
     * @return MachineModel
     */
    public function getAction(): MachineModel
    {
        return $this->context;
    }

    /**
     * @param MachineModel $machine
     * @return MachineModel
     */
    public function setAction(MachineModel $machine): MachineModel
    {
        return $this->context->update($machine);
    }

    /**
     * @return bool
     */
    public function deleteAction(): bool
    {
        return $this->context->delete();
    }

    /**
     * @return bool
     */
    public function doLockAction(): bool
    {

    }

    /**
     * @return MachineModel
     */
    public function getCopyAction(): MachineModel
    {
        $copy = clone $this->context;
        $copy->id = "";
        return $copy;
    }
}