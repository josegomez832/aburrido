<template>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
			<div class="row">
        <div class="table-responsive">
        <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Birthday</th>
              </tr>
            </thead>
            <tbody>
          
              <tr v-for="birthday in membersList">
                <th scope="row">{{birthday.id}}</th>
                <td>{{birthday.name}}</td>
                <td>{{birthday.month}} {{birthday.day}}</td>
              </tr>
         </tbody>
          </table>
        </div>
    </div>

		</div>
</template>
<script>
	let data = JSON.parse(window.members);
	export default{
		data: function(){
			return{
				membersList: data,

			}
		},
		methods:{
			now: function(){
				var d = new Date();
				var month = new Array();
				var n = month[d.getMonth()];
				return n
			}
		}
	}
</script>