<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hitung;
use Carbon\Carbon;

class PerhitunganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $userId = Auth()->user()->id;
        // Ambil 5 data terakhir berdasarkan id_user yang sedang login
        $data = Hitung::where('id_user', $userId)
                      ->orderBy('created_at', 'desc') // Urutkan berdasarkan waktu dibuat
                      ->take(5) // Ambil 5 data terakhir
                      ->get();

        return view('landing.hitung_index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('landing.hitung_form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $record = $request->validate([
            'b1' => 'required|integer',
            'b2' => 'required|integer',
            'b3' => 'required|integer',
        ]);


        $now = Carbon::now();
        $record['id_up'] = $now->format('YmdHisu');
        $record['id_user'] = Auth()->user()->id;

        
        // Mendifinisikan augmented matrix
        $A = [
            [1, 1, 1, $record['b1']],
            [2, -3, 4, $record['b2']],
            [3, 4, 5, $record['b3']],
        ];

        $n = count($A);
        $m = count($A[0]);

        // Proses eliminasi Gauss-Jordan
        for ($i = 0; $i < $n; $i++) {
            // Jika elemen diagonal adalah 0, tukar dengan baris di bawahnya
            if ($A[$i][$i] == 0) {
                for ($k = $i + 1; $k < $n; $k++) {
                    if ($A[$k][$i] != 0) {
                        // Tukar baris i dan baris k
                        $temp = $A[$i];
                        $A[$i] = $A[$k];
                        $A[$k] = $temp;
                        break; // Keluar dari loop setelah menukar
                    }
                }
            }
            
            // Normalisasi baris i
            $divisor = $A[$i][$i];
            for ($j = 0; $j < $m; $j++) {
                $A[$i][$j] /= $divisor;
            }

            // Eliminasi elemen pada kolom pivot baris lain
            for ($j = 0; $j < $n; $j++) {
                if ($j != $i) {
                    $factor = $A[$j][$i];
                    for ($k = 0; $k < $m; $k++) {
                        $A[$j][$k] -= $factor * $A[$i][$k];
                    }
                }
            }
        }

        // Mengambil solusi
        $solution = [];
        for ($i = 0; $i < $n; $i++) {
            $solution[] = $A[$i][$m - 1];
        }

        $record['p1'] = $solution[0];
        $record['p2'] = $solution[1];
        $record['p3'] = $solution[2];

        if ($record['p1'] < 0 || $record['p2'] < 0 || $record['p3'] < 0) {
            $record['comment'] = 'Bahan ada yang kurang sehingga menimbulkan minus dalam perhitungan.';
        } 

        try {
            Hitung::create($record);
            return redirect()->route('hitung.show', $record['id_up']);
             
         } catch (Exception $e) {
            return redirect()->back();
         }  
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Hitung::where('id_up', $id)->first();
        return view('landing.hitung_show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
