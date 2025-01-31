<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\LoundroPlanResource\Pages;
use App\Filament\Admin\Resources\LoundroPlanResource\RelationManagers;
use App\Models\LoundroPlan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class LoundroPlanResource extends Resource
{
    protected static ?string $model = LoundroPlan::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('periode')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('total_pemasukan')
                    ->required()
                    ->numeric()
                    ->default(0.00),
                Forms\Components\TextInput::make('total_pengeluaran')
                    ->required()
                    ->numeric()
                    ->default(0.00),
                Forms\Components\TextInput::make('saldo_bersih')
                    ->required()
                    ->numeric()
                    ->default(0.00),
                Forms\Components\TextInput::make('profit_persenan')
                    ->required()
                    ->numeric()
                    ->default(0.00),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('periode')
                    ->searchable(),
                Tables\Columns\TextColumn::make('total_pemasukan')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('total_pengeluaran')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('saldo_bersih')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('profit_persenan')
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
            'index' => Pages\ListLoundroPlans::route('/'),
            'create' => Pages\CreateLoundroPlan::route('/create'),
            'edit' => Pages\EditLoundroPlan::route('/{record}/edit'),
        ];
    }
}
