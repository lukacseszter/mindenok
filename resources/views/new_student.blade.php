@if(session()->has("success"))
<H1>{{ session ("success") }}</H1>

@endif

<h1>Fill the form</h1>
@If ($errors->any())
<ul>
    @foreach($errors->all() as $error)
    <li>
        {{$error}}
    </li>

        @endforeach
</ul>
@endif
<form action="submit-student" method="post">
    {{ csrf_field() }}
    <p>
        <label for="">Name</label>
        <input type="text" name="name" placeholder="Name">
    </p>
        <label for="">Email</label>
        <input type="text" name="email" placeholder="Email">
    </p>
        <label for="">Course</label>
        <input type="text" name="course" placeholder="Course">
    </p>
        <button type="submit">Send</button>
    </p>
</form>