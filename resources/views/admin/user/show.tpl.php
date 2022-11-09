<div class="view-content">
      <h1>{{ $user->getUsername() }}</h1>
      Active : {{ $user->isActive() ? 'yes' : 'no' }}</small>
</div>