<div class="login-wrapper"  id="signup-content">
    <div class="login-content">
        <a href="#" class="close">x</a>
        <h3>sign up</h3>
        <form method="post" action="{{ route('signup') }}">
            @csrf
            <div class="row">
                 <label for="username-2">
                    Username:
                    <input type="text" name="username" id="username-2" placeholder="Username"  required="required" />
                </label>
            </div>

            <div class="row">
                <label for="email-2">
                    your email:
                    <input type="email" name="email" id="email-2" placeholder="Email" required="required" />
                </label>
            </div>
             <div class="row">
                <label for="password-2">
                    Password:
                    <input type="text" name="password" id="password-2" placeholder="Pasword" required="required" />
                </label>
            </div>

           <div class="row">
             <button type="submit">sign up</button>
           </div>
        </form>
    </div>
</div>
