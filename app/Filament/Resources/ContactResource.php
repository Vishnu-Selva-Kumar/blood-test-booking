<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ContactResource\Pages;
use App\Filament\Resources\ContactResource\RelationManagers;
use App\Models\Contact;
use Filament\Forms;
use Filament\Forms\Components\Grid;
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
use Filament\Tables\Actions\ActionGroup;
use Filament\Support\Enums\ActionSize;


class ContactResource extends Resource
{
    protected static ?string $model = Contact::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function getNavigationSort(): ?int
    {
        return 6;
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()
                    ->columns(3)
                    ->schema([
                        Grid::make(3)
                            ->schema([
                                TextInput::make('name')->label('Name')->required(),
                                TextInput::make('email')->label('Email')->required()->email(),
                                TextInput::make('phone_number')->label('Phone number')->required(),
                                TextInput::make('subject')->label('Subject')->required(),
                                Textarea::make('message')->label('Message')->required(),
                                Select::make('status')->options(array_map('ucfirst', array_flip(config('web.constants.booking_status'))))->required(),
                            ]),
                    ]),



                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')->searchable()->sortable()->width('5%'),
                TextColumn::make('name')->searchable()->sortable()->width('10%'),
                TextColumn::make('email')->searchable()->sortable()->width('10%'),
                TextColumn::make('phone_number')->searchable()->sortable()->width('10%'),
                TextColumn::make('subject')->searchable()->sortable()->width('25%'),
                TextColumn::make('message')->searchable()->sortable()->width('30%'),
                SelectColumn::make('status')->options(array_map('ucfirst', array_flip(config('web.constants.contact_status') ?? [])))
                    ->sortable()->width('10%'),

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
            ])->defaultSort('id', 'desc'); // Add this line to set default sort order;
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
            'index' => Pages\ListContacts::route('/'),
            'create' => Pages\CreateContact::route('/create'),
            'edit' => Pages\EditContact::route('/{record}/edit'),
        ];
    }
}
