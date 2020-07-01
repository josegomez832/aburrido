  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
			<div class="row">
        <member-listings></member-listings>
        @foreach($members as $member)
          @php
            $address = $member->address1.' ' .$member->address2;

          @endphp
          <div class="col-md-4 col-sm-6 col-xd-12 pt-3 pb-3">
    				<div class="card">
    				  <div class="card-body">
    				    <h5 class="card-title"><i class="far fa-user"></i> {{$member->name}}</h5>
    				    <h6 class="card-subtitle mb-2 text-muted"><i class="far fa-envelope"></i> <a href="mailto:{{$member->email}}">{{$member->email}}</a></h6>
                <p class="card-text"><i class="fas fa-phone"></i> {{$member->phone}}</p>
    				    <p class="card-text"><i class="fas fa-map-marker-alt"></i> <a href="https://www.google.com/maps/place/@php echo str_replace(' ','+', $address); @endphp" target="_blank">{{$member->address1}}<br />{{$member->address2}}</a></p>
    				  
    				  </div>
    				</div>
          </div>
			@endforeach

    </div>

		</div>