@include('admin.header')
<div class="content-wrapper">
    <!-- START PAGE CONTENT-->
    <div class="page-heading">
        <h1 class="page-title">Home Table</h1>

        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
         @endif
    </div>
    <div class="page-content fade-in-up">
        <div class="ibox">
            <div class="ibox-head">
            <button class="btn btn-primary"><a href="{{route('admin_home.create')}}" class="text-white">Add Tables</a></button>

            </div>
            <div class="ibox-body">
                <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>Sn</th>
                            <th>Title</th>
                            <th>Image</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                      
                        <?php $i=1;?>
                        @foreach($data as $da)
                         <tr>
                             <td>{{$i++;}}</td>
                             <td>{{$da->title}}</td>
                             <td><img src="img\home\{{$da->image}}" height="50px" width="50px" alt=""></td>
                             <td>{{$da->description}}</td>
                             <td>
                                 <form action="{{route('admin_home.destroy',$da->id)}}" method="POST">
                                     <a class="btn btn-primary" href="{{route('admin_home.edit',$da->id)}}">Edit</a>
                                     @csrf
                                     @method ('DELETE')
                                     <button class="btn btn-danger" type="submit" onclick="return confirm('Are you sure want to delete?')">Delete</button>
     
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