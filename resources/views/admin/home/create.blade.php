@include('admin.header')
<div class="content-wrapper">
    <!-- START PAGE CONTENT-->
    <div class="page-heading">
        <h1 class="page-title">Home Form</h1>
       
    </div>
    <div class="page-content fade-in-up">
        <div class="row">
            <div class="col-md-12">
                <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title">Home</div>
                        <div class="ibox-tools">
                            <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                            <a class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-ellipsis-v"></i></a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item">option 1</a>
                                <a class="dropdown-item">option 2</a>
                            </div>
                        </div>
                    </div>
                    <div class="ibox-body">
                        <form class="form-horizontal" action="{{route('admin_home.store')}}" method="POST" enctype="multipart/form-data" >
                            @csrf
                            @method('POST')
                            <div class="row">
                                <div class="col-sm-6 form-group">
                                    <label>Title</label>
                                    <input class="form-control" type="text" placeholder="Title" name="title">
                                    <span class="text-warning">
                                        @error('title'){
                                          {{$message}}
                                        }
                                        @enderror
                                      </span>
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label>Image</label>
                                    <input class="form-control" type="file" name="img">
                                    <span class="text-warning">
                                        @error('img'){
                                          {{$message}}
                                        }
                                        @enderror
                                      </span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <input class="form-control" type="text" placeholder="Write something" name="desc">
                                <span class="text-warning">
                                    @error('desc'){
                                      {{$message}}
                                    }
                                    @enderror
                                  </span>
                            </div>
                          
                            <div class="form-group">
                                <button class="btn btn-default" type="submit">Submit</button>
                                <button class="btn btn-dark" type="submit"><a href="{{route('admin_home.index')}} " class="text-white">Cancel</a></button>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
            
        </div>
       
    </div>
    <!-- END PAGE CONTENT-->
    
</div>
@include('admin.header')
