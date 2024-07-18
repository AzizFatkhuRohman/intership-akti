<?php

namespace App\Exports;

use App\Models\TriwulanGanjil;
use Maatwebsite\Excel\Concerns\FromCollection;

class Triwulan implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return TriwulanGanjil::latest()->get();
    }
}
