<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule as Rule;
use Session;
use App\Product;

class ProductController extends Controller {

    public $breadcrumbs;

    public function index() {
        $data['breadcrumbs'] = ['Produk' => route('product.index'), 'Daftar Produk' => '#'];
        $data['data'] = [
            'view_title' => 'Daftar Produk',
            'view_icon' => 'fa fa-gift',
            'view_module' => 'product.partials.tables',
            'show_action' => true,
            'actions' => $this->getActions(),
            'is_form' => false,
            'data' => Product::All()
        ];
        return view('product._index', $data);
    }

    public function show($id) {
        $data['breadcrumbs'] = ['Produk' => route('product.index'), 'Detail Produk' => '#'];
        $data['data'] = [
            'view_title' => 'Detail Produk',
            'view_icon' => 'fa fa-gift',
            'view_module' => 'product.partials.detail',
            'show_action' => true,
            'actions' => $this->getActions(),
            'is_form' => false,
            'data' => Product::findOrFail($id)
        ];
        return view('product._index', $data);
    }

    public function create() {
        $data['breadcrumbs'] = ['Produk' => route('product.index'), 'Tambah Produk' => '#'];
        $data['data'] = [
            'view_title' => 'Tambah Produk',
            'view_icon' => 'fa fa-plus',
            'view_module' => 'product.partials.form',
            'show_action' => true,
            'actions' => $this->getActions(),
            'is_form' => true,
            'form_action' => ['product.store'],
            'form_method' => 'POST',
            'data' => false
        ];
        return view('product._index', $data);
    }

    public function store(Request $request) {
        $this->validate($request, [
            'kode' => 'required|unique:products,kode',
            'merk' => 'required',
            'jenis' => 'required',
            'nama' => 'required|unique:products,nama',
        ]);
        $input = $request->all();

        Product::create($input);
        Session::flash('flash_message', 'Sukses menginput produk!');
        return redirect('product');
    }

    public function edit($id) {
        $data['breadcrumbs'] = ['Produk' => route('product.index'), 'Edit Produk' => '#'];
        $data['data'] = [
            'view_title' => 'Edit Produk',
            'view_icon' => 'fa fa-pencil',
            'view_module' => 'product.partials.form',
            'show_action' => true,
            'actions' => $this->getActions(),
            'is_form' => false,
            'form_action' => ['product.update', $id],
            'form_method' => 'PATCH',
            'data' => Product::findOrFail($id)
        ];
        return view('product._index', $data);
    }

    public function update($id, Request $request) {
        $data = Product::findOrFail($id);
        $this->validate($request, [
            'kode' => ['required', Rule::unique('products')->ignore($data->kode, 'kode')],
            'merk' => 'required',
            'jenis' => 'required',
            'nama' => ['required', Rule::unique('products')->ignore($data->nama, 'nama')],
        ]);
        $input = $request->all();

        $data->fill($input)->save();
        Session::flash('flash_message', 'Sukses mengupdate produk tersebut!');
        return redirect('product');
    }

    public function destroy($id) {
        $model = Product::findOrFail($id);
        $model->delete();
        Session::flash('flash_message', 'Sukses menghapus produk tersebut!');
        return redirect()->route('product.index');
    }

    private function getActions() {
        return [
            [
                'title' => 'Tambah',
                'url' => route('product.create'),
                'roles' => 'all',
            ],
        ];
    }

}
