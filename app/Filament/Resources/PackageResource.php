<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PackageResource\Pages;
use App\Filament\Resources\PackageResource\RelationManagers;
use App\Models\Category;
use App\Models\Package;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Set;
use Illuminate\Support\Str;
use Filament\Tables\Columns\SelectColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Actions\ActionGroup;
use Filament\Support\Enums\ActionSize;
use Mohamedsabil83\FilamentFormsTinyeditor\Components\TinyEditor;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Tabs;
use Filament\Support\Enums\Alignment;

class PackageResource extends Resource
{
    protected static ?string $model = Package::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function getNavigationSort(): ?int
    {
        return 2;
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                Section::make()
                    ->columns(4)
                    ->schema([
                        TextInput::make('title')->label('Title')->required()->live(onBlur: true)->afterStateUpdated(fn(Set $set, ?string $state) => $set('slug', Str::slug($state))),
                        TextInput::make('slug'),
                        Select::make('category_id')->label('Category')->options(fn() => Category::pluck('name', 'id'))->required()->searchable(),
                        Select::make('status')->options(array_map('ucfirst', array_flip(config('web.constants.status')))),
                        Tabs::make('Tabs')
                            ->tabs([
                                Tabs\Tab::make('Short Description')
                                    ->schema([
                                        Textarea::make('short_description')->label('Short description')->required()->columnSpanFull()->rows(5),
                                    ]),
                                Tabs\Tab::make('Description')
                                    ->schema([
                                        TinyEditor::make('description')->columnSpanFull()->label('Description')->required(),
                                    ]),
                                Tabs\Tab::make('Process')
                                    ->schema([
                                        TinyEditor::make('process')->columnSpanFull()->label('Process')->required(),
                                    ]),
                                Tabs\Tab::make('Test Lists')
                                    ->schema([
                                        Repeater::make('testLists')->relationship()->label('Create / Update Test Lists')
                                            ->schema([
                                                TextInput::make('title')->label('Title')->required(),
                                                TinyEditor::make('description')->columnSpanFull()->label('Description')->required(),
                                            ])
                                            ->columnSpanFull()->reorderable(true)->reorderableWithButtons()
                                            ->addActionLabel('Add Test List')->collapsible()
                                            ->cloneable()->itemLabel(fn(array $state): ?string => $state['title'] . ' Test list' ?? null),
                                    ]),
                                Tabs\Tab::make('Upload Images')
                                    ->schema([
                                        FileUpload::make('image')->image()->directory('packages')->optimize('webp')->resize(50),
                                    ]),
                            ])->columnSpanFull()
                    ]),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')->searchable()->sortable()->width('5%'),
                TextColumn::make('title')->searchable()->sortable(),
                TextColumn::make('category.name')->label('Category')->searchable()->sortable(),
                SelectColumn::make('status')->options(array_map('ucfirst', array_flip(config('web.constants.status'))))->sortable()->width('15%'),
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                ActionGroup::make([
                    Tables\Actions\EditAction::make(),
                    Tables\Actions\ViewAction::make(),
                    Tables\Actions\DeleteAction::make(),
                ])->iconButton()->icon('heroicon-m-ellipsis-horizontal')->size(ActionSize::Small)->tooltip('Actions')
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->defaultSort('id', 'desc'); // Add this line to set default sort order
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
            'index' => Pages\ListPackages::route('/'),
            'create' => Pages\CreatePackage::route('/create'),
            'edit' => Pages\EditPackage::route('/{record}/edit'),
        ];
    }
}
