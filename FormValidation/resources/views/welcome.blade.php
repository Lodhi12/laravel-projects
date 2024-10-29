<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add User Form</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-4"></div>
            <h1>Add New User</h1>
            <form action="" method="POST">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input type="text" name="username" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" name="useremail" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">Age</label>
                    <input type="text" name="userage" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">City</label>
                    <input type="text" name="usercity" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">City</label>
                    <select name="usercity" class="form-control">
                        <option value="Karachi">Karachi</option>
                        <option value="Islamabad">Islamabad</option>
                        <option value="Lahore">Lahore</option>
                        <option value="Multan">Multan</option>
                        <option value="Hyderabad">Hyderabad</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</body>
</html>