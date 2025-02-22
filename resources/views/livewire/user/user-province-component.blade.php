<div>
    <style>
        nav svg {
            height: 20px;
        }

        nav .hidden {
            display: block;
        }
    </style>

    <main>
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="" rel="nofollow">Home</a>
                    <span></span> All Provinces
                </div>
            </div>
        </div>
        <section class="mt-50 mb-50">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="card-header">
                            All Provinces
                            <div class="row">
                                <div class="col-md-6">

                                </div>
                                <div class="col-md-6">
                                    <a href="{{route('user.province.add')}}" class="btn btn-primary float-end">Add
                                        new province</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">

                            @if(Session::has('message'))
                                <div class="alert alert-success" role="alert"{{Session::get('message')}}>
                                </div>
                            @endif
                            <table class="table table-striped">
                                <thead>
                                <tr class="text-center">
                                    <th>#</th>
                                    <th>image</th>
                                    <th>Name</th>
                                    <th>popular</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @php
                                    $i=($province->currentPage()-1)*$province->perPage();
                                @endphp
                                @foreach($province as $provinces)
                                    <tr class="text-center">
                                        <td>{{$i++}}</td>
                                        <td><img src="{{asset('assets/imgs/categories/')}}/{{$provinces->image}}"
                                                 alt="{{$provinces->name}}" width="60"></td>
                                        <td>{{$provinces->name}}</td>
                                        <td>{{$provinces->is_popular == 1 ? 'Yes': 'No'}}</td>
                                        <td>
                                            <a href="{{route('user.province.edit',['province_id'=>$provinces])}}"
                                               class="btn btn-outline-dark">Edit</a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            {{$province->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>




