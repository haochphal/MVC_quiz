<div class="container text-center">
    <form method="post" action="index.php?action=registerValidation">
        <div id="div_register">
            <h1>Register</h1>
            <div>
                <input type="text"  name="username" placeholder="Username"/>
            </div>
            <div>
                <input type="text"   name="email" placeholder="Email"/>
            </div>
            <div>
                <input type="password"  name="password" placeholder="Password"/>
            </div>
            <div>
                <input type="password"  name="comfirm" placeholder="Comfirm Password"/>
            </div>
            <div>
                <input type="submit" value="Submit" name="btn_submit" id="btn_submit"/>
                <a href="index.php?action=login" class="btn btn-success">Register</a>
            </div>
        </div>
    </form>
</div>