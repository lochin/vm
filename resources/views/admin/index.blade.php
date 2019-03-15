@extends('layouts.app')

@section('content')
<div class="container my-3">
    <div class="row justify-content-center">
        <ul class="list-group w-100">
            @foreach($applies as $key => $apply)
            <li class="list-group-item list-group-item-action my-2" onclick="showModal({{ $apply->id }})" data-toggle="modal" data-target="#modal">
                <div class="row">
                <div class="md-v-line"></div>
                    <div class="col-sm-2">
                        <span class="text-nowrap">
                            <b>{{ $applies->total() - ($key+($applies->currentPage()-1)*$applies->perPage()) }}. </b>
                            <i id="status{{$apply->id}}" class="{{ ($apply->status == 1) ? 'fab fa-readme text-success' : 'fas fa-book text-danger'}} mr-4 pr-3"></i>
                        </span>
                    </div>
                    <div class="col">
                        <div class="row">
                            <div class="col">
                                <span>{{ $apply->firstname.' '.$apply->lastname }}</span>
                            </div>
                            <div class="col-sm-7">
                                <span>{{ $apply->region.' '.$apply->district }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            @endforeach
        </ul>
        {{ $applies->links() }}
    </div>
</div>
    <!-- Modal -->
    <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
         aria-hidden="true">

        <!-- Add .modal-dialog-centered to .modal-dialog to vertically center the modal -->
        <div class="modal-dialog modal-dialog-centered modal-xl" role="document">

            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><i class="fas fa-user-alt text-primary"></i> <span id="modalFullname"></span></h5>
                    <h5 class="modal-title ml-auto"><i class="fas fa-map-marker-alt text-primary"></i> <span id="modalAddress"></span></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row ml-3">
                        <div class="col">
                            <i class="fas fa-mobile-alt text-primary"></i> <small id="modalPhone"></small>
                        </div>
                        <div class="col">
                            <i class="far fa-envelope text-primary"></i> <small id="modalEmail">jobiryusupov0@gmail.com</small>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col m-3" id="modalText">

                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
<script>
    function showModal(id) {
        $.ajax({
            type:'GET',
            url:'/admin/'+id,
            data:'_token = <?php echo csrf_token() ?>',
            success:function(data) {
                $("#modalFullname").text(data.apply.firstname+' '+data.apply.lastname);
                $("#modalAddress").text(data.apply.region+' '+data.apply.district);
                $("#modalPhone").text(data.apply.phone);
                $("#modalEmail").text(data.apply.email);
                $("#modalText").text(data.apply.message);
                $("#status"+id).attr("class", "fab fa-readme text-success");
            }
        });
    }
</script>
@endsection
