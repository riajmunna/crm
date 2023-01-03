<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class AdminUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:admin-user';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create admin user Successfull';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $newUser=[
            'name'=>'Admin',
            'phone'=>'01766996853',
            'email'=>'admin@gmail.com',
            'password'=>bcrypt('11111111'),
            'user_type'=>'1',
        ];
        $user = User::create($newUser);
        if($user){echo 'New Admin User Created Successfully';}
        return Command::SUCCESS;
    }
}
