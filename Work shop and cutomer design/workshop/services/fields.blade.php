<div class="col-md-6 col-lg-6">
    <div class="form-group {{ $errors->has('sparePartName') ? 'has-feedback has-error has-danger' : '' }}">
        <label for="sparePartName" class="form-label">Description</label>
        {!! Form::text('description', isset($item) ? $item->description : '', ['id' => 'description', 'placeholder' => 'Description', 'class' => 'form-control' . ($errors->has('description') ? ' is-invalid' : ''), 'required' => true]) !!}
        @if($errors->has('description'))
            <div class="invalid-feedback"> {{ $errors->first('description') }}</div>
        @endif
    </div>
</div>

<div class="col-md-6 col-lg-6">
    <div class="form-group {{ $errors->has('serviceType') ? 'has-feedback has-error has-danger' : '' }}">
        <label for="serviceType" class="form-label">Type</label>
        {!! Form::text('serviceType', isset($item) ? $item->serviceType : '', ['id' => 'serviceType', 'placeholder' => 'Type', 'class' => 'form-control' . ($errors->has('serviceType') ? ' is-invalid' : ''), 'required' => true]) !!}
        @if($errors->has('serviceType'))
            <div class="invalid-feedback"> {{ $errors->first('serviceType') }}</div>
        @endif
    </div>
</div>


<div class="col-md-6 col-lg-6">
    <div class="form-group {{ $errors->has('price') ? 'has-feedback has-error has-danger' : '' }}">
        <label for="price" class="form-label">Price</label>
        {!! Form::text('price', isset($item) ? $item->price : '', ['id' => 'price', 'placeholder' => 'Price', 'class' => 'form-control' . ($errors->has('price') ? ' is-invalid' : ''), 'required' => true]) !!}
        @if($errors->has('price'))
            <div class="invalid-feedback"> {{ $errors->first('price') }}</div>
        @endif
    </div>
</div>

<div class="col-md-6 col-lg-6 ">
    <div class="form-group {{ $errors->has('isAvailable') ? 'has-feedback has-error has-danger' : '' }} mt-4" style="margin-top: 40px !important;">
    <div class="form-check">
                          <input
                            class="form-check-input"
                            type="checkbox"
                            value="1"
                            name="isAvailable"
                            id="flexCheckDefault"
                            {{isset($item) ? ($item->isAvailable ? 'checked' : '') : '' }}
                          />
                          <label
                            class="form-check-label"
                            for="flexCheckDefault"
                          >
                          Is It Available ?
                          </label>
         @if($errors->has('isAvailable'))
            <div class="invalid-feedback"> {{ $errors->first('isAvailable') }}</div>
        @endif
    </div>
</div>
</div>

<div class="col-lg-12 text-center">
 <button class="btn btn-primary py-3" type="submit"><i class="fa fa-save"></i> Save Data</button>
 </div>