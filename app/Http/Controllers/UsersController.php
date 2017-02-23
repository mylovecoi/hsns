<?php

namespace App\Http\Controllers;

use App\DnDvLt;
use App\DnDvLtReg;
use App\DonViDvVt;
use App\DonViDvVtReg;
use App\Register;
use App\Users;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Session;

class UsersController extends Controller
{
    public function login()
    {
        return view('system.users.login')
            ->with('pageTitle', 'Đăng nhập hệ thống');
    }

    public function signin(Request $request)
    {
        $input = $request->all();
        $check = Users::where('username', $input['username'])->count();
        if ($check == 0)
            return view('errors.invalid-user');
        else
            $ttuser = Users::where('username', $input['username'])->first();

        if (md5($input['password']) == $ttuser->password) {
            if ($ttuser->status == "Kích hoạt") {
                Session::put('admin', $ttuser);
                return redirect('tong_quan')
                    ->with('pageTitle', 'Tổng quan');
            } else
                return view('errors.lockuser');

        } else
            return view('errors.invalid-pass');
    }

    public function cp()
    {

        if (Session::has('admin')) {

            return view('system.users.change-pass')
                ->with('pageTitle', 'Thay đổi mật khẩu');

        } else
            return view('errors.notlogin');

    }

    public function cpw(Request $request)
    {

        $update = $request->all();

        $username = session('admin')->username;

        $password = session('admin')->password;

        $newpass2 = $update['newpassword2'];

        $currentPassword = $update['current-password'];

        if (md5($currentPassword) == $password) {
            $ttuser = Users::where('username', $username)->first();
            $ttuser->password = md5($newpass2);
            if ($ttuser->save()) {
                Session::flush();
                return view('errors.changepassword-success');
            }
        } else {
            dd('Mật khẩu cũ không đúng???');
        }
    }

    public function checkpass(Request $request)
    {
        $input = $request->all();
        $passmd5 = md5($input['pass']);

        if (session('admin')->password == $passmd5) {
            echo 'ok';
        } else {
            echo 'cancel';
        }
    }

    public function checkuser(Request $request)
    {
        $input = $request->all();
        $newusser = $input['user'];

        $model = Users::where('username', $newusser)
            ->first();
        if (isset($model)) {
            echo 'cancel';
        } else {
            echo 'ok';
        }
    }

    public function checkmasothue(Request $request)
    {
        $input = $request->all();
        if ($input['pl'] == 'DVLT') {
            $model = DnDvLt::where('masothue', $input['masothue'])
                ->first();
        }elseif($input['pl']=='DVVT'){
            $model = DonViDvVt::where('masothue',$input['masothue'])
                ->first();
        }
        if (isset($model)) {
            echo 'cancel';
        } else {
            echo 'ok';
        }
    }

    public function logout()
    {
        if (Session::has('admin')) {
            Session::flush();
            return redirect('/login');
        } else {
            return redirect('');
        }
    }

