   <!-- Button trigger modal -->
   <button hx-post="{{ url('api/txtai_apply') }}" hx-trigger="click once" hx-target="#txtai_res" hx-swap="innerHTML"
       type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal">
       Launch demo modal
   </button>

   <!-- Modal -->
   <div class="modal fade mt-5" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
       <div class="modal-dialog">
           <div class="modal-content">
               <div class="modal-header">
                   <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                   <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <div class="modal-body">
                   rewrwerwe
                   <div id="txtai_res">

                   </div>
               </div>
               <div class="modal-footer">
                   <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                   <button type="button" class="btn btn-primary">Save changes</button>
               </div>
           </div>
       </div>
   </div>

   <table class="table table-bordered">
       <thead>
           <tr>
               <th>Name</th>
               <th>Price</th>
               <th>Review</th>
           </tr>
       </thead>
       <tbody id="amp_entries">
           @foreach ($qrd_amp as $amp)
               <tr>
                   <td>{{ $amp->Model }}</td>
                   <td>{{ $amp->Price }}</td>
                   <td>{{ $amp->Review }}</td>
               </tr>
           @endforeach

       </tbody>
   </table>
