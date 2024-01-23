<?php return array(
    'root' => array(
        'name' => '__root__',
        'pretty_version' => '1.0.0+no-version-set',
        'version' => '1.0.0.0',
        'reference' => NULL,
        'type' => 'library',
        'install_path' => __DIR__ . '/../../',
        'aliases' => array(),
        'dev' => true,
    ),
    'versions' => array(
        '__root__' => array(
            'pretty_version' => '1.0.0+no-version-set',
            'version' => '1.0.0.0',
            'reference' => NULL,
            'type' => 'library',
            'install_path' => __DIR__ . '/../../',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'akh/typograf' => array(
            'pretty_version' => 'v0.4.8',
            'version' => '0.4.8.0',
            'reference' => '75e01b3779483d21bfe833b772ea6c5f530c6803',
            'type' => 'library',
            'install_path' => __DIR__ . '/../akh/typograf',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'andreyryabin/sprint.migration' => array(
            'pretty_version' => 'dev-master',
            'version' => 'dev-master',
            'reference' => '13ab308b97939930978fd37f9bf023a61a66a557',
            'type' => 'bitrix-module',
            'install_path' => __DIR__ . '/../../modules/sprint.migration',
            'aliases' => array(
                0 => '9999999-dev',
            ),
            'dev_requirement' => false,
        ),
        'composer/installers' => array(
            'pretty_version' => 'v1.12.0',
            'version' => '1.12.0.0',
            'reference' => 'd20a64ed3c94748397ff5973488761b22f6d3f19',
            'type' => 'composer-plugin',
            'install_path' => __DIR__ . '/./installers',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'phpmailer/phpmailer' => array(
            'pretty_version' => 'v6.9.1',
            'version' => '6.9.1.0',
            'reference' => '039de174cd9c17a8389754d3b877a2ed22743e18',
            'type' => 'library',
            'install_path' => __DIR__ . '/../phpmailer/phpmailer',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'roundcube/plugin-installer' => array(
            'dev_requirement' => false,
            'replaced' => array(
                0 => '*',
            ),
        ),
        'shama/baton' => array(
            'dev_requirement' => false,
            'replaced' => array(
                0 => '*',
            ),
        ),
    ),
);
