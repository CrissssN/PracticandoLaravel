<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class MakeView extends Command
{
    protected $signature = 'make:view {name}';
    protected $description = 'Create a new Blade view';

    public function handle()
    {
        $name = $this->argument('name');
        $path = resource_path("views/{$name}.blade.php");

        if (File::exists($path)) {
            $this->error("The view {$name} already exists!");
            return 1;
        }

        File::put($path, "<!-- {$name} Blade View -->");
        $this->info("View {$name} created successfully!");
        return 0;
    }
}
