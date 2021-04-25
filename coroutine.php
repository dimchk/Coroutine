<?php


use App\Adapters\DbUserDataAdapter;
use App\Services\UserService;

require_once 'vendor/autoload.php';

try {
    $adapter = new DbUserDataAdapter();
    $service = new UserService($adapter);


    Co\run(function () use ($service) {

        go(function () use ($service) {
            Co::sleep(3);
            echo "Find by Id (run first but sleep 3 sec) \n", json_encode($service->findById(1)), "\n\n";
        });

        go(function () use ($service) {
            Co::sleep(2);
            echo "Find by Id (run second but sleep 2 sec) \n", json_encode($service->findByEmail("test@test.com")), "\n\n";
        });

        go(function () use ($service) {
            Co::sleep(1);
            echo "Find by Id (run third but sleep 1 sec) \n", json_encode($service->findByTelephone("+312312312")), "\n\n";
        });

    });
} catch (Exception $e) {
    //:Todo handle exception
}

