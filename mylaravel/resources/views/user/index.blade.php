<div class="row">
    
    @section('scripts')
    <script>
      function clickme(){
         Swal.fire({
            title: "Are you sure?",
            text: "Delete it or not?",
            icon: "warning",
            show
         })
         }