<div class="table-responsive">
    <table class="table" id="qatnashchis-table">
        <thead>
            <tr>
                <th>Title</th>
        <th>Last Name</th>
        <th>First Name</th>
        <th>Middle Name</th>
        <th>Gender</th>
        <th>Email</th>
        <th>Country</th>
        <th>City</th>
        <th>Organization</th>
        <th>Position</th>
        <th>Academic Degree</th>
        <th>Work Phone</th>
        <th>Desired Status</th>
        <th>Need Visa</th>
        <th>Accompanying Person</th>
        <th>Comments</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($qatnashchis as $qatnashchi)
            <tr>
                <td>{{ $qatnashchi->title }}</td>
            <td>{{ $qatnashchi->last_name }}</td>
            <td>{{ $qatnashchi->first_name }}</td>
            <td>{{ $qatnashchi->middle_name }}</td>
            <td>{{ $qatnashchi->gender }}</td>
            <td>{{ $qatnashchi->email }}</td>
            <td>{{ $qatnashchi->country }}</td>
            <td>{{ $qatnashchi->city }}</td>
            <td>{{ $qatnashchi->organization }}</td>
            <td>{{ $qatnashchi->position }}</td>
            <td>{{ $qatnashchi->academic_degree }}</td>
            <td>{{ $qatnashchi->work_phone }}</td>
            <td>{{ $qatnashchi->desired_status }}</td>
            <td>{{ $qatnashchi->need_visa }}</td>
            <td>{{ $qatnashchi->accompanying_person }}</td>
            <td>{{ $qatnashchi->comments }}</td>
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
