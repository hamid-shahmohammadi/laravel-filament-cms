## cmd
```
composer require ariaieboy/filament-jalali-datetimepicker
```
## /home/shah/sec/laravel-filament-cms/app/Filament/Resources/PostResource.php

```
Forms\Components\DateTimePicker::make('published_at')->jalali(),
Tables\Columns\TextColumn::make('published_at')
                ->jalaliDateTime()
                    ->sortable(),
```
