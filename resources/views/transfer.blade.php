@extends('layouts.head')

@section('content')
<section id="main-content">
      <section class="wrapper site-min-height">
        <div class="row mt">
          <div class="col-lg-12" style="margin-top:0px; width:100%">
          
          <div class="myform" class="form-control" style="width:800px; margin-left:50px; height:400px; background-color:white; padding:10px; ">
                <form method="post" action="{{ route('transfer') }}" entype="multipart/form-data" style="width:400px; display:block; margin:auto">
                    @csrf
                    <h3 style="text-align:center; color:brown">Wanna make some funds transfer?</h3>
                    @csrf
                      @if(session()->has('message'))
                          <div class="alert alert-sucess">
                              {{ session()->get('message') }}
                          </div>
                      @endif
                    <input type="text" name="transfer" id="transfer" placeholder="Enter Amount to transfer" style="width:100%; border:2px solid brown; padding:8px; display:block; margin:auto; margin-top:40px; margin-bottom:10px" required/>
                    <input type="text" name="username" id="username" placeholder="Enter username of beneficiary" style="width:100%; border:2px solid black; padding:8px; display:block; margin:auto; margin-top:15px; margin-bottom:10px" required/>
                    <button style="width:50%; padding:8px; font-size:17px; display:block; margin:auto; border:0; background-color:black; color:white; margin-top:30px; margin-bottom:10px">
                        {{__('transfer')}}
                    </button>
                </form>
            </div>
        
          </div>
        </div>
      </section>
    </section>
@endsection