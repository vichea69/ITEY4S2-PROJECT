<div>
    <style>

        .button-container {
            display: flex;
            justify-content: center; /* Adjust as needed, e.g., flex-start, space-between */
            align-items: center;
            gap: 10px; /* Space between buttons */
        }

        .delete {
            width: 150px;
            height: 40px;
            cursor: pointer;
            display: flex;
            align-items: center;
            background: red;
            border: none;
            border-radius: 5px;
            box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.15);
            background: #e62222;
        }

        button, button span {
            transition: 200ms;
        }

        button .text {
            transform: translateX(35px);
            color: white;
            font-weight: bold;
        }

        button .icon {
            position: absolute;
            border-left: 1px solid #c41b1b;
            transform: translateX(110px);
            height: 40px;
            width: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        button svg {
            width: 15px;
            fill: #eee;
        }

        button:hover {
            background: #ff3636;
        }

        button:hover .text {
            color: transparent;
        }

        button:hover .icon {
            width: 150px;
            border-left: none;
            transform: translateX(0);
        }

        button:focus {
            outline: none;
        }

        button:active .icon svg {
            transform: scale(0.8);
        }


        .Btn {
            position: relative;
            display: flex;
            align-items: center;
            justify-content: flex-start;
            width: 100px;
            height: 40px;
            border: none;
            padding: 0px 20px;
            background-color: rgb(168, 38, 255);
            color: white;
            font-weight: 500;
            cursor: pointer;
            border-radius: 10px;
            box-shadow: 5px 5px 0px rgb(140, 32, 212);
            transition-duration: .3s;
        }

        .svg {
            width: 13px;
            position: absolute;
            right: 0;
            margin-right: 20px;
            fill: white;
            transition-duration: .3s;
        }

        .Btn:hover {
            color: transparent;
        }

        .Btn:hover svg {
            right: 43%;
            margin: 0;
            padding: 0;
            border: none;
            transition-duration: .3s;
        }

        .Btn:active {
            transform: translate(3px, 3px);
            transition-duration: .3s;
            box-shadow: 2px 2px 0px rgb(140, 32, 212);
        }

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
                    <span></span> All Places
                </div>
            </div>
        </div>
        <section class="mt-50 mb-50">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="card-header">
                            All Places
                            <div class="row">
                                <div class="col-md-6">
                                </div>
                                <div class="col-md-6 d-flex justify-content-end">
                                    <button onclick="location.href='{{route('admin.place.add')}}'"
                                            style="border: 2px solid #24b4fb; background-color: #24b4fb; border-radius: 0.9em; padding: 0.8em 1.2em 0.8em 1em; transition: all ease-in-out 0.2s; font-size: 16px;"
                                            onmouseover="this.style.backgroundColor='#0071e2'"
                                            onmouseout="this.style.backgroundColor='#24b4fb'">
                                        <span
                                            style="display: flex; justify-content: center; align-items: center; color: #fff; font-weight: 600;">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="25"
                                                 height="25">
                                                <path fill="none" d="M0 0h24v24H0z"></path>
                                                <path fill="currentColor" d="M11 11V5h2v6h6v2h-6v6h-2v-6H5v2z"></path>
                                            </svg>
                                            Add new Places
                                        </span>
                                    </button>
                                </div>


                            </div>
                        </div>
                        <div class="card-body">

                            @if(Session::has('message'))
                                <div class="alert alert-success" role="alert" {{Session::get('message')}}>
                                </div>
                            @endif
                            <table class="table table-striped">
                                <thead>
                                <tr class="text-center">
                                    <th>#</th>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Province</th>
                                    <th>Date</th>
                                    <th>Action</th>

                                </tr>
                                </thead>
                                <tbody>
                                @php
                                    $i = ($place->currentPage() - 1) * $place->perPage();
                                @endphp

                                @foreach($place as $places)
                                    <tr class="text-center">
                                        <td>{{$i++}}</td>
                                        <td><img src="{{asset('assets/imgs/products/')}}/{{$places->image}}"
                                                 alt="{{$places->name}}" width="60"></td>
                                        <td>{{$places->name}}</td>
                                        <td>{{$places->province->name ?? 'None'}}</td>
                                        <td>{{$places->created_at}}</td>
                                        <td>
                                            <div class="button-container">
                                                <!-- Edit Button -->
                                                <button class="Btn"
                                                        onclick="location.href='{{route('admin.place.edit',['place_id'=>$places])}}'">
                                                    Edit
                                                    <svg class="svg" viewBox="0 0 512 512">
                                                        <path
                                                            d="M410.3 231l11.3-11.3-33.9-33.9-62.1-62.1L291.7 89.8l-11.3 11.3-22.6 22.6L58.6 322.9c-10.4 10.4-18 23.3-22.2 37.4L1 480.7c-2.5 8.4-.2 17.5 6.1 23.7s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L387.7 253.7 410.3 231zM160 399.4l-9.1 22.7c-4 3.1-8.5 5.4-13.3 6.9L59.4 452l23-78.1c1.4-4.9 3.8-9.4 6.9-13.3l22.7-9.1v32c0 8.8 7.2 16 16 16h32zM362.7 18.7L348.3 33.2 325.7 55.8 314.3 67.1l33.9 33.9 62.1 62.1 33.9 33.9 11.3-11.3 22.6-22.6 14.5-14.5c25-25 25-65.5 0-90.5L453.3 18.7c-25-25-65.5-25-90.5 0zm-47.4 168l-144 144c-6.2 6.2-16.4 6.2-22.6 0s-6.2-16.4 0-22.6l144-144c6.2-6.2 16.4-6.2 22.6 0s6.2 16.4 0 22.6z"></path>
                                                    </svg>
                                                </button>


                                                <!-- Delete Button -->
                                                <button class="delete" wire:click="deletePlace({{ $places->id }})">
                                                    <span class="text">Delete</span>
                                                    <span class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path
                                d="M24 20.188l-8.315-8.209 8.2-8.282-3.697-3.697-8.212 8.318-8.31-8.203-3.666 3.666 8.321 8.24-8.206 8.313 3.666 3.666 8.237-8.318 8.285 8.203z"></path>
                        </svg>
                    </span>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
                            {{$place->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>
