<?php
$html_code_tabel .= '
<div class="table-responsive">
    <table class="table table-striped" id="example1">
        <thead>
            <tr>
                <th>No</th>
    ';

        // for kolom crud laravel --
        for ($i = 0; $i < $kolom->columnCount(); $i++) {
            $col = $kolom->getColumnMeta($i);
            $col['name'];
            // echo $col['native_type'].' =>'.$col['name'].'<br>';
            $label = ucfirst(preg_replace('/[^a-zA-Z0-9\']/', ' ', $col['name']));

    $html_code_tabel .= '
                <th>'.$col['name'].'</th>';  

        }

    $html_code_tabel .= '
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @php $no =1;@endphp
            @foreach($'.$table.' as $r)
            <tr>
                <td>{{$no}}</td>
    ';
        // for kolom crud laravel --
        for ($i = 0; $i < $kolom->columnCount(); $i++) {
            $col = $kolom->getColumnMeta($i);
            $col['name'];
            // echo $col['native_type'].' =>'.$col['name'].'<br>';
            $label = ucfirst(preg_replace('/[^a-zA-Z0-9\']/', ' ', $col['name']));

    $html_code_tabel .= '      
                <td>{{$r->'.$col['name'].'}}</td>';  

        }
    $html_code_tabel .= '
                <td>
                    <a href="{{url("'.$table.'/detail/$r->id")}}" 
                        class="btn btn-primary btn-sm" title="Detail">
                        <i class="fa fa-eye"></i> 
                    </a>   
                    <a href="{{url("'.$table.'/edit/$r->id")}}" 
                        class="btn btn-success btn-sm" title="Edit">
                        <i class="fa fa-edit"></i>  
                    </a>   
                    <a href="{{url("'.$table.'/delete?id=$r->id")}}" 
                        class="btn btn-danger btn-sm" 
                        onclick="javascript:return confirm(`Data ingin dihapus ?`);" title="Delete">
                        <i class="fa fa-times"></i> 
                    </a>
                </td>
            </tr>
            @php $no++;@endphp
            @endforeach
        </tbody>
    </table>
</div>
';