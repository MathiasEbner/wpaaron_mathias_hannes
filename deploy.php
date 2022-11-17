<?php
namespace Deployer;

require 'recipe/wordpress.php';

// Config

set('repository', 'git@github.com:MathiasEbner/wpaaron_mathias_hannes.git');

add('shared_files', []);
add('shared_dirs', []);
add('writable_dirs', []);

// Hosts

host('vm-ultramarine.multimediatechnology.at/')
    ->set('remote_user', 'admin')
    ->set('port', 5412)
    ->set('deploy_path', '~/aaron-wp');


// Hooks

after('deploy:failed', 'deploy:unlock');