    public function index($pl)
    {
        if (Session::has('admin')) {
            if ($pl == 'quan_ly')
                $level = 'T';
            elseif ($pl == 'dich_vu_luu_tru')
                $level = 'DVLT';
            elseif ($pl == 'dich_vu_van_tai')
                $level = 'DVVT';

            $model = Users::where('level', $level)
                ->get();
            $index_unset = 0;
            foreach ($model as $user) {
                if ($user->sadmin == 'ssa' || $user->sadmin == 'sa') {
                    unset($model[$index_unset]);
                }
                $index_unset++;
            }

            return view('system.users.index')
                ->with('model', $model)
                ->with('pl', $pl)
                ->with('pageTitle', 'Danh sách tài khoản');

        } else {
            return redirect('');
        }
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (Session::has('admin')) {
            $model = Users::findOrFail($id);
            return view('system.users.edit')
                ->with('model', $model)
                ->with('pageTitle', 'Chỉnh sửa thông tin tài khoản');

        } else {
            return redirect('');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if (Session::has('admin')) {
            $input = $request->all();
            $model = Users::findOrFail($id);
            $model->name = $input['name'];
            $model->phone = $input['phone'];
            $model->email = $input['email'];
            $model->status = $input['status'];
            $model->username = $input['username'];
            if ($input['newpass'] != '')
                $model->password = md5($input['newpass']);
            $model->save();
            if ($model->pldv == 'DVLT')
                $pl = 'dich_vu_luu_tru';
            elseif ($model->pldv == 'DVVT')
                $pl = 'dich_vu_van_tai';
            else
                $pl = 'quan_ly';

            return redirect('users/pl=' . $pl);

        } else {
            return redirect('');
        }
    }

    public function destroy(Request $request)
    {
        if (Session::has('admin')) {
            $id = $request->all()['iddelete'];
            $model = Users::findorFail($id);

            if ($model->level == 'T')
                $pl = 'quan_ly';
            elseif ($model->level == 'DVLT')
                $pl = 'dich_vu_luu_tru';
            elseif ($model->level == 'DVVT')
                $pl = 'dich_vu_van_tai';

            $model->delete();

            return redirect('users/pl=' . $pl);

        } else
            return view('errors.notlogin');
    }

    public function permission($id)
    {
        if (Session::has('admin')) {

            $model = Users::findorFail($id);
            if($model->level == 'DVVT') {
                $ttdn = DonViDvVt::where('masothue',$model->mahuyen)
                    ->first();
                $setting = $ttdn->setting;

            }else
                $setting = '';
            $permission = !empty($model->permission) ? $model->permission : getPermissionDefault($model->level);
            //dd(json_decode($permission));
            return view('system.users.perms')
                ->with('permission', json_decode($permission))
                ->with('setting',$setting)
                ->with('model', $model)
                ->with('pageTitle', 'Phân quyền cho tài khoản');

        } else
            return view('errors.notlogin');
    }

    public function uppermission(Request $request)
    {
        if (Session::has('admin')) {
            $update = $request->all();
            $id = $request['id'];

            $model = Users::findOrFail($id);
            //dd($model);
            if (isset($model)) {

                $update['roles'] = isset($update['roles']) ? $update['roles'] : null;
                $model->permission = json_encode($update['roles']);
                $model->save();
                if ($model->level == 'T')
                    $pl = 'quan_ly';
                elseif ($model->level == 'DVLT')
                    $pl = 'dich_vu_luu_tru';
                elseif ($model->level == 'DVVT')
                    $pl = 'dich_vu_van_tai';
                return redirect('users/pl=' . $pl);

            } else
                dd('Tài khoản không tồn tại');

        } else
            return view('errors.notlogin');
    }

    public function lockuser($id,$pl)
    {

        $arrayid = explode('-', $id);
        foreach ($arrayid as $ids) {
            $model = Users::findOrFail($ids);
            if ($model->status != "Chưa kích hoạt") {
                $model->status = "Vô hiệu";
                $model->save();
            }
        }
        return redirect('users/pl='.$pl);

    }

    public function unlockuser($id,$pl)
    {
        $arrayid = explode('-', $id);
        foreach ($arrayid as $ids) {
            $model = Users::findOrFail($ids);

            if ($model->status != "Chưa kích hoạt") {

                $model->status = "Kích hoạt";
                $model->save();
            }
        }
        return redirect('users/pl='.$pl);

    }

    public function register($pl){
        if (Session::has('admin')) {
            if($pl == 'dich_vu_luu_tru'){
                $model = Register::where('pl','DVLT')
                    ->get();
            }elseif($pl== 'dich_vu_van_tai'){
                $model = Register::where('pl','DVVT')
                    ->get();
            }
            return view('system.users.register.index')
                ->with('model',$model)
                ->with('pl',$pl)
                ->with('pageTitle','Thông tin tài khoản đăng ký');

        } else
            return view('errors.notlogin');
    }

    public function registershow($id){
        if (Session::has('admin')) {
            $model = Register::findOrFail($id);
            if($model->pl == 'DVLT'){
                return view('system.users.register.dvlt')
                    ->with('model',$model)
                    ->with('pageTitle','Thông tin đăng ký tài khoản dịch vụ lưu trú');
            }elseif($model->pl == 'DVVT'){
                return view('system.users.register.dvvt')
                    ->with('model',$model)
                    ->with('pageTitle','Thông tin đăng ký tài khoản dịch vụ vận tải');
            }
        }else
            return view('errors.notlogin');

    }

    public function registerdvlt(Request $request){
        if (Session::has('admin')) {
            $input = $request->all();
            $id = $input['idregister'];
            $model = Register::findOrFail($id);
            $modeldn = new DnDvLt();
            $modeldn->tendn = $model->tendn;
            $modeldn->masothue = $model->masothue;
            $modeldn->teldn = $model->teldn;
            $modeldn->faxdn = $model->faxdn;
            $modeldn->email = $model->email;
            $modeldn->diachidn = $model->diachidn;
            $modeldn->trangthai = 'Kích hoạt';
            $modeldn->noidknopthue = $model->noidknopthue;
            $modeldn->tailieu = $model->tailieu;
            if($modeldn->save()){
                $modeluser = new Users();
                $modeluser->name = $model->tendn;
                $modeluser->username = $model->username;
                $modeluser->password = $model->password;
                $modeluser->phone = $model->teldn;
                $modeluser->email = $model->email;
                $modeluser->status = 'Kích hoạt';
                $modeluser->mahuyen = $model->masothue;
                $modeluser->level = 'DVLT';
                $modeluser->save();
            }
            $delete = Register::findOrFail($id)->delete();
            return redirect('users/register/pl=dich_vu_luu_tru');

        } else
            return view('errors.notlogin');
    }

    public function registerdvvt(Request $request){
        if (Session::has('admin')) {
            $input = $request->all();
            $id = $input['idregister'];
            $model = Register::findOrFail($id);
            $modeldn = new DonViDvVt();
            $modeldn->tendonvi = $model->tendn;
            $modeldn->masothue = $model->masothue;
            $modeldn->dienthoai = $model->teldn;
            $modeldn->fax = $model->faxdn;
            $modeldn->email = $model->email;
            $modeldn->diachi = $model->diachidn;
            $modeldn->dknopthue = $model->noidknopthue;
            $modeldn->tailieu = $model->tailieu;
            $modeldn->giayphepkd = $model->giayphepkd;
            $modeldn->setting = $model->setting;
            $modeldn->dvxk = $model->dvxk;
            $modeldn->dvxb = $model->dvxb;
            $modeldn->dvxtx = $model->dvxtx;
            $modeldn->dvk = $model->dvk;
            $modeldn->toado = $model->diachi!= '' ? getAddMap($model->diachi) : '';
            $modeldn->trangthai = 'Kích hoạt';

            if($modeldn->save()){
                $modeluser = new Users();
                $modeluser->name = $model->tendn;
                $modeluser->username = $model->username;
                $modeluser->password = $model->password;
                $modeluser->phone = $model->tel;
                $modeluser->email = $model->email;
                $modeluser->status = 'Kích hoạt';
                $modeluser->mahuyen = $model->masothue;
                $modeluser->level = 'DVVT';
                $modeluser->save();
            }
            $delete = Register::findOrFail($id)->delete();
            return redirect('users/register/pl=dich_vu_van_tai');

        } else
            return view('errors.notlogin');
    }

    public function registerdelete(Request $request){
        if (Session::has('admin')) {
            $input = $request->all();
            $id = $input['iddelete'];
            $model = Register::findOrFail($id);
            $pl = $model->pl;
            if($pl == 'DVLT')
                $dv = 'dich_vu_luu_tru';
            elseif($pl == 'DVVT')
                $dv = 'dich_vu_van_tai';
            $model->delete();

            return redirect('users/register/pl='.$dv);
        } else
            return view('errors.notlogin');
    }
}
