
<table border="1">

@foreach($faq as $row)

 <tr>
<td>{{ $row->No }}</td>

<td>{{ $row->client_name }}</td>

<td>{{ $row->service_name }}</td>

 <td>{{ $row->query_text }}</td>

 <td>{{ $row->cause_text }}</td>

 <td>{{ $row->anser_text }}</td>

 <td>{{ $row->dateandtime }}</td>
 <td>{{ $row->person_name }}</td>

 </tr>

@endforeach



<html>
<body>
    <form action="../" method="get">
        <input type="text" name="name">
        <input type="submit">
    </form>
</body>
</html>
