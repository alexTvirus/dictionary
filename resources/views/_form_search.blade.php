
        <form action="{{route('timdata')}}" method="post" role="form" id="form_search_project">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <label style="color: red; margin-left: 130px;" id="error_project_name"></label>
                            <div class="input-group margin">
                                <div class="input-group-btn">
                                    <button type="button" class="btn width-100">danh_muc</button>
                                </div>
                                {{ Form::text('danh_muc', old('danh_muc'),
                                            ['class' => 'form-control',
                                            'id' => 'danh_muc',
                                            'autofocus' => false,
                                            ])
                                        }}
                            </div>

                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <label style="color: red; margin-left: 130px;" id="error_project_name"></label>
                            <div class="input-group margin">
                                <div class="input-group-btn">
                                    <button type="button" class="btn width-100">keyword</button>
                                </div>
                                {{ Form::text('keyword', old('keyword'),
                                            ['class' => 'form-control',
                                            'id' => 'keyword',
                                            'autofocus' => false,
                                            ])
                                        }}
                            </div>

                        </div>

                    </div>
                    <div class="modal-footer center">
                        <a href="{{route('datatrongngay')}}" id="datatrongngay" class="btn btn-default"><span
                                    class="fa fa-refresh"></span>
                            data trong ngay
                        </a>
                        <a href="{{route('datachuaconghia')}}" id="datachuaconghia" class="btn btn-default"><span
                                    class="fa fa-search"></span>
                            data chua co nghia
                        </a>
                        <button type="submit" id="searchListEmployee" class="btn btn-primary"><span
                                    class="fa fa-search"></span>
                            tim
                        </button>
                    </div>
                </div>
            </div>
        </form>

