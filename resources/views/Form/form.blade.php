

<div class="form-group">
    {!! Form::label('store','Store:') !!}
    {!! Form::select('store', array('store 1' => 'store 1', 'store 2' => 'store 2', 'store 3' => 'store 3'), 'store 1',array('class' => 'form-control')); !!}
</div>
<div class="form-group">

    {!! Form::label('title','Title:') !!}
    {!! Form::text('title',null,['class' => 'form-control','required' => 'required']) !!}

</div>

<div class="form-group">
    {!! Form::label('month','month') !!}
    {!! Form::radio('title_suffix','month',true) !!}
    {!! Form::label('year','year') !!}
    {!! Form::radio('title_suffix','year') !!}

</div>

<div class="form-group">

    {!! Form::label('coupon_code','Coupon Code:') !!}
    {!! Form::text('coupon_code',null,['class' => 'form-control','required' => 'required']) !!}

</div>

<div class="form-group">

    {!! Form::label('aff_url','Affiliated Url:') !!}
    {!! Form::text('aff_url',null,['class' => 'form-control','required' => 'required']) !!}

</div>

<div class="form-group">

    {!! Form::label('start_date','Start Date:') !!}
    {!! Form::input('date','start_date',date('Y-m-d'),['class'=>'form-control','required' => 'required']) !!}

</div>

<div class="form-group">

    {!! Form::label('end_date','End Date:') !!}
    {!! Form::input('date','end_date',date('Y-m-d'),['class'=>'form-control','required' => 'required']) !!}

</div>

<div class="form-group">

    {!! Form::label('photo','Logo:') !!}
    {!! Form::file('photo',null,['class' => 'form-control','required' => 'required']) !!}
    <span class="text-danger">{{ $errors->first('photo', ':message') }}</span>
</div>

<div class="form-group">
    {!! Form::submit($submitButtonText,['class' => 'btn btn-primary form-control']) !!}
</div>
    
    
