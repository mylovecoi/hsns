<?php
Route::get('tong_quan', 'HomeController@index');
Route::get('ajaxtest','ajaxController@test');
Route::get('test', function(){
    return view('test');
});

Route::get('/setting','HomeController@setting');
Route::post('/setting','HomeController@upsetting');

Route::get('register/dich_vu_luu_tru','HomeController@regdvlt');
Route::get('checkrgmasothue','HomeController@checkrgmasothue');
Route::get('checkrguser','HomeController@checkrguser');
Route::post('register/dich_vu_luu_tru','HomeController@regdvltstore');

Route::get('register/dich_vu_van_tai','HomeController@regdvvt');

Route::post('register/dich_vu_van_tai','HomeController@regdvvtstore');

// <editor-fold defaultstate="collapsed" desc="--Hệ thống--">
    // <editor-fold defaultstate="collapsed" desc="--Danh mục--">

    // </editor-fold>

    // <editor-fold defaultstate="collapsed" desc="--Quản lý chung--">

    // </editor-fold>
// </editor-fold>

// <editor-fold defaultstate="collapsed" desc="--Setting--">
Route::get('cau_hinh_he_thong','GeneralConfigsController@index');
Route::get('cau_hinh_he_thong/{id}/edit','GeneralConfigsController@edit');
Route::patch('cau_hinh_he_thong/{id}','GeneralConfigsController@update');

//Users
Route::get('login','UsersController@login');
Route::post('signin','UsersController@signin');
Route::get('/change-password','UsersController@cp');
Route::post('/change-password','UsersController@cpw');
Route::get('/checkpass','UsersController@checkpass');
Route::get('/checkuser','UsersController@checkuser');
Route::get('/checkmasothue','UsersController@checkmasothue');
Route::get('logout','UsersController@logout');
Route::get('users/pl={pl}','UsersController@index');
Route::get('users/{id}/edit','UsersController@edit');
Route::patch('users/{id}','UsersController@update');
Route::get('users/{id}/phan-quyen','UsersController@permission');
Route::post('users/phan-quyen','UsersController@uppermission');
Route::post('users/delete','UsersController@destroy');
Route::get('users/lock/{id}/{pl}','UsersController@lockuser');
Route::get('users/unlock/{id}/{pl}','UsersController@unlockuser');
Route::get('users/register/pl={pl}','UsersController@register');
Route::get('users/register/{id}/show','UsersController@registershow');
Route::post('register/createdvlt','UsersController@registerdvlt');
Route::post('register/createdvvt','UsersController@registerdvvt');
Route::post('register/delete','UsersController@registerdelete');
//EndUsers
// </editor-fold>//End Setting

Route::group(['prefix'=>'user'],function(){
    Route::post('signin','usersController@signin');
    Route::get('logout','usersController@logout');
});

Route::group(['prefix'=>'danh_muc'],function(){
    Route::group(['prefix'=>'phong_ban'],function(){
        Route::get('index','dmphongbanController@index');
        Route::get('store','dmphongbanController@store');
        Route::get('del/{id}','dmphongbanController@destroy');
    });

    Route::group(['prefix'=>'chuc_vu_cq'],function(){
        Route::get('index','dmchucvucqController@index');
        Route::get('store','dmchucvucqController@store');
        Route::get('del/{id}','dmchucvucqController@destroy');
    });

    Route::group(['prefix'=>'chuc_vu_d'],function(){
        Route::get('index','dmchucvudController@index');
        Route::get('store','dmchucvudController@store');
        Route::get('del/{id}','dmchucvudController@destroy');
    });

    Route::group(['prefix'=>'dan_toc'],function(){
        Route::get('index','dmdantocController@index');
        Route::get('store','dmdantocController@store');
        Route::get('del/{id}','dmdantocController@destroy');
    });

    Route::group(['prefix'=>'quan_he_gd'],function(){
        Route::get('index','dmquanhegdController@index');
        Route::get('store','dmquanhegdController@store');
        Route::get('del/{id}','dmquanhegdController@destroy');
    });

    Route::group(['prefix'=>'phu_cap'],function(){
        Route::get('index','dmphucapController@index');
        Route::get('store','dmphucapController@store');
        Route::get('del/{id}','dmphucapController@destroy');
    });

    Route::group(['prefix'=>'cong_tac'],function(){
        Route::get('index','dmphanloaictController@index');
        Route::get('store','dmphanloaictController@store');
        Route::get('del/{id}','dmphanloaictController@destroy');
    });

    Route::group(['prefix'=>'don_vi'],function(){
        Route::get('index','dmdonviController@index');
        Route::get('store','dmdonviController@store');
        Route::get('del/{id}','dmdonviController@destroy');
        Route::get('change/maso={madv}','dmdonviController@change');
    });
});

