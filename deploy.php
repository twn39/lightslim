<?php

namespace Deployer;

require 'recipe/common.php';

// Configuration
set('repository', 'git@domain.com:username/repository.git');
set('shared_files', []);
set('shared_dirs', [
    'logs',
    'cache',
]);
set('writable_dirs', [
    'logs',
    'cache',
]);

set('default_stage', 'development');
set('keep_releases', 20);
// Servers

host('production')
    ->hostname('127.0.0.1')
    ->user('username')
    ->set('deploy_path', '/var/www/domain.com')
    ->stage('production');

host('development')
    ->hostname('www.develop.example')
    ->user('root')
    ->set('deploy_path', '/var/www/html/web')
    ->stage('development');

// Tasks

desc('Restart PHP-FPM service');
task('php-fpm:restart', function () {
    // The user must have rights for restart service
    // /etc/sudoers: username ALL=NOPASSWD:/bin/systemctl restart php-fpm.service
    run('sudo systemctl restart php-fpm.service');
});
after('deploy:symlink', 'php-fpm:restart');

desc('Deploy your project');
task('deploy', [
    'deploy:prepare',
    'deploy:lock',
    'deploy:release',
    'deploy:update_code',
    'deploy:shared',
    'deploy:writable',
    'deploy:vendors',
    'deploy:clear_paths',
    'deploy:symlink',
    'deploy:unlock',
    'cleanup',
    'success',
]);

// [Optional] if deploy fails automatically unlock.
after('deploy:failed', 'deploy:unlock');
