<?php

namespace App\Http\Controllers;

use App\Models\Motor;
use GuzzleHttp\Promise\Create;
use Illuminate\View\View;

//Insert data
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class MotorController extends Controller
{
    public function index(Request $request): View
    {
        $pagination=5;
        $motors = Motor::orderBy('created_at', 'asc')->simplePaginate($pagination);
        

        return view('motors.index', compact('motors'))->with('i', ($request->input('page', 1) - 1) * $pagination);        
    }

    public function create(): View
    {
        return view('motors.create');
    }

    public function store(Request $request): RedirectResponse
    {
        //Validasi Data
        $this->validate($request, [
            // 'id' => 'required',
            'kode_kendaraan' => 'required',
            'jenis_kendaraan' => 'required',
            'nama_kendaraan' => 'required',
            'jumlah_penjualan' => 'required'
        ]);

        //Create Data
        Motor::create([
            // 'id' => $request->id,
            'kode_kendaraan' => $request->kode_kendaraan,
            'jenis_kendaraan' => $request->jenis_kendaraan,
            'nama_kendaraan' => $request->nama_kendaraan,
            'jumlah_penjualan' => $request->jumlah_penjualan
        ]);

        return redirect()->route('motors.index')->with(['success' => 'Data berhasil disimpan!']);
    }

    // edit data
    public function edit(string $id): View
    {
        // get data
        $motor=Motor::findOrFail($id);

        // view data
        return view('motors.edit', compact('motor'));

    }

    // update data
    public function update(Request $request, $id): RedirectResponse
    {
        //Validasi Data
        $this->validate($request, [
            // 'id' => 'required',
            'kode_kendaraan' => 'required',
            'jenis_kendaraan' => 'required',
            'nama_kendaraan' => 'required',
            'jumlah_penjualan' => 'required'
        ]);

        // get data lagi
        $motor=Motor::findOrFail($id);

        $motor->update([
            // 'id' => $request->id,
            'kode_kendaraan' => $request->kode_kendaraan,
            'jenis_kendaraan' => $request->jenis_kendaraan,
            'nama_kendaraan' => $request->nama_kendaraan,
            'jumlah_penjualan' => $request->jumlah_penjualan
        ]);

        return redirect()->route('motors.index')->with(['success' => 'Data berhasil di update!']);

    }

    // delete data
    public function destroy($id): RedirectResponse
    {
        // select by id
        $motor = Motor::findOrFail($id);

        // delete motornya
        $motor->delete();

        return redirect()->route('motors.index')->with(['success' => 'Data berhasil di hapus!']);
    }
}
