## cmd
```
php artisan make:migration add_jdate_to_posts_table --table=posts
```
## /home/shah/sec/laravel-filament-cms/database/migrations/2024_01_28_074932_add_jdate_to_posts_table.php
```
public function up(): void
{
    Schema::table('posts', function (Blueprint $table) {
        $table->string('jdate')->nullable();
    });
}

/**
    * Reverse the migrations.
    */
public function down(): void
{
    Schema::table('posts', function (Blueprint $table) {
        $table->dropColumn('jdate');
    });
}
```
## cmd
```
composer require ariaieboy/filament-jalali-datetimepicker
```
## /home/shah/sec/laravel-filament-cms/app/Filament/Resources/PostResource.php

```
\Filament\Forms\Components\DateTimePicker::make('jdate')->jalali(),
```
