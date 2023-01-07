@extends('layouts.admin')
@section('title', 'Master')

@section('content')
    <div class="row">
        <div class="col-3">
            <div class="card">
                <div class="card-body">
                    <h4 class="subheader">Menu</h4>
                    <div class="list-group list-group-transparent">
                        <a href="#"
                            class="list-group-item list-group-item-action d-flex align-items-center active">Blocked Type</a>
                        <a href="#" class="list-group-item list-group-item-action d-flex align-items-center">Hoax
                            Type</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-9">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Invoices</h3>
                </div>
                <div class="table-responsive">
                    <table class="table table-vcenter card-table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Total Domains</th>
                                <th class="w-1"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Phising</td>
                                <td class="text-muted">
                                    1.243
                                </td>
                                <td>
                                    <div class="btn-list flex-nowrap">
                                        <div class="dropdown">
                                            <button class="btn dropdown-toggle align-text-top" data-bs-toggle="dropdown">
                                                Actions
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="#">
                                                    Edit
                                                </a>
                                                <a class="dropdown-item" href="#">
                                                    Delete
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Spyware</td>
                                <td class="text-muted">
                                    876
                                </td>
                                <td>
                                    <div class="btn-list flex-nowrap">
                                        <div class="dropdown">
                                            <button class="btn dropdown-toggle align-text-top" data-bs-toggle="dropdown">
                                                Actions
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="#">
                                                    Edit
                                                </a>
                                                <a class="dropdown-item" href="#">
                                                    Delete
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Malware</td>
                                <td class="text-muted">
                                    876
                                </td>
                                <td>
                                    <div class="btn-list flex-nowrap">
                                        <div class="dropdown">
                                            <button class="btn dropdown-toggle align-text-top" data-bs-toggle="dropdown">
                                                Actions
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="#">
                                                    Edit
                                                </a>
                                                <a class="dropdown-item" href="#">
                                                    Delete
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
