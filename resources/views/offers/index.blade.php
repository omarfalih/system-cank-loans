<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Styles -->

</head>

<body class="">
    {{-- start nav --}}

    @include('layouts.nav')

    {{-- end nav --}}

    <div class="container">



        {{-- Start create --}}

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Add
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ route('post.offer') }}" method="POST">
                        @csrf
                        <input type="hidden" id="id" name="id" />
                        <div class="modal-body">


                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" name="name" class="form-control" id="name"
                                    aria-describedby="emailHelp">
                            </div>


                            <div class="mb-3">
                                <label for="price" class="form-label">Price</label>
                                <input type="text" name="price" class="form-control" id="price"
                                    aria-describedby="emailHelp">
                            </div>


                            <div class="mb-3">
                                <label for="salary_min" class="form-label">salary_min</label>
                                <input type="text" name="salary_min" class="form-control" id="salary_min"
                                    aria-describedby="emailHelp">
                            </div>

                            <div class="mb-3">
                                <label for="salary_max" class="form-label">salary_max</label>
                                <input type="text" name="salary_max" class="form-control" id="salary_max"
                                    aria-describedby="emailHelp">
                            </div>






                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
                        </div>
                    </form>
                </div>
            </div>
        </div>


        {{-- End create --}}

        {{-- Start Body --}}
        <div class="row">

            @if (isset($success))
                <div class="alert alert-primary" role="alert">
                    {{ $success }}
                </div>
            @endif
            

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">name</th>
                        <th scope="col">Price</th>
                        <th scope="col">salary min</th>
                        <th scope="col">salary max</th>
                        <th scope="col">created_at</th>
                        <th scope="col">action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($offers as $item)
                        <tr>
                            <th>{{ $loop->index + 1  }}</th>
                            <th>{{ $item->name  }}</th>
                            <th>{{ $item->price  }}</th>
                            <th>{{ $item->salary_min  }}</th>
                            <th>{{ $item->salary_max  }}</th>
                            <th>{{ $item->created_at  }}</th>
                            <th>
                                <button type="button" onclick="update({{$item}})" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    Update
                                </button>

                                <a type="button" href="{{ route('delete.offer',$item->id) }}" class="btn btn-danger">
                                    Deleted
                                </a>


                                

                            </th>
                        </tr>
                    @endforeach
                    
                </tbody>
            </table>
        </div>
        {{-- End Body --}}

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>


    <script>

        function update(item){
            console.log(item);
            document.getElementById('id').value = item.id;
            document.getElementById("name").value = item.name;
            document.getElementById("price").value = item.price;
            document.getElementById("salary_min").value = item.salary_min;
            document.getElementById("salary_max").value = item.salary_max;
        }

    </script>

</body>

</html>
