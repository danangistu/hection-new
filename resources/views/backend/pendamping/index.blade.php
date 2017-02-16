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
                            <th>Name</th>
                            <th>Gender</th>
                            <th>NIP</th>
                            <th>No HP</th>
                            <th>Unit Kerja</th>
                            <th>Jabatan</th>
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
                    { data: 'name', name: 'name' },
                    { data: 'gender', name: 'gender' },
                    { data: 'nip', name: 'nip' },
                    { data: 'hp', name: 'hp' },
                    { data: 'school', name: 'school' },
                    { data: 'jabatan', name: 'jabatan' },
                    { data: 'action', name: 'action' , searchable: false},

                ]
            });
        });

    </script>

@endsection
