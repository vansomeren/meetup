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
                        <li><a href=""><i class="glyphicon glyphicon-calendar"></i></a></li>
                        <li><a href="">New</a></li>
                        <li>Meetup</li>
                    </ul>
                    <h4>Create Meetup</h4>
                </div>
            </div><!-- media -->
        </div><!-- pageheader -->
        <div class="contentpanel">

            <div class="pull-right">

                <a class="btn btn-primary" href="{{ route('meetup.index') }}"> Back</a>

            </div>



            @if (count($errors) > 0)

                <div class="alert alert-danger">

                    <strong>Whoops!</strong> There were some problems with your input.<br><br>

                    <ul>

                        @foreach ($errors->all() as $error)

                            <li>{{ $error }}</li>

                        @endforeach

                    </ul>

                </div>

            @endif

            {!! Form::open(array('route' => 'meetup.store','method'=>'POST')) !!}

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">

                    <div class="form-group">

                        <strong>Meetup Titlw:</strong>

                        {!! Form::text('title', null, array('placeholder' => 'Meetup Title','class' => 'form-control', 'autocomplete' => 'off')) !!}

                    </div>

                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">

                    <div class="form-group">

                        <strong>Meetup Date:</strong>


                        <input class="date form-control"  type="text" name="date">

                    </div>

                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">

                    <div class="form-group">

                        <strong>Meetup Location</strong>

                        {!! Form::text('location', null, array('placeholder' => 'Meetup Location','class' => 'form-control', 'autocomplete' => 'off')) !!}

                    </div>

                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">

                    <div class="form-group">

                        <strong>Meetup Description</strong>

                        {!! Form::textarea('description', null, array('placeholder' => 'Meetup Description','class' => 'form-control', 'autocomplete' => 'off')) !!}

                    </div>

                </div>




                <div class="col-xs-12 col-sm-12 col-md-12 text-center">

                    <button type="submit" class="btn btn-primary">Submit</button>

                </div>

            </div>

            {!! Form::close() !!}
        </div>
    </div>
</div>

@include('layouts.footer')




