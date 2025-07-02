<?php

namespace IM1\MasterInstaller\Commands;

use CodeIgniter\CLI\BaseCommand;
use CodeIgniter\CLI\CLI;

class MasterInstall extends BaseCommand
{
    protected $group       = 'im1';
    protected $name        = 'im1:run';
    protected $description = 'Run the IM1 Master Installer Utk Dapat Semua Library';

    public function run(array $params)
    {
        CLI::newLine();
        CLI::write("                                    ':.                                         ", 'light_yellow');
        CLI::write("                                       []_____                                  ", 'light_yellow');
        CLI::write("                                      /\\      \\                                ", 'light_yellow');
        CLI::write("                                  ___/  \\__/\\__\\__                             ", 'light_yellow');
        CLI::write("                             ---/\\___\\ |''''''|__\\---                       ", 'light_yellow');
        CLI::write("                                ||'''| |''||''|''|                              ", 'white');
        CLI::write("                                ``\"\"\"`\"`\"))\"\"`\"\"``                              ", 'light_yellow');

            CLI::newLine();
        CLI::write('██╗    ██╗███████╗██╗      ██████╗ ██████╗ ███╗   ███╗███████╗    ██╗███╗   ███╗ ██╗', 'light_blue');
        CLI::write('██║    ██║██╔════╝██║     ██╔════╝██╔═══██╗████╗ ████║██╔════╝    ██║████╗ ████║███║', 'light_green');
        CLI::write('██║ █╗ ██║█████╗  ██║     ██║     ██║   ██║██╔████╔██║█████╗      ██║██╔████╔██║╚██║', 'light_green');
        CLI::write('██║███╗██║██╔══╝  ██║     ██║     ██║   ██║██║╚██╔╝██║██╔══╝      ██║██║╚██╔╝██║ ██║', 'light_green');
        CLI::write('╚███╔███╔╝███████╗███████╗╚██████╗╚██████╔╝██║ ╚═╝ ██║███████╗    ██║██║ ╚═╝ ██║ ██║', 'light_green');
        CLI::write(' ╚══╝╚══╝ ╚══════╝╚══════╝ ╚═════╝ ╚═════╝ ╚═╝     ╚═╝╚══════╝    ╚═╝╚═╝     ╚═╝ ╚═╝', 'light_blue');
        CLI::newLine();

        CLI::write(str_pad('Entertainment - Development - Productivity', 85, ' ', STR_PAD_BOTH), 'yellow');
        CLI::write(str_pad('& much more!', 85, ' ', STR_PAD_BOTH), 'light_green');
        CLI::write('');

        CLI::newLine();

        $option = CLI::prompt('Select option', [
            'Install Template',
            'Install Module',
            'Exit'
        ]);

        switch ($option) {
            case 'Install Theme':
                CLI::write('Installing Theme...');
                \CodeIgniter\CLI\Commands::run('im1:theme');
                break;

            case 'Install Module':
                CLI::write('Installing Module...');
                break;

            case 'Exit':
                CLI::write('Goodbye!');
                break;
        }
    }
}