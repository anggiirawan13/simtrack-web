<?php

// // app/Http/Controllers/ResiController.php
// namespace App\Http\Controllers;

// use Illuminate\Http\Request;

// class ResiController extends Controller
// {
//     public function show($noResi)
//     {
//         // Sample data; replace with actual query logic
//         $resi = [
//             'noResi' => $noResi,
//             'kotaTujuan' => 'Surabaya',
//             'perusahaan' => 'PT. ABC',
//             'tanggalDiterima' => now()->format('d-m-Y'),
//             'status' => 'In Transit',
//         ];

//         return view('resi.show', compact('resi'));
//     }
// }

// app/Http/Controllers/ResiController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResiController extends Controller
{
    public function show($noResi)
    {
        // Example data for specific resi numbers
        $data = [
            '12345' => [
                'noResi' => '12345',
                'kotaTujuan' => 'Jakarta',
                'perusahaan' => 'PT. Anugrah Express',
                'tanggalDiterima' => '2023-11-01',
                'status' => 'Delivered',
            ],
            '67890' => [
                'noResi' => '67890',
                'kotaTujuan' => 'Bandung',
                'perusahaan' => 'PT. Fast Delivery',
                'tanggalDiterima' => '2023-10-15',
                'status' => 'In Transit',
            ],
            // Add more data as needed
        ];

        // Find data by resi or show default
        $resi = $data[$noResi] ?? [
            'noResi' => $noResi,
            'kotaTujuan' => 'Surabaya',
            'perusahaan' => 'PT. ABC',
            'tanggalDiterima' => now()->format('d-m-Y'),
            'status' => 'In Transit',
        ];

        return view('resi.show', compact('resi'));
    }
}
