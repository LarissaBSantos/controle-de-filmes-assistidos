<div>
  <label>{{ $label }}</label>
  <select name="{{ $name }}" onchange="this.form.submit()">
    @foreach ($options as $value => $text)
      <option value="{{ $value }}" {{ request($name) == $value ? 'selected' : '' }}>
        {{ $text }}
      </option>
    @endforeach
  </select>
</div>