<?php

namespace App\Http\Responses;

use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Livewire\Features\SupportRedirects\Redirector;
use Filament\Notifications\Notification;

class LoginResponse extends \Filament\Http\Responses\Auth\LoginResponse
{
    public function toResponse($request): RedirectResponse|Redirector
    {
        if (Auth::user()->roles == 'admin') {

            Notification::make()
                ->title('Logged in successfully')   
                ->color('success')
                ->success()
                ->seconds(3)
                ->send();

            return redirect('/admin');
        }

        return redirect('/blogs');
    }
}