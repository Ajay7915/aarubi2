@include('admin.header')
<div style="margin-left:250px; margin-right:20px; padding-top:30px; margin-buttom:30px;">
<h6><a href="">Home/</a><a href="">Services/</a>Add New Service</h6>
<hr>
<div>
    <h3><b>Add New Services</b></h3>
    <br>
    <form action="{{route('admin_service.store')}}" method="post" enctype="multipart/form-data" >
    @csrf
       
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Service Name</strong>
                    <input type="text" name="name" class="form-control">
                    <span style="color:red;">@error('name'){{$message}}@enderror</span>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Service Image</strong>
                    <input type="file" name="image" class="form-control">
                    <span style="color:red;">@error('image'){{$message}}@enderror</span>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Service Description</strong>
                    <input file="text"  name="description" class="form-control">
                </div>
            </div>

        </div>
        

            </div>
            <button class="btn btn-primary" type="submit" >Add Services</button>
    


    </form>
</div>

</div>

@include('admin.footer')