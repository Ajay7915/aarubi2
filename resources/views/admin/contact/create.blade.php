@include('admin.header')
<div style="margin-left:250px; margin-right:20px; padding-top:30px; margin-buttom:100px;">
<h6><a href="">Home/</a><a href="">Services/</a>Add New Service</h6>
<hr>
<div>
    <h3><b>Add New Services</b></h3>
    <br>
    <form action="{{route('admin_contact.store')}}" method="post" >
    @csrf
       
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name</strong>
                    <input type="text" name="name" class="form-control">
                    <span style="color:red;">@error('name'){{$message}}@enderror</span>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Email</strong>
                    <input type="email" name="email" class="form-control">
                    <span style="color:red;">@error('email'){{$message}}@enderror</span>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Address</strong>
                    <input file="text"  name="address" class="form-control">
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Message</strong>
                    
                        <textarea name="message" id="" cols="30" rows="5" class="form-control"></textarea>
                </div>
            </div>

        </div>
        

            </div>
            <button class="btn btn-primary" type="submit" >Add Contact</button>
    


    </form>
</div>

</div>

@include('admin.footer')