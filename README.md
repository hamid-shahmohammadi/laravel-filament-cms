## cmd
```
pamm Page -m
```
## create_pages_table.php

```
Schema::create('pages', function (Blueprint $table) {
    $table->id();
    $table->string('title',255);
    $table->string('slug',255)->unique();
    $table->longText('body');
    $table->foreignIdFor(User::class,'user_id');
    $table->timestamps();
});
```
## Page
```
protected $fillable=[
    'title',
    'slug',
    'body',
    'user_id',
];
public function user(): BelongsTo
{
    return $this->belongsTo(User::class);
}
```
## cmd
```
php artisan make:filament-resource Page --generate --view
```
## PageResource 
```
return $form
->schema([
    Forms\Components\TextInput::make('title')
        ->required()
        ->maxLength(255)
        ->live()
        ->afterStateUpdated(function (Set $set, $state) {
            $set('slug', Str::slug($state));
        }),
    Forms\Components\TextInput::make('slug')
        ->required()
        ->maxLength(255),
    Forms\Components\RichEditor::make('body')
        ->required()
        ->columnSpanFull(),
]);


->columns([
    Tables\Columns\TextColumn::make('title')
        ->searchable(),
])
```
## cmd
```
pamc PageController
```
## PageController
```
class PageController extends Controller
{
    public function pageShow($slug){
        $page=Page::where('slug',$slug)->first();
        return view('page.show',compact('page'));
    }
}
```
## web.php
```
Route::get('/{slug}',[PageController::class,'pageShow']);
```
## /home/shah/sec/laravel-filament-cms/resources/views/page/show.blade.php
```
<h1>{{$page->title}}</h1>
{!!$page->body!!}
```