Route::group(['prefix'=>'nghiep_vu'],function(){
    Route::group(['prefix'=>'ho_so'],function(){
        Route::get('danh_sach','hosocanboController@index');
        Route::patch('update/{id}','hosocanboController@update');
        Route::get('create','hosocanboController@create');
        Route::get('maso={id}','hosocanboController@show');
        Route::get('del/maso={id}','hosocanboController@destroy');
        Route::post('store','hosocanboController@store');

        Route::get('syll/{id}','hosocanboController@syll');
        Route::get('ttts/{id}','hosocanboController@tomtatts');
        Route::post('bsll/{id}','hosocanboController@bsll');
    });

    Route::group(['prefix'=>'quan_ly'],function(){
        Route::group(['prefix'=>'tai_lieu'],function(){
            Route::get('/maso={macanbo}','hosotailieuController@index');
            Route::get('del/{id}','hosotailieuController@destroy');
        });
        Route::group(['prefix'=>'quan_he_bt'],function(){
            Route::get('/maso={macanbo}','hosoquanhegdController@index_bt');
            Route::get('del/{id}','hosoquanhegdController@destroy_bt');
        });
        Route::group(['prefix'=>'quan_he_vc'],function(){
            Route::get('/maso={macanbo}','hosoquanhegdController@index_vc');
            Route::get('del/{id}','hosoquanhegdController@destroy_vc');
        });
        Route::group(['prefix'=>'dieu_dong'],function(){
            Route::get('/maso={macanbo}','hosoluanchuyenController@index_dd');
            Route::get('del/{id}','hosoluanchuyenController@destroy_dd');
        });
        Route::group(['prefix'=>'chuc_vu'],function(){
            Route::get('/maso={macanbo}','hosochucvuController@index');
            Route::get('del/{id}','hosochucvuController@destroy');
        });
        Route::group(['prefix'=>'bhyt'],function(){
            Route::get('/maso={macanbo}','hosobaohiemyteController@index');
            Route::get('del/{id}','hosobaohiemyteController@destroy');
        });
        Route::group(['prefix'=>'llvt'],function(){
            Route::get('/maso={macanbo}','hosollvtController@index');
            Route::get('del/{id}','hosollvtController@destroy');
        });
    });

    Route::group(['prefix'=>'qua_trinh'],function(){
        Route::group(['prefix'=>'dao_tao'],function(){
            Route::get('/maso={macanbo}','hosodaotaoController@index');
            Route::get('del/{id}','hosodaotaoController@destroy');
        });
        Route::group(['prefix'=>'cong_tac'],function(){
            Route::get('/maso={macanbo}','hosocongtacController@index');
            Route::get('del/{id}','hosocongtacController@destroy');
        });
        Route::group(['prefix'=>'cong_tac_nn'],function(){
            Route::get('/maso={macanbo}','hosocongtacnnController@index');
            Route::get('del/{id}','hosocongtacnnController@destroy');
        });
        Route::group(['prefix'=>'luong'],function(){
            Route::get('/maso={macanbo}','hosoluongController@index');
            Route::get('del/{id}','hosoluongController@destroy');
        });
        Route::group(['prefix'=>'phu_cap'],function(){
            Route::get('/maso={macanbo}','hosophucapController@index');
            Route::get('del/{id}','hosophucapController@destroy');
        });
    });

    Route::group(['prefix'=>'danh_gia'],function(){
        Route::group(['prefix'=>'binh_bau'],function(){
            Route::get('/maso={macanbo}','hosobinhbauController@index');
            Route::get('del/{id}','hosobinhbauController@destroy');
        });
        Route::group(['prefix'=>'khen_thuong'],function(){
            Route::get('/maso={macanbo}','hosokhenthuongController@index');
            Route::get('del/{id}','hosokhenthuongController@destroy');
        });
        Route::group(['prefix'=>'ky_luat'],function(){
            Route::get('/maso={macanbo}','hosokyluatController@index');
            Route::get('del/{id}','hosokyluatController@destroy');
        });
        Route::group(['prefix'=>'thanh_tra'],function(){
            Route::get('/maso={macanbo}','hosothanhtraController@index');
            Route::get('del/{id}','hosothanhtraController@destroy');
        });
        Route::group(['prefix'=>'nhan_xet'],function(){
            Route::get('/maso={macanbo}','hosonhanxetdgController@index');
            Route::get('del/{id}','hosonhanxetdgController@destroy');
        });
    });
});

