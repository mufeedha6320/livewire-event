<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
    <div class="form-container">
        <h2>Registration Form</h2>
        <form wire:submit.prevent="create" method="POST" >
          <div class="form-group p-3">
            <label>Name:</label>
            <input type="text" wire:model="name" class="form-control" required>
          </div>
          <div class="form-group p-3">
            <label>Email:</label>
            <input type="email" wire:model="email" class="form-control" required>
          </div>
          <div class="form-group p-3">
            <label for="password">Password:</label>
            <input type="password" wire:model="password" class="form-control" required>
          </div>
          <div class="form-group p-3">
            <input type="submit" value="Register" class="btn btn-primary">
          </div>
        </form>
      </div>

</div>
