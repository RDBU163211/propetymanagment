@extends('layouts.app') 
@section('content') 
<div class="container"> 
 <div class="row justify-content-center"> 
 <div class="col-md-8"> 
 <div class="card"> 
 <div class="card-header">{{ __('PLEACE REGISTER YOUR custemer') }}</div> 
 <div class="card-body"> 
 <form method="POST" action="{{ route('custemer/register') }}" 
> 
 @csrf 
 <div class="form-group row"> 
 <label for="c_lname" class="col-md-4 col-formlabel text-md-right">{{ __('c_lname') }}</label> 
 <div class="col-md-6"> 
 <input id="c_lname" type="text" class="formcontrol @error('c_lname') isinvalid @enderror" c_lname="c_lname" value="{{ old('c_lname') }}" required autocomplete=" 
c_lname" autofocus> 
 @error('c_lname') 
 <span class="invalid-feedback" role="alert"> 
 <strong>{{ $message }}</strong> 
 </span> 
 @enderror 
 </div> 
 </div> 
 <div class="form-group row"> 
 <label for="c_fname" class="col-md-4 col-formlabel text-md-right">{{ __('c_fname') }}</label> 
 <div class="col-md-6"> 
 <input id="c_fname" type="text" class="formcontrol @error('c_fname') isinvalid @enderror" c_lname="c_fname" value="{{ old('c_fname') }}" required autocomplete 
="c_fname"> 
 @error('c_fname') 
 <span class="invalid-feedback" role="alert"> 
 <strong>{{ $message }}</strong> 
 </span> 
 @enderror 
 </div> 
 </div 
 @csrf 
 <div class="form-group row"> 
 <label for="c_sex" class="col-md-4 col-formlabel text-md-right">{{ __('c_sex') }}</label> 
 <div class="col-md-6"> 
 <input id="c_sex" type="text" class="formcontrol @error('c_sex') isinvalid @enderror" c_lname="c_sex" value="{{ old('c_sex') }}" required autocomplete 
="c_sex"> 
 @error('c_sex') 
 <span class="invalid-feedback" role="alert"> 
 <strong>{{ $message }}</strong> 
 </span> 
 @enderror 
 </div> 
 </div> 
 <div class="form-group row"> 
 <label for="c_brithdate" class="col-md-4 col-formlabel text-md-right">{{ __('c_brithdate') }}</label> 
 <div class="col-md-6"> 
 <input id="c_brithdate" type="text" class="formcontrol @error('c_brithdate') isinvalid @enderror" c_lname="c_brithdate" value="{{ old('c_brithdate') }}" required autocomplete 
="c_brithdate"> 
 @error('c_brithdate') 
 <span class="invalid-feedback" role="alert"> 
 <strong>{{ $message }}</strong> 
 </span> 
 @enderror 
 </div> 
 </div> 
 <div class="form-group row"> 
 <label for="c_email" class="col-md-4 col-formlabel text-md-right">{{ __('c_email') }}</label> 
 <div class="col-md-6"> 
 <input id="c_email" type="text" class="formcontrol @error('c_email') isinvalid @enderror" c_lname="c_email" value="{{ old('c_email') }}" required autocomplete 
="c_email"> 
 @error('c_email') 
 <span class="invalid-feedback" role="alert"> 
 <strong>{{ $message }}</strong> 
 </span> 
 @enderror 
 </div> 
 </div> 

 <div class="form-group row"> 
 <label for="c_phone" class="col-md-4 col-formlabel text-md-right">{{ __('c_phone') }}</label> 
 <div class="col-md-6"> 
 <input id="c_phone" type="text" class="formcontrol @error('c_phone') isinvalid @enderror" c_lname="c_phone" value="{{ old('c_phone') }}" required autocomplete 
="c_phone"> 
 @error('c_phone') 
 <span class="invalid-feedback" role="alert"> 
 <strong>{{ $message }}</strong> 
 </span> 
 @enderror 
 </div> 
 </div> 
 <div class="form-group row mb-0"> 
 <div class="col-md-6 offset-md-4"> 
 <button type="submit" class="btn btn-primary"> 
 {{ __('Register') }} 
 </button> 
 </div> 
 </div> 
 </form> 
 </div> 
 </div> 
 </div> 
 </div> 
</div> 
@endsectionr