Route::group(['prefix'=>'chuc_nang'],function(){
    Route::group(['prefix'=>'bang_luong'],function(){
        Route::get('danh_sach','bangluongController@index');
        Route::get('update/{id}','bangluongController@update');
        Route::get('create','bangluongController@create');
        Route::get('/maso={mabl}','bangluongController@show');
        Route::get('in/maso={mabl}','bangluongController@inbangluong');
        Route::get('/maso={mabl}/id={id}','bangluongController@detail');
        Route::post('updatect/{id}','bangluongController@updatect');
        Route::get('del/{id}','bangluongController@destroy');
    });
    Route::group(['prefix'=>'nang_luong'],function(){
        Route::get('danh_sach','dsnangluongController@index');
        Route::get('update/{id}','dsnangluongController@update');
        Route::get('create','dsnangluongController@create');
        Route::get('/maso={manl}','dsnangluongController@show');
        Route::get('del/{id}','dsnangluongController@destroy');
        Route::get('deldt/{id}','dsnangluongController@destroydt');
    });
    Route::group(['prefix'=>'huu_tri'],function(){
        Route::get('danh_sach','dshuutriController@index');
        Route::get('update/{id}','dshuutriController@update');
        Route::get('create','dshuutriController@create');
        Route::get('/maso={maht}','dshuutriController@show');
        Route::get('del/{id}','dshuutriController@destroy');
    });
    Route::group(['prefix'=>'het_tap_su'],function(){
        Route::get('danh_sach','dshettapsuController@index');
        Route::get('update/{id}','dshettapsuController@update');
        Route::get('create','dshettapsuController@create');
        Route::get('/maso={mahts}','dshettapsuController@show');
        Route::get('del/{id}','dshettapsuController@destroy');
    });
});

Route::group(['prefix'=>'bao_cao'],function(){
    Route::group(['prefix'=>'don_vi'],function(){
        Route::get('','baocaoController@donvi');
        Route::post('mausl1','baocaoController@BcSLCBm1');
        Route::post('mausl2','baocaoController@BcSLCBm2');
        Route::post('mausl3','baocaoController@BcSLCBm3');
        Route::post('maudv','baocaoController@BcCLDangVien');
    });

    Route::group(['prefix'=>'mau_chuan'],function(){
        Route::get('','baocaoController@mauchuan');
        Route::post('BcDSTuyenDungTT08','baocaoController@BcDSTuyenDungTT08');
        Route::post('BcDSTuyenDungTT10','baocaoController@BcDSTuyenDungTT10');
        Route::post('BcDSCC','baocaoController@BcDSCC');
        Route::post('BcDSVC','baocaoController@BcDSVC');
        Route::post('BcSLCLCC','baocaoController@BcSLCLCC');
        Route::post('BcSLCLVC','baocaoController@BcSLCLVC');
        Route::post('BcDSCCCVCC','baocaoController@BcDSCCCVCC');
        Route::post('BcDSVCCVCC','baocaoController@BcDSVCCVCC');
    });
});

Route::group(['prefix'=>'tra_cuu'],function(){
    Route::group(['prefix'=>'ho_so'],function(){
        Route::get('','hosocanboController@search');
        Route::post('ket_qua','hosocanboController@result');
    });
    Route::group(['prefix'=>'cong_tac'],function(){
        Route::get('','hosocongtacController@search');
        Route::post('ket_qua','hosocongtacController@result');
    });
    Route::group(['prefix'=>'dao_tao'],function(){
        Route::get('','hosodaotaoController@search');
        Route::post('ket_qua','hosodaotaoController@result');
    });
    Route::group(['prefix'=>'luong'],function(){
        Route::get('','hosoluongController@search');
        Route::post('ket_qua','hosoluongController@result');
    });
    Route::group(['prefix'=>'phu_cap'],function(){
        Route::get('','hosophucapController@search');
        Route::post('ket_qua','hosophucapController@result');
    });
    Route::group(['prefix'=>'gia_dinh'],function(){
        Route::get('','hosoquanhegdController@search');
        Route::post('ket_qua','hosoquanhegdController@result');
    });
});

