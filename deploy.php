<?php
namespace Deployer;

require 'recipe/laravel.php';

// Project name
set('application', 'my_project');

// Project repository
set('repository', 'git@github.com:irooit/laravel_git.git');

// [Optional] Allocate tty for git clone. Default value is false.
set('git_tty', true);
// 设置保存的版本数
set('keep_releases', 10);
// Shared files/dirs between deploys
add('shared_files', ['.env']);
add('shared_dirs', []);

// Writable dirs by web server
add('writable_dirs', []);


// Hosts

host('47.106.91.212')
    ->user('irooit')
    ->port(22)
    ->identityFile('~/.ssh/irooit')
    ->set('deploy_path', '/data/wwwroot/laravel');
// Tasks

task('build', function () {
    run('cd {{release_path}} && build');
});

// 覆盖 recipe/laravel 里默认的 artisan:cache:clear 任务，部署时不清缓存
task('artisan:cache:clear', function () {
    return true;
});

// [Optional] if deploy fails automatically unlock.
after('deploy:failed', 'deploy:unlock');

// Migrate database before symlink new release.

//before('deploy:symlink', 'artisan:migrate');

// 重载 php-fpm
task('reload:php-fpm', function () {
    run('sudo /usr/sbin/service php-fpm reload');
});

after('deploy', 'reload:php-fpm');
