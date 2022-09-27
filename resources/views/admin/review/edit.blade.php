@include('admin.header')
<div class="page-heading">
    <h1 class="page-title">Review Form</h1>
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
        </li>
    </ol>
</div>

        <div class="col-md-6">
            <div class="ibox">
                <div class="ibox-head">
                    <div class="ibox-title"></div>
                    <div class="ibox-tools">
                        <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                        <a class="fullscreen-link"><i class="fa fa-expand"></i></a>
                    </div>
                </div>
                <div class="ibox-body">
                    <form class="form-horizontal" action="{{route('admin_review.update',$review->id)}}" method="POST" enctype="multipart/form-data" >
                        @csrf
                        @method('PUT')
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Name</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="name" placeholder="Name" value="{{$review->name}}" >
                                <span class="text-warning">
                                    @error('name'){
                                      {{$message}}
                                    }
                                    @enderror
                                  </span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Post</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="post" placeholder="post"  value="{{$review->post}}">
                                <span class="text-warning">
                                    @error('post'){
                                      {{$message}}
                                    }
                                    @enderror
                                  </span>
                            </div>
                        </div> 
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Message</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" type="text" name="msg" placeholder="Write your message"> {{$review->message}}</textarea>
                                <span class="text-warning">
                                    @error('msg'){
                                      {{$message}}
                                    }
                                    @enderror
                                  </span>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Image</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="file" name="img"  value="{{$review->image}}">
                                <span class="text-warning">
                                    @error('img'){
                                      {{$message}}
                                    }
                                    @enderror
                                  </span>
                            </div>
                        </div>

                        
                        <div class="form-group row">
                            <div class="col-sm-10 ml-sm-auto">
                      <button class="btn btn-danger" type="submit">Submit</button>

                                <button class="btn btn-dark" type="submit"><a href="{{route('admin_review.index')}} " class="text-white">Cancel</a></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    
<!-- END PAGE CONTENT-->
@include('admin.footer')