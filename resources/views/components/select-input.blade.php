<div>
    <label for="{{$id}}">{{ $slot }}</label>

    <select class="form-select" name="{{$id}}" id="{{$id}}" required>
        <option value=""></option>
        @foreach (array_combine($options, $values) as $o => $v) {
        <option value="{{ $v }}" {{$v == $selected ? 'selected' : ''}}>
            {{ $o }}
        </option>
        @endforeach
    </select>
</div>