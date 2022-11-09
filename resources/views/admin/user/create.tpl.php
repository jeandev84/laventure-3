<div class="view-content">
    <form action="{{ route('admin.user.store') }}" method="POST">
         <div class="form-group">
             <input type="text" class="form-control" name="username">
         </div>
         <div class="form-group">
            <input type="password" class="form-control" name="password">
         </div>
         <div class="form-group">
            Active : <input type="checkbox" name="active">
         </div>
         <button class="btn btn-success">Submit</button>
    </form>
</div>