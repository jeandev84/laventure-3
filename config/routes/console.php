<?php

use Laventure\Component\Console\Command\Command;
use Laventure\Foundation\Facade\Console\Schedule;


Schedule::command('demo', function (Command $command) {
    $command->description('do something like demo :)');
});


Schedule::command('make:user', function (Command $command) {
    $command->description('Create a new user .');
});