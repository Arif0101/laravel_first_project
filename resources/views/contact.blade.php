<h1> Contact Us </h1>

<form action="{{url('/contact')}}" method="POST">
    @csrf 
    <input type="text" name="name">
    <button>Submit</button> 

</form>