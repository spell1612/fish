<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <table border=1>
       <th>ID</th>
       <th>Tag</th>
       <th>About</th>
       <th>Action</th>
        @foreach($asdf as $a)
            <tr>
            <td>{{$a->id}}</td>
            <td>{{$a->userid}}</td>
            <td>{{$a->password}}</td>
            <td>{{$a->created_at}}</td>
             <td><a href ='/dbdel/{{$a->id}}'><input type=button value=Delete></a></td>
             <!-- <td><a href ='/dbedit/{{$a->id}}'><input type=button value=Edit></a></td> -->
            </tr>

        @endforeach
       </table>
  </body>
</html>
