@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Customer Registration</h2>

    <form id="registerForm">
        @csrf
        <div class="form-group mb-3">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" class="form-control" required>
        </div>

        <div class="form-group mb-3">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" class="form-control" required>
        </div>

        <div class="form-group mb-3">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" class="form-control" required>
        </div>

        <div class="form-group mb-3">
            <label for="confirm_password">Confirm Password</label>
            <input type="password" id="confirm_password" name="confirm_password" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Register</button>
    </form>

    <div id="successMessage" class="alert alert-success mt-3" style="display: none;">
        Registration successful! Please check your email for confirmation.
    </div>
</div>

<script>
    document.getElementById('registerForm').addEventListener('submit', function(event) {
        event.preventDefault();

        let name = document.getElementById('name').value;
        let email = document.getElementById('email').value;
        let password = document.getElementById('password').value;
        let confirm_password = document.getElementById('confirm_password').value;


        if (password !== confirm_password) {
            alert('Passwords do not match.');
            return;
        }

        fetch('{{ route('
                register ')}}', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    },
                    body: JSON.stringify({
                        name: name,
                        email: email,
                        password: password
                    })
                })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    document.getElementById('successMessage').style.display = 'block';
                } else {
                    alert(data.message);
                }
            })
            .catch(error => console.error('Error:', error));
    });
</script>
@endsection