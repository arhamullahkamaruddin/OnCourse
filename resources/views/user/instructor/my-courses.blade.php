@extends('user.master')

@section('content')
    <main class="content px-3 py-4">
        <div class="container-fluid">
            <h5>Tabel Kursus Saya</h5>
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
