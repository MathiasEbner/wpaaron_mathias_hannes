<?php
namespace Deployer;

require 'recipe/wordpress.php';

// Config

set('repository', 'https://github.com/MathiasEbner/wpaaron_mathias_hannes');

set('shared_files', ['public/wp-config.php']);
set('shared_dirs', ['public/wp-content/uploads']);


// Hosts
host('vm-ultramarine.multimediatechnology.at')
    ->set('remote_user', 'admin')
    ->set('port', 5412)
    ->set('deploy_path', '~/aaron-wp');


// Hooks
after('deploy:failed', 'deploy:unlock');
