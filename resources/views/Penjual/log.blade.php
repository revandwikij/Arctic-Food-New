@extends('layouting.layout admin.master')

@section('title', 'dashboard')

@section('content')

    <section class="jumbotron text-center">
        <div class="container">
            <h1 class="jumbotron-heading">Activity Log</h1>
        </div>
    </section>
    <form action="/barkat" id="userForm" method="GET">
        @csrf
        <div class="form-group">
            <select class="form-select" name="user" id="user">
                <option selected>PILIH USER</option>
                @foreach ($user as $u)
                    <option>{{ $u->username }}</option>
                @endforeach
            </select>
        </div>
    </form>

    <div class="container mt-5">

        <table class="table table-borderless main">
            <thead>
                <tr class="head">
                    <th scope="col" class="ml-2">

                    </th>
                    <th scope="col">ID Log</th>
                    <th scope="col">Email</th>
                    <th scope="col">Kegiatan</th>
                    <th scope="col">Waktu </th>
                </tr>
            </thead>
            <tbody>

                @foreach ($log as $item)
                    <tr class="rounded bg-white">
                        <th scope="row">
                            <div class="form-check">

                            </div>
                        </th>
                        <td class="order-color">{{ $item->Id_Log }}</td>
                        <td>{{ $item->email }}</td>
                        <td class="d-flex align-items-center">

                            <span class="ml-2">{{ $item->kegiatan }}</span>
                        </td>
                        <td>{{ $item->created_at }}</td>
                    </tr>
                @endforeach

            </tbody>
        </table>

        {{-- {{ $log->links() }} --}}

    </div>

    <script>
        document.getElementById('user').addEventListener('change', function() {
            this.form.submit();
        });
    </script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#user').change(function() {
                $('#userForm').submit();
            });
        });
    </script>

@endsection
