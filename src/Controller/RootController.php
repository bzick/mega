<?php

namespace Orc\Controller;


use Mage\ControllerAbstract;
use Mage\State;
use Orc\Model\JobModel;
use Orc\Model\MachineModel;
use Orc\Model\ProjectModel;
use Orc\Model\RoleModel;

class RootController extends ControllerAbstract
{

    /**
     * Дашборд
     *
     * @return DashboardController
     */
    public function getAction(): DashboardController
    {
        return new DashboardController();
    }

    /**
     * Проекты
     *
     * @param ProjectModel $project
     * @param RoleModel $role
     * @return ProjectController
     */
    public function getProjectAction(ProjectModel $project, RoleModel $role = null): ProjectController
    {
        return new ProjectController($project, $role);
    }

    /**
     * Работа с виртуалкой
     *
     * @param MachineModel $machine
     * @return MachineController
     */
    public function getMachineAction(MachineModel $machine): MachineController
    {
        $this->di->repository->findById(MachineModel::class, "elastic.site.m");
        $this->di->repository->findByToken(MachineModel::class, "elastic.site.m");
        $this->di->repository->machine->find(MachineModel::class)->where(["cpu", ]);
        $this->di->repository->machine->findOne()->where("author.deleted = 1");
        return new MachineController(MachineModel::findById($machine));
    }

    /**
     * Создать новую машину
     *
     * @param MachineModel $machine
     * @return MachineModel
     * @throws \Mage\Exception\StateException
     */
    public function addMachineAction(MachineModel $machine): MachineModel
    {
        if($machine->cpu > 32) {
            throw State::badRequest("Too many CPUs (1..32)");
        }
        if($machine->mem > 128) {
            throw State::badRequest("Invalid memory size (1..128)");
        }
        return $machine->add();
    }

    /**
     * Очередь
     *
     * @return QueueController
     */
    public function getQueueAction(): QueueController
    {
        return new QueueController();
    }

    /**
     * Задачи
     *
     * @param JobModel $job
     * @return JobAction
     */
    public function getJobAction(JobModel $job): JobAction
    {
        return new JobAction($job);
    }
}