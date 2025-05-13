@extends('admin.master')

@section('content')

<main class="content px-3 py-4">
    <div class="container-fluid">
        <div class="mb-3">
            <h4>Admin Dashboard</h4>
        </div>
        <div class="row">
            <div class="col-12 col-md-6 d-flex">
                <div class="card flex-fill border-0 illustration">
                    <div class="card-body p-0 d-flex flex-fill">
                        <div class="row g-0 w-100">
                            <div class="col-6">
                                <div class="p-3 m-1">
                                    <h4>Welcome Back, Admin</h4>
                                    <p class="mb-0">Admin Dashboard, Black</p>
                                </div>
                            </div>
                            <div class="col-6 align-self-end text-end">
                                <img src="image/customer-support.jpg" alt="" class="img-fluid illustration-img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 d-flex">
                <div class="card flex-fill border-0">
                    <div class="card-body py-4">
                        <div class="d-flex align-item-start">
                            <div class="flex-grow-1">
                                <h4 class="mb-2">
                                    $ 23.00
                                </h4>
                                <p class="mb-2">
                                    Total Earnings
                                </p>
                                <div class="mb-0">
                                    <span class="badge text-success me-2">
                                        +4.0%
                                    </span>
                                    <span class="text-muted">
                                        Since Last Month
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <h5>Table</h5>
        <button class="btn btn-primary mb-3" id="btnAdd">Add Data</button>
        <div class="form-container" id="formContainer">
            <form method="POST" class="mb-3">
                <div class="mb-3">
                    <label for="value1" class="form-label">Value 1</label>
                    <input type="text" class="form-control" name="value1" id="value1" required>
                </div>
                <div class="mb-3">
                    <label for="value2" class="form-label">Value 2</label>
                    <input type="text" class="form-control" name="value2" id="value2" required>
                </div>
                <button type="submit" class="btn btn-success" name="add" id="submitAdd">Add</button>
                <button type="submit" class="btn btn-warning" name="edit" id="submitEdit"
                    style="display: none;">Edit</button>
                <button type="button" class="btn btn-secondary" id="btnCancel">Cancel</button>
            </form>
        </div>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Column</th>
                    <th>Column</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Value 1</td>
                    <td>Value 2</td>
                    <td>
                        <button class="btn btn-warning btnEdit">Edit</button>
                        <a href="#" class="btn btn-danger"
                            onclick="return confirm('Sure you want to delete?')">Delete</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</main>

@endsection
