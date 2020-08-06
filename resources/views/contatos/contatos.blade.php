@extends('default')
@section('content')
<style>
  .deleted {
    background-color: #ff6666
  }
</style>

<div class="alert alert-success" style="display: none" id="success-alert">
    <a href="#" class="close" data-dismiss="alert">&times;</a>
    <strong>Success!</strong> Suas alterações foram feitas com sucesso.
</div>

<h1>CRM</h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nome</th>
      <th scope="col">Email</th>
      <th scope="col">Cidade</th>
      <th scope="col">Estado</th>
      <th scope="col">Status</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    @foreach ($crmContacts as $contact)
        @if ($contact->invalid == 0)
          <tr class="{{$contact->status == 0 ? 'deleted':''}}">
            <th scope="row">{{$contact->id}}</th>
            <th scope="row">{{$contact->nome}}</th>
            <th scope="row">{{$contact->email}}</th>
            <th scope="row">{{$contact->cidade}}</th>
            <th scope="row">{{$contact->estado}}</th>
            @if ($contact->status == 1)
            <th scope="row">
              <a class="btn btn-danger" onclick="delete_contact('crm', {{$contact->id}})">Delete</a>
            </th>
            @else
            <th scope="row">
              <a class="btn btn-success" onclick="restore_contact('crm', {{$contact->id}})">Restore</a>
            </th>
            @endif
          </tr>
        @endif
    @endforeach
  </tbody>
</table>

<h1>ERP</h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nome</th>
      <th scope="col">Email</th>
      <th scope="col">Cidade</th>
      <th scope="col">Estado</th>
      <th scope="col">Status</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    @foreach ($erpContacts as $contact)
        @if ($contact->invalid == 0)
          <tr class="{{$contact->status == 0 ? 'deleted':''}}">
            <th scope="row">{{$contact->id}}</th>
            <th scope="row">{{$contact->nome}}</th>
            <th scope="row">{{$contact->email}}</th>
            <th scope="row">{{$contact->cidade}}</th>
            <th scope="row">{{$contact->estado}}</th>
            @if ($contact->status == 1)
            <th scope="row">
              <a class="btn btn-danger" onclick="delete_contact('erp', {{$contact->id}})">Delete</a>
            </th>
            @else
            <th scope="row">
              <a class="btn btn-success" onclick="restore_contact('erp', {{$contact->id}})">Restore</a>
            </th>
            @endif
          </tr>
        @endif
    @endforeach
  </tbody>
</table>

<a class="btn btn-danger" href="{{url('deleteInvalidContacts')}}">Delete all Invalids</a>

@stop

@section('script')
<script type="text/javascript">

  function delete_contact(type, id){
    $.ajax({      
      headers: {
        'X-CSRF-TOKEN': $('meta[name=csrf-token]').attr('content')
      },
      url:  "{{ url('deleteContact') }}" + '/' + type + '/' + id,
      type: 'delete',
      success: function(result) {
        $("#success-alert").fadeTo(2000, 500).slideUp(500, function(){
          $("#success-alert").slideUp(500)        
        })     

        setTimeout(() => {
          location.reload(); 
        }, 1000);
      }
    });    
  }

  function restore_contact(type, id){
    $.ajax({      
      headers: {
        'X-CSRF-TOKEN': $('meta[name=csrf-token]').attr('content')
      },
      url:  "{{ url('restoreContact') }}" + '/' + type + '/' + id,
      type: 'post',
      success: function(result) {
        $("#success-alert").fadeTo(2000, 500).slideUp(500, function(){
          $("#success-alert").slideUp(500)        
        })

        setTimeout(() => {
          location.reload(); 
        }, 1000);
      }
    });    
  }
</script>
@endsection
