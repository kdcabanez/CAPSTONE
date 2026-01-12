@extends('components.admin-layout')
@section('title', 'Dashboard')
@section('admin_content')

    <div class="ibox">
        <div class="ibox-head">
            <div class="ibox-title">Applications</div>
        </div>
        <div class="ibox-body">
            <table class="table table-striped table-bordered table-hover" id="application-table" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Student ID</th>
                        <th>Date Applied</th>
                    </tr>
                </thead>
                <tbody>

                </tbody>
            </table>

            <div id="pagination" class="mt-4"></div>
        </div>
    </div>
@endsection
