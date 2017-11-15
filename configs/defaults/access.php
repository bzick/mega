<?php


use Orc\Controller\DashboardController;
use Orc\Controller\MachineController;
use Orc\Controller\ProjectController;
use Orc\Controller\QueueController;

return [
    "admin" => [
        DashboardController::class => "*",
        MachineController::class   => "*",
        ProjectController::class   => "*",
        QueueController::class       => "*"
    ],
    "user" => [
        DashboardController::class => "*",
        MachineController::class   => [
            "get" => "*",
            "set" => "*",
            "add" => "*",
        ],
        ProjectController::class   => [
            "get" => "*"
        ],
        QueueController::class       => [
            "get" => "*"
        ]
    ]
];