<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Contact;

class ContactList extends Component
{
    public $contacts;
    public $selectedContact = null;

    protected $listeners = ['closeModal'];

    public function render()
    {
        return view('livewire.contact-list');
    }

    public function mount()
    {
        $this->contacts = Contact::all();
    }

    public function showDetail($id)
    {
        $this->selectedContact = Contact::find($id);
        $this->dispatchBrowserEvent('open-modal');
    }

    public function deleteContact($id)
    {
        Contact::destroy($id);
        $this->contacts = Contact::all(); // 再読込
        $this->selectedContact = null;
        $this->dispatchBrowserEvent('modal-close'); // モーダルを閉じる
    }
}
