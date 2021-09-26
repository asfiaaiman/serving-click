<div class="form-group @error('name') has-error @enderror">
    <label class="control-label" for="name">Name *</label>
    <input
        type="text"
        class="form-control"
        id="name"
        name="name"
        placeholder="Your Full Name"
        required
    >
    @error('name')
    <span class="help-block has-error">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>


<div class="form-group @error('email') has-error @enderror">
    <label class="control-label" for="email">Email *</label>
    <input
        type="email"
        class="form-control"
        id="email"
        name="email"
        placeholder="Email Address"
        required
    >
    @error('email')
    <span class="help-block has-error">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

<div class="form-group @error('number') has-error @enderror">
    <label class="control-label" for="number">Contact Number *</label>
    <input
        type="number"
        class="form-control"
        id="number"
        name="number"
        placeholder="Your Contact Number"
        required
    >
    @error('number')
    <span class="help-block has-error">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

<div class="form-group @error('date') has-error @enderror">
    <label class="control-label" for="date">Date of Service *</label>
    <input
        type="date"
        class="form-control"
        id="date"
        name="date"
        placeholder=""
        required
    >
    @error('date')
    <span class="help-block has-error">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
<div class="form-group @error('time') has-error @enderror">
    <label class="control-label" for="time">Date of Service *</label>
    <input
        type="time"
        class="form-control"
        id="time"
        name="time"
        placeholder=""
        required
    >
    @error('time')
    <span class="help-block has-error">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
<div class="form-group @error('service') has-error @enderror">
    <label class="control-label" for="name">Service *</label>
    <input
        type="text"
        class="form-control"
        id="service"
        name="service"
        value="{{$service->name}}"
        required
        readonly
    >
    @error('name')
    <span class="help-block has-error">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>


