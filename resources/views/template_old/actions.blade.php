<a href="{{route('mainService_show',Crypt::encrypt($data->id))}}" data-toggle="tooltip" data-placement="top"
   title="Show Data" class="btn btn-icon-only btn-primary"><span class="icon-book-open"></span></a>
<a href="{{url('/companions',Crypt::encrypt($data->id))}}" data-toggle="tooltip" data-placement="top"
   title="Manage Companions Data" class='btn btn-icon-only purple'><span class='icon-users'></span></a>
<a href="{{route('packages',Crypt::encrypt($data->id))}}" data-toggle="tooltip" data-placement="top" title="Packages"
   class="btn btn-icon-only blue-hoki"><span class="fa fa-gift fa-fw"></span></a>
<button data-toggle="modal" data-target="#confirmation" data-placement="top" title="Get Bags"
        class="btn btn-icon-only btn-defalut" onclick="confirmFun('{{$data->id}}',2);"><span
        class="fa fa-briefcase fa-fw"></span></button>
@if( $data->paid==0)
    <!--
    Auth::user()->level!=1 &&
    -->
    @if($data->payment_method==1)
        <a href="{{route('request_payment',Crypt::encrypt($data->id))}}" data-toggle="tooltip" data-placement="top"
           title="Payment" class="btn btn-icon-only btn-success"><span class="fa fa-money fa-fw"></span></a>
    @else
        <button data-toggle="modal" data-target="#confirmation" data-placement="top" title="Mark as paid"
                class="btn btn-icon-only btn-success" onclick="confirmFun('{{$data->id}}',4)"><span
                class="fa fa-money fa-fw"></span></button>
    @endif
@endif
<button data-toggle="modal" data-target="#confirmation" data-placement="top" title="Request is stuck"
        class="btn btn-icon-only dark " onclick="confirmFun('{{$data->id}}',5)"><span
        class="fa fa-thumbs-down fa-fw"></span></button>
<button data-toggle="modal" data-target="#confirmation" data-placement="top" title="Request Completed "
        class="btn btn-icon-only green-jungle " onclick="confirmFun('{{$data->id}}',3)"><span
        class="fa fa-check fa-fw"></span></button>
<button data-toggle="modal" data-target="#confirmation" data-placement="top" title="Delete"
        class="btn btn-icon-only btn-danger" onclick="confirmFun('{{$data->id}}',0)"><span
        class="fa fa-times fa-fw"></span></button>

@if(Auth::user()->level==3)
    <a href="{{route('mainService_Log',Crypt::encrypt($data->id))}}" data-toggle="tooltip" data-placement="top"
       title="Show Log" class="btn btn-icon-only yellow-gold"><span class="fa fa-file-text"></span></a>
@endif


<button data-toggle="modal" data-target="#confirmation" data-placement="top" title="Request Exit Visa "
        class="btn btn-icon-only grey-gallery " onclick="confirmFun('{{$data->id}}',8)"><span
        class="fa fa-check fa-file"></span></button>
<button data-toggle="modal" data-target="#confirmation" data-placement="top" title="Request National Service Card "
        class="btn btn-icon-only yellow-soft " onclick="confirmFun('{{$data->id}}',9)"><span
        class="fa fa-check fa-clone"></span></button>
<button data-toggle="modal" data-target="#confirmation" data-placement="top" title="Request Yellow Fever Card"
        class="btn btn-icon-only blue " onclick="confirmFun('{{$data->id}}',10)"><span
        class="fa fa-check fa-sticky-note"></span></button>

<!--
<a  href="{{route('visas_add',Crypt::encrypt($data->id))}}" data-toggle="tooltip" data-placement="top" title="Request Exit Visa" class="btn btn-icon-only grey-gallery" ><span class="fa fa-file"></span></a>
<a  href="{{route('ns_add',Crypt::encrypt($data->id))}}" data-toggle="tooltip" data-placement="top" title="Request National Service Card" class='btn btn-icon-only yellow-soft' ><span class='fa fa-clone'></span></a>
<a  href="{{route('yfcards_add',Crypt::encrypt($data->id))}}" data-toggle="tooltip" data-placement="top" title="Request Yellow Fever Card" class="btn btn-icon-only blue" ><span class="fa fa-sticky-note"></span></a>
-->
