<?php

namespace App\Filament\Resources;

use App\Filament\Resources\InsuranceResource\Pages;
use App\Filament\Resources\InsuranceResource\RelationManagers;
use App\Models\Insurance;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;

class InsuranceResource extends Resource
{
    protected static ?string $model = Insurance::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('provider')
                ->label('Penyedia Asuransi')
                ->required()
                ->maxLength(100)
                ->placeholder('Contoh: BPJS, Allianz, Prudential'),

                TextInput::make('policy_number')
                    ->label('Nomor Polis')
                    ->required()
                    ->maxLength(50)
                    ->placeholder('Contoh: POL12345678'),

                DatePicker::make('coverage_start')
                    ->label('Tanggal Mulai Pertanggungan')
                    ->required()
                    ->native(false)
                    ->displayFormat('d M Y'),

                DatePicker::make('coverage_end')
                    ->label('Tanggal Berakhir Pertanggungan')
                    ->nullable()
                    ->native(false)
                    ->displayFormat('d M Y'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('provider')
                    ->label('Penyedia Asuransi')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('policy_number')
                    ->label('Nomor Polis')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('coverage_start')
                    ->label('Mulai Pertanggungan')
                    ->date('d M Y') // Contoh: 17 Jun 2025
                    ->sortable(),

                Tables\Columns\TextColumn::make('coverage_end')
                    ->label('Akhir Pertanggungan')
                    ->date('d M Y')
                    ->sortable()
                    ->toggleable(),

                Tables\Columns\TextColumn::make('created_at')
                    ->label('Tanggal Dibuat')
                    ->dateTime('d M Y H:i')
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
            'index' => Pages\ListInsurances::route('/'),
            'create' => Pages\CreateInsurance::route('/create'),
            'edit' => Pages\EditInsurance::route('/{record}/edit'),
        ];
    }
}
