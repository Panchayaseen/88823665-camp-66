@extends('layouts.defaultwith_menu')
@section('content')
<form>
    <div class="row">
        <div class="col-6">
            <div class="mb-3">
                <label for="category" class="form-label">Category Name</label>
                <input type="text" name="category" class="form-control" id="category">
            </div> 
        </div> 
    </div>    
</form>
<table class="table">
    <thead>
        <tbody>

        </tbody>
    </thead>
</table>
@endsection

@section('scripts')
<script>
    $(document).ready(function(){
        var count = 1;
        $('#btn-add-product').on('click', function(){

        })
    })
</script>