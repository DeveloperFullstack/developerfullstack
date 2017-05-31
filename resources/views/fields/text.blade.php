<fieldset class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
  <label for="{{ $field->getName() }}">{{ $field->getLabel() }}</label>
  <input
    id="{{ $field->getName() }}"
    name="{{ $field->getName() }}"
    type="{{ $field->getType() }}"
    placeholder="{{ $field->getPlaceholder() }}"
    {{ $field->isRequired() ? 'required' : '' }}
    {{ $autofocus ? 'autofocus' : '' }}
    class="{{ $field->getClass() }}">
  {{-- @if ($errors->has('password'))
    <span class="help-block">
      <strong>{{ $errors->first('password') }}</strong>
    </span>
  @endif --}}
</fieldset>
