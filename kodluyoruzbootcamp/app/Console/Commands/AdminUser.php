<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\User;

class AdminUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'update:user-status';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Kullanıcı tablosundaki kullanıcıların admin bilgilerini günceller';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $user=User::all();
        $user->each(function($data){
            $data->update([
                'is_admin' => true
            ]);
        });
        return 0;
    }
}
