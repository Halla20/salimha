<div class="col-md-6 col-lg-6">
    <div class="form-group {{ $errors->has('sparePartName') ? 'has-feedback has-error has-danger' : '' }}">
        <label for="sparePartName" class="form-label">Spare Part Name</label>
        {!! Form::text('sparePartName', isset($item) ? $item->sparePartName : '', ['id' => 'sparePartName', 'placeholder' => 'Spare Part Name', 'class' => 'form-control' . ($errors->has('sparePartName') ? ' is-invalid' : ''), 'required' => true]) !!}
        @if($errors->has('sparePartName'))
            <div class="invalid-feedback"> {{ $errors->first('sparePartName') }}</div>
        @endif
    </div>
</div>

<div class="col-md-6 col-lg-6">
    <div class="form-group {{ $errors->has('sparePartType') ? 'has-feedback has-error has-danger' : '' }}">
        <label for="sparePartType" class="form-label">Type</label>
        {!! Form::text('sparePartType', isset($item) ? $item->sparePartType : '', ['id' => 'sparePartType', 'placeholder' => 'Spare Part Type', 'class' => 'form-control' . ($errors->has('sparePartType') ? ' is-invalid' : ''), 'required' => true]) !!}
        @if($errors->has('sparePartType'))
            <div class="invalid-feedback"> {{ $errors->first('sparePartType') }}</div>
        @endif
    </div>
</div>


<div class="col-md-6 col-lg-6">
    <div class="form-group {{ $errors->has('sparePartPrice') ? 'has-feedback has-error has-danger' : '' }}">
        <label for="sparePartPrice" class="form-label">Price</label>
        {!! Form::text('sparePartPrice', isset($item) ? $item->sparePartPrice : '', ['id' => 'sparePartPrice', 'placeholder' => 'Price', 'class' => 'form-control' . ($errors->has('price') ? ' is-invalid' : ''), 'required' => true]) !!}
        @if($errors->has('sparePartPrice'))
            <div class="invalid-feedback"> {{ $errors->first('sparePartPrice') }}</div>
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