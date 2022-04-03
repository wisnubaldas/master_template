<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Pluralizer;
use Illuminate\Filesystem\Filesystem;

class TraitsCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:trait {nama_trait}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Membuat trait di laravel dengan cmd, cmiw.....';
    
    protected $files;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct(Filesystem $files)
    {
        parent::__construct();
        $this->files = $files;
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        if (preg_match('/[\/\'^£$%&*()}{@#~?><>,|=_+¬-]/', $this->argument('nama_trait')))
        {
            $this->info("Nama trait ngga boleh mengandung : ");
            $this->error('/[\/\'^£$%&*()}{@#~?><>,|=_+¬-]/');
            return 0;
        }

        $path = $this->getSourceFilePath();
        $this->makeDirectory(dirname($path));
        $contents = $this->getSourceFile();

        if (!$this->files->exists($path)) {
            $this->files->put($path, $contents);
            $this->info("File : {$path} created");
        } else {
            $this->info("File : {$path} already exits");
        }
        return 0;
    }
    public function getStubPath()
    {
        return __DIR__ . '/../../../stubs/trait.stub';
    }
    public function getSourceFilePath()
    {
        return base_path('App/Traits') .'/' .$this->getSingularClassName($this->argument('nama_trait')) . 'Trait.php';
    }
    public function getSingularClassName($name)
    {

        return ucwords(Pluralizer::singular($name));
    }
    public function getStubContents($stub , $stubVariables = [])
    {
        $contents = file_get_contents($stub);

        foreach ($stubVariables as $search => $replace)
        {
            $contents = str_replace('$'.$search.'$' , $replace, $contents);
        }

        return $contents;

    }
    public function getStubVariables()
    {
        return [
            'NAMESPACE'         => 'App\\Traits',
            'CLASS_NAME'        => $this->getSingularClassName($this->argument('nama_trait')),
        ];
    }
    public function getSourceFile()
    {
        return $this->getStubContents($this->getStubPath(), $this->getStubVariables());
    }
    protected function makeDirectory($path)
    {
        // bikin directori kalo belom ada
        if (! $this->files->isDirectory($path)) {
            $this->files->makeDirectory($path, 0777, true, true);
        }

        return $path;
    }
}
