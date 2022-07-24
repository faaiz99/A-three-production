

<div>
    <h3>Add User</h3>

    @if(Session::has('added'))
    <div class="alert alert-success">{{ Session::get('added') }}</div>
    @endif
    @if(Session::has('pass'))
    <div class="alert alert-danger">{{ Session::get('pass') }}</div>
    @endif
    @if(Session::has('added'))
    <div class="alert alert-success">{{ Session::get('added') }}</div>
    @endif
    <table>
        <tbody>
            <form action="" wire:submit.prevent="addUser">
                @csrf
                <tr>
                    <td></td>
                    <td><button class="btn btn-dark" type="submit" onsubmit="matchPass()">Add User</button></td>
                </tr>
                <tr>
                    <td><label for="accountType"><Strong>Account type*</Strong></label></td>
                    <td><select wire:model = "accountType" name="accountType" required>
                            <option value=""></option>
                            <option value="0">User</option>
                            <option  value="1">Admin</option>
                        </select></td>
                </tr>
                <tr>
                    <td><label for="name"><Strong>Name*</Strong></label></td>
                    <td> <input wire:model="name" class="form-control" type="text" id="name" minlength="3" maxlength="30" name="name"  placeholder="Mifra Waseem" required>
                    <div id="namevalid" class="form-text text-muted invalid-feedback">
                        Your name should be 3-30 characters long and shouldn't contain a number
                    </div>
                    </td>
                </tr>
                <tr>
                    <td><label for="email"><Strong>Email*</Strong></label></td>
                    <td><input wire:model="email" class="form-control" type="email" id="email" name="email" placeholder="mifra@gmail.com" required>
                        <div id="emailvalid" class="form-text text-muted invalid-feedback">
                            Your email must be a valid email
                        </div>
                    </td>
                </tr>
                <tr>
                    <td><label for="password"><Strong>Password*</Strong></label></td>
                    <td><input wire:model= "password" class="form-control"  required type="password" name="password"  minlength="8" maxlength="14" id="pass1">
                        {{-- <span id="message"></span> --}}
                        <div id="passwordvalid" class="form-text text-muted invalid-feedback">
                            Your password must be 8-14 characters long and must contain a special character and a number
                        </div></td>
                </tr>
                <tr>
                    <td><label for="cnf_password"><Strong>Confirm Password*</Strong></label></td>
                    <td><input wire:model= "cnf_password" type="password" name="cnf_password" id="pass2"  required></td>
                </tr>

            </form>
        </tbody>
    </table>
    <script>
        function matchPass(){
            alert("hello");
            dd();
            // {{ __('Confirm Password') }}

            event.preventDefault();
            console.log("hello")
            if(document.getElementById('pass1').value!=document.getElementById('pass2')){
                alert('Passwords do not match')
            }

        }

        const name= document.getElementById('name');
        const email= document.getElementById('email');
        const password= document.getElementById('pass1');
        // console.log("hello");
        name.addEventListener('blur', ()=>{
            console.log("name is blurred");
            // Name Validation
            let regex = /^[a-zA-Z\s]+$/;
            let str = name.value;
            console.log(regex, str);

            if(regex.test(str)){
                console.log('Name is valid');
                name.classList.remove('is-invalid')
            }
            else{
                console.log('Name is not valid');
                name.classList.add('is-invalid')
            }
        })

        email.addEventListener('blur', ()=>{
            console.log("email is blurred");
            // Email validation
            let regex = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            let str = email.value;
            console.log(regex, str);

            if(regex.test(str)){
                console.log('Email is valid');
                email.classList.remove('is-invalid')
            }
            else{
                console.log('Email is not valid');
                email.classList.add('is-invalid')
            }
        })

        password.addEventListener('blur', ()=>{
            console.log("password is blurred");
            // Password validation
            let regex = /^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$/;
            let str = password.value;
            console.log(regex, str);

            if(regex.test(str)){
                console.log('Password is valid');
                password.classList.remove('is-invalid')
            }
            else{
                console.log('Password is not valid');
                password.classList.add('is-invalid')
            }
        })
    </script>
</div>
