<?php

namespace App\Console\Commands;
use App\Models\Counter;
use Illuminate\Console\Command;

class TestCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:test-command';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
                // Trova il primo record nella tabella counters (o crea uno nuovo se non esiste)
                $counter = Counter::firstOrCreate(['id' => 1], ['counter' => 0]);

                // Incrementa il valore del counter
                $counter->counter += 1;
        
                // Salva il record
                $counter->save();
        
                // Output per il log
                $this->info('Counter aggiornato a: ' . $counter->counter);
        
    }
}
