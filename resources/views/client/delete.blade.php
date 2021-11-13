<div class="modal fade" id="modal-delete-{{$clientlist->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
  <form action="{{route('client.destroy', $clientlist->id)}}" method="post">
  @csrf 
  @method('DELETE')
  
  
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Client Delete</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        are you sure you want to delete {{$clientlist->first." ".$clientlist->last}}?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-danger" value="Del ">
      </div>
    </div>
    </form>
  </div>
</div>