{{csrf_field()}}
<div class="row">
    <div class="col-md-3 form-group {{ $errors->has('name') ? 'has-error' : ''}}">
        <label for="name">Name</label>
        {!! Form::text('name', $farmer->name, ['class' => 'form-control']); !!}
    </div>

    <div class="col-md-3 form-group {{ $errors->has('cnic') ? 'has-error' : ''}}">
        <label for="cnic">CNIC</label>
        {!! Form::text('cnic', $farmer->cnic, ['class' => 'form-control']); !!}
    </div>

    <div class="col-md-3 form-group {{ $errors->has('mobile_number') ? 'has-error' : ''}}">
        <label for="mobile_number">Mobile Number</label>
        {!! Form::text('mobile_number', $farmer->mobile_number, ['class' => 'form-control', 'required' => 'required']); !!}
    </div>

    <div class="col-md-3 form-group {{ $errors->has('territory') ? 'has-error' : ''}}">
        <label for="name">Territory/BPA</label>
        {!! Form::text('territory', $farmer->territory, ['class' => 'form-control']); !!}
    </div>

    <div class="col-md-3 form-group {{ $errors->has('owned acreage') ? 'has-error' : ''}}">
        <label for="owned_acreage">Owned Acreage</label>
        {!! Form::number('owned_acreage', $farmer->owned_acreage, ['class' => 'form-control']); !!}
    </div>

    <div class="col-md-3 form-group {{ $errors->has('leased acreage') ? 'has-error' : ''}}">
        <label for="leased_acreage">Leased Acreage</label>
        {!! Form::number('leased_acreage', $farmer->leased_acreage, ['class' => 'form-control']); !!}
    </div>

    <div class="col-md-3 form-group {{ $errors->has('total acreage') ? 'has-error' : ''}}">
        <label for="total_acreage">Total Acreage</label>
        {!! Form::number('total_acreage', $farmer->total_acreage, ['class' => 'form-control']); !!}
    </div>

    <div class="col-md-3 form-group {{ $errors->has('sanifa acreage') ? 'has-error' : ''}}">
        <label for="sanifa_acreage">SANIFA Acreage</label>
        {!! Form::number('sanifa_acreage', $farmer->sanifa_acreage, ['class' => 'form-control']); !!}
    </div>

    <div class="col-md-3 form-group {{ $errors->has('water resources') ? 'has-error' : ''}}">
        <label for="water_source">Water Resources</label>
        {!! Form::select('water_source', $farmer::$waterSources, $farmer->water_source, ['class' => 'form-control']); !!}
    </div>
</div>
