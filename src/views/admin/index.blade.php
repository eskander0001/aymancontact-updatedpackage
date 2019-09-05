@extends(config('aymancontactconfig.layouts_app'))
@section('content')

    <div class="col-12 text-left">

        <h1 class="font-weight-light">
            admin.index

        </h1>
        <p class="lead">Manage all  the contants form requests </p>


        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <table class="table  table-sm table-hover ">
                            <thead class="thead-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">message</th>
                                <th scope="col">Mobile</th>
                                <th scope="col">@actions</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($allcontacts as $contact)
                                {{ $loop->iteration }} /{{ $loop->count }}
                                <tr>
                                    <th scope="row">{{$loop->iteration}}</th>
                                    <td class="">{{$contact->name}}</td>
                                    <td class="text-wrap text-break">{{ \Str::limit($contact->message,150) }}</td>
                                    <td class="">{{$contact->phone}}</td>
                                    <td class="">

                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <a type="button" class="btn btn-sm btn-warning" href="{{route('contact.show',$contact)}}">Show</a>
                                            <a type="button" class="btn btn-sm btn-success" href="{{route('contact.edit',$contact)}}">Edit</a>
                                            <a type="button" class="btn btn-sm btn-danger" href="{{route('contact.destroy',$contact)}}">Delete</a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>

                </div>
            </div>

        </div>


















@stop


