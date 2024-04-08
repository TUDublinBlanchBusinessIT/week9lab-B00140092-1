<!-- Firstname Field -->
<div class="form-group col-sm-6">
    {!! Form::label('firstname', 'Firstname:') !!}
    {!! Form::text('firstname', null, ['class' => 'form-control','maxlength' => 30,'maxlength' => 30]) !!}
</div>

<!-- Surname Field -->
<div class="form-group col-sm-6">
    {!! Form::label('surname', 'Surname:') !!}
    {!! Form::text('surname', null, ['class' => 'form-control','maxlength' => 30,'maxlength' => 30]) !!}
</div>

<input type="hidden" name="memberid" value="{{Auth::user()->member->id}}">

<!-- Memberid Field -->
<div class="form-group col-sm-6">
    <select name="courtid" class="form-control">
        @foreach($courts as $courts)
            <option value="{{$courts->id}}">{{$courts}}</option>
        @endforeach

    </select>
</div>

<!-- Dateofbirth Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dateofbirth', 'Dateofbirth:') !!}
    {!! Form::text('dateofbirth', null, ['class' => 'form-control','id'=>'dateofbirth']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#dateofbirth').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush