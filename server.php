  ```shell
  composer require "overtrue/wechat:~3.0" -vvv
  ```

```php
<?php

use EasyWeChat\Foundation\Application;

$options = [
    'debug'     => true,
    'app_id'    => 'wx8f720001ed08858d',
    'secret'    => '97a79edaa9de77af83af024378b9c38f',
    'token'     => ‘THISISCONNECTED’,
    'log' => [
        'level' => 'debug',
        'file'  => '/tmp/easywechat.log',
    ],
    // ...
];

$app = new Application($options);

$server = $app->server;
$user = $app->user;

$server->setMessageHandler(function($message) use ($user) {
    $fromUser = $user->get($message->FromUserName);

    return "{$fromUser->nickname} ConnectEd!”;
});

$server->serve()->send(); 
```

