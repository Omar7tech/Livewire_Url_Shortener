<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Register extends Component
{
    #[Validate('required|string|min:1')]
    public $name = '';

    #[Validate('required|email|unique:users,email')]
    public $email = '';

    #[Validate('required|min:6|confirmed')]
    public $password = '';

    public $password_confirmation = ''; // Add this line

    #[Layout('components.layouts.guest')]
    public function register()
    {
        // Validate the input fields
        $this->validate();

        // Create the user
        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);

        // Log in the user
        Auth::login($user);

        session()->flash('message', 'Registration successful! Welcome to your dashboard.');

        return $this->redirect(route('dashboard') , navigate: true);
    }

    public function render()
    {
        return view('livewire.auth.register');
    }
}
