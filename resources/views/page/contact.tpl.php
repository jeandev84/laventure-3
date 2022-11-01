
<h1>Sign up</h1>

<form action="{{ route('send.contact') }}" method="POST">

  <div class="form-group">
      <input type="text" class="form-control" name="username" placeholder="Username">
  </div>

  <div class="form-group">
      <input type="password" name="password" id="password" class="form-control" placeholder="Password">
  </div>

  <div class="form-group">
      <input type="password" name="confirm_password" id="confirm_password" class="form-control" placeholder="Confirm Password">
  </div>

  <div class="form-group">
      <button type="submit" class="btn btn-primary">Send</button>
  </div>
</form>
