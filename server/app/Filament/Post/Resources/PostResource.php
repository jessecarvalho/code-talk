<?php

namespace App\Filament\Post\Resources;

use App\Filament\Post\Resources\PostResource\Pages;
use App\Models\Category;
use App\Models\Post;
use Filament\Facades\Filament as FilamentFacade;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Builder;
use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Hidden;

class PostResource extends Resource
{
    protected static ?string $model = Post::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
{
    return $form
        ->schema([
            Hidden::make('user_id')
                ->label(__('messages.created_by'))
                ->required()
                ->default(
                    auth()->id()
                ),
            Select::make('categories')->options(
                // get categories
                Category::all()->pluck('name', 'id')
            )->multiple(),
            TextInput::make('title')->label('Title')->rules(['required', 'string', 'max:255']),
            TextInput::make('slug')->label('Slug')->rules(['required', 'string', 'max:255']),
            TextInput::make('tags')->label('Tags')->rules(['required', 'string', 'max:255']),
            DateTimePicker::make('created_at')->native(false)->displayFormat('d/m/Y H:i:s'),
            FileUpload::make('banner')->label('Banner')->image()->imageEditor()->directory('/img/panel')->downloadable()->previewable(true),
            Textarea::make('resume')->label('Resume')->rules(['required', 'string', 'max:500']),
            Builder::make('content')
                ->blocks([
                    Block::make('heading')
                        ->schema([
                            TextInput::make('content')
                                ->label('Heading')
                                ->required(),
                            Select::make('level')
                                ->options([
                                    'h1' => 'H1',
                                    'h2' => 'H2',
                                    'h3' => 'H3',
                                    'h4' => 'H4',
                                    'h5' => 'H5',
                                    'h6' => 'H6',
                                ])
                                ->required(),
                        ])
                        ->columns(2),
                    Block::make('paragraph')
                        ->schema([
                            RichEditor::make('content')
                                ->toolbarButtons([
                                    'attachFiles',
                                    'blockquote',
                                    'bold',
                                    'bulletList',
                                    'codeBlock',
                                    'h2',
                                    'h3',
                                    'italic',
                                    'link',
                                    'orderedList',
                                    'redo',
                                    'strike',
                                    'underline',
                                    'undo',
                                ])
                                ->label('Paragraph')
                                ->required(),
                        ]),
                    Builder\Block::make('image')
                        ->schema([
                            FileUpload::make('url')
                                ->label('Image')
                                ->image()
                                ->required()
                                ->imageEditor(),
                            TextInput::make('alt')
                                ->label('Alt text')
                                ->required(),
                        ]),
                ])->columnSpan('full')
        ]);
    }


    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')->label("Titulo")->sortable()->searchable(),
                TextColumn::make('created_at')->label("Data")
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPosts::route('/'),
            'create' => Pages\CreatePost::route('/create'),
            'edit' => Pages\EditPost::route('/{record}/edit'),
        ];
    }
}
