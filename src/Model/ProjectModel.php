<?php
/**
 *
 */

namespace Orc\Model;


use Mage\DI\ContainerAbstract;
use Mage\ModelAbstract;

class ProjectModel extends ModelAbstract
{

    /**
     * @var string
     */
    public $name;
    /**
     * Поиск модели по целочисленному id
     * @param int $id
     * @param ContainerAbstract $di
     *
     * @return ModelAbstract
     */
    public static function findById(int $id, $di)
    {
        // TODO: Implement findById() method.
    }

    /**
     * Поиск модели по токену, коду
     * @param string $token
     * @param $di
     * @return mixed
     */
    public static function findByToken(string $token, $di)
    {
        // TODO: Implement findByToken() method.
    }
}