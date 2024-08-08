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

    /**
     * Teste para garantir o funcionando da instalação do arquivo de configuração
     * do SDK caso não exista deve criar
     */
    public function testInstallShouldCopyConfigFiles(): void
    {
        $this->assertFileDoesNotExist($this->configPath);

        $this->artisan('studio360:install')
            ->expectsOutput('Arquivo de configuração copiado para ./config/studio360.php')
            ->assertExitCode(0);

        $this->assertFileExists($this->configPath);
        unlink($this->configPath);
    }

    /**
     * Teste para garantir o funcionando da instalação do arquivo de configuração
     * do SDK caso já exista deve informar mensagem e não sobrescrever
     */
    public function testExistingFileCanBeOverwritten(): void
    {
        File::put($this->configPath, '');
        $this->assertFileExists($this->configPath);

        $command = $this->artisan('studio360:install');
        $command->expectsQuestion('O arquivo de configuração já existe, deseja sobrescrever?', 'no');
        $command->assertExitCode(0);
    }

    /**
     * Teste para garantir o funcionando da instalação do arquivo de configuração
     * do SDK caso já exista deva sobrescrever
     */
    public function testExistingFileShouldBeOverwritten(): void
    {
        File::put($this->configPath, '');
        $this->assertFileExists($this->configPath);

        $command = $this->artisan('studio360:install');
        $command->expectsQuestion('O arquivo de configuração já existe, deseja sobrescrever?', 'yes');
        $command->expectsOutput('Arquivo de configuração sobrescrito');
        $command->assertExitCode(0);
    }
}
