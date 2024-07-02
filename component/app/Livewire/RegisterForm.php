<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;

class RegisterForm extends Component
{
    public $name;
    public $email;
    public $password;

    public function create(){
        //dd($this->name,$this->email,$this->password);
        $user = Post::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => $this->password,
        ]);
        //dd($user->id);
        $this->dispatch('user-created',$user); //listen to this dispatch from next component
        $this->reset();
    }
    public function render()
    {
        return view('livewire.register-form');
    }
}
