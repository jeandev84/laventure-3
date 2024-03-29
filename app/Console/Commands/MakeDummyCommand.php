<?php
namespace App\Console\Commands;


use Laventure\Component\Console\Command\Command;
use Laventure\Component\Console\Input\Contract\InputInterface;
use Laventure\Component\Console\Output\Contract\OutputInterface;



/**
 * Class MakeDummyCommand
 *
 * @package App\Console\Commands
 *
 * <Generated By Laventure 03/11/2022 01:50:40>
*/
class MakeDummyCommand extends Command
{

    /**
     * @var string
    */
    protected $name = 'make:dummy';



    /**
     * @var string
    */
    protected $description = 'describe your command here...';




    /**
     * @param InputInterface $input
     * @param OutputInterface $output
     * @return int
    */
    public function execute(InputInterface $input, OutputInterface $output): int
    {
           // put your logic here

           $output->success('You are ready for execution make:dummy');

           return Command::SUCCESS;
    }
}