<?php
 
namespace App\Command;
use Pimcore\Console\AbstractCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Pimcore\Model\DataObject\Beauty;

 
class Beautycsv extends AbstractCommand {
 
    protected function configure()
    {
        $this
        ->setName('import:beauty')
        ->setDescription('this command imports data');
    //  ->addArgument("class_name", InputArgument::REQUIRED);
    }
 
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
    //  $output->writeln("Class to import : " . $input->getArgument("class_name"));
    //  return Command::SUCCESS;
        $object=new Beauty();
        $object->setKey('beautycsvobject1');
        $object->setParentId(97);
        $path = 'public/csv/beautycsv.csv';
 
        $file = file($path);

        foreach ($file as $k) 
        {
        $csv[] = explode(',', $k);
        }

        $object->setBeautyType($csv[1][0]);
        $object->setDescription($csv[1][1]);
        $object->setPrice($csv[1][2]);
        $object->setDiscount($csv[1][3]);
        //$object->setSelectCategory->setSkinCare->setBrand->($csv[1][4]);
        //$object->setPublished(true);

        $object->save();
        return 0;
    }
}
