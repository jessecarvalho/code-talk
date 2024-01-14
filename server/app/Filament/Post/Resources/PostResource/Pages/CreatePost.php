<?php

namespace App\Filament\Post\Resources\PostResource\Pages;

use App\Filament\Post\Resources\PostResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreatePost extends CreateRecord
{
    protected static string $resource = PostResource::class;
}
