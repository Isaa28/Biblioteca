<?php

namespace App\Http\Controllers;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{

    public function index()
    {
        $books = Book::all();  
        return view('Books.index', compact('books'));
    }

    public function create()
    {
        return view('books.create');
    }

    public function store(Request $request)
    {
        if(Book::create($request->all())) {
            return redirect()->route('books.index')->with('sucesso', 'Livro criado com sucesso!');    
        }else{
            return redirect()->route('books.index')->with('erro', 'Erro não foi possível cadastrar o livro.');
        }
        
    }

    public function show(string $id)
    {
        $book = Book::findOrFail($id);
        return view('books.show', compact('book'));
    }

    public function edit(string $id)
    {
        $book = Book::findOrFail($id);
        return view('books.edit', compact('book'));
    }

       public function update(Request $request, string $id)
    {
        $book = Book::findOrFail($id);

        if($book->update($request->all())) {
            return redirect()->route('books.index')->with('sucesso', 'Livro atualizado com sucesso!');    
        }else{
            return redirect()->route('books.index')->with('erro', 'Erro não foi possível atualizar o livro.');
        }

    }

    public function destroy(string $id)
    {
        $book = Book::findOrFail($id);

        if($book->delete()) {
            return redirect()->back()->with('sucesso', 'Livro deletado com sucesso!');    
        }else{
            return redirect()->back()->with('erro', 'Erro não foi possível deletar o livro.');
        }
    }
}
