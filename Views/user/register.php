<div class="row">
       
   <div class="col"></div>
    <div class="col mt-4 p-3 border border-primary">
    <h1 class="text-center">Register</h1>

    <form action="<?=URL."/user/insertregister"?>" method="POST">



    <div class="form-group">
    <label for="exampleInputText">Name</label>
    <input type="text" name="name" class="form-control" id="exampleInputText" aria-describedby="textlHelp">
    <!-- <small id="emailHelp" class="form-text  text-danger">We'll never share your email with anyone else.</small> -->
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <!-- <small id="emailHelp" class="form-text  text-danger">We'll never share your email with anyone else.</small> -->
  </div>
  <div class="form-group ">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
  </div>

  <button type="submit" class="btn-block btn-primary">Register</button>
</form>

    
    
    
    
    </div>
    <div class="col"></div>

    </div>

 