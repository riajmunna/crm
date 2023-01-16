<?php

namespace App\Console\Commands;

use App\Models\Batch;
use App\Models\Customer;
use App\Models\User;
use Illuminate\Console\Command;

class Demo extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:demo';

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
        $admin=[
            'name'=>'Admin',
            'phone'=>'01766996851',
            'email'=>'admin@gmail.com',
            'password'=>bcrypt('11111111'),
            'user_type'=>'1',
        ];
        $admin = User::create($admin);
        if($admin){echo 'New Admin User, ';}

        $agent=[
            'name'=>'Agent',
            'phone'=>'01766996852',
            'email'=>'agent@gmail.com',
            'password'=>bcrypt('22222222'),
            'user_type'=>'2',
        ];
        $agent = User::create($agent);
        if($agent){echo ' Agent User, ';}

        $employee=[
            'name'=>'Employee',
            'phone'=>'01766996853',
            'email'=>'employee@gmail.com',
            'password'=>bcrypt('33333333'),
            'user_type'=>'3',
        ];
        $employee = User::create($employee);
        if($employee){echo 'Employee User, ';}

        $batch=[
            'batch_id'=>'15',
        ];
        $batch = Batch::create($batch);
        if($batch){echo 'Batch Created Successfully';}

        return Command::SUCCESS;
    }
}
