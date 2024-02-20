<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Requests\CategoryRequest;

class CategoryController extends Controller
{
    public function index()
    {
    $categories = Category::all();

    return view('index', compact('categories'));
    }

    public function confirm(CategoryRequest $request)
    {
        $contact = $request->only(['content']);

        return view('confirm', compact('contact'));
    }

    public function store(CategoryRequest $request)
    {
        $contact = $request->only(['content']);
        Contact::create($contact);
        return view('thanks');
    }
}
