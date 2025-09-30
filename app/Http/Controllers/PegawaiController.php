<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    public function index()
    {
        $data['name']               = 'EXAUDI BANJARNAHOR'; 
        $data['my_age']             = date('Y') - 2004;
        $data['hobbies']            = ['Membaca', 'Ngoding', 'Olahraga', 'Traveling', 'Main Musik'];
        $data['tgl_harus_wisuda']   = \Carbon\Carbon::createFromFormat('Y-m-d', '2027-08-30');
        $data['time_to_study_left'] = \Carbon\Carbon::now()->diffInDays($data['tgl_harus_wisuda'], false);
        $data['current_semester']   = 4;
        $data['future_goal']        = 'Menjadi Data Engineer';

        if ($data['current_semester'] < 3) {
            $data['semester_info'] = "Masih Awal, Kejar TAK";
        } else {
            $data['semester_info'] = "Jangan main-main, kurang-kurangi main game!";
        }

        $data['list_pendidikan'] = ['SD', 'SMP', 'SMA', 'S1', 'S2', 'S3'];

        return view('pegawai', $data);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
