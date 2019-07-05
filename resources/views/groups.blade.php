<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/c7f8e5d76f.js"></script>
</head>
<body>
    <table class="table table-sm">
    <table>
        <thead>
            <th>Название</th>
            <th>Описание</th>
            <th>Оценка по информатике</th>
            <th>Оценка по матиматике</th>
            <th>Оценка по графике</th>
            

        </thead>
        <tbody>
            <tr>
                @foreach ( $groups as $group )
                    
              
                    <tr>
                    <td><div class="body">{{$group->title}}</div></td>
                    <td><div class="body">{{$group->description}}</div></td>
                    <td><div class="body">{{$group->avg_prog}}</div></td>
                    <td><div class="body">{{$group->avg_math}}</div></td>
                    <td><div class="body">{{$group->avg_graf}}</div></td>
                    
                    <td>
                    <form action="{{route('groups.show', $group)}}" method="GET">
                          @csrf
                          <button type="submit" class="bit btn-primary">
                            <i class="fa fa-id-card"></i>
                          </button>
 
                        </form>
 
                    </td>
                        <td>
                            <form action="" method="POST">
                              @csrf
                              @method('DETELE')
                              <button type="submit" class="bit btn-danger">
                                <i class="fa fa-trash"></i>
                              </button>
     
                            </form>
     
                         </td>
                    </tr>
                      @endforeach
            </tr>
            
            

        </tbody>
    </table>
  </table>
</body>

</html>
