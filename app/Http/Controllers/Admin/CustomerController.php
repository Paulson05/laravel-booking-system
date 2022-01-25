<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CustomerStoreRequest;
use App\Models\Customer;
use Illuminate\Http\Request;
use PhpParser\Lexer\TokenEmulator\ReadonlyTokenEmulator;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = Customer::all();
        return view('admin.pages.customer.index', ['customers'=> $customers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.customer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CustomerStoreRequest $request)
    {


        if($request->hasFile('photo')){
            $image1=$request->file('photo');
            $reThumbImage=time().'.'.$image1->getClientOriginalExtension();
            $dest1=public_path('/imgs/thumb');
            $image1->move($dest1,$reThumbImage);
        }else{
            $reThumbImage='na';
        }
        $customer = Customer::create(collect($request->only(['full_name','email','mobile','address']))
            ->put('photo',$reThumbImage)
            ->put('password', bcrypt($request->password))
            ->all());
        $customer->save();

        return redirect()->back()->with('success', 'customer added sucessfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
       return view('admin.pages.customer.show', ['customer' => $customer]);

    }


    public function edit(Customer $customer)
    {
        return view('admin.pages.customer.edit', ['customer'=> $customer]);
    }


    public function update(Request $request, Customer $customer)
    {

        if($customer){
            if($request->hasFile('photo')){
                $image1=$request->file('photo');
                $reThumbImage=time().'.'.$image1->getClientOriginalExtension();
                $dest1=public_path('/imgs/thumb');
                $image1->move($dest1,$reThumbImage);
            }else{
                $reThumbImage='na';
            }


            $customer->update(collect($request->only(['full_name','email','mobile','address']))->put('photo',$reThumbImage)->put('password', bcrypt($request->password))->all());
            return redirect()->route('customer.index')
                ->with('success', 'stage updated sucessfully!');
    }

    }
    public function destroy($id)
    {
        //
    }
}
