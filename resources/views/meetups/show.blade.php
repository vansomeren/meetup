@include('layouts.header')

<div class="mainwrapper">
    @include('layouts.sidebar')
    <div class="mainpanel">
        <div class="pageheader">
            <div class="media">
                <div class="pageicon pull-left">
                    <i class="fa fa-briefcase"></i>
                </div>
                <div class="media-body">
                    <ul class="breadcrumb">
                        <li><a href=""><i class="glyphicon glyphicon-users"></i></a></li>
                        <li><a href="">System Administration</a></li>
                        <li>Roles</li>
                    </ul>
                    <h4>Show Roles</h4>
                </div>
            </div><!-- media -->
        </div><!-- pageheader -->
        <div class="contentpanel">

            <div class="pull-right">

                <a class="btn btn-primary" href="{{ route('meetup.index') }}"> Back</a>

            </div>



            <div class="row">

                <div class="col-xs-12 col-sm-12 col-md-12">

                    <div class="form-group">

                        <strong>Meetup Title:</strong>

                        {{ $meetup->title }}

                    </div>

                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">

                    <div class="form-group">

                        <strong>Meetup Date:</strong>

                        {{ $meetup->date }}

                    </div>

                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">

                    <div class="form-group">

                        <strong>Meetup Location:</strong>

                        {{ $meetup->location }}

                    </div>

                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">

                    <div class="form-group">

                        <strong>Meetup Description:</strong>

                        {{ $meetup->description }}

                    </div>

                </div>

           {{--     <div class="col-xs-12 col-sm-12 col-md-12">

                    <div class="form-group">

                        <strong>Meetup Location:</strong>

                        @if(!empty($meetup->roles))

                            @foreach($user->roles as $v)

                                <label class="label label-success">{{ $v->display_name }}</label>

                            @endforeach

                        @endif

                    </div>

                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">

                    <div class="form-group">

                        <strong>Permissions:</strong>

                        @if(!empty($user->permissions))

                            @foreach($user->permissions as $v)

                                <label class="label label-success">{{ $v->display_name }}</label>

                            @endforeach

                        @endif

                    </div>

                </div>--}}


            </div>
        </div>
    </div>
</div>