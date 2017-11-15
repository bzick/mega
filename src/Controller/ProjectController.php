<?php
/**
 *
 */

namespace Orc\Controller;


use Mage\ControllerAbstract;
use Orc\Model\ProjectModel;
use Orc\Model\RoleModel;

class ProjectController extends ControllerAbstract
{

    public function __construct(ProjectModel $project, RoleModel $role = null)
    {

    }
}