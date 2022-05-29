<?php

namespace App\Http\Livewire\User;

use LivewireUI\Modal\ModalComponent;
use App\Repositories\User\UserRepository;
use Illuminate\Support\Facades\Hash;

class UserForm extends ModalComponent
{
    
    protected $modal;

    public $name;
    public $email;
    public $password;
    public $id_user;

    protected $repository;

    public function mount($modal, $user)
    {
        $this->modal = $modal;   
        if (!empty($user)) {
            $this->name = $user['name'];
            $this->email = $user['email'];
            $this->id_user = $user['id'];
        }
    }

    public function render()
    {
        return view('livewire.user.user-form')
            ->with('modal', $this->modal);
    }

    public function createuser() {
        app(UserRepository::class)->create(array(
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password)
        ));
        $this->emit('closeModal', 'user.user-form');
        $this->emit('refreshUser', 'user.index');
    }

    public function updateuser() {
        if (empty($this->password)) {
            /** Keep password as old */
            app(UserRepository::class)->update(array(
                'name' => $this->name,
                'email' => $this->email,
            ), $this->id_user);
        } else {
            /** Change new password */
            app(UserRepository::class)->update(array(
                'name' => $this->name,
                'email' => $this->email,
                'password' => Hash::make($this->password)
            ), $this->id_user);
        }
        $this->emit('closeModal', 'user.user-form');
        $this->emit('refreshUser', 'user.index');
    }

    public function deleteuser($user_id) {
        \Log::info($user_id);
    }
}
