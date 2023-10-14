@extends('admin.layout.master')
@section('content')
    <div class="col-lg-12 col-ml-12">
        <div class="row">
            <!-- basic form start -->
            <div class="col-12 mt-5">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Update Employee</h4>
                        <form method="POST" enctype="multipart/form-data"
                            action="{{ route('admin.employee-account.update', ['employee_account' => $employee_account->id]) }}" class="form-horizontal form-label-left" novalidate>
                            @method('put')
                            @csrf
                            <span class="section">Personal Info</span>
                            <div class="form-group">
                                <label class="control-label" for="name">Name</label>
                                <input id="name" class="form-control" data-validate-length-range="6"
                                    data-validate-words="2" name="name" placeholder="both name(s) e.g Jon Doe"
                                    type="text" value="{{ $employee_account->name }}">
                                @error('name')
                                    <div style="white-space:nowrap ;opacity: 1;max-width: 100%;margin-top:10px"
                                        class="alert alert-danger">
                                        {{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="control-label" for="email">Email</label>
                                <input value="{{ $employee_account->email }}" type="email" id="email" name="email"
                                    class="form-control">
                                @error('email')
                                    <div style="white-space:nowrap ;opacity: 1;max-width: 100%;margin-top:10px"
                                        class="alert alert-danger">
                                        {{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <button type="button"
                                    onclick="window.location.href='{{ route('admin.employee-account.index') }}'"
                                    class="btn btn-primary">Cancel</button>
                                <button id="submit" type="submit" class="btn btn-success">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        @endsection

