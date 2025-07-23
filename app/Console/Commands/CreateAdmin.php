<?php

namespace App\Console\Commands;

use App\Models\Admin;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;

class CreateAdmin extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'admin:create';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new admin account';

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle()
    {
        try {

            // Get admin details
            $username = $this->ask('Enter admin username');
            $email    = $this->ask('Enter admin email address');
            $password = $this->secret('Enter admin password');

            // Validate username
            if (!$username || strlen($username) > 60 || Admin::where('username', $username)->exists()) {
                $this->error('Username is required, must not exceed 60 characters, and must be unique');
                return;
            }

            // Validate email
            if (!$email || strlen($email) > 60 || !filter_var($email, FILTER_VALIDATE_EMAIL) || Admin::where('email', $email)->exists()) {
                $this->error('Email must be valid, not exceed 60 characters, and must be unique');
                return;
            }

            // Validate password
            if (!$password || strlen($password) > 60) {
                $this->error('Password is required and must not exceed 60 characters');
                return;
            }

            // Create admin
            $admin = new Admin();
            $admin->uid = uid();
            $admin->username = $username;
            $admin->email = $email;
            $admin->password = Hash::make($password);
            $admin->save();

            // Success message
            $this->info('Admin account created successfully!');
            $this->table(['Username', 'Email'], [[$admin->username, $admin->email]]);

        } catch (\Exception $e) {
            $this->error($e->getMessage());
        }
    }
} 