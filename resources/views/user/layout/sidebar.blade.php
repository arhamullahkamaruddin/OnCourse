<aside id="sidebar">
    <!-- Content for sidebar -->
    <div class="vh-100 overflow-auto">
        <div class="sidebar-logo">
            <a href="#">Black</a>
        </div>
        <ul class="sidebar-nav">
        @if (Auth::user()->role === 'admin')
            <li class="sidebar-header">
                Admin Element
            </li>
            <li class="sidebar-item">
                <a href="{{ route('admin.dashboard') }}" class="sidebar-link">
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAaklEQVRIS2NkoDFgpLH5DKMWEAxh+gfRfyAAOYsRCEA0kPsLSLESdCpUAUwfTD2GD2huAbEuJVYd/eOAWJcRq46YOABHOrGAnEimrgXEupRYdaORjBFSo5FMbOKBqxuGqYjkMCCggeZBBADiXjAZVkgU8gAAAABJRU5ErkJggg=="
                        class="pe-2" />
                    Dashboard
                </a>
            </li>
            <li class="sidebar-item">
                <a href="{{ route('admin.manage-accounts') }}" class="sidebar-link">
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAaklEQVRIS2NkoDFgpLH5DKMWEAxh+gfRfyAAOYsRCEA0kPsLSLESdCpUAUwfTD2GD2huAbEuJVYd/eOAWJcRq46YOABHOrGAnEimrgXEupRYdaORjBFSo5FMbOKBqxuGqYjkMCCggeZBBADiXjAZVkgU8gAAAABJRU5ErkJggg=="
                        class="pe-2" />
                    Kelola Akun
                </a>
            </li>
            <li class="sidebar-item">
                <a href="{{ route('admin.manage-courses') }}" class="sidebar-link">
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAaklEQVRIS2NkoDFgpLH5DKMWEAxh+gfRfyAAOYsRCEA0kPsLSLESdCpUAUwfTD2GD2huAbEuJVYd/eOAWJcRq46YOABHOrGAnEimrgXEupRYdaORjBFSo5FMbOKBqxuGqYjkMCCggeZBBADiXjAZVkgU8gAAAABJRU5ErkJggg=="
                        class="pe-2" />
                    Kelola Kursus
                </a>
            </li>
            <li class="sidebar-item">
                <a href="{{ route('admin.transactions') }}" class="sidebar-link">
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAaklEQVRIS2NkoDFgpLH5DKMWEAxh+gfRfyAAOYsRCEA0kPsLSLESdCpUAUwfTD2GD2huAbEuJVYd/eOAWJcRq46YOABHOrGAnEimrgXEupRYdaORjBFSo5FMbOKBqxuGqYjkMCCggeZBBADiXjAZVkgU8gAAAABJRU5ErkJggg=="
                        class="pe-2" />
                    Transaksi
                </a>
            </li>
            <li class="sidebar-item">
                <a href="{{ route('admin.refunds') }}" class="sidebar-link">
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAaklEQVRIS2NkoDFgpLH5DKMWEAxh+gfRfyAAOYsRCEA0kPsLSLESdCpUAUwfTD2GD2huAbEuJVYd/eOAWJcRq46YOABHOrGAnEimrgXEupRYdaORjBFSo5FMbOKBqxuGqYjkMCCggeZBBADiXjAZVkgU8gAAAABJRU5ErkJggg=="
                        class="pe-2" />
                    Proses Refund
                </a>
            </li>
            <li class="sidebar-item">
                <a href="{{ route('admin.disputes') }}" class="sidebar-link">
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAaklEQVRIS2NkoDFgpLH5DKMWEAxh+gfRfyAAOYsRCEA0kPsLSLESdCpUAUwfTD2GD2huAbEuJVYd/eOAWJcRq46YOABHOrGAnEimrgXEupRYdaORjBFSo5FMbOKBqxuGqYjkMCCggeZBBADiXjAZVkgU8gAAAABJRU5ErkJggg=="
                        class="pe-2" />
                    Dispute
                </a>
            </li>
        @elseif (Auth::user()->role === 'instructor')
            <li class="sidebar-header">
                Instructor Element
            </li>
            <li class="sidebar-item">
                <a href="{{ route('instructor.dashboard') }}" class="sidebar-link">
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAaklEQVRIS2NkoDFgpLH5DKMWEAxh+gfRfyAAOYsRCEA0kPsLSLESdCpUAUwfTD2GD2huAbEuJVYd/eOAWJcRq46YOABHOrGAnEimrgXEupRYdaORjBFSo5FMbOKBqxuGqYjkMCCggeZBBADiXjAZVkgU8gAAAABJRU5ErkJggg=="
                        class="pe-2" />
                    Dashboard
                </a>
            </li>
            <li class="sidebar-item">
                <a href="{{ route('instructor.my-courses') }}" class="sidebar-link">
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAaklEQVRIS2NkoDFgpLH5DKMWEAxh+gfRfyAAOYsRCEA0kPsLSLESdCpUAUwfTD2GD2huAbEuJVYd/eOAWJcRq46YOABHOrGAnEimrgXEupRYdaORjBFSo5FMbOKBqxuGqYjkMCCggeZBBADiXjAZVkgU8gAAAABJRU5ErkJggg=="
                        class="pe-2" />
                    Kursus Saya
                </a>
            </li>
            <li class="sidebar-item">
                <a href="{{ route('instructor.my-students') }}" class="sidebar-link">
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAaklEQVRIS2NkoDFgpLH5DKMWEAxh+gfRfyAAOYsRCEA0kPsLSLESdCpUAUwfTD2GD2huAbEuJVYd/eOAWJcRq46YOABHOrGAnEimrgXEupRYdaORjBFSo5FMbOKBqxuGqYjkMCCggeZBBADiXjAZVkgU8gAAAABJRU5ErkJggg=="
                        class="pe-2" />
                    Siswa Saya
                </a>
            </li>
            <li class="sidebar-item">
                <a href="{{ route('instructor.payments') }}" class="sidebar-link">
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAaklEQVRIS2NkoDFgpLH5DKMWEAxh+gfRfyAAOYsRCEA0kPsLSLESdCpUAUwfTD2GD2huAbEuJVYd/eOAWJcRq46YOABHOrGAnEimrgXEupRYdaORjBFSo5FMbOKBqxuGqYjkMCCggeZBBADiXjAZVkgU8gAAAABJRU5ErkJggg=="
                        class="pe-2" />
                    Pembayaran
                </a>
            </li>
            <li class="sidebar-item">
                <a href="{{ route('instructor.disputes') }}" class="sidebar-link">
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAaklEQVRIS2NkoDFgpLH5DKMWEAxh+gfRfyAAOYsRCEA0kPsLSLESdCpUAUwfTD2GD2huAbEuJVYd/eOAWJcRq46YOABHOrGAnEimrgXEupRYdaORjBFSo5FMbOKBqxuGqYjkMCCggeZBBADiXjAZVkgU8gAAAABJRU5ErkJggg=="
                        class="pe-2" />
                    Dispute
                </a>
            </li>
        @elseif (Auth::user()->role === 'student')
            <li class="sidebar-header">
                Student Element
            </li>
            <li class="sidebar-item">
                <a href="{{ route('student.dashboard') }}" class="sidebar-link">
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAaklEQVRIS2NkoDFgpLH5DKMWEAxh+gfRfyAAOYsRCEA0kPsLSLESdCpUAUwfTD2GD2huAbEuJVYd/eOAWJcRq46YOABHOrGAnEimrgXEupRYdaORjBFSo5FMbOKBqxuGqYjkMCCggeZBBADiXjAZVkgU8gAAAABJRU5ErkJggg=="
                        class="pe-2" />
                    Dashboard
                </a>
            </li>
            <li class="sidebar-item">
                <a href="{{ route('student.search-courses') }}" class="sidebar-link">
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAaklEQVRIS2NkoDFgpLH5DKMWEAxh+gfRfyAAOYsRCEA0kPsLSLESdCpUAUwfTD2GD2huAbEuJVYd/eOAWJcRq46YOABHOrGAnEimrgXEupRYdaORjBFSo5FMbOKBqxuGqYjkMCCggeZBBADiXjAZVkgU8gAAAABJRU5ErkJggg=="
                        class="pe-2" />
                    Cari Kursus
                </a>
            </li>
            <li class="sidebar-item">
                <a href="{{ route('student.my-courses') }}" class="sidebar-link">
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAaklEQVRIS2NkoDFgpLH5DKMWEAxh+gfRfyAAOYsRCEA0kPsLSLESdCpUAUwfTD2GD2huAbEuJVYd/eOAWJcRq46YOABHOrGAnEimrgXEupRYdaORjBFSo5FMbOKBqxuGqYjkMCCggeZBBADiXjAZVkgU8gAAAABJRU5ErkJggg=="
                        class="pe-2" />
                    Kursus Saya
                </a>
            </li>
            <li class="sidebar-item">
                <a href="{{ route('student.transactions') }}" class="sidebar-link">
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAaklEQVRIS2NkoDFgpLH5DKMWEAxh+gfRfyAAOYsRCEA0kPsLSLESdCpUAUwfTD2GD2huAbEuJVYd/eOAWJcRq46YOABHOrGAnEimrgXEupRYdaORjBFSo5FMbOKBqxuGqYjkMCCggeZBBADiXjAZVkgU8gAAAABJRU5ErkJggg=="
                        class="pe-2" />
                    Transaksi
                </a>
            </li>
            <li class="sidebar-item">
                <a href="{{ route('student.reviews') }}" class="sidebar-link">
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAaklEQVRIS2NkoDFgpLH5DKMWEAxh+gfRfyAAOYsRCEA0kPsLSLESdCpUAUwfTD2GD2huAbEuJVYd/eOAWJcRq46YOABHOrGAnEimrgXEupRYdaORjBFSo5FMbOKBqxuGqYjkMCCggeZBBADiXjAZVkgU8gAAAABJRU5ErkJggg=="
                        class="pe-2" />
                    Ulasan
                </a>
            </li>
            <li class="sidebar-item">
                <a href="{{ route('student.disputes') }}" class="sidebar-link">
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAaklEQVRIS2NkoDFgpLH5DKMWEAxh+gfRfyAAOYsRCEA0kPsLSLESdCpUAUwfTD2GD2huAbEuJVYd/eOAWJcRq46YOABHOrGAnEimrgXEupRYdaORjBFSo5FMbOKBqxuGqYjkMCCggeZBBADiXjAZVkgU8gAAAABJRU5ErkJggg=="
                        class="pe-2" />
                    Dispute
                </a>
            </li>
        @endif
        </ul>
    </div>
</aside>
