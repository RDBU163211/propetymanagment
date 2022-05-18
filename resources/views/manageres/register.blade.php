@extends('layouts.app') 
@section('content') 
<div class="container"> 
 <div class="row justify-content-center"> 
 <div class="col-md-8"> 
 <div class="card"> 
 <div class="card-header">{{ __('PLEACE REGISTER YOUR manager') }}</div> 
 <div class="card-body"> 
 <form method="POST" action="{{ route('manager/register') }}" 
> 
 @csrf 
 <div class="form-group row"> 
 <label for="pm_lname" class="col-md-4 col-formlabel text-md-right">{{ __('pm_lname') }}</label> 
 <div class="col-md-6"> 
 <input id="pm_lname" type="text" class="formcontrol @error('pm_lname') isinvalid @enderror" pm_lname="pm_lname" value="{{ old('pm_lname') }}" required autocomplete=" 
pm_lname" autofocus> 
 @error('pm_lname') 
 <span class="invalid-feedback" role="alert"> 
 <strong>{{ $message }}</strong> 
 </span> 
 @enderror 
 </div> 
 </div> 
 <div class="form-group row"> 
 <label for="pm_fname" class="col-md-4 col-formlabel text-md-right">{{ __('pm_fname') }}</label> 
 <div class="col-md-6"> 
 <input id="pm_fname" type="text" class="formcontrol @error('pm_fname') isinvalid @enderror" pm_lname="pm_fname" value="{{ old('pm_fname') }}" required autocomplete 
="pm_fname"> 
 @error('pm_fname') 
 <span class="invalid-feedback" role="alert"> 
 <strong>{{ $message }}</strong> 
 </span> 
 @enderror 
 </div> 
 </div 
 @csrf 
 <div class="form-group row"> 
 <label for="pm_sex" class="col-md-4 col-formlabel text-md-right">{{ __('pm_sex') }}</label> 
 <div class="col-md-6"> 
 <input id="pm_sex" type="text" class="formcontrol @error('pm_sex') isinvalid @enderror" pm_lname="pm_sex" value="{{ old('pm_sex') }}" required autocomplete 
="pm_sex"> 
 @error('pm_sex') 
 <span class="invalid-feedback" role="alert"> 
 <strong>{{ $message }}</strong> 
 </span> 
 @enderror 
 </div> 
 </div> 
 <div class="form-group row"> 
 <label for="pm_brithdate" class="col-md-4 col-formlabel text-md-right">{{ __('pm_brithdate') }}</label> 
 <div class="col-md-6"> 
 <input id="pm_brithdate" type="text" class="formcontrol @error('pm_brithdate') isinvalid @enderror" pm_lname="pm_brithdate" value="{{ old('pm_brithdate') }}" required autocomplete 
="pm_brithdate"> 
 @error('pm_brithdate') 
 <span class="invalid-feedback" role="alert"> 
 <strong>{{ $message }}</strong> 
 </span> 
 @enderror 
 </div> 
 </div> 
 <div class="form-group row"> 
 <label for="pm_email" class="col-md-4 col-formlabel text-md-right">{{ __('pm_email') }}</label> 
 <div class="col-md-6"> 
 <input id="pm_email" type="text" class="formcontrol @error('pm_email') isinvalid @enderror" pm_lname="pm_email" value="{{ old('pm_email') }}" required autocomplete 
="pm_email"> 
 @error('pm_email') 
 <span class="invalid-feedback" role="alert"> 
 <strong>{{ $message }}</strong> 
 </span> 
 @enderror 
 </div> 
 </div> 

 <div class="form-group row"> 
 <label for="pm_phone" class="col-md-4 col-formlabel text-md-right">{{ __('pm_phone') }}</label> 
 <div class="col-md-6"> 
 <input id="pm_phone" type="text" class="formcontrol @error('pm_phone') isinvalid @enderror" pm_lname="pm_phone" value="{{ old('pm_phone') }}" required autocomplete 
="pm_phone"> 
 @error('pm_phone') 
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