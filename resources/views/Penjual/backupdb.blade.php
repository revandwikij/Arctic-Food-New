@extends('layouting.layout admin.master')

@section('title', 'Database Operations')

@section('content')
<div class="container">
    <h1>Database Operations</h1>

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
                            <input type="file" class="custom-file-input" id="databaseFile" name="databaseFile" accept=".sql">
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
@endsection
