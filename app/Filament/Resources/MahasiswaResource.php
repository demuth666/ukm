<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MahasiswaResource\Pages;
use App\Filament\Resources\MahasiswaResource\RelationManagers;
use App\Models\Mahasiswa;
use Faker\Provider\Text;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use pxlrbt\FilamentExcel\Actions\Tables\ExportBulkAction;
use Filament\Tables\Columns\SelectColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class MahasiswaResource extends Resource
{
    protected static ?string $model = Mahasiswa::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-group';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama')->label('Nama')
                    ->searchable(),
                TextColumn::make('npm')->label('NPM')
                    ->searchable(),
                TextColumn::make('fakultas')->label('Fakultas')
                    ->searchable(),
                TextColumn::make('prodi')->label('Prodi')
                    ->searchable(),
                TextColumn::make('tingkat')->label('Tingkat/Semester')
                    ->searchable(),
                TextColumn::make('jenis_kelamin')->label('Jenis Kelamin')
                    ->searchable(),
                TextColumn::make('email')->label('Email')
                    ->searchable(),
                TextColumn::make('phone')->label('Telepon')
                    ->searchable(),
                TextColumn::make('alamat')->label('Alamat')
                    ->searchable(),
                TextColumn::make('ukm')
                    ->label('UKM')
                    ->searchable(),
                TextColumn::make('alasan')->label('Alasan Masuk'),
                SelectColumn::make('status')
                    ->options([
                        'belum diterima' => 'Belum diterima',
                        'diterima' => 'Diterima',
                        'ditolak' => 'Ditolak',
                    ])
            ])
            ->filters([
                SelectFilter::make('status')
                    ->options([
                        'belum diterima' => 'Belum diterima',
                        'diterima' => 'Diterima',
                        'ditolak' => 'Ditolak',
                    ])
            ])
            ->actions([
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                    ExportBulkAction::make()
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
            'index' => Pages\ListMahasiswas::route('/'),
            'create' => Pages\CreateMahasiswa::route('/create'),
            'view' => Pages\ViewMahasiswa::route('/{record}'),
            'edit' => Pages\EditMahasiswa::route('/{record}/edit'),
        ];
    }

    public static function canCreate(): bool
    {
        return false;
    }
}
