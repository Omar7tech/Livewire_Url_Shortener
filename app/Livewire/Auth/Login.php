<?php
namespace App\Livewire\Auth;

use Livewire\Attributes\Validate;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;


class Login extends Component
{
    #[Validate('required|email')]
    public $email = '';

    #[Validate('required|min:6')]
    public $password = '';

    public function login()
    {

        $this->validate();


        if (Auth::attempt(['email' => $this->email, 'password' => $this->password])) {
            return $this->redirect(route('dashboard'), navigate: true);
        } else {
            $this->addError('email', 'Invalid credentials.');
        }
    }

    

    #[Layout('components.layouts.guest')]
    public function render()
    {
        return view('livewire.auth.login');
    }
}
