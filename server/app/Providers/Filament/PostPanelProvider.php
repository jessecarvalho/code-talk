<?php

namespace App\Providers\Filament;

use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Filament\Pages;
use Filament\Panel;
use Filament\PanelProvider;
use Filament\Support\Colors\Color;
use Filament\Widgets;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\AuthenticateSession;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\View\Middleware\ShareErrorsFromSession;

class PostPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->id('post') // Define um identificador único para o painel
            ->path('post') // Define o caminho para o painel na URL
            ->colors([
                'primary' => Color::Amber, // Define as cores do painel
            ])
            ->discoverResources(in: app_path('Filament/Post/Resources'), for: 'App\\Filament\\Post\\Resources') // Descobre os recursos do painel
            ->discoverPages(in: app_path('Filament/Post/Pages'), for: 'App\\Filament\\Post\\Pages') // Descobre as páginas do painel
            ->pages([
                Pages\Dashboard::class, // Define as páginas do painel
            ])
            ->discoverWidgets(in: app_path('Filament/Post/Widgets'), for: 'App\\Filament\\Post\\Widgets') // Descobre os widgets do painel
            ->widgets([
                Widgets\AccountWidget::class,
                Widgets\FilamentInfoWidget::class,
            ])
            ->middleware([
                EncryptCookies::class,
                AddQueuedCookiesToResponse::class,
                StartSession::class,
                AuthenticateSession::class,
                ShareErrorsFromSession::class,
                VerifyCsrfToken::class,
                SubstituteBindings::class,
                DisableBladeIconComponents::class,
                DispatchServingFilamentEvent::class,
            ]) // Define os middlewares para o painel
            ->authMiddleware([
                Authenticate::class, // Define os middlewares de autenticação para o painel
            ]);
    }
}
