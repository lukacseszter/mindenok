<form action="update-student" method="post">
    {{ csrf_field() }}
    <p>
        <label for="">Name</label>
        <input type="text" name="name" value="{{ student->name }}">
    </p>
        <label for="">Email</label>
        <input type="text" name="email" value="{{ student->email }}">
    </p>
        <label for="">Course</label>
        <input type="text" name="course" value="{{ student->course->name }}">
    </p>
        <button type="submit">Update</button>
    </p>
</form>