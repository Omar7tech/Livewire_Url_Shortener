<?php
namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CreateLinkForm extends Component
{
    public $url = '';
    public $isValid = false; // Track validation status

    protected function rules()
    {
        return [
            'url' => 'required|url:http,https|min:3'
        ];
    }


    public function updatedUrl()
    {
        $this->isValid = false;
        $this->validateOnly('url');
        $this->isValid = true;
    }

    public function save()
    {
        $this->validate();

        Auth::user()->links()->create([
            'original_url' => $this->url,
        ]);

        session()->flash('url_created', 'Link successfully created.');
        $this->dispatch('link-created');
        $this->reset();
    }

    public function render()
    {
        return view('livewire.create-link-form');
    }
}
