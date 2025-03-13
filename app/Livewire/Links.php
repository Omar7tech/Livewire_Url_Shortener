<?php

namespace App\Livewire;

use Livewire\Attributes\Lazy;
use Livewire\Attributes\Locked;
use Livewire\Attributes\On;
use Livewire\Component;
use Vinkla\Hashids\Facades\Hashids;


#[Lazy]
class Links extends Component
{
    #[On('link-created')]
    public function ResetPage()
    {
        $this->reset();
    }
    public function render()
    {
        $links = auth()->user()->links()->latest()->take(5)->get();
        $links_count = auth()->user()->links()->count();
        return view('livewire.links', compact("links", "links_count"));
    }



    public function destroy($id)
    {
        $link = auth()->user()->links()->findOrFail($id);
        $link->delete();
    }

    #[Locked]
    public function UpdateStatus($id): void
    {
        $link = auth()->user()->links()->findOrFail($id);
        $link->status = !$link->status;
        $link->save();
    }

}
