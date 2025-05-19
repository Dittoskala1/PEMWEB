<?php

namespace App\Livewire;

use Livewire\Component;

class ShowHomePage extends Component
{
    public function render()
    {
        return view('show-home-page') // <== nama view, sesuai dengan `resources/views/show-home-page.blade.php`
            ->layout('components.layouts.app', [
                'title' => 'Home',
                'bodyClass' => 'index-page'
            ]);
    }
}
