<?php

namespace IM1\MasterInstaller\Commands;

use CodeIgniter\CLI\BaseCommand;
use CodeIgniter\CLI\CLI;

class MasterInstall extends BaseCommand
{
    protected $group       = 'IM1';
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

        CLI::write('Sila pilih nak buat yang mana:');
        CLI::write('  [1] Install Template?');
        CLI::write('  [2] Install Module?');
        CLI::write('  [3] Exit');
                CLI::write();

        $input = CLI::prompt('Enter number (1-3)');

        switch ($input) {
            case '1':
                CLI::write();
                CLI::write('Redirect gi theme template... tunggu jap...','yellow');
                $this->call('im1:theme');
                break;

            case '2':
                CLI::write('Installing Module...');
                break;

            case '3':
                CLI::write('Goodbye!');
                break;

            default:
                CLI::error('Invalid input.');
                break;
        }

    }
}