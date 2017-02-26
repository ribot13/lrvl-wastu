<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule as Rule;
use App\Customers;
use App\CustomerJenis;
use Session;

class CustomersController extends Controller {

    public $breadcrumbs;

    public function index() {
        $data['breadcrumbs'] = ['Customer' => route('customers.index'), 'Daftar Customer' => '#'];
        $data['data'] = [
            'view_title' => 'Daftar Customer',
            'view_icon' => 'fa fa-users',
            'view_module' => 'customers.partials.tables',
            'show_action' => true,
            'actions' => $this->getActions(),
            'is_form' => false,
            'data' => Customers::All()
        ];
        return view('customers._index', $data);
    }

    public function show($id) {
        $data['breadcrumbs'] = ['Customer' => route('customers.index'), 'Detail Customer' => '#'];
        $data['data'] = [
            'view_title' => 'Detail Customer',
            'view_icon' => 'fa fa-search',
            'view_module' => 'customers.partials.detail',
            'show_action' => true,
            'actions' => $this->getActions(),
            'is_form' => false,
            'data' => Customers::findOrFail($id)
        ];
        return view('customers._index', $data);
    }

    public function create() {
        $data['breadcrumbs'] = ['Customer' => route('customers.index'), 'Tambah Customer' => '#'];

        $data['data'] = [
            'view_title' => 'Tambah Customer',
            'view_icon' => 'fa fa-plus',
            'view_module' => 'customers.partials.form',
            'show_action' => true,
            'actions' => $this->getActions(),
            'is_form' => true,
            'form_action' => ['customers.store'],
            'form_method' => 'POST',
            'jenis_customer' => $this->getJenisCustomer(),
            'data' => false,
        ];
        return view('customers._index', $data);
    }

    public function edit($id) {
        $data['breadcrumbs'] = ['Customer' => route('customers.index'), 'Edit Customer' => '#'];

        $data['data'] = [
            'view_title' => 'Edit Customer',
            'view_icon' => 'fa fa-pencil',
            'view_module' => 'customers.partials.form',
            'show_action' => true,
            'actions' => $this->getActions(),
            'is_form' => true,
            'form_action' => ['customers.update', $id],
            'form_method' => 'PATCH',
            'jenis_customer' => $this->getJenisCustomer(),
            'data' => Customers::findOrFail($id),
        ];
        return view('customers._index', $data);
    }

    public function store(Request $request) {
        $this->validate($request, [
            'jenis' => 'required',
            'nama' => 'required',
            'email' => 'required|email|unique:customers,email',
            'alamat_1' => 'required',
            'propinsi' => 'required',
            'kota' => 'required',
            'kecamatan' => 'required',
            'kodepos' => 'required|digits:5',
            'phone' => 'required|numeric',
            'mobile' => 'required|numeric',
        ]);
        $input = $request->all();

        Customers::create($input);
        Session::flash('flash_message', 'Sukses menginput customer!');
        return redirect('customers');
    }

    public function update($id, Request $request) {
        $data = Customers::findOrFail($id);
        $this->validate($request, [
            'jenis' => 'required',
            'nama' => 'required',
            'email' => ['required', Rule::unique('customers')->ignore($data->email, 'email')],
            'alamat_1' => 'required',
            'propinsi' => 'required',
            'kota' => 'required',
            'kecamatan' => 'required',
            'kodepos' => 'required|digits:5',
            'phone' => 'required|numeric',
            'mobile' => 'required|numeric',
        ]);
        $input = $request->all();
        $data->fill($input)->save();
        Session::flash('flash_message', 'Sukses mengupdate customer!');
        return redirect('customers');
    }

    public function destroy($id) {
        $customer = Customers::findOrFail($id);
        $customer->delete();
        Session::flash('flash_message', 'Sukses menghapus customer tersebut!');
        return redirect()->route('customers.index');
    }

    private function getActions() {
        return [
            [
                'title' => 'Tambah',
                'url' => route('customers.create'),
                'roles' => 'all',
            ],
//            'divider',
//            [
//                'title' => 'Test',
//                'url' => route('to.routing'),
//                'roles' => ['admin']
//            ],
        ];
    }

    private function getJenisCustomer() {
        $collection = CustomerJenis::where('_active', 1)->get(['id', 'nama']);
        $keyed = $collection->sortBy('nama')->mapWithKeys(function ($item) {
            return [$item['nama'] => $item['nama']];
        });
        return $keyed->all();
    }

}
