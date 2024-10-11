<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UmrahPackageResource\Pages;
use App\Filament\Resources\UmrahPackageResource\RelationManagers;
use App\Filament\Resources\UmrahPackageResource\RelationManagers\HotelsRelationManager;
use App\Models\UmrahPackage;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Illuminate\Support\Str;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class UmrahPackageResource extends Resource
{
    protected static ?string $model = UmrahPackage::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->maxLength(255)
                    ->live(debounce: '100')
                    ->afterStateUpdated(function($set, $state){
                        $set('slug', Str::slug($state));
                    }),
                    
                Forms\Components\TextInput::make('slug')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('tanggal')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('price')
                    ->required()
                    ->numeric()
                    ->prefix('$'),
                Forms\Components\FileUpload::make('thumbnail')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\RichEditor::make('itenary')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\RichEditor::make('fasilitas')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\RichEditor::make('persyaratan')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\RichEditor::make('syarat')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('thumbnail'),
                
                Tables\Columns\TextColumn::make('tanggal')
                    ->searchable(),
                Tables\Columns\TextColumn::make('price')
                    ->money()
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
            HotelsRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListUmrahPackages::route('/'),
            'create' => Pages\CreateUmrahPackage::route('/create'),
            'edit' => Pages\EditUmrahPackage::route('/{record}/edit'),
        ];
    }
}
