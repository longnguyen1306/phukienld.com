<?php

namespace App\Http\Livewire\Auth;

use App\Models\User;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class Register extends Component
{
    use LivewireAlert;
    public $name;
    public $email;
    public $phone;
    public $pass;

    protected $rules = [
        'email' => 'required|email',
        'pass' => 'required|min:6',
        'name' => 'required|min:4',
        'phone' => 'required|numeric'
    ];

    protected $messages = [
        'email.required' => 'Email không được để trống.',
        'pass.required' => 'Mật khẩu không được để trống.',
        'email.email' => 'Email không hợp lệ.',
        'pass.min' => 'Mật khẩu ít nhất là :min ký tự.',
    ];

    public function register(User $user) {
        $this->validate();

        $user = $user->create([
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'password' => bcrypt($this->pass),
        ]);
        if ($user) {
            $this->alert('success', 'This is not as toast alert', [
                'toast' => false,
                'position' => 'center',
                'timer' => 3000,
                'timerProgressBar' => true,
            ]);
            return redirect()->route('home.login');
        }
    }

    public function render()
    {
        return view('livewire.auth.register')->extends('layouts.app');
    }
}
