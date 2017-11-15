<?php
/**
 *
 */

namespace Orc\Model;


use Mage\DI\ContainerAbstract;
use Mage\ModelAbstract;

class JobModel extends ModelAbstract
{

    public $id;

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