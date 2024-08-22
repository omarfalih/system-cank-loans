@extends('admin.layouts.app')


@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Users</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin') }}">Home</a></li>
                    <li class="breadcrumb-item active">Users</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section dashboard">
            <div class="row">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Controll Page</h5>
                        <div class="row">
                            <div class="col-3">
                                <label for="inputNanme4" class="form-label">Search</label>
                                <input type="text" class="form-control" id="inputNanme4">
                            </div>

                            <div class="col-3">
                                <button type="submit" class="btn btn-primary" style="    margin-top: 32px !important;">Search</button>
                                <button type="submit" class="btn btn-primary" onclick="clearInput()" style="margin-top: 32px !important;" data-bs-toggle="modal" data-bs-target="#basicModal">Add</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            @include('admin.users.create')


            <div class="row">
                {{-- Start Table --}}
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Table with hoverable rows</h5>

                        <!-- Table with hoverable rows -->
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Phone</th>
                                    <th scope="col">Type</th>
                                    <th scope="col">Created At</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $item)
                                <tr>
                                    <th scope="row">{{ $loop->index+1 }}</th>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>{{ $item->phone }}</td>
                                    <td>

                                        @if ($item->type == 0)
                                            <span class="badge text-bg-success">
                                                الادارة
                                            </span>
                                        @else
                                            <span class="badge text-bg-info">
                                                موطن
                                            </span>
                                        @endif

                                    </td>
                                    <td>{{ $item->created_at }}</td>
                                    {{-- <td>
                                        <button type="button" class="btn btn-info" onclick="update({{ $item }})" data-bs-toggle="modal" data-bs-target="#basicModal">Update</button>
                                        <a type="button" href="{{ route('delete.offer',$item->id) }}" class="btn btn-danger">Delete</a>
                                    </td> --}}
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <!-- End Table with hoverable rows -->

                    </div>
                </div>
                {{-- End Table --}}
            </div>
        </section>

    </main>


    <script>

        function clearInput(){
            document.getElementById('id').value = "";
            document.getElementById("name").value = "";
            document.getElementById("price").value = 
            document.getElementById("salary_min").value = "";
            document.getElementById("salary_max").value = "";
        }

        function update(item){
            clearInput();
            console.log(item);
            document.getElementById('id').value = item.id;
            document.getElementById("name").value = item.name;
            document.getElementById("price").value = item.price;
            document.getElementById("salary_min").value = item.salary_min;
            document.getElementById("salary_max").value = item.salary_max;
        }

    </script>
@endsection
