@if (is_array($dataTypeContent->{$row->field}))
    @php
        $text = '';
    @endphp
    @foreach ($dataTypeContent->{$row->field} as $v)
        @if ($loop->first)
            @php
                $text .= '[';
            @endphp
        @endif
            @php
                $text .= '"'.$v.'"';
            @endphp
        @if ($loop->last)
            @php
                $text .= ']';
            @endphp
        @else
            @php
                $text .= ',';
            @endphp
        @endif
    @endforeach
@endif
<label for="name">{{ $row->display_name }}</label>
<textarea @if($row->required == 1) required @endif class="form-control" data-name="{{ $row->display_name }}"  name="{{ $row->field }}">@if(isset($text)){{ $text }}@endif</textarea>
