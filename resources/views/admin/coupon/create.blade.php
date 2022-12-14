@extends('master')

@section('content')
<section class="section">
    @include('admin.layout.breadcrumbs', [
        'title' => __('Add Coupon'),  
        'headerData' => __('Coupon') ,
        'url' => 'coupon' ,          
    ]) 

    <div class="section-body">
        <div class="row">
            <div class="col-lg-8"><h2 class="section-title"> {{__('Add Coupon')}}</h2></div>            
        </div>       
       
        <div class="row">
            <div class="col-12">
              <div class="card">     
                <div class="card-body">
                    <form method="post" action="{{url('coupon')}}" enctype="multipart/form-data" >
                        @csrf
                      
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>{{__('Name')}}</label>
                                    <input type="text" name="name" placeholder="{{__('Name')}}" value="{{old('name')}}" class="form-control @error('name')? is-invalid @enderror">
                                    @error('name')
                                        <div class="invalid-feedback">{{$message}}</div>
                                    @endif
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>{{__('Event')}}</label>
                                    <select name="event_id" class="form-control select2">
                                        <option value="">{{ __('Select Event') }}</option>
                                        @foreach ($event as $item)
                                        <option value="{{$item->id}}" {{$item->id == old('event_id') ? 'Selected': ''}}>{{$item->name}}</option>
                                        @endforeach
                                    </select>
                                    @error('event_id')
                                        <div class="invalid-feedback block">{{$message}}</div>
                                    @endif
                                </div>                                
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>{{__('Discount (In percentage)')}}</label>
                                    <input type="number" min="1" max="100" name="discount" placeholder="{{__('Discount')}}" value="{{old('discount')}}" class="form-control @error('discount')? is-invalid @enderror">
                                    @error('discount')
                                        <div class="invalid-feedback">{{$message}}</div>
                                    @endif
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>{{__('Maximum Use')}}</label>
                                    <input type="number" min="1" name="max_use" placeholder="{{__('Maximum Use')}}" value="{{old('max_use')}}" class="form-control @error('max_use')? is-invalid @enderror">
                                    @error('max_use')
                                        <div class="invalid-feedback">{{$message}}</div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>{{__('Start Date')}}</label>
                                    <input type="text"  name="start_date" placeholder="{{__('Start Date')}}" id="start_date" value="{{old('start_date')}}" class="form-control date @error('start_date')? is-invalid @enderror">
                                    @error('start_date')
                                        <div class="invalid-feedback">{{$message}}</div>
                                    @endif
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>{{__('End Date')}}</label>
                                    <input type="text" name="end_date" placeholder="{{__('End Date')}}" id="end_date" value="{{old('end_date')}}" class="form-control date @error('end_date')? is-invalid @enderror">
                                    @error('end_date')
                                        <div class="invalid-feedback">{{$message}}</div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>{{__('Description')}}</label>
                            <textarea name="description" class="form-control @error('description')? is-invalid @enderror"  placeholder="{{__('Description')}}">{{old('description')}}</textarea>
                               
                            @error('description')
                                <div class="invalid-feedback">{{$message}}</div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>{{__('status')}}</label>
                            <select name="status" class="form-control select2">
                                <option value="1">{{ __('Active') }}</option>
                                <option value="0">{{ __('Inactive') }}</option>
                            </select>
                            @error('status')
                                <div class="invalid-feedback">{{$message}}</div>
                            @endif
                        </div>
                        
                        <div class="form-group">                            
                            <button type="submit" class="btn btn-primary">{{__('Submit')}}</button>                            
                        </div>
                    </form>
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>
@endsection
