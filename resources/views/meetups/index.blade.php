@include('layouts.header')
<div class="mainwrapper">
    @if(Auth::user())
    @include('layouts.sidebar')
    @endif


    <div class="mainpanel">
        <div class="pageheader">
            <div class="media">
                <div class="pageicon pull-left">
                    <i class="fa fa-calendar"></i>
                </div>
                <div class="media-body">
                    <ul class="breadcrumb">
                        <li><a href=""><i class="glyphicon glyphicon-calendar"></i></a></li>
                        <li><a href="">Meetups</a></li>
                        <li>View Meetups</li>
                    </ul>
                    <h4>View Meetups</h4>
                </div>
            </div><!-- media -->
        </div><!-- pageheader -->

        <div class="contentpanel">
            <div class="row">
                @if(Auth::user())
                <div class="pull-right" >
                    <a class="btn btn-success" href="{{ route('meetup.create') }}"> Create New Meetup</a>
                </div>
                @endif




                @if ($message = Session::get('success'))

                    <div class="alert alert-success">

                        <p>{{ $message }}</p>

                    </div>

                @endif
                <div class="clearfix" style="margin-bottom: 20px;"></div>

                <table class="table table-bordered">

                    <tr>
                        <th>No</th>


                        <th>Title</th>

                        <th>Date</th>

                        <th>Location</th>

                        <th>Description</th>

                        <th>Created By</th>

                        <th style="width: 310px;">Action</th>

                    </tr>

                    @foreach ($meetups as $key => $meetup)
                        <tr>
                            <td>{{ ++$i }}</td>
                            <td>{{$meetup->title}}</td>
                            <td>{{$meetup->date}}</td>
                            <td>{{$meetup->location}}</td>
                            <td>{{$meetup->description}}</td>
                            <td>{{ $meetup->owner?$meetup->owner->email:'' }}</td>
                            <td>
                                @if(Auth::guest())
                                    <a class="btn btn-info" href="{{ url('/login') }}"><i class="fa fa-eye"></i> View Details</a>
                                @endif
                                <a class="btn btn-info" href="{{ route('meetup.show',$meetup->id) }}">Show</a>
                                    {!! Form::open(['method' => 'REGISTER','route' => ['meetup.register',$meetup->id],'style'=>'display:inline']) !!}

                                    {!! Form::submit('Register', ['class' => 'btn btn-success']) !!}

                                    {!! Form::close() !!}
                                @can('update', $meetup)
                                    <a class="btn btn-primary" href="{{ route('meetup.edit',$meetup->id) }}">Edit</a>
                                @endcan
                                @can('delete', $meetup)
                                    {!! Form::open(['method' => 'DELETE','route' => ['meetup.destroy',$meetup->id],'style'=>'display:inline']) !!}

                                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}

                                    {!! Form::close() !!}
                                @endcan


                            </td>

                        </tr>
                    @endforeach

                </table>

                {!! $meetups->render() !!}
            </div>
        </div>

    </div>
</div>
@include('layouts.footer')

