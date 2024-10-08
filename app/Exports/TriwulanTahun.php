<?php

namespace App\Exports;

use App\Models\TriwulanGanjil;
use Carbon\Carbon;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class TriwulanTahun implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view():View
    {
        return view('export.triwulan',[
            'data'=>TriwulanGanjil::with('mahasiswa','mentor','section','departement')->whereYear('created_at', Carbon::now()->year)->latest()->get()
        ]);

    }
}
