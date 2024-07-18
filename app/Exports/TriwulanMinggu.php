<?php

namespace App\Exports;

use App\Models\TriwulanGanjil;
use Carbon\Carbon;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class TriwulanMinggu implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view():View
    {
        $startOfWeek = Carbon::now()->startOfWeek(); // Mulai hari Senin minggu ini
        $endOfWeek = Carbon::now()->endOfWeek();     
        return view('export.triwulan',[
            'data'=>TriwulanGanjil::with('mahasiswa','mentor','section','departement')->whereBetween('created_at', [$startOfWeek, $endOfWeek])->latest()->get()
        ]);
    }
}
