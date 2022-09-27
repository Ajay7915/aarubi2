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
            <button class="btn btn-primary float-right"><a href="{{route('admin_contact.create')}}"class="text-white">ADD Contact</a></button>

            </div>
            <div class="ibox-body">
                <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>Sn</th>
                            <th>Name</th>
                            <th>Email</th>
                            
                            <th>Address</th>
                            <th>Message</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                      @foreach($data as $c)
                      <tr>
                        <td>{{++$i}}</td>
                        <td>{{$c->name}}</td>
                        <td>{{$c->email}}</td>
                        <td>{{$c->address}}</td>
                        <td>{{$c->message}}</td>
                        <td>
                        <form action="{{route('admin_contact.destroy',$c->id)}}" method="POST">
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