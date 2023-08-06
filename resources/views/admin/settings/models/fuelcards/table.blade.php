<div class="table-responsive">
    <table class="table" id="settings-table">
        <thead>
        <tr>
            {{-- <th>Config Model</th> --}}
        <th>Fuel Cards Name</th>
        <th>Field Type</th>
        <th>Status</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($settings as $settings)
         @if ($settings->config_model=='Fuel Cards')
            <tr>
            {{-- <td>{{ $settings->config_model }}</td> --}}
            <td>{{ $settings->field_name }}</td>
            <td>{{ $settings->field_type }}</td>
            <td>{{ $settings->status }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['admin.settings.destroy', $settings->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('admin.settings.show', [$settings->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('admin.settings.edit', [$settings->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endif
        @endforeach
        </tbody>
    </table>
</div>
