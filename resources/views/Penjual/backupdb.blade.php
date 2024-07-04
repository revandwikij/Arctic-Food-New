@extends('layouting.layout admin.master')

@section('title', 'Database Operations')

@section('content')

    <br>

    <section class="jumbotron text-center">
        <div class="container">
            <h3 class="jumbotron-heading">Backup Database</h3>
        </div>
    </section>

    <br>

    <div class="container">

        <!-- Backup Database -->
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Backup Database</h4>
                        <p class="card-text">Click the button below to backup the database.</p>
                        <a href="/backup" class="btn btn-primary">
                            <i class="fa fa-database"></i> Backup Database
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <br>

        <!-- Restore Database -->
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Restore Database</h4>
                        <p class="card-text">Click the button below to restore the database.</p>
                        <form action="{{ route('restore') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="custom-file mb-3">
                                <input type="file" class="custom-file-input" id="sql_file" name="sql_file">
                            </div>
                            <button type="submit" class="btn btn-success">
                                <i class="fa fa-refresh"></i> Restore Database
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @if (session('success'))
        <script>
            alert("Data berhasil dipulihkan dari file SQL.");
        </script>
    @endif
@endsection
