<?php

namespace App\Providers;

use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
  /**
   * Register any application services.
   */
  public function register(): void
  {
    //
  }

  /**
   * Bootstrap any application services.
   */
  public function boot(): void
  {
    VerifyEmail::toMailUsing(function ($notifiable, $url) {
      return (new MailMessage)
        ->greeting('Hello!')
        ->subject('Verifikasi Alamat Email Anda')
        ->line('Klik tombol dibawah ini untuk verifikasi, Terimakasih')
        ->action('Verifikasi Alamat Email Anda', $url);
    });
  }
}
