@extends('backend.layouts.layout')
@section('content')

<div id="app_header_shadowing"></div>
<div id="app_content">
    <div id="content_header">
        <h3 class="user">{{ webarq::titleActionForm() }}</h3>
    </div>
    <div id="content_body">

        @include('backend.common.flashes')

        <div class = 'row'>
           <div class = 'col-md-12'>

                    {!! webarq::buttonCreate() !!}
                    {!! webarq::buttonExport() !!}

                <p>&nbsp;</p>
                <p>&nbsp;</p>

                <table class = 'table' id = 'table'>
                    <thead>
                        <tr>
                            <th>Team</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>No HP</th>
                            <th>School</th>
                            <th>Photo</th>
                            <th>Status</th>
                            <th width = '15%'>Action</th>
                        </tr>
                    </thead>

                </table>

            </div>

        </div>




    </div>
</div>
@endsection

@section('script')

    <script type="text/javascript">

        $(document).ready(function(){
            $('#table').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{{ urlBackendAction("data") }}',
                columns: [
                    { data: 'team', name: 'team' },
                    { data: 'name', name: 'name' },
                    { data: 'email', name: 'email' },
                    { data: 'hp', name: 'hp' },
                    { data: 'school', name: 'school' },
                    { data: 'photo', name: 'photo' },
                    { data: 'status', name: 'status' },
                    { data: 'action', name: 'action' , searchable: false},

                ]
            });
        });

    </script>

@endsection
