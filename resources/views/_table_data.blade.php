<table id="project-list" class="table-bordered table-striped">
    <thead>
    <tr class="list-project">
        <th >id</th>
        <th >danh_muc</th>
        <th >keyword</th>
        <th >ngu_nghia</th>
        <th>link_am_thanh</th>
        <th >link_hinh_anh</th>
        <th >link_lien_ket</th>
        <th >created_at</th>
        <th >active</th>
    </tr>
    </thead>
    <tbody class="">
    @foreach($datas as $data)
        <tr class="employee-menu">
            <td>{{$data->id}}</td>
            <td>{{$data->danh_muc}}</td>
            <td>{{$data->keyword}}</td>
            <td>{{$data->ngu_nghia}}</td>
            <td>{{$data->link_am_thanh}}</td>
            <td>{{$data->link_hinh_anh}}</td>
            <td>{{$data->link_lien_ket}}</td>
            <td>{{ empty($data->created_at)?'': date('d-m-Y', strtotime($data->created_at))}}</td>

            <td data-employee-id="{{$data->id}}">
                <a href="{{route('capnhat',$data->id)}}"><i
                                class="fa fa-id-card"></i> update
                    </a>
                <a href="{{route('xoadata',$data->id)}}"><i
                            class="fa fa-id-card"></i> delete
                </a>

            </td>
        </tr>
    @endforeach
    </tbody>
</table>