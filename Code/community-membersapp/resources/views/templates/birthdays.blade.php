@php
  $birthdayMonth = date('F');
@endphp
<div class="row">
  <div class="col-md-12">
    <h2>@php echo $birthdayMonth; @endphp Birthdays</h2>
  </div>
  @foreach($members as $member)

    @if($member->month === $birthdayMonth)
    <div class="col-md-3 col-sm-6 col-xd-12 pt-3 pb-3">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">{{$member->name}}</h5>
        <p class="card-text">{{$member->month}} {{$member->day}}</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>
    @endif

  @endforeach
</div>