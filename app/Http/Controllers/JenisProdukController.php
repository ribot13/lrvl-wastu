<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule as Rule;
use Session;
use Yajra\Datatables;
use App\JenisProduk;

class JenisProdukController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $data['breadcrumbs'] = ['Jenis Produk' => route('jenisproduk.index'), 'Daftar Jenis Produk' => '#'];
        $data['data'] = [
            'url' => url('ajax/jenisproduk/load_table'),
            'view_title' => 'Daftar Jenis Produk',
            'view_icon' => 'fa fa-tags',
            'view_module' => 'jenisproduk.partials.tables',
            'show_action' => true,
            'actions' => $this->getActions(),
            'is_form' => false,
            'data' => JenisProduk::All()
        ];
        return view('jenisproduk._index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $data['breadcrumbs'] = ['Jenis Produk' => route('jenisproduk.index'), 'Tambah Jenis Produk' => '#'];
        $data['data'] = [
            'url' => false,
            'view_title' => 'Tambah Jenis Produk',
            'view_icon' => 'fa fa-tags',
            'view_module' => 'jenisproduk.partials.form',
            'show_action' => true,
            'actions' => $this->getActions(),
            'is_form' => true,
            'form_action' => ['jenisproduk.store'],
            'form_method' => 'POST',
            'data' => false
        ];
        return view('jenisproduk._index', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $this->validate($request, [
            'merk' => 'required',
            'nama' => 'required|unique:products_jenis,nama',
        ]);
        $input = $request->all();
        JenisProduk::create($input);
        Session::flash('flash_message', 'Sukses menginput Titel!');
        return redirect('jenisproduk');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        $data['breadcrumbs'] = ['Jenis Produk' => route('jenisproduk.index'), 'Detail Jenis Produk' => '#'];
        $data['data'] = [
            'url' => false,
            'view_title' => 'Detail Jenis Produk',
            'view_icon' => 'fa fa-tags',
            'view_module' => 'jenisproduk.partials.detail',
            'show_action' => true,
            'actions' => $this->getActions(),
            'is_form' => false,
            'data' => JenisProduk::findOrFail($id)
        ];
        return view('jenisproduk._index', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $data['breadcrumbs'] = ['Jenis Produk' => route('jenisproduk.index'), 'Edit Jenis Produk' => '#'];
        $data['data'] = [
            'url' => false,
            'view_title' => 'Edit Jenis Produk',
            'view_icon' => 'fa fa-tags',
            'view_module' => 'jenisproduk.partials.form',
            'show_action' => true,
            'actions' => $this->getActions(),
            'is_form' => true,
            'form_action' => ['jenisproduk.update', $id],
            'form_method' => 'PATCH',
            'data' => JenisProduk::findOrFail($id)
        ];
        return view('jenisproduk._index', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        $data = JenisProduk::findOrFail($id);
        $this->validate($request, []);
        $input = $request->all();
        $data->fill($input)->save();
        Session::flash('flash_message', 'Sukses mengupdate jenis produk tersebut!');
        return redirect('jenisproduk');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $model = JenisProduk::findOrFail($id);
        $model->delete();
        Session::flash('flash_message', 'Sukses menghapus jenis produk tersebut!');
        return redirect()->route('jenisproduk.index');
    }

    /**
     * Generic & Ajax Method.
     */
    //loading ajax
    public function loadTable() {
        $data = JenisProduk::All();
        return view('jenisproduk.partials.tables', ['data' => $data]);
    }

    public function loadDataTable() {
        $results = JenisProduk::all(['merk', 'nama', 'status']);
        return Datatables::of($results)
                        ->addColumn('actions', function($result) {
                            return 'haha';
                        })->make(true);
    }

    //generic method
    private function getActions() {
        return [
            [
                'title' => 'Tambah',
                'url' => route('jenisproduk.create'),
                'roles' => 'all',
            ],
        ];
    }

}
