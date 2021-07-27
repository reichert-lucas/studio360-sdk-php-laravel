<?php

namespace Jetimob\Studio360\Console;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Jetimob\Studio360\Studio360ServiceProvider;

class Studio360InstallPackage extends Command
{
    protected $signature = 'studio360:install';

    protected $description = 'Publishes Studio360\'s configuration';

    public function handle(): void
    {
        if (File::exists(config_path('studio360.php'))) {
            if ($this->confirm('O arquivo de configuração já existe, deseja sobrescrever?', false)) {
                $this->publish(true);
                $this->info('Arquivo de configuração sobrescrito');
            }

            return;
        }

        $this->publish();
        $this->info('Arquivo de configuração copiado para ./config/studio360.php');
    }

    private function publish($force = false): void
    {
        $params = [
            '--provider' => Studio360ServiceProvider::class,
            '--tag'      => 'config'
        ];

        if ($force) {
            $params['--force'] = '';
        }

        $this->call('vendor:publish', $params);
    }
}
