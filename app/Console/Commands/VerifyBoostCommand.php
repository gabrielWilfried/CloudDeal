<?php

namespace App\Console\Commands;

use App\Models\Boost;
use Illuminate\Console\Command;

class VerifyBoostCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:boost';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Delete old Boosts annonce';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $boosts = Boost::where('end_at', '<', now())->where('is_finish', false)->get();
        $boosts->each(function ($boost) {
            $annonce = $boost->annonce;
            $annonce->level -= $boost->score;
            $annonce->save();
            $boost->is_finish = true;
            $boost->save();
        });
    }
}
