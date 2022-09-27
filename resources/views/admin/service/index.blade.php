@include('admin.header')
<div class="content-wrapper">
    <!-- START PAGE CONTENT-->
    <div class="page-heading">
        <h1 class="page-title">About Table</h1>

        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
         @endif
    </div>
    <div class="page-content fade-in-up">
        <div class="ibox">
            <div class="ibox-head">
            <button class="btn btn-primary float-right"><a href="{{route('admin_service.create')}}"class="text-white">ADD SERVICES</a></button>

            </div>
            <div class="ibox-body">
                <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>Sn</th>
                            <th>Services Name</th>
                            <th>Image</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $d)
                        <tr>
                            <td>{{++$i}}</td>
                            <td>{{$d->services_name}}</td>
                            <td><img src="..\Services_photo\{{$d->image}}" alt="" height="50px" width="70px"></td>
                            <td>{{$d->description}}</td>
                            <td>
                            <form action="{{route('admin_service.destroy',$d->id)}}" method="POST">
                            <a class="" href="{{route('admin_service.edit',$d->id)}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                           
                           

                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn-danger" onclick="return confirm('Areyou sure want to delete')"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                        </form>
                            </td>
                        </tr>
                        @endforeach
                      
                       
                       
                    </tbody>
                </table>
            </div>
        </div>
       
    </div>
    <!-- END PAGE CONTENT-->
   
</div>
@include('admin.footer')