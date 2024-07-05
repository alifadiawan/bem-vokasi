<?php

namespace App\Http\Responses;

use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Livewire\Features\SupportRedirects\Redirector;

class RegistrationResponse extends \Filament\Http\Responses\Auth\RegistrationResponse
{
    public function toResponse($request): RedirectResponse|Redirector
    {
        if (Auth::user()->roles == 'admin') {
            return redirect('/admin');
        }

        return redirect('/blogs');
    }
}