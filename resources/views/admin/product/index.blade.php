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
                <button class="btn btn-primary float-right"><a
                        href="{{ route('admin.product.create') }}"class="text-white">Add Tables</a></button>
            </div>
            <div class="ibox-body">
                <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0"
                    width="100%">
                    <thead>
                        <tr>
                            <th>S.N</th>
                            <th>Title</th>
                            <th>Image</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <?php $i = 1; ?>
                    <tbody>
                        @foreach ($products as $product)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $product->product_name }}</td>
                                <td><img class="rounded-circle z-depth-2"
                                        src="{{ asset('admin/product') }}/{{ $product->image }}" alt=""
                                        height="50" width="50"></td>
                                <td>{{ $product->description }}</td>
                                <td>
                                    <form action="{{ route('admin.product.destroy', $product->id) }}" method="POST">
                                        <a class="btn btn-primary"
                                            href="{{ route('admin.product.edit', $product->id) }}"><i
                                                class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger"
                                            onclick="return confirm('Areyou sure want to delete')"><i
                                                class="fa fa-trash" aria-hidden="true"></i></button>
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
