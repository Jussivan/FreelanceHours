<?php

namespace App\Livewire\Proposals;

use Livewire\Component;

class Create extends Component
{
    public $modal = false;
    public function render()
    {
        return view('livewire.proposals.create');
    }
    public function save()
    {
        // Lógica para salvar a proposta
        $this->modal = false; // Fechar o modal após salvar
    }
}