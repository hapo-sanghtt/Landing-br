<!DOCTYPE html>

<html>

<head>
    <title>Student</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        @yield('main')
    </div>
</body>
<script>
    $(document).ready(function() {

        $('#new-student').click(function() {
            $('#btn-save').val("create-student");
            $('#student').trigger("reset");
            $('#studentCrudModal').html("Add New Student");
        });

        $('body').on('click', '#edit-student', function() {
            var student_id = $(this).data('id');
            $.get('students/' + student_id + '/edit', function(data) {
                $('#studentCrudModal').html("Edit student");
                $('#btn-update').val("Update");
                $('#std_id').val(data.id);
                $('#name').val(data.name);
                $('#email').val(data.email);
                $('#address').val(data.address);
            })
        });
    });
</script>

</html>