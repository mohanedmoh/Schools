<td>

    <div class="media-status">
    <span
        @if($data['operation']['id']==1)  class="badge badge-default" @endif
    @if($data['operation']['id']==2) class="badge badge-success" @endif
        @if($data['operation']['id']==5) class="badge badge-danger" @endif
    >{{$data['operation']['title']}}</span>
    </div>
</td>
