<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class User extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'add:user {name} {password}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Add user in DB';

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
     * @return mixed
     */
    public function handle()
    {
        $name = $this->argument('name');
        $password = $this->argument('password');

        $fields = [
            'name'=>$name,
            'password'=>bcrypt($password),
            'email' => 'admin@admin.ru'
        ];

        try{
            \App\Models\User::create($fields);
        } catch (\Exception $exception){
            $this->error($exception->getMessage());
        }

        return true;
    }
}
