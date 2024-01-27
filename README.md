## /home/shah/sec/laravel-filament-cms/app/Filament/Resources/PostResource.php
```
return $form
->schema([
    Card::make()->schema([
        Grid::make([
            'default' => 2,
            'sm' => 2,
            'md' => 2,
            'lg' => 2,
            'xl' => 2,
            '2xl' => 2,
        ])->schema([
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
        ]),
        
        Forms\Components\RichEditor::make('body')
            ->required()
            ->columnSpanFull(),
        Forms\Components\Toggle::make('active')
            ->required(),
        Forms\Components\DateTimePicker::make('published_at'),
        
    ])->columnSpan(8),
    Card::make()->schema([
        Forms\Components\FileUpload::make('thumbnail'),
        Forms\Components\Select::make('category_id')
        ->multiple()
        ->relationship('categories', 'title')
        ->required(),
    ])->columnSpan(4),
])->columns(12);
```