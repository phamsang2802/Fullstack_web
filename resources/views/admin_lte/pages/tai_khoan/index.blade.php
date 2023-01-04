@extends('admin_lte.shares.master_lte')
@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Quản Lý Tài Khoản Admin</h1>
            </div>
        </div>
    </div>
</div>
<section class="content">
    <div id="app" class="container-fluid">
        <div class="row">
            <div class="col-md-5">
                <div class="card">
                    <div class="card-header">
                        Thêm Mới Tài Khoản Admin
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label>Họ Và Tên</label>
                            <input v-model="add.ho_va_ten" type="text" class="form-control" placeholder="Nhập vào họ và tên">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input v-model="add.email" type="email" class="form-control" placeholder="Nhập vào email">
                        </div>
                        <div class="form-group">
                            <label>Số Điện Thoại</label>
                            <input v-model="add.so_dien_thoai" type="tel" class="form-control" placeholder="Nhập vào số điện thoại">
                        </div>
                        <div class="form-group">
                            <label>Mật Khẩu</label>
                            <input v-model="add.password" type="password" class="form-control" placeholder="Nhập vào mật khẩu">
                        </div>
                        <div class="form-group">
                            <label>Nhập Lại Mật Khẩu</label>
                            <input v-model="add.re_password" type="password" class="form-control" placeholder="Nhập lại mật khẩu">
                        </div>
                        <div class="form-group">
                            <label>Ngày Sinh</label>
                            <input v-model="add.ngay_sinh" type="date" class="form-control" placeholder="Nhập vào ngày sinh">
                        </div>
                        <div class="form-group">
                            <label>Loại Tài Khoản</label>
                            <select v-model="add.rule_id" class="form-control">
                                <option value="1">Admin Master</option>
                            </select>
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <button class="btn btn-primary" v-on:click="taoTaiKhoan()">Thêm Mới Tài Khoản</button>
                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <div class="card">
                    <div class="card-header">
                        Danh Sách Tài Khoản Admin
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th class="text-center">#</th>
                                    <th class="text-center">Họ Và Tên</th>
                                    <th class="text-center">Số Điện Thoại</th>
                                    <th class="text-center">Email</th>
                                    <th class="text-center">Ngày Sinh</th>
                                    <th class="text-center">Tình Trạng</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="(v, k) in list">
                                    <th class="text-center align-middle">@{{ k + 1 }}</th>
                                    <td class="align-middle">@{{ v.ho_va_ten }}</td>
                                    <td class="align-middle text-center">@{{ v.so_dien_thoai }}</td>
                                    <td class="align-middle">@{{ v.email }}</td>
                                    <td class="align-middle">@{{ v.ngay_sinh }}</td>
                                    <td class="align-middle text-center">
                                        <button v-on:click="doiTrangThai(v)" class="btn btn-primary" v-if="v.is_block == 0">Hoạt Động</button>
                                        <button v-on:click="doiTrangThai(v)" class="btn btn-danger" v-else>Đã Khóa</button>
                                    </td>
                                    <td class="align-middle text-center">
                                        <button v-on:click="goiModal(v)" class="btn btn-primary" data-toggle="modal" data-target="#editModal">Cập Nhật</button>
                                    </td>
                                </tr>
                            </tbody>
                            <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label>Họ Và Tên</label>
                                            <input v-model="edit.ho_va_ten" type="text" class="form-control" placeholder="Nhập vào họ và tên">
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input v-model="edit.email" type="email" class="form-control" placeholder="Nhập vào email">
                                        </div>
                                        <div class="form-group">
                                            <label>Số Điện Thoại</label>
                                            <input v-model="edit.so_dien_thoai" type="tel" class="form-control" placeholder="Nhập vào số điện thoại">
                                        </div>
                                        <div class="form-group">
                                            <label>Ngày Sinh</label>
                                            <input v-model="edit.ngay_sinh" type="date" class="form-control" placeholder="Nhập vào ngày sinh">
                                        </div>
                                        <div class="form-group">
                                            <label>Loại Tài Khoản</label>
                                            <select v-model="edit.rule_id" class="form-control">
                                                <option value="1">Admin Master</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                      <button v-on:click="capNhatTaiKhoan()" type="button" class="btn btn-primary" data-dismiss="modal">Cập Nhật</button>
                                    </div>
                                  </div>
                                </div>
                            </div>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@section('js')
<script>
    new Vue({
        el      :   '#app',
        data    :   {
            add     :   {},
            list    :   [],
            edit    :   {},
        },
        created()   {
            this.getList();
        },
        methods :   {
            taoTaiKhoan() {
                axios
                    .post('/admin-lte/tai-khoan/create', this.add)
                    .then((res) => {
                        if(res.data.status) {
                            toastr.success(res.data.mess);
                            this.getList();
                        } else if(res.data.status == 0) {
                            toastr.error(res.data.mess);
                        } else if(res.data.status == 2) {
                            toastr.warning(res.data.mess);
                        }
                    })
                    .catch((res) => {
                        var listE = res.response.data.errors;
                        $.each(listE, function(k, v) {
                            toastr.error(v[0]);
                        });
                    });
            },
            getList() {
                axios
                    .get('/admin-lte/tai-khoan/data')
                    .then((res) => {
                        this.list = res.data.tai_khoan;
                    });
            },
            doiTrangThai(v) {
                axios
                    .post('/admin-lte/tai-khoan/change-status', v)
                    .then((res) => {
                        if(res.data.status) {
                            toastr.success(res.data.mess);
                            this.getList();
                        } else if(res.data.status == 0) {
                            toastr.error(res.data.mess);
                        } else if(res.data.status == 2) {
                            toastr.warning(res.data.mess);
                        }
                    })
                    .catch((res) => {
                        var listE = res.response.data.errors;
                        $.each(listE, function(k, v) {
                            toastr.error(v[0]);
                        });
                    });
            },
            goiModal(v) {
                this.edit = v;
            },
            capNhatTaiKhoan() {
                axios
                    .post('/admin-lte/tai-khoan/update', this.edit)
                    .then((res) => {
                        if(res.data.status) {
                            toastr.success(res.data.mess);
                            this.getList();
                        } else if(res.data.status == 0) {
                            toastr.error(res.data.mess);
                        } else if(res.data.status == 2) {
                            toastr.warning(res.data.mess);
                        }
                    })
                    .catch((res) => {
                        var listE = res.response.data.errors;
                        $.each(listE, function(k, v) {
                            toastr.error(v[0]);
                        });
                        this.getList();
                    });
            }
        },
    });
</script>
@endsection
