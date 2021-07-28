<?php

namespace Jetimob\Studio360\Tests\Unit;

use Illuminate\Support\Facades\File;
use Jetimob\Studio360\Tests\TestCase;

class Studio360PackageTest extends TestCase
{
    protected string $configPath;

    protected function cleanUp(): void
    {
        if (File::exists($this->configPath)) {
            unlink($this->configPath);
        }
    }

    protected function setUp(): void
    {
        parent::setUp();
        $this->configPath = config_path('studio360.php');
        $this->cleanUp();
    }

    protected function tearDown(): void
    {
        parent::tearDown();
        $this->cleanUp();
    }

    /** @test */
    public function installShouldCopyConfigFiles(): void
    {
        $this->assertFileDoesNotExist($this->configPath);

        $this->artisan('studio360:install')
            ->expectsOutput('Arquivo de configuração copiado para ./config/studio360.php')
            ->assertExitCode(0);

        $this->assertFileExists($this->configPath);
        unlink($this->configPath);
    }

    /** @test */
    public function existingFileCanBeOverwritten(): void
    {
        File::put($this->configPath, '');
        $this->assertFileExists($this->configPath);

        $command = $this->artisan('studio360:install');
        $command->expectsQuestion('O arquivo de configuração já existe, deseja sobrescrever?', 'no');
        $command->assertExitCode(0);
    }

    /** @test */
    public function existingFileShouldBeOverwritten(): void
    {
        File::put($this->configPath, '');
        $this->assertFileExists($this->configPath);

        $command = $this->artisan('studio360:install');
        $command->expectsQuestion('O arquivo de configuração já existe, deseja sobrescrever?', 'yes');
        $command->expectsOutput('Arquivo de configuração sobrescrito');
        $command->assertExitCode(0);
    }
}
