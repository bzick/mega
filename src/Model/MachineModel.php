<?php
/**
 *
 */

namespace Orc\Model;


use Mage\DI\ContainerAbstract;
use Mage\ModelAbstract;

class MachineModel extends ModelAbstract
{

    /**
     * @var string
     */
    public $id;
    /**
     * @var ProjectModel
     */
    public $project;

    /**
     * @var string
     */
    public $role;

    /**
     * @var string
     */
    public $primary_dc;

    /**
     * @var int количество CRU
     */
    public $cpu = 2;
    /**
     * @var int количество памяти в GB
     */
    public $mem = 1;
    /**
     * @var int количество дискового пространства в GB
     */
    public $disk = 3;
    /**
     * Поиск модели по целочисленному id
     * @param int $id
     * @param ContainerAbstract $di
     *
     * @return ModelAbstract
     */
    public static function findById(int $id, $di)
    {
        throw new \RuntimeException("Not implemented");
    }

    /**
     * Поиск модели по токену, коду
     * @param string $token
     * @param $di
     * @return mixed
     */
    public static function findByToken(string $token, $di)
    {
        $model = new static([], $di);
        $model->id = $token;
        $model->role = "elastic";
        $model->cpu = 8;
        $model->mem = 32;

        return $model;
    }

    public function add(): self
    {

    }

    public function update(self $machine): self
    {

    }

    public function delete(): bool
    {
        throw new \RuntimeException("Not implemented");
    }
}