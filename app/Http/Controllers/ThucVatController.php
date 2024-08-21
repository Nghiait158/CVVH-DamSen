<?php

namespace App\Http\Controllers;
use App\Models\Area;
use App\Models\Category;
use App\Models\Location;
use App\Models\ThucVat;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;

class ThucVatController extends Controller
{

    // ----------------BackEnd--------
    public function thucvat_manage(){  
        $allThucVat=ThucVat::all();
        $manage_ThucVat= view('admin.thucvat_manage')->with('allThucVat', $allThucVat);
        return view('admin.admin_layout')->with('admin.thucvat_manage',$manage_ThucVat);
    }
    public function index(){
        $data = $this->data();
        return view('admin.add_thucvat', $data);
    }
        function data() {
        $all_thucvat = ThucVat::all();
        return [
            'all_thucvat' => $all_thucvat,
        ];
    }
    public function saveThucVat(Request $request){

        $data = $request->all();
        $thucvat = new ThucVat();
        $thucvat->tvID   = $data['tvID'];
        $thucvat->tvName  = $data['tvName'];
        $thucvat->tvStatus = $data['tvStatus'];
        $thucvat->tvDate = $data['tvDate'];
        $thucvat->tvDescription = $data['tvDescription'];
        $thucvat->tvContent = $data['tvContent'];
        $thucvat->tvContentCSS = $data['tvContentCSS'];
        $thucvat->tvContentJS = $data['tvContentJS'];

        if ($request->imageChoice == 'file' && $request->hasFile('tvImgPath')) {
            $get_image = $request->file('tvImgPath');
            $new_image = $data['tvName'] . '.' . $get_image->getClientOriginalExtension();
            $get_image->move(public_path('frontEnd/img'), $new_image);
            $thucvat->tvImgPath = '/frontEnd/img/' . $new_image;
        } elseif ($request->imageChoice == 'text' && !empty($data['tvImgUrl'])) {
            $thucvat->tvImgPath = $data['tvImgUrl'];
        }
       
        $thucvat->save();
        Session::put('message', 'Tải ThucVat  lên thành công');
        return Redirect::to('add_thucvat');
    }
    public function editThucVat($tvID){
        $editThucVat = ThucVat::find($tvID);
        $data = [
            'editThucVat' => $editThucVat,
        ];
        return view('admin.editThucVat', $data);
    }
    public function updateThucVat(Request $request, $tvID){
        $data= $request->all();
        $thucvat= ThucVat::find($tvID);
        if (!$thucvat) {
            return redirect()->back()->withErrors(['error' => 'ThucVat not found']);
        }
        $thucvat->tvID  = $data['tvID'];
        $thucvat->tvName = $data['tvName'];
        $thucvat->tvStatus = $data['tvStatus'];
        $thucvat->tvDate = $data['tvDate'];
        $thucvat->tvDescription = $data['tvDescription'];
        $thucvat->tvContent = $data['tvContent'];
        $thucvat->tvContentCSS = $data['tvContentCSS'];
        $thucvat->tvContentJS = $data['tvContentJS'];

        if ($data['imageChoice'] === 'file' && $request->hasFile('tvImgPath')) {
            if (file_exists(public_path($thucvat->tvImgPath))) {
                unlink(public_path($thucvat->tvImgPath));
            }
            $image = $request->file('tvImgPath');
            $imageName = $data['tvName'] . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('frontEnd/img'), $imageName);
            $thucvat->tvImgPath = '/frontEnd/img/' . $imageName;
        } elseif ($request->imageChoice == 'text' && !empty($data['tvImgUrl'])) {
            $thucvat->tvImgPath = $data['tvImgUrl'];
        }
        $thucvat->save();
        Session::put('message','Chỉnh sửa ThucVat thành công');
        return Redirect::to('thucvat_manage');

    }
    public function deleteThucVat($tvID){
        $thucvat = ThucVat::find($tvID);
        if ($thucvat) {
            // Xóa mục
            $thucvat->delete();
            Session::flash('message', 'Đã xóa ThucVat thành công.');
        } else {
            Session::flash('message', 'ThucVat không tồn tại.');
        }
        return Redirect::to('thucvat_manage');
    }



//-------------------------- frontEnd---------------------

    public function thucvat(){
        $data = $this->dataThucVat();
        return view('thucvat', $data);
    }
        function dataThucVat() {
            $first8ThucVat = ThucVat::orderBy('created_at', 'desc')->limit(8)->get();

            
            $locationDetail = Location::with('images')->find(59);
            $previousLocation = Location::where('loID', '<', $locationDetail->loID)->orderBy('loID', 'desc')->first();
            $nextLocation = Location::where('loID', '>', $locationDetail->loID)->orderBy('loID', 'asc')->first();
            $randomLocations = Location::with(['images' => function($query) {
                $query->limit(1);
            }, 'category.area'])
            ->inRandomOrder()
            ->get()
            ->groupBy('categoryID')
            ->take(4)
            ->flatMap(function ($group) {
                return $group->take(1);
            });

            // dd($first8ThucVat);
             // ------header---------
            $all_area = Area::all();
            $categories = Category::with('locations')->get();

            // Sắp xếp các location theo categoryID và lấy luôn tên category
            $categorizedLocations = [];
            foreach ($categories as $category) {
                $categorizedLocations[$category->categoryID] = [
                    'categoryName' => $category->categoryName,
                    'locations' => $category->locations
                ];
            }
            return [
                'first8ThucVat'=>$first8ThucVat,
                'locationDetail' => $locationDetail,
                'previousLocation' => $previousLocation,
                'nextLocation' => $nextLocation,
                'randomLocations' => $randomLocations,

                // header
                'all_area' => $all_area,
                'categorizedLocations' => $categorizedLocations,

            ];
        }
}
