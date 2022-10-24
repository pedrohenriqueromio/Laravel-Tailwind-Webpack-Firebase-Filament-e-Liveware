<?php

namespace App\Filament\Pages;

use Filament\Forms\Components\TextInput;
use Filament\Pages\Page;
use Filament\Resources\Form;

use App\Filament\Resources\CustomerResource\Pages;
use Closure;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Wizard;
use Illuminate\Support\HtmlString;
use Illuminate\Support\Str;


class Home extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.home';

    public function mount()
    {
        $this->form->fill();
    }

    public $state;

    protected function getFormStatePath(): ?string
    {
        return 'state';
    }

    protected function getFormSchema(): array
    {
        return [

            Card::make()->schema([
                TextInput::make('title1'), 
                RichEditor::make('content1')->required(),

                TextInput::make('title2'), 
                RichEditor::make('content2')->required(),

                TextInput::make('title3'), 
                RichEditor::make('content3')->required(),

            ])
          
        ];
    }

    public function submit()
    {
        $this->form->validate();
        
        dd($this->form);

        dd('Submitted');
    }
    
}
