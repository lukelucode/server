<?php

namespace OC\Core\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class Status extends Command
{
	protected function configure()
	{
		$this
			->setName('status')
			->setDescription('show some status information')
		;
	}

	protected function execute(InputInterface $input, OutputInterface $output)
	{
		$values = array(
			'installed' => \OC_Config::getValue('installed') ? 'true' : 'false',
			'version' => implode('.', \OC_Util::getVersion()),
			'versionstring' => \OC_Util::getVersionString(),
			'edition' => \OC_Util::getEditionString());
		print_r($values);
	}
}
