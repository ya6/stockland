@if($errors->any())
<style>
.dislay_none {display: none}
    </style>

    <div class="  alert alert-danger p-2 wow zoomIn delay-06s " style="position: fixed; left: 40%; top: 30%">
        <ul class=" modal_errors p-2 ">
            @foreach ($errors->all() as $error)
            <li class="">{{ $error}}</li>
            @endforeach
        </ul>
    </div>


<script>
     let target = document.querySelector('.modal_errors');
    console.log(target.clientWidth);
    console.log(document.documentElement.clientWidth);
    console.log(target.parentElement);
    target.parentElement.style ='position: fixed; top: 30%; left:'+(document.documentElement.clientWidth-target.clientWidth)/2+'px';

    
        setTimeout(() =>{ target.parentElement.classList.add('dislay_none')}, 5000);
    

  

  
</script>
    @endif