<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Submission;

class MembershipForm extends Component
{
    public $name;
    public $email;
    public $membershipType;

    protected $rules = [
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'membershipType' => 'required|in:standard,premium',
    ];

    public function submitForm()
    {
        $this->validate();

        // Save the form data to the database
        Submission::create([
            'name' => $this->name,
            'email' => $this->email,
            'membership_type' => $this->membershipType,
        ]);

        session()->flash('message', 'Membership successfully submitted!');
        $this->reset(['name', 'email', 'membershipType']);
    }

    public function render()
    {
        return view('livewire.membership-form');
    }
}