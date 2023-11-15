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

    <!-- Restore Database -->
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Restore Database</h4>
                    <p class="card-text">Click the button below to restore the database.</p>
                    <a href="#" class="btn btn-success">
                        <i class="fa fa-refresh"></i> Restore Database
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
