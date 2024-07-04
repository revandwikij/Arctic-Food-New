@extends('layouting.layout admin.master')

@section('title', 'dashboard')

@section('content')

<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css" />
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css" />

    <br>

    <section class="jumbotron text-center">
        <div class="container">
            <h3 class="jumbotron-heading">Aktivitas</h3>
        </div>
    </section>

    <br>

    <div class="container mb-4">
        <form action="/loguser" id="userForm" method="GET">
            @csrf
            <div class="form-group">
                <select class="form-select" style="width: 17%" name="user" id="user">
                    <option selected>PILIH USER</option>
                    @foreach ($user as $u)
                        <option>{{ $u->level }}</option>
                    @endforeach
                </select>
            </div>
        </form>
    </div>

    <div class="container mb-4">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <table id="myTable" class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">ID Log</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Kegiatan</th>
                                    <th scope="col">Role</th>
                                    <th scope="col">Waktu </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($log as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->kegiatan }}</td>
                                        <td>{{ $item->level }}</td>
                                        <td>{{ $item->created_at }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script>
        document.getElementById('user').addEventListener('change', function() {
            this.form.submit();
        });
    </script>
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable({
                "order": [
                    [0, "desc"]
                ] 
            });
        });
        
        $(document).ready(function() {
            $('#user').change(function() {
                $('#userForm').submit();
            });
        });
    </script>

@endsection
