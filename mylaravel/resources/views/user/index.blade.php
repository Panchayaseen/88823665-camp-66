<div class="row">
    <div class="col-md-12">
        <div class="card mb-12">
           <div class="card-body">
            <table class="table table-bordered">
</tr>
</thead>
<tbody>
   <?php foreach ($users as $index => $user) { ?>
      <tr class="align-middle">
         <td>{{ $index+1 }}.</td>
         <td>{{ $user->name }}</td>
         <td>{{ $user->email }}</td>
         <td>
            <a href="{{url('/user/'.$user->id)}}">
               <button class="btn btn-warning">Edit</button>
   </a>
   <form action="{{ url('/user') }}" method="post" style="display: ">
   @csrf
   @method('delete')
   <input type="hidden" name="id" value="{{ $user }}">
   <button type="submit" class="btn btn-danger">
   </form>
   </td>
   </tr>
   <?php } ?>
   </tbody>
   </table>
   </div>
   <!-- /.card-body -->
    <div class="card-footer clearfix">
      <ul class="pagin">
      <li class="page-item"><a class="page-link" href='#'>&la</>
      <li class="page-item"><a class="page-link" href='#'>1</>
      <li class="page-item"><a class="page-link" href='#'>2</>
      <li class="page-item"><a class="page-link" href='#'>3</>
      <li class="page-item"><a class="page-link" href='#'>&ra</>
   </ul>
   </div>
   </div>
   <button class="btn" onclick="confirm_delete()">Click Me</button>
   <!-- /.card -->
   </div>
   </div>
   @endsection
   @section('scripts')
   <script>
      confirm_delete = function (){
         Swal.fire({
         title: "Are you sure?",
         text: "You won't be able to revert this!",
         icon: "warning",
         showCancelButton: true,
         confirmButtonColor: "#3085d6",
         cancelButtonColor: "#d33",
         confirmButtonText: "Yes, delete it!"
      }).then(function (result) {
         console.log("Result", result)
         if (result.isConfirmed) {
            console.log("Delete It!", result)
         }
      });
   }
      </script>
      @endsection
