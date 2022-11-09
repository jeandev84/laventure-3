<div class="view-content">
    <div class="mb-5">
        <a href="{{ route('admin.user.create') }}" class="btn btn-success">Create</a>
    </div>
     <table class="table table-striped">
          <thead>
              <tr>
                  <th>ID</th>
                  <th>Username</th>
                  <th>Active</th>
                  <th>Actions</th>
              </tr>
          </thead>
         <tbody>
             @loop($users as $user):
               <tr>
                 <td>{{ $user->getId() }}</td>
                 <td>
                     <a href="{{ route('admin.user.show', ['id' => $user->getId() ]) }}">
                         {{ $user->getUsername() }}
                     </a>
                 </td>
                 <td>{{ $user->isActive() ? 'Yes' : 'No' }}</td>
                 <td>
                     <a href="{{ route('admin.user.edit', ['id' => $user->getId() ]) }}">
                         edit
                     </a>
                 </td>
               </tr>
             @endloop
         </tbody>
     </table>
</div>