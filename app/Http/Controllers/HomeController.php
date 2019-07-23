<?php

namespace App\Http\Controllers;

use App\Http\Rule\ValidData;
use App\Models\Data;
use Illuminate\Http\Request;
use App\Models\Catagories;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function laydanhmuc()
    {
        // lay tat ca du lieu trong danh muc
        $catagories = Catagories::first()->name;
        $catagories = explode(',', $catagories);
        return view('danhmuc', ['catagories' => $catagories]);
    }

    public function datachuaconghia(Request $request)
    {
        $datas = Data::where('ngu_nghia', '=', '')
            ->orWhereNull('ngu_nghia')
            ->get();
        return view('listdata', ['datas' => $datas]);
    }

    public function datatrongngay(Request $request)
    {
        $datas = Data::where('created_at', '=', date("Y/m/d"))
            ->get();
        return view('listdata', ['datas' => $datas]);
    }

    public function timdata(Request $request)
    {
        $query = Data::query();

        if (!empty($request['danh_muc'])) {
            $query->where("danh_muc", $request['danh_muc']);
        }
        if (!empty($request['keyword'])) {
            $query->where("keyword", 'like', '%' . $request['keyword'] . '%');
        }
        $datas = $query->where('id', '>', 1)->get();

        return view('listdata', ['datas' => $datas]);
    }

    public function setupcapnhatdata(Request $request)
    {
        if (!empty($request['id'])) {
            $data = Data::where('id', '=', $request['id'])->first();
            if (!empty($data)) {
                return view('capnhatdata', ['datas' => $data]);
            }
        } else {
            return back()->withInput();
        }

    }

    public function xoadata(Request $request)
    {
        DB::beginTransaction();
        try {
            Data::destroy((int)($request['id']));
            DB::commit();
            return redirect()->route('timdata');
        } catch (Exception $e) {
            DB::rollBack();
            throw new Exception($e->getMessage());
        }
    }

    public function themdata(ValidData $request)
    {
        DB::beginTransaction();
        try {
            $data = new Data();
            if (!empty($request['danh_muc']) && !$this->checkDanhMucDaTonTai($request['danh_muc'])) {
                $this->themDanhmuc($request['danh_muc']);
            }
            $data->danh_muc = $request['danh_muc'];
            $data->link_am_thanh = $request['link_am_thanh'];
            $data->link_hinh_anh = $request['link_hinh_anh'];
            $data->link_lien_ket = $request['link_lien_ket'];
            $data->ngu_nghia = $request['ngu_nghia'];

            if ($this->checkKeywordDaTonTai($request['keyword'])) {
                // thong bao keyword da ton tai
                session()->flash('error', 'keyword da ton tai');
                return back()->withInput();
            } else {
                $data->keyword = $request['keyword'];
            }
            $data->save();
            session()->flash('msg', 'cap nhat thanh cong');
            DB::commit();
            return redirect()->route('themdata')->withInput();;
        } catch (Exception $e) {
            DB::rollBack();
            throw new Exception($e->getMessage());
        }
    }

    public function capnhatdata(ValidData $request)
    {
        DB::beginTransaction();
        try {
            $data = Data::find($request['id']);
            if (!empty($request['danh_muc']) && !$this->checkDanhMucDaTonTai($request['danh_muc'])) {
                $this->themDanhmuc($request['danh_muc']);
            }
            $data->danh_muc = $request['danh_muc'];
            $data->link_am_thanh = $request['link_am_thanh'];
            $data->link_hinh_anh = $request['link_hinh_anh'];
            $data->link_lien_ket = $request['link_lien_ket'];
            $data->ngu_nghia = $request['ngu_nghia'];


            $data->keyword = $request['keyword'];

            $data->save();
            session()->flash('msg', 'cap nhat thanh cong');
            DB::commit();
            return redirect()->route('capnhat', $request['id']);
        } catch (Exception $e) {
            DB::rollBack();
            throw new Exception($e->getMessage());
        }
    }

    public function themDanhmuc($danhmuc)
    {
        $catagories = Catagories::first();
        $name = $catagories->name;
        $danhmucs = explode(',', $danhmuc);
        foreach ($danhmucs as $key => $value) {
            $name .= ',' . preg_replace('/\s+/', '', $value);
        }
        $catagories->name = $name;
        $catagories->save();
    }

    public function checkDanhMucDaTonTai($danhmuc)
    {
        $catagories = Catagories::first()->name;
        $catagories = explode(',', $catagories);
        $danhmucs = explode(',', $danhmuc);

        foreach ($danhmucs as $key => $value) {
            if (in_array(preg_replace('/\s+/', '', $value), $catagories)) {
                return true;
            }
        }
        return false;
    }

    public function checkKeywordDaTonTai($keyword)
    {
        $rs = Data::where('keyword', '=', $keyword)->first();
        if ($rs == null) {
            return false;
        } else {
            return true;
        }
    }
}
