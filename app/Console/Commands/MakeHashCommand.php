<?php
namespace App\Console\Commands;


use Laventure\Component\Console\Command\Command;
use Laventure\Component\Console\Input\Contract\InputInterface;
use Laventure\Component\Console\Output\Contract\OutputInterface;


/**
 * Class MakeHashCommand
 *
 * @package App\Console\Commands
 *
 * <Generated By Laventure 31/10/2022 22:03:54>
*/
class MakeHashCommand extends Command
{


    protected function configure()
    {
         $this->name('make:hash')
              ->description('Make hash password')
              ->help('Command make:hash permit to hash more secure password.')
//              ->addArgument('algo', 'permit to check algorithm you want to hash password', '', [
//                   InputParameter::REQUIRED
//              ])
              ->addOption('cost', 'permit to check cost to hash password', 'c')
         ;
    }




    /**
     * @param InputInterface $input
     * @param OutputInterface $output
     * @return int
    */
    public function execute(InputInterface $input, OutputInterface $output): int
    {
           // put your logic here

           dump($input->getArgument('algo'));
           dump($input->getOption('cost'));
           dump($input->getOption('c'));

           $output->success('You are ready for execution make:hash');

           return Command::SUCCESS;
    }
}