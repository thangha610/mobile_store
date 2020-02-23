<?php

namespace Modules\Admin\Http\Controllers;

use App\Http\Requests\RequestCategory;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class AdminCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $categories = Category::select('id','c_name', 'c_title_seo', 'c_description_seo')->get();
        $viewData = [
          'categories' => $categories
        ];
        return view('admin::category.index', $viewData);
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('admin::category.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(RequestCategory $request)
    {
        $catergory                    = new Category();
        $catergory->c_name            = $request->name;
        $catergory->c_slug            = str_slug($request->name);
        $catergory->c_icon            = str_slug($request->icon);
        $catergory->c_title_seo       = $request->c_title_seo ? $request->c_title_seo : $request->name;
        $catergory->c_description_seo = $request->c_description_seo;
        $catergory->save();

        return redirect()->back();
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        return view('admin::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        $category = Category::find($id);
        return view('admin::category.update', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $catergory                    = Category::find($id);
        $catergory->c_name            = $request->name;
        $catergory->c_slug            = str_slug($request->name);
        $catergory->c_icon            = str_slug($request->icon);
        $catergory->c_title_seo       = $request->c_title_seo ? $request->c_title_seo : $request->name;
        $catergory->c_description_seo = $request->c_description_seo;
        $catergory->save();

        return redirect()->back(); 
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
