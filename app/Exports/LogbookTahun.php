<?php

namespace App\Exports;

use App\Models\LogbookMingguan;
use Carbon\Carbon;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class LogbookTahun implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view():View
    {
        return view('export.logbook',[
            'data'=>LogbookMingguan::with('mahasiswa','mentor','section','departement')->whereYear('created_at', Carbon::now()->year)->latest()->get()
        ]);
    }
}
