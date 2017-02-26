<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule as Rule;
use Session;
use App\Merk;

class MerkController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $data['breadcrumbs'] = ['Merk' => route('merk.index'), 'Daftar Merk' => '#'];
        $data['data'] = [
            'view_title' => 'Daftar Merk',
            'view_icon' => 'fa fa-tag',
            'view_module' => 'merk.partials.tables',
            'show_action' => true,
            'actions' => $this->getActions(),
            'is_form' => false,
            'data' => Merk::All()
        ];
        return view('merk._index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $data['breadcrumbs'] = ['Merk' => route('merk.index'), 'Tambah Merk' => '#'];
        $data['data'] = [
            'view_title' => 'Tambah Merk',
            'view_icon' => 'fa fa-tag',
            'view_module' => 'merk.partials.form',
            'show_action' => true,
            'actions' => $this->getActions(),
            'is_form' => true,
            'form_action' => ['merk.store'],
            'form_method' => 'POST',
            'data' => false
        ];
        return view('merk._index', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $this->validate($request, [
            'kode'=>'required|unique:merk,kode',
            'nama'=>'required|unique:merk,nama',
        ]);
        $input = $request->all();
        Merk::create($input);
        Session::flash('flash_message', 'Sukses menginput Merk tersebut!');
        return redirect('merk');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        $data['breadcrumbs'] = ['Merk' => route('merk.index'), 'Detail Merk' => '#'];
        $data['data'] = [
            'view_title' => 'Detail Merk',
            'view_icon' => 'fa fa-tag',
            'view_module' => 'merk.partials.detail',
            'show_action' => true,
            'actions' => $this->getActions(),
            'is_form' => false,
            'data' => Merk::findOrFail($id)
        ];
        return view('merk._index', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $data['breadcrumbs'] = ['Merk' => route('merk.index'), 'Edit Merk' => '#'];
        $data['data'] = [
            'view_title' => 'Edit Merk',
            'view_icon' => 'fa fa-tag',
            'view_module' => 'merk.partials.form',
            'show_action' => true,
            'actions' => $this->getActions(),
            'is_form' => true,
            'form_action' => ['merk.update', $id],
            'form_method' => 'PATCH',
            'data' => Merk::findOrFail($id)
        ];
        return view('merk._index', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        $data = Merk::findOrFail($id);
        $this->validate($request, [
            'kode'=>['required',Rule::unique('merk', 'kode')->ignore($data->kode, 'kode')],
            'nama'=>['required',Rule::unique('merk', 'nama')->ignore($data->nama, 'nama')],
        ]);
        $input = $request->all();
        $data->fill($input)->save();
        Session::flash('flash_message', 'Sukses mengupdate merk tersebut!');
        return redirect('merk');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $model = Merk::findOrFail($id);
        $model->delete();
        Session::flash('flash_message', 'Sukses menghapus merk tersebut!');
        return redirect()->route('merk.index');
    }
    
    private function getActions() {
        return [
            [
                'title' => 'Tambah',
                'url' => route('merk.create'),
                'roles' => 'all',
            ],
        ];
    }

}
