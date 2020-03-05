<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use App\ Http\Requests;

class BlogController extends Controller
{

	public function __construct () {
		$this->middleware('auth', ['only'=> ['create', 'stroe', 'index', 'edit']]);
	}

    public function index() {
    	$blogs = Blog::all();
    	return view('blog.index', compact('blogs'));
    }

    public function show($id) {
    	$blog = Blog::find($id);
    	return view('blog.show', compact('blog'));
    }

    public function create() {
    	return view('blog.create');
    }

    public function edit($id) {
    	$blog = Blog::find($id);
    	return view('blog.edit', compact('blog'));
    }

    public function update ($id, Request $request) {
    	$blog = Blog::find($id);
    	$blog->fill($request->all())->save();
    	return redirect(url('blogs'));
    }

    public function store(Request $request) {
    	$request->validate([
    		'title' => 'required',
    		'text' => 'required',
    	]);

    	$blog = new blog();
    	$blog->fill($request->all())->save();
    	return redirect(url('blogs'));
    }

    public function destroy($id) {
    	$blog = Blog::find($id);
    	$blog->delete();
    	return ('deleted successfully');
    }
}
