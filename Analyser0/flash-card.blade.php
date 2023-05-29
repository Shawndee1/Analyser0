
@if(session()->has('message'))
<style>.style{
    position: fixed;
    top: 0;
    
    font-size: 30px;

}</style>
<div x-data="{show:true}" x-init="setTimeout(()=>show=false,3000)"x-show="show" class="style"  >
<p>
    {{session('message')}} Mr/Mrs{{session('session1')}} 
</p>


</div>
@endif