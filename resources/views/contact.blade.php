<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<div class="container">
<h1 class="text-center">Tat ca lien he</h1>
<form action="" method="GET">
    <input type="text" name="q" class="form-control" placeholder="Nhap tu khoa...">
    <button type="submit" hidden></button>
</form>
<br>
<table class="table table-bordered table-hover text-center">
    <tr class="table-info">
        <td>ID</td>
        <td>Avatar</td>
        <td>Name</td>
        <td>Phone</td>
    </tr>
    @forelse ($contacts as $contact)
    <tr>
        <td>{{$contact->id}}</td>
        <td>
            <img width="100px" src="{{$contact->avatar}}" alt="">
        </td>
        <td>{{$contact->name}}</td>
        <td>{{$contact->phone}}</td> 
        @empty
        <td>Khong co du lieu</td> 
    </tr>
    @endforelse
</table>
</div>
</body>
</html>