Route::group(['prefix'=>'ajax'],function(){
    Route::get('kieuct','ajaxController@getKieuCT');
    Route::get('tenct','ajaxController@getTenCT');
    Route::get('tennb','ajaxController@getTenNB');
    Route::get('bac','ajaxController@getBac');
    Route::get('heso','ajaxController@getHS');
    Route::get('msnb','ajaxController@getMSNB');

    Route::group(['prefix'=>'tai_lieu'],function(){
        Route::get('add','hosotailieuController@store');
        Route::get('update','hosotailieuController@update');
        Route::get('get','hosotailieuController@get_detail');
    });
    Route::group(['prefix'=>'quan_he_gd'],function(){
        Route::get('add_bt','hosoquanhegdController@store_bt');
        Route::get('update_bt','hosoquanhegdController@update_bt');
        Route::get('add_vc','hosoquanhegdController@store_vc');
        Route::get('update_vc','hosoquanhegdController@update_vc');
        Route::get('get','hosoquanhegdController@get_detail');
    });
    Route::group(['prefix'=>'dieu_dong'],function(){
        Route::get('add','hosoluanchuyenController@store_dd');
        Route::get('update','hosoluanchuyenController@update_dd');
        Route::get('get','hosoluanchuyenController@get_detail');
    });
    Route::group(['prefix'=>'chuc_vu'],function(){
        Route::get('add','hosochucvuController@store');
        Route::get('update','hosochucvuController@update');
        Route::get('get','hosochucvuController@get_detail');
    });
    Route::group(['prefix'=>'bao_hiem'],function(){
        Route::get('add','hosobaohiemyteController@store');
        Route::get('update','hosobaohiemyteController@update');
        Route::get('get','hosobaohiemyteController@get_detail');
    });
    Route::group(['prefix'=>'luc_luong_vu_trang'],function(){
        Route::get('add','hosollvtController@store');
        Route::get('update','hosollvtController@update');
        Route::get('get','hosollvtController@get_detail');
    });
    Route::group(['prefix'=>'dao_tao'],function(){
        Route::get('add','hosodaotaoController@store');
        Route::get('update','hosodaotaoController@update');
        Route::get('get','hosodaotaoController@getinfo');
    });
    Route::group(['prefix'=>'cong_tac'],function(){
        Route::get('add','hosocongtacController@store');
        Route::get('update','hosocongtacController@update');
        Route::get('get','hosocongtacController@getinfo');
    });
    Route::group(['prefix'=>'cong_tac_nuoc_ngoai'],function(){
        Route::get('add','hosocongtacnnController@store');
        Route::get('update','hosocongtacnnController@update');
        Route::get('get','hosocongtacnnController@getinfo');
    });
    Route::group(['prefix'=>'luong'],function(){
        Route::get('add','hosoluongController@store');
        Route::get('update','hosoluongController@update');
        Route::get('get','hosoluongController@getinfo');
    });
    Route::group(['prefix'=>'phu_cap'],function(){
        Route::get('add','hosophucapController@store');
        Route::get('update','hosophucapController@update');
        Route::get('get','hosophucapController@getinfo');
    });
    Route::group(['prefix'=>'binh_bau'],function(){
        Route::get('add','hosobinhbauController@store');
        Route::get('update','hosobinhbauController@update');
        Route::get('get','hosobinhbauController@getinfo');
    });
    Route::group(['prefix'=>'khen_thuong'],function(){
        Route::get('add','hosokhenthuongController@store');
        Route::get('update','hosokhenthuongController@update');
        Route::get('get','hosokhenthuongController@getinfo');
    });
    Route::group(['prefix'=>'ky_luat'],function(){
        Route::get('add','hosokyluatController@store');
        Route::get('update','hosokyluatController@update');
        Route::get('get','hosokyluatController@getinfo');
    });
    Route::group(['prefix'=>'thanh_tra'],function(){
        Route::get('add','hosothanhtraController@store');
        Route::get('update','hosothanhtraController@update');
        Route::get('get','hosothanhtraController@getinfo');
    });
    Route::group(['prefix'=>'nhan_xet'],function(){
        Route::get('add','hosonhanxetdgController@store');
        Route::get('update','hosonhanxetdgController@update');
        Route::get('get','hosonhanxetdgController@getinfo');
    });
    Route::group(['prefix'=>'bang_luong'],function(){
        Route::get('add','bangluongController@store');
        Route::get('update','bangluongController@update');
        Route::get('get','bangluongController@getinfo');
    });
    Route::group(['prefix'=>'nang_luong'],function(){
        Route::get('add','dsnangluongController@store');
        Route::get('update','dsnangluongController@update');
        Route::get('get','dsnangluongController@getinfo');
    });
    Route::group(['prefix'=>'het_tap_su'],function(){
        Route::get('add','dshettapsuController@store');
        Route::get('update','dshettapsuController@update');
        Route::get('get','dshettapsuController@getinfo');
    });
    Route::group(['prefix'=>'huu_tri'],function(){
        Route::get('add','dshuutriController@store');
        Route::get('update','dshuutriController@update');
        Route::get('get','dshuutriController@getinfo');
    });
});

Route::group(['prefix'=>'luu_du_lieu'],function(){
    Route::get('can_bo','dshuutriController@store');
    Route::get('bang_luong','dshuutriController@update');
    Route::get('het_tap_su','dshuutriController@getinfo');
});



