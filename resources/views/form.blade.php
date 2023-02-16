<html>

<body>
    <center>
               <h1>laravel registration form <h1>
                
               <div> 
                        <form  actoin="http://localhost/display" method="post"> 

                        @csrf
                            <div>
                                name:<input type="text" name="user_name" value="{{old('user_name')}}" /> 
                                <span class"error">
                                    @error('user_name')
                                            {{$message}}
                                    @enderror
                                 </span>
                                 </br>
                        </div>
                                email:<input type="email" name="user_email" /> 
                                <span class"error">
                                    @error('user_email')
                                            {{$message}}
                                    @enderror
                                 </span>
                                 </br>

                                password: <input type="password" name="user_password"  /> 
                                <span class"error">
                                    @error('user_password')
                                            {{$message}}
                                    @enderror
                                 </span>
                        </br>
                                <input type="submit" value="submit"  name="btn_submit" style="size: 100px;">

                        </form>

               </div>

    </center>
</body>