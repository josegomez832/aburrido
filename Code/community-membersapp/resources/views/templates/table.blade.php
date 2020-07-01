  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
			<div class="row">
        <div class="table-responsive">
        <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Address</th>
              </tr>
            </thead>
            <tbody>
        @foreach($members as $member)
          @php
            $address = $member->address1.' ' .$member->address2;
          @endphp
          
              <tr>
                <th scope="row">{{$member->id}}</th>
                <td>{{$member->name}}</td>
                <td>{{$member->email}}</td>
                <td>{{$member->phone}}</td>
                <td>{{$member->address1}}, {{$member->address2}}</td>
              </tr>
             @endforeach
         </tbody>
          </table>
        </div>
    </div>

		</div>