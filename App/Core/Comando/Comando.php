<?php

/*namespace App\Core\Comando;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class Comando extends Command
{
    protected static $defaultName = 'maker';

    protected function configure()
    {
        $this->setDescription('Gera uma classe e coloca dentro de uma pasta especificada.');
        $this->addArgument('nomeDaClasse', InputArgument::REQUIRED, 'Nome da classe a ser gerada.');
        $this->addArgument('pastaDestino', InputArgument::REQUIRED, 'Pasta destino para a classe gerada.');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $nomeDaClasse = ucfirst($input->getArgument('nomeDaClasse'));
        $pastaDestino = $input->getArgument('pastaDestino');

        // Restante da lógica para gerar a classe

        $output->writeln("Classe gerada com sucesso em $caminhoArquivo");
        
        return Command::SUCCESS;
    }
}*/