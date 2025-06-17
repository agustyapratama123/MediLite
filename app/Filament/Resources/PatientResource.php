<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PatientResource\Pages;
use App\Filament\Resources\PatientResource\RelationManagers;
use App\Models\Patient;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PatientResource extends Resource
{
    protected static ?string $model = Patient::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('user_id')
                    ->relationship('user', 'name')
                    ->searchable(),

                Forms\Components\TextInput::make('nik')
                    ->label('NIK')
                    ->maxLength(16)
                    ->required(),

                Forms\Components\TextInput::make('no_bpjs')
                    ->label('No. BPJS')
                    ->maxLength(20),

                Forms\Components\TextInput::make('name')
                    ->label('Nama Lengkap')
                    ->required(),

                Forms\Components\DatePicker::make('birth_date')
                    ->label('Tanggal Lahir')
                    ->required(),

                Forms\Components\Select::make('gender')
                    ->label('Jenis Kelamin')
                    ->options([
                        'L' => 'Laki-laki',
                        'P' => 'Perempuan',
                    ])
                    ->required(),

                Forms\Components\Textarea::make('address')
                    ->label('Alamat')
                    ->required(),

                Forms\Components\TextInput::make('phone')
                    ->label('No. Telepon')
                    ->maxLength(15)
                    ->required(),

                Forms\Components\TextInput::make('email')
                    ->email()
                    ->label('Email')
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label('Nama'),

                Tables\Columns\TextColumn::make('nik')
                    ->label('NIK'),

                Tables\Columns\TextColumn::make('no_bpjs')
                    ->label('BPJS')
                    ->default('-'),

                Tables\Columns\TextColumn::make('gender')
                    ->label('JK')
                    ->formatStateUsing(fn ($state) => $state === 'L' ? 'Laki-laki' : 'Perempuan'),

                Tables\Columns\TextColumn::make('birth_date')
                    ->label('Lahir')
                    ->date(),

                Tables\Columns\TextColumn::make('phone')
                    ->label('Telepon'),

                Tables\Columns\TextColumn::make('user.name')
                    ->label('User Akun'),

                Tables\Columns\TextColumn::make('created_at')
                    ->label('Dibuat')
                    ->since(),
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
            'index' => Pages\ListPatients::route('/'),
            'create' => Pages\CreatePatient::route('/create'),
            'edit' => Pages\EditPatient::route('/{record}/edit'),
        ];
    }
}
