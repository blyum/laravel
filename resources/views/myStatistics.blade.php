
<a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>

<table>
    <th>Provider_id</th>
    <th>Total_time</th>
    <th>earnings</th>
@foreach($order as $row)
    <tr>
        <td> {{$row ->provider_id}} </td>
        <td> {{$row ->total_time}} </td>
        <td> {{$row ->earnings}} </td>
    </tr>
@endforeach
</table>
