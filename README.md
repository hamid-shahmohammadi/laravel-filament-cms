## terminal
```
php artisan make:filament-resource Category --simple --generate
php artisan make:filament-resource Post --view --generate
```
## all resource
```
$form
->live()
->afterStateUpdated(function (Set $set, $state) {
    $set('slug', Str::slug($state));
}),
```
## categoryResouece
```
 return $table
->columns([
    Tables\Columns\TextColumn::make('title')
        ->searchable(),               
    
    Tables\Columns\TextColumn::make('updated_at')
        ->dateTime()
        ->sortable()
        ->toggleable(isToggledHiddenByDefault: true),
])
```
## post resource
```
protected static ?string $navigationIcon = 'heroicon-o-document-text';
protected static ?string $navigationGroup = 'Content';
```