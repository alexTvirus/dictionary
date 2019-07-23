{!! Form::model($datas,
['url' =>route('capnhatdata'),
'method'=>'Post',
'id'=>'form_add',
'class'=>"form-horizontal"
]) !!}
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<div id="list_error" class="col-md-12 alert alert-danger" style="display: none">
</div>
@if (count($errors) > 0)
    <div class="col-md-12 alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@if (!empty(session()->get('msg')))
    <div class="col-md-12 alert alert-success">
        {{session()->get('msg')}}
    </div>
@endif
{{ Form::hidden('id', old('id'),
            [
            'id' => 'id',
            ])
        }}
<div class="col-md-12 col-md-offset-1">
    <div>
        <label>danh muc<strong style="color: red">(*)</strong> </label>
        {{ Form::text('danh_muc', old('danh_muc'),
            ['class' => 'form-control',
            'id' => 'danh_muc',
            'autofocus' => true,
            ])
        }}
    </div>
    <div>
        <label>keyword<strong style="color: red">(*)</strong> </label>
        {{ Form::text('keyword', old('keyword'),
            ['class' => 'form-control',
            'id' => 'keyword',
            'autofocus' => true,
            ])
        }}
    </div>
    <div>
        <label>link_am_thanh<strong style="color: red">(*)</strong> </label>
        {{ Form::text('link_am_thanh', old('link_am_thanh'),
            ['class' => 'form-control',
            'id' => 'link_am_thanh',
            'autofocus' => true,
            ])
        }}

    </div>
    <div>
        <label>link_hinh_anh<strong style="color: red">(*)</strong> </label>
        {{ Form::text('link_hinh_anh', old('link_hinh_anh'),
            ['class' => 'form-control',
            'id' => 'link_hinh_anh',
            'autofocus' => true,
            ])
        }}

    </div>
    <div>
        <label>link_lien_ket<strong style="color: red">(*)</strong> </label>
        {{ Form::text('link_lien_ket', old('link_lien_ket'),
            ['class' => 'form-control',
            'id' => 'link_lien_ket',
            'autofocus' => true,
            ])
        }}

    </div>
    <div>
        <label>ngu_nghia<strong style="color: red">(*)</strong> </label>
        {!! Form::textarea('ngu_nghia', null,
        ['id' => 'ngu_nghia', 'rows' => 4, 'cols' => 54, 'class' => 'form-control'])
        !!}
    </div>
    <div class="col-md-6" style="width: 100% ; margin-bottom: 2em"></div>
    <div class="col-md-2">
        <button type="submit" id="btn_add_process" class="btn btn-primary ">
            <i class="fa fa-user-plus"></i> cap nhat
        </button>
    </div>
</div>
{!! Form::close() !!}
