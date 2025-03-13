    <style>
        
    .header {
        background-color: #4b2c7c;
        padding: 15px;
        text-align: right;
    }


    .role-btn {
        background-color: #28a745;
        color: white;
        border: none;
        padding: 10px 20px;
        cursor: pointer;
        border-radius: 5px;
    }

    </style>

    <header class="header">
            <a class="role-btn" href={{route('login')}}>Teacher/Student</a>
        </header>
        @yield('content')