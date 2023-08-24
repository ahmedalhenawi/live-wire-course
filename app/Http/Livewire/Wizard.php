<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;

class Wizard extends Component
{
    public $currentStep = 1;
    public $name, $amount, $description, $status = 1, $stock, $rate, $quality = 'good';
    public $successMessage = '';

    public function render()
    {
        return view('livewire.wizard');
    }

    public function firstStepSubmit()
    {
        $validatedData = $this->validate([
            'name' => 'required|unique:products',
            'amount' => 'required|numeric',
            'description' => 'required',
        ]);

        $this->currentStep = 2;
    }


    public function secondStepSubmit()
    {
        $validatedData = $this->validate([
            'stock' => 'required',
            'status' => 'required',
        ]);

        $this->currentStep = 3;
    }

    public function thirdStepSubmit()
    {
        $validatedData = $this->validate([
            'rate' => 'required|numeric',
            'quality' => 'in:so bad,bad,good,very good',
        ]);


        $this->currentStep = 4;
    }


    public function submitForm()
    {
        Product::create([
            'name' => $this->name,
            'amount' => $this->amount,
            'description' => $this->description,
            'stock' => $this->stock,
            'status' => $this->status,
            'rate' => $this->rate,
            'quality' => $this->quality,
        ]);

        $this->successMessage = 'Product Created Successfully.';
        notify()->success('Welcome to Laravel Notify ⚡️');

        $this->clearForm();

        $this->currentStep = 1;
    }


    public function back($step)
    {
        $this->currentStep = $step;
    }


    public function clearForm()
    {
        $this->name = '';
        $this->amount = '';
        $this->description = '';
        $this->stock = '';
        $this->status = 1;
        $this->rate = "";
        $this->product = "";
    }
}
