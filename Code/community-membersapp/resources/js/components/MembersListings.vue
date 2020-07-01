<template>
	<div>
			<div class="row">
				<div class="input-group mb-3">
				  <div class="input-group-prepend">
				    <span class="input-group-text" id="inputGroup-sizing-default">Search Members</span>
				  </div>
				  <input type="text" class="form-control" aria-label="Sizing example input" v-model="search" aria-describedby="inputGroup-sizing-default">
				</div>
			</div>
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
          
              <tr v-for="brother in filteredMembers">
                <th scope="row">{{brother.id}}</th>
                <td>{{brother.name}}</td>
                <td><a :href="`mailto:${brother.email}`">{{brother.email}}</a></td>
                <td><a :href="`tel:${brother.phone}`">{{brother.phone}}</a></td>
                <td><a :href="`https://www.google.com/maps/place/${brother.address1} ${brother.address2}`" target="_blank">{{brother.address1}}, {{brother.address2}}</a></td>
              </tr>
         </tbody>
          </table>
        </div>
    </div>

		</div>
		
</div>
</template>
<script>
	let data = JSON.parse(window.members);
	export default{
		data: function(){
			return{
				search: '',
				membersList: data
			}
		},
		computed:{
			filteredMembers: function(){
				return this.membersList.filter(member=>{
					return member.name.toLowerCase().includes(this.search.toLowerCase())
					console.log(member.length);
				});
			}
		}
	}
</script>