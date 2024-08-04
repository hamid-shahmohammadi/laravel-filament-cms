<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;
use Ijpatricio\Mingle\Contracts\HasMingles;
use Ijpatricio\Mingle\Concerns\InteractsWithMingles;

class UserPage extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.user-page';

    public $name='hamid';

}
