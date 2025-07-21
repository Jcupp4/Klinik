@extends('backend.master')

@section('title')
<title>Dashboard | Aplikasi</title>
@endsection

@section('content')


<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Table Pasien</h5>
                <table id="zero-conf" class="table table-striped table-bordered display" style="width:100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Full Name</th>
                            <th>Birth Date</th>
                            <th>Sex</th>
                            <th>Address</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($pasiens as $pasien)
                        <tr>
                            <td>{{ $pasien->id }}</td>
                            <td>{{ $pasien->full_name }}</td>
                            <td>{{ \Carbon\Carbon::parse($pasien->birth_date)->format('d M Y') }}</td>
                            <td>{{ $pasien->sex }}</td>
                            <td>{{ $pasien->address }}</td>
                        </tr>
                        @empty
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
