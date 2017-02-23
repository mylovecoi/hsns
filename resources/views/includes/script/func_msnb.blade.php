<?php
/**
 * Created by PhpStorm.
 * User: MyPC
 * Date: 7/25/2016
 * Time: 11:26 AM
 */
        ?>
<script>
    function getPLNB(){
        if ($('#plnb').val() != '') {
            var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
            $.ajax({
                url: '/ajax/tennb/',
                type: 'GET',
                data: {
                    _token: CSRF_TOKEN,
                    plnb: $('#plnb').val()
                },
                dataType: 'JSON',
                success: function (data) {
                    if (data.status == 'success')
                        $('#tennb').replaceWith(data.message);
                }
            });
        } else {
        }
        $('#tennb').val('');
        $('#bac').val('');
        $('#heso').val(0);
        $('#vuotkhung').val(0);
    }

    function getBac(){
        if($('#tennb').val() != ''){
            var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
            $.ajax({
                url: '/ajax/bac/',
                type: 'GET',
                data: {
                    _token: CSRF_TOKEN,
                    tennb: $('#tennb').val(),
                    plnb: $('#plnb').val()
                },
                dataType: 'JSON',
                success: function (data) {
                    if(data.status == 'success') {
                        var kq=data.message.split(';')
                        $('#bac').replaceWith(kq[0]);
                        $('#msngbac').val(kq[1]);
                    }
                }
            });
        } else {
            $('#msngbac').val('');
        }
        $('#bac').val('');
        $('#heso').val(0);
        $('#vuotkhung').val(0);
    }

    function getHS(){
        if($('#bac').val() != ''){
            var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
            $.ajax({
                url: '/ajax/heso/',
                type: 'GET',
                data: {
                    _token: CSRF_TOKEN,
                    tennb: $('#tennb').val(),
                    plnb: $('#plnb').val(),
                    bac: $('#bac').val()
                },
                dataType: 'JSON',
                success: function (data) {
                    if(data.status == 'success'){
                        var heso = data.message.split(';');
                        $('#heso').val(heso[0]);
                        $('#vuotkhung').val(heso[1]);
                    }
                }
            });
        } else {
            $('#heso').val(0);
            $('#vuotkhung').val(0);
        }
    }
</script>