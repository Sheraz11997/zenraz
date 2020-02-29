{{csrf_field()}}
<div class="row">
    <div class="col-md-3 form-group {{ $errors->has('file1') ? 'has-error' : ''}}">
        {!! Form::file('file1', ['class' => 'form-control']); !!}
    </div>
    <div class="col-md-3 form-group {{ $errors->has('seed_variety') ? 'has-error' : ''}}">
        <label for="name">Seed Variety</label>
        {!! Form::text('seed_variety', $contract->seed_variety, ['class' => 'form-control']); !!}
    </div>

    <div class="col-md-3 form-group {{ $errors->has('seed_price') ? 'has-error' : ''}}">
        <label for="name">Seed price</label>
        {!! Form::text('seed_price', $contract->seed_price, ['class' => 'form-control']); !!}
    </div>
    <div class="col-md-3 form-group {{ $errors->has('file2') ? 'has-error' : ''}}">
        {!! Form::file('file2', ['class' => 'form-control']); !!}
    </div>

</div>
