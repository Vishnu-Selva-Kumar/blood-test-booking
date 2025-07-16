<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ServiceResource\Pages;
use App\Filament\Resources\ServiceResource\RelationManagers;
use App\Models\Service;
use Faker\Provider\ar_EG\Text;
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
use Filament\Tables\Columns\SelectColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Set;
use Illuminate\Support\Str;
use Filament\Tables\Actions\ActionGroup;
use Filament\Support\Enums\ActionSize;
use Mohamedsabil83\FilamentFormsTinyeditor\Components\TinyEditor;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\Tabs\Tab;
use Filament\Support\Enums\Alignment;

class ServiceResource extends Resource
{
    protected static ?string $model = Service::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function getNavigationSort(): ?int
    {
        return 3;
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()
                    ->columns(3)
                    ->schema([
                        Section::make()
                            ->columns(4)
                            ->schema([
                                TextInput::make('title')->label('Title')->required()->live(onBlur: true)->afterStateUpdated(fn(Set $set, ?string $state) => $set('slug', Str::slug($state))),
                                TextInput::make('slug'),
                                Select::make('status')->options(array_map('ucfirst', array_flip(config('web.constants.status'))))->required(),
                                Tabs::make('Tabs')
                                    ->tabs([
                                        Tab::make('Short Description')
                                            ->schema([
                                                Textarea::make('short_description')->label('Short description')->columnSpanFull()->rows(5),
                                            ]),
                                        Tab::make('Description')
                                            ->schema([
                                                TinyEditor::make('description')->columnSpanFull()->label('Description')->required(),
                                            ]),
                                        Tab::make('Process')
                                            ->schema([
                                                TinyEditor::make('process')->columnSpanFull()->label('Process')->required(),
                                            ])
                                    ])->columnSpanFull()
                            ]),

                    ])


            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')->searchable()->sortable()->width('5%'),
                TextColumn::make('title')->searchable()->sortable(),
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
            ])->defaultSort('id', 'desc');
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
            'index' => Pages\ListServices::route('/'),
            'create' => Pages\CreateService::route('/create'),
            'edit' => Pages\EditService::route('/{record}/edit'),
        ];
    }
}
