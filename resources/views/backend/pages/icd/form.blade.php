@extends('backend.master')

@section('title')
<title>Dashboard | Aplikasi</title>
@endsection

@section('content')

<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Daftar ICD-10</h5>

                <table id="zero-conf" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode</th>
                            <th>Deskripsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($icds as $index => $icd)
                        <tr>
                            <td>{{ ($icds->currentPage() - 1) * $icds->perPage() + $index + 1 }}</td>
                            <td>{{ $icd->code }}</td>
                            <td>{{ $icd->description }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

                <!-- Pagination Laravel -->
                <div class="mt-3">
                    {{ $icds->links() }}
                </div>

            </div>
        </div>
    </div>
</div>

@endsection
