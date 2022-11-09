<div class="view-content">
    <form action="{{ route('admin.user.update', ['id' => $user->getId()]) }}" method="post">
        <div class="form-group">
            <input type="text" class="form-control" name="username" value="{{ $user->getUsername() }}">
        </div>
        <div class="form-group">
            Active : <input type="checkbox" name="active" {{ $user->checked() }}>
        </div>
        <input type="hidden" name="_method" value="PUT">
        <button class="btn btn-success">Submit</button>
    </form>
</div>