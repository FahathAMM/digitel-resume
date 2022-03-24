@extends('layouts.app')

@section('content')

    <div class="card text-left">
        <img class="card-img-top" src="holder.js/100px180/" alt="">
        <div class="card-body">
            <form method="POST" action="{{ route('students.store') }}" class="w-75">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Create Student</h5>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">
                                Full Name
                            </label>
                            <input type="text" value="{{ old('full_name') }}"
                                class="form-control @error('full_name') border-danger @enderror" name="full_name"
                                id="full_name" />
                            @error('full_name') <div class="text-danger">{{ $message }}</div> @enderror
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">
                                Mobile
                            </label>
                            <input type="text" value="{{ old('mobile') }}"
                                class="form-control @error('mobile') border-danger @enderror" name="mobile" id="mobile" />
                            @error('mobile') <div class="text-danger">{{ $message }}</div> @enderror
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">
                                Email
                            </label>
                            <input type="text" value="{{ old('email') }}"
                                class="form-control @error('email') border-danger @enderror" name="email" id="email" />
                            @error('email') <div class="text-danger">{{ $message }}</div> @enderror
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">
                                Date of Birth
                            </label>
                            <input type="date" value="{{ old('dob') }}"
                                class="form-control @error('dob') border-danger @enderror" name="dob" id="dob" />
                            @error('dob') <div class="text-danger">{{ $message }}</div> @enderror
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">
                                Address
                            </label>
                            <input type="text" value="{{ old('address') }}"
                                class="form-control @error('address') border-danger @enderror" name="address"
                                id="address" />
                            @error('address') <div class="text-danger">{{ $message }}</div> @enderror
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">
                                Gender
                            </label>
                            <select class="form-control @error('gender') border-danger @enderror" name="gender" id="gender">
                                <option value="">Select Type</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                        </div>
                        @error('gender') <div class="text-danger">{{ $message }}</div> @enderror

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
            </form>
        </div>
    </div>

@endsection
