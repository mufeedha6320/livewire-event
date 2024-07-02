<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class UsersList extends Component
{
    use WithPagination;

    public function updateList($user){}
    #[On('user-created')]
    public function render()
    {
        $users = Post::latest()->paginate(5);
        return view('livewire.users-list',compact('users'));
    }
}
