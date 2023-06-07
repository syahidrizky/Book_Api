<?php

namespace App\Http\Controllers;

use App\Http\Libraries\BaseApi;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        // $data = (new BaseApi)->index('api/books');
        // $books = $data->json();
        // return view('books.index')->with('books', $books['data']);

        $data = (new BaseApi)->index('/api/books');
        $books = $data->json('data');

        

        for ($i=0; $i < count($books); $i++) {
            $books[$i]['image_path'] = env('API_HOST') . 'storage/' . $books[$i]['image'];
        }

        return view('books.index')->with('books' , $books);
    }

    public function create()
    {
        return view('books.create');
    }

    public function store(Request $request)
    {
        // $upload = [
        //     'nis' => $request->nis,
        //     'nama' => $request->nama,
        //     'rombel' => $request->rombel,
        //     'rayon' => $request->rayon,
        // ];
            
        // $baseApi = new BaseApi;
        // $response = $baseApi->create('/api/books/store', $upload);
        // return redirect('/books');
    }

    public function show($id)
    {
        // $data = (new BaseApi)->detail('/api/books/', $id);
        // $books = $data->json();
        // return view('books.show')->with('books', $books['data']);
    }

    public function edit($id)
    {
        // $data = (new BaseApi)->detail('/api/books', $id);
        // $books = $data->json();
        // return view('books.update')->with('books', $books['data']);
    }

    public function update(Request $request, $id)
    {
        // $payload = [
        //     'nis' => $request->nis,
        //     'nama' => $request->nama,
        //     'rombel' => $request->rombel,
        //     'rayon' => $request->rayon,
        // ];

        // $baseApi = new BaseApi;
        // $response = $baseApi->update('/api/books/update', $id, $payload);
        // return redirect('/books');
    }


    public function destroy(Request $request, $id)
    {
        $baseApi = new BaseApi;
        $response = $baseApi->delete('/api/books/delete', $id);
        return redirect('/books');
    }
}
