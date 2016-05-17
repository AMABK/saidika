@extends('layouts.app')
@section('title')
Administrator
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading"><b>Home | Admin Dashboard :</b> {{\Auth::user()->first_name}} {{\Auth::user()->last_name}}[{{\Auth::user()->email}}]</div>

                <div class="panel-body">
                    @if(Session::has('global'))
                    <center><p>{!!Session::get('global')!!}</p></center>
                    @endif
                    <div class="row">
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
                            <li><a data-toggle="tab" href="#menu2">FAQs</a></li>
                        </ul>

                        <div class="tab-content">
                            <div id="home" class="tab-pane fade in active">
                                <div class="col-lg-12">
                                    <form action="/add-faq" method="post" enctype="multipart/form-data">
                                        {!! csrf_field() !!}
                                        <label for="">Question</label>                                
                                        <textarea required="" name="question" placeholder="Enter question here..." class="form-control" rows="3"></textarea>
                                        <label for="">Answer</label>                                
                                        <textarea required="" name="answer" placeholder="Enter answer here..." class="form-control" rows="3"></textarea>
                                        <div class="form-group">
                                            <input type="submit" value="Submit FAQ" class="form-control btn-success" id="exampleInputPassword2" placeholder="Video name">
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div id="menu2" class="tab-pane fade">
                                <form action="/admin" method="post">
                                            {!!csrf_field()!!}
                                            <span class="col-md-3">Question
                                                <input type="text" name="question" class="form-control">
                                            </span>
                                            <span class="col-md-3">Status
                                                <select class="form-control" name="status">
                                                    <option value="1">Active</option>
                                                    <option value="2">In Active</option>
                                                </select>
                                            </span>
                                            <span class="col-md-2">Action
                                                <input type="submit"  class="form-control btn-warning" value="search"><br>
                                            </span>
                                </form><br>
                                <h4>Search FAQs in the DB</h4><br>
                                @foreach($faqs as $faq)
                                <!-- Modal -->
                                <div id="myModal-{{$faq->id}}" class="modal fade" role="dialog">
                                    <div class="modal-dialog">
                                        <form action="/update-faq" method="post">
                                            {!!csrf_field()!!}
                                            <!-- Modal content-->
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit FAQ</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <label for="">Question</label>
                                                    <input type="hidden" name="q_id" value="{{$faq->id}}">
                                                    <textarea required="" name="question" placeholder="Enter question here..." class="form-control" rows="3">{{$faq->question}}</textarea>
                                                    <label for="">Answer</label> 
                                                    <input type="hidden" name="a_id" value="{{$faq->answer['id']}}">
                                                    <textarea required="" name="answer" placeholder="Enter answer here..." class="form-control" rows="3">{{$faq->answer['answer']}}</textarea>
                                                    <label for="">FAQ Status</label> 
                                                    <select name="status" class="form-control">
                                                        <option value="1" class="form-control">Active</option>
                                                        <option value="0" class="form-control">In Active</option>
                                                    </select>
                                                    <input type="submit" class="btn btn-warning" value="Update">
                                                </div>

                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse{{$faq->id}}">{{$faq->question}}</a>
                                        </h4>
                                    </div>
                                    <div id="collapse{{$faq->id}}" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            {{$faq->answer['answer']}}
                                            <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal-{{$faq->id}}">Edit</button>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                {!! $faqs->render() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
@parent
@if($app->environment('local'))
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.ui/1.11.4/jquery-ui.min.js"></script>
<script src="http://formvalidation.io/vendor/formvalidation/js/formValidation.min.js"></script>
<script src="http://formvalidation.io/vendor/formvalidation/js/framework/bootstrap.min.js">
    < script src = "https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.5.3/js/bootstrapValidator.min.js" ></script>
@else
<!-- In production-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.5.3/js/bootstrapValidator.min.js"></script>
@endif
<script>
    $(document).ready(function () {
        var user_details = {
            source: "/image-auto-complete",
            select: function (event, users) {
                +
                        $("#email").val(users.item.group_name);
                $("#first_name").val(users.item.first_name);
                $("#last_name").val(users.item.last_name);
                $("#id").val(users.item.id);


            },
            minLength: 2
        };
        $("#email").autocomplete(user_details);

    });

</script>   
@stop