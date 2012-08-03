<?php
namespace Acme\DemoBundle\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class DucksboardCommand extends Command
{
    protected function configure()
    {
        $this
            ->setName('demo:duck')
            ->setDescription('duscksboard api')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $this->container = $this->getApplication()->getKernel()->getContainer();        

        $widget = $this->container->get('api.ducksboard');
        $widget->setData(array(69486 => array('value' => 11)));
        $widget->push();


        $widget = $this->container->get('api.ducksboard');
        $dateData1 = array(
            array('timestamp' => time(), 'value' => '130'),
            array('timestamp' => time() - ((24*60*60)) , 'value' => '50'),
            array('timestamp' => time() - ((2*24*60*60)) , 'value' => '70'),
            array('timestamp' => time() - ((3*24*60*60)) , 'value' => '20'),
            array('timestamp' => time() - ((4*24*60*60)) , 'value' => '50'),
            array('timestamp' => time() - ((4*24*60*60)) , 'value' => '80'),
            array('timestamp' => time() - ((4*24*60*60)) , 'value' => '100'));

        $dateData2 = array(
            array('timestamp' => time(), 'value' => '1'),
            array('timestamp' => time() - ((24*60*60)) , 'value' => '2'),
            array('timestamp' => time() - ((2*24*60*60)) , 'value' => '7'),
            array('timestamp' => time() - ((3*24*60*60)) , 'value' => '8'),
            array('timestamp' => time() - ((4*24*60*60)) , 'value' => '5'),
            array('timestamp' => time() - ((4*24*60*60)) , 'value' => '9'),
            array('timestamp' => time() - ((4*24*60*60)) , 'value' => '3'));

        $widgetGraphData = array(
            '69524'=> $dateData1,
            '69523' => $dateData2
            );

        $widget->setData($widgetGraphData);
        $widget->push();


        $output->writeln('Api Ok');

    }
}