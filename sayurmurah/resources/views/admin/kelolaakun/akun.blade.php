{{-- Menghubungkan dengan Template --}}
@extends('admin.template')

{{-- Breadcrumb --}}
@section('breadcrumb')
    <li class="breadcrumb-item active" aria-current="page">Daftar Akun</li>
@endsection

{{-- Page Content --}}
@section('page-content')
    <div class="container-fluid mt--6">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card bg-white">
                        <div class="card-header bg-transparent">
                            <a href="tambahakun" class="btn btn-icon btn-success" type="button">
                                <span class="btn-inner--icon"><i class="ni ni-fat-add"></i></span>
                                <span class="btn-inner--text">Tambah Akun</span>
                            </a>
                            {{-- <div class="dropdown" style="float:right;">
                                <button class="dropbtn btn btn-icon btn-secondary" type="button" style="float: right">
                                    <span class="btn-inner--icon"><i class="ni ni-bold-down"></i></span>
                                    <span class="btn-inner--text">Short By</span>
                                </button>
                            <button class="dropbtn">Right</button>
                            <div class="dropdown-content">
                                <a href="#">Superadmin</a>
                                <a href="#">Admin</a>
                                <a href="#">Mitra</a>
                                <a href="#">User</a>
                            </div>
                        </div> --}}
                            {{-- <ul style="float: right">
                                <li class="nav-item dropdown">
                                    <a class="btn btn-icon btn-secondary" href="#" role="button" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <div class="media align-items-center">
                                            <span class="btn-inner--icon"><i class="ni ni-bold-down"></i></span>
                                            <span class="btn-inner--text">Short By</span>
                                        </div>
                                    </a>
                                    <div class="dropdown-menu  dropdown-menu-right ">
                                        <div class="dropdown-header noti-title">
                                            <h6 class="text-overflow m-0">Short By: </h6>
                                        </div>
                                        <a href="examples/profile.html" class="dropdown-item">
                                            <i class="ni ni-single-02"></i>
                                            <span>Superadmin</span>
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <a href="login.html" class="dropdown-item">
                                            <i class="ni ni-user-run"></i>
                                            <span>Admin</span>
                                        </a>
                                        <a href="login.html" class="dropdown-item">
                                            <i class="ni ni-user-run"></i>
                                            <span>Mitra</span>
                                        </a>
                                        <a href="login.html" class="dropdown-item">
                                            <i class="ni ni-user-run"></i>
                                            <span>User</span>
                                        </a>
                                    </div>
                                </li>
                            </ul> --}}
                            <button class="btn btn-icon btn-secondary" type="button" style="float: right">
                                <span class="btn-inner--icon"><i class="ni ni-bold-down"></i></span>
                                <span class="btn-inner--text">Short By</span>
                            </button>
                            <div class="row align-items-center">
                                <div class="col">
                                    <div class="table-responsive">
                                        <div>
                                            <table class="table align-items-center">
                                                <thead class="thead-light">
                                                    <tr>
                                                        <th scope="col" class="sort" data-sort="name">No</th>
                                                        <th scope="col" class="sort" data-sort="budget">Nama
                                                        </th>
                                                        <th scope="col" class="sort" data-sort="status">Email
                                                        </th>
                                                        <th scope="col">Foto</th>
                                                        <th scope="col" class="sort" data-sort="completion">
                                                            Status</th>
                                                        <th scope="col">Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="list">
                                                    <tr>
                                                        <td>
                                                            1
                                                        </td>
                                                        <td>
                                                            Andrea Santana
                                                        </td>
                                                        <td>
                                                            andreasterben69@gmail.com
                                                        </td>
                                                        <td>
                                                            <a href="#" class="avatar rounded-circle mr-3">
                                                                <img alt="Image placeholder"
                                                                    src="{{ asset('style/assets/img/theme/angular.jpg') }}">
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <span class="badge badge-success">Aktif</span>
                                                        </td>
                                                        <td>
                                                            <a href="#" class="btn btn-icon btn-warning" type="button">
                                                                <span class="btn-inner--icon text-light"><i class="ni ni-zoom-split-in"></i></span>
                                                                <span class="btn-inner--text text-light">Detail</span>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            2
                                                        </td>
                                                        <td>
                                                            Shandy Maulana Y
                                                        </td>
                                                        <td>
                                                            shandymaulana@gmail.com
                                                        </td>
                                                        <td>
                                                            <a href="#" class="avatar rounded-circle mr-3">
                                                                <img alt="Image placeholder"
                                                                    src="{{ asset('style/assets/img/theme/bootstrap.jpg') }}">
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <span class="badge badge-success">Aktif</span>
                                                        </td>
                                                        <td>
                                                            <a href="#" class="btn btn-icon btn-warning" type="button">
                                                                <span class="btn-inner--icon text-light"><i class="ni ni-zoom-split-in"></i></span>
                                                                <span class="btn-inner--text text-light">Detail</span>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            3
                                                        </td>
                                                        <td>
                                                            Dimas Fajrul F
                                                        </td>
                                                        <td>
                                                            dimasfajrulf@gmail.com
                                                        </td>
                                                        <td>
                                                            <a href="#" class="avatar rounded-circle mr-3">
                                                                <img alt="Image placeholder"
                                                                    src="{{ asset('style/assets/img/theme/react.jpg') }}">
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <span class="badge badge-danger">Non-Aktif</span>
                                                        </td>
                                                        <td>
                                                            <a href="#" class="btn btn-icon btn-warning" type="button">
                                                                <span class="btn-inner--icon text-light"><i class="ni ni-zoom-split-in"></i></span>
                                                                <span class="btn-inner--text text-light">Detail</span>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            4
                                                        </td>
                                                        <td>
                                                            Moh. Saidul Musthofa
                                                        </td>
                                                        <td>
                                                            saidulmusthofa@gmail.com
                                                        </td>
                                                        <td>
                                                            <a href="#" class="avatar rounded-circle mr-3">
                                                                <img alt="Image placeholder"
                                                                    src="{{ asset('style/assets/img/theme/vue.jpg') }}">
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <span class="badge badge-success">Aktif</span>
                                                        </td>
                                                        <td>
                                                            <a href="#" class="btn btn-icon btn-warning" type="button">
                                                                <span class="btn-inner--icon text-light"><i class="ni ni-zoom-split-in"></i></span>
                                                                <span class="btn-inner--text text-light">Detail</span>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <nav aria-label="...">
                                                <ul class="pagination justify-content-end">
                                                    <li class="page-item disabled">
                                                        <a class="page-link" href="#" tabindex="-1">
                                                            <i class="fa fa-angle-left"></i>
                                                            <span class="sr-only">Previous</span>
                                                        </a>
                                                    </li>
                                                    <li class="page-item active"><a class="page-link"
                                                            href="#">1</a></li>
                                                    <li class="page-item ">
                                                        <a class="page-link" href="#">2 <span
                                                                class="sr-only">(current)</span></a>
                                                    </li>
                                                    <li class="page-item"><a class="page-link"
                                                            href="#">3</a></li>
                                                    <li class="page-item">
                                                        <a class="page-link" href="#">
                                                            <i class="fa fa-angle-right"></i>
                                                            <span class="sr-only">Next</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection