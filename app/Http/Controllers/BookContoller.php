<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Employee;
use App\Models\Customer;
use App\Models\service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookContoller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request ->validate([
            'AppointmentId'=>'required',
            'staff'=>'required',
            'date'=>'required',
            'time'=>'required',
            'service'=>'required',
            'serviceID'=>'required',
            'staffID'=>'required',
        ]);
        $employee=Employee::where('id','=',$request->get('staffID'))->first();
        $service=service::where('id','=',$request->get('serviceID'))->first();
        if($employee !=null && $service !=null)
        {
            Book::create($request->all());
            return back();
        }
       /* $book_data=DB::table('books')
            ->join('employee', 'book.staffID', '=', 'employee.id')
            ->join('employee','books.staffID','=','Employee.id')
            ->where('book.staffID', '=', $employee)
            ->join('service','books.serviceID','=','service.id')
            ->select('book.*')
            ->get();


        if($book_data !=null){
            Book::create($request->all());
            return redirect()->back();
        }*/
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        //
    }
}
