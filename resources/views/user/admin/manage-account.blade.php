@extends('user.master')

@section('content')
    <main class="content px-3 py-4">
        <div class="container-fluid">
            <h5>Kelola Akun</h5>
            <button class="btn btn-primary mb-3" id="btnAdd">Tambah</button>
            <div class="form-container" id="formContainer">
                <form method="POST" action="{{ route('admin.add-user') }}" class="mb-3">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama</label>
                        <input type="text" name="name" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="role" class="form-label">Tambah Sebagai:</label>

                        <select name="role" id="role" class="form-select" required>
                            <option value="student">Siswa</option>
                            <option value="instructor">Instruktur</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-success" name="add" id="submitAdd">Simpan  </button>
                    <button type="button" class="btn btn-secondary" id="btnCancel">Batal</button>
                </form>
            </div>

            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Role</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>********</td>
                                <td>{{ $user->role }}</td>
                                <td>
                                    <form action="{{ route('admin.reset-password', $user->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        <button class="btn btn-secondary"
                                            onclick="return confirm('Reset password user ini?')">Reset</button>
                                    </form>
                                    <form action="{{ route('admin.delete-user', $user->id) }}" method="post" style="display:inline;">
                                        @csrf
                                        <button type="submit" class="btn btn-danger"
                                        onclick="return confirm('Apakah anda yakin ingin menghapus user ini?')">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </main>
@endsection
