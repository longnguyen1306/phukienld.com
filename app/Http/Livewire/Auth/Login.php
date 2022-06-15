<?php

namespace App\Http\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Login extends Component
{
    use LivewireAlert;
    public $email;
    public $pass;

    protected $rules = [
        'email' => 'required|email',
        'pass' => 'required|min:6'
    ];

    protected $messages = [
        'email.required' => 'Email không được để trống.',
        'pass.required' => 'Mật khẩu không được để trống.',
        'email.email' => 'Email không hợp lệ.',
        'pass.min' => 'Mật khẩu ít nhất là :min ký tự.',
    ];
    protected $listeners = [
        'confirmed',
        'cancelled'
    ];


    public function login() {
        $this->validate();

        if (Auth::attempt(['email' => $this->email, 'password' => $this->pass])) {
            $this->alert('success', 'Đăng nhập thành công', [
                'position' => 'center',
                'timer' => 3000,
                'toast' => false,
                'timerProgressBar' => true,
                'showConfirmButton' => true,
                'onConfirmed' => 'confirmed',
                'showCancelButton' => true,
                'onDismissed' => 'cancelled',
            ]);
        } else {
            $this->alert('error', 'Tên đăng nhập hoặc mật khẩu không đúng', [
                'toast' => false,
                'position' => 'center',
                'timer' => 2000,
                'timerProgressBar' => true,
            ]);
        }
    }

    public function confirmed()
    {
        return redirect()->route('home.index');
    }

    public function cancelled()
    {
        return redirect()->to('/');
    }

    public function mount() {
        if (Auth::check()) {
            return redirect()->to('/');
        }
    }

    public function render()
    {
        return view('livewire.auth.login')->extends('layouts.app');
    }
}
