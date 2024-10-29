@extends('layout.masterlayout')
@section('forms-edit')
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <div class="row">
                 <!-- Form controls -->
                <form action="{{ route('user.update', $user->id) }}" method="post">
                @csrf
                @method('put')
                    <div class="col-md-6">
                        <div class="card mb-4">
                            <h5 class="card-header">Edit User</h5>
                            <div class="card-body">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Full Name</label>
                                    <input
                                    type="text"
                                    class="form-control"
                                    id="exampleFormControlInput1"
                                    placeholder="John Doe"
                                    name="full_name"
                                    value="{{$user->full_name}}"
                                    />
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Email</label>
                                    <input
                                    type="email"
                                    class="form-control"
                                    id="exampleFormControlInput1"
                                    placeholder="name@example.com"
                                    name="email"
                                    value="{{$user->email}}"
                                    />
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Employee Id</label>
                                    <input
                                    type="text"
                                    class="form-control"
                                    id="exampleFormControlInput1"
                                    placeholder="0002"
                                    name="emp_id"
                                    value="{{$user->emp_id}}"
                                    />
                                </div>
                                <div class="mb-3">
                                    <button type="submit" class="btn btn-success">Save
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
              </div>
            </div>
            <!-- / Content -->
@endsection