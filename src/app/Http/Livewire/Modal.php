<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Contact;
use LivewireUI\Modal\ModalComponent;

class Modal extends Component
{
    public $showModal = false;

    public $contacts;
    public $selectedContact = null;

    protected $listeners = ['openModal' => 'openModal'];

    public function render()
    {
        return view('livewire.modal');
    }

    public function mount()
    {
        //
    }

    public function openModal($id)
    {
        $this->selectedContact = Contact::find($id);
        $this->showModal = true;
    }

    public function closeModal()
    {
        $this->selectedContact = null;
        $this->showModal = false;
    }

    public function deleteContact($id)
    {
        Contact::destroy($id);
        $this->contacts = Contact::all();
        $this->selectedContact = null;
        $this->dispatchBrowserEvent('modal-close'); // モーダルを閉じる
    }
}