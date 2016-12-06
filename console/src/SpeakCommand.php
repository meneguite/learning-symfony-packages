<?php

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;

class SpeakCommand extends Command
{
    protected function configure()
    {
        $this->setName('speak')
            ->setDescription('Speak a message.')
            ->addArgument('message', InputArgument::OPTIONAL, 'Message for print', 'No Message')
            ->addArgument('type', InputArgument::OPTIONAL, 'Message for print', 'info');
//            ->addOption();
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        //exec('say "Hello World"');

        $type = $input->getArgument('type');
        $output->writeln('<'.$type.'>'.$input->getArgument('message').'</'.$type.'>');
    }
}