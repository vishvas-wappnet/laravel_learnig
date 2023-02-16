<html>

<body>
    <center>
               <h1>laravel registration form <h1>
                
               <div> 
                        <form  actoin="http://localhost/display" method="post"> 

                        @csrf
                                name:<input type="text" name="user_name"> </br>

                                email:<input type="email" name="user_email"> </br>

                                password: <input type="password" name="user_password"> </br>

                                <input type="submit" value="submit"  name="btn_submit">

                        </form>

               </div>

    </center>
</body>