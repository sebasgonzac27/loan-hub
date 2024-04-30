<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LoanResource\Pages;
use App\Filament\Resources\LoanResource\RelationManagers;
use App\Models\Classroom;
use App\Models\Client;
use App\Models\Loan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Get;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Collection;

class LoanResource extends Resource
{
    protected static ?string $model = Loan::class;

    protected static ?string $navigationIcon = 'heroicon-o-ticket';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Client information')
                    ->schema([
                        Forms\Components\Select::make('program_id')
                            ->relationship('program', 'name')
                            ->preload()
                            ->searchable()
                            ->live()
                            ->required(),
                        Forms\Components\Select::make('client_id')
                            ->relationship('client', 'name')
                            ->searchable()
                            ->preload()
                            ->required(),
                    ]),

                Forms\Components\Section::make('Location information')
                ->schema([
                    Forms\Components\Select::make('campus_id')
                        ->relationship('campus', 'name')
                        ->preload()
                        ->searchable()
                        ->live()
                        ->required(),
                    Forms\Components\Select::make('classroom_id')
                        ->label('Classroom')
                        ->options(fn (Get $get) => Classroom::query()->where('campus_id', $get('campus_id'))->pluck('name', 'id'))
                        ->preload()
                        ->searchable()
                        ->required(),
                ]),


                Forms\Components\TextInput::make('status')
                    ->required(),
                Forms\Components\DateTimePicker::make('loan_date')
                    ->required(),
                Forms\Components\DateTimePicker::make('expected_return_date')
                    ->required(),
                Forms\Components\DateTimePicker::make('return_date'),
                Forms\Components\TextInput::make('activity')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('observations')
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('loaned_by')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('received_by')
                    ->numeric()
                    ->default(null),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('program_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('client_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('campus_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('classroom_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('status'),
                Tables\Columns\TextColumn::make('loan_date')
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\TextColumn::make('expected_return_date')
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\TextColumn::make('return_date')
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\TextColumn::make('activity')
                    ->searchable(),
                Tables\Columns\TextColumn::make('loaned_by')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('received_by')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
            'index' => Pages\ListLoans::route('/'),
            'create' => Pages\CreateLoan::route('/create'),
            'edit' => Pages\EditLoan::route('/{record}/edit'),
        ];
    }
}
