<?php

require (dirname(__DIR__)) . '/vendor/autoload.php';
$config=new Swagger\Client\Configuration();
$config->setApiKey("Authorization","6f6abd892f7a06f86fd280df8585e2d47df81fb6");
$a = new Swagger\Client\Api\DefaultApi(null,$config);


try {
    var_dump($a->getLock("hj-live-php","DEV","default","application"));
    var_dump(
        $a->postField(
            new Swagger\Client\Model\FieldBase(
                [
                    'key'                    => 'test1',
                    'value'                  => '测试',
                    'comment'                => '测试',
                    'data_change_created_by' => true,
                ]
            ),
            "hj-live-php",
            "DEV",
            "default",
            "application"
        )
    );
} catch (Swagger\Client\ApiException $e) {
    var_dump($e);
}
