@if(session('success'))
<div class="alert alert-success alert-dismissable fade show" id="alert" role="alert">
    <!-- <button class="close" data-dismiss="alert" aria-label="Close"></button> -->
    {{session('success')}}
</div>
@elseif(session('error'))
<div class="alert alert-danger alert-dismissable fade show" id="alert" role="alert">
    <!-- <button class="close" data-dismiss="alert" aria-label="Close"></button> -->
    {{session('error')}}
</div>
@endif