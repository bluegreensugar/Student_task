@extends ('_layout')

@section ('content')
<table class="table table-bordered table-dark">
     <thead>
             <th>Название</th>
             <th>Описание</th>
             <th>Оценка по информатике</th>
             <th>Оценка по матиматике</th>
             <th>Оценка по графике</th>
             
       </thead>
       <tbody>
            <thead class="thead-dark">
          <tr>
             @foreach($groups as $group)
                  <tr>
                      <td><div class="body">{{$group->title}}</div></td>
                      <td><div class="body">{{$group->description}}</div></td>
                      <td><div class="body">{{$group->avg_prog}}</div></td>
                      <td><div class="body">{{$group->avg_math}}</div></td>
                      <td><div class="body">{{$group->avg_graf}}</div></td>
                      
                      <td>
                           <form action="{{ route('groups.show', $group) }}"method="GET">
                           @csrf 
                           <button type="submit" class="btn btn-primary">
                               <i class="fa fa-id-card"></i>
                           </button>
                           </form>
                      </td>
                      <td>
                           <form action="{{route('groups.destroy',$group)}}" method="POST">
                           @csrf 
                           @method('DELETE')
                           <button type="submit" class="btn btn-danger">
                               <i class="fa fa-trash"></i>
                           </button>
                           </form>
                      </td>
                      <td>
                            <form action="{{ route('groups.create') }}" method="GET">
                                @csrf
                                <button type="submit" class="btn btn-success">
                                    <i class="fas fa-user-plus"></i>
                                </button>
                            </form>
                        </td>
                      
                  </tr>
             @endforeach
          </tr>
       </tbody>
    </table>
    @endsection