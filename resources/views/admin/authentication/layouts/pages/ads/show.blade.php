@extends('admin.authentication.layouts.pages.ads.default')

@section('content')
<div class="col-12">

    <div class="box">
       <div class="box-header with-border">
         <h3 class="box-title">List Ads</h3>
         <button type="button" class="btn btn-rounded btn-success mb-5">Publish</button>
       </div>
       <!-- /.box-header -->
       <div class="box-body">
           <div class="table-responsive">
             <table id="example5" class="table table-bordered table-striped" style="width:100%">
               <thead>
                   <tr>
                       <th>Name</th>
                       <th>Price</th>
                       <th>Category</th>
                       <th>Town</th>
                       <th>Published date</th>
                       <th>Actions</th>
                   </tr>
               </thead>
               <tbody>
                    @forelse ($annonces as $annonce)
                        <tr>
                            <td>{{ $annonce->name }}</td>
                            <td>{{ $annonce->format_price }}</td>
                            <td>{{ $annonce->category->name }}</td>
                            <td>{{ $annonce->town->name }}</td>
                            <td>{{ $annonce->created_at }}</td>
                            <td>
                                <button type="button" class="btn btn-rounded btn-info mb-5">Boost  <i class="fa fa-rocket" aria-hidden="true"></i></button>
                                <button type="button" class="btn btn-rounded btn-warning mb-5">Edit  <i class="fa fa-edit"></i></button>
                                <button type="button" class="btn btn-rounded btn-danger mb-5">Delete <i class="fa fa-trash" aria-hidden="true"></i></button>
                                    
                            </td>
                        </tr>
                    @empty
                        <tr><h1>No ad</h1></tr>
                    @endforelse
               </tbody>
               <tfoot>
                   <tr>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Category</th>
                        <th>Town</th>
                        <th>Published date</th>
                        <th>Actions</th>
                   </tr>
               </tfoot>
           </table>
           </div>
       </div>
       <!-- /.box-body -->
     </div>
     <!-- /.box -->      
   </div> 
@endsection