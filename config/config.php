<?php
return array(
    'logs'          => array(
        'path' => 'backup/logs',
        'type' => 'file',
    ),
    'DB'            => array(
        'type'     => 'mysqli',
        'tablePre' => 'iwebshop_',
        'read'     => array(
            array('host' => 'localhost:3306', 'user' => 'root', 'passwd' => 'root', 'name' => 'iwebshop'),
        ),

        'write'    => array(
            'host' => 'localhost:3306', 'user' => 'root', 'passwd' => 'root', 'name' => 'iwebshop',
        ),
    ),
    //这个是拦截器，相当于框架的事件
    'interceptor'   => array('themeroute@onCreateController', 'layoutroute@onCreateView', 'plugin'),
    'langPath'      => 'language',
    'viewPath'      => 'views',
    'skinPath'      => 'skin',
    'classes'       => 'classes.*',
    'rewriteRule'   => 'url',//url类型，查看urlmanager_class的creatUrl方法
    'theme'         => array('pc' => array('default' => 'default', 'sysdefault' => 'blue', 'sysseller' => 'green'), 'mobile' => array('mobile' => 'default', 'sysdefault' => 'default', 'sysseller' => 'default')),
    'timezone'      => 'Etc/GMT-8',
    'upload'        => 'upload',
    'dbbackup'      => 'backup/database',
    'safe'          => 'cookie',
    'lang'          => 'zh_sc',
    'debug'         => '0',
    'configExt'     => array('site_config' => 'config/site_config.php'),
    'encryptKey'    => '362b3b68de89b360b15a314bc23e7ed1',
    'authorizeCode' => '',
);
