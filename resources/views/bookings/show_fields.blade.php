<!-- Firstname Field -->
<div class="col-sm-12">
    {!! Form::label('firstname', 'Firstname:') !!}
    <p>{{ $booking->firstname }}</p>
</div>

<!-- Surname Field -->
<div class="col-sm-12">
    {!! Form::label('surname', 'Surname:') !!}
    <p>{{ $booking->surname }}</p>
</div>

<!-- Membertype Field -->
<div class="col-sm-12">
    {!! Form::label('membertype', 'Membertype:') !!}
    <p>{{ $booking->membertype }}</p>
</div>

<!-- Dateofbirth Field -->
<div class="col-sm-12">
    {!! Form::label('dateofbirth', 'Dateofbirth:') !!}
    <p>{{ $booking->dateofbirth }}</p>
</div>

