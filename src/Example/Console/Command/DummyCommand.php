<?php

namespace Example\Console\Command;

/**
 * Composer library
 * Based on Example library (https://github.com/shakahl/skeleton-composer-project)
 *
 * Copyright (c) 2015 Soma Szélpál
 * Soma Szélpál, http://shakahl.com
 *
 * MIT Licensed
 * 
 * @category  Example\Console\Command
 * @package   Example\Console\Command
 * @author    Soma Szélpál <szelpalsoma@gmail.com>
 * @license   MIT Open Source License http://opensource.org/osi3.0/licenses/mit-license.php
 * @version @package-version@
 */

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Dummy command controller
 */
class DummyCommand extends Command
{
    protected function configure()
    {
        $this
            ->setName('example:greet')
            ->setDescription('Greet someone')
            ->addArgument(
                'name',
                InputArgument::OPTIONAL,
                'Who do you want to greet?'
            )
            ->addOption(
               'yell',
               null,
               InputOption::VALUE_NONE,
               'If set, the task will yell in uppercase letters'
            )
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $name = $input->getArgument('name');
        if ($name) {
            $text = 'Hello '.$name;
        } else {
            $text = 'Hello';
        }

        if ($input->getOption('yell')) {
            $text = strtoupper($text);
        }

        $output->writeln($text);
    }
}

