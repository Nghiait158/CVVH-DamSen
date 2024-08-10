<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Area;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
class CategoryController extends Controller
{

    public function index(){
        $data = $this->data();
        return view('admin.add_category', $data);
    }
        function data() {
        $all_area = Area::all();
        return [
            'all_area' => $all_area,
        ];
    }

    public function category_manage(){  //hiển thị danh sách các job 
        $allCategory=Category::all();
        $manage_category= view('admin.category_manage')->with('allCategory', $allCategory);
        return view('admin.admin_layout')->with('admin.category_manage',$manage_category);
    }

    // public function add_area(){
    //     return view('admin.add_area');
    // }
    public function saveCategory(Request $request){

        $data = $request->all();
        $category = new Category();
        $category->categoryName = $data['categoryName'];
        $category->areaID = $data['areaID'];
        $category->save();
        Session::put('message', 'Tải thể loại lên thành công');
        return Redirect::to('add_category');
    }
    public function editCategory($categoryID){
        $editCategory = Category::find($categoryID);
    
        $all_area = Area::all();

        $data = [
            'editCategory' => $editCategory,
            'all_area' => $all_area,
        ];
        
        return view('admin.editCategory', $data);
        // $editCategory=Area::find($categoryID);
        // $allCategory= view('admin.editCategory')->with('editCategory', $editCategory);
        // return view('admin.admin_layout')->with('admin.editCategory',$allCategory);
    }
    public function updateCategory(Request $request, $categoryID){
        $data= $request->all();
        $category= Category::find($categoryID);
        $category->categoryName=$data['categoryName'];
        $category->areaID=$data['areaID'];
        $category->save();
        Session::put('message','Chỉnh sửa thể loại thành công');
        return Redirect::to('category_manage');

    }
    public function deleteCategory($categoryID){
        $category = Category::find($categoryID);
        if ($category) {
            // Xóa mục
            $category->delete();
            Session::flash('message', 'Đã xóa thể loại thành công.');
        } else {
            Session::flash('message', 'Thể loại không tồn tại.');
        }
        return Redirect::to('category_manage');
    }
}
