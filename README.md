## cmd
```
composer require pxlrbt/filament-excel
```
## /home/shah/sec/laravel-filament-cms/app/Filament/Resources/PostResource.php

```
->bulkActions([
    Tables\Actions\BulkActionGroup::make([
        Tables\Actions\DeleteBulkAction::make(),
        ExportBulkAction::make()->exports([
            ExcelExport::make()->withColumns([
                Column::make('title'),
                Column::make('slug'),
                Column::make('body'),
            ]),
        ]),
    ]),
]);
```
