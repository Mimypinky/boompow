@foreach($accounts as $account)
  {{$account->username}}
<form action='{{url('acceptFriend')}}' method='post'>
  <input type="hidden" value="{{$account->id}}" name='rid'>
  {{ csrf_field()}}
  <input type="submit" value="Accept">
</form>
  <br>
@endforeach
