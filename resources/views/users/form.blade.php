<div class="mb-3">
    <label>Prefix</label>
    <select name="prefixname" class="form-control" required>
        <option value="">-- Select Prefix --</option>
        @php
            $prefixes = ['Mr.', 'Mrs.', 'Ms.', 'Miss', 'Other'];
        @endphp
        @foreach ($prefixes as $prefix)
            <option value="{{ $prefix }}" {{ old('prefixname', $user->prefixname ?? '') == $prefix ? 'selected' : '' }}>
                {{ $prefix }}
            </option>
        @endforeach
    </select>
    @error('prefixname')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="mb-3">
    <label>First Name</label>
    <input type="text" name="firstname" class="form-control" value="{{ old('firstname', $user->firstname ?? '') }}" required>
    @error('firstname')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="mb-3">
    <label>Middle Name</label>
    <input type="text" name="middlename" class="form-control" value="{{ old('middlename', $user->middlename ?? '') }}">
    @error('middlename')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="mb-3">
    <label>Last Name</label>
    <input type="text" name="lastname" class="form-control" value="{{ old('lastname', $user->lastname ?? '') }}" required>
    @error('lastname')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="mb-3">
    <label>Suffix</label>
    <select name="suffixname" class="form-control">
        <option value="">-- Select Suffix --</option>
        @php
            $suffixes = ['Jr.', 'Sr.', 'II', 'III', 'IV'];
        @endphp
        @foreach ($suffixes as $suffix)
            <option value="{{ $suffix }}" {{ old('suffixname', $user->suffixname ?? '') == $suffix ? 'selected' : '' }}>
                {{ $suffix }}
            </option>
        @endforeach
    </select>
    @error('suffixname')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="mb-3">
    <label>Username</label>
    <input type="text" name="username" class="form-control" value="{{ old('username', $user->username ?? '') }}" required>
    @error('username')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="mb-3">
    <label>Email</label>
    <input type="email" name="email" class="form-control" value="{{ old('email', $user->email ?? '') }}" required>
    @error('email')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="mb-3">
    <label>Type</label>
    <input type="text" name="type" class="form-control" value="{{ old('type', $user->type ?? 'user') }}">
    @error('type')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="mb-3">
    <label>Photo</label>
    
    @if(isset($user) && $user->photo)
        <div class="mb-2">
            <img src="{{ asset('storage/' . $user->photo) }}" alt="User Photo" width="100" class="img-thumbnail">
        </div>
    @endif

    <input type="file" name="photo" class="form-control">
    
    @error('photo')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

