@extends('layouts.head')

@section('content')
<section id="main-content">
      <section class="wrapper site-min-height">
        <div class="row mt">
          <div class="col-lg-12" style="margin-top:0px; width:100%">
          
          <div class="myform" class="form-control" style="width:800px; margin-left:50px; height:400px; background-color:white; padding:10px; ">
                <form method="post" action="{{route('withdraw')}}" entype="multipart/form-data" style="width:400px; display:block; margin:auto">
                    @csrf
                      @if(session()->has('message'))
                          <div class="alert alert-sucess">
                              {{ session()->get('message') }}
                          </div>
                      @endif
                    <h3 style="text-align:center; color:brown">Withdraw with ease!</h3>
                    <input type="number" name="withdraw" id="withdraw" Value="{{Auth::user()->withdrawable}}" style="width:100%; border:1px solid brown; padding:8px; display:block; margin:auto; margin-top:40px; margin-bottom:10px" required />
                    <!--<input type="password" name="password" id="password" placeholder="Enter password" style="width:100%; border:2px solid black; padding:8px; display:block; margin:auto; margin-top:15px; margin-bottom:10px" required/>-->
                    <button style="width:50%; padding:8px; font-size:17px; display:block; margin:auto; border:0; background-color:black; color:white; margin-top:30px; margin-bottom:10px">
                        {{__('withdraw')}}
                    </button>
                </form>
            </div>
        
          </div>
        </div>
      </section>
    </section>
@endsection