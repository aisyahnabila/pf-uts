<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Satuan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use PhpParser\Node\Expr\New_;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pageTitle = 'List Barang';

        // ELOQUENT
        $barangs = Barang::all();
        // RAW Query builder
        // $barangs = DB::table('barangs')
        //     -->select('barangs.*','$barangs.id as barang_id','satuans_nama as satuan_nama')
        //     -->leftjoin('satuans','barangs.satuan_id',-,'satuan.id')
        //     -->get();
        return view('item.index', [
            'pageTitle' => $pageTitle,
            'barangs' => $barangs
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pageTitle = 'Buat Data Barang';

        // RAW SQL Query
        $satuans = Satuan::all();

        return view('item.create', compact('pageTitle', 'satuans'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Mendefinisikan pesan kesalahan untuk validasi input
        $messages = [
            'required' => ':attribute harus diisi.',
            'unique' => ':attribute sudah digunakan. Mohon Gunakan Kode Lain.',
            'numeric' => 'Isi :attribute dengan angka.'
        ];

        $validator = Validator::make($request->all(), [
            'kode_barang' => 'required|unique:barangs,kode_barang',
            'nama_barang' => 'required',
            'harga_barang' => 'required|numeric',
            'deskripsi_barang' => 'required',
            'satuan_id' => 'required',
        ], $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // ELOQUENT
        $barangs = new Barang;
        $barangs->kode_barang = $request->kode_barang;
        $barangs->nama_barang = $request->nama_barang;
        $barangs->harga_barang = $request->harga_barang;
        $barangs->deskripsi_barang = $request->deskripsi_barang;
        $barangs->satuan_id = $request->satuan_id;
        $barangs->save();

        return redirect()->route('items.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pageTitle = 'Detail Barang';

        // ELOQUENT
        $barangs = Barang::find($id);

        return view('item.show', compact('pageTitle', 'barangs'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pageTitle = 'Edit Barang';

        $satuans = Satuan::all();
        $barangs = Barang::find($id);


        return view('item.edit', compact('pageTitle', 'barangs', 'satuans'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $messages = [
            'required' => ':attribute harus diisi.',
            'unique' => ':attribute sudah digunakan, Mohon Gunakan Kode Lain.',
            'numeric' => 'Isi :attribute dengan angka.'
        ];

        $validator = Validator::make($request->all(), [
            'kode_barang' => 'required|unique:barangs,kode_barang,' . $id,
            'nama_barang' => 'required',
            'harga_barang' => 'required|numeric',
            'deskripsi_barang' => 'required',
            'satuan_id' => 'required|exists:satuans,id',
        ], $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }


        // ELOQUENT
        $barangs = Barang::find($id);
        $barangs->kode_barang = $request->kode_barang;
        $barangs->nama_barang = $request->nama_barang;
        $barangs->harga_barang = $request->harga_barang;
        $barangs->deskripsi_barang = $request->deskripsi_barang;
        $barangs->satuan_id = $request->satuan_id;
        $barangs->save();

        return redirect()->route('items.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Barang::find($id)->delete();

        return redirect()->route('items.index');
    }
}