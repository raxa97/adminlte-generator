<div class="table-responsive">
    <table class="table" id="qatnashchis-table">
        <thead>
            <tr>
                <th>Ilmiy daraja</th>
        <th>F.I.SH</th>
        <th>Email</th>
        <th>Davlat</th>
        <th>To'lov</th>
        <th>Telefon</th>
     
     
                <th colspan="3">Amallar</th>
            </tr>
        </thead>
        <tbody>
        @foreach($qatnashchis as $qatnashchi)
            <tr>
                <td>{{ $qatnashchi->title }}</td>
            <td>{{ $qatnashchi->last_name }} {{ $qatnashchi->first_name }} {{ $qatnashchi->middle_name }}</td>
            
            <td>{{ $qatnashchi->email }}</td>
            <td>{{ $qatnashchi->country }}</td>
            <td>
            
            @if($qatnashchi->tolov == 0)
            <button type="button" class="btn btn-block btn-danger btn-xs">To'lanmagan</button>
            @else
            <button type="button" class="btn btn-block btn-success btn-xs">To'langan</button>
            @endif
            </td>
            <td>{{ $qatnashchi->work_phone }}</td>
        
                <td width="120">
                    {!! Form::open(['route' => ['qatnashchis.destroy', $qatnashchi->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('qatnashchis.show', [$qatnashchi->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('qatnashchis.edit', [$qatnashchi->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
