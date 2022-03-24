@extends('layouts.app')

@section('content')

    @include('include.breadcrumb', [
    'currentPage' => ["Students List"]
    ])

    <div class="row m-b-30">
        <div class="col-lg-12">
            <div class="card border-primary">
                @if (Session::has('success'))
                    <div class="alert alert-success m-2">
                        <p>{{ Session::get('success') }}</p>
                    </div>
                @endif
                <div class="card-header">Student</div>
                <div class="card-body">
                    <h5 class="card-title">
                        <a href="{{ route('students.create') }}" type="button" class="btn btn-primary"
                            data-whatever="@getbootstrap">Create Student
                        </a>
                    </h5>
                    <div class="table-responsive">
                        <table class="table   table-striped verticle-middle">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Student Name</th>
                                    <th scope="col">Gender</th>
                                    <th scope="col ">Mobile</th>
                                    <th scope="col">Age</th>
                                    <th scope="col">address</th>
                                    <th scope="col">Edit</th>
                                    <th scope="col">Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($students as $student)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>

                                        <td><span class=" px-2">{{ $student->full_name }}</span></td>
                                        <td><span class=" px-2">{{ $student->gender }}</span></td>
                                        <td><span class=" px-2">{{ $student->mobile }}</span></td>
                                        <td><span class=" px-2">{{ $student->dob }}</span></td>
                                        <td><span class=" px-2">{{ $student->address }}</span></td>

                                        <td class="permission-table-width">
                                            <span>
                                                <a href="{{ route('students.edit', ['student' => $student->id]) }}"
                                                    data-toggle="tooltip" data-placement="top" title=""
                                                    data-original-title="Edit" class="btn btn-success"><i
                                                        class="fa fa-edit color-muted m-r-5">
                                                        Edit</i>
                                                </a>
                                            </span>
                                        </td>
                                        <td class="permission-table-width">
                                            <span>
                                                <form method="POST"
                                                    action="{{ route('students.destroy', ['student' => $student->id]) }}">
                                                    <button class="btn btn-danger">
                                                        @csrf
                                                        {{ method_field('DELETE') }}
                                                        delete
                                                    </button>
                                                    {{-- <i class="fa fa-trash color-muted m-r-5"> Delete</i> --}}
                                                </form>
                                            </span>
                                        </td>
                                    </tr>
                                @empty
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer"><small>Last updateed 3 min ago</small>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')

        @error('role')
            <script>
                $('document').ready(function() {
                    $('.modal').modal({
                        show: true
                    });

                })
            </script>
        @enderror

    @endpush



@endsection
