<?php

namespace App\Imports;

use App\Daftar;
use Maatwebsite\Excel\Concerns\ToModel;

class SiswaImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Daftar([
            'kode' => $row[1],
            'nama_lengkap' => $row[2], 
            'nama_panggilan' => $row[3],
            'jenis_kelamin' => $row[4],
            'nisn' => $row[5],
            'agama' => $row[6],
            'ayah' => $row[7],
            'pendidikan_ayah' => $row[8],
            'pekerjaa_ayah' => $row[9],
            'ibu' => $row[10],
            'pendidikan_ibu' => $row[11],
            'pekerjaa_ibu' => $row[12],
            'wali' => $row[13],
            'pendidikan_wali' => $row[14],
            'pekerjaa_wali' => $row[15],
            'tgl_lahir' => $row[16], 
            'alamat' => $row[17],
            'image' => $row[18], 
            'asal_sekolah' => $row[19],
            'rata' => $row[20],
            'pilihan1' => $row[21],
            'pilihan2' => $row[22],  
            'no_telepon' => $row[23],
            'status' => $row[24],
            'jurusan' => $row[25],
            'user_id' =>$row[26],
            
        ]);
    }
}